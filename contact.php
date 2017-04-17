<?php include "includes/header.php"; ?>
<?php include ".ENV.php"; ?>


<?php 


  if(isset($_POST['submit'])){
    $to       = $email;
    $subject  = wordwrap($_POST['subject'], 70);
    $body     = $_POST['body'];
    $header   = $_POST['email'];

   include "PHPMailer-master/mailer.php"; 

    $mail->setFrom($header, $header);
    $mail->addAddress($to, 'testas');
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

  }


?>

 <section>
  <div class="container">
   <div class="col-sm-6 col-sm-offset-3">
     <div class="form-wrap">
       <h1>Contact</h1>
        <form role="form" action="" method="post" id="login-form" atocomplete="off">
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="subject" class="sr-only">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
          </div>

          <input type="submit" name="submit" class="btn btn-custom btn-lg btn-block" id="btn-login" value="submit">
        </form>
      </div>
    </div>
  </div>
</section> 