<?php
   function main()
   {
      $CI = get_instance();
      $info = $CI->db->get_where('donation', array('id' => $CI->session->flashdata('id')))->result_array();
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
            <li class="active">ADD DONATION</li>
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
                  <form class="form-horizontal" action="<?php echo base_url('main/donation/update/'.$row['id']); ?>" method="post" enctype="multipart/form-data" >
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">RECEIPT ID  <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" name="rec_id" type="text" readonly placeholder="RECEIPT ID" value="<?php echo $row['rec_id']; ?>" >
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
                           <input class="form-control input-sm email" id="" type="text" name="amount"  placeholder="" value="<?php echo (int)$row['amount']; ?>" required>
                        </div>
                     </div>
                     <div class="space space-8"></div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Name <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="text" name="name"  placeholder="Name" value="<?php echo $row['name']; ?>" required>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Mobile No</label>
                           <input class="form-control input-sm email" id="" type="number" name="mobile"  placeholder="Contact No" value="<?php echo $row['mobile']; ?>" required>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Email Address <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="email" name="email"  placeholder="Email Address" value="<?php echo $row['email']; ?>" required>
                        </div>
                     </div>
                     <div class="space space-8"></div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Address <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="address"  placeholder="Address" value="<?php echo $row['address']; ?>" required>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Collected By <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="collected_by"  placeholder="Collected By" value="<?php echo $row['collected_by']; ?>" readonly required>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">Remarks <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="remarks"  placeholder="Remarks" value="<?php echo $row['remarks']; ?>" required>
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
