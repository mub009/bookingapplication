<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReservationsController extends Store_Controller
{
 public function __construct()
 {
  parent::__construct();
 }

 public function today()
 {
   $this->data['title_name'] = 'Today Reservations';
   $this->title_nav_bar = array('home' => 'admin/dashboard','reservations'=>'admin/reservations','today'=>'admin/reservations/today');
   $this->template('booking/reservations/today',$this->data);
 }
 public function all()
 {
   $this->data['title_name']  = 'All Reservations';
   $this->title_nav_bar = array('home' => 'admin/dashboard','reservations'=>'admin/reservations','all'=>'admin/reservations/all');
   $this->template('booking/reservations/all',$this->data);
 }
 public function ajaxAction_todayDatatable()
 {
     $this->datatables
     ->select("reservations.reservationId,store.storeName,customer.customerName,customer.mobile,reservations.totalCost,reservations.status,reservations.source,reservations.appointmentDate,reservations.modified,reservations.paid")
     ->join('customer','reservations.customerId = customer.customerId')
     ->join('reservation_services','reservation_services.reservationId = reservations.reservationId')
     ->join('store_services','store_services.storeServicesId = reservation_services.storeServicesId')
     ->join('store','store.storeId = store_services.storeId')
     ->where(array('store.is_deleted' =>0,'store.storeId'=>$this->data['userInfo']['storeId']))
     ->from('reservations');
     echo $this->datatables->generate();
 }
 public function ajaxAction_allDatatable()
 {
    $this->datatables
    ->select("reservations.reservationId,store.storeName,customer.customerName,customer.mobile,reservations.totalCost,reservations.status,reservations.source,reservations.appointmentDate,reservations.modified,reservations.paid")
    ->join('customer','reservations.customerId = customer.customerId')
    ->join('reservation_services','reservation_services.reservationId = reservations.reservationId')
    ->join('store_services','store_services.storeServicesId = reservation_services.storeServicesId')
    ->join('store','store.storeId = store_services.storeId')
    ->where(array('store.is_deleted' =>0,'store.storeId'=>$this->data['userInfo']['storeId']))
    ->from('reservations');
    echo $this->datatables->generate();
 }
 
}
