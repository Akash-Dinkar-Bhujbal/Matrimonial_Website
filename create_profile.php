<?php include_once("includes/basic_includes.php"); ?>
<?php include_once("functions.php"); ?>
<?php
if (!isloggedin()) {
	header("location:login.php");
}
?>
<?php
$id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	processprofile_form($id);
}
?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Find Your Perfect Partner - Makemylove
		| Register :: Make My Love
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<!--font-Awesome-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--font-Awesome-->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
</head>

<body>
	<!-- ============================  Navigation Start =========================== -->
	<?php include_once("includes/navigation.php"); ?>
	<!-- ============================  Navigation End ============================ -->
	<div class="grid_3">
		<div class="container">
			<div class="breadcrumb1">
				<ul>
					<a href="index.php"><i class="fa fa-home home_1"></i></a>
					<span class="divider">&nbsp;|&nbsp;</span>
					<li class="current-page">Create Your Profile</li>
				</ul>
			</div>

			<div class="services">
				<div class="col-sm-12 login_left">
					<form action="" method="POST">
						<div class="form-group col-sm-6">
							<label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
							<input placeholder="Enter your First Name" type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
						</div>
						<div class="form-group col-sm-6">
							<label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
							<input placeholder="Enter your Last Name" type=text" id="edit-last" name="lname" size="60" maxlength="128" class="form-text required">
						</div>

						<!-- Second Row starts -->
				</div>

				<!-- Third Row starts -->
				<div class="col-sm-12 login_left">
					<div class="form-group col-sm-6">
						<div class="age_select">
							<label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
							<div class="age_grid">
								<div class="col-sm-4 form_box">
									<div class="select-block1">
										<select name="religion">
											<option value=""> </option>
											<option value="Hindu"> Hindu </option>
											<option value="Muslim"> Muslim </option>
											<option value="Christian"> Christian </option>
											<option value="Sikh"> Sikh </option>
											<option value="Jain"> Jain </option>
											<option value="Parsi"> Parsi </option>
											<option value="Buddhist"> Buddhist </option>
											<option value="Inter Religion"> Inter Religion </option>
											<option value="No Religious Belief"> No Religious Belief </option>

										</select>
									</div>
								</div>

								<div class="col-sm-4 form_box2">

									<input placeholder="Caste" type="text" id="edit-name" name="caste" value="" size="60" maxlength="60" class="form-text">
								</div>
								<div class="col-sm-4 form_box2">

									<input placeholder="Sub Caste" type="text" id="edit-name" name="subcaste" value="" size="60" maxlength="60" class="form-text">
								</div>


								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<!-- Fourth Row starts -->
					<div class="form-group col-sm-6">
						<div class="age_select">
							<label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
							<div class="age_grid">
								<div class="col-sm-4 form_box">
									<input placeholder="India" type="text" id="edit-name" name="country" value="" size="60" maxlength="60" class="form-text required">
								</div>

								<div class="col-sm-4 form_box2">
									<div class="select-block1">
										<input placeholder="Maharashtra" type="text" id="edit-name" name="state" value="" size="60" maxlength="60" class="form-text required">
									</div>
								</div>
								<div class="col-sm-4 form_box2">

									<input placeholder="Raigad" type="text" id="edit-name" name="district" value="" size="60" maxlength="60" class="form-text required">

								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

				<!-- Fourth Row ends -->

				<!-- Fifth Row starts -->
				<div class="col-sm-12 login_left">

				<!-- <div class="form-group col-sm-12"> -->

					<div class="form-group col-sm-2">
						<label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>

						<input placeholder="Enter your Age" type="text" id="edit-name" name="age" value="" size="60" maxlength="60" class="form-text required">

					</div>
					<div class="form-group col-sm-2">
						<label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
						<div class="select-block1">
							<select name="maritalstatus">
								<option value="Single">Single</option>
								<option value="Married">Married</option>
								<option value="Divorsed">Divorsed</option>
							</select>
						</div>
					</div>
					<div class="form-group col-sm-2">
						<label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="profileby" value="" size="60" maxlength="60" class="form-text required">
					</div>
					<div class="form-group col-sm-2">
						<label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
						<div class="select-block1">
							<select name="education">
								<option value=""> </option>
								<option value="PHD"> PHD </option>
								<option value="M.Phil"> M.Phil </option>
								<option value="Post Graduate"> Post Graduate </option>
								<option value="Graduate"> Graduate </option>
								<option value="Diploma"> Diploma </option>
								<option value="High School"> High School </option>
							</select>
						</div>
					</div>
					<div class="form-group col-sm-2">
						<label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
						<input type="text" id="edit-name" name="edudescr" value="" size="60" maxlength="60" class="form-text">
					</div>
					<div class="form-group col-sm-2">
						<label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
						<div class="select-block1">
							<select name="bodytype">
								<option value=""> </option>
								<option value="Slim"> Slim </option>
								<option value="Athletic"> Athletic </option>
								<option value="Average"> Average </option>
								<option value="Heavy"> Heavy </option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-2">
					<label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
						<select name="physicalstatus">
							<option value="No Problem">No Problem</option>
							<option value="Blind">Blind</option>
							<option value="Deaf">Deaf</option>
						</select>
					</div>
				</div>
				<!-- Fifth Row ends -->
				<!-- sixth Row starts-->
				<div class="form-group col-sm-2">
					<label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
						<select name="drink">
							<option value="No">No</option>
							<option value="Yes">Yes</option>
							<option value="Sometimes">Sometimes</option>
						</select>
					</div>
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
						<select name="smoke">
							<option value="No">No</option>
							<option value="Yes">Yes</option>
							<option value="Sometimes">Sometimes</option>
						</select>
					</div>
				</div>

				<div class="form-group col-sm-2">
					<label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="edit-name" name="mothertounge" value="" size="60" maxlength="60" class="form-text">
				</div>
			</div>
			<div class="form-group col-sm-2">
				<label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
				<div class="select-block1">
					<select name="bloodgroup">
						<option value="A+">A+</option>
						<option value="O+">O+</option>
						<option value="B+">B+</option>
						<option value="AB+">AB+</option>

						<option value="A-">A-</option>
						<option value="O-">O-</option>
						<option value="B-">B-</option>
						<option value="AB-">AB-</option>

					</select>
				</div>
			</div>
			<div class="form-group col-sm-2">
				<label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
				<input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
			</div>
			<!-- sixth Row ends-->
			<!-- Seventh Row starts-->
			<div class="col-lg-12">
				<div class="form-group col-sm-2">
					<label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
						<select name="colour">
							<option value="Dark">Dark</option>
							<option value="Fair">Fair</option>
							<option value="Normal">Normal</option>
						</select>
					</div>
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
					<div class="select-block1">
						<select name="diet">
							<option value="Veg">Veg</option>
							<option value="Non Veg">Non Veg</option>

						</select>
					</div>
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Occupation Descr <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="120" class="form-text">
				</div>
				<div class="form-group col-sm-2">
					<label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text">
				</div>



			</div>


			<!-- Seventh Row ends-->

			<!-- eighth Row starts-->
			<div class="col-lg-12">
				<div class="form-group col-sm-3">
					<label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500" class="form-text">
				</div>
				<div class="form-group col-sm-3">
					<label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
					<input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500" class="form-text">
				</div>

				<div class="form-group col-sm-3">
					<label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="edit-name" name="sis" value="" size="60" maxlength="60" class="form-text">
				</div>
				<div class="form-group col-sm-3">
					<label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="edit-name" name="bros" value="" size="60" maxlength="60" class="form-text">
				</div>
				<div class="form-group">
					<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
					<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
				</div>
				<div class="form-actions">
					<input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
				</div>
			</div>
			<!-- eighth Row ends-->
			<hr />


			</form>
		</div>

		<div class="clearfix"> </div>
	</div>
	</div>
	</div>


	<?php include_once("footer.php"); ?>

</body>

</html>