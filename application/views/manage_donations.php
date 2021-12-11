<?php
function main()
{
?>
<?php
	$CI = get_instance();
	$donation = $CI->db->get_where('donation')->result_array();

	$query = $CI->db->query("SELECT id, rec_id, amount, name, mobile, email, address, remarks, collected_by, created_at FROM donation where delete_at is null order by id desc");
	$res = $query->result_array();
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
							<li class="active">MANAGE DONATIONS</li>
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
										<div class="table-header">
											DONATION LIST
										</div>
										<!-- div.table-responsive -->
										<!-- div.dataTables_borderWrap -->
										<div style="overflow-x: scroll">
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>RECEIPT ID</th>
														<th>NAME</th>
														<th class="hidden-480">AMOUNT</th>
														<th>MOBILE NO</th>
														<th class="hidden-480">EMAIL</th>
														<th class="hidden-480">DATE</th>
														<th class="hidden-480">COLLECTED BY</th>
														<th class="hidden-480">REMARKS</th>
														<th class="hidden-480">ACTION</th>
													</tr>
												</thead>
												<tbody>
													<?php
														if($res){
														foreach ($res as $row) {
													?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>
															<a href="<?php echo base_url('main/donation/info/'.$row['id']); ?>"><?php echo $row['rec_id']; ?></a>
														</td>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo $row['amount']; ?></td>
														<td><?php echo $row['mobile']; ?></td>
														<td><?php echo $row['email']; ?></td>
														<td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>
														<td><?php echo $row['collected_by']; ?></td>
														<td><?php echo $row['remarks']; ?></td>
														<!-- <td class="hidden-480">
															<span class="label label-sm label-warning">IN-ACTIVE</span>
														</td> -->
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="<?php echo base_url('main/donation/info/'.$row['id']); ?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
																<a class="green" href="<?php echo base_url('main/donation/edit/'.$row['id']); ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
																<a class="red" href="<?php echo base_url('main/donation/delete/'.$row['id']); ?>" onclick="return confirm('Are you sure want to delete?');">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>
																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												<?php }} ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>
											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>
															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>
														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>
														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>
														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>
														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>
												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>
													<li class="active">
														<a href="#">1</a>
													</li>
													<li>
														<a href="#">2</a>
													</li>
													<li>
														<a href="#">3</a>
													</li>
													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
}
include "template_table.php";
?>
