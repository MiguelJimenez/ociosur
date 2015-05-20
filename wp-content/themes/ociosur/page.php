<?php get_header(); ?>

<section id="main">
		<section id="articles_list">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article>

				<hgroup><h2><?php the_title();?></h2></hgroup>
				
				<div class="extract"><?php the_content();?></div>
			</article>
		
		<?php endwhile; else: ?>
		<h1>No se encontraron Articulos</h1>
		<?php endif; ?>

		</section>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>