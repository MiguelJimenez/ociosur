<?php get_header(); ?>

<section id="main">
		<section id="articles_list">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article>

				<hgroup><h2><?php the_title();?></h2></hgroup>
				<div class="date"><?php the_time('j \d\e\ F \d\e\ Y');?> en  <span><?php the_category(', ');?> | <?php the_tags(' ');?></span></div>
				<div class="extract"><?php the_content();?></div>
			</article>
		
		<?php endwhile; else: ?>
		<h1>No se encontraron Articulos</h1>
		<?php endif; ?>

		<div id="comentarios">
			<h3>Comentarios</h3>
			<div id="caja_comentarios">
				 <?php comments_template(); ?>
			</div>
		</div>

		</section>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>