
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
<body>

<div data-role="page">
	<div data-role="header" id="header">
		<h4>Selamat datang<br><?php echo $_SESSION['username']; ?></h4><a href="<?php echo base_url('room/logout') ?>"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
	</div><!-- /header -->

	<div role="main" class="ui-content" id="main">
		<?php
			foreach ($chat as $chat) {
				echo "<b>".$chat['username']."</b><br>".$chat['pesan']."<br><sub style='float:right;'>".$chat['tgl']."</sub><br><hr>";
			}
		?>
		<br><br><br><br>
	</div><!-- /content -->

	<div data-role="footer" id="footer">
		<form id="footer-form" action="<?php echo base_url('room/kirim') ?>" method="post">
			<textarea name="pesan" id="tulis"></textarea><button type="submit" id="kirim" ><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></button>
		</form>
	</div><!-- /footer -->
</div><!-- /page -->
</body>
</html>