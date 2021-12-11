<?php if(!defined('BASEPATH'))
	exit('No direct script access allowed');
class Home_model extends CI_Model
{
	function __construct()
	{
	}
	
	public function checkDuplicate($phone = '', $email = '')
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('phone', $phone);
		$this->db->or_where('email', $email);
		$query = $this->db->get();
		$result = $query->row();
		if($result){
			return 0;
		} else{
			return 1;
		}
	}
	
	public function getUsers($type = "")
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('type', $type);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	public function getAllUsers()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	public function getSellerInfo()
	{
		$this->db->select('*');
		$this->db->from('sellers');
		$this->db->where('random', $this->session->userdata('seller_id'));
		$query = $this->db->get();
		$result = $query->result_array();
		if($result){
			return $result;
		} else{
			return '';
		}
	}
	
	public function getDonation()
	{
		/*$this->db->select('amount');
		$this->db->from('donation');
		$query = $this->db->get();
		$result = $query->result_array();
		if($result){
			$amount = 0;
			foreach($result as $row){
				$amount += $row['amount'];
			}
			return $amount;
		} else{
			return 0;
		}*/
		
		$query_amt = $this->db->query("SELECT sum(amount) as amount FROM donation where delete_at is not null");
		$res_amt = $query_amt->result_array();
		if($res_amt){
			$DonAmt = $res_amt[0]['amount'];
		}
		else{
			$DonAmt = 0;
		}
		return $DonAmt;
	}
	
	public function getExpense()
	{
		/*$this->db->select('amount');
		$this->db->from('expenses');
		$query = $this->db->get();
		$result = $query->result_array();
		if($result){
			$amount = 0;
			foreach($result as $row){
				$amount += $row['amount'];
			}
			return $amount;
		} else{
			return 0;
		}*/
		
		$query_amt = $this->db->query("SELECT sum(amount) as amount FROM expenses where delete_at is not null");
		$res_amt = $query_amt->result_array();
		if($res_amt){
			$ExpAmt = $res_amt[0]['amount'];
		}
		else{
			$ExpAmt = 0;
		}
		return $ExpAmt;
	}
	
	public function getBalance()
	{
		/*$donation = 0;
		$expense = 0;
		$this->db->select('amount');
		$this->db->from('donation');
		$query = $this->db->get();
		$result = $query->result_array();
		if($result){
			foreach($result as $row){
				$donation += $row['amount'];
			}
		}
		$this->db->select('amount');
		$this->db->from('expenses');
		$query1 = $this->db->get();
		$result1 = $query1->result_array();
		if($result1){
			foreach($result1 as $row){
				$expense += $row['amount'];
			}
		}*/
		$query_amt = $this->db->query("SELECT sum(amount) as amount FROM donation where delete_at is not null");
		$res_amt = $query_amt->result_array();
		if($res_amt){
			$DonAmt = $res_amt[0]['amount'];
		}
		else{
			$DonAmt = 0;
		}
		
		$query_amt = $this->db->query("SELECT sum(amount) as amount FROM expenses where delete_at is not null");
		$res_amt = $query_amt->result_array();
		if($res_amt){
			$ExpAmt = $res_amt[0]['amount'];
		}
		else{
			$ExpAmt = 0;
		}
		
		$balance = $DonAmt - $ExpAmt;
		return $balance;
	}
	
	public function random()
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		$random = rand(0000, 9999);
		for($i = 0; $i < 10; $i++){
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString . $random;
	}
	
	public function inr($amount = '')
	{
		$num = $amount;
		$num = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $num);
		return $num;
	}
}
