<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function Form()
      {
        if (!empty($_POST['name']) && !empty($_POST['email'])) {
          # code...
          //createing vars for getting info
          $name = htmlentities($_POST['name']);
          $email = htmlentities($_POST['email']);
          echo $name;
          echo $email;
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
