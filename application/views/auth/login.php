<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <body>


  <meta charset="utf-8">
    <title>Yakalamalı Araç Listesine Giriş</title>
    <style>
        #message
        {
            color: red;
        }
        input[type=text], input[type=password] {
            border: 2px solid #2196F3!important;
            border-radius: 4px;
        }
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #2196F3!important;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <center>
    <div>
      <form class="w3-container">
        <div class="w3-container w3-blue">
          <h2>Kullanıcı Girişi</h2>
        </div><br/>
        <div id="message" ><?php echo $message;?></div>
        <form class="w3-container" method="post" action="auth/login">
        <label for="username">Username:</label><br/>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>"/><br/>
        <label for="password">Password:</label><br/>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>"/><br/>
        <input style="margin: 5px 0px;" type="submit" value="Giriş" />
        <?php echo form_close(); ?>
      </form>
    </div>
  </center>
</body>
</html>
