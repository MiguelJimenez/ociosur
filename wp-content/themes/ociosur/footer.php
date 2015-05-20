	<footer>
		<section id="ft_widgets">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
		</section>
		<p id="copyright">Ocio Sur © 2015 - Miguel Ángel Jiménez Gómez</p>
	</footer>

	
	<?php wp_footer();?>
</body>
</html>