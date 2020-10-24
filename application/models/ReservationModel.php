<?php
class ReservationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();   
    }
    public function createReservation($data)
    {
    //     array(
    //         'payment'=>array(
    //                     'paymentType'=>'',
    //                     'orderId'=>'',
    //                     'discount'=>'',
    //                     'amount'=>'',
    //                     'mobile'=>'',
    //                     'email'=>'',
    //                     'firstName'=>'',
    //                     'lastName'=>'',
    //         ),
    //         'appointmentDate'=>'',
    //         'totalDuration'=>'',
    //         'endDate'=>'',
    //         'employeeId'=>'',
    //         'reservations'=>array(
    //             'storeId'=>'',
    //             'serviceId'=>'',
    //             'offerId'=>'',
    //             'customerId'=>'',
    //             'reservationsStatus'=>'',
    //             'totalCost'=>'',
    //             'paymentMethod'=>''
    //         )

    // );
      if($this->payment($data['payment']))
      {
        //find start date and end date
        $tempDateTime = new DateTime($data['appointmentDate']);
        $tempDateTime->modify('+' . $data['totalDuration'] . ' minutes');
        $endDate = $tempDateTime->format('Y-m-d H:i:s');
        if(!$this->getReservation($data['employeeId'],$data['appointmentDate'],$endDate))
        {
            return false;
        }
        $reservationsData=array(
            'employeeId'=>'',
            'reservations'=>array(
            'storeId'=>$data['reservations']['storeId'],
            'serviceId'=>$data['reservations']['serviceId'],
            'offerId'=>$data['reservations']['offerId'],
            'customerId'=>$data['reservations']['customerId'],
            'reservationsStatus'=>$data['reservations']['reservationsStatus'],
            'totalCost'=>$data['reservations']['totalCost'],
            'paymentMethod'=>$data['reservations']['paymentMethod'],
            'appointmentDate'=>$data['appointmentDate'],
            'endDate'=>$data['endDate'],
            'totalDuration'=>$data['totalDuration'],
        ));
        $this->createOrUpdateReservationsTransaction($reservationsData,false);
      }
    }
    public function payment($payment=array())
    {
     if($payment['paymentType'] != 'credit' && $payment['paymentType'] != 'sadad') {
        return false;
     }else{
        if($payment['paymentType'] == 'sadad' || $payment['paymentType'] == 'credit') {
            $paramsAreFilled = !empty($payment['orderId']) && !empty($payment['discount']) && !empty($payment['amount']) && !empty($payment['mobile']) && !empty($payment['email']) && !empty($payment['firstName']) && !empty($payment['lastName']);
            if(!$paramsAreFilled) {
                return false;
            }
            if($payment['paymentType'] == 'sadad') {
                if(empty($sadadId)){
                   return false;
                }   
            }
            elseif($payment['paymentType'] == 'credit') {
                $creditParamsFilled = !empty($cardNumber) && !empty($cardExpiry) && !empty($ccv);
                if(!$creditParamsFilled){
                   return false;   
                }
            }
        }
      }
    }
    public function getReservation($employeeId,$startDate,$endDate)
    {
      $this->db->select("reservations.reservationId, reservations.appointmentDate as `start_date`,DATE_ADD(reservations.appointmentDate, INTERVAL reservations.totalDuration MINUTE) AS `end_date`")
                ->join('reservation_services', 'reservation_services.reservationId=reservations.reservationId', 'join')
                ->where(array('reservation_services.employeeId'=>$employeeId,'reservations.status!=.reservations'=>'cancelled','reservations.status!='=>'rejected'))
                 ->having("(`start_date` < '$endDate' AND `end_date` > '$startDate')
                 OR (`start_date` > '$endDate' AND `start_date` < '$startDate' AND `end_date` < '$startDate')
                 OR (`end_date` < '$startDate' AND `end_date` > '$endDate' AND `start_date` < '$endDate')
                 OR (`start_date` > '$endDate' AND `start_date` < '$startDate')");
                $query = $this->db->get('reservations');
                return $query->row_array();
    }
    public function getReservationsClosed($employeeId,$startDate,$endDate)
    {
        $this->db->select("reservations_closed.reservationId, reservations_closed.appointmentDate as `start_date`,DATE_ADD(reservations_closed.appointmentDate, INTERVAL reservations_closed.totalDuration MINUTE) AS `end_date`")
                 ->join('clinic_services', 'clinic_services.reservationId=reservations_closed.reservationId', 'join')
                 ->where(array('clinic_services.employeeId'=>$employeeId,'reservations_closed.status!=.reservations'=>'cancelled','reservations_closed.status!='=>'rejected'))
                 ->having("(`start_date` < '$endDate' AND `end_date` > '$startDate')
                        OR (`start_date` > '$endDate' AND `start_date` < '$startDate' AND `end_date` < '$startDate')
                        OR (`end_date` < '$startDate' AND `end_date` > '$endDate' AND `start_date` < '$endDate')
                        OR (`start_date` > '$endDate' AND `start_date` < '$startDate')");
        $query = $this->db->get('reservations_closed');
        return $query->row_array();
    }
    public function createOrUpdateReservationsTransaction($data,$is_update)
    {
        //$clinicId, $employeeId, $serviceId, $offerId, $this->_clientId, "pending", $appointmentDate, $totalDuration, $totalCost, $paymentType
        $reservationId=$this->createOrUpdateReservations($data['reservations'],$is_update);
        $reservationService=array(
            'reservationId'=>$reservationId,
            'storeEmployeeId'=>$data['employeeId'],
            'storeServicesId'=>$data['reservations']['serviceId'],
        );
        $this->createServiceToReservation($reservationService);
    }
    public function createOrUpdateReservations($data,$is_update){
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('reservationId', $data['reservationId']);
            if($this->db->update('reservations'))
            {
                return $data['reservationId'];
            }
        }else { 
            $this->db->insert('reservations'); 
            return $this->db->insert_id();
        }
    }
    public function createServiceToReservation($data)
    {
        $this->db->set($data);
        $this->db->insert('reservation_services'); 
        return $this->db->insert_id();
    }

}