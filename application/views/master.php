<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>admin_css/forms.css">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="<?php echo base_url();?>home">Multiple DB</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="<?php echo base_url();?>home">Home</a></li>

            <li><a href="<?php echo base_url();?>user_login">User 1</a></li>
            <li><a href="<?php echo base_url();?>user_login">User 2</a></li>
            <li><a href="<?php echo base_url();?>admin_login">Admin</a></li>

		</ul>
	</div>
</div>
<div id="splash-wrapper">
	<div id="splash">
		<h2>WelCome To Multiple DB connection</h2>
		<h4>MDB Is An OpenSource app Build On Top Of CodeIgniter The PHP Framework!!!</h4>
	</div>
</div>
<!-- end #header -->
<div id="wrapper">
	<div id="wrapper2">         
		<div id="wrapper-bgtop">           
			<div id="page">                    
				<div id="content">
					<?php echo $maincontent;?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				 <!-- <div id="sidebar">
					<div id="sidebar-bgtop">
						<div id="sidebar-bgbtm">
							<ul>
								<li>
									<div id="search" >
										<form method="get" action="#">
											<div>
												<input type="text" name="s" id="search-text" value="" />
												<input type="submit" id="search-submit" value="GO" />
											</div>
										</form>
									</div>
									<div style="clear: both;">&nbsp;</div>
								</li>
                                                                <?php if(isset($tempus)){ ?>
								<li>
                                                                    <h2>Recent Post</h2>
                                                                    <p>
                                                                        <?php foreach($recent_post as $a_post){ ?>
                                                                                    <a href="<?php echo base_url();?>home/blog_details/<?php echo $a_post->blog_id;?>">
                                                                                        <?php echo $a_post->blog_title;?>
                                                                                    </a>
                                                                                    <br/>
                                                                        <?php } ?>
                                                                    </p>
								</li>
                                                                <?php } ?>
								<li>
									<h2>Categories</h2>
									<ul>
                                                                            <?php foreach($all_category as $v_category){ ?>
                                                                                        <li><a href="<?php echo base_url();?>home/display_category_blog/<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name?></a></li>
                                                                            <?php } ?>
									</ul>
								</li>
                                                                <?php if(isset($tempus)){ ?>
								<li>
                                                                    <h2>Popular Post</h2>
                                                                    <p>
                                                                        <?php foreach($popular_post as $a_post){ ?>
                                                                                    <a href="<?php echo base_url();?>home/blog_details/<?php echo $a_post->blog_id;?>">
                                                                                        <?php echo $a_post->blog_title;?>
                                                                                    </a>
                                                                                    <br/>
                                                                        <?php } ?>
                                                                    </p>
								</li>   
                                                                <?php } ?>
								<li>
									<h2>Archives</h2>
									<ul>
										<li><a href="#">Aliquam libero</a></li>
										<li><a href="#">Consectetuer adipiscing elit</a></li>
										<li><a href="#">Metus aliquam pellentesque</a></li>
										<li><a href="#">Suspendisse iaculis mauris</a></li>
										<li><a href="#">Urnanet non molestie semper</a></li>
										<li><a href="#">Proin gravida orci porttitor</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end #sidebar 
				<div style="clear: both;">&nbsp;</div>-->
			</div> 
			<!-- end #page -->
		</div>
	</div> 
</div>
<div id="footer">
	<div class="content">
		<p>Copyright (c) 2014 All rights reserved By CorruptedCoders</p>
	</div>
</div>
<!-- end #footer -->
</body>
</html>
 