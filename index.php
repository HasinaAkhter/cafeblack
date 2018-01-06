<?php 
 $pageTitle = "Cafe Black";
 include("inc/header.php");

?>
<div class="wrapper">
           <section>
		     <h2>Welcome</h2>
			 <p>
			   At Café Black we are serving great coffee, tea with  mouthwatering snacks. Fresh foods and drink are our specialty. 
               Our interactive dining style is comfortable and we are always great at our service! 
               We are operating since 2009 to provide a place where people feel they are at home!
               <p>
               <p>
			   Each item in our menu is fresh and made from scratch. We make all our own stocks, dressings and sauces and always consistent in our preparations. Our goal is to serve our valuable customers the fresh items and make them comfortable and feel homely always. 
               Our team is consisted of dedicated and hard working workers who adore cooking! They are happy in their work and we believe our product is a direct result of this from the food to the general atmosphere.
               We like what we do. We like serving delicious food in a relaxed atmosphere. We are friendly, but not intrusive, and always efficient! Everyday we get a lot of compliments for our food, and we like that and we work hard to keep those compliments coming from our valued customers.
               </p>
			   
			   <p>
			   Please visit our place to have amazing foods and relax for a while. <a href="contact.php">Contact us</a> if you have any questions.

			   Check our <a href="menu.php">menu</a> for the items you like and reserve your table in advance.
			   
			   </p>
			  
			   <main>
			    <h3>View our image gallery</h3>
			    
				<?php $dir = glob('images/{*.jpg}', GLOB_BRACE);?>
				 <?php foreach ($dir as $value){?>
				  <div id="thumbnail">
					<a href="<?php echo $value; ?>">
					  <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>"> 
					</a>
				  </div> 
				 <?php } ?>
              </main>
					
		   </section>
		   <br><br>
		</div><!-- /content -->
		
<?php 
 include("inc/footer.php");

?>