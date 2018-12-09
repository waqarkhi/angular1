<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body { min-height: 100vh; width: 100%;background: url(http://wixe.byethost8.com/images/banner-h.jpg) no-repeat fixed; background-size: cover; }
  </style>
</head>
<body>
	<div class="container" style="padding-top: 100px;">
		<div class="row">
			<div class="col-md-4 pull-right">
				<div class="panel panel-default">
					<form method="post" action="admin.php">
					<div class="panel-body">
						<div class="fomr-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username">
						</div>
						<div class="fomr-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password">
						</div>
					</div>
					<div class="panel-footer">
						<input type="submit" name="submit" value="Login" class="btn btn-success">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>