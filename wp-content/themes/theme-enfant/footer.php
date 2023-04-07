</main>
</div>
<footer id="footer" role="contentinfo">

<nav>
		<!--afficher le menu header-->
			<?php wp_nav_menu(array(
				'theme_location' => 'footer',
				'menu_class' => 'menu-footer', // Classe CSS pour le menu

				
			)); ?>
		</nav>
		
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>	