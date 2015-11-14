<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Website - Home</title>
	<!-- Common header for website -->
	<?php include 'header.php';?>
	
			<div class="row">	
				<section class="col-sm-8 col-md-9">
					<h1>Slogan goes Here</h1><br>
					<p>Homepage Text</p>
					<br><br>
					<div class="row">
						<div class="col-md-4">
							<img alt="Image" class="img-responsive" src="http://placehold.it/500x375">
						</div>
						<div class="col-md-4">
							<p>Address:<br>
							123 Somewhere Drive<br>
							Appleton, WI 54914<br><br>
							Phone: 123-456-7890<br>
							FAX: 123-456-7891</p>
							<br><br>
						</div>
						<div class="col-md-4">
							<img alt="Image" class="img-responsive" src="http://placehold.it/500x375">
						</div>
					</div>
				</section>
				
				<!-- Common sidebar for website -->  
				<aside class=" col-sm-4 col-md-3">
					<?php include 'side.php';?>
					
				</aside>
			</div>
	<?php include 'footer.php';?>