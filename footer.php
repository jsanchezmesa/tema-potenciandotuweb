</div> <!-- fin wrapper -->
<footer class="Footer-main">
	<?php wp_nav_menu( array(
			'theme_location' => 'datos-legales-menu',
			'container' => 'nav',
			'container_class' => 'Footer-main-menu',
			'container_id' => 'Footer-main-menu'
		) ); ?>
	<p>&copy; <?php bloginfo('name'); ?> - <?php echo date('Y');?></p>
</footer>

<!-- mensaje cookies -->
<div id="cookie-message" class="cookie-message">
	<p><strong>Uso de cookies.</strong> Este sitio utiliza cookies para que tengas la mejor experiencia de uso. Si continuas navegando estás dando tu consentimiento para la aceptación de dichas cookies y la <a href="http://jsanchezmesa.com/politica-de-cookies">política de cookies</a>.<button class="close">Aceptar</button></p>
</div>
<!-- fin mensaje cookies -->

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- mensaje cookies -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cookies.js"></script>
<!-- fin mensaje cookies -->

<!-- menu responsive -->
<script>
$(document).ready(function(){
	if(window.matchMedia("(max-width: 768px").matches){
      	var $buttonShowMenu = document.getElementById("showMenu");
        var $buttonHideMenu = document.getElementById("hideMenu");
        var $menu = document.getElementById("MainMenu");

        var showMenu = function(){
            $buttonShowMenu.classList.remove("is-active");
            $buttonHideMenu.classList.add("is-active");
            $menu.classList.add("is-active");
        }

        var hideMenu = function(){
            $buttonHideMenu.classList.remove("is-active");
            $buttonShowMenu.classList.add("is-active");
            $menu.classList.remove("is-active");
        }

        $buttonShowMenu.addEventListener("click", showMenu);

        $buttonHideMenu.addEventListener("click", hideMenu);
    }

});
</script>
<!-- fin menu responsive -->

<?php wp_footer(); ?>
</body>
</html>