<?php

$name=$_POST['name'];

$email=$_POST['email'];

$amount=$_GET['amount'];

$date = date("Y-m-d");

?>

<html>
	<head>
		<title>Payment Gateway-Invoice</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        	
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="index.css">
		<script>
			window.alert("Your invoice has been sent to your email-id");
		</script>
	</head>
	<body>
		<div class="header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
    				<div class="container">
        				<div class="navbar-header">
                				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavBar">
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
                					<span class="icon-bar"></span>
            					</button>
            					<a href="index.php" class="navbar-brand">Payment Gateway</a>
        				</div>
       				</div>
			</nav>
		</div>
		<div class="container">
			-<div class="jumbotron">
				<center><h4>Congratulations! Your donation was successfully made.</h4></center>
			</div>
			<div class="container">
            		<div class="row">
                		<div class="col-xs-6">
                    			<div class="panel panel-default">
                        			<div class="panel-heading">
                            				<h4>Invoice</h4>
                        			</div>
                        			<div class="panel-body">
                        	    				<div class="container">
                                					<h4>Details of Payment </h4>
                                				</div>
								<div class="container">		
									<h5>Name:</h5><span id="name"><h4><?php echo $name; ?> </h4></span>
								</div>
								<div class="container">		
									<h5>E-mail:</h5><span id="email"><h4><?php echo $email; ?> </h4></span>
								</div>
								<div class="container">		
									<h5>Amount:</h5><span id="amt"><h4><?php echo $amount; ?> </h4></span>
								</div>
								<div class="container">		
									<h5>Date:</h5><span id="amt"><h4><?php echo $date; ?> </h4></span>
								</div>
                        			</div>
                    			</div>
                		</div>
            		</div>				
		</div>
	</body>
</html>