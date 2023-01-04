 <?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax_model extends CI_Model{ 
	public function ajax_get_all_building_id_name_by_zone($zone_id)
	{
		$q=$this->db
				->select('buildingId,buildingNumber')
				->from('building_info')
				->where('zone_info_zoneId',$zone_id)
				->get();
				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	public function ajax_get_all_floor_id_name_by_building($building_id)
	{
		$q=$this->db
				->select('floorId,floorNumber')
				->from('floor_info')
				->where('building_info_floorBuildingId',$building_id)
				->get();
				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	
	public function ajax_get_all_unti_id_name_by_floor($floor_id)
	{
		$q=$this->db
				->select('unitId,unitNumber')
				->from('unit_info')
				->where('floor_info_unitFloorId',$floor_id)
				->get();
				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	
	
	public function ajax_get_all_room_id_name_by_Unit($unit_id)
	{
		$q=$this->db
				->select('roomId,roomNumber')
				->from('room_info')
				->where('unit_info_roomUnitId',$unit_id)
				->get();
				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	
	public function ajax_get_all_seat_id_name_by_Room($room_id)
	{
		$q=$this->db
				->select('seatId,seatNumber')
				->from('seat_info')
				->where('room_info_seatRoomId',$room_id)
				->where('seat_status_info_seatSeatStausId',1)
				->get();

				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	
	public function ajax_get_seat_amount_by_type($type_id)
	{
		$q=$this->db
				->select('seatRentAmount')
				->from('seat_type_info')
				->where('seatTypeId',$type_id)
				->get();
				
		if($q->num_rows()){
			return $q->row()->seatRentAmount;
		}
		else{
			return FALSE;
		}
		
	}
	
	
	public function ajax_get_seat_id_name_for_zone($zone_id)
	{
		$q=$this->db
				->select('seatId,seatNumber')
				->from('seat_info')
				->where('zone_info_zoneID',$zone_id)
				->where('seat_status_info_seatSeatStausId',1)
				->get();
				
		if($q->num_rows()){
			return $q->result();
		}
		else{
			return FALSE;
		}
		
	}
	
	
	public function ajax_update_bill_info($data)
	{
		$total=$this->ajax_model->_get_std_total_amount_by_id($data['bill_id']);
		$totalAmount=($total->billingDetailsStudentPreviousDue+$total->billing_details_additionalCharge+$total->billing_details_monthelyRent+$total->billingDetailsStudentFoodAmount+$total->billingDetailsStudentElecticBill+$total->billingDetailsStudentWifiBill)-$total->billing_details_specialDiscount;
		$bill['billingDetailsStudentBillDiscount']=$data['discountAmount'];
		$bill['billingDetailsStudentOtherAmount']=$data['otherAmount'];
		$bill['billingDetailsStudentTotalAmount']=($totalAmount+$data['otherAmount'])-$data['discountAmount'];
		$q=$this->db
				->where('monthlyBillngDetailsId',$data['bill_id'])
				->update('monthly_billng_details',$bill);
		if($q){
			return $bill['billingDetailsStudentTotalAmount'];
		}
		else{
			return FALSE;
		}
		
	}
	
	private function _get_std_total_amount_by_id($bill_id){
		$data=$this->db
					->select('*')
					->from('monthly_billng_details')
					->where('monthlyBillngDetailsId',$bill_id)
					->get();
		if($data){
			return $data->row();
		}
	}
	
	public function ajax_get_std_seat_info_by_std_id($student){
		$data=$this->db
					->select('student_seat_info.*,seat_info.seatNumber,zone_info.zoneTitle')
					->from('student_seat_info')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->join('zone_info','zone_info.zoneID=seat_info.zone_info_zoneID')
					->where('student_info_studentId',$student)
					->where('seat_info_studentSeatStatus',1)
					->get();
		if($data){
			return $data->row();
		}
	}
	
	public function ajax_get_vacant_std_seat_info_by_std_id($student){
		$data=$this->db
					->select('student_seat_info.seat_info_seatId,student_seat_info.sSeatId,seat_info.seatNumber,student_info.studentName,student_info.studentContactNo')
					->from('student_seat_info')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->join('student_info','student_info.studentId=student_seat_info.student_info_studentId')
					->where('student_info_studentId',$student)
					->where('student_info.studentStatus',1)
					->where('seat_info_studentSeatStatus',1)
					->get();
		if($data){
			return $data->row();
		}
	}
	
	public function ajax_get_std_balance_by_std_id($student){
		$data=$this->db
					->select('studentWalletAmount')
					->from('student_info')
					->where('studentId',$student)
					->get();
		if($data){
			return $data->row();
		}
	}
	public function ajax_get_seat_monthly_rent_by_seat_id($seat){
		$data=$this->db
					->select('seat_info.seat_type_info_seatSeatTypeId,seat_info.seatNumber,seat_type_info.seatRentAmount')
					->from('seat_info')
					->join('seat_type_info','seat_type_info.seatTypeId=seat_info.seat_type_info_seatSeatTypeId')
					->where('seat_info.seatId',$seat)
					->where('seatTypeStatus',1)
					->get();
		if($data){
			return $data->row();
		}
	}
	
} 