<?php
if (isset($_REQUEST['email1']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email1'] ;
  $subject = 'Garden Groove-Enquiries' ;
  $message = "\nName: " . $_REQUEST['name'] ."\nAddress: " . $_REQUEST['txt_Addr1'] ."\nContact No: " . $_REQUEST['ContactNo'] ."\nEmail ID: " . $_REQUEST['email1'] . "\nMessage: " . $_REQUEST['txt_msg1'] ;
  mail("mr.kbmohankumar@gmail.com", "$subject",
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
 header( 'Location: http://shivu.smedor.com/final/Index.html' ) ;
  }
else
//if "email" is not filled out, display the form
  {
 header( 'Location: http://shivu.smedor.com/Enquiry.html' ) ;
  }
?>