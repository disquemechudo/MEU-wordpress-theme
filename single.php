<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MEU
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="videos.js"></script>
	
	

</head>

<body>

<?php wp_head(); ?>
<div class="wrap">

<div class="videocontainer">
	
<div class="fb-video">
<?php the_title( '<h2>', '</h2>' ); ?>
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalistaslivres%2Fvideos%2F712252352231978%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="false"></iframe>
	
	</div>

			<div class="tab">
      							<input id="tab-one" type="checkbox" name="tabs">
     							<label class="accordion-label" for="tab-one">
     								<p>About this campaign</p>
     								<i></i>
     							</label>
     							<div class="tab-content">
									<p>
						<?php
						$categories = get_the_category();
						echo category_description( $categories[0] ); ?> 
												</p>
									
									</div>
    </div>
	</div>


<div class="context">

<div id="childbox">
<div id="buttonpanel">
<button class="btn active" id="helptranslate" data-target="translation">Translate</button>
  <button class="btn" id="givecontext" data-target="givingcontext">Give context</button>
 </div>

<div class="box" id="translation">
<textarea name="text" class="translationbox"></textarea>
<div class="submit">
	<button  class="btn" type="submit" value="Submit">Submit</button>
		</div>
</div>

<div class="box" id="givingcontext">
<textarea name="text" class="translationbox"></textarea>
<div class="submit">
	<button  class="btn" type="submit" value="Submit">Submit</button>
		</div>
</div>

</div>

<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'meu' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
?>							
	
	
	<div id="primary">
		<div id="content">

	<div class="newcontentbuttons">
		<div id="togglecontent">
<button class="btn active" id="seetranslation" data-target="addedtranslation">Translation</button>
  <button class="btn" id="seecontext" data-target="addedcontext">Context</button>
		
 </div>
		<div id="refresh">
			<button class="btn" onClick="history.go(0)" VALUE="Refresh">
				<i style="font-size:18px" class="fa">&#xf021;</i>
			</button>
			</div>

			</div>
		<div class="clearfix">
			</div>
		<div class="addedcontent" id="addedtranslation">
			<?php
		while ( have_posts() ) :
			the_post();
			the_title ('<p>','</p>');

		endwhile; // End of the loop.
		?>
			</div>
			
				<div class="addedcontent" id="addedcontext">
			
		<?php
		while ( have_posts() ) :
			the_post();
			the_content ('<p>','</p>');

		endwhile; // End of the loop.
		?>
					</div>

		</div><!-- #main -->
	</div><!-- #primary -->

	</div>
</div>



