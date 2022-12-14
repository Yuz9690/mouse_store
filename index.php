
<!------------ Header starts --------------------->
<?php include('includes/header.php'); ?>
<!------------ Header ends ----------------------->

  
<!------------ Navigation Bar ends -------------->  

<!------------ Content wrapper starts -------------->
  <div class="content_wrapper">
  
  <?php if(!isset($_GET['action'])){ ?>
  
    <div id="sidebar" class="sidebar_desktop">
    
    <div class="sidebar_box">
	  <div id="sidebar_title"><i class="fa fa-list-alt"></i> Categories</div>
	  <ul id="cats">		
		<?php getCats();?>
	  </ul>
	 </div> 
     
     <div class="sidebar_box">
	  <div id="sidebar_title"><i class="fa fa-reorder"></i> Brands</div>
	  <ul id="cats">
	    <?php getBrands();?>
	  </ul>
	 </div>
      
	</div><!-- /#sidebar -->
	
	<div id="content_area">
	
	<?php cart();?>
	
	  <div id="products_box">	    
		
		<?php getPro();?>
		
		<?php get_pro_by_cat_id();	?>		
		
		<?php get_pro_by_brand_id(); ?>		
		
	  </div><!-- /#products_box -->
	  
	</div><!-- /#content_area -->
	
	<?php }else{ ?>
	
	<?php 
	include('login.php'); 
	} 
	?>
	
	<div id="sidebar" class="sidebar_mobile">
    
    <div class="sidebar_box">
	  <div id="sidebar_title"><i class="fa fa-list-alt"></i> Categories</div>
	  <ul id="cats">		
		<?php getCats();?>
	  </ul>
	 </div> 
     
     <div class="sidebar_box">
	  <div id="sidebar_title"><i class="fa fa-reorder"></i> Brands</div>
	  <ul id="cats">
	    <?php getBrands();?>
	  </ul>
	 </div>
      
	</div><!-- /#sidebar -->
	
  </div><!-- /.content_wrapper-->
  <!------------ Content wrapper ends -------------->
  
  <?php include ('includes/footer.php'); ?>
  
  
