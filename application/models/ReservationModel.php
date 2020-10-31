<?php
class ReservationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();   
        $this->load->model(array('StoreModel'));
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
    public function getAvailableTimes($data)
    {
        // array structure
        $data=array(
            'storeId'=>$storeId,
            'storeLocationId'=>$storeLocationId,
            'selectDate'=>'',
            'serviceDuration'=>'',
        );
        //busy time
      if($storeTimeDetails=$this->StoreModel->getStoreLocationDetailsByStoreIdWithStoreLocationId($storeId,$storeLocationId))
      {
        $timings=$this->availableTimes($storeTimeDetails['workingtimes']);
        $timeArr = array();
        $interval = DateInterval::createFromDateString("15 minutes");
        $busyTimes = array();
       //busyTime code pending
        return $this->getRealAvailableTimesForAll($busyTimes, $serviceDuration, $selectDate, $timings, $lockedPeriod=0);
      }else{
          return true;
      }
    }
    public function availableTimes($data)
    {
        $result = [];
        $arr = explode("|", $str);
        for ($i = 0; $i < count($arr); $i++) {
            $ele = $this->splitAndBringOneTiming($arr[$i]);
            if ($ele != null) {
                $result[$ele['day']] = $ele;
            }
        }
        return $result;
    }
    public function splitAndBringOneTiming($str) {
        $dayAndTime = explode('->', $str);
        $periods = explode('&', $dayAndTime[1]);
        $times = explode('-', $periods[0]);
        if(isset($periods[1])) {
            $times2 = explode('-', $periods[1]);
            $from2 = $times2[0];
            $to2 = $times2[1];
        }
        else {
            $from2 = null;
            $to2 = null;
        }
        $day = $dayAndTime[0];
        $from = $times[0];
        $to = $times[1];
        return ['day' => $day, 'from' => $from, 'to' => $to, 'from2' => $from2, 'to2' => $to2];
    }
    // public function getRealBusyTimes($appointmentDate, $employeeId, $clinicId, $totalDuration){
	// 	$bindArray = array(
	// 		"appointmentDate" => "$appointmentDate",
	// 		"appointmentDate2" => "$appointmentDate",
	// 		"employeeId" => "$employeeId",
	// 		"employeeId2" => "$employeeId",
	// 		"clinicId" => "$clinicId",
	// 		"totalDuration" => "$totalDuration",
	// 		"totalDuration2" => "$totalDuration",
	// 	);
	// 	$this->dbo->bindMore($bindArray);
	// 	$sql = "	SELECT TIME(r.appointmentDate - INTERVAL :totalDuration MINUTE) as fromtime, DATE_ADD(TIME(r.appointmentDate), INTERVAL r.totalDuration MINUTE) AS totime 
    //             	FROM reservations as r
    //             	INNER JOIN reservation_services as rs
    //             	ON r.reservationId = rs.reservationId
    //             	AND rs.employeeId=:employeeId
    //             	AND DATE(r.appointmentDate)=DATE(:appointmentDate)
    //             	AND r.status!='cancelled' 
	// 				AND r.status!='rejected'
	// 			UNION 
	// 				SELECT TIME(r.appointmentDate - INTERVAL :totalDuration2 MINUTE) as fromtime, DATE_ADD(TIME(r.appointmentDate), INTERVAL r.totalDuration MINUTE) AS totime 
    //             	FROM reservations_closed as r
	// 				INNER JOIN `clinic_services` as cs
	// 				ON cs.serviceId = r.serviceId
	// 				AND cs.clinicId = :clinicId
	// 				WHERE DATE(r.appointmentDate)=:appointmentDate2
	// 				AND (r.employeeId = :employeeId2 OR r.employeeId = 0)
	// 				ORDER BY fromtime ASC";
	// 	return $this->dbo->query($sql);
    // }
    
    public function getRealAvailableTimesForAll($busyTimes, $serDuration, $selDate, $timings, $lockedPeriod=0) {
        $minutes = 15; //steps of available times e.g. 1:00, 1:15, 1:30 etc..
        $availableTimes = array();
        $firstAvailbleTimes = array();
        $secondAvailbleTimes = array();
        $selDateObj = new DateTime($selDate);
        
        $selDayNumber = $selDateObj->format('w'); //week day number from 0-6 	0:sunday 6:saturday
        if (!isset($timings[$selDayNumber])) {
            return array();
        }
        //get workingtimes filtered by locked period (each clinic has locked_period which lock times by hours from current datetime forwards)
        $filteredTimes = $this->filterWorkingTimesByLockedPeriod($selDate, $timings, $lockedPeriod, $minutes);
        if($filteredTimes == null) {
            return array();
        }
        // $firstPeriodStart = $timings[$selDayNumber]['from']; //get the start of working time of the selected day 
        // $firstPeriodEnd = $timings[$selDayNumber]['to']; //get the end of working time of the selected day 
        $firstPeriodStart = $filteredTimes['from'];
        $firstPeriodEnd = $filteredTimes['to'];
        $begin = new DateTime($firstPeriodStart);
        $_end = new DateTime($firstPeriodEnd);
        $firstAvailbleTimes = $this->generateAvailableTimes($begin, $_end, $busyTimes, $serDuration, $selDate, $minutes);
        if(!empty($firstAvailbleTimes)) {
            $availableTimes = $firstAvailbleTimes;
        }
        if($filteredTimes['from2'] != null) {
            $secondPeriodStart = $filteredTimes['from2'];
            $secondPeriodEnd = $filteredTimes['to2'];
        }
        else {
            $secondPeriodStart = $timings[$selDayNumber]['from2']; //get the start of working time of the selected day 
            $secondPeriodEnd = $timings[$selDayNumber]['to2']; //get the end of working time of the selected day 
        }
        if($secondPeriodStart != null && $secondPeriodEnd != null) {
            $begin2 = new DateTime($secondPeriodStart);
            $_end2 = new DateTime($secondPeriodEnd);
            $secondAvailbleTimes = $this->generateAvailableTimes($begin2, $_end2, $busyTimes, $serDuration, $selDate, $minutes);
            if(!empty($secondAvailbleTimes)) {
                if(!empty($availableTimes)) {
                    return array_merge($availableTimes, $secondAvailbleTimes);
                }
                else {
                    return $secondAvailbleTimes;
                }
            }
        }
        return $availableTimes;
    }
    public function generateAvailableTimes($begin, $_end, $busyTimes, $serDuration, $selDate, $minutes) {
        $currTime = new DateTime();
        $availableTimes = array();
        $temp = $serDuration + $minutes; //adding minutes to end time will allow it to be shown in available times e.g. 11:15 without adding minutes will not be shown in list
        $end = $_end->modify("-$temp minutes"); //subtracting service duration from end time
        $isToday = date('Y-m-d') == $selDate; //is selected date today?
        if ($isToday) { //is today
            if ($currTime > $begin) {
                $begin = $this->blockMinutesRound($minutes);
            } //begin time is current time rounded to the closest 15 minutes e.g. 4:26 -> 4:30
            if ($currTime > $end) {
                return null; /* Time is out of working hours  */
            }
        }
        $interval = DateInterval::createFromDateString("$minutes minutes");
        $_to = $end;  //if we don't have any busy times then the available times will be the working hours of the salon
        $to = $_to->modify("+$minutes minutes"); //to be shown in list
        if ($to->format('H') == '00') {
            $to = $to->modify('-1 minutes');
        } //fix 12:00 AM problem it causes a lot of disasters and earthquakes
        if ($begin <= $to) {
            $daterange = new DatePeriod($begin, $interval, $to);
            foreach ($daterange as $date) {
                $isTimeValid = true;
                if(count($busyTimes) > 0) { 
                    foreach($busyTimes as $b) {
						//if(!isset($b['fromtime']){continue;}
						$fromtime = isset($b['fromtime']) ? $b['fromtime'] : '';
						$totime = isset($b['totime']) ? $b['totime'] : '';
                        if($this->isTimeWithinDateRange($date, $fromtime, $totime)){
                            $isTimeValid = false;
                            break;
                        }
                    }
                }
                if($isTimeValid) {
                    array_push($availableTimes, $date->format('H:i:s'));
                }
            }
        }
        return $availableTimes;
    }
    public function isTimeWithinDateRange($time, $start, $end) {
        $start = new DateTime($start);
        $end = new DateTime($end);
        $result = ($time > $start) && ($time < $end);
        //echo '<br>' . $time->format('H:i:s') . ' Is within: ' . $start->format('H:i:s') . ' ~ ' . $end->format('H:i:s') . ($result ? ' Yes' : ' No');
        return $result;
    }
    public function filterWorkingTimesByLockedPeriod($appointmentDate, $timings, $lockedPeriod, $minutes) {
        $appointmentDateObj = new DateTime($appointmentDate);
        $appointmentDOW = intval($appointmentDateObj->format('w'));
        $appointmentWorkingTime = isset($timings[$appointmentDOW]) ? $timings[$appointmentDOW] : null;
        if($appointmentWorkingTime != null) {
            $result = $appointmentWorkingTime;
            $isDateWithinLockedPeriod = $this->isDateWithinLockedPeriod($appointmentDateObj, $lockedPeriod, $minutes);
            if($isDateWithinLockedPeriod === null) {
                return null;
            }
            else if($isDateWithinLockedPeriod) {
                
                $withLockedPeriodFromNow = $isDateWithinLockedPeriod;
                $from = $appointmentWorkingTime['from'];
                $to = $appointmentWorkingTime['to'];
                $filteredFirstPeriod = $this->justFilter($withLockedPeriodFromNow, $from, $to, $minutes);
                if($filteredFirstPeriod !== false) {
                    if($filteredFirstPeriod !== null) {
                        $appointmentWorkingTime['from'] = $filteredFirstPeriod['from'];
                        $appointmentWorkingTime['to'] = $filteredFirstPeriod['to'];
                    }
                    else {
                        $appointmentWorkingTime['from'] = null;
                        $appointmentWorkingTime['to'] = null;
                    }
                }
                $from2 = $appointmentWorkingTime['from2'];
                $to2 = $appointmentWorkingTime['to2'];
                if($from2 != null || $to2 != null) {
                    $filteredSecondPeriod = $this->justFilter($withLockedPeriodFromNow, $from2, $to2, $minutes);
                    if($filteredSecondPeriod !== false) {
                        if($filteredSecondPeriod !== null) {
                            $appointmentWorkingTime['from2'] = $filteredSecondPeriod['from'];
                            $appointmentWorkingTime['to2'] = $filteredSecondPeriod['to'];
                        }
                        else {
                            $appointmentWorkingTime['from2'] = null;
                            $appointmentWorkingTime['to2'] = null;
                        }
                    }
                }
                if($appointmentWorkingTime['from'] != null || $appointmentWorkingTime['from2'] != null) {
                    $result = $appointmentWorkingTime;
                }
                else {
                    $result = null;
                }
            }
        }
        else {
            $result = null;
        }
        return $result;
    }
    public function isDateWithinLockedPeriod($appointmentDateObj, $lockedPeriod, $minutes) {
        $currentDate = new DateTime();
        $currentDOW = intval($currentDate->format('w'));
        $_currentDate = clone $currentDate;
        $withLockedPeriodFromNow = $_currentDate->modify("+${lockedPeriod} hours");
        //fix disastors and problems that 'might' occur
        if ($withLockedPeriodFromNow->format('H') == '00') {
            $withLockedPeriodFromNow = $withLockedPeriodFromNow->modify("+${minutes} minutes");
        }
        $withLockedPeriodFromNowDateOnly = new DateTime((clone $withLockedPeriodFromNow)->format('Y-m-d'));
        $isDateWithinLockedPeriod = $appointmentDateObj <= $withLockedPeriodFromNowDateOnly;
        $diff = date_diff($appointmentDateObj, $withLockedPeriodFromNowDateOnly);
        if($diff->invert === 0) {
            if(intval($diff->format('%a')) > 0) {
                //locked period covers all working hours of appointment date
                return null;
            }
        }
        return $isDateWithinLockedPeriod ? $withLockedPeriodFromNow : false;
    }
    public function justFilter($withLockedPeriodFromNow, $from, $to, $minutes) {
        $lockedTo = new DateTime($this->blockMinutesRound($minutes, $withLockedPeriodFromNow)->format('h:iA'));
        $from = new DateTime($from);
        $to = new DateTime($to);
        $diff = date_diff($to, $lockedTo);
        if($diff->invert == 1) {
            $totalMinutes = $diff->format('%h') * 60 + $diff->format('%i');
            //if lockedTo is between working time range (otherwise it's too high that it reached the next day)
            if($lockedTo >= $from && $lockedTo <= $to){
                $from = $lockedTo;
                $result['from'] = $lockedTo->format('h:iA');
                $result['to'] = $to->format('h:iA');
            }
            else {
                $result = false;
            }
            return $result;
        }
        else {
            //lockedperiod took away all working times hours
            $result = null;
        }
        return $result;
    }
    function blockMinutesRound($minutes = '5', $dt = null, $format = "h:i A") {
        $dt = $dt == null ? 'now' : $dt->format('Y-m-d h:i:s A');
        $seconds = strtotime($dt);
        $rounded = ceil($seconds / ($minutes * 60)) * ($minutes * 60);
        $res = date($format, $rounded);
        return new DateTime($res);
    }
}