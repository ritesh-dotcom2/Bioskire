<?php
require ('top.php');
if (isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN'] == 'yes') {
	?>
	<script>
		window.location.href = 'my_order.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
<div class="hero-banner">
	<img src="images/banner/login-banner.png" alt="">
</div>
<!-- End Bradcaump area -->

<!-- Start Contact Area -->
<section class="login-register-section pr">
	<div class="container">
		<div class="row">
			<!-- Image Side -->
			<div class="col-md-6">
				<div class="image-side">
					<!-- Add your image here -->
					<img src="images/banner/login-img.gif" alt="Image">
					<!-- Button to toggle between login and register -->
					<button type="fv-btn" class="toggle-btn" onclick="toggleForm()">Login/Register</button>
				</div>
			</div>
			<!-- Form Side -->
			<div class="col-md-6">
				<div class="form-side">
					<!-- Login Form -->
					<div class="contact-form-wrap" id="login-form-wrap">
						<div class="buttons-cart--inner">
							<div class="shopping-head">
								<h2><b>Login To Your Account*</b></h2>
							</div>
						</div>
						<form id="login-form" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="login_email" id="login_email" placeholder="Your Email*"
										style="width:100%">
								</div>
								<span class="field_error" id="login_email_error"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="password" name="login_password" id="login_password"
										placeholder="Your Password*" style="width:100%">
								</div>
								<span class="field_error" id="login_password_error"></span>
							</div>

							<div class="contact-btn">
								<button type="button" class="fv-btn" onclick="user_login()">Login</button>
								<!-- <a href="forgot_password.php" class="forgot_password">Forgot Password</a> -->
							</div>
						</form>
						<div class="form-output login_msg">
							<p class="form-messege field_error"></p>
						</div>
					</div>
					<!-- Register Form (Initially Hidden) -->
					<div class="contact-form-wrap" id="register-form-wrap" style="display: none;">
						<div class="buttons-cart--inner">
							<div class="shopping-head">
								<h2><b>Register Now*</b></h2>
							</div>
						</div>
						<form id="register-form" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="name" id="name" placeholder="Your Name*"
										style="width:100%">
									<span class="field_error" id="name_error"></span>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="email" id="email" placeholder="Your Email*"
										style="width:100%">
									<span class="field_error" id="email_error"></span>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="mobile" id="mobile" placeholder="Your Mobile*"
										style="width:100%">
									<span class="field_error" id="mobile_error"></span>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="password" name="password" id="password" placeholder="Your Password*"
										style="width:100%">
									<span class="field_error" id="password_error"></span>
								</div>
								<div class="contact-btn">
									<button type="button" class="fv-btn" onclick="user_register()">Register</button>
								</div>
						</form>
						<div class="form-output register_msg">
							<p class="form-messege field_error"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<input type="hidden" id="is_email_verified" />
<input type="hidden" id="is_mobile_verified" />
<style>
	/* Add your custom styles here */
	.login-register-section {
		padding: 50px 0px;
	}

	.image-side {
		position: relative;
	}

	.toggle-btn {
		position: absolute;
		bottom: 11rem;
		left: 76%;
		transform: translateX(-50%);
		padding: 10px 20px;
		background: #ffffff none repeat scroll 0 0;
		border: 2px solid #000;
		color: #000;
		border-radius: 5px;
		cursor: pointer;
		border-radius: 20px;
	}

	.toggle-btn:hover {
		background: black none repeat scroll 0 0;
		border: 1px solid white;
		color: white;
	}

	.form-side {
		padding: 0 20px;
	}

	.contact-form-wrap {
		margin-bottom: 20px;
	}

	.image-side img {
		border-radius: 20px;
	}

	@media(max-width : 992px) {
		.toggle-btn {
			bottom: 6rem;
			left: 76%;
			transform: translateX(-50%);
			padding: 6px 16px;
		}

		.image-side img {
			margin-bottom: 20px;
		}
	}
</style>
<script>
	function toggleForm() {
		var loginForm = document.getElementById('login-form-wrap');
		var registerForm = document.getElementById('register-form-wrap');

		if (loginForm.style.display === 'none') {
			loginForm.style.display = 'block';
			registerForm.style.display = 'none';
		} else {
			loginForm.style.display = 'none';
			registerForm.style.display = 'block';
		}
	}
</script>

<script>
	function email_sent_otp() {
		jQuery('#email_error').html('');
		var email = jQuery('#email').val();
		if (email == '') {
			jQuery('#email_error').html('Please enter email id');
		} else {
			jQuery('.email_sent_otp').html('Please wait..');
			jQuery('.email_sent_otp').attr('disabled', true);
			jQuery.ajax({
				url: 'send_otp.php',
				type: 'post',
				data: 'email=' + email + '&type=email',
				success: function (result) {
					if (result == 'done') {
						jQuery('#email').attr('disabled', true);
						jQuery('.email_verify_otp').show();
						jQuery('.email_sent_otp').hide();

					} else if (result == 'email_present') {
						jQuery('.email_sent_otp').html('Send OTP');
						jQuery('.email_sent_otp').attr('disabled', false);
						jQuery('#email_error').html('Email id already exists');
					} else {
						jQuery('.email_sent_otp').html('Send OTP');
						jQuery('.email_sent_otp').attr('disabled', false);
						jQuery('#email_error').html('Please try after sometime');
					}
				}
			});
		}
	}
	function email_verify_otp() {
		jQuery('#email_error').html('');
		var email_otp = jQuery('#email_otp').val();
		if (email_otp == '') {
			jQuery('#email_error').html('Please enter OTP');
		} else {
			jQuery.ajax({
				url: 'check_otp.php',
				type: 'post',
				data: 'otp=' + email_otp + '&type=email',
				success: function (result) {
					if (result == 'done') {
						jQuery('.email_verify_otp').hide();
						jQuery('#email_otp_result').html('Email id verified');
						jQuery('#is_email_verified').val('1');
						if (jQuery('#is_mobile_verified').val() == 1) {
							jQuery('#btn_register').attr('disabled', false);
						}
					} else {
						jQuery('#email_error').html('Please enter valid OTP');
					}
				}

			});
		}
	}

	function mobile_sent_otp() {
		jQuery('#mobile_error').html('');
		var mobile = jQuery('#mobile').val();
		if (mobile == '') {
			jQuery('#mobile_error').html('Please enter mobile number');
		} else {
			jQuery('.mobile_sent_otp').html('Please wait..');
			jQuery('.mobile_sent_otp').attr('disabled', true);
			jQuery('.mobile_sent_otp');
			jQuery.ajax({
				url: 'send_otp.php',
				type: 'post',
				data: 'mobile=' + mobile + '&type=mobile',
				success: function (result) {
					if (result == 'done') {
						jQuery('#mobile').attr('disabled', true);
						jQuery('.mobile_verify_otp').show();
						jQuery('.mobile_sent_otp').hide();
					} else if (result == 'mobile_present') {
						jQuery('.mobile_sent_otp').html('Send OTP');
						jQuery('.mobile_sent_otp').attr('disabled', false);
						jQuery('#mobile_error').html('Mobile number already exists');
					} else {
						jQuery('.mobile_sent_otp').html('Send OTP');
						jQuery('.mobile_sent_otp').attr('disabled', false);
						jQuery('#mobile_error').html('Please try after sometime');
					}
				}
			});
		}
	}
	function mobile_verify_otp() {
		jQuery('#mobile_error').html('');
		var mobile_otp = jQuery('#mobile_otp').val();
		if (mobile_otp == '') {
			jQuery('#mobile_error').html('Please enter OTP');
		} else {
			jQuery.ajax({
				url: 'check_otp.php',
				type: 'post',
				data: 'otp=' + mobile_otp + '&type=mobile',
				success: function (result) {
					if (result == 'done') {
						jQuery('.mobile_verify_otp').hide();
						jQuery('#mobile_otp_result').html('Mobile number verified');
						jQuery('#is_mobile_verified').val('1');
						if (jQuery('#is_email_verified').val() == 1) {
							jQuery('#btn_register').attr('disabled', false);
						}
					} else {
						jQuery('#mobile_error').html('Please enter valid OTP');
					}
				}

			});
		}
	}
</script>
<?php require ('footer.php') ?>