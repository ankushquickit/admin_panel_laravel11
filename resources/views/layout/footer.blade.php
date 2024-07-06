
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">		
				<div class="row">						
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="footer_logo">
							<img src="assets/img/logo.png" alt="Footer-logo" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.</p>
						</div>
						<div class="footer_profile">
							<ul>
								<li><a href="#" class="s_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="s_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="s_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="s_linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>								
					</div><!--- END COL -->						
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_footer">
							<h4>Quick Links</h4>
							<ul>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Communications</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Support</a></li>
							</ul>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_footer">
							<h4>Company</h4>
							<ul>
								<li><a href="#">Licenses</a></li>
								<li><a href="#">market API</a></li>
								<li><a href="#">Careers and job</a></li>
								<li><a href="#">Referral Program</a></li>
								<li><a href="#">Jobs in Kaniz</a></li>						
							</ul>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="newsletter-form">
							<h4>Subscribe for get updates</h4>
							<form action="#" class="subscribe">
								<input type="text" class="subscribe__input" placeholder="Email Address">
								<button type="button" class="btn_one">Subscribe</button>
							</form>
						</div>
					</div><!--- END COL -->		
				</div><!--- END ROW -->		
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="footer_copyright">
							<p>&copy; 2024 Kaniz. All Rights Reserved.</p>
						</div>
					</div>
				</div>				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	
	
		<!-- START LOGIN -->	
		<div id="modal" class="popupContainer" style="display:none;">
			<header class="popupHeader">
				<span class="header_title">Login</span>
				<span class="modal_close"><i class="fa fa-times"></i></span>
			</header>
			
			<section class="popupBody">
				<!-- Social Login -->
				<div class="social_login">
					<div class="">
						<a href="#" class="social_box fb">
							<span class="icon"><i class="fa fa-facebook"></i></span>
							<span class="icon_title">Connect with Facebook</span>
						</a>

						<a href="#" class="social_box google">
							<span class="icon"><i class="fa fa-google-plus"></i></span>
							<span class="icon_title">Connect with Google</span>
						</a>
					</div>

					<div class="centeredText">
						<span>Or use your Email address</span>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" id="login_form" class="abtn">Login</a></div>
						<!-- <div class="one_half last"><a href="#" id="register_form" class="abtn">Sign up</a></div> -->
					</div>
				</div>

				<!-- Username & Password Login form -->
				<div class="user_login">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<label>Email / Username</label>
						<!-- <input type="text" /> -->
						<input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
						<br />

						<label>Password</label>
						<!-- <input type="password" /> -->
						<input id="password" class="block mt-1 w-full" type="password"name="password"required autocomplete="current-password">
						<br />

						<div class="checkbox">
							<!-- <input id="remember" type="checkbox" /> -->
							<input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember" />
							<label for="remember">Remember me on this computer</label>
						</div>

						<!-- <div class="action_btns">
							<div class="one_half"><a href="#" class="abtn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
							<div class="one_half last"><a href="#" class="abtn">Login</a></div>
						</div> -->


						<div class="action_btns">
							<!-- <div class="one_half last"><a href="#" type="submit"class="abtn">{{ __('Log in') }}</a></div> -->
							<!-- <input  class="one_half last" type="submit" class="abtn" value="{{ __('Log in') }}"> -->
							<button class="one_half last" type="submit" class="abtn">{{ __('Log in') }}</button>

							
							<!-- <x-primary-button class="ms-3">
								{{ __('Log in') }}
							</x-primary-button> -->
						</div>

					</form>
					@if (Route::has('password.request'))
						<a class="forgot_password" href="{{ route('password.request') }}">
							{{ __('Forgot your password?') }}
						</a>
					@endif
					<!-- <a href="#" class="forgot_password">Forgot password?</a> -->
				</div>

				<!-- Register Form -->
				<!-- <div class="user_register">
					<form>
						<label>Full Name</label>
						<input type="text" />
						<br />

						<label>Email Address</label>
						<input type="email" />
						<br />

						<label>Password</label>
						<input type="password" />
						<br />

						<div class="checkbox">
							<input id="send_updates" type="checkbox" />
							<label for="send_updates">Send me occasional email updates</label>
						</div>

						<div class="action_btns">
							<div class="one_half"><a href="#" class="abtn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
							<div class="one_half last"><a href="#" class="abtn">Register</a></div>
						</div>
					</form>
				</div> -->
			</section>
		</div>
		<!-- END LOGIN -->	
	
	
		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- jquery counterup -->
			<script src="assets/js/jquery.counterup.min.js"></script>	
			<script src="assets/js/countdown.js"></script>	
		<!-- particles -->
			<script src="assets/js/particles.min.js"></script>
			<script src="assets/js/app.js"></script>				
		<!-- jquery nav -->
			<script src="assets/js/jquery.nav.js"></script>	
		<!-- jquery.slicknav -->
			<script src="assets/js/jquery.slicknav.js"></script>	
		<!-- jquery.smooth-scroll -->
			<script src="assets/js/smooth-scroll.js"></script>			
		<!-- magnific-popup js -->               
			<script src="assets/js/jquery.magnific-popup.min.js"></script>				
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>	
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>			
		<!-- jquery leanModal min js -->
			<script src="assets/js/jquery.leanModal.min.js"></script>		
		<!-- login js -->
			<script src="assets/js/login.js"></script>
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>