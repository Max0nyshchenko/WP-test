<?php get_header(); ?>
	<!--    SHOWCASE SECTION    -->
	<section class="my-showcase">
		<div class="container">
			<h1 class="showcase-title"><?php bloginfo('name'); ?></h1>
			<h3 class="showcase-subtitle"><?php bloginfo( 'description' ); ?></h3>
			<div class="scroll-down">
				<p>Scroll Down</p>
				<a href="#awesome" class="circle">
					<i class="fas fa-angle-down"></i>
				</a>
			</div>
		</div>
	</section>
	<!--    AWESOME SECTION   -->
	<section id="awesome" class="my-awesome">
		<div class="container">
			<div class="awesome-heading">
				<div class="w">W</div>
				<div class="awesome-heading-text">WE ARE AN AWESOME AGENCY</div>
			</div>
			<!-- FEATURES -->
			<div class="awesome-features row row-cols-1 row-cols-sm-2 row-cols-md-4">
				<div class="feature col">
					<div class="feature-icon flex justify-content-center align-items-center">
						<i class="far fa-edit"></i>
					</div>
					<h6>FEATURE ONE</h6>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
						mollitia, distinctio perspiciatis ad ratione.
					</p>
				</div>
				<div class="feature col">
					<div class="feature-icon flex justify-content-center align-items-center">
						<i class="far fa-edit"></i>
					</div>
					<h6>FEATURE TWO</h6>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
						mollitia, distinctio perspiciatis ad ratione.
					</p>
				</div>
				<div class="feature col">
					<div class="feature-icon flex justify-content-center align-items-center">
						<i class="fas fa-search"></i>
					</div>
					<h6>FEATURE THREE</h6>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
						mollitia, distinctio perspiciatis ad ratione.
					</p>
				</div>
				<div class="feature col">
					<div class="feature-icon flex justify-content-center align-items-center">
						<i class="far fa-comment"></i>
					</div>
					<h6>FEATURE FOUR</h6>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
						mollitia, distinctio perspiciatis ad ratione.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--   HEAR    SECTION   -->
	<section class="hear">
		<div class="container">
			<div class="awesome-heading">
				<div class="w c">C</div>
				<div class="awesome-heading-text ">WE'D LOVE TO HEAR ABOUT YOUR PROJECT.</div>
			</div>
			<!-- FORM -->
			<form action="POST" class="mt-5 pt-1">
				<div class="row mb-4 mt-5 row-cols-1 row-cols-sm-1 row-cols-md-3">
					<div class="col mb-2">
						<input type="text" class="form-control" placeholder="Name">
					</div>
					<div class="col mb-2">
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="col mb-2">
						<input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone">
					</div>
				</div>
				<div class="placeholder">
					<textarea class="form-control mb-4 pt-4" id="validationTextarea">
        </textarea>
				</div>
				<button type="submit" class="mx-auto btn btn-primary btn-lg">SUBMIT</button>
			</form>
		</div>
	</section>
<?php get_footer(); ?>