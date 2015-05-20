<?php get_header(); ?>

<section id="main">
		<section id="articles_list">
			<?php if ( have_posts() ) : 
			 printf(__("<h2 class='search'>Resultados de la búsqueda para: %s</h2>"),"<mark>".get_search_query()."</mark>");
			 echo "<hr>";
		while ( have_posts() ) : the_post(); ?>

			<article>
				<div class="thumb"><a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a></div>

				<hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
				<div class="date"><?php the_time('j \d\e\ F \d\e\ Y');?> en <span><?php the_category(', ');?></span></div>
				<div class="extract"><?php the_excerpt();?></div>
			</article>
		
		<?php endwhile; else: ?>
		<h2>No se encontraron Articulos</h2>
		<?php endif; ?>

			<div id="pagination">
				<p><?php next_posts_link('<- Post Siguientes')?>
				<?php previous_posts_link('Post Anteriores ->') ?></p>
			</div>
		</section>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>