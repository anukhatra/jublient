<footer id="footer">
	<div class="container">
		<div class="row top">
		

			<div class="col-xs-12 col-sm-6 col-md-4">
				<div id="footer-sidebar-1">
					<?php
					if (is_active_sidebar('footer-sidebar-1')) {
						dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<div id="footer-sidebar-2">
					<?php
					if (is_active_sidebar('footer-sidebar-2')) {
						dynamic_sidebar('footer-sidebar-2');
					}
					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
			<div id="footer-sidebar-3">
					<?php
					if (is_active_sidebar('footer-sidebar-3')) {
						dynamic_sidebar('footer-sidebar-3');
					}
					?>
				</div>
				
			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
			<div id="copyrights">
					<?php
					if (is_active_sidebar('copyrights')) {
						dynamic_sidebar('copyrights');
					}
					?>
				</div>
			
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>



</body>

</html>