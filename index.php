<?php
session_start();
include('config/aksess.php');
cekLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Project</title>
   
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="css/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-1.12.3.min.js"></script>
  
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="css/jquery-1.7.1.js"></script>
  <script type="text/javascript" src="css/jquery.dataTables.min.js"></script>
  <script src="js/jquery.printPage.js" type="text/javascript"></script>  
  <!--link href="css/dashboard.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
<!--
.style1 {color:#0000FF}
-->
    </style>
</head>

<body>

<div class="container panel panel-info">
<div class="row">
<!-- start header -->

<?php
include("header.php");
?>

<!-- end header -->
<!-- start content -->
	<div class="row">
		<div class="col-md-2">
			<?php
			include("menu.php");
			?>
		</div>
		<div class="col-md-10">
		<?php 
			$page_dir='page';
			 if (!empty($_GET['p'])){
			 $pages= scandir($page_dir,0);
			 unset ($pages[0], $pages[1]);
			 $p = $_GET['p'];
				 if(in_array($p. '.php', $pages))
				  {
				   include($page_dir. '/'.$p.'.php');
				  }
				  else{
						include ($page_dir.'/error.php');
					  }
							
					
			 }else 
			 {
			   include ($page_dir.'/home.php');
			 }
			 ?>
		</div>
	</div>
<!--end content-->
<!--start footer-->
<?php
include("footer.php");
?>
<!--end footer-->
</div>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>