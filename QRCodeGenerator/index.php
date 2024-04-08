<?php 
include '../Includes/dbcon.php';
include '../Includes/session.php';


    $query = "SELECT tblclass.className,tblclassarms.classArmName 
    FROM tblstudents
    INNER JOIN tblclass ON tblclass.Id = tblstudents.classId
    INNER JOIN tblclassarms ON tblclassarms.Id = tblstudents.classArmId
    Where tblstudents.Id = '$_SESSION[userId]'";

    $rs = $conn->query($query);
    $num = $rs->num_rows;
    $rrw = $rs->fetch_assoc();


?>






<!DOCTYPE html>
<html lang="en" >
<head>
	<title>QR Code Generator</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<style>
		body {
			margin: 0;
			background-color: #e4e4e4;
		}
		.navbar {
    overflow: hidden;
    background-color: #008000;
    color: white;
    padding: 16px 18px;
  }

  .navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .navbar a:hover {
    background-color: #006600;
  }

  .right {
    float: right;
	
  }
  .right img {
            margin-right: 5px;
			
        }
	</style>
</head>
<body>
<div class="navbar">
  <a href="#">Welcome Student</a>
  <div class="right">
    <a href="logout.php" class="logout">Logout</a>
  </div>
</div>
	<div class="container py-3">

		<div class="row">
			<div class="col-md-12"> 

				<div class="row justify-content-center">
					<div class="col-md-6">
						<!-- form user info -->
						<div class="card card-outline-secondary">
							<div class="card-header">
								<h3 class="mb-0">Student Information</h3>
							</div>
							<!-- <?php
							$Roll_Number = (int)readline("Enter your roll number");
							 /*$first_name = "Tanisha";
							 $last_name = "Verma";
							 $email = "tani@email.com";*/
							 
							// $website = "http://www.google.com";

							if (isset($_POST["btnsubmit"])) {
								$Roll_Number = $_POST["roll_number"];
									/*$first_name = $_POST["first_name"];
									$last_name = $_POST["last_name"];
									$email = $_POST["email"];*/
									
									

									/*echo "<pre>";
                                    var_dump($_POST);
                                    echo "</pre>";*/
							}
							?> -->
							<div class="card-body">
								<form autocomplete="off" class="form" role="form" action="index.php" method="post">
									<!--<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">First name</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="<?php /*echo $first_name;*/?>" name="first_name">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Last name</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="<?php echo $last_name;?>" name="last_name">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Email</label>
										<div class="col-lg-9">
											<input class="form-control" type="email" value="<?php echo $email;?>" name="email">
										</div>
									</div>-->
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Roll Number</label>
										<div class="col-lg-9">
											<input class="form-control" type="number_format" value="<?php echo $Roll_Number;?>" name="roll_number">
										</div>
									</div>
									<!--<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Website</label>
										<div class="col-lg-9">
											<input class="form-control" type="url" value="<?php echo $website;?>" name="website">
										</div>
									</div>-->
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="col-lg-9">
											<input class="btn btn-primary" type="submit" name="btnsubmit" value="Generate QR Code">
										</div>
									</div>
								</form>
								<?php
                                    if (isset($_POST["btnsubmit"])) {
                                        $Roll_Number = $_POST["roll_number"];
                                    }
 									include "phpqrcode/qrlib.php";
 									$PNG_TEMP_DIR = 'temp/';
 									if (!file_exists($PNG_TEMP_DIR))
									    mkdir($PNG_TEMP_DIR);

									$filename = $PNG_TEMP_DIR . 'test.png';

									if (isset($_POST["btnsubmit"])) {

									//$codeString = $_POST["first_name"] . "\n";
									//$codeString .= $_POST["last_name"] . "\n";
									//$codeString .= $_POST["email"] . "\n";
									  $codeString = $_POST["roll_number"] . "\n";
									/*$codeString .= $_POST["website"];*/

									$filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';

									QRcode::png($codeString, $filename);

									echo '<img src="' . $PNG_TEMP_DIR . basename($filename) . '" /><hr/>';
								}

								?>
							</div>
						</div><!-- /form user info -->
					</div>
				</div>

			</div><!--/col-->
		</div><!--/row-->

	</div><!--/container-->

</body>
</html>