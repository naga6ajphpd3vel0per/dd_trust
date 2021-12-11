<?php
function main()
{
?>
<?php
	$CI = get_instance();
	$expenses = $CI->db->get_where('expenses')->result_array();

	$query = $CI->db->query("SELECT id, voucher_id, amount, name, mobile, email, address, remarks, spent, created_at FROM expenses where delete_at is not null order by id desc");
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
								<a href="#">EXPENSES</a>
							</li>
							<li class="active">DELETED EXPENSES LISTS</li>
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
										<div class="table-header">DELETED EXPENSES LIST</div>
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
														<th>VOUCHER ID</th>
														<th>NAME</th>
														<th class="hidden-480">AMOUNT</th>
														<th>MOBILE NO</th>
														<th class="hidden-480">EMAIL</th>
														<th class="hidden-480">DATE</th>
														<th class="hidden-480">SPENT FOR</th>
														<th class="hidden-480">REMARKS</th>
														<th class="hidden-480">UNDO DEL</th>
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
														<td><?php echo $row['voucher_id']; ?></td>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo $row['amount']; ?></td>
														<td><?php echo $row['mobile']; ?></td>
														<td><?php echo $row['email']; ?></td>
														<td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>
														<td><?php echo $row['spent']; ?></td>
														<td><?php echo $row['remarks']; ?></td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="red" href="<?php echo base_url('main/expense/undo_delete/'.$row['id']); ?>" onclick="return confirm('Are you sure want to undo delete?');">
																	<i class="ace-icon fa fa-recycle bigger-130"></i>
																</a>
															</div>
															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>
																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a class="tooltip-error" data-rel="tooltip" title="Delete" href="<?php echo base_url('main/expense/undo_delete/'.$row['id']); ?>" onclick="return confirm('Are you sure want to delete?');">
																				<span class="red">
																					<i class="ace-icon fa fa-recycle bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="<?php echo base_url('main/expense/info/'.$row['id']); ?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
																<a class="red" href="<?php echo base_url('main/expense/delete_perm/'.$row['id']); ?>">
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
																			<a class="tooltip-error" data-rel="tooltip" title="Delete" href="<?php echo base_url('main/expense/delete_perm/'.$row['id']); ?>" onclick="return confirm('Are you sure want to delete?');">
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
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
}
include "template_table.php";
?>
