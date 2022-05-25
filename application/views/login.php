<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Login Page</title>
</head>
<body>

<h3>Please login to start</h3>
<form action="<?= base_url('index.php/home/doLogin') ?>" method="post">
    <label for="uname">User Name</label>
    <input type="text" id="uname" name="username" required>

    <label for="pwd">Password</label>
    <input type="password" id="pwd" name="password" required>

    <button type="submit">Login</button>

</form>


</body>

</html>