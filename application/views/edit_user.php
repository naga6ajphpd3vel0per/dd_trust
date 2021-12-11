<?php
function main()
{
    $CI = get_instance();
    $info = $CI->db->get_where('users', array('id' => $CI->session->flashdata('id')))->result_array();
?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <a href="<?php echo base_url('main/users'); ?>">USERS</a>
                </li>
                <li class="active">EDIT USER</li>
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
                        <?php foreach ($info as $row) { ?>
                        <form class="form-horizontal" action="<?php echo base_url('main/users/update/'.$row['id']); ?>" method="post" enctype="multipart/form-data">
                            <h1>1.Personal Details</h1>
                            <br />
                            <?php
                                $CI = get_instance();
                                $admin_login = $CI->session->userdata('admin_login');
                                $user_login = $CI->session->userdata('user_login');
                            ?>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Select User Role <span class="text-danger">*</span></label>
                                    <?php if ($admin_login == 'yes') { ?>
                                    <select class="form-control input-sm" name="type" id="type" id="" onChange="roleType(this.value);" required>
                                        <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                                        <option value="Member">Member</option>
                                        <option value="Non-Member">Non-Member</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                    <?php } ?>
                                    <?php if($CI->session->userdata('user_login') == 'yes'){ ?>
                                    <select class="form-control input-sm" name="type" id="type" id="" onChange="roleType(this.value);" required>
                                        <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                                        <option value="Member">Member</option>
                                        <option value="Non-Member">Non-Member</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Username <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" name="username" type="text" placeholder="Username" value="<?php echo $row['username']; ?>" />
                                </div>
                                 <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Password <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" name="password" type="text" placeholder="Password" value="<?php echo $row['password']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Applicant Name <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" name="name" type="text" placeholder="Applicant Name" value="<?php echo $row['name']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Date of Birth <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="date" name="dob" placeholder="" value="<?php echo $row['dob']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Gender <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="gender" id="role_type" id="" onChange="roleType(this.value);" required>
                                        <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Father's Name<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="father_name" placeholder="Father's Name" value="<?php echo $row['father_name']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Mother's Name <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="mother_name" placeholder="Mother's Name" value="<?php echo $row['mother_name']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Category <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="category" id="category" required>
                                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                        <option value="">Select Category </option>
                                        <option value="General">General</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Marks of Identification<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="identification" placeholder="" value="<?php echo $row['identification']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Age<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="age" maxlength="2" placeholder="Age" value="<?php echo $row['age']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Mobile No<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="mobile" placeholder="" value="<?php echo $row['mobile']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Blood Group <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="blood_group" id="" required>
                                        <option value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group']; ?></option>
                                        <option value="">Select Blood Group</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Educational Details <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="education" id="" required>
                                        <option value="<?php echo $row['education']; ?>"><?php echo $row['education']; ?></option>
                                        <!-- <option value="">Select Country </option> -->
                                        <option value="Primary">Primary</option>
                                        <option value="Secondary">Secondary</option>
                                        <option value="Higher Secondary">Higher Secondary</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="PG Diploma">PG Diploma</option>
                                        <option value="Graduate">Graduate</option>
                                        <option value="Post Graduate">Post Graduate</option>
                                        <option value="Doctorate">Doctorate</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Marital Status <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="marital_status" required>
                                        <option value="<?php echo $row['marital_status']; ?>"><?php echo $row['marital_status']; ?></option>
                                        <option value="">Select Marital Status </option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Divorced & Widower">Divorced & Widower</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Guardian/Caretaker</label>
                                    <input class="form-control input-sm" id="" type="text" placeholder="Guardian/Caretaker/Attendant" name="guardian" value="<?php echo $row['guardian']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Relation Status <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="relationship" required>
                                        <option value="<?php echo $row['relationship']; ?>"><?php echo $row['relationship']; ?></option>
                                        <option value="">Relation with Person with Disability</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Aunty">Aunty</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Contact No</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="contact_no" placeholder="Number" value="<?php echo $row['contact_no']; ?>" />
                                </div>
                            </div>
                            <h1>2.Address Details</h1>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Correspondence Address <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" name="address" type="text" placeholder="Current Address" value="<?php echo $row['address']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">District <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="district" placeholder="" value="<?php echo $row['district']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">State/UT's <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="state" placeholder="" value="<?php echo $row['state']; ?>" required />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Pincode<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="pincode" placeholder="" value="<?php echo $row['pincode']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Village/Block <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="village" placeholder="" value="<?php echo $row['village']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">City/Sub District/Tehsil <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="city" placeholder="" value="<?php echo $row['city']; ?>" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Permanent Address <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" name="paddress" type="text" placeholder="Permanent Address" value="<?php echo $row['paddress']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">District <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="pdistrict" placeholder="" value="<?php echo $row['pdistrict']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">State <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="pstate" placeholder="" value="<?php echo $row['pstate']; ?>" required />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Pincode<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="ppincode" placeholder="" value="<?php echo $row['ppincode']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Village/Block <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="parea" placeholder="" value="<?php echo $row['parea']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">City/Sub District/Tehsil <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="pcity" placeholder="" value="<?php echo $row['pcity']; ?>" required />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Email Id</label>
                                    <input class="form-control input-sm" id="" type="email" placeholder="example@gmail.com" name="email" value="<?php echo $row['email']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Address proof Document <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="address_proof" required>
                                        <option value="<?php echo $row['address_proof']; ?>"><?php echo $row['address_proof']; ?></option>
                                        <option value="Driving Licence">Driving Licence</option>
                                        <option value="Ration card">Ration Card</option>
                                        <option value="Voter Id">Voter Id</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Contact No</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="pcontact" placeholder="Number" value="<?php echo $row['pcontact']; ?>" />
                                </div>
                            </div>
                            <div id="disab">
                            <h1>3.Disability Details</h1>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Certificate <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="dis_certificate" id="role_type" id="" onChange="roleType(this.value);">
                                        <option value="<?php echo $row['dis_crtificate']; ?>"><?php echo $row['dis_certificate']; ?></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Reg.No of Certificate <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="text" name="reg_no" placeholder="" value="<?php echo $row['reg_no']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Date of Issue <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm number" id="" type="date" name="doi" placeholder="" value="<?php echo $row['doi']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Percentage(%)<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="percentage" placeholder="" value="<?php echo $row['percentage']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Since (Year)<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="number" name="since" placeholder="" value="<?php echo $row['since']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Scheme<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="scheme" placeholder="" value="<?php echo $row['scheme']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Type <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="dis_type" id="role_type" id="" onChange="roleType(this.value);">
                                        <option value="<?php echo $row['dis_type']; ?>"><?php echo $row['dis_type']; ?></option>
                                        <option value="Blindness">Blindness</option>
                                        <option value="Muscular Dystrophy">Muscular Dystrophy</option>
                                        <option value="Hearing Impairment">Hearing Impairment</option>
                                        <option value="Hemophilia">Hemophilia</option>
                                        <option value="Low Vision">Low Vision</option>
                                        <option value="Parkinson's Disease">Parkinson's Disease</option>
                                        <option value="Intellectual Disability">Intellectual Disability</option>
                                        <option value="Thalassemia">Thalassemia</option>
                                        <option value="Leprosy Cured">Leprosy Cured</option>
                                        <option value="Sickle Cell Disease">Sickle Cell Disease</option>
                                        <option value="Acid Attack Victim">Acid Attack Victim</option>
                                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                                        <option value="Dwarfism">Dwarfism</option>
                                        <option value="Mental Illness">Mental Illness</option>
                                        <option value="Multiple Sclerosis">Multiple Sclerosis</option>
                                        <option value="Chronic Neurological">Chronic Neurological</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability By Birth <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="by_birth" id="role_type" id="" onChange="roleType(this.value);">
                                        <option value="<?php echo $row['by_birth']; ?>"><?php echo $row['by_birth']; ?></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Details of Issuing Authority <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" name="authority" id="role_type" id="" onChange="roleType(this.value);">
                                        <option value="<?php echo $row['authority']; ?>"><?php echo $row['authority']; ?></option>
                                        <option value="Chief Medical Office">Chief Medical Officer</option>
                                        <option value="Medical Authority">Medical Authority</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Pension Card Number<span class="text-danger">*</span></label>
                                    <input class="form-control input-sm" id="" type="text" name="pension_no" placeholder="" value="<?php echo $row['pension_no']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Hospital Treating Disability <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="hospital_treating" placeholder="" value="<?php echo $row['hospital_treating']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Email Id <span class="text-danger">*</span></label>
                                    <input class="form-control input-sm email" id="" type="text" name="dis_email" placeholder="" value="<?php echo $row['dis_email']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Disability Area <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="dis_area">
                                        <option value="<?php echo $row['dis_area']; ?>"><?php echo $row['dis_area']; ?></option>
                                        <option value="Chest">Chest</option>
                                        <option value="Ears">Ears</option>
                                        <option value="Head">Head</option>
                                        <option value="Eyes">Eyes</option>
                                        <option value="Mouth">Mouth</option>
                                        <option value="Nose">Nose</option>
                                        <option value="Shoulder">Shoulder</option>
                                        <option value="Throat">Throat</option>
                                        <option value="Leg">Leg</option>
                                        <option value="Stomach">Stomach</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Disability Due to <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="due_to">
                                        <option value="<?php echo $row['due_to']; ?>"><?php echo $row['due_to']; ?></option>
                                        <option value=""> Person with Disability</option>
                                        <option value="Accident">Accident</option>
                                        <option value="Congenital">Congenital</option>
                                        <option value="Hereditary">Hereditary</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Contact No</label>
                                    <input class="form-control input-sm number" id="" type="number" maxlength="" name="dis_contact" placeholder="Number" value="<?php echo $row['contact_no']; ?>" />
                                </div>
                            </div>
                            </div>
                            <h1>4.Employment Details</h1>
                            <br />
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Employed <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="emp" required>
                                        <option value="<?php echo $row['emp']; ?>"><?php echo $row['emp']; ?></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Occupation <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="occupation" required>
                                        <option value="<?php echo $row['occupation']; ?>"><?php echo $row['occupation']; ?></option>
                                        <option value=""> Person with Disability</option>
                                        <option value="Govt Job">Govt Job</option>
                                        <option value="Private">Private</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Service&Shops">Service & Shops</option>
                                        <option value="Craft/Trade Workers">Craft/Trade Workers</option>
                                        <option value="Daily Wage Workers">Daily Wage Workers</option>
                                        <option value="Plant/factory">Plant/factory</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
								<div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Unemployed Since (Year)</label>
                                    <input class="form-control input-sm number" id="" type="number" maxlength="" name="unemp_since" placeholder="Number" value="<?php echo $row['unemp_since']; ?>" />
                                </div>
                            </div>
                            <table style="border-collapse: collapse; margin-top: 20px; width: 100%;">
                                <tr style="border: 1px solid black; padding: 8px;">
                                    <td style="border: 1px solid black; padding: 8px;">BPL/APL:</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['bpl_na'] == 1){ echo 'checked'; } ?> name="bpl_na"/>N/A</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['bpl_apl'] == 1){ echo 'checked'; } ?> name="bpl_apl" />APL</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['bpl_bpl'] == 1){ echo 'checked'; } ?> name="bpl_bpl" />BPL</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['bpl_antodya'] == 1){ echo 'checked'; } ?> name="bpl_antodya" />Antodya</td>
                                    <td></td>
                                </tr>
                                <tr style="border: 1px solid black; padding: 8px;">
                                    <td style="border: 1px solid black; padding: 8px;">Personal Income (Annual) :</td>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <input type="checkbox" value="1" <?php if($row['inc_below'] == 1){ echo 'checked'; } ?> name="inc_below" />
                                        Below
                                    </td>
                                    <td style="border: 1px solid black; padding: 8px;">10,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['inc_100000'] == 1){ echo 'checked'; } ?> name="inc_100000" />10,000 to 1,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['inc_500000'] == 1){ echo 'checked'; } ?> name="inc_500000" />1,00,000 to 5,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['inc_500000g'] == 1){ echo 'checked'; } ?> name="inc_500000g" /> >5,00,000</td>
                                </tr>
                                <tr style="border: 1px solid black; padding: 8px;">
                                    <td style="border: 1px solid black; padding: 8px;">Father Income (Annual):</td>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <input type="checkbox" value="1" <?php if($row['finc_below'] == 1){ echo 'checked'; } ?> name="finc_below" />
                                        Below
                                    </td>
                                    <td style="border: 1px solid black; padding: 8px;">10,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['finc_100000'] == 1){ echo 'checked'; } ?> name="finc_100000" />10,000 to 1,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['finc_500000'] == 1){ echo 'checked'; } ?> name="finc_500000" />1,00,000 to 5,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['finc_500000g'] == 1){ echo 'checked'; } ?> name="finc_500000g" /> >5,00,000</td>
                                </tr>
                                <tr style="border: 1px solid black; padding: 8px;">
                                    <td style="border: 1px solid black; padding: 8px;">Spouse Income (Annual):</td>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <input type="checkbox" value="1" <?php if($row['sinc_below'] == 1){ echo 'checked'; } ?> name="sinc_below" />
                                        Below
                                    </td>
                                    <td style="border: 1px solid black; padding: 8px;">10,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['sinc_100000'] == 1){ echo 'checked'; } ?> name="sinc_100000" />10,000 to 1,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['sinc_500000'] == 1){ echo 'checked'; } ?> name="sinc_500000" />1,00,000 to 5,00,000</td>
                                    <td style="border: 1px solid black; padding: 8px;"><input type="checkbox" value="1" <?php if($row['sinc_500000g'] == 1){ echo 'checked'; } ?> name="sinc_500000g" /> >5,00,000</td>
                                </tr>
                            </table>
                            <h1>5.Identity Details</h1>
                            <br />
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Attached Identity Proof <span class="text-danger">*</span></label>
                                    <select class="form-control input-sm" id="" name="id_proof" required>
                                        <option value="<?php echo $row['id_proof']; ?>"><?php echo $row['id_proof']; ?></option>
                                        <option value="Driving Licence">Driving Licence</option>
                                        <option value="Pan Card">Pan Card</option>
                                        <option value="Voter Id">Voter Id</option>
                                        <option value="Aadhar Card">Aadhar Card</option>
                                        <option value="Ration Card">Ration Card</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Identity Proof No</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="id_number" placeholder="Number" value="<?php echo $row['id_number']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Aadhar No</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="aadhar_no" placeholder="Number" value="<?php echo $row['aadhar_no']; ?>" required />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12" id="empspec">
                                    <label for="">Any Other State/UTs ID </label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="state_id" placeholder="Number" value="<?php echo $row['state_id']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Other State/UTs ID Value</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="state_value" placeholder="Number" value="<?php echo $row['state_value']; ?>" />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">TIN (NPR)</label>
                                    <input class="form-control input-sm number" id="" type="text" maxlength="" name="tin" placeholder="Number" value="<?php echo $row['tin']; ?>" />
                                </div>
                            </div>
                            <div class="space space-8"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Today's Date</label>
                                    <input class="form-control input-sm number" id="" type="date" maxlength="" name="created_at" placeholder="Number" value="<?php echo $row['created_at']; ?>" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Applicant’s Signature/Thumbprint </label>
                                    <input type="file" id="myFile" name="sign" />
                                    <img src="<?php echo base_url('uploads/sign_'.$row['id'].'.jpg'); ?>" style="width: 30%;">
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <label for="">Applicant’s Photo </label>
                                    <input type="file" id="myFile1" name="photo" />
                                    <img src="<?php echo base_url('uploads/photo_'.$row['id'].'.jpg'); ?>" style="width: 30%;">
                                </div>
                            </div>
                            <hr />
                            <br />
                            <div class="row">
                                <div class="form-actions center">
                                    <button type="submit" name="submit" class="btn btn-md btn-success">
                                        Submit
                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                    </button>
                                    <button class="btn" type="reset" id="reset">
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
<script type="text/javascript">
    $('#type').on('change', function() {

      var value = this.value;

      if (value == 'Member') {

        $('#disab').show();

      } else{

        $('#disab').hide();

      }



      if (value == 'Non-Member') {

        $('#disab').hide();

      }



      if (value == 'Staff') {

        $('#disab').hide();

      }



      if (value == 'Admin') {

        $('#disab').hide();

        $('#emp').hide();

        $('#identity').hide();

      }

    });
</script>
