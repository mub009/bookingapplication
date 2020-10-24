<?php
class image
{
    private $_CI;
    public function __construct()
    {
        $this->_CI = &get_instance();
        $this->_CI->load->library('image_lib');
        $this->_CI->load->helper('file');
    }
    function ImageConfig()
    {
        $config['upload_path']   ='assets/upload/image/'; 
        $config['allowed_types'] = '*'; 
        $config['file_name']     =  uniqid();
        $this->_CI->load->library('upload', $config);
    }
public function image_cropping($uploadfile)
{
    $this->image_resize(array('width'=>20,'height'=>20,'image'=>'20x20'),$uploadfile);
    $this->image_resize(array('width'=>50,'height'=>50,'image'=>'50x50'),$uploadfile);
    $this->image_resize(array('width'=>100,'height'=>100,'image'=>'100x100'),$uploadfile);
    $this->image_resize(array('width'=>200,'height'=>200,'image'=>'400x200'),$uploadfile);
    $this->image_resize(array('width'=>800,'height'=>600,'image'=>'800x600'),$uploadfile);
    $this->image_resize(array('width'=>1200,'height'=>800,'image'=>'1200x800'),$uploadfile);   
 }
 public function image_delete($file)
  {
    unlink('assets/upload/image/20x20/'.$file);
    unlink('assets/upload/image/50x50/'.$file);
    unlink('assets/upload/image/100x100/'.$file);
    unlink('assets/upload/image/400x200/'.$file);
    unlink('assets/upload/image/800x600/'.$file);
    unlink('assets/upload/image/1200x800/'.$file);
    unlink('assets/upload/image/'.$file);
  }


  public function image_resize($data,$file_array)
  {
      $config['image_library']   = 'gd2';
      $config['source_image']    ='assets/upload/image/'.$file_array['file_name'];
      $config['maintain_ratio'] = TRUE;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = TRUE;
      $config['width']           = $data['width'];
      $config['height']          = $data['height'];
      $config['new_image']   = "assets/upload/image/".$data['image']."/".$file_array['file_name'];
      $config['thumb_marker'] = '';
      $this->_CI->image_lib->initialize($config);
      $result= $this->_CI->image_lib->resize();
      $this->_CI->image_lib->clear();
      return $this->_CI->image_lib->clear();
     
    }

}
