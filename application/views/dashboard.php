<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Dashboard</title>
</head>
<body>
<h2>Hi, <?= $this->session->userdata('logged_name'); ?>
<h3>Welcome to dashboard</h3>

<a href="<?= base_url('index.php/home/logout')?>" >logout</a>

</body>

</html>