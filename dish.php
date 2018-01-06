<?php
  $pageTitle = "Our Menu";
  include("inc/header.php");
  include("inc/data.php");
  
   
   if(isset($_GET['item'])) {
		$menuItem = ( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}

?>

        <div class="wrapper">
           <section id="dish">
	        <h3><?php echo $dish["title"]; ?><span class="price"><?php echo $dish ["price"]; ?></span></h3>
			<p><?php echo $dish["blurb"]; ?><br><br>
			  <span>
			    <img class ="picture" src="<?php echo $dish['img'];?>" alt="<?php echo $dish['title'];?>">
			   </span>
			</p>
			
			
		    <br>
		  
		  
		  </section><!--/dish-->
		 </div><!-- /content -->
			   

	<p class="return-button">		   
	<a  href="menu.php">Back to Menu</a>		   
	</p>		   
			   
<?php include("inc/footer.php");?>













