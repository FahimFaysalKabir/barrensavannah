 <!--
Design by Bryant Smith
http://www.bryantsmith.com
http://www.aszx.net
email: template [-at-] bryantsmith [-dot-] com
Released under Creative Commons Attribution 2.5 Generic.  In other words, do with it what you please; but please leave the link if you'd be so kind :)

Name       : Barren Savannah
Description: One column, with top naviation.  All divs, validations: XHTML Strict 1.0 & CSS
Version    : 1.0
Released   : 20081009
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/barrensavannah.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
<title><?php bloginfo('title');?></title>
<?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="page">
    <?php wp_nav_menu('um')?>
	</div>
    <div id="mainPicture">
    	<div class="picture" style="background-image:url(<?php header_image();?>)">
        	<div id="headerTitle"><?php bloginfo('title');?></div>
            <div id="headerSubtext"><?php bloginfo('description');?></div>
        </div>
    </div>
        <div class="contentBox">
    	<div class="innerBox">
      <?php while(have_posts()):the_post(); ?>
        	<h1><?php the_title(); ?></h1>
          <div class="contentText">
             <?php the_content(); ?>
                </div>

                <?php endwhile; ?>
        
          
          <!-- Please leave this in place after all of your content - thanks :) -->
<div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a></div>
<!-- Please leave this in place after all of your content - thanks :) -->
        
        
        

        
        </div>






    </div>
    <?php wp_footer(); ?>       
</body>
</html>
