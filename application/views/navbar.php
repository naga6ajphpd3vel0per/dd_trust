<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-users"></i>
							&nbsp; AIADSWT
						</small>
					</a>
				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>
								<i class="ace-icon fa fa-caret-down"></i>

							</a>



							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>

									<a href="<?php echo base_url('main/logout'); ?>">

										<i class="ace-icon fa fa-power-off"></i>

										Logout

									</a>

								</li>

							</ul>

						</li>

					</ul>

				</div>

			</div><!-- /.navbar-container -->

		</div>

		  <?php 

            $success_msg = $this->session->flashdata('success_msg');
            //$success_msg = $this->session->tempdata('success_msg');

            $error_msg = $this->session->flashdata('error_msg');

          ?>

          <?php if($success_msg){
			  echo "<script>$(function(){setTimeout(function(){alert('".$success_msg."')},1000)});</script>";
			  if(isset($_SESSION['success_msg'])){
				  unset($_SESSION['success_msg']);
			  }
          	?>

          <?php } if($error_msg){
			  echo "<script>$(function(){setTimeout(function(){alert('".$error_msg."')},1000)});</script>";
			  if(isset($_SESSION['error_msg'])){
				  unset($_SESSION['error_msg']);
			  }
          	?>

          <?php } ?>
