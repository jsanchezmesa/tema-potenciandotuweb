<?php get_header(); ?>

<h1 class="header-categories">Artículos de <?php the_author(); ?></h1>

<section class="section-main section-main-categories" id="main">

	<?php $post = $posts[0]; ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<article class="articulo">
		<h2 class="articulo-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="fecha-articulo icon-date"> Publicado el <?php the_time('j/m/Y'); ?></div>
		<div class="icon-comments"> <?php comments_popup_link("0 comentarios", "1 comentario", "% comentarios", "numero-comentarios", "Comentarios apagados"); ?></div>
		<div class="thumbnail">
			<?php if(has_post_thumbnail()){
					the_post_thumbnail();
				}
			?>
		</div>
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
	</article>
</section><!-- fin de section-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>