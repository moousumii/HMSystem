<?php  //if (!defined('BASEPATH')) exit('No direct script access allowed');  

defined('BASEPATH') OR exit('No direct script access allowed');
   
class AjaxFunctions extends CI_Controller {   
    
 public function __construct()  {  
        parent:: __construct();  
		$this->load->model("ajax_model");
    } 
	public function ajax_getAllBuldingIdForZone(){
		
		$info=$this->ajax_model->ajax_get_all_building_id_name_by_zone($this->input->post('zone_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getAllFloorIdForBuilding(){
		
		$info=$this->ajax_model->ajax_get_all_floor_id_name_by_building($this->input->post('building_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getAllUnitIdForFloor(){
		
		$info=$this->ajax_model->ajax_get_all_unti_id_name_by_floor($this->input->post('floor_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getAllRoomIdForUnit(){
		
		$info=$this->ajax_model->ajax_get_all_room_id_name_by_Unit($this->input->post('unit_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getAllSeatIdForRoom(){
		
		$info=$this->ajax_model->ajax_get_all_seat_id_name_by_Room($this->input->post('room_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getSeatAmountByType(){
		
		$info=$this->ajax_model->ajax_get_seat_amount_by_type($this->input->post('type_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'amount'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getAllSeatIdForZone(){
		
		$info=$this->ajax_model->ajax_get_seat_id_name_for_zone($this->input->post('zone_id'));
		if($info){
			$data = array(
				'status'=>true, 
				'infos'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_updateBillInfo(){
		$bill=$this->input->post();
		$info=$this->ajax_model->ajax_update_bill_info($bill);
		if($info){
			$data = array(
				'status'=>true, 
				'total'=>$info
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getStdSeatInfo(){
		$student=$this->input->post('student_id');
		$info=$this->ajax_model->ajax_get_std_seat_info_by_std_id($student);
		if($info){
			$data = array(
				'status'=>true, 
				'specialDiscount'=>$info->specialDiscount,
				'additionalCharge'=>$info->additionalCharge,
				'securityMoney'=>$info->securityMoney,
				'admissionFee'=>$info->admissionFee,
				'zoneTitle'=>$info->zoneTitle,
				'seatNumber'=>$info->seatNumber,
				'sSeatId'=>$info->sSeatId,
				'seat_info_seatId'=>$info->seat_info_seatId,
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getVacantStdSeatInfo(){
		$student=$this->input->post('student_id');
		$info=$this->ajax_model->ajax_get_vacant_std_seat_info_by_std_id($student);
		if($info){
			$data = array(
				'status'=>true, 
				'seat_info_seatId'=>$info->seat_info_seatId,
				'sSeatId'=>$info->sSeatId,
				'seatNumber'=>$info->seatNumber,
				'studentName'=>$info->studentName,
				'studentContactNo'=>$info->studentContactNo,
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getStdBalance(){
		$student=$this->input->post('student_id');
		$info=$this->ajax_model->ajax_get_std_balance_by_std_id($student);
		if($info){
			$data = array(
				'status'=>true, 
				'std_balance'=>$info->studentWalletAmount,
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
	public function ajax_getSeatRent(){
		$seat=$this->input->post('seat_id');
		$info=$this->ajax_model->ajax_get_seat_monthly_rent_by_seat_id($seat);
		if($info){
			$data = array(
				'status'=>true, 
				'rentAmount'=>$info->seatRentAmount,
				'seatNumber'=>$info->seatNumber,
			);
		}
		else{
			$data = array(
				'status'=>false,
			);
		}
		echo json_encode($data);
	}
}  