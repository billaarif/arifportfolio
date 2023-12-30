<?php
	include("header.php");

?>
	

<!-- Let's get in touch         Estimate your Project? -->



		<section class="contuct-section">
		<div class="contuct-section-container">

			<div class="contuct-section-container-box">

				<h2 class="contuct-box-1">Let's get in touch</h2>
				<p class="contuct-box-2">I enjoy discussing new projects and design challenges. Please share as much info, as possible so we can get the most out of our first catch-up.</p>
				<p class="contuct-box-33">Living In:</p>

	 			<p class="contuct-box-31">Bagha - Rajshahi</p>
					
				<p class="contuct-box-33">Call:</p>
				<p class="contuct-box-31">+8801612634046</p>
				<ul class="navbar-list">
					<li><a class="navbar-link" href="index.php">Home</a></li>
					<li><a class="navbar-link" href="about.php">About</a></li>
					<li><a class="navbar-link" href="service.php">Services</a></li>
					<li><a class="navbar-link" href="gallery.php">Gallery</a></li>
					<li><a class="navbar-link" href="contact.php">Contact</a></li>

				</ul>	
			</div>

			<div class="contuct-section-container-box">
				<h2 class="contuct-box-1">Estimate your Project?</h2>
				<div class="form-box">
					<div class="form-user">
						<label class="form-label" for="name"> What is your Name : </label><br>
						<input type="text" name="user_name" class="form-design" required>
					</div>

					<div class="form-user">
						<label class="form-label" for="email"> Email Address : </label><br>
						<input type="email" name="user_email" class="form-design" required>
					</div>

					<div class="form-user">
						<label class="form-label" for="form_message"> How can I Help You ? : </label><br>
						<textarea name="message" class="form-design-big" rows="10"  required></textarea>
					</div>
				</div>	
					<div class="button-send"><button> Send me</button></div>
			</div>

		</div>
		<?php
	include("footer.php")
?>