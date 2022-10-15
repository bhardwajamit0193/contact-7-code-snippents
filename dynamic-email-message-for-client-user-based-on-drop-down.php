<?php

function hsc_cf7_submit_update_email($cf){
    $formID = $cf->id();
    $wpcf7 = WPCF7_ContactForm::get_current();
    $submission = WPCF7_Submission::get_instance();
	
		$option1body='<p>Hello, Mr. [youname]</p>';   // Put your meassage in  for opition 1
		$option2body='<p>Hello, Mrs. [youname]</p>';  // Put your meassage in  for opition 2

	
    if (!$submission){
        return;
    }
     // Write Contact form 7 ID
    if($formID == '1703'){
      
      //Put drop down Filed Name  eg. [select SelectGender "Male" "Female" ]   
      
      $checkGender = isset( $_POST['SelectGender'] ) ? trim( $_POST['SelectGender'] ) : '';  //here

        $mail = $wpcf7->prop('mail_2');
        $mailBody = $mail['body'];
        if($checkGender === 'Male'){
            $mail['body'] = $option1body;
            $wpcf7->set_properties( array("mail_2" => $mail)) ;
        }
         else{
 $mail['body'] = $option2body;
            $wpcf7->set_properties( array("mail_2" => $mail)) ;
        }
     }else{
        return;
    }
}
add_action( 'wpcf7_before_send_mail', 'hsc_cf7_submit_update_email' );


?>
