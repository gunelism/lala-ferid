<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Blogsite.com Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
			     <a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="login_button">
			    <ul>
			    <li><a href="#">Sign in</a><li> | 
			    <li><a href="#">Login</a></li>
			    </ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="header_bottom">
		<div class="wrap">
			<div class="menu">
			    <ul>
			    	<li><a href="index.html">HOME</a></li>
			    	<li><a href="single.html">ARTICLES</a></li>
			    	<li><a href="single.html">SERVICES</a></li>
			    	<li><a href="#">LOGOS</a></li>
			    	<li><a href="single.html">TOOLS</a></li>
			    	<li><a href="single.html">ICONS</a></li>
			    	<li><a href="single.html">WALLPAPERS</a></li>
			    	<li><a href="index.html">HELP</a></li>
			    	<li><a href="contact.html">CONTACT</a></li>
			    </ul>
			</div>
			<div class="search_box">
			    <form action="search.php" method="post">
			    <input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" name="submit" value="">
			    </form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="main">
		<div class="content">

			<?php 
				include 'd/config.php';
		$newquer = $connect -> select("crudoop2");
		$target = "images/";
		while ($row = mysqli_fetch_assoc($newquer)) {
			 ?>
			<div class="box1">

			<!--     <h2><a href="single.html">Making it look like readable English. Many desktop publishing packages and web page</a></h2>
			    <span>By Kieth Deviec- 2 hours ago</span> -->
			    <?php 
					$arr=[];
					$arr[] = explode('.', $row['text']);
				?>
					<h2><a href="single.php?id=<?=$row['id'] ?>" ><?php foreach ($arr as $key => $value) {
						echo  substr($value[0], 0,50);		
					} 
						?> </a></h2>
				<div class="box1_img">
				   
				    <img src="<?= $target .  $row['src']?>">
				</div>   
				<div class="data">
				  
				  
				    <p><?= substr($row['text'],0,400) ?></p>

				    <a href="single.php?id=<?=$row['id'] ?>">Continue reading >>></a>
				</div>
			<div class="clear"></div>
			</div>
			
			<?php 
		}
			?>
		
		<div class="page_links">
			<div class="next_button">
				 <a href="#">Next</a>
			</div>
			<div class="page_numbers">
			    <ul>
				<li><a href="#">1</a>
				<li><a href="#">2</a>
				<li><a href="#">3</a>
				<li><a href="#">4</a>
				<li><a href="#">5</a>
				<li><a href="#">6</a>
				<li><a href="#">... Next</a>
				</ul>
			</div>
		<div class="clear"></div>
			<div class="page_bottom">
				<p>Back To : <a href="#">Top</a> |  <a href="#">Home</a></p>
			</div>
		</div>
		</div>
	<div class="sidebar">
		<div class="side_top">
		    <h2>Recent Feeds</h2>
			<div class="list1">
				 <ul>
					<?php 
		    $newquer3 = $connect -> select2("crudoop2", "date");
		    while ($row3 = mysqli_fetch_assoc($newquer3)) {
		    	
		    
		    ?>
			  <li><a href="#"> 
			  <?php 
				echo substr( $row3['text'],0,43);
			   ?>
			  </a></li>
			  <?php
			}
		     ?>
					
				</ul>
			</div>
		</div>
	<div class="side_bottom">
	    <h2>Most Viewed</h2>
		<div class="list2">
		    <ul>
		    <?php 
		    $newquer2 = $connect -> select2("crudoop2", "view");
		    while ($row2 = mysqli_fetch_assoc($newquer2)) {
		    	
		    
		    ?>
			  <li><a href="#"> 
			  <?php 
				echo substr( $row2['text'],0,43);
			   ?>
			  </a></li>
			  <?php
			}
		     ?>
			 
			</ul>
		</div>
	</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="footer_grid1">
			<h3>About Us</h3>
			<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
		</div>
		<div class="footer_grid2">
			<h3>Navigate</h3>
				<div class="f_menu">
					<ul>
				       <li><a href="index.html">Home</a></li>
				       <li><a href="single.html">Articles</a></li>
				       <li><a href="contact.html">Contact</a></li>
				       <li><a href="#">Write for Us</a></li>
				       <li><a href="#">Submit Tips</a></li>
				       <li><a href="#">Privacy Policy</a></li>
				   </ul>
				</div>
		</div>
	<div class="footer_grid3">
		<h3>We're Social</h3>
		<div class="img_list">
		    <ul>
		     <li><img src="images/facebook.png" alt="" /><a href="#">Facebook</a></li>
		     <li><img src="images/flickr.png" alt="" /><a href="#">Flickr</a></li>
		     <li><img src="images/google.png" alt="" /><a href="#">Google</a></li>
		     <li><img src="images/yahoo.png" alt="" /><a href="#">Yahoo</a></li>
		     <li><img src="images/youtube.png" alt="" /><a href="#">Youtube</a></li>
		     <li><img src="images/twitter.png" alt="" /><a href="#">Twitter</a></li>
		     <li><img src="images/yelp.png" alt="" /><a href="#">Help</a></li>
		    </ul>
		</div>
	</div>
	</div>
<div class="clear"></div>
</div>
	<div class="f_bottom">
		<p>© 2012 rights Reseverd | Design by<a href="http://w3layouts.com/"> W3Layouts</a></p>
	</div>
</body>
</html>

<style type="text/css">
	.box1_img img{
		width: 250px;
		height: 150px;
	}
</style>