<?php
if(isset($_POST['submit'])){
 $name=$_POST['name'];
  $email=$_POST['email'];

  //send mail 
 $to='vishnujayaraj128@gmail.com';
 $subject='New Subscriber';
 $body='<html>
 <body>
 <h3>Feedback</h3>
 <hr>

 <p> Name : '.$name.'</p>
 <br>

 <p> Email : '.$email.'</p>

 </body>

 </html>';

 $headers  ="From:".$name."<".$email.">\r\n";
 $headers .="reply-To:".$email."\r\n";
 $headers .="NINE-Version: 1.0\r\n";
 $headers .="Content-type: text/html; charset=utf-8";


//confirmation mail
 $user=$email;
 $usersubject = "Vishnu test";
 $userheaders = "From: Vishnu@quantlogic.com\n";
 $usermessage = "Thank you for subscribing our vishnu's  Program.";


//sending process
 $send=mail($to, $subject, $body, $headers);
 $confirm=mail($user, $usersubject, $userheaders,$usermessage );

 if($send && $confirm){
  echo "success";
 }

 else{
  echo "Failed";
 }

}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>
<body>
<form action="" method="POST">

<input type="text" name="name" placeholder="Name">
<input type="email" name="email" placeholder="email">
<input type="submit" name="submit" value="send">
</form>

</body>
</html>﻿