<?php
   function main()
   {
      $CI = get_instance();
      /*$info = $CI->db->order_by('id','desc')->get_where('donation')->result_array();
      if ($info) {
         foreach ($info as $row) {
            $num = $row['id'] + 1;
            $id = 'REC'.$num;
         }
      } else{
         $id = 'REC1';
      }*/

	   $query = $CI->db->query("SELECT max(id) as id FROM donation order by id desc");
	   $res = $query->result_array();
	   if($res){
		   $num = $res[0]['id'] + 1;
		   $id = 'REC'.$num;
	   }
	   else{
		   $id = 'REC1';
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
                  <form class="form-horizontal" action="<?php echo base_url('main/donation/add'); ?>" method="post" enctype="multipart/form-data" >
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">RECEIPT ID  <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" name="rec_id" type="text" readonly placeholder="RECEIPT ID" value="<?php echo $id; ?>" >
							<div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('rec_id'); ?></div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label for="">Date <span class="text-danger">*</span></label>
                           <div class="input-group">
                              <input class="form-control date-picker" id="id-date-picker-1" type="text" name="created_at" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>" />
                              <span class="input-group-addon">
                              <i class="fa fa-calendar bigger-110"></i>
                              </span>
							   <div style="color:red;font-size:15px;font-weight: bold;"><?php echo form_error('created_at'); ?></div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                           <label  for="">AMOUNT <span class="text-danger">*</span></label>
                           <input class="form-control input-sm email" id="" type="text" name="amount"  placeholder="" value="<?php echo set_value('amount'); ?>" />
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
                           <label  for="">Collected By <span class="text-danger">*</span></label>
                           <input class="form-control input-sm" id="" type="text" name="collected_by"  placeholder="Collected By" value="<?php echo $CI->session->userdata('name'); ?>" readonly required>
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
