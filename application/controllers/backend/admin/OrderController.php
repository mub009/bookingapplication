<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OrderController extends Admin_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Order';
  $this->title_nav_bar = array('home' => 'admin/dashboard');
 }
 public function reservations()
 {
   $this->data['legancy']=$this->Legancy->design(array('view'),'order'); 
   $this->template('order/reservations',$this->data);
 }
 
public function ajaxAction_reservationsDatatable()
 {
     $this->datatables
     ->select("orders.orderId,orders.transactionId,orders.reservationId,orders.status,customer.customerName, customer.mobile,store.storeName as storeName,orders.created_at")
     ->join('customer','orders.customerId = customer.customerId')
     ->join('store','store.storeId = orders.storeId')
     ->where(array('store.is_deleted' =>0,'orders.cashType'=>'serviceBooking'))
     ->from('orders');
     echo $this->datatables->generate();
 }
 public function store()
 {
   $this->data['legancy']=$this->Legancy->design(array('view'),'order'); 
   $this->template('order/store',$this->data);
 }
 public function ajaxAction_storeDatatable()
 {
     $this->datatables
     ->select("orders.orderId,orders.transactionId,orders.reservationId,orders.status,customer.customerName, customer.mobile,store.storeName as storeName,orders.created_at")
     ->join('customer','orders.customerId = customer.customerId')
     ->join('store','store.storeId = orders.storeId')
     ->where(array('store.is_deleted' =>0,'orders.cashType'=>'serviceStore'))
     ->from('orders');
     echo $this->datatables->generate();
 }
}
