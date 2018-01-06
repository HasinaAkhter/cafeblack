<?php 
  $pageTitle = "Our Menu";
  include("inc/header.php");
  include("inc/data.php");
  
  
?>
  <div class="wrapper">
           <section id="menu-items">
		     <h2><?php echo $pageTitle;?></h2>
			 <p>
			   Each item in our menu is fresh and made from scratch. We make all our own stocks, dressings and sauces and always maintain consistency in our preparations. Our goal is to serve our valuable customers the fresh items and make them comfortable always.Check our menu to grab your favorite drink and dishes.
             </p>
			   <h2>Coffee & Drinks & Snacks</h2>
			   <ul>
			    <?php 
				foreach($drinkItems as $item){
					echo "<li>" .$item['title']. "\n" .$item['price']. "</li>";
					
				}
				?>
			   </ul>
			   <h2>Special Dishes<br>(View details by clicking on each dish)</h2>
				
				<ul>
				<!--
					syntax: foreach ($array as $key => $value)
					http://www.tuxradar.com/practicalphp/5/3/0
				-->
					<?php foreach ($menuItems as $dish => $item) { ?>
						
						<li><a href="dish.php?item=<?php echo $dish; ?>">
						    <?php echo $item["title"]; ?></a> 
							<?php echo $item["price"] ?>
							
		                </li>
					
					<?php } ?>
		</ul><br><br>
		    </section>
		 </div><!-- /content -->




<?php 
  include("inc/footer.php");
?>

<!--
				syntax: foreach ($array as $key => $value)
				http://www.tuxradar.com/practicalphp/5/3/0
			-->