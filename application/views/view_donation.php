<?php
function main()
{
?>
<?php
	$CI = get_instance();
	$donation = $CI->db->get_where('donation', array('id' => $CI->session->flashdata('id')))->result_array();
?>
   <div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">DONATIONS</a>
							</li>
							<li class="active">DONATION INFO</li>
						</ul><!-- /.breadcrumb -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								</div><!-- /.row -->
								<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="info-section">
											<?php
												if($donation){
												foreach ($donation as $row) {
											?>
											<div class="widget-box ui-sortable-handle">
												<div class="widget-header widget-header-small">
													<h4><i class="fa fa-television"></i> Viewing Donation Detail</h4>
												</div>
												<div class="widget-body" style="padding:5px;">
													<div class="row">
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="profile-user-info-striped">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Expense Unique ID </div>
																	<div class="profile-info-value">
																		<span class="" id="username" style="display: inline;"><?php echo $row['id']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Name</div>
																	<div class="profile-info-value">
																		<span class="" id="name" style="display: inline;"><?php echo $row['name']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Amount</div>
																	<div class="profile-info-value">
																		<span class="" id="amount" style="display: inline;"><?php echo $row['amount']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Mobile</div>
																	<div class="profile-info-value">
																		<span class="" id="mobile" style="display: inline;"><?php echo $row['mobile']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Email</div>
																	<div class="profile-info-value">
																		<span class="" id="email" style="display: inline;"><?php echo $row['email']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Date</div>
																	<div class="profile-info-value">
																		<span class="" id="email" style="display: inline;"><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name"> Remarks</div>
																	<div class="profile-info-value">
																		<span class="" id="remarks" style="display: inline;"><?php echo $row['remarks']; ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<a class="tooltip-error btn btn-primary" data-rel="tooltip" title="Edit" href="<?php echo base_url('main/donation/edit/'.$row['id']); ?>">UPDATE DONATION
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php }} ?>
										</div>
									</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
}
include "template_table.php";
?>
