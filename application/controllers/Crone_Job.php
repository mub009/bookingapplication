<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crone_Job extends MY_Controller
{

    /**
     * Index Page for this controller.
     * mubashir 123qwerty
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 
     */


    public function __construct()
    {

        parent::__construct();




    }




 
    public function crone()
    {
       // select datas that already updated
        
//select dtas that completed return period
       $delivered=$this->Base_Model->query("select tbl_order.OrderId,tbl_order.getpoint,tbl_order.getpoint_worth,tbl_order.redeem_points,tbl_order.redeem_worthpoints,
       tbl_order.CustomerId,tbl_order.crone_status,tbl_order.getpoint,tbl_order.redeem_points,tbl_order.VendorId,tbl_order.TotalAmount,tbl_order.CustomerMob,tbl_order.total_purchase_amount,tbl_order.TotalAmount ,tbl_user_type.CountryId 
       
       from tbl_order join tbl_user_type on tbl_user_type.UserId=tbl_order.VendorId  where TIMESTAMPDIFF(DAY,`tbl_order`.`DeliveredDate`,'".$this->data['dateAndtime']."')=return_days" );
     //  print_r($delivered);
             foreach ($delivered as $row) 
               {
                 if($row['crone_status']==null)
                 {
                 if($row['redeem_points']==0)
                 {
                  $value = array(
                  'dateandtime'=>$this->data['dateAndtime'],
                  'CustomerMobile' => $row['CustomerMob'], 
                  'InvoiceNo' => $row['OrderId'],
                  'PurchaseAmount' =>$row['total_purchase_amount'], 
                  'VendorUserTypeId' => $row['VendorId'],
                  'CountryId' => $row['CountryId']
                  );
                 // print_r($delivered);
                 
                  $this->LoyalityCoinsModel->getcoins($value);
                
                  $this->Base_Model->update('tbl_order', array('OrderId'=>$row['OrderId']), array('crone_status'=>1));


                  $body ="You got".$row['getpoint']."from your order".$row['OrderId'];
                    
                  $this->firebase->setUserTypeId($row['CustomerId']);

                  $this->firebase->setTitle('Points Credicted');

                  $this->firebase->setBody($body);

                  $this->firebase->setData(array('OrderId'=>$row['OrderId']));

                  $this->firebase->setClick_action();
       
                  $this->firebase->SendNotification();

                 }

                 else
                 {
                  $this->Base_Model->delete('tbl_LoyalityCustomerLedger', $where =array('TransactionId'=>$row['OrderId']));
                  $balanceamount=(($row['TotalAmount']));
                
                  $value = array('dateandtime'=>$this->data['dateAndtime'],'CustomerMobile' => $row['CustomerMob'], 'InvoiceNo' => $row['OrderId'],
                  'PurchaseAmount' => $row['total_purchase_amount'], 'VendorUserTypeId' =>$row['VendorId'], 'CountryId' => $row['CountryId'], 
                  'CustomerPoint' => $row['redeem_points'], 'BalanceAmount' =>$balanceamount);
                 

                  if ($this->LoyalityCoinsModel->redeemcoins($value)) {

                    $this->Base_Model->update('tbl_order', array('OrderId'=>$row['OrderId']), array('crone_status'=>1));
                      
                   // print_r($balanceamount);
                      json_output(200, 'okey');

                     
                  }
                
                  
                  else {
                      json_output(400, 'fail');
                    // echo "fail";
                  }
                }
                 }
              
      
       
               }
              // print_r($this->data['dateAndtime']);
     //2019-07-14 11:51:12       

}  

public function crone_complete()
{
   // select datas that already updated
    
//select dtas that completed return period
   $delivered=$this->Base_Model->query("select tbl_order.OrderId,tbl_order.getpoint,tbl_order.getpoint_worth,tbl_order.redeem_points,tbl_order.redeem_worthpoints,
   tbl_order.CustomerId,tbl_order.crone_status,tbl_order.getpoint,tbl_order.redeem_points,tbl_order.VendorId,tbl_order.TotalAmount,tbl_order.CustomerMob,tbl_order.total_purchase_amount,tbl_order.TotalAmount ,tbl_user_type.CountryId 
   
   from tbl_order join tbl_user_type on tbl_user_type.UserId=tbl_order.VendorId  where TIMESTAMPDIFF(DAY,`tbl_order`.`DeliveredDate`,'".$this->data['dateAndtime']."')=return_days and crone_status is null" );
   print_r($delivered);
      foreach ($delivered as $row)
      {
        $number = round($row['TotalAmount'] / 10) * 10;
        $value = array(
            'dateandtime'=>$this->data['dateAndtime'],
            'CustomerMobile' => $row['CustomerMob'], 
            'InvoiceNo' => $row['OrderId'],
            'PurchaseAmount' =>$number, 
            'VendorUserTypeId' => $row['VendorId'],
            'CountryId' => $row['CountryId']
            );

            $this->LoyalityCoinsModel->getcoins($value);
            
            $this->Base_Model->update('tbl_order', array('OrderId'=>$row['OrderId']), array('crone_status'=>1));
           
            if($row['getpoint']>0) 
            {     
            $title = "Got Points";
               
            //$body =$count." items are not available"."\n"."(#".$customerFcmToken['OrderId'].")"." "."is confirmed and expected to Deliver on"." ".$customerFcmToken['ExpectedDeliveryDate']."at".$customerFcmToken['ExpectedDeliveryTime'];
            $body ="You got ".$row['getpoint']." points from your order "."(#".$row['OrderId'].")";
           
            $this->firebase->setUserTypeId($row['CustomerId']);

            $this->firebase->setTitle($title);
          
            $this->firebase->setBody($body);
          
            $this->firebase->setData(array('OrderId'=>$row['OrderId']));

           // $this->firebase->setClick_action('OS2');
          
            $this->firebase->SendNotification();
            } 
           }

      }


    
}