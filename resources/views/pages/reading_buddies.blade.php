@extends('layout.master')

@section('main')

<link rel="stylesheet" href="{{ asset('frontend/css/reading_buddies_portal.css')}}">

<style>
.validation_err{
	color: red;
	font-size: 16px;
	padding: 5px;
}
.grid .new_pre {

    max-width: 33.33%;

    flex: 0 0 33.33%;

}
input#ess {
    width: 20px;
    height: 20px;
}

input#hss {
    width: 20px;
    height: 20px;
}

input[type="radio"] {
    -webkit-appearance: radio;
    appearance: radio;
}

.form__controls .radio {

    font-size: 10px;

}

.section--intro .section__main .section__content {

    display: flex;

    flex-direction: column;

    flex: 0 !important;

}

.section__entry_1 {

    color: #fff;

    text-align: center;

    padding: 2rem !important;

}

h1{

	border: 1px solid;

padding: 50px;

background: #9dd4ca;

color: #000;

text-transform: uppercase;

font-size: 30px !important;



}

.reading_border {

    border: 2px solid #000;

    margin: 22px;

}

/*.section--intro .section__main .section__entry {

    padding: 3rem;

}*/

</style>

<div class="main">



	<section class="section section--intro">



		<div class="shellread">



			<div class="section__inner">



				<aside class="section__aside">



					<span class="section__tag">Home</span><!-- /.section__tag -->



					

					<div style="background: #014751;">

					<a href="#" class="log hidden-xs">



						<img src="https://www.ourkidsread.org/our_kids/new/assets/images/logo.svg" alt="">



					</a>

					</div>







					<div class="form has-separator">

						<!-- <form action="https://codeiginiter.ourkidsreadinc.org/static_page/portal/login" method="post" id="loginForm"> -->
<form action="https://ourkidsreadinc.org/our_kids/static_page/portal/login" method="post" id="loginForm">
							<!-- <form onsubmit="handleLogin(); return false;"> -->
   								
  

  

							<header class="form__head">
								<h2>Login </h2>
							</header><!-- /.form__head -->

							<div class="form__body">
								<div class="form__row">
								<div id="login_err_msg" class="validation_err">
									@if(isset($error))
							    <p class="alert alert-danger">
							        {{ $error }}
							    </p>
							@endif
								</div>	

									<label for="field-email" class="form__label">E-mail Address</label>									


									<div class="form__controls">

										<input type="email" class="field" name="field-email" id="field-email" value="{{ old('email', $data1['email']) }}" placeholder="">
									</div><!-- /.form__controls -->
									<div id="val_email_login" class="validation_err"></div>
								</div><!-- /.form__row -->

								<div class="form__row">

									<label for="field-password" class="form__label">Password</label>
									<div class="form__controls">

										<input type="password" class="field" name="field-password" id="field-password" value="" placeholder="">

									</div><!-- /.form__controls -->

									<div id="val_pass_login" class="validation_err"></div>

								</div><!-- /.form__row -->



							</div><!-- /.form__body -->

							<div class="form__actions">

								 <input type="button" id="login_now" class="btn" value="Login" onclick="validateLoginForm()">
								 <!-- <input type="submit" id="login_now" class="btn" value="Login" > -->

								<br>

								<a href="/our_kids/static_page/portal/view_password">Forgot your password?</a>

							</div><!-- /.form__actions -->


						</form>

<script>
    function validateLoginForm() {
        var email = document.getElementById('field-email').value;
        var password = document.getElementById('field-password').value;

        var emailValidationMsg = document.getElementById('val_email_login');
        var passValidationMsg = document.getElementById('val_pass_login');

        emailValidationMsg.innerHTML = '';
        passValidationMsg.innerHTML = '';

        var hasError = false; 

        if (email.trim() === '') {
            emailValidationMsg.innerHTML = 'Email is required.';
            hasError = true;
        }

        if (password.trim() === '') {
            passValidationMsg.innerHTML = 'Password is required.';
            hasError = true;
        }

        if (hasError) {
            return;
        }
        document.getElementById('loginForm').submit();
    }
</script>

<script>
    window.onload = function() {
        var codeigniterErrorMessage = document.getElementById('login_err_msg');
        var laravelErrorMessage = document.getElementById('laravel-error-message');

        if (codeigniterErrorMessage && laravelErrorMessage) {
            // Display the CodeIgniter error message in Laravel
            laravelErrorMessage.innerHTML = codeigniterErrorMessage.innerHTML;
        }
    };
</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function handleLogin() {
        var email = $('#field-email').val();
        var password = $('#field-password').val();

        $.ajax({
            url: 'https://codeiginiter.ourkidsreadinc.org/static_page/portal/login',
            type: 'POST',
            data: {
                'field-email': email,
                'field-password': password
            },
            dataType: 'json',
            success: function(response) {
                // console.log(response.success);
              
                if (response.success) {
                     window.location.href = response.redirect_url;
                } else {
                   
                      $('#login_err_msg').text(response.error_message);
                }
            },
            error: function(error) {
                console.error('Error during login request:', error);
            }
        });
    }
</script> -->


					</div><!-- /.form -->

					<h2>Or</h2>

					<div class="form form--secondary">

							<form action="/reading-buddies" id="registration_form" method="post" >
								@csrf
							<header class="form__head">
								<h4>Register to Participate in the OKR Reading Buddy Program!</h4>
							</header><!-- /.form__head -->
							<div class="form__body">

								@if(session('success'))
    <h3 class="alert alert-success" style="color:green">
        {{ session('success') }}
    </h3>
@endif


            <div class="form__row">
@if(isset($error_message))
    <h5 class="validation" style="font-size:30px; color: red;">
        {{ $error_message }}
    </h5>
@endif
            	<label for="field-okr_student" class="form__label">I am an ...</label>

									<div class="form__controls">
										<div class="">

<input type="radio" name="okr_student" id="ess" value="1" {{ optional($data1)['okr_student'] && old('okr_student', optional($data1)['okr_student']) == 1 ? 'checked' : '' }}>


											 <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Elementary School Student</label>

										</div>

										<div class="">

											<input type="radio" name="okr_student" id="hss" value="2" {{ old('okr_student', $data1['okr_student']) == 2 ? 'checked' : '' }}> <label for="field-okr_student" style="font-size: 2rem; margin-bottom: 0.9rem;">Adult/High School Student (Prospective Reading Buddy)</label>

										</div>



									</div><!-- /.form__controls -->



									<div id="val_okr_student" class="validation_err"></div>

								</div><!-- /.form__row -->





								<div class="form__row">



									<label for="field-fname" class="form__label">First Name*</label>



									



									<div class="form__controls">



										<input type="text" class="field" name="fname" id="field-fname" value="{{ old('fname', $data1['user_name_first']) }}" placeholder="">



									</div><!-- /.form__controls -->

									<div id="val_fname" class="validation_err"></div>

								</div><!-- /.form__row -->







								<div class="form__row">



									<label for="field-lname" class="form__label">Last Name*</label>



									



									<div class="form__controls">



										<input type="text" class="field" name="lname" id="field-lname" value="{{ old('lname', $data1['user_name_last']) }}" placeholder="">



									</div><!-- /.form__controls -->

									<div id="val_lname" class="validation_err"></div>

								</div><!-- /.form__row -->







								<div class="form__row">



									<label for="field-regemail" class="form__label">Email Address*</label>



									



									<div class="form__controls">



										<input type="email" class="field" name="email" id="field-regemail" value="{{ old('email', $data1['email']) }}" placeholder="">



									</div><!-- /.form__controls -->

									
							    	<div id="val_email" class="validation_err"></div>
							        
							   
								@if(isset($error_message_email))
							    	<div class="validation_err">{{ $error_message_email }}</div>
							        
							    
							 @endif
									

								</div><!-- /.form__row -->

								<div class="form__row">



									<label for="field-regemail" class="form__label">Password*</label>



									



									<div class="form__controls">



										<input type="password" maxlength="16" class="field" name="password" id="field-regpassword" value="{{ old('password', $data1['password']) }}" placeholder="">



									</div><!-- /.form__controls -->

									<div id="val_password" class="validation_err"></div>	

								</div><!-- /.form__row -->



								



								<div class="form__row">



									<label for="cfield-password" class="form__label">Confirm Password*</label>



									



									<div class="form__controls">



										<input type="password" maxlength="16" class="field" name="cpassword" id="field-cpassword" value="{{ old('password', $data1['password']) }}" placeholder="">



									</div><!-- /.form__controls -->

									<div id="val_cpassword" class="validation_err"></div>

								</div><!-- /.form__row -->







								<div class="form__row">



									<label for="field-zip" class="form__label">Zip Code*</label>



									



									<div class="form__controls">



										<input type="text" class="field" maxlength="5" name="zip" id="field-zip" value="{{ old('zip', $data1['user_profile_address_zip']) }}" placeholder="">



									</div><!-- /.form__controls -->

									<div id="val_zip" class="validation_err"></div>

								</div><!-- /.form__row -->



							</div><!-- /.form__body -->







							<div class="form__actions">



								<!-- <input type="button" class="btn" id="register_now" onclick="validateRegistrationForm()" name="submit" value="Submit"> -->

								<input type="button" id="register_now" class="btn" value="Submit" onclick="validateRegistrationForm()">



							</div><!-- /.form__actions -->



						</form>

					



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Object to store old input values
    let oldValues = {};

    // Populate form fields with old values
    Object.keys(oldValues).forEach(function(name) {
        document.getElementById('field-' + name).value = oldValues[name];
    });

    // Listen for form submission
    document.getElementById('registration_form').addEventListener('submit', function() {
        // Store form values in the oldValues object before submission
        document.querySelectorAll('.field').forEach(function(input) {
            oldValues[input.name] = input.value;
        });
        console.log('Old Input Values:', oldValues);

        // Re-populate form fields with old values before submission
        Object.keys(oldValues).forEach(function(name) {
            document.getElementById('field-' + name).value = oldValues[name];
        });
    });
});







    function validateRegistrationForm() {
    	 let oldValues = {};
        var studentType = document.querySelector('input[name="okr_student"]:checked');
        var firstName = document.getElementById('field-fname').value;
        var lastName = document.getElementById('field-lname').value;
        var email = document.getElementById('field-regemail').value;
        var password = document.getElementById('field-regpassword').value;
        var confirmPassword = document.getElementById('field-cpassword').value;
        var zipCode = document.getElementById('field-zip').value;

        // Reset previous error messages
        document.getElementById('val_okr_student').innerHTML = '';
        document.getElementById('val_fname').innerHTML = '';
        document.getElementById('val_lname').innerHTML = '';
        document.getElementById('val_email').innerHTML = '';
        document.getElementById('val_password').innerHTML = '';
        document.getElementById('val_cpassword').innerHTML = '';
        document.getElementById('val_zip').innerHTML = '';

        var hasError = false;

          Object.keys(oldValues).forEach(function(name) {
        document.getElementById('field-' + name).value = oldValues[name];
    });

        if (!studentType) {
            document.getElementById('val_okr_student').innerHTML = 'Please select your role';
            hasError = true;
        }

        if (firstName.trim() === '') {
            document.getElementById('val_fname').innerHTML = 'First Name is required';
            hasError = true;
        }

        if (lastName.trim() === '') {
            document.getElementById('val_lname').innerHTML = 'Last Name is required';
            hasError = true;
        }

        if (email.trim() === '') {
            document.getElementById('val_email').innerHTML = 'Email Address is required';
            hasError = true;
        } else if (!isValidEmail(email)) {
    document.getElementById('val_email').innerHTML = 'Please Enter a valid Email';
    hasError = true;
}

        if (password.length < 8) {
            document.getElementById('val_password').innerHTML = 'Password must be at least 8 characters long';
            hasError = true;
        }

        if (password.trim() === '') {
            document.getElementById('val_password').innerHTML = 'Password is required';
            hasError = true;
        }

        if (confirmPassword.trim() === '') {
            document.getElementById('val_cpassword').innerHTML = 'Re Enter Your Password';
            hasError = true;
        } else if (password !== confirmPassword) {
            document.getElementById('val_cpassword').innerHTML = 'Confirm Password not match';
            hasError = true;
        }

        if (zipCode.trim() === '') {
            document.getElementById('val_zip').innerHTML = 'Zip Code is required';
            hasError = true;
        }


   

        if (hasError) {
            return;
        }

        document.getElementById('registration_form').submit();
    }

    function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

</script>





					</div><!-- /.form form-secondary -->



				</aside><!-- /.section__aside -->



				



				<div class="section__main" style="background: #004750;">



					<div class="section__content">



						<a href="#" class="logo hidden visible-xs-block">



							<img src="/our_kids/build/assets/images/logo@2x.jpg" alt="">



						</a>



						<div class="section__tiles" style="background: #fff0; margin-top: 0rem; padding: 1.8rem 2rem;">



						<div class="grid">



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/tile-1@2x.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_water_protectors.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_peters_chair.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



						</div><!-- /.grid -->





						<div class="grid">



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_amari_and_the_night_brothers.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/golden domes and silver lanterns.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/Eyes That Kiss In The Corners.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



						</div><!-- /.grid -->





						



					</div><!-- /.section__tiles -->





						<div class="reading_border">

							<div class="section__entry_1">



								<h1>Reading Portal</h1>



							</div><!-- /.section__entry -->



						</div>

					</div>





					<div class="section__tiles" style="background: #fff0; margin-top: 0rem; padding: 1.8rem 2rem;">



						<div class="grid">



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_whose_toes_are_those.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_punching_the_air.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_bad_dreams_are_not_allowed.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



						</div><!-- /.grid -->





						<div class="grid">



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_thank_you_its_an_afro.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_clean_getaway.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_very_hungry_catepillar_spanish.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



						</div><!-- /.grid -->





						<div class="grid">



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/something beautiful.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/please baby please.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



							



							<div class="grid__col grid__col--size-2 new_pre">



								<picture class="tile">



									<img src="{{ asset('frontend/img/book_cover_stars_beneath_our_feet.jpg')}}" alt="">



								</picture><!-- /.tile -->



							</div><!-- /.grid__col -->



						</div><!-- /.grid -->



					</div><!-- /.section__tiles -->







				</div><!-- /.section__main -->



			</div><!-- /.section__inner -->



		</div><!-- /.shell -->



	</section><!-- /.section -->



</div><!-- /.main -->

@endsection