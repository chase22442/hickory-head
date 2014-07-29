<?php include('ico/header.php');
$pageTitle = "Home"; 
?>

		<!-- Start of image slider.  -->
	<?php include("ico/slide.php") ;?>
		<!-- Another speration from image slider to the colomn start.  -->
		<hr />
    <h3>Welcome</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis reprehenderit, perspiciatis et ducimus aliquid dolore. Omnis in quis voluptate, ipsam unde, iusto. Rerum blanditiis, incidunt voluptas natus quibusdam delectus totam.</p>
		<!-- Begining of colums -->
<div class="grid-container"> 
<!-- Each colmn should have a neat and nice style// Possible individually - kinda like Google's -->
	 	<div class="grid-5 grinderContain">
	 		<div class="findUs"><p>Find Us</p></div>
	 		<div class="pickup"><p>We'll Pick You Up</p></div> 
	 		<div class="sermons">
	 			<p>Sermons</p>
	 		</div>
	 	</div>
 	<div class="grid-7">
 	     <h2>News</h2> 
 	     <!-- Begin The News Content --> 
 	     <div class="newscontent">
 	     	<h3>Church's First webstie</h3> 
 	     	<p>On july  7th we lanched our first website</p>
 	     </div>
 	</div>
 	<!-- Shoud be the same across all page formats and devices.  -->
         <?php include('ico/footer.php'); ?>
 </div>