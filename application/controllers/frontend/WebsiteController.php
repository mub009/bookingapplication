<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WebsiteController extends ThemeController
{
   public function __construct()
    {
    parent::__construct();
    $this->load->model('StoreThemeModel');
    }
    public function home()
    {
        $this->data=array_group_by($this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'',true),'property');
        $this->template('home',$this->data);
    }
    public function test()
    {
        $this->data['features']=array(
            array(
                'json'=>'{"heading": "Meeting & Listening"}',
                'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/markting-1.svg'
            ),
            array(
                'json'=>'{"heading": "UI/UX Design"}',
                'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/markting-2.svg'
            ),
            array(
                'json'=>'{"heading": "Validation"}',
                'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/markting-3.svg'
            ),
            array(
                'json'=>'{"heading": "Coding"}',
                'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/markting-4.svg'
            )
            );
            $this->data['service']=array(
                array(
                    'json'=>'{"heading": "Meeting & Listening","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                    'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_1.svg'
                ),
                array(
                    'json'=>'{"heading": "Focus On Innovation","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                    'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_2.svg'
                ),
                array(
                    'json'=>'{"heading": "True Partners","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                    'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_3.svg'
                )
                );

                $this->data['whyChooseUs']=array(
                    'json'=>'{"subHeading":"A choice that makes the difference","heading":"Why Choose Us"}',
                    'image'=>'http://placehold.it/700x700'
                    );

            $this->data['whyChooseUsList']=array(

                    array(
                        'json'=>'{"heading": "Meeting & Listening","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                        'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_1.svg'
                    ),
                    array(
                        'json'=>'{"heading": "Focus On Innovation","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                        'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_2.svg'
                    ),
                    array(
                        'json'=>'{"heading": "True Partners","details": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                        'image'=>'http://localhost/developer/myzooba/assets/website/theme1/assets/icons/why_3.svg'
                    )
                    );
            $this->data['testimonial']=array(

                        array(
                            'json'=>'{"name": "mubashir","content": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                            'image'=>'http://placehold.it/100x100'
                        ),
                        array(
                            'json'=>'{"name": "rashid","content": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                            'image'=>'http://placehold.it/100x100'
                        ),
                        array(
                            'json'=>'{"name": "Prince","content": "First, we will have a meeting and listen to your wishes & needs. What you want to get from us"}',
                            'image'=>'http://placehold.it/100x100'
                        )
                        );
                        $this->data['slider']=array(

                            array(
                                'image'=>'http://placehold.it/1920x820'
                            ),

                            array(
                                'image'=>'http://placehold.it/1920x820'
                            ),
                            );

            $this->data['contact']=array(
                'json'=>'{"map": "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3016.4844015181898!2d-74.562485!3d40.883188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe097bba16b99c1aa!2sdover+new+jersey!5e0!3m2!1sar!2sus!4v1551268413307","location": "London","locationAddress":"USA, New York Mondella street 34, buld 8","site":"www.yoursite.com","phone":"222 123 333 019"}'
                          
                            );
    }
}
?>
