<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>"/>

<title>Login Page</title>

</head>
<body>
    
<div class="login-form">
<form action="<?= base_url('index.php/home/doLogin') ?>" method="post">
<div class="content">
    <div class="input-field"> 
    <label for="uname">User Name</label>
    <input type="text" id="uname" name="username" required>
    

    <label for="pwd">Password</label>
    <input type="password" id="pwd" name="password" required>
    </div>
</div>
    <div class="action">
    <button type="submit">Login</button>
</div>
</form>
</div>

</body>

</html>