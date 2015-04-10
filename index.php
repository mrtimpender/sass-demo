<?php 

 $pageTitle = "Home";
?>

<?php include 'header.php'; ?>

	<div class="hero">
		<div class="row">
			<?php if (empty($userName)) : ?>
				<h1>Hey, I don't recognize you.  Please <a href="login.php">login here.</a></h1>
			<?php else : ?>
				<h1> Hi <?php echo $userName ?>, Welcome back!</h1>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="column one-half">
			<h3>Column Heading</h3>
			<p> Church-key dolore plaid PBR&B. Cillum artisan small batch laboris. Shabby chic food truck wayfarers, church-key bespoke skateboard laboris locavore listicle drinking vinegar tote bag wolf aliqua hoodie. Dreamcatcher Portland seitan occaecat officia XOXO. Forage eiusmod single-origin coffee, health goth taxidermy pork belly gluten-free sapiente mustache American Apparel asymmetrical chia. Keffiyeh eu reprehenderit letterpress sriracha. Kogi Odd Future forage non, fixie pickled slow-carb sint skateboard fanny pack fugiat.</p>
		</div>
		
		<div class="column one-half">
			<h3>Column Heading2</h3>
			<p> Fap craft beer semiotics skateboard Odd Future, sustainable pickled gluten-free artisan. Sriracha swag keytar, chia Intelligentsia lo-fi whatever bicycle rights plaid. Occupy before they sold out gentrify trust fund. 8-bit banh mi American Apparel whatever. Tilde Williamsburg single-origin coffee, tofu Marfa cardigan DIY wolf four dollar toast synth art party tousled food truck. Tumblr meditation freegan direct trade meh, American Apparel Odd Future mustache plaid chia mumblecore four dollar toast. Tattooed sustainable brunch, farm-to-table lo-fi 8-bit Williamsburg Bushwick aesthetic migas swag typewriter.</p>
	
		</div>
	</div>
  	<!--- Content Goes Here -->


<?php include 'footer.php'; ?>
