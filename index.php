<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
      function Form()
      {
        if (!empty($_POST['name']) && !empty($_POST['email'])) {
          # code...
          //createing vars for getting info
          $name = htmlentities($_POST['name']); // do not mess with
          $email = htmlentities($_POST['email']); // do not mess with
          if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $mail = new PHPMailer();
            $mail -> isSMTP();
            $mail -> SMTPAuth = true;
            $mail -> SMTPSecure = 'ssl';
            $mail -> Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail -> isHTML(true);
            $mail -> Username = "your username here";
            $mail -> Password = 'your password here';
            $mail -> setFrom("contactformphp@php.com","Contact form results");
            $mail -> addAddress("example@example.com");
            $mail -> Subject = "This is mail from your website";
            $mail -> Body = "Name is " . " " . $name ." " . "This is email " . $email;
            $mail -> send();
            echo "message sent";

          }else{
            echo "please enter email";
          }
        }else {
          echo "please enter something";
        }
      }

      if(isset($_POST['submit'])){
        form();
      }else{
        echo '';
      }
     ?>
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="First name">
      <input type="text" name="email" placeholder="email@email.com">
      <input type="submit" name="submit">
    </form>
  </body>
</html>
