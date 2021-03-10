<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
    <title>LSPD</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/all.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { echo '

		<body>
            <div class="navbar navbar-inverse set-radius-zero" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="https://i.imgur.com/BQoTEoz.png" width=180 height=70/>
                        </a>
                    </div>
<div class="right-div">
    <a href="logout.php" class="btn btn-danger pull-right"><i class="fas fa-sign-out-alt"></i> Log out</a>
</div>
<div class="right-div">
                        <a class="btn btn-success pull-right"><i class="fa fa-user"></i> User: ' . $_SESSION['pseudo'] . '</a>
</div>
</div>
</div>
<!-- LOGO HEADER END-->
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
								<li>
                                <a href="index.php"> Home</a>
                                </li>
                                <li>
                                <a>|</a>
                                </li>
                                <li>
                                <a href="catalog.php"> Catalog of Punishments</a>
                                </li>
                                <li>
                                <a>|</a>
                                </li>
                                <li>
                                    <a href="manhunt.php"> Manhunts</a>
                                </li>
                                <li>
                                <a>|</a>
                                </li>
                                <li>
                                    <a href="records.php"> Criminal Records</a>
                                </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MENU SECTION END-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Add a criminal record.
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">Name and Surname</label> :
								<p class="help-block">e.g.: Logan McConnaughey</p>
								<input type="text" name="name" id="name" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Crime</label> :
								<p class="help-block">Theft/ Robbery / ...</p>
								<input type="text" name="crime" id="crime" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Imposed Sanction</label> :
								<p class="help-block">e.g.: $100 Charge, 1 Year Jail</p>
								<input type="text" name="sanction" id="sanction" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Date and Time of Action</label> :
								<p class="help-block">e.g.: 03.24.2020, 5:50</p>
								<input type="text" name="datetime" id="datetime" class="form-control" required />
								<br />
							</div>
							<button type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Add</button>
						</p>
					</form>
					<p></p>
					<img src="" align="center">
					</div>
				</div>
				<!-- CONTENT-WRAPPER SECTION END-->
				<section class="footer-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							Coded by : CancerKidMaxxx | Based on : Davendrix&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
						</div>
					</div>
				</section>
				<!-- FOOTER SECTION END-->
				<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
				<!-- CORE JQUERY  -->
				<script src="assets/js/jquery-1.10.2.js"></script>
				<!-- BOOTSTRAP SCRIPTS  -->
				<script src="assets/js/bootstrap.js"></script>
			</body>'; } else { header( "Location: login.php"); } ?>

</html>