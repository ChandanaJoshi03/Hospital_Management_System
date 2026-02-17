<!--Author: W3layouts-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Patient Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>REGISTRATION FORM</h1>

				<div class="d-grid forms23-grids">
					<div class="form23">
						<?php include('val.php'); ?>

						<div class="bottom-content">
							<form action="patient_details_insert.php" name="formID" id="formID" enctype="multipart/form-data" method="post" >
								<label for="patient_full_name">Patient Full Name</label>
								<input type="text" name="patient_full_name" id="patient_full_name" class="input-form validate[required]" placeholder="Patient Full Name" required />

								<label for="patient_address">Address (Area)</label>
								<input type="text" name="patient_address" id="patient_address" class="input-form validate[required]" placeholder="Address(Area)" required />

								<label for="cityInput">City</label>
								<input type="text" name="city" id="cityInput" list="cityList" class="input-form validate[required]" placeholder="Enter Your City" required />
								<datalist id="cityList"></datalist>

								<label for="contact_no">Mobile Number</label>
								<input type="text" name="contact_no" id="contact_no" class="input-form validate[required]" 
								placeholder="Enter 10 Digit Mobile Number" 
								pattern="[1-9][0-9]{9}" maxlength="10" 
								required title="Enter a 10-digit mobile number not starting with 0." />								

								<label for="dob">Date of Birth</label>
								<input type="date" name="dob" id="dob" class="input-form validate" placeholder="Enter Your Date of Birth" />

								<label for="gender">Gender</label>
								<select name="gender" id="gender" class="input-form validate[required]">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>

								<label for="blood_group">Blood Group</label>
								<select name="blood_group" id="blood_group" class="input-form validate">
									<option value="">Select Blood Group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>

								<label for="p_code">Area Pin Code</label>
								<input type="text" name="p_code" id="p_code" class="input-form validate[required]" placeholder="Enter Your Area Pin Code" required />

								<label for="email_id">Email</label>
								<input type="email" name="email_id" id="email_id" class="input-form validate[required]" placeholder="Enter Your Email (abc@gmail.com)" required />

								<label for="photo">Photo</label>
								<input type="file" name="photo" id="photo" class="input-form validate" accept="image/*" />

								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="input-form"
										placeholder="Set Your Password" required
										pattern="^(?=.*[0-9])(?=.*[!@#$%^&*]).{5,}$" 
										title="Password must be at least 5 characters long, include 1 number and 1 special character." />
										 
								<button type="submit" class="loginhny-btn btn">Register</button>
							</form>

							<script>
							document.getElementById("cityInput").addEventListener("keyup", function () {
								let value = this.value;
								if (value.length < 1) return; // don’t search if empty

								fetch("cities.php?term=" + encodeURIComponent(value))
									.then(response => {
										if (!response.ok) {
											throw new Error('Network response was not ok');
										}
										return response.text();
									})
									.then(data => {
										document.getElementById("cityList").innerHTML = data;
									})
									.catch(error => {
										console.error('Error fetching cities:', error);
									});
							});
							</script>

							<p>Already Have an Account? <a href="login.php">Login Here</a></p>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section>
</body>
</html>