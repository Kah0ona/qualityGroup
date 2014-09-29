<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<content class="Content-Top u-gridRow">
        		<aside class="Content-Top-Aside-Right u-gridCol4">
            		<h4 class="Content-top-Left-h4-1">Welkom bij</h4>
            		<img class="Content-Left-Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-mid.png"/>
            		<h4 class="Content-top-Left-h4-2"> regio Den Dolder</h4>
            		<h4 class="Content-top-Left-h4-3"> Van Thuiszorg op maat tot kledingherstel in<br /> Den Dolder en omstreken</h4>
        		</aside>
        		<article class="Content-Article-Right u-gridCol8"> 
                    <div class="Slider">
                        <img class="Header-Banner-Achtergrond"src="<?php echo get_stylesheet_directory_uri(); ?>/img/20452090-stroom-van-schoon-water-gieten-in-de-handen-van-kinderen.jpg" >
                        <img class="Header-Banner-Achtergrond"src="<?php echo get_stylesheet_directory_uri(); ?>/img/15304488-vrouw-doet-klusjes-in-de-badkamer-thuis-schoonmaken-spoelbak-en-kraan-met-spray-schoonmaakmiddel-cro.jpg" >
                    </div> 
        		</article>
        	</content> 

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            
            <content class="Content-Bottom  u-gridRow">
                <article class="Content-Article-Right u-gridCol4"> 
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Particuliere Schoonmaak</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/particuliereSchoonmaak.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/particuliere-schoonmaak/">Meer info ></a></h6>
                    </div>
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Zakelijke schoonmaak</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/zakelijkeSchoonmaak.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/zakelijke-schoonmaak/">Meer info ></a></h6>
                    </div>
                </article>
                
                <article class="Content-Article-Mid u-gridCol4"> 
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Strijkservice</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/strijkService.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/strijkservice/">Meer info ></a></h6>
                    </div>
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Glasbewassing</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/glasbewassing.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/glasbewassing/">Meer info ></a></h6>
                    </div>
                </article>

                <article class="Content-Article-Left u-gridCol4"> 
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Kledingherstel</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/kledingherstel.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/strijkenservice/">Meer info ></a></h6>
                    </div>
                    <div class="Content-Bottom-Images">
                        <h4 class="Content-Bottom-Title">Thuiszorg op Maat</h4>
                        <img class="Content-Bottom-Images-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/thuiszorgOpMaat.jpg" >
                        <h6 class="Content-Bottom-Images-Text"><a href="http://qualitygroep.lokaalgevonden.nl/thuiszorg-op-maat/">Meer info ></a></h6>
                    </div>
                </article>
            </content> 
			
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
