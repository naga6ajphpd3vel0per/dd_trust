<?php
function main()
{
?>

<?php
    $CI = get_instance();
    $user_info = $CI->db->get_where('users', array('id' => $CI->session->flashdata('id')))->result_array();
?>
<?php
                                                        if($user_info){
                                                        foreach ($user_info as $row) {
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
								<a href="#">USERS</a>
							</li>
							<li class="active">MANAGE USERS</li>
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
						<div class="widget-box ui-sortable-handle">
    <div class="widget-header widget-header-small">
        <h4><i class="fa fa-television"></i> User Information of ( <span id="historyuniqid" class="text-danger"> <?php echo $row['id']; ?> - <?php echo $row['name']; ?></span> )</h4>
    </div>
    <div class="widget-body" style="padding:5px;">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12"  style="margin-bottom:5px;">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-sitemap orange"></i>
                        PERSONAL DETAILS
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> User Unique ID </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['id']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Role Name </div>

                        <div class="profile-info-value">
                            <span class="" id="age"><?php echo $row['type']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Name </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['name']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Username </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['username']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Gender  </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['gender']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Telephone  </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['mobile']; ?></span>
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Pincode </div>

                        <div class="profile-info-value">
                            <span class=""><?php echo $row['pincode']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Telephone2  </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['mobile']; ?></span>
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Mobile1</div>

                        <div class="profile-info-value">
                            <span class="" id="username"> <?php echo $row['mobile']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Email  </div>

                        <div class="profile-info-value">
                            <span class="" id="country" style="display: inline;"><?php echo $row['email']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Status </div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;">ACTIVE</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> State</div>

                        <div class="profile-info-value">
                            <span class="" id="about" style="display: inline;"><?php echo $row['state']; ?></span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Country </div>

                        <div class="profile-info-value">
                            <span class="">India</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name">.</div>

                        <div class="profile-info-value">
                            <span class="">.</span>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="col-lg-12 col-sm-12 col-xs-12"  style="margin-top:5px; margin-bottom:5px;">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-user orange"></i>
                        ADDRESS DETAILS
                    </h4>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Correspondence Address</div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['address']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">District </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['district']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">State/UT's </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['state']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Village/Block </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['village']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">City/Sub District/Tehsil </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['city']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Pincode </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pincode']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Permanent Address </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['paddress']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">District </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pdistrict']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">State </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pstate']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Village/Block </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['parea']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">City/Sub District/Tehsil </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pcity']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Pincode </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['ppincode']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Email </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['email']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Phone </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pcontact']; ?> </span>
                        </div>
                    </div>
                </div>
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Address proof Document </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['address_proof']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-12 col-sm-12 col-xs-12"  style="margin-top:5px; margin-bottom:5px;">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-user orange"></i>
                        DISABILITY DETAILS
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Certificate </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['dis_certificate']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Reg.No of Certificate </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['reg_no']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Date of Issue </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['doi']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Percentage </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['percentage']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Since </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['since']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Scheme </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['scheme']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Type </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['dis_type']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability By Birth </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['by_birth']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Details of Issuing Authority </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['authority']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Pension Card Number </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['pension_no']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Hospital Treating Disability </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['hospital_treating']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Email Id </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['dis_email']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Area </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['dis_area']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Disability Due to </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['due_to']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Contact No </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['dis_contact']; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-12 col-sm-12 col-xs-12"  style="margin-top:5px; margin-bottom:5px;">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-user orange"></i>
                        EMPLOYMENT DETAILS
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Employed </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['emp']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Occupation </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['occupation']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Unemployed Since </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['unemp_since']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Personal Income (Annual) </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo ''; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Father Income (Annual) </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo ''; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Spouse Income (Annual) </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo ''; ?> </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-xs-12"  style="margin-top:5px; margin-bottom:5px;">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-user orange"></i>
                        IDENTITY DETAILS
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Attached Identity Proof </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['id_proof']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Identity Proof No </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['id_number']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Aadhar No </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['aadhar_no']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Any Other State/UTs ID </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['state_id']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Other State/UTs ID Value </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['state_value']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">TIN (NPR) </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['tin']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Created Date </div>

                        <div class="profile-info-value">
                            <span class="" id="username" style="display: inline;"><?php echo $row['created_at']; ?> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Signature Copy </div>

                        <div class="profile-info-value">
                            <img src="<?php echo base_url('uploads/sign_'.$row['id'].'.jpg'); ?>" style="width: 30%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12"  style="padding-right:0px;">
                <div class="profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Photo </div>

                        <div class="profile-info-value">
                            <img src="<?php echo base_url('uploads/photo_'.$row['id'].'.jpg'); ?>" style="width: 30%;">
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
            <?php }} ?>

<?php
}
include "template_table.php";
?>	   