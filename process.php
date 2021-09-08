<?php
// Configure your Subject Prefix and Recipient here
$subjectPrefix = '[Contact Form Website]';
$emailTo       = '<mehedidb@gmail.com>';
$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $phone = stripslashes(trim($_POST['phone']));
    $message = stripslashes(trim($_POST['message']));
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is invalid.';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Phone is required.';
    }
    if (empty($message)) {
        $errors['message'] = 'Message is required.';
    }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $subject = "$subjectPrefix $subject";
        $body    = '
            <strong>Name: </strong>'.$name.'<br />
            <strong>Email: </strong>'.$email.'<br />
            <strong>Phone: </strong>'.$phone.'<br />
            <strong>Message: </strong>'.nl2br($message).'<br />
        ';
        $headers  = "MIME-Version: 1.1" . PHP_EOL;
        $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
        $headers .= "Date: " . date('r', $_SERVER['REQUEST_TIME']) . PHP_EOL;
        $headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
        $headers .= "From: " . "=?UTF-8?B?".base64_encode($name)."?=" . "<$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        $headers .= "X-Originating-IP: " . $_SERVER['SERVER_ADDR'] . PHP_EOL;
        mail($emailTo, "=?utf-8?B?" . base64_encode($subject) . "?=", $body, $headers);
        $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}


require "connection.php";

if(isset($_POST['fname'])){
//echo '<script>alert("gg")</script>';


$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
 
  $lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
  $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  // $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
  $dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';
  

   $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
   $national = isset($_POST['national']) ? trim($_POST['national']) : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
    $state = isset($_POST['state']) ? trim($_POST['state']) : '';
     $city = isset($_POST['city']) ? trim($_POST['city']) : '';
     $nin = isset($_POST['nin']) ? trim($_POST['nin']) : '';
     
    
         $autoswift= rand(100, 900);
       $swift="CCBKUSA".$autoswift."MB";
       $route="121178294";

            if(empty($fname)){
                                          echo '
  <script>

fname.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function fname1(){
            if(fname !==""){       
                  fname.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($lname)){
                                          echo '
  <script>

lname.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function lname1(){
            if(lname !==""){       
                  lname.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($mobile)){
                                          echo '
  <script>

mobile.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function mobile1(){
            if(mobile !==""){       
                  mobile.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($dob)){
                                          echo '
  <script>

dob.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function dob1(){
            if(dob !==""){       
                  dob.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($nin)){
                                          echo '
  <script>

nin.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function nin1(){
            if(nin !==""){       
                  nin.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($address)){
                                          echo '
  <script>

address.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function address1(){
            if(address !==""){       
                  address.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($state)){
                                          echo '
  <script>

state.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function state1(){
            if(state !==""){       
                  state.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }elseif(empty($city)){
                                          echo '
  <script>

city.style.border="2px solid red";
  msgtext.innerHTML="Account Name is required";
  function city1(){
            if(city !==""){       
                  city.style.border="2px solid green";
                msgtext.innerHTML=" ";             
             

            }
          }
  </script>';
     }else{
        $eid=md5($email.$fname);
        
         $query = "INSERT INTO account (fname,lname,phone,email, nin, nationality,address,state,city,dob,eid)

  VALUES('$fname','$lname','$mobile','$email','$nin','$national','$address','$state','$city','$dob','$eid')";
     }

      $result=mysqli_query($conn,$query);
 if($result){

require_once 'SwiftMailer/vendor/autoload.php';


   echo $bodyContent ="
   <!doctype html>
<html lang='en'>
<head>
<title>NORTHWESTER</title>
<meta http-equiv='X-UA-Compatible' content='IE=Edge'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

<meta name='viewport' content='height=device-height,width=device-width,initial-scale=1'>


 <link href='https://fonts.googleapis.com/css?family=Carrois Gothic' rel='stylesheet'>
</head>

<bod>
<div class='' style='overflow: hidden;'>

    
  
     <center>
<h1><a href=''><img src='imo/imologo.png'  style='width:100px;'>
</a></h1>
<h4 style='color:green; font-weight: bold;'>IMO STATE BUSINESS PREMISES </h4></center> 
     

   <div class='row'>
    <br>
    <div class='col-md-12' >
      <h5>Hello <b>".$fname."</b>,</h5>
      <p style='color:gray'>
Welcome The Imo state Business Premesis Registration, kindly click on the link to verify your email,
<a href='verify.php?eid=".$eid."'>CLICK TO VERIFY</a>
      </p>
    </div>
   </div> 
 
<br>

<br>
<center>
   <div class='row'>
    <div>
      &copy;  2021 imobusiness.com <a href='https://imobusiness.com' style='color:#fff;'>imobusiness.com</a>
      <br>
      <small style='color:orange'> 2021 alright Reserved </small>

    </div>
   </div>
   </center>
    
  
  

 

  </div>

  </body>
  </html>

";
$subject="Registration";

$message = Swift_Message::newInstance()
    // The subject of your email
    ->setSubject($subject)
    // The from address(es)
    ->setFrom(array('no_reply@northwesternbnk.com' => 'NORTHWESTERN'))
    // The to address(es)
    ->setTo(array($email => 'NORTHWESTERN'))
    // Here, you put the content of your email
    ->setBody($bodyContent, 'text/html')
     ;
if (Swift_Mailer::newInstance(Swift_MailTransport::newInstance())->send($message)) {
    //echo'<script>location.replace("login?nrg=successfully done") </script>';


   // echo '<script>location.replace("https://northwesternbnk.com/acreate?msg=you have successfully created an account with us,<br> <span>please check your email for confirmation</span>") </script>';
    
  
   } else {

 // echo '<script>location.replace("https://northwesternbnk.com/acreate?msg=Your Where Registered but we could not send you eamil") </script>';


  //lert("error sending msg");
  //echo '<script>msgtext.innerHTML="Your Where Registered but we could not send you eamil";  </script>';


    //echo'ys done m dusted';
}   

 }else{

  echo mysqli_error($conn);
//       echo '<script>
// alert("error entering database");
//    msgtext.innerHTML="Your was an error trying to register you, please try again later";  </script>';
 }



 }
   ?>
