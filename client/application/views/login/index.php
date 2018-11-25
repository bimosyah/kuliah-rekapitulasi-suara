<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Petugas</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                 <h3 class="pb-2 display-5" style="color: white">Login Petugas</h3>
             </div>
             <div class="login-form">
                <?php echo $this->session->flashdata('msg'); ?>
                <?php echo form_open('login/cekLogin'); ?>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
