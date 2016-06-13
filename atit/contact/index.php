<?php

    require_once('PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.
	$email=$_POST['email'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	date_default_timezone_set('Asia/Kolkata');
	$date = date('m/d/Y h:i:s a', time());
	
    $msg  = '<br/><b style="color:red;">name:</b>'.$name.'<br/><b style="color:red;">phone:</b>'.$phone.'<br/><b style="color:red;">Emailid:</b>'.$email.'<br/><b style="color:red;">Date & Time:</b>'.$message.'<br/><b style="color:red;">Message:</b>'.$date.'';
    $subj = 'Contact mail';  /// subject of mail 
    $to   = 'sales@apptreeinfotech.com'; /// to address
    $from = 'princebarani93@gmail.com';  /// from address
    $name = 'My Name'; /// from address name
	

    echo smtpmailer($to,$from, $name ,$subj, $msg);
    
    function smtpmailer($to, $from, $from_name = 'paari', $subject, $body, $is_gmail = true)
    {
        global $error;
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        if($is_gmail)
        {
	
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;  
            $mail->Username = 'princebarani93@gmail.com';  
            $mail->Password = 'Barani@9397';   
        }
        else
        {
            $mail->Host = 'smtp.mail.google.com';
            $mail->Username = 'apptreeinfotech@gmail.com';  
            $mail->Password = '12345678';
        }
        $mail->IsHTML(true);
        $mail->From="princebarani93@gmail.com";
        $mail->FromName="Contact form"; //from name
        $mail->Sender=$from; // indicates ReturnPath header
        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
        $mail->AddCC('cc@site.com.com', 'CC: to site.com'); ///cc address
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error = 'Mail error: '.$mail->ErrorInfo;
            return true;
        }
        else
        {  
	        header("Location: ../index.html");
            $error = 'Message sent!';
            return false;
        }
    }
?>