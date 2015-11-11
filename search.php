<?php get_header(); ?>

<section class="section-main" id="main">
	<h1>Resultados de la búsqueda:</h1>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<article class="articulo">
		<h2 class="articulo-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<small class="fecha-articulo">Publicado el <?php the_time('j/m/Y'); ?> por <?php the_author(); ?> -
	<?php comments_popup_link("0 comentarios", "1 comentario", "% comentarios", "numero-comentarios", "Comentarios apagados"); ?></small>
		<?php the_content('Leer más'); ?>
		</article>
		<?php endwhile; ?>

		<?php if(function_exists('pagination')){
				pagination($additional_loop->max_num_pages);
			}
		?>
	<?php else: ?>
		<p><?php _e('Lo siento, no hay resultados para tu búsqueda.') ?></p>
	<?php endif; ?>
</section><!-- fin de section-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>