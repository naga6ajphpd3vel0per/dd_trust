<?php
   function main()
   {
      $CI = get_instance();
      $info = $CI->db->get_where('expenses', array('id' => $CI->session->flashdata('id')))->result_array();
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
         </ul>
         <!-- /.breadcrumb -->
         <div class="nav-search" id="nav-search">
            <form class="form-search">
               <span class="input-icon">
               <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
               <i class="ace-icon fa fa-search nav-search-icon"></i>
               </span>
            </form>
         </div>
         <!-- /.nav-search -->
      </div>
      <div class="row">
         <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="widget-body">
               <div class="widget-main">
				   <div style="color:red;font-size:15px;font-weight: bold;"><?php echo validation_errors(); ?></div>
                  <?php foreach ($info as $row) { ?>
                  <form class="form-horizontal" action="<?php echo base_url('main/expense/update/'.$row['id']); ?>" method="post" enctype="multipart/form-data" >
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">VOUCHER ID  <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" name="vch_id" type="text" readonly placeholder="VOUCHER ID" value="<?php echo $row['voucher_id']; ?>" >
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">Date <span class="text-danger">*</span></label>
                           <div class="input-group">
                              <input class="form-control date-picker" id="id-date-picker-1" type="text" name="created_at" data-date-format="yyyy-mm-dd" value="<?php echo $row['created_at']; ?>" />
                              <span class="input-group-addon">
                              <i class="fa fa-calendar bigger-110"></i>
                              </span>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">AMOUNT <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="text" name="amount"  placeholder="" value="<?php echo (int)$row['amount']; ?>" />
                        </div>
                     </div>
                     <div class="space space-8"></div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Name <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="text" name="name"  placeholder="Name" value="<?php echo $row['name']; ?>" />
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Mobile No</label>
                           <input class="form-control input-sm email" id="" type="number" name="mobile"  placeholder="Contact No" value="<?php echo $row['mobile']; ?>" />
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">Email Address <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="email" name="email"  placeholder="Email Address" value="<?php echo $row['email']; ?>" />
                        </div>
                     </div>
                     <div class="space space-8"></div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">Address <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="address"  placeholder="Address" value="<?php echo $row['address']; ?>" />
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">Spent For <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="spent"  placeholder="Collected By" value="<?php echo $row['spent']; ?>" />
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Remarks <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="remarks"  placeholder="Remarks" value="<?php echo $row['remarks']; ?>" />
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
                  <?php } ?>
               </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
</div>
<!-- /.main-content -->
<?php
   }
   include "template_form.php";
   ?>
