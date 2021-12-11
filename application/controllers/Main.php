<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}
	
	public function RolesType($id=0){
		$sql = " Select 'Member' As id,'Member' As name
                Union
                Select 'Non-Member' As id,'Non-Member' As name
                Union
                Select 'Staff' As id,'Staff' As name
                Union
                Select 'Admin' As id,'Admin' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="type" id="type" onChange="roleType(this.value);" required>';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function RolesType_Search($id=0){
		$sql = " Select 'Member' As id,'Member' As name
                Union
                Select 'Non-Member' As id,'Non-Member' As name
                Union
                Select 'Staff' As id,'Staff' As name
                Union
                Select 'Admin' As id,'Admin' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="type" id="type">';
		echo '<option selected value="">Select User Roles</option>';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function Genders($id=0){
		$sql = " Select 'Male' As id,'Male' As name
                Union
                Select 'Female' As id,'Female' As name
                Union
                Select 'Other' As id,'Other' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="gender">';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function Category($id=0){
		$sql = " Select 'General' As id,'General' As name
                Union
                Select 'OBC' As id,'OBC' As name
                Union
                Select 'SC' As id,'SC' As name
                Union
                Select 'ST' As id,'ST' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="category" id="role_type">';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function BloodGroup($id=0){
		$sql = " Select 'O+' As id,'O+' As name
                Union
                Select 'O-' As id,'O-' As name
                Union
                Select 'A+' As id,'A+' As name
                Union
                Select 'A-' As id,'A-' As name
                Union
                Select 'B+' As id,'B+' As name
                Union
                Select 'B-' As id,'B-' As name
                Union
                Select 'AB+' As id,'AB+' As name
                Union
                Select 'AB-' As id,'AB-' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="blood_group" id="role_type">';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function EducationDetail($id=0){
		$sql = " Select 'Primary' As id,'Primary' As name
                Union
                Select 'Secondary' As id,'Secondary' As name
                Union
                Select 'Higher Secondary' As id,'Higher Secondary' As name
                Union
                Select 'Diploma' As id,'Diploma' As name
                Union
                Select 'PG Diploma' As id,'PG Diploma' As name
                Union
                Select 'PG Diploma' As id,'PG Diploma' As name
                Union
                Select 'Graduate' As id,'Graduate' As name
                Union
                Select 'Post Graduate' As id,'Post Graduate' As name
                Union
                Select 'Doctorate' As id,'Doctorate' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="education" id="">';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function MaritalStatus($id=0){
		$sql = " Select 'Unmarried' As id,'Unmarried' As name
                Union
                Select 'Married' As id,'Married' As name
                Union
                Select 'Widow' As id,'Widow' As name
                Union
                Select 'Divorced' As id,'Divorced' As name
                Union
                Select 'Divorced & Widower' As id,'Divorced & Widower' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="marital_status" id="" required>';
		echo '<option value="">Select Marital Status </option>';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function RelationStatus($id=0){
		$sql = " Select 'Father' As id,'Father' As name
                Union
                Select 'Mother' As id,'Mother' As name
                Union
                Select 'Wife' As id,'Wife' As name
                Union
                Select 'Husband' As id,'Husband' As name
                Union
                Select 'Uncle' As id,'Uncle' As name
                Union
                Select 'Aunty' As id,'Aunty' As name
                Union
                Select 'Sister' As id,'Sister' As name
                Union
                Select 'Other' As id,'Other' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="relationship" id="" required>';
		echo '<option value="">Relation with Person with Disability</option>';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function AddressProof($id=0){
		$sql = " Select 'Driving Licence' As id,'Driving Licence' As name
                Union
                Select 'Ration Card' As id,'Ration Card' As name
                Union
                Select 'Voter Id' As id,'Voter Id' As name
                Union
                Select 'Other' As id,'Other' As name
                ";
		$query = $this->db->query($sql);
		$res = $query->result_array();
		echo '<select class="form-control input-sm" name="address_proof" id="" required>';
		if($res){
			foreach($res as $val){
				if($id == $val['id']){
					echo '<option selected value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
				else{
					echo '<option value="' . $val['id'] . '">' . $val['name'] . '</option>';
				}
			}
		}
		echo '</select>';
	}
	
	public function index()
	{
		if($this->session->userdata('admin_login') == 'yes' || $this->session->userdata('user_login') == 'yes'){
			$data['title'] = 'Dashboard';
			$this->load->view('index', $data);
		} else{
			$data['title'] = 'Login';
			$this->load->view('login', $data);
		}
	}
	
	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		if($username == 'admin'){
			$login = $this->db->get_where('users', array('username' => $username, 'password' => $password,
				'type' => 'Admin'))->result_array();
			if($login){
				foreach($login as $l){
					$user_id = $l['id'];
					$name = $l['name'];
				}
				$this->session->set_userdata('admin_login', 'yes');
				$this->session->set_userdata('user_id', $user_id);
				$this->session->set_userdata('name', $name);
				$this->session->set_flashdata('success_msg', 'LoggedIn Successfully!');
				redirect(base_url());
			} else{
				$this->session->set_flashdata('error_msg', 'Invalid Username or Password');
				redirect(base_url());
			}
		} else{
			$login = $this->db->get_where('users', array('username' => $username,
				'password' => $password))->result_array();
			if($login){
				foreach($login as $l){
					$user_id = $l['id'];
					$name = $l['name'];
				}
				$this->session->set_userdata('user_login', 'yes');
				$this->session->set_userdata('user_id', $user_id);
				$this->session->set_userdata('name', $name);
				$this->session->set_flashdata('success_msg', 'Welcome! ' . $this->session->userdata('name'));
				redirect(base_url());
			} else{
				$this->session->set_flashdata('error_msg', 'Invalid Username or Password');
				redirect(base_url());
			}
		}
	}
	
	public function users($para1 = "", $para2 = "", $para3 = '')
	{
		if($para1 == 'form'){
			$data['title'] = 'User Registration';
			$this->load->view('add_user', $data);
		}
		if($para1 == 'manage'){
			$data['title'] = 'Manage Users';
			$this->session->set_flashdata('type', $para2);
			$this->load->view('manage_users', $data);
		}
		if($para1 == 'info'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'View User';
			$this->load->view('view_user_info', $data);
		}
		if($para1 == 'add'){
			$type = $this->input->post('type');
			if($type == 'Staff'){
				$rules = array(
					array('field' => 'type', 'label' => 'User Roles','rules' => 'required'),
					array('field' => 'username', 'label' => 'User Name','rules' => 'required'),
					array('field' => 'password', 'label' => 'Password','rules' => 'required'),
					array('field' => 'name', 'label' => 'Applicant Name','rules' => 'required'),
					array('field' => 'dob', 'label' => 'Date Of Birth in dd-mm-yyyy','rules' => 'trim|exact_length[10]|callback_validate_date'),
					array('field' => 'gender', 'label' => 'Gender','rules' => 'required'),
					array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
					array('field' => 'mother_name', 'label' => 'Mother Name','rules' => 'required'),
					array('field' => 'category', 'label' => 'Category','rules' => 'required'),
					array('field' => 'identification', 'label' => 'Marks of Identification','rules' => 'required'),
					array('field' => 'age', 'label' => 'Age','rules' => 'required|regex_match[/^[0-9]{2}$/]'),
					array('field' => 'mobile', 'label' => 'Mobile','rules' => 'required|regex_match[/^[0-9]{10}$/]'),
					array('field' => 'blood_group', 'label' => 'Blood Group','rules' => 'required'),
					
					array('field' => 'address', 'label' => 'Correspondence Address','rules' => 'required'),
					array('field' => 'district', 'label' => 'District','rules' => 'required'),
					array('field' => 'state', 'label' => 'State/UTs','rules' => 'required'),
					array('field' => 'pincode', 'label' => 'Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'village', 'label' => 'Village/Block','rules' => 'required'),
					array('field' => 'city', 'label' => 'City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'paddress', 'label' => 'Permanent Address','rules' => 'required'),
					array('field' => 'pdistrict', 'label' => 'Permanent District','rules' => 'required'),
					array('field' => 'pstate', 'label' => 'Permanent State','rules' => 'required'),
					array('field' => 'ppincode', 'label' => 'Permanent Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'parea', 'label' => 'Permanent Village/Block','rules' => 'required'),
					array('field' => 'pcity', 'label' => 'Permanent City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'email', 'label' => 'Email Id','rules' => 'valid_email'),
					
					array('field' => 'emp', 'label' => 'Employed','rules' => 'required'),
					array('field' => 'occupation', 'label' => 'Occupation','rules' => 'required'),
					
					array('field' => 'id_proof', 'label' => 'Attached Identity Proof','rules' => 'required'),
				);
			}
			if($type == 'Member'){
				$rules = array(
					array('field' => 'type', 'label' => 'User Roles','rules' => 'required'),
					array('field' => 'username', 'label' => 'User Name','rules' => 'required'),
					array('field' => 'password', 'label' => 'Password','rules' => 'required'),
					array('field' => 'name', 'label' => 'Applicant Name','rules' => 'required'),
					array('field' => 'dob', 'label' => 'Date Of Birth in dd-mm-yyyy','rules' => 'trim|exact_length[10]|callback_validate_date'),
					array('field' => 'gender', 'label' => 'Gender','rules' => 'required'),
					array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
					array('field' => 'mother_name', 'label' => 'Mother Name','rules' => 'required'),
					array('field' => 'category', 'label' => 'Category','rules' => 'required'),
					array('field' => 'identification', 'label' => 'Marks of Identification','rules' => 'required'),
					array('field' => 'age', 'label' => 'Age','rules' => 'required|exact_length[2]|regex_match[/^[0-9]{2}$/]'),
					array('field' => 'mobile', 'label' => 'Mobile','rules' => 'required|regex_match[/^[0-9]{10}$/]'),
					array('field' => 'blood_group', 'label' => 'Blood Group','rules' => 'required'),
					
					array('field' => 'address', 'label' => 'Correspondence Address','rules' => 'required'),
					array('field' => 'district', 'label' => 'District','rules' => 'required'),
					array('field' => 'state', 'label' => 'State/UTs','rules' => 'required'),
					array('field' => 'pincode', 'label' => 'Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'village', 'label' => 'Village/Block','rules' => 'required'),
					array('field' => 'city', 'label' => 'City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'paddress', 'label' => 'Permanent Address','rules' => 'required'),
					array('field' => 'pdistrict', 'label' => 'Permanent District','rules' => 'required'),
					array('field' => 'pstate', 'label' => 'Permanent State','rules' => 'required'),
					array('field' => 'ppincode', 'label' => 'Permanent Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'parea', 'label' => 'Permanent Village/Block','rules' => 'required'),
					array('field' => 'pcity', 'label' => 'Permanent City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'email', 'label' => 'Email Id','rules' => 'valid_email'),
					
					array('field' => 'dis_certificate', 'label' => 'Disability Certificate','rules' => 'required'),
					array('field' => 'reg_no', 'label' => 'Reg.No of Certificate','rules' => 'required'),
					array('field' => 'doi', 'label' => 'Date of Issue in dd-mm-yyyy','rules' => 'trim|exact_length[10]|callback_validate_date'),
					array('field' => 'percentage', 'label' => 'Disability Percentage(%)','rules' => 'required|regex_match[/^[0-9]{2}$/]'),
					array('field' => 'since', 'label' => 'Disability Since (Year)','rules' => 'required|regex_match[/^[0-9]{4}$/]'),
					array('field' => 'scheme', 'label' => 'Disability Scheme','rules' => 'required'),
					array('field' => 'dis_type', 'label' => 'Disability Type','rules' => 'required'),
					array('field' => 'by_birth', 'label' => 'Disability By Birth','rules' => 'required'),
					array('field' => 'authority', 'label' => 'Details of Issuing Authority','rules' => 'required'),
					array('field' => 'pension_no', 'label' => 'Pension Card Number','rules' => 'required'),
					array('field' => 'hospital_treating', 'label' => 'Hospital Treating Disability','rules' => 'required'),
					array('field' => 'dis_email', 'label' => 'Email Id','rules' => 'required|valid_email'),
					array('field' => 'dis_area', 'label' => 'Disability Area','rules' => 'required'),
					array('field' => 'due_to', 'label' => 'Disability Due to','rules' => 'required'),
					
					array('field' => 'emp', 'label' => 'Employed','rules' => 'required'),
					array('field' => 'occupation', 'label' => 'Occupation','rules' => 'required'),
					
					array('field' => 'id_proof', 'label' => 'Attached Identity Proof','rules' => 'required'),
				);
			}
			if($type == 'Non-Member'){
				$rules = array(
					array('field' => 'type', 'label' => 'User Roles','rules' => 'required'),
					array('field' => 'username', 'label' => 'User Name','rules' => 'required'),
					array('field' => 'password', 'label' => 'Password','rules' => 'required'),
					array('field' => 'name', 'label' => 'Applicant Name','rules' => 'required'),
					array('field' => 'dob', 'label' => 'Date Of Birth in dd-mm-yyyy','rules' => 'trim|exact_length[10]|callback_validate_date'),
					array('field' => 'gender', 'label' => 'Gender','rules' => 'required'),
					array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
					array('field' => 'mother_name', 'label' => 'Mother Name','rules' => 'required'),
					array('field' => 'category', 'label' => 'Category','rules' => 'required'),
					array('field' => 'identification', 'label' => 'Marks of Identification','rules' => 'required'),
					array('field' => 'age', 'label' => 'Age','rules' => 'required|regex_match[/^[0-9]{2}$/]'),
					array('field' => 'mobile', 'label' => 'Mobile','rules' => 'required|regex_match[/^[0-9]{10}$/]'),
					array('field' => 'blood_group', 'label' => 'Blood Group','rules' => 'required'),
					
					array('field' => 'address', 'label' => 'Correspondence Address','rules' => 'required'),
					array('field' => 'district', 'label' => 'District','rules' => 'required'),
					array('field' => 'state', 'label' => 'State/UTs','rules' => 'required'),
					array('field' => 'pincode', 'label' => 'Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'village', 'label' => 'Village/Block','rules' => 'required'),
					array('field' => 'city', 'label' => 'City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'paddress', 'label' => 'Permanent Address','rules' => 'required'),
					array('field' => 'pdistrict', 'label' => 'Permanent District','rules' => 'required'),
					array('field' => 'pstate', 'label' => 'Permanent State','rules' => 'required'),
					array('field' => 'ppincode', 'label' => 'Permanent Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'parea', 'label' => 'Permanent Village/Block','rules' => 'required'),
					array('field' => 'pcity', 'label' => 'Permanent City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'email', 'label' => 'Email Id','rules' => 'valid_email'),
					
					array('field' => 'emp', 'label' => 'Employed','rules' => 'required'),
					array('field' => 'occupation', 'label' => 'Occupation','rules' => 'required'),
					
					array('field' => 'id_proof', 'label' => 'Attached Identity Proof','rules' => 'required'),
				);
			}
			if($type == 'Admin'){
				$rules = array(
					array('field' => 'type', 'label' => 'User Roles','rules' => 'required'),
					array('field' => 'username', 'label' => 'User Name','rules' => 'required'),
					array('field' => 'password', 'label' => 'Password','rules' => 'required'),
					array('field' => 'name', 'label' => 'Applicant Name','rules' => 'required'),
					array('field' => 'dob', 'label' => 'Date Of Birth in dd-mm-yyyy','rules' => 'trim|exact_length[10]|callback_validate_date'),
					array('field' => 'gender', 'label' => 'Gender','rules' => 'required'),
					array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
					array('field' => 'mother_name', 'label' => 'Mother Name','rules' => 'required'),
					array('field' => 'category', 'label' => 'Category','rules' => 'required'),
					array('field' => 'identification', 'label' => 'Marks of Identification','rules' => 'required'),
					array('field' => 'age', 'label' => 'Age','rules' => 'required|regex_match[/^[0-9]{2}$/]'),
					array('field' => 'mobile', 'label' => 'Mobile','rules' => 'required|regex_match[/^[0-9]{10}$/]'),
					array('field' => 'blood_group', 'label' => 'Blood Group','rules' => 'required'),
					
					array('field' => 'address', 'label' => 'Correspondence Address','rules' => 'required'),
					array('field' => 'district', 'label' => 'District','rules' => 'required'),
					array('field' => 'state', 'label' => 'State/UTs','rules' => 'required'),
					array('field' => 'pincode', 'label' => 'Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'village', 'label' => 'Village/Block','rules' => 'required'),
					array('field' => 'city', 'label' => 'City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'paddress', 'label' => 'Permanent Address','rules' => 'required'),
					array('field' => 'pdistrict', 'label' => 'Permanent District','rules' => 'required'),
					array('field' => 'pstate', 'label' => 'Permanent State','rules' => 'required'),
					array('field' => 'ppincode', 'label' => 'Permanent Pincode','rules' => 'required|regex_match[/^[0-9]{6}$/]'),
					array('field' => 'parea', 'label' => 'Permanent Village/Block','rules' => 'required'),
					array('field' => 'pcity', 'label' => 'Permanent City/Sub District/Tehsil','rules' => 'required'),
					array('field' => 'email', 'label' => 'Email Id','rules' => 'valid_email'),
				);
			}
			$data = array('type' => $this->input->post('type'), 'name' => $this->input->post('name'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'),
				'dob' => $this->input->post('dob'), 'gender' => $this->input->post('gender'),
				'father_name' => $this->input->post('father_name'), 'mother_name' => $this->input->post('mother_name'),
				'category' => $this->input->post('category'), 'identification' => $this->input->post('identification'),
				'mobile' => $this->input->post('mobile'), 'age' => $this->input->post('age'),
				'blood_group' => $this->input->post('blood_group'), 'education' => $this->input->post('education'),
				'marital_status' => $this->input->post('marital_status'), 'guardian' => $this->input->post('guardian'),
				'relationship' => $this->input->post('relationship'), 'contact_no' => $this->input->post('contact_no'),
				'address' => $this->input->post('address'), 'district' => $this->input->post('district'),
				'state' => $this->input->post('state'), 'pincode' => $this->input->post('pincode'),
				'village' => $this->input->post('village'), 'city' => $this->input->post('city'),
				'paddress' => $this->input->post('paddress'), 'pdistrict' => $this->input->post('pdistrict'),
				'pstate' => $this->input->post('pstate'), 'ppincode' => $this->input->post('ppincode'),
				'parea' => $this->input->post('parea'), 'pcity' => $this->input->post('pcity'),
				'email' => $this->input->post('email'), 'address_proof' => $this->input->post('address_proof'),
				'pcontact' => $this->input->post('pcontact'),
				'dis_certificate' => $this->input->post('dis_certificate'), 'reg_no' => $this->input->post('reg_no'),
				'doi' => $this->input->post('doi'), 'percentage' => $this->input->post('percentage'),
				'since' => $this->input->post('since'), 'scheme' => $this->input->post('scheme'),
				'dis_type' => $this->input->post('dis_type'), 'by_birth' => $this->input->post('by_birth'),
				'authority' => $this->input->post('authority'), 'pension_no' => $this->input->post('pension_no'),
				'hospital_treating' => $this->input->post('hospital_treating'),
				'dis_email' => $this->input->post('dis_email'), 'dis_area' => $this->input->post('dis_area'),
				'due_to' => $this->input->post('due_to'), 'dis_contact' => $this->input->post('dis_contact'),
				'emp' => $this->input->post('emp'), 'occupation' => $this->input->post('occupation'),
				'unemp_since' => $this->input->post('unemp_since'), 'bpl_na' => $this->input->post('bpl_na'),
				'bpl_apl' => $this->input->post('bpl_apl'), 'bpl_bpl' => $this->input->post('bpl_bpl'),
				'bpl_antodya' => $this->input->post('bpl_antodya'), 'inc_below' => $this->input->post('inc_below'),
				'inc_100000' => $this->input->post('inc_100000'), 'inc_500000' => $this->input->post('inc_500000'),
				'inc_500000g' => $this->input->post('inc_500000g'), 'finc_below' => $this->input->post('finc_below'),
				'finc_100000' => $this->input->post('finc_100000'), 'finc_500000' => $this->input->post('finc_500000'),
				'finc_500000g' => $this->input->post('finc_500000g'), 'sinc_below' => $this->input->post('sinc_below'),
				'sinc_100000' => $this->input->post('sinc_100000'), 'sinc_500000' => $this->input->post('sinc_500000'),
				'sinc_500000g' => $this->input->post('sinc_500000g'), 'id_proof' => $this->input->post('id_proof'),
				'id_number' => $this->input->post('id_number'), 'aadhar_no' => $this->input->post('aadhar_no'),
				'state_id' => $this->input->post('state_id'), 'state_value' => $this->input->post('state_value'),
				'tin' => $this->input->post('tin'), 'created_at' => date('Y-m-d'));
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->load->view('add_user');
			} else{
				if($this->db->insert('users', $data)){
					$insert_id = $this->db->insert_id();
					move_uploaded_file($_FILES['sign']['tmp_name'], 'uploads/sign_' . $insert_id . '.jpg');
					move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/photo_' . $insert_id . '.jpg');
					$this->session->set_flashdata("success_msg", "Record Added Successfully!");
					redirect('main/users/manage/'.$this->input->post('type'));
				}
			}
		}
		if($para1 == 'edit'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'Edit User';
			$this->load->view('edit_user', $data);
		}
		if($para1 == 'update'){
			$rules = array(
				array('field' => 'username', 'label' => 'User Name','rules' => 'required'),
				array('field' => 'password', 'label' => 'Password','rules' => 'required'),
				array('field' => 'name', 'label' => 'Applicant Name','rules' => 'required'),
				array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
				array('field' => 'mother_name', 'label' => 'Mother Name','rules' => 'required'),
				array('field' => 'identification', 'label' => 'E-Mail Id','rules' => 'required'),
				array('field' => 'age', 'label' => 'E-Mail Id','rules' => 'required'),
				array('field' => 'mobile', 'label' => 'Mobile','rules' => 'required|regex_match[/^[0-9]{10}$/]'),
				array('field' => 'address', 'label' => 'Correspondence Address','rules' => 'required'),
				array('field' => 'district', 'label' => 'District','rules' => 'required'),
				array('field' => 'state', 'label' => 'State/UTs','rules' => 'required'),
				array('field' => 'pincode', 'label' => 'Pincode','rules' => 'required'),
				array('field' => 'village', 'label' => 'Village/Block','rules' => 'required'),
				array('field' => 'city', 'label' => 'City/Sub District/Tehsil','rules' => 'required'),
				array('field' => 'paddress', 'label' => 'Permanent Address','rules' => 'required'),
				array('field' => 'pdistrict', 'label' => 'Permanent District','rules' => 'required'),
				array('field' => 'pstate', 'label' => 'Permanent State','rules' => 'required'),
				array('field' => 'ppincode', 'label' => 'Permanent Pincode','rules' => 'required'),
				array('field' => 'parea', 'label' => 'Permanent Village/Block','rules' => 'required'),
				array('field' => 'pcity', 'label' => 'Permanent City/Sub District/Tehsil','rules' => 'required'),
				array('field' => 'email', 'label' => 'Email Id','rules' => 'valid_email'),
				array('field' => 'reg_no', 'label' => 'Reg.No of Certificate','rules' => 'required'),
				array('field' => 'percentage', 'label' => 'Disability Percentage(%)','rules' => 'required'),
				array('field' => 'since', 'label' => 'Disability Since (Year)','rules' => 'required'),
				array('field' => 'scheme', 'label' => 'Disability Scheme','rules' => 'required'),
				array('field' => 'pension_no', 'label' => 'Pension Card Number','rules' => 'required'),
				array('field' => 'hospital_treating', 'label' => 'Hospital Treating Disability','rules' => 'required'),
				array('field' => 'dis_email', 'label' => 'Email Id','rules' => 'required|valid_email'),
				array('field' => 'id_number', 'label' => 'Identity Proof No','rules' => 'required'),
				array('field' => 'dob', 'label' => 'Date Of Birth in dd-mm-yyyy','rules' => 'required'),
			);
			$data = array('type' => $this->input->post('type'), 'name' => $this->input->post('name'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'dob' => $this->input->post('dob'), 'gender' => $this->input->post('gender'), 'father_name' => $this->input->post('father_name'), 'mother_name' => $this->input->post('mother_name'), 'category' => $this->input->post('category'), 'identification' => $this->input->post('identification'),
				'mobile' => $this->input->post('mobile'), 'age' => $this->input->post('age'),
				'blood_group' => $this->input->post('blood_group'), 'education' => $this->input->post('education'),
				'marital_status' => $this->input->post('marital_status'), 'guardian' => $this->input->post('guardian'),
				'relationship' => $this->input->post('relationship'), 'contact_no' => $this->input->post('contact_no'),
				'address' => $this->input->post('address'), 'district' => $this->input->post('district'),
				'state' => $this->input->post('state'), 'pincode' => $this->input->post('pincode'),
				'village' => $this->input->post('village'), 'city' => $this->input->post('city'),
				'paddress' => $this->input->post('paddress'), 'pdistrict' => $this->input->post('pdistrict'),
				'pstate' => $this->input->post('pstate'), 'ppincode' => $this->input->post('ppincode'),
				'parea' => $this->input->post('parea'), 'pcity' => $this->input->post('pcity'),
				'email' => $this->input->post('email'), 'address_proof' => $this->input->post('address_proof'),
				'pcontact' => $this->input->post('pcontact'),
				'dis_certificate' => $this->input->post('dis_certificate'), 'reg_no' => $this->input->post('reg_no'),
				'doi' => $this->input->post('doi'), 'percentage' => $this->input->post('percentage'),
				'since' => $this->input->post('since'), 'scheme' => $this->input->post('scheme'),
				'dis_type' => $this->input->post('dis_type'), 'by_birth' => $this->input->post('by_birth'),
				'authority' => $this->input->post('authority'), 'pension_no' => $this->input->post('pension_no'),
				'hospital_treating' => $this->input->post('hospital_treating'),
				'dis_email' => $this->input->post('dis_email'), 'dis_area' => $this->input->post('dis_area'),
				'due_to' => $this->input->post('due_to'), 'dis_contact' => $this->input->post('dis_contact'),
				'emp' => $this->input->post('emp'), 'occupation' => $this->input->post('occupation'),
				'unemp_since' => $this->input->post('unemp_since'), 'bpl_na' => $this->input->post('bpl_na'),
				'bpl_apl' => $this->input->post('bpl_apl'), 'bpl_bpl' => $this->input->post('bpl_bpl'),
				'bpl_antodya' => $this->input->post('bpl_antodya'), 'inc_below' => $this->input->post('inc_below'),
				'inc_100000' => $this->input->post('inc_100000'), 'inc_500000' => $this->input->post('inc_500000'),
				'inc_500000g' => $this->input->post('inc_500000g'), 'finc_below' => $this->input->post('finc_below'),
				'finc_100000' => $this->input->post('finc_100000'), 'finc_500000' => $this->input->post('finc_500000'),
				'finc_500000g' => $this->input->post('finc_500000g'), 'sinc_below' => $this->input->post('sinc_below'),
				'sinc_100000' => $this->input->post('sinc_100000'), 'sinc_500000' => $this->input->post('sinc_500000'),
				'sinc_500000g' => $this->input->post('sinc_500000g'), 'id_proof' => $this->input->post('id_proof'),
				'id_number' => $this->input->post('id_number'), 'aadhar_no' => $this->input->post('aadhar_no'),
				'state_id' => $this->input->post('state_id'), 'state_value' => $this->input->post('state_value'),
				'tin' => $this->input->post('tin'), 'created_at' => $this->input->post('created_at'));
			
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->session->set_flashdata('id', $para2);
				$data['title'] = 'Edit User';
				$this->load->view('edit_user', $data);
			} else{
				//var_dump($data);
				$this->db->where('id', $para2);
				if($this->db->update('users', $data)){
					$this->session->set_flashdata('success_msg', 'Record Updated Successfully!');
					move_uploaded_file($_FILES['sign']['tmp_name'], 'uploads/sign_' . $para2 . '.jpg');
					move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/photo_' . $para2 . '.jpg');
					redirect('main/users/manage/' . $this->input->post('type'));
				} else{
					$this->session->set_flashdata('error_msg', 'Unable to Update. Please Try Again!');
					redirect('main/users/edit/' . $para2);
				}
			}
		}
		if($para1 == 'delete'){
			/*$this->db->where('id', $para2);
			$this->db->delete('users');
			$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
			redirect('main/users/manage');*/
			
			$data = array('statusid' => 0, 'delete_at' => date('Y-m-d'));
			$this->db->where('id', $para2);
			if($this->db->update('users', $data)){
				$this->session->set_flashdata('success_msg', 'Record Deleted Successfully...!');
				//$this->session->set_tempdata('success_msg','Record Deleted Successfully...!',5);
				redirect('main/users/manage/' . $para3);
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/users/manage/' . $para3);
			}
		}
		if($para1 == 'reports'){
			$data['title'] = 'Users Report';
			$this->load->view('report_users', $data);
		}
		if($para1 == 'search'){
			$data['title'] = 'Users Report';
			$this->session->set_flashdata('search_results', "1");
			$this->session->set_flashdata('from_dt', $this->input->post('from_dt'));
			$this->session->set_flashdata('to_dt', $this->input->post('to_dt'));
			$this->session->set_flashdata('name', $this->input->post('name'));
			$this->session->set_flashdata('mobile', $this->input->post('mobile'));
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->load->view('report_users', $data);
		}
		if($para1 == 'del_users'){
			$data['title'] = 'Deleted Users Lists';
			$this->load->view('deleted_users', $data);
		}
		if($para1 == 'undo_delete'){
			$data = array('delete_at' => NULL);
			$this->db->where('id', $para2);
			if($this->db->update('users', $data)){
				$this->session->set_flashdata('success_msg', 'Record Undo Deleted Successfully...!');
				redirect('main/users/manage/');
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/users/manage/');
			}
		}
		if($para1 == 'delete_perm'){
			$this->db->where('id', $para2);
			$this->db->delete('users');
			$this->session->set_flashdata('success_msg', 'Record Deleted Successfully!');
			redirect('main/users/manage');
		}
		if($para1 == 'export_csv'){
			
			$from_dt = $this->session->flashdata('from_dt');
			$to_dt = $this->session->flashdata('to_dt');
			$name = $this->session->flashdata('name');
			$mobile = $this->session->flashdata('mobile');
			$email = $this->session->flashdata('email');
			$type = $this->session->flashdata('type');
			$sql = 'SELECT d.type, d.name, d.dob, d.gender, d.father_name, d.mother_name, d.category, d.identification, d.age, d.mobile, d.blood_group, d.education, d.marital_status, d.guardian, d.relationship, d.contact_no, d.address, d.district, d.state, d.pincode, d.village, d.city, d.paddress, d.pdistrict, d.pstate, d.ppincode, d.parea, d.pcity, d.email, d.address_proof, d.pcontact, d.dis_certificate, d.reg_no, d.doi, d.percentage, d.since, d.scheme, d.dis_type, d.by_birth, d.authority, d.pension_no, d.hospital_treating, d.dis_email, d.dis_area, d.due_to, d.dis_contact, d.emp, d.occupation, d.unemp_since, d.bpl_na, d.bpl_apl, d.bpl_bpl, d.bpl_antodya, d.inc_below, d.inc_100000, d.inc_500000, d.inc_500000g, d.finc_below, d.finc_100000, d.finc_500000, d.finc_500000g, d.sinc_below, d.sinc_100000, d.sinc_500000, d.sinc_500000g, d.id_proof, d.id_number, d.aadhar_no, d.state_id, d.state_value, d.tin FROM users AS d
			where 1=1 ';
			$sql .= ' AND d.created_at between "'.$from_dt.'" AND "'.$to_dt.'"';
			if($type != ''){
				$sql .= ' AND d.type="'.$type.'"';
			}
			if($name != ''){
				$sql .= ' AND d.name="'.$name.'"';
			}
			if($mobile != ''){
				$sql .= ' AND d.mobile="'.$mobile.'"';
			}
			if($email != ''){
				$sql .= ' AND d.email="'.$email.'"';
			}
			$sql .= ' AND d.delete_at is null';
			$sql .= ' order by d.id desc';
			//echo $sql."<br />";
			$query = $this->db->query($sql);
			$usersData = $query->result_array();
			$filename = 'donation_'.date('Ymd').'.csv';
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; ");
			$file = fopen('php://output','w');
			$header = array("User Role","Applicant Name","Date of Birth","Gender","Father Name","Mothers Name","Category","Marks of Identification","Age","Mobile No","Blood Group","Educational Details","Marital Status","Guardian/Caretaker","Relation Status","Contact No","Correspondence Address","District","State/UTs","Pincode","Village","City Sub District Tehsil","Permanent Address","District","State","Pincode","Village","City Sub District Tehsil","Email Id","Address proof Document","Contact No","Disability Certificate","Reg.No of Certificate","Date of Issue","Disability Percentage(%)","Disability Since (Year)","Disability Scheme","Disability Type","Disability By Birth","Details of Issuing Authority","Pension Card Number","Hospital Treating Disability","Email Id","Disability Area","Disability Due to","Contact No","Employed","Occupation","Unemployed Since","BPL APL N/P","APL","BPL","Antodya","Personal Income (Annual) Below 10,000","10,000 to 1,00,000","1,00,000 to 5,00,000",">5,00,000","Father Income (Annual) Below 10,000","10,000 to 1,00,000","1,00,000 to 5,00,000",">5,00,000","Spouse Income (Annual) Below 10,000","10,000 to 1,00,000","1,00,000 to 5,00,000",">5,00,000","Attached Identity Proof","Identity Proof No","Aadhar No","Any Other State/UTs ID","Other State/UTs ID Value","TIN (NPR)");
			fputcsv($file, $header);
			foreach ($usersData as $key=>$line){
				fputcsv($file,$line);
			}
			fclose($file);
			exit;
		}
	}
	
	public function donation($para1 = "", $para2 = "")
	{
		if($para1 == 'form'){
			$data['title'] = 'Add Donation';
			$this->load->view('add_donation', $data);
		}
		if($para1 == 'manage'){
			$data['title'] = 'Manage Donation';
			$this->load->view('manage_donations', $data);
		}
		if($para1 == 'add'){
			$collected_by = $this->session->userdata('name');
			$rules = array(array('field' => 'amount', 'label' => 'Amount',
				'rules' => 'required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]'),
				array('field' => 'created_at', 'label' => 'Date', 'rules' => 'trim|exact_length[10]|callback_validate_date'),
				array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
				array('field' => 'mobile', 'label' => 'Mobile', 'rules' => 'required|regex_match[/^[0-9]{10}$/]'),);
			
			$data = array('rec_id' => $this->input->post('rec_id'), 'created_at' => $this->input->post('created_at'),
				'amount' => $this->input->post('amount'), 'mobile' => $this->input->post('mobile'),
				'name' => $this->input->post('name'), 'email' => $this->input->post('email'),
				'address' => $this->input->post('address'), 'remarks' => $this->input->post('remarks'),
				'collected_by' => $collected_by,);
			
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->load->view('add_donation');
			} else{
				if($this->db->insert('donation', $data)){
					$this->session->set_flashdata("success_msg", "Record Added Successfully!");
					redirect('main/donation/manage');
				}
			}
		}
		if($para1 == 'delete'){
			/*$this->db->where('id', $para2);
			$this->db->delete('donation');
			$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
			redirect('main/donation/manage');*/
			
			$data = array('delete_at' => date('Y-m-d'));
			$this->db->where('id', $para2);
			if($this->db->update('donation', $data)){
				$this->session->set_flashdata('success_msg', 'Record Deleted Successfully...!');
				redirect('main/donation/manage/');
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/donation/manage/');
			}
		}
		if($para1 == 'info'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'View Donation';
			$this->load->view('view_donation', $data);
		}
		if($para1 == 'edit'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'Edit Donation';
			$this->load->view('edit_donation', $data);
		}
		if($para1 == 'update'){
			$rules = array(array('field' => 'amount', 'label' => 'Amount',
				'rules' => 'required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]'),
				array('field' => 'created_at', 'label' => 'Date', 'rules' => 'trim|exact_length[10]|callback_validate_date'),
				array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
				array('field' => 'mobile', 'label' => 'Mobile', 'rules' => 'required|regex_match[/^[0-9]{10}$/]'),);
			
			$data = array('amount' => $this->input->post('amount'), 'created_at' => $this->input->post('created_at'), 'mobile' => $this->input->post('mobile'),
				'name' => $this->input->post('name'), 'email' => $this->input->post('email'),
				'address' => $this->input->post('address'), 'remarks' => $this->input->post('remarks'));
			
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->session->set_flashdata('id', $para2);
				$data['title'] = 'Edit Donation';
				$this->load->view('edit_donation', $data);
			} else{
				$this->db->where('id', $para2);
				if($this->db->update('donation', $data)){
					$this->session->set_flashdata('success_msg', 'Record Updated Successfully!');
					redirect('main/donation/manage');
				} else{
					$this->session->set_flashdata('error_msg', 'Unable to Update. Please Try Again!');
					redirect('main/donation/edit/' . $para2);
				}
			}
		}
		if($para1 == 'reports'){
			$data['title'] = 'Donation Report';
			$this->load->view('report_donation', $data);
		}
		if($para1 == 'search'){
			$data['title'] = 'Donation Report';
			$this->session->set_flashdata('search_results', "1");
			$this->session->set_flashdata('from_dt', $this->input->post('from_dt'));
			$this->session->set_flashdata('to_dt', $this->input->post('to_dt'));
			$this->session->set_flashdata('name', $this->input->post('name'));
			$this->session->set_flashdata('mobile', $this->input->post('mobile'));
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->load->view('report_donation', $data);
		}
		if($para1 == 'del_donation'){
			$data['title'] = 'Deleted Donation Lists';
			$this->load->view('deleted_donation', $data);
		}
		if($para1 == 'undo_delete'){
			$data = array('delete_at' => NULL);
			$this->db->where('id', $para2);
			if($this->db->update('donation', $data)){
				$this->session->set_flashdata('success_msg', 'Record Undo Deleted Successfully...!');
				redirect('main/donation/manage/');
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/donation/manage/');
			}
		}
		if($para1 == 'delete_perm'){
			$this->db->where('id', $para2);
			$this->db->delete('donation');
			$this->session->set_flashdata('success_msg', 'Record Deleted Successfully!');
			redirect('main/donation/manage');
		}
		if($para1 == 'export_csv'){
			
			$from_dt = $this->session->flashdata('from_dt');
			$to_dt = $this->session->flashdata('to_dt');
			$name = $this->session->flashdata('name');
			$mobile = $this->session->flashdata('mobile');
			$email = $this->session->flashdata('email');
			
			$sql = 'SELECT rec_id, name, amount, mobile, email, created_at, address, remarks FROM donation where 1=1 ';
			$sql .= ' AND created_at between "'.$from_dt.'" AND "'.$to_dt.'"';
			if($email !=''){
				$sql .= ' AND email = "' . $email . '"';
			}
			if($name !=''){
				$sql .= ' AND name = "' . $name . '"';
			}
			if($mobile !=''){
				$sql .= ' AND mobile = "' . $mobile . '"';
			}
			$sql .= ' AND delete_at is null';
			$sql .= ' order by id desc';
			$query = $this->db->query($sql);
			$usersData = $query->result_array();
			
			$filename = 'donation_'.date('Ymd').'.csv';
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; ");
			/* get data */
			//$usersData = $this->Crud_model->getUserDetails();
			/* file creation */
			$file = fopen('php://output','w');
			$header = array("REC ID","NAME","AMOUNT","MOBILE NO","EMAIL","DATE","ADDRESS","REMARKS");
			fputcsv($file, $header);
			foreach ($usersData as $key=>$line){
				fputcsv($file,$line);
			}
			fclose($file);
			exit;
		}
	}
	
	public function expense($para1 = "", $para2 = "")
	{
		if($para1 == 'form'){
			$data['title'] = 'Add Expense';
			$this->load->view('add_expense', $data);
		}
		if($para1 == 'manage'){
			$data['title'] = 'Manage Expense';
			$this->load->view('manage_expenses', $data);
		}
		if($para1 == 'info'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'View Expense';
			$this->load->view('view_expense', $data);
		}
		if($para1 == 'add'){
			$TotAmt = ($this->input->post('TotAmt') - $this->input->post('amount'));
			$rules = array(array('field' => 'amount', 'label' => 'Amount',
				'rules' => 'required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]'),
				array('field' => 'created_at', 'label' => 'Date', 'rules' => 'trim|exact_length[10]|callback_validate_date'),
				array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
				array('field' => 'mobile', 'label' => 'Mobile', 'rules' => 'required|regex_match[/^[0-9]{10}$/]'),
				array('field' => 'spent', 'label' => 'Spend Reason', 'rules' => 'required'),);
			$data = array('voucher_id' => $this->input->post('voucher_id'),
				'created_at' => $this->input->post('created_at'), 'amount' => $this->input->post('amount'),
				'mobile' => $this->input->post('mobile'), 'name' => $this->input->post('name'),
				'email' => $this->input->post('email'), 'address' => $this->input->post('address'),
				'spent' => $this->input->post('spent'), 'remarks' => $this->input->post('remarks'));
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->load->view('add_expense');
			} else{
				if($TotAmt > 0){
					if($this->db->insert('expenses', $data)){
						$this->session->set_flashdata("success_msg", "Record Added Successfully!");
						redirect('main/expense/manage');
					}
				}
				else{
					$this->session->set_flashdata("error_msg", "Expense Amount Greater than Total Donation Amount !");
					$this->load->view('add_expense');
				}
			}
		}
		if($para1 == 'delete'){
			/*$this->db->where('id', $para2);
			$this->db->delete('expenses');
			$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
			redirect('main/expense/manage');*/
			
			$data = array('delete_at' => date('Y-m-d'));
			$this->db->where('id', $para2);
			if($this->db->update('expenses', $data)){
				$this->session->set_flashdata('success_msg', 'Record Deleted Successfully...!');
				redirect('main/expense/manage/');
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/expense/manage/');
			}
		}
		if($para1 == 'reports'){
			$data['title'] = 'Expenses Reports';
			$this->load->view('report_expense', $data);
		}
		if($para1 == 'search'){
			$data['title'] = 'Expenses Reports';
			$this->session->set_flashdata('search_results', "1");
			$this->session->set_flashdata('from_dt', $this->input->post('from_dt'));
			$this->session->set_flashdata('to_dt', $this->input->post('to_dt'));
			$this->session->set_flashdata('name', $this->input->post('name'));
			$this->session->set_flashdata('mobile', $this->input->post('mobile'));
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->load->view('report_expense', $data);
		}
		if($para1 == 'del_expense'){
			$data['title'] = 'Deleted Expense Lists';
			$this->load->view('deleted_expenses', $data);
		}
		if($para1 == 'undo_delete'){
			$data = array('delete_at' => NULL);
			$this->db->where('id', $para2);
			if($this->db->update('expenses', $data)){
				$this->session->set_flashdata('success_msg', 'Record Undo Deleted Successfully...!');
				redirect('main/expense/manage/');
			} else{
				$this->session->set_flashdata('error_msg', 'Unable to Delete Record. Please Try Again!');
				redirect('main/expense/manage/');
			}
		}
		if($para1 == 'delete_perm'){
			$this->db->where('id', $para2);
			$this->db->delete('expenses');
			$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
			redirect('main/expense/manage');
		}
		if($para1 == 'edit'){
			$this->session->set_flashdata('id', $para2);
			$data['title'] = 'Edit Expense';
			$this->load->view('edit_expense', $data);
		}
		if($para1 == 'update'){
			$rules = array(array('field' => 'amount', 'label' => 'Amount',
				'rules' => 'required|numeric|greater_than[0.99]|regex_match[/^[0-9,]+$/]'),
				array('field' => 'created_at', 'label' => 'Date', 'rules' => 'trim|exact_length[10]|callback_validate_date'),
				array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
				array('field' => 'mobile', 'label' => 'Mobile', 'rules' => 'required|regex_match[/^[0-9]{10}$/]'),
				array('field' => 'spent', 'label' => 'Spend Reason', 'rules' => 'required'),);
			$data = array('amount' => $this->input->post('amount'), 'mobile' => $this->input->post('mobile'), 'created_at' => $this->input->post('created_at'),
				'name' => $this->input->post('name'), 'email' => $this->input->post('email'),
				'address' => $this->input->post('address'), 'spent' => $this->input->post('spent'),
				'remarks' => $this->input->post('remarks'));
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == false){
				/*if($this->db->insert('expenses', $data)){
					$this->session->set_flashdata("success_msg", "Registered Successfully!");
					redirect('main/expense/manage');
				}*/
				$this->session->set_flashdata('id', $para2);
				$data['title'] = 'Edit Expense';
				$this->load->view('edit_expense', $para2);
			} else{
				$this->db->where('id', $para2);
				if($this->db->update('expenses', $data)){
					$this->session->set_flashdata('success_msg', 'Record Updated Successfully!');
					redirect('main/expense/manage');
				} else{
					$this->session->set_flashdata('error_msg', 'Unable to Update. Please Try Again!');
					redirect('main/expense/edit/' . $para2);
				}
			}
		}
	}
	
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
	
	public function validate_date($incoming_date)
	{
		//If in dd/mm/yyyy format
		if (preg_match("^\d{4}-\d{2}-\d{2}^", $incoming_date))
		{
			//Extract date into array
			$date_array = explode('-', $incoming_date);
			
			//If it is not a date
			if(! checkdate($date_array[1], $date_array[2], $date_array[0]))
			{
				$this->form_validation->set_message('validate_date', 'Invalid date ');
				return false;
			}
		}
		//If not in dd/mm/yyyy format
		else
		{
			$this->form_validation->set_message('validate_date', 'Invalid date YYYY-MM-DD');
			return false;
		}
		
		return true;
	}
}

function checkDateFormat($date) {
	if (preg_match("\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3(0|1))", $date)) {
		if(checkdate(substr($date, 3, 2), substr($date, 0, 2), substr($date, 6, 4)))
			return true;
		else
			return false;
	} else {
		return false;
	}
}
