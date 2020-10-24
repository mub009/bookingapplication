<?php
$ThemeRouter='store/theme/one/';
//home
   //slider
   $route[$ThemeRouter.'slider'] ='backend/store/theme/ThemeoneController/slider';
   $route[$ThemeRouter.'sliderform'] ='backend/store/theme/ThemeoneController/withOutCSRF_sliderAddUi';
   $route[$ThemeRouter.'slideredit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_sliderEditUi/$1';
   $route[$ThemeRouter.'slideraction'] ='backend/store/theme/ThemeoneController/ajaxAction_sliderAction';
   $route[$ThemeRouter.'slidereditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_sliderEditAction';
   //feature
   $route[$ThemeRouter.'features'] ='backend/store/theme/ThemeoneController/features';
   $route[$ThemeRouter.'featuresform'] ='backend/store/theme/ThemeoneController/withOutCSRF_featuresAddUi';
   $route[$ThemeRouter.'featuresedit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_featuresEditUi/$1';
   $route[$ThemeRouter.'featuresaction'] ='backend/store/theme/ThemeoneController/ajaxAction_featuresAction';
   $route[$ThemeRouter.'featureseditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_featuresEditAction';
   //service
   $route[$ThemeRouter.'service'] ='backend/store/theme/ThemeoneController/service';
   $route[$ThemeRouter.'serviceform'] ='backend/store/theme/ThemeoneController/withOutCSRF_serviceAddUi';
   $route[$ThemeRouter.'serviceedit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_serviceEditUi/$1';
   $route[$ThemeRouter.'serviceaction'] ='backend/store/theme/ThemeoneController/ajaxAction_serviceAction';
   $route[$ThemeRouter.'serviceeditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_serviceEditAction';
   //whyChooseUs
   $route[$ThemeRouter.'whychooseus'] ='backend/store/theme/ThemeoneController/whyChooseUs';
   $route[$ThemeRouter.'whychooseusform'] ='backend/store/theme/ThemeoneController/withOutCSRF_whyChooseUsAddUi';
   $route[$ThemeRouter.'whychooseusedit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_whyChooseUsEditUi/$1';
   $route[$ThemeRouter.'whychooseusaction'] ='backend/store/theme/ThemeoneController/ajaxAction_whyChooseUsAction';
   $route[$ThemeRouter.'whychooseuseditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_whyChooseUsEditAction';
   //Why Choose Us List
   $route[$ThemeRouter.'whychooseuslist'] ='backend/store/theme/ThemeoneController/whyChooseUsList';
   $route[$ThemeRouter.'whychooseuslistform'] ='backend/store/theme/ThemeoneController/withOutCSRF_whyChooseUsListAddUi';
   $route[$ThemeRouter.'whychooseuslistedit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_whyChooseUsListEditUi/$1';
   $route[$ThemeRouter.'whychooseuslistaction'] ='backend/store/theme/ThemeoneController/ajaxAction_whyChooseUsListAction';
   $route[$ThemeRouter.'whychooseuslisteditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_whyChooseUsListEditAction';
   //testimonial
   $route[$ThemeRouter.'testimonial'] ='backend/store/theme/ThemeoneController/testimonial';
   $route[$ThemeRouter.'testimonialform'] ='backend/store/theme/ThemeoneController/withOutCSRF_testimonialAddUi';
   $route[$ThemeRouter.'testimonialedit/(:any)'] ='backend/store/theme/ThemeoneController/withOutCSRF_testimonialEditUi/$1';
   $route[$ThemeRouter.'testimonialaction'] ='backend/store/theme/ThemeoneController/ajaxAction_testimonialAction';
   $route[$ThemeRouter.'testimonialeditraction'] ='backend/store/theme/ThemeoneController/ajaxAction_testimonialEditAction';
   
   $route[$ThemeRouter.'contact'] ='backend/store/theme/ThemeoneController/contact';
   $route[$ThemeRouter.'informationupdate'] ='backend/store/theme/ThemeoneController/ajaxAction_contactEditAction';
   $route[$ThemeRouter.'logo'] ='backend/store/theme/ThemeoneController/logo';

   //common
   $route[$ThemeRouter.'modaldeleteitem/(:any)/(:any)'] ='backend/store/theme/ThemeoneController/modalDeleteItem/$1/$2';
   $route[$ThemeRouter.'deleteaction'] ='backend/store/theme/ThemeoneController/ajaxAction_deleteAction';
   $route[$ThemeRouter.'modalvisibilititem/(:any)/(:any)/(:any)'] ='backend/store/theme/ThemeoneController/modalVisibilityItem/$1/$2/$3';
   $route[$ThemeRouter.'visibilityaction'] ='backend/store/theme/ThemeoneController/ajaxAction_visibilityAction';
?>