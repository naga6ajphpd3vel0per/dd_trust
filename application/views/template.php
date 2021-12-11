<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	<body class="no-skin">
		<?php include "navbar.php"; ?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
				<?php include "menu.php";
				main();
				include "footer.php"; ?>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<?php  include "scripts.php"; ?>
	</body>
</html>
