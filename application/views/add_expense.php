<?php
function main()
{
	$CI = get_instance();
  	/*$info = $CI->db->order_by('id','desc')->get_where('expenses')->result_array();
  	if ($info) {
	 	foreach ($info as $row) {
			$num = $row['id'] + 1;
			$id = 'VCH'.$num;
	 	}
  	} else{
	 	$id = 'VCH1';
  	}*/

	$query_amt = $CI->db->query("SELECT sum(amount) as amount FROM donation where delete_at is not null");
	$res_amt = $query_amt->result_array();
	if($res_amt){
		$DonAmt = $res_amt[0]['amount'];
	}
	else{
		$DonAmt = 0;
	}

	$query_amt = $CI->db->query("SELECT sum(amount) as amount FROM expenses where delete_at is not null");
	$res_amt = $query_amt->result_array();
	if($res_amt){
		$ExpAmt = $res_amt[0]['amount'];
	}
	else{
		$ExpAmt = 0;
	}

	$TotAmt = $DonAmt - $ExpAmt;

	$query = $CI->db->query("SELECT max(id) as id FROM expenses order by id desc");
	$res = $query->result_array();
	if($res){
		$num = $res[0]['id'] + 1;
		$id = 'VCH'.$num;
	}
	else{
		$id = 'VCH1';
	}
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
							<li class="active">ADD EXPENSE</li>
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
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="widget-body">
				<div class="widget-main">
					<form name="form_expense" class="form-horizontal" action="<?php echo base_url('main/expense/add'); ?>" method="post" enctype="multipart/form-data" >
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label for="">VOUCHER ID  <span class="text-danger">*</span></label>
							<input class="form-control input-sm" name="voucher_id" type="text" readonly placeholder="VOUCHER ID" value="<?php echo $id; ?>" >
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label for="">Date <span class="text-danger">*</span></label>
								<div class="input-group">
								<input class="form-control date-picker" name="created_at" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
									</div>
								<div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('created_at'); ?></div>
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">AMOUNT <span class="text-danger">*</span></label>
								<input class="form-control input-sm email" id="" type="text" name="amount"  placeholder="" value="<?php echo (int)set_value('amount'); ?>" />
								<input class="form-control input-sm" id="TotAmt" type="hidden" name="TotAmt"  placeholder="" value="<?php echo $TotAmt; ?>" />
								<div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('amount'); ?></div>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Name <span class="text-danger">*</span></label>
								<input class="form-control input-sm email" id="" type="text" name="name"  placeholder="Name" value="<?php echo set_value('name'); ?>" />
								<div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('name'); ?></div>
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Mobile No</label>
								<input class="form-control input-sm email" id="" type="number" name="mobile"  placeholder="Contact No" value="<?php echo set_value('mobile'); ?>" />
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Email Address</label>
								<input class="form-control input-sm email" id="" type="email" name="email"  placeholder="Email Address" value="<?php echo set_value('email'); ?>" />
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Address</label>
								<input class="form-control input-sm" id="" type="text" name="address"  placeholder="Address" value="<?php echo set_value('address'); ?>" />
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Expense/Spent For <span class="text-danger">*</span></label>
								<input class="form-control input-sm" id="" type="text" name="spent"  placeholder="Spent For" value="<?php echo set_value('spent'); ?>" />
								<div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('spent'); ?></div>
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label  for="">Remarks</label>
								<input class="form-control input-sm" id="" type="text" name="remarks"  placeholder="Remarks" value="<?php echo set_value('remarks'); ?>" />
							</div>
						</div>
						<div class="row">
							<div class="form-actions center">
								<button type="submit" class="btn btn-md btn-success">
									Submit
									<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
								</button>
								<button class="btn" type="reset">
									<i class="ace-icon fa fa-undo bigger-110"></i>
									Reset
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					<div class="row" style="display: none;">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12">
									<div class="clearfix">
										<div class="pull-right tableTools-container"></div>
									</div>
									<div class="table-header">
										EXPENSE REPORT
									</div>
									<div style="overflow-x: scroll">
										<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover" style="font-size:13px;">
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
															<a href="<?php echo base_url('main/expense/info/'.$row['id']); ?>"><?php echo $row['voucher_id']; ?></a>
														</td>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo $row['amount']; ?></td>
														<td><?php echo $row['mobile']; ?></td>
														<td><?php echo $row['email']; ?></td>
														<td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>
														<td><?php echo $row['spent']; ?></td>
														<td><?php echo $row['remarks']; ?></td>
													</tr>
												<?php }} ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.main-content -->
<?php
}
include "template_form.php";
?>
