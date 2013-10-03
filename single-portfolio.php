<?php
/**
 * Template for displaying a portfolio post
 *
 * @package Portfolio Press
 */

get_header( 'portfolio' ); ?>

	<div id="coluna-direita" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div id="conteudo-single">
                <?php the_content(); ?>
                </div><!-- #conteudo-single -->
				<div id="editar-single">
				<?php edit_post_link( __( 'Editar', 'portfoliopress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				
			<?php endwhile; // end of the loop. ?>

	</div><!-- #coluna-direita -->

<?php get_footer(); ?>