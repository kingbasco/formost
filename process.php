<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['msg_subject']) && isset($_POST['message'])){
  $to = "admission@foremostlegacyinstitute.com"; // Replace with your own email address
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $msg_subject = $_POST['msg_subject'];
  $message = $_POST['message'];
  $headers = "From: ".$name."<".$email.">";
  $body = "Name: ".$name."\nEmail: ".$email."\nPhone Number: ".$phone_number."\nDepartment & Course: ".$msg_subject."\n\nMessage: ".$message;
  if(mail($to, $msg_subject, $body, $headers)){
    echo "<div class='alert alert-success'>Thank you for contacting us. We will get back to you as soon as possible.<br><br><a href='index.html'><i class='fa fa-home'></i> Return Home</a></div>";
  }
  else{
    echo "<div class='alert alert-success'>There was a problem sending your message. Please try again.<br><br><a href='index.html'><i class='fa fa-home'></i> Return Home</a></div>";
  }
}
else{
  echo "<div class='alert alert-success'>Please fill out all fields before submitting the form.<br><br><a href='index.html'><i class='fa fa-home'></i> Return Home</a></div>";
}
?>

