<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MEU
 */

get_header();
?>
						

<h1>
Explore transmissões passadas
</h1>

<div id="campaignbtns">
<h3>Filtre por campanha</h3>
  <button href="" class="btn active" value="post">Todos</button>
  <button class="btn" data-target="first" value="acari">Acari</button>
  <button class="btn" data-target="second" value="alemao">Complexo do Alemão</button>
  <button class="btn" data-target="third" value="mariellepresente">MariellePresente</button>
  <button class="btn" data-target="fourth" value="rio-2016">Rio 2016</button>
</div>

<div class="campaigndescription" id="first">
	<p><?php echo category_description(get_category_by_slug( 'acari' )->term_id); ?></p>
</div>

	<div class="campaigndescription" id="second">
	<p><?php echo category_description(get_category_by_slug( 'alemao' )->term_id); ?></p>
	</div>

<div class="campaigndescription" id="third">
	<p><?php echo category_description(get_category_by_slug( 'mariellepresente' )->term_id); ?></p>
	</div>

<div class="campaigndescription" id="fourth">
	<p><?php echo category_description(get_category_by_slug( 'rio-2016' )->term_id); ?></p>
	</div>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
			
						endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
