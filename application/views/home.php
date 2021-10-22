<html>
    <head>
        <title>SI Manis - Home</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style-home.css');?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <link href="<?php echo base_url('assets/img/icon.ico');?>" rel='shortcut icon'>
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    </head>
    <body>
        <div>
            
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-room.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mobile-1.4.5.min.css');?>" />

    <script src="<?php echo base_url('assets/js/jquery.min.js');?>" ></script>
    <script src="<?php echo base_url('assets/js/jquery.mobile-1.4.5.min.js');?>"></script>
</head>
<body style="background: #ffebee; height: 65%;">

<div data-role="page">
    <div data-role="header" id="header" style="text-align:center;height: 200px;color: white;padding-top: 30px;">
        <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
        <h2>SELAMAT DATANG</h2>
    </div><!-- /header -->

    <div role="main" class="ui-content" id="main" style="margin-top: 200px;">
        <div id="div-login">
            <div class="btn-aktif" id="btn-masuk">MASUK</div>
            <div id="btn-daftar">DAFTAR</div>
        </div>
        <br><br><br>
        <?php
            if (isset($_SESSION['error'])) {
                echo "<p style='color:red;'>".$_SESSION['error']."</p>";
            }
          ?>
        <div id="login">
                <form action="<?php echo base_url('home/login'); ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <button type="submit" class="btn btn-default">Masuk</button>
                </form>
            </div>
            <div style="display: none;" id="daftar">
                <form action="<?php echo base_url('home/daftar'); ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail2" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-default">Daftar</button>
                </form>
            </div>
    </div><!-- /content -->
</div><!-- /page -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn-masuk').click(function() {
            $('#btn-masuk').addClass('btn-aktif');
            $('#btn-daftar').removeClass('btn-aktif');
            $('#login').show();
            $('#daftar').hide();
        });
        $('#btn-daftar').click(function() {
            $('#btn-masuk').removeClass('btn-aktif');
            $('#btn-daftar').addClass('btn-aktif');
            $('#login').hide();
            $('#daftar').show();
        });
    });
</script>
</body>
</html>