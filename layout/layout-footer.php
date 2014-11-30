<div class="pie-pagina">
			<footer class="main-footer">
				<div class="footer__section">
					<!-- html o php segun necesidad -->
				</div>
				<div class="footer__section">
					<!-- html o php segun necesidad -->
				</div>
				<div class="footer__section">
					<?php 
						// Si existen algun widget, lo importamos
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar') ) : endif; 
					?>
				</div>
			</footer>
</div> <!-- div pie-pagina -->