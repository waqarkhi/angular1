<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body { min-height: 100vh; width: 100%;background: url(http://wixe.byethost8.com/images/banner-h.jpg) no-repeat fixed; background-size: cover;}
  	#show-data {display: none;overflow-x:hidden;}
  	.data {padding-left: 30px; width: 100%;}
  	#quotation {font-size: 24px;}
  	#quotation small {display: block;font-size: 12px;}
  	.list-group-item:first-child, .list-group-item:last-child {border-radius: 0;background: rgba(255, 255, 255, 0.42);border: 0;font-size: 20px;}
  		#sidebar { min-height: 100vh; padding:0;padding-top: 100px;background:rgba(42, 186, 163, 0.5); width: 250px;position: fixed;}
  	@media(min-width: 767px) {
  		.data .col-md-4 {background: rgba(255, 255, 255, 0.4);min-height:250px;}
  		#content { width: calc(100% - 250px); margin-left: 250px;float: left;}
  		.list-group {position:fixed;top:0;}.list-group + div {margin-top:50px;}
  	}
  	@media(max-width: 766px) {
  		.list-group-item {display:inline-block;float:none !important;width:inherit;}
  		#sidebar {width: 100%;min-height: inherit;top: 0;padding-top: 20px;padding-left: 15px;float: none !important;overflow: hidden;background: #2abaa3;z-index: 9;}
  		#sidebar + div { margin-top:100px; }
  	}
  </style>
</head>
<body class="main">
<div id="show-data">
	<div class="container-fluid">
		<div class="row">
			<div class="pull-left" id="sidebar">
				<div class="list-group">
					<a class="list-group-item" href="#/forms" id="forms">
						<i class="glyphicon glyphicon-list"></i> FOMRS
					</a>
					<a class="list-group-item" href="#/qoutes" id="qoutes">
						<i class="glyphicon glyphicon-th-large"></i> QUOTES
					</a>
				</div>				
			</div>
			<div id="content">
				<div class="data">
					<h2>Welcome to Admin Panel</h2>
					<p>Check your queries and forms of you website.</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="container">
</div>
<?php
$_user ='admin';
$_pass ='pakistan';
if(isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

if($user != $_user && $pass != $_pass) : ?>
	<script type="text/javascript">
		window.location.href = '/admin';
	</script>
<?php endif; } ?>

<script type="text/javascript">
	var url = window.location.href;
	var array = url.split('/');
	var last = array[array.length -1];
	
	$(document).ready(function () {
		$('#show-data').slideDown();
		$('#forms').bind('click', forms);
		$('#qoutes').bind('click', qoutes);
	});

	function qoutes() {
		$('.data').html('<div class="row" id="quotation"></div>');
		$.ajax({
			method: 'post',
			url: 'quote-submit.json',
			dataType: 'json'
		}).done(function (apiData) {
			$.map(apiData, function (q, qoutes) {
				$('#quotation').append(
					'<div class="col-md-4">'+
					'<small>Name</small>'+q.name+
					'<small>Contact</small>'+q.contact+
					'<small>Email</small>'+q.email+
					'<small>Website</small>'+q.website+
					'<small>Website Like</small>'+q.websiteLike+
					'<small>Package</small>'+q.package+
					'<small>Message</small>'+q.message+
					'</div>');
			});
		});
	}

	function forms() {
		$('.data').html('<div class="row" id="msg"></div>');
		$.ajax({
			method : 'post',
			url : 'form-submit.json',
			dataType : 'json'
		}).done(function(apiData) {
			$.map(apiData, function(one, all) {
				$('#msg').append(
					'<div class="col-md-4"><h3>'
		 			+one.name+'</h3><p>'
		 			+one.phone+' <a href="mailto:'
		 			+one.email+'">'
		 			+one.email+'</a></p><p>'
		 			+one.message+'</p></div>');
			});
		});			
	}
</script>
</body>
</html>
