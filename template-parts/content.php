<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MEU
 */

?>

			
			
			<div id="contenedor" class="contenedor">
<div class="item">
<article id="post-<?php the_ID(); ?>" <?php post_class( '', $post_id ); ?>>
				
				<figure class="post-image">
					<?php meu_post_thumbnail('<img>', '</img>'); ?>
											<a class="image-wrap" href="<?php echo(esc_url( get_permalink() )) ?>">
									<div class="overlay">
									<div class="description">
									<?php the_title( '<h3>', '</h3>' ); ?>
         							 <div class="btn">Veja a transmissão</div> 
         							 
         							</div>
									
									<time>
										<?php the_time('F jS, Y') ?>
									</time>
         							</div>
									</a>
							</figure>
							
</article>	

</div>

</div>



