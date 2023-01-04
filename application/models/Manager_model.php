<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {

	/*Total Cash Sart*/
	public function get_total_expense_amount()
	{
		$data=$this->db
						->select_sum('expenseAmount')
						->from('expense_info')
						->get();
		if($data)
		{
			return $data->row()->expenseAmount;
		}
	}
	public function get_total_return_payment()
	{
		$data=$this->db
						->select_sum('returnPaymentAmount')
						->from('return_payment_info')
						->get();
		if($data)
		{
			return $data->row()->returnPaymentAmount;
		}
	}
	public function get_total_receive_payment()
	{
		$data=$this->db
						->select_sum('receivedPaymentAmount')
						->from('received_payment_info')
						->get();
		if($data)
		{
			return $data->row()->receivedPaymentAmount;
		}
	}
	public function get_individual_receive_payment($type)
	{
		$data=$this->db
						->select_sum('receivedPaymentAmount')
						->from('received_payment_info')
						->where('payment_type_info_paymentTypeId',$type)
						->get();
		if($data)
		{
			return $data->row()->receivedPaymentAmount;
		}
	}
	public function get_total_seats()
	{
		$data=$this->db
						->select('seatId')
						->from('seat_info')
						->get();
		if($data)
		{
			return $data->num_rows();
		}
	}
	public function get_individual_seat_total($status)
	{
		$data=$this->db
						->select('seatId')
						->from('seat_info')
						->where('seat_status_info_seatSeatStausId',$status)
						->get();
		if($data)
		{
			return $data->num_rows();
		}
	}
	public function get_total_due_amount()
	{
		$data=$this->db
						->select_sum('studentWalletAmount')
						->from('student_info')
						->where('studentWalletAmount>',0)
						->get();
		if($data)
		{
			return $data->row()->studentWalletAmount;
		}
	}
	/*Total Cash End*/

	/*DateTime Function*/
	public function get_current_date_time()
	{
		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$date=$dt->format('Y-m-d H:i:s');
		return $date;
	}

	/*My Account Start*/
	public function get_user_details_by_id($admin_id)
	{
		
		$data=$this->db
				->select('*,admin_role.roleName')
				->from('admin_info')
				->join('admin_role','admin_role.roleID=admin_info.admin_role_roleID')
				->where('adminID',$admin_id)
				->where('admin_role_roleID>',1)
				->get();
				
		if($data->num_rows()==1){
			return $data->row();
		}
		else{
			return FALSE;
		}
	}
	/*My Account End*/

	/*Common Insert Function*/
	public function insert_data($table,$data){
		return $this->db->insert($table,$data);
	}

	/*Add Students Start*/
	public function get_seatId_seatNo(){
		$data=$this->db
						->select('seat_info.seatId, seat_info.seatNumber')
						->from('seat_info')
						->where('seatStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	private function _get_seat_number_by_seat_id($seatId){
		$q=$this->db->select('seat_info.seatNumber,seat_type_info.seatRentAmount')
				   ->from('seat_info')
				   ->join('seat_type_info','seat_type_info.seatTypeId=seat_info.seat_type_info_seatSeatTypeId')
				   ->where('seatId',$seatId)
				   ->get();
		if($q){
			return $q->row();
		}

	}

	public function get_admissionTypeID_admissionTypeName(){
		$data=$this->db
						->select('student_admission_type.admissionTypeId, student_admission_type.admissionTypeName')
						->from('student_admission_type')
						->get();
		if($data){
			return $data->result();
		}
	}

	public function insert_student($data)
	{
		$this->db->trans_start();
		
		$seat_info=$this->manager_model->_get_seat_number_by_seat_id($data['seat_info_seatId']);
		//print_r($data);exit;
		$data['monthelyRent']=$seat_info->seatRentAmount;
		$stdInfo['student_admission_type_admissionTypeId']=$data['student_admission_type_admissionTypeId'];
		$stdInfo['studentName']=$data['studentName'];
		$stdInfo['studentGender']=$data['studentGender'];
		$stdInfo['studentBirthDate']=$data['studentBirthDate'];
		$stdInfo['studentContactNo']=$data['studentContactNo'];
		$stdInfo['studentNID']=$data['studentNID'];
		if($data['studentReligion']){
			$stdInfo['studentReligion']=$data['studentReligion'];
		}
		if($data['studentBloodGroup']){
			$stdInfo['studentBloodGroup']=$data['studentBloodGroup'];
		}
		$stdInfo['studentContactNo']=$data['studentContactNo'];
		$stdInfo['nationality']=$data['nationality'];
		$stdInfo['studentBirthRegNo']=$data['studentBirthRegNo'];
		$stdInfo['studentAddress']=$data['studentAddress'];
		$stdInfo['fatherName']=$data['fatherName'];
		$stdInfo['seat_info_studenCurrentSeatId']=$data['seat_info_seatId'];
		$stdInfo['motherName']=$data['motherName'];
		$stdInfo['localGurdianName']=$data['localGurdianName'];
		$stdInfo['localGurdianContactNo']=$data['localGurdianContactNo'];
		$stdInfo['localGurdianNID']=$data['localGurdianNID'];
		$stdInfo['localGurdianAddress']=$data['localGurdianAddress'];
		$stdInfo['stdImage']=$data['stdImage'];
		$stdInfo['stdIdCard']=$data['stdIdCard'];
		$stdInfo['parentsImage']=$data['parentsImage'];
		$stdInfo['parentsIdCard']=$data['parentsIdCard'];
		$stdInfo['stdNote']=$data['stdNote'];
		$stdInfo['studentAddedDate']=$this->manager_model->get_current_date_time();
		$this->db->insert('student_info', $stdInfo );
		$studentid=$this->db->insert_id();
		$v=0000;
		$v=str_pad($v + $studentid, 4, 0, STR_PAD_LEFT);
		$std_seatNumber['stdIdNo']=$seat_info->seatNumber.$v;
		$this->db->where('studentId',$studentid)->update('student_info',$std_seatNumber);
		$data['stduntIdNo']=$std_seatNumber['stdIdNo'];
		/* insert student ssc Qualifications */
		if($data['sscSchool']){
			$type=1;
			$type_name="ssc";
			$this->manager_model->_set_qualification_data($type,$data,$type_name,$studentid);
		}
		
		/* insert student hsc Qualifications */
		if($data['hscSchool']){
			$type=2;
			$type_name="hsc";
			$this->manager_model->_set_qualification_data($type,$data,$type_name,$studentid);
		}
		
		/* insert student graduation Qualifications */
		if($data['graduationInstitution']){
			$type=3;
			$type_name="graduation";
			$this->manager_model->_set_qualification_data($type,$data,$type_name,$studentid);
		}
		
		/* insert student post graduation Qualifications */
		if($data['postGraduationInstitution']){
			$type=4;
			$type_name="postGraduation";
			$this->manager_model->_set_qualification_data($type,$data,$type_name,$studentid);
		}
		/* student work info */
		if($data['studentType']==1){
			$this->manager_model->_set_student_work_info($data,$studentid);
		}
		/* Student Seat Info */
		$this->manager_model->_set_student_seat_info($data,$studentid);

		$seat_info_status['seat_status_info_seatSeatStausId']=2;
		$this->db->where('seatId',$data['seat_info_seatId'])
				 ->update('seat_info',$seat_info_status);

		/*Student Gurdian Info*/
		$this->manager_model->_set_student_gurdian_info($data,$studentid);
		/*Student Other Courses Info*/
		$this->manager_model->_set_student_other_courses_info($data,$studentid);
		
		$this->db->trans_complete();
		if($this->db->trans_status()==true){
			return $studentid;
		}
		else{
			return false;
		}
	}

	private function _set_student_gurdian_info($data,$studentid){
		$std_work['stdFatherName']=$data['stdFatherName'];
		$std_work['stdFatherContactNo']=$data['stdFatherContactNo'];
		$std_work['stdFatherOccupation']=$data['stdFatherOccupation'];
		$std_work['stdFatherNID']=$data['stdFatherNID'];
		$std_work['stdMotherName']=$data['stdMotherName'];
		$std_work['stdMotherContactNo']=$data['stdMotherContactNo'];
		$std_work['stdMotherOccupation']=$data['stdMotherOccupation'];
		$std_work['stdMotherNID']=$data['stdMotherNID'];
		$std_work['gurdianAddress']=$data['gurdianAddress'];
		$std_work['husbandName']=$data['husbandName'];
		$std_work['husbandContactNo']=$data['husbandContactNo'];
		$std_work['husbandOccupation']=$data['husbandOccupation'];
		$std_work['husbandNID']=$data['husbandNID'];
		$std_work['husbandAddress']=$data['husbandAddress'];
		$std_work['localGurdianName']=$data['localGurdianName'];
		$std_work['localGurdianContactNo']=$data['localGurdianContactNo'];
		$std_work['localGurdianOccupation']=$data['localGurdianOccupation'];
		$std_work['localGurdianNID']=$data['localGurdianNID'];
		$std_work['localGurdianRelationship']=$data['localGurdianRelationship'];
		$std_work['localGurdianAddress']=$data['localGurdianAddress'];
		$std_work['student_info_studentId']=$studentid;
		$table="gurdian_info";
		return $this->manager_model->insert_data($table,$std_work);
	}

	private function _set_student_other_courses_info($data,$studentid){
		$std_work['courseInstitutionName']=$data['courseInstitutionName'];
		$std_work['courseName']=$data['courseName'];
		$std_work['courseTime']=$data['courseTime'];
		$std_work['courseDays']=$data['courseDays'];
		$std_work['student_info_studentId']=$studentid;
		$table="student_other_courses";
		return $this->manager_model->insert_data($table,$std_work);
	}

	private function _set_qualification_data($type,$data,$type_name,$studentid){
		$qualification=array();
		$qualification['qualificationType']=$type;
		$qualification['student_info_studentId']=$studentid;
		if($type<3){
			$qualification['institutionName']=$data[$type_name.'School'];
			$qualification['passingYear']=$data[$type_name.'PassingYear'];
			$qualification['group']=$data[$type_name.'Group'];
			$qualification['board']=$data[$type_name.'Board'];
			$qualification['class']=$data[$type_name.'Class'];
			$qualification['classRoll']=$data[$type_name.'Roll'];
			$qualification['section']=$data[$type_name.'Section'];
			$qualification['classTime']=$data[$type_name.'ClassTime'];
		}
		else{
			$qualification['institutionName']=$data[$type_name.'Institution'];
			$qualification['passingYear']=$data[$type_name.'Year'];
			$qualification['group']=$data[$type_name.'Subject'];
			$qualification['semester']=$data[$type_name.'Semester'];
			$qualification['sQInstitutionId']=$data[$type_name.'InstStdId'];
		}
		$table="student_qualification";
		return $this->manager_model->insert_data($table,$qualification);
	}
	
	private function _set_student_work_info($data,$studentid){
		$std_work['companyName']=$data['companyName'];
		$std_work['workId']=$data['workId'];
		$std_work['designation']=$data['designation'];
		$std_work['officeLocation']=$data['officeLocation'];
		$std_work['student_info_studentId']=$studentid;
		$table="student_working_info";
		return $this->manager_model->insert_data($table,$std_work);
	}
	
	private function _set_student_seat_info($data,$studentid){
		$std_work['monthelyRent']=$data['monthelyRent'];
		$std_work['specialDiscount']=$data['specialDiscount'];
		$std_work['additionalCharge']=$data['additionalCharge'];
		$std_work['studentExpireDate']=date('Y-m-d', strtotime($data['studentExpireDate']));
		//$std_work['admissionFee']=$data['admissionFee'];
		//$std_work['securityMoney']=$data['securityMoney'];
		$std_work['seat_info_seatId']=$data['seat_info_seatId'];
		$std_work['student_info_studentIdNo']=$data['stduntIdNo'];
		$std_work['student_info_studentId']=$studentid;
		$std_work['studentSeatAddedDate']=$this->manager_model->get_current_date_time();;
		$table="student_seat_info";
		return $this->manager_model->insert_data($table,$std_work);
	}

	
	private function _set_student_transfer_seat_info($data,$studentid){
		$std_work['monthelyRent']=$data['monthelyRent'];
		$std_work['specialDiscount']=$data['specialDiscount'];
		$std_work['additionalCharge']=$data['additionalCharge'];
		$std_work['seat_info_seatId']=$data['seat_info_seatId'];
		$std_work['student_info_studentIdNo']=$data['stduntIdNo'];
		$std_work['student_info_studentId']=$studentid;
		$std_work['studentSeatAddedDate']=$this->manager_model->get_current_date_time();
		if($this->db->insert('student_seat_info',$std_work)){
			return $this->db->insert_id();
		}
	}

	public function save_transfer_seat($data){
		$this->db->trans_start();
		$sseat_info['seat_info_studentSeatStatus']=0;
		$this->db->where('sSeatId',$data['sSeatId'])
				 ->update('student_seat_info',$sseat_info);

		$studentid=$data['studentId'];
		$v=0000;
		$v=str_pad($v + $studentid, 4, 0, STR_PAD_LEFT);
		//print_r($data);
		$data['stduntIdNo']=$data['seatNumber'].$v;
		//print_r($data['stduntIdNo']); exit;
		$new_seat_id=$this->manager_model->_set_student_transfer_seat_info($data,$studentid);


		$seat_info['seat_status_info_seatSeatStausId']=1;
		$this->db->where('seatId',$data['transfer_seat_info_seat_id'])
				 ->update('seat_info',$seat_info);
		$seat_info['seat_status_info_seatSeatStausId']=2;
		$this->db->where('seatId',$data['seat_info_seatId'])
				 ->update('seat_info',$seat_info);
				 
		$student_info['stdIdNo']=$data['stduntIdNo'];	 
		$student_info['seat_info_studenCurrentSeatId']=$data['seat_info_seatId'];	 
		$this->db->where('studentId',$studentid)
				 ->update('student_info',$student_info);

		$transfer['transferStudent_info_student_id']=$studentid;
		$transfer['transferFromStdSeatId']=$data['sSeatId'];
		$transfer['transferToStdSeatId']=$new_seat_id;
		$transfer['transferDate']=$this->manager_model->get_current_date_time();;
		$transfer['transferBy']=$this->session->userdata('admin_id');

		$this->db->insert('transfer_info',$transfer);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}


	public function save_vacant_seat_info($data){
		$this->db->trans_start();

		/*$sseat_info['seat_info_studentSeatStatus']=2;
		$this->db->where('sSeatId',$data['sSeatId'])
				 ->update('student_seat_info',$sseat_info);*/
		$std_info['studentStatus']=3;
		$this->db->where('studentId',$data['student_id'])
				 ->update('student_info',$std_info);

		$seat_info['seat_status_info_seatSeatStausId']=1;
		$this->db->where('seatId',$data['seat_info_seat_id'])
				 ->update('seat_info',$seat_info);
		
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	public function get_student_list()
	{
		$data=$this->db 
					->select('student_info.*,student_seat_info.seat_info_seatId,seat_info.seatNumber')
					->from('student_info')
					->join('student_seat_info','student_seat_info.student_info_studentId=student_info.studentId')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->where('student_info.studentStatus',1)
					->where('student_seat_info.seat_info_studentSeatStatus',1)
					->order_by('seat_info_seatId')
					->get();
		if($data)
		{
			return $data->result();
		}

	}

	public function get_all_student_list()
	{
		$data=$this->db 
					->select('*')
					->from('student_info')
					->get();
		if($data)
		{
			return $data->result();
		}

	}

	public function get_all_student_due_list()
	{
		$data=$this->db 
					->select('student_info.*,student_seat_info.seat_info_seatId,seat_info.seatNumber,seat_info.building_info_seatBuildingId,building_info.buildingNumber')
					->from('student_info')
					->join('student_seat_info','student_seat_info.student_info_studentId=student_info.studentId')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->join('building_info','seat_info.building_info_seatBuildingId=building_info.buildingId')
					->where('student_info.studentStatus',1)
					->where('student_seat_info.seat_info_studentSeatStatus',1)
					->where('studentWalletAmount>',0)
					->order_by('seat_info_seatId')
					->get();
		
		if($data)
		{
			return $data->result();
		}

	}
	
	public function get_qualification_info($qualificationType,$id){
		$qualification=$this->db
										->select('*')
										->from('student_qualification')
										->where('qualificationType',$qualificationType)
										->where('student_info_studentId',$id)
										->get();
				if($qualification){
					return $qualification->row();
			}
	}

	public function get_student_details_by_id($id){
		$data=$this->db
					->select('student_info.*,student_admission_type.admissionTypeName,student_seat_info.seat_info_seatId,seat_info.seatNumber,seat_info.seat_type_info_seatSeatTypeId')
					->from('student_info')
				    ->join('student_admission_type','student_admission_type.admissionTypeId=student_info.student_admission_type_admissionTypeId')
				    ->join('student_seat_info','student_seat_info.student_info_studentId=student_info.studentId')
				    ->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
				    ->where('student_seat_info.seat_info_studentSeatStatus',1)
					->where('studentId',$id)
					->get();
			if($data){
				return $data->row();
			}
	}

	public function get_student_sms_info_by_id($id){
		$data=$this->db
					->select('student_info.*,student_seat_info.seat_info_seatId,seat_info.seatNumber,gurdian_info.localGurdianName,gurdian_info.localGurdianContactNo,gurdian_info.localGurdianRelationship')
					->from('student_info')
				    ->join('gurdian_info','gurdian_info.student_info_studentId=student_info.studentId')
				    ->join('student_seat_info','student_seat_info.student_info_studentId=student_info.studentId')
				    ->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
				    ->where('student_seat_info.seat_info_studentSeatStatus',1)
					->where('studentId',$id)
					->get();
			if($data){
				return $data->row();
			}
	}

	public function get_student_transections_by_id($id){

		$data=$this->db ->select('*,transaction_type_info.transactionTypeTitle,transaction_type_info.transactionTypeLink')
						->from('transaction_info')
						->join('transaction_type_info','transaction_type_info.transactionTypeId=transaction_info.TransactionTypeId')
						->where('transactionRefferenceId', $id)
				 		->order_by('transactionDate','DESC')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	public function get_student_seat_details_by_std_id($id){
		$data=$this->db
						->select('student_seat_info.*,seat_info.zone_info_zoneID,seat_info.seatNumber,zone_info.zoneTitle,seat_info.building_info_seatBuildingId,building_info.buildingNumber,seat_info.floor_info_seatFloorId,floor_info.floorNumber,seat_info.unit_info_seatUnitId,unit_info.unitNumber,seat_info.room_info_seatRoomId,room_info.roomNumber')
						->from('student_seat_info')
						->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
						->join('zone_info','zone_info.zoneID=seat_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=seat_info.building_info_seatBuildingId')
						->join('floor_info','floor_info.floorId=seat_info.floor_info_seatFloorId')
						->join('unit_info','unit_info.unitId=seat_info.unit_info_seatUnitId')
						->join('room_info','room_info.roomId=seat_info.room_info_seatRoomId')
						->where('student_info_studentId',$id)
						->where('seat_info_studentSeatStatus',1)
						->get();
			if($data->num_rows()==1){
				return $data->row();
			}
	}
	public function get_student_work_details_by_std_id($id){
		$data=$this->db
						->select('*')
						->from('student_working_info')
						->where('student_info_studentId',$id)
						->get();
			if($data->num_rows()>0){
				return $data->row();
			}
	}
	public function get_student_image_details_by_std_id($id){
		$data=$this->db
						->select('*')
						->from('student_image_info')
						->where('student_info_studentId',$id)
						->get();
			if($data->num_rows()>0){
				return $data->result();
			}
	}
	public function get_student_gurdian_details_by_std_id($id){
		$data=$this->db
					->select('*')
					->from('gurdian_info')
					->where('student_info_studentId',$id)
					->get();
			if($data->num_rows()==1){
				return $data->row();
			}
	}
	public function get_student_course_details_by_std_id($id){
		$data=$this->db
					->select('*')
					->from('student_other_courses')
					->where('student_info_studentId',$id)
					->get();
			if($data->num_rows()==1){
				return $data->row();
			}
	}
	/*Add Students End*/

	/*Update Student Info Start*/
	public function get_student_image_by_id($id){
    	$data=$this->db
    					->select('student_info.stdImage,student_info.stdIdCard,student_info.parentsImage,student_info.parentsIdCard')
    					->from('student_info')
    					->where('studentId',$id)
    					->get();
    		if($data){
    			return $data->row();
    		}
    }
    
	public function update_student_info($data,$id){
		unset($data['studentId']);
		$data=$this->db
		  			->where('studentId',$id)
		   			->update('student_info',$data);
		 return  $data;
	}

	public function update_student_gurdian_info($data,$id){
        return $this->db
                      ->where('gurdianId',$id)
                      ->update('gurdian_info',$data);
    }

	public function update_student_qualification_info($data,$id){
		unset($data['sQId']);
		$data=$this->db
	  				->where('sQId',$id)
	   				->update('student_qualification',$data);
		 return  $data;
	}
	
	public function update_student_course_info($data,$id){
        return $this->db
                      ->where('coursesId',$id)
                      ->update('student_other_courses',$data);
    }
    
	public function update_student_seat_info($data,$id){
		$data['studentExpireDate']=date('Y-m-d', strtotime($data['studentExpireDate']));
		return $this->db
	  				->where('sSeatId',$id)
	   				->update('student_seat_info',$data);
	}
	
	public function update_student_work_info($data,$id){
		return $this->db
	  				->where('sWId',$id)
	   				->update('student_working_info',$data);
	}
	
	public function update_student_image_info($data,$id){
		return $this->db
	  				->where('sImgId',$id)
	   				->update('student_image_info',$data);
	}
	/*Update Student Info End*/

	/*All Bills Start*/
	/*public function get_all_bills($infos)
	{
		$data=$this->db 
						->select('*,zone_info.zoneTitle')
						->from('monthly_billing_info')
						->join('zone_info','zone_info.zoneID=monthly_billing_info.zone_info_billZoneId')
						->where('monthlyBillingMonth>=', $infos['firstDate'])
						->where('monthlyBillingMonth<=', $infos['lastDate'])
						->where('monthlyBillingInfoStatus','1')
						->get();
		if($data)
		{
			return $data->result();
		}

	}*/

	public function get_all_bills()
	{
		$data=$this->db
					->select('monthly_billng_details.*,student_info.studentName,student_info.stdIdNo,student_info.studentContactNo,student_seat_info.seat_info_seatId,seat_info.seatNumber,monthly_billing_info.monthlyBillingMonth')
					->from('monthly_billng_details')
					->join('student_info','monthly_billng_details.student_info_billStudentId=student_info.studentId')
					->join('student_seat_info','monthly_billng_details.student_info_billStudentId=student_seat_info.student_info_studentId')
					->join('seat_info','student_seat_info.seat_info_seatId=seat_info.seatId')
					->join('monthly_billing_info','monthly_billng_details.monthly_billing_info_billId=monthly_billing_info.monthlyBillingInfoId')
					->order_by('monthlyBillingMonth','desc')
					->get();
			if($data){
				return $data->result();
			}

	}

	public function get_generate_bill_details_by_id($id){
		$data=$this->db
					->select('monthly_billng_details.*,student_info.studentName,student_info.stdIdNo')
					->from('monthly_billng_details')
					->join('student_info','monthly_billng_details.student_info_billStudentId=student_info.studentId')
					->where('monthly_billing_info_billId',$id)
					->get();
			if($data){
				return $data->result();
			}
	}

	public function get_bill_print_bill_info($bill_id){
		$data=$this->db 
					->select('*')
					->from('monthly_billng_details')
					->join('monthly_billing_info','monthly_billing_info.monthlyBillingInfoId=monthly_billng_details.monthly_billing_info_billId')
					->where('monthlyBillngDetailsId', $bill_id)
					->get();
		if($data)
		{
			return $data->row();
		}
	}
	public function get_bill_print_seat_info($seat_id){
		/*$data=$this->db 
					->select('student_seat_info.*,seat_info.building_info_seatBuildingId,seat_info.room_info_seatRoomId,student_info.studentName,student_info.stdIdNo,building_info.buildingNumber,room_info.roomNumber')
					->from('student_seat_info')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->join('student_info','student_info.studentId=student_seat_info.student_info_studentId')
					->join('building_info','building_info.buildingId=seat_info.building_info_seatBuildingId')
					->join('room_info','room_info.roomId=seat_info.room_info_seatRoomId')
					->where('sSeatId', $seat_id)
					->get();*/
		$data=$this->db 
					->select('student_seat_info.*,seat_info.building_info_seatBuildingId,seat_info.room_info_seatRoomId,student_info.studentName,student_info.stdIdNo,building_info.buildingNumber,room_info.roomNumber')
					->from('student_seat_info')
					->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
					->join('student_info','student_info.studentId=student_seat_info.student_info_studentId')
					->join('building_info','building_info.buildingId=seat_info.building_info_seatBuildingId')
					->join('room_info','room_info.roomId=seat_info.room_info_seatRoomId')
					->where('seat_info.seatId', $seat_id)
					->get();
		if($data)
		{
			return $data->row();
		}
	}
	/*All Bills End*/

	/*Generate Bills Start*/
	public function get_all_generate_bills()
	{
		$data=$this->db 
						->select('*,zone_info.zoneTitle')
						->from('monthly_billing_info')
						->join('zone_info','zone_info.zoneID=monthly_billing_info.zone_info_billZoneId')
						->order_by('monthlyBillingMonth','desc')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	/*Generate Bills End*/

	/*Receive Payment Start*/
	public function get_paymentId_paymentType(){
		$data=$this->db
						->select('payment_type_info.paymentTypeInfoId, payment_type_info.paymentTypeTitle')
						->from('payment_type_info')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_studentId_studentName(){
		$data=$this->db
						->select('student_info.studentId, student_info.stdIdNo,student_info.studentName')
						->from('student_info')
						->where('studentStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_all_studentId_studentName(){
		$data=$this->db
						->select('student_info.studentId, student_info.stdIdNo,student_info.studentName')
						->from('student_info')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_receive_payment($data){
		$this->db->trans_start();
		$data['receivedPaymentDate']=$this->manager_model->get_current_date_time();
		$data['receivedPaymentAddedBy']=$this->session->userdata('admin_id');

				if ($data['payment_type_info_paymentTypeId']=='2') {
					$this->db
					->where('studentId',$data['student_info_paymentStudentId'])
					->set('studentWalletAmount', 'studentWalletAmount-' .$data['receivedPaymentAmount'], FALSE)
					->update('student_info');
				}
				elseif ($data['payment_type_info_paymentTypeId']=='1') {
					$this->db
					->where('student_info_studentId',$data['student_info_paymentStudentId'])
					->set('admissionFee', 'admissionFee+' .$data['receivedPaymentAmount'], FALSE)
					->where('seat_info_studentSeatStatus>',0)
					->update('student_seat_info');
				}
				else {
					$this->db
					->where('student_info_studentId',$data['student_info_paymentStudentId'])
					->set('securityMoney', 'securityMoney+' .$data['receivedPaymentAmount'], FALSE)
					->where('seat_info_studentSeatStatus>',0)
					->update('student_seat_info');
				}
				
		$payment= $this->db->insert('received_payment_info', $data);
		$paymentid=$this->db->insert_id();

		$transaction['transactionDate']=$this->manager_model->get_current_date_time();
		$transaction['transactionAddedBy']=$this->session->userdata('admin_id');
		$transaction['TransactionTypeId']=$data['payment_type_info_paymentTypeId'];
		$transaction['transactionRefferenceId']=$paymentid;
		$transaction['transactionAmount']=$data['receivedPaymentAmount'];
		$transaction['transactionDetails']=$data['receivedPaymentNote'];
	    $this->db->insert('transaction_info',$transaction);
	    $this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function get_receive_payment_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,payment_type_info.paymentTypeTitle,student_info.stdIdNo,student_info.studentName')
						->from('received_payment_info')
						->join('zone_info','zone_info.zoneID=received_payment_info.zone_info_paymentZoneId')
						->join('payment_type_info','payment_type_info.paymentTypeInfoId=received_payment_info.payment_type_info_paymentTypeId')
						->join('student_info','student_info.studentId=received_payment_info.student_info_paymentStudentId')
						->where('receivedPaymentInfoId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	/*Receive Payment End*/

	/*Add Expense Start*/
	public function get_fieldId_fieldTitle(){
		$data=$this->db
						->select('expense_field_info.fieldId, expense_field_info.fieldTitle')
						->from('expense_field_info')
						->where('fieldStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_expense($data){
		$data['expenseAddedDate']=$this->manager_model->get_current_date_time();
		$data['expenseAddedBy']=$this->session->userdata('admin_id');
		$expense=$this->db->insert('expense_info', $data);
		$expenseid=$this->db->insert_id();

		$transaction['transactionDate']=$this->manager_model->get_current_date_time();
		$transaction['transactionAddedBy']=$this->session->userdata('admin_id');
		$transaction['TransactionTypeId']='5';
		$transaction['transactionRefferenceId']=$expenseid;
		$transaction['transactionAmount']=$data['expenseAmount'];
		$transaction['transactionDetails']=$data['expenseNote'];
		return $this->db->insert('transaction_info',$transaction);
	}
	public function get_all_expense()
	{
		$data=$this->db 
						->select('*,expense_field_info.fieldTitle,zone_info.zoneTitle')
						->from('expense_info')
						->join('expense_field_info','expense_field_info.fieldId=expense_info.expense_field_info_fieldId')
						->join('zone_info','zone_info.zoneID=expense_info.zone_info_expenseZoneId')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	public function get_expense_details_by_id($id){
		$data=$this->db
						->select('*,expense_field_info.fieldTitle,zone_info.zoneTitle')
						->from('expense_info')
						->join('expense_field_info','expense_field_info.fieldId=expense_info.expense_field_info_fieldId')
						->join('zone_info','zone_info.zoneID=expense_info.zone_info_expenseZoneId')
						->where('expenseId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	/*Add Expense End*/

	/*Add Return Start*/
	public function get_returnPaymentId_returnPaymentType(){
		$data=$this->db
						->select('return_payment_type_info.returnPaymentTypeInfoId, return_payment_type_info.returnPaymentTypeTitle')
						->from('return_payment_type_info')
						->get();
		if($data){
			return $data->result();
		}
	}

	public function insert_return_payment($data){
		$this->db->trans_start();
		$data['returnPaymentDate']=$this->manager_model->get_current_date_time();
		$data['returnPaymentAddedBy']=$this->session->userdata('admin_id');

		if ($data['return_payment_type_info_returnPaymentTypeId']=='7') {
					$this->db
					->where('studentId',$data['student_info_returnPaymentStudentId'])
					->set('studentWalletAmount', 'studentWalletAmount+' .$data['returnPaymentAmount'], FALSE)
					->update('student_info');
				}
				elseif ($data['return_payment_type_info_returnPaymentTypeId']=='6') {
					$this->db
					->where('student_info_studentId',$data['student_info_returnPaymentStudentId'])
					->set('admissionFee', 'admissionFee-' .$data['returnPaymentAmount'], FALSE)
					->where('seat_info_studentSeatStatus>',0)
					->update('student_seat_info');
				}
				else {
					$this->db
					->where('student_info_studentId',$data['student_info_returnPaymentStudentId'])
					->set('securityMoney', 'securityMoney-' .$data['returnPaymentAmount'], FALSE)
					->where('seat_info_studentSeatStatus>',0)
					->update('student_seat_info');
				}

		$returnPayment= $this->db->insert('return_payment_info', $data);
		$returnPaymentid=$this->db->insert_id();

		$transaction['transactionDate']=$this->manager_model->get_current_date_time();
		$transaction['transactionAddedBy']=$this->session->userdata('admin_id');
		$transaction['TransactionTypeId']=$data['return_payment_type_info_returnPaymentTypeId'];
		$transaction['transactionRefferenceId']=$returnPaymentid;
		$transaction['transactionAmount']=$data['returnPaymentAmount'];
		$transaction['transactionDetails']=$data['returnPaymentNote'];
	    $this->db->insert('transaction_info',$transaction);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function get_return_payment_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,return_payment_type_info.returnPaymentTypeTitle,student_info.stdIdNo,student_info.studentName')
						->from('return_payment_info')
						->join('zone_info','zone_info.zoneID=return_payment_info.zone_info_returnPaymentZoneId')
						->join('return_payment_type_info','return_payment_type_info.returnPaymentTypeInfoId=return_payment_info.return_payment_type_info_returnPaymentTypeId')
						->join('student_info','student_info.studentId=return_payment_info.student_info_returnPaymentStudentId')
						->where('returnPaymentInfoId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	/*Add Return End*/

	/*Transaction Start*/
	public function get_all_transaction($infos)
	{
		$this->db 
					->select('*,transaction_type_info.transactionTypeTitle,transaction_type_info.transactionTypeLink')
					->from('transaction_info')
					->join('transaction_type_info','transaction_type_info.transactionTypeId=transaction_info.TransactionTypeId')
					->where('transactionDate>=', $infos['firstDate'])
					->where('transactionDate<=', $infos['lastDate']);
		if($infos['transectionType']>0 && $infos['transectionType']==4 )
			$this->db->where('transaction_info.TransactionTypeId<=',$infos['transectionType']);	
		else if($infos['transectionType']>0 && $infos['transectionType']==5 )
			$this->db->where('transaction_info.TransactionTypeId',$infos['transectionType']);
		else if($infos['transectionType']>0 && $infos['transectionType']==6 )
			$this->db->where('transaction_info.TransactionTypeId>=',$infos['transectionType']);				
		$data=$this->db->order_by('transactionDate','DESC')
				 ->get();
		if($data)
		{
			return $data->result();
		}

	}
	/*Transaction End*/

	/*Income Expense Report Start*/
	public function get_total_income($infos)
	{
		$data=$this->db
						->select('*,payment_type_info.paymentTypeTitle')
						->from('received_payment_info')
						->join('payment_type_info','payment_type_info.paymentTypeInfoId=received_payment_info.payment_type_info_paymentTypeId')
						->select_sum('receivedPaymentAmount')
						->where('receivedPaymentDate>=', $infos['firstDate'])
						->where('receivedPaymentDate<=', $infos['lastDate'])
						->group_by('paymentTypeInfoId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function get_total_expense($infos)
	{
		$data=$this->db
						->select('*,expense_field_info.fieldTitle')
						->from('expense_info')
						->join('expense_field_info','expense_field_info.fieldId=expense_info.expense_field_info_fieldId')
						->select_sum('expenseAmount')
						->where('expenseAddedDate>=', $infos['firstDate'])
						->where('expenseAddedDate<=', $infos['lastDate'])
						->group_by('expense_field_info_fieldId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	/*Income Expense Report End*/

	/*Building Start*/
	public function insert_building($data)
	{
		$data['buildingAddedDate']=$this->manager_model->get_current_date_time();
		$data['buildingAddedBy']=$this->session->userdata('admin_id');
		return $this->db->insert('building_info',$data);
	}
	public function get_all_building()
	{
		$data=$this->db
						->select('*,zone_info.zoneTitle')
						->from('building_info')
						->join('zone_info','zone_info.zoneID=building_info.zone_info_zoneID')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function get_building_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle')
						->from('building_info')
						->join('zone_info','zone_info.zoneID=building_info.zone_info_zoneID')
						->where('buildingId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function get_all_floor_in_building($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber')
						->from('floor_info')
						->join('zone_info','zone_info.zoneID=floor_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=floor_info.building_info_floorBuildingId')
						->where('buildingId',$id)
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function update_building_info($data,$id){
		$this->db->trans_start(); 
		//print_r($data);exit;
		$oldZone=$data['oldZone'];
		$oldStatus=$data['oldStatus'];
		unset($data['buildingId'],$data['oldZone'],$data['oldStatus']);
		$query=$this->db
		  			->where('buildingId',$id)
		   			->update('building_info',$data);
		if($query){
			if($oldZone!=$data['zone_info_zoneID']){
				//for floor update
				$info['field']="zone_info_zoneID";
				$info['fieldValue']=$data['zone_info_zoneID'];
				$info['id']=$id;

				$info['index']="building_info_floorBuildingId";
				$info['table']="floor_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for unit update
				$info['index']="building_info_unitBuildingId";
				$info['table']="unit_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for room update
				$info['index']="building_info_roomBuildingId";
				$info['table']="room_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="building_info_seatBuildingId";
				$info['table']="seat_info";
				$this->manager_model->updateBulidingChildInfo($info);
				
			}
			if($oldStatus!=$data['buildingStatus']){
				//for floor update
				$info['fieldValue']=$data['buildingStatus'];
				$info['id']=$id;

				$info['index']="building_info_floorBuildingId";
				$info['table']="floor_info";
				$info['field']="floorStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for unit update
				$info['index']="building_info_unitBuildingId";
				$info['table']="unit_info";
				$info['field']="unitStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for room update
				$info['index']="building_info_roomBuildingId";
				$info['table']="room_info";
				$info['field']="roomStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="building_info_seatBuildingId";
				$info['table']="seat_info";
				$info['field']="seatStatus";
				$this->manager_model->updateBulidingChildInfo($info);
			}
		}

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	private function updateBulidingChildInfo($info){
		//print_r($info['fieldValue']);exit;
		$q=$this->db
				->where($info['index'],$info['id'])
				->set($info['field'],$info['fieldValue'], FALSE)
				->update($info['table']);
	}
	/*Building End*/

	/*Floor Start*/
	public function get_buildingId_buildingNo(){
		$data=$this->db
						->select('building_info.buildingId, building_info.buildingNumber')
						->from('building_info')
						->where('buildingStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_buildingId_buildingNo_by_zoneID($zoneId){
		$data=$this->db
						->select('buildingId,buildingNumber')
						->from('building_info')
						->where('zone_info_zoneID',$zoneId)
						->where('buildingStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_floor($data)
	{	
		//print_r($data);
		//echo "<br>";
		
		$n=$data['floorNumberID']; 
		$floorNumber['buildingTotalFloorNumber']=$n;
		$floor['zone_info_zoneID']=$data['zone_info_zoneID'];
		$floor['building_info_floorBuildingId']=$data['building_info_floorBuildingId'];
		$floor['floorAddedDate']=$this->manager_model->get_current_date_time();
		$floor['floorAddedBy']=$this->session->userdata('admin_id');
		
		//unset ($data['floorNumberID']);
		for($i=0; $i<$n; $i++){
			$floor['floorNumber']=$data['floorNumber'.$i];
			$floor['floorNote']=$data['floorNote'.$i];
			//print_r($floor);
		//exit();
		 $this->db->insert('floor_info', $floor );
		
		}
		//exit();

		return $this->db
					->where('buildingId',$data['building_info_floorBuildingId'])
					->update('building_info',$floorNumber);
					
		// $data;
		/*print_r($data);
		exit();*/
	}
	public function get_all_floor(){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber')
						->from('floor_info')
						->join('zone_info','zone_info.zoneID=floor_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=floor_info.building_info_floorBuildingId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function get_floor_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber')
						->from('floor_info')
						->join('zone_info','zone_info.zoneID=floor_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=floor_info.building_info_floorBuildingId')
						->where('floorId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function isMatch($value1, $value2){
			if($value1!=$value2)
				return true;
			else return false;
	}
	public function update_floor_info($data,$id){
		$this->db->trans_start(); 
		$oldZone=$data['oldZone'];
		$oldBuilding=$data['oldBuilding'];
		$oldStatus=$data['oldStatus'];
		unset($data['floorId'],$data['oldZone'],$data['oldBuilding'],$data['oldStatus']);
		$query=$this->db
	  				->where('floorId',$id)
	   				->update('floor_info',$data);
		if($query){
			if($this->manager_model->isMatch($oldZone, $$data['zone_info_zoneID']) ){

				$info['field']="zone_info_zoneID";
				$info['fieldValue']=$data['zone_info_zoneID'];
				$info['id']=$id;

				//for unit update
				$info['index']="floor_info_unitFloorId";
				$info['table']="unit_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for room update
				$info['index']="floor_info_roomFloorId";
				$info['table']="room_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="floor_info_seatFloorId";
				$info['table']="seat_info";
				$this->manager_model->updateBulidingChildInfo($info);
				
			}
			if($this->manager_model->isMatch($oldStatus,$data['floorStatus'])){
				
				$info['fieldValue']=$data['floorStatus'];
				$info['id']=$id;

				//for unit update
				$info['index']="floor_info_unitFloorId";
				$info['table']="unit_info";
				$info['field']="unitStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for room update
				$info['index']="floor_info_roomFloorId";
				$info['table']="room_info";
				$info['field']="roomStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="floor_info_seatFloorId";
				$info['table']="seat_info";
				$info['field']="seatStatus";
				$this->manager_model->updateBulidingChildInfo($info);
			}
			if($this->manager_model->isMatch($oldBuilding,$data['building_info_floorBuildingId'])){
				
				$info['fieldValue']=$data['building_info_floorBuildingId'];
				$info['id']=$id;

				//for unit update
				$info['index']="floor_info_unitFloorId";
				$info['table']="unit_info";
				$info['field']="building_info_unitBuildingId";
				$this->manager_model->updateBulidingChildInfo($info);

				//for room update
				$info['index']="floor_info_roomFloorId";
				$info['table']="room_info";
				$info['field']="building_info_roomBuildingId";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="floor_info_seatFloorId";
				$info['table']="seat_info";
				$info['field']="building_info_seatBuildingId";
				$this->manager_model->updateBulidingChildInfo($info);
			}
		}

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function get_all_unit_in_floor($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber')
						->from('unit_info')
						->join('zone_info','zone_info.zoneID=unit_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=unit_info.building_info_unitBuildingId')
						->join('floor_info','floor_info.floorId=unit_info.floor_info_unitFloorId')
						->where('floorId',$id)
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	/*Floor End*/

	/*Unit Start*/
	public function get_floorId_floorNo(){
		$data=$this->db
						->select('floor_info.floorId, floor_info.floorNumber')
						->from('floor_info')
						->where('floorStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_floorId_floorNo_by_building_id($id){
		$data=$this->db
						->select('floor_info.floorId, floor_info.floorNumber')
						->from('floor_info')
						->where('building_info_floorBuildingId',$id)
						->where('floorStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_unit($data){
		$n=$data['unitNumberID'];
		$unitNumber['floorTotalNumberUnit']=$n;
		$unit['zone_info_zoneID']=$data['zone_info_zoneID'];
		$unit['building_info_unitBuildingId']=$data['building_info_unitBuildingId'];
		$unit['floor_info_unitFloorId']=$data['floor_info_unitFloorId'];
		$unit['unitAddedDate']=$this->manager_model->get_current_date_time();
		$unit['uniAddedBy']=$this->session->userdata('admin_id');
		
		for($i=0;$i<$n;$i++){
			$unit['unitNumber']=$data['unitNumber'.$i];
			$unit['unitNote']=$data['unitNote'.$i];
			$this->db->insert('unit_info',$unit);
		}
		return $this->db
					->where('floorId',$data['floor_info_unitFloorId'])
					->update('floor_info',$unitNumber);
	}

	public function get_all_units(){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber')
						->from('unit_info')
						->join('zone_info','zone_info.zoneID=unit_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=unit_info.building_info_unitBuildingId')
						->join('floor_info','floor_info.floorId=unit_info.floor_info_unitFloorId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}

	public function get_unit_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber')
						->from('unit_info')
						->join('zone_info','zone_info.zoneID=unit_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=unit_info.building_info_unitBuildingId')
						->join('floor_info','floor_info.floorId=unit_info.floor_info_unitFloorId')
						->where('unitId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function update_unit_info($data,$id){
		$this->db->trans_start(); 
		$oldZone=$data['oldZone'];
		$oldBuilding=$data['oldBuilding'];
		$oldFloor=$data['oldFloor'];
		$oldStatus=$data['oldStatus'];
		unset($data['unitId'],$data['oldFloor'],$data['oldZone'],$data['oldBuilding'],$data['oldStatus']);
		$query=$this->db
	  				->where('unitId',$id)
		   			->update('unit_info',$data);
		if($query){
			if($this->manager_model->isMatch($oldZone, $$data['zone_info_zoneID']) ){

				$info['field']="zone_info_zoneID";
				$info['fieldValue']=$data['zone_info_zoneID'];
				$info['id']=$id;
				
				//for room update
				$info['index']="unit_info_roomUnitId";
				$info['table']="room_info";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="unit_info_seatUnitId";
				$info['table']="seat_info";
				$this->manager_model->updateBulidingChildInfo($info);
				
			}
			if($this->manager_model->isMatch($oldStatus,$data['unitStatus'])){
				
				$info['fieldValue']=$data['unitStatus'];
				$info['id']=$id;
				
				//for room update
				$info['index']="unit_info_roomUnitId";
				$info['table']="room_info";
				$info['field']="roomStatus";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="unit_info_seatUnitId";
				$info['table']="seat_info";
				$info['field']="seatStatus";
				$this->manager_model->updateBulidingChildInfo($info);
			}
			if($this->manager_model->isMatch($oldBuilding,$data['building_info_unitBuildingId'])){
				
				$info['fieldValue']=$data['building_info_unitBuildingId'];
				$info['id']=$id;

				//for room update
				$info['index']="unit_info_roomUnitId";
				$info['table']="room_info";
				$info['field']="building_info_roomBuildingId";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="unit_info_seatUnitId";
				$info['table']="seat_info";
				$info['field']="building_info_seatBuildingId";
				$this->manager_model->updateBulidingChildInfo($info);
			}
			if($this->manager_model->isMatch($oldFloor,$data['floor_info_unitFloorId'])){
				
				$info['fieldValue']=$data['floor_info_unitFloorId'];
				$info['id']=$id;

				//for room update
				$info['index']="unit_info_roomUnitId";
				$info['table']="room_info";
				$info['field']="floor_info_roomFloorId";
				$this->manager_model->updateBulidingChildInfo($info);

				//for seat update
				$info['index']="unit_info_seatUnitId";
				$info['table']="seat_info";
				$info['field']="floor_info_seatFloorId";
				$this->manager_model->updateBulidingChildInfo($info);
			}
		}

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	/*Unit End*/

	/*Room Start*/
	public function get_unitId_unitNo(){
		$data=$this->db
						->select('unit_info.unitId, unit_info.unitNumber')
						->from('unit_info')
						->where('unitStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_unitId_unitNo_by_floor_id($id){
		$data=$this->db
						->select('unit_info.unitId, unit_info.unitNumber')
						->from('unit_info')
						->where('floor_info_unitFloorId',$id)
						->where('unitStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_room($data)
	{
		//print_r($data);//exit;
		$data['roomAddedDate']=$this->manager_model->get_current_date_time();
		$data['roomAddedBy']=$this->session->userdata('admin_id');
		if($this->db->insert('room_info',$data)){
			$num=1;
			return $this->db->where('unitId',$data['unit_info_roomUnitId'])
					 ->set('unitTotalNumberRoom','unitTotalNumberRoom +'.$num,FALSE)
					 ->update('unit_info');
		}
	}
	public function get_all_room(){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber,unit_info.unitNumber')
						->from('room_info')
						->join('zone_info','zone_info.zoneID=room_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=room_info.building_info_roomBuildingId')
						->join('floor_info','floor_info.floorId=room_info.floor_info_roomFloorId')
						->join('unit_info','unit_info.unitId=room_info.unit_info_roomUnitId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function get_room_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber,unit_info.unitNumber')
						->from('room_info')
						->join('zone_info','zone_info.zoneID=room_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=room_info.building_info_roomBuildingId')
						->join('floor_info','floor_info.floorId=room_info.floor_info_roomFloorId')
						->join('unit_info','unit_info.unitId=room_info.unit_info_roomUnitId')
						->where('roomId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function update_room_info($data,$id){

		$this->db->trans_start(); 
		$oldZone=$data['oldZone'];
		$oldBuilding=$data['oldBuilding'];
		$oldFloor=$data['oldFloor'];
		$oldUnit=$data['oldUnit'];
		$oldStatus=$data['oldStatus'];
		unset($data['roomId'],$data['oldUnit'],$data['oldFloor'],$data['oldZone'],$data['oldBuilding'],$data['oldStatus']);
		$query=$this->db
	  				->where('roomId',$id)
		   			->update('room_info',$data);
		if($query){
			if($this->manager_model->isMatch($oldZone, $$data['zone_info_zoneID']) ){

				$this->db->where('room_info_seatRoomId',$id)
				->set('zone_info_zoneID',$data['zone_info_zoneID'],FALSE)
				->update('seat_info');
				
			}
			if($this->manager_model->isMatch($oldStatus,$data['roomStatus'])){
				
				$this->db->where('room_info_seatRoomId',$id)
				->set('seatStatus',$data['roomStatus'],FALSE)
				->update('seat_info');

			}
			if($this->manager_model->isMatch($oldBuilding,$data['building_info_roomBuildingId'])){
				
				
				$this->db->where('room_info_seatRoomId',$id)
				->set('building_info_seatBuildingId',$data['building_info_roomBuildingId'],FALSE)
				->update('seat_info');
			}
			if($this->manager_model->isMatch($oldFloor,$data['floor_info_roomFloorId'])){
				
				$this->db->where('room_info_seatRoomId',$id)
				->set('floor_info_seatFloorId',$data['floor_info_roomFloorId'],FALSE)
				->update('seat_info');
			}
			if($this->manager_model->isMatch($oldUnit,$data['unit_info_roomUnitId'])){

				$this->db->where('room_info_seatRoomId',$id)
				->set('unit_info_seatUnitId',$data['unit_info_roomUnitId'],FALSE)
				->update('seat_info');
			}
				
		}

		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	/*Room End*/

	/*Seat Start*/
	public function get_roomId_roomNo(){
		$data=$this->db
						->select('room_info.roomId, room_info.roomNumber')
						->from('room_info')
						->where('roomStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_roomId_roomNo_by_unit_id($id){
		$data=$this->db
						->select('room_info.roomId, room_info.roomNumber')
						->from('room_info')
						->where('unit_info_roomUnitId','1')
						->where('roomStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_seatTypeId_seatTypeName_rent(){
		$data=$this->db
						->select('seat_type_info.seatTypeId, seat_type_info.seatTypeName, seat_type_info.seatRentAmount')
						->from('seat_type_info')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function get_seatStausId_seatStatusStatus(){
		$data=$this->db
						->select('seat_status_info.seatStausId, seat_status_info.seatStatusTitle')
						->from('seat_status_info')
						->get();
		if($data){
			return $data->result();
		}
	}
	public function insert_seat($data)
	{
		$data['seatAddedDate']=$this->manager_model->get_current_date_time();
		$data['seatAddedBy']=$this->session->userdata('admin_id');
		if($this->db->insert('seat_info',$data)){
			$num=1;
			return $this->db->where('roomId',$data['room_info_seatRoomId'])
					 ->set('roomTotalSeatNumber','roomTotalSeatNumber +'.$num,FALSE)
					 ->update('room_info');
		}
	}
	public function get_all_seat(){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber,unit_info.unitNumber,room_info.roomNumber,seat_type_info.seatTypeName,seat_status_info.seatStatusTitle')
						->from('seat_info')
						->join('zone_info','zone_info.zoneID=seat_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=seat_info.building_info_seatBuildingId')
						->join('floor_info','floor_info.floorId=seat_info.floor_info_seatFloorId')
						->join('unit_info','unit_info.unitId=seat_info.unit_info_seatUnitId')
						->join('room_info','room_info.roomId=seat_info.room_info_seatRoomId')
						->join('seat_type_info','seat_type_info.seatTypeId=seat_info.seat_type_info_seatSeatTypeId')
						->join('seat_status_info','seat_status_info.seatStausId=seat_info.seat_status_info_seatSeatStausId')
						->get();
		if($data)
		{
			return $data->result();
		}
	}
	public function get_seat_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle,building_info.buildingNumber,floor_info.floorNumber,unit_info.unitNumber,room_info.roomNumber,seat_type_info.seatTypeName,seat_status_info.seatStatusTitle')
						->from('seat_info')
						->join('zone_info','zone_info.zoneID=seat_info.zone_info_zoneID')
						->join('building_info','building_info.buildingId=seat_info.building_info_seatBuildingId')
						->join('floor_info','floor_info.floorId=seat_info.floor_info_seatFloorId')
						->join('unit_info','unit_info.unitId=seat_info.unit_info_seatUnitId')
						->join('room_info','room_info.roomId=seat_info.room_info_seatRoomId')
						->join('seat_type_info','seat_type_info.seatTypeId=seat_info.seat_type_info_seatSeatTypeId')
						->join('seat_status_info','seat_status_info.seatStausId=seat_info.seat_status_info_seatSeatStausId')
						->where('seatId',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function update_seat_info($data,$id){
		unset($data['seatId']);
		if($this->db->where('seatId',$id)->update('seat_info',$data)){
			$info['monthelyRent']=$data['seat_type_info_seatRentAmount'];
			return $this->db->where('seat_info_seatId',$id)
							->where('seat_info_studentSeatStatus',1)
							->update('student_seat_info',$info);
		}
		
	}

	/*Seat End*/

	/*Seat Type Start*/
	public function insert_seat_type($data)
	{
		$data['seatRentAmount'] = $data['rentAmount']+$data['profit'];
		return $this->db->insert('seat_type_info', $data );
	}
	public function get_all_seat_type()
	{
		$data=$this->db 
						->select('*')
						->from('seat_type_info')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	public function get_seat_type_details_by_Id($id)
	{
		$data=$this->db 
						->select('*')
						->from('seat_type_info')
						->where('seatTypeId',$id)
						->get();
		if($data)
		{
			return $data->row();
		}

	}
	public function update_seat_type($data,$id)
	{
		unset($data['seatTypeId']);
		$data['seatRentAmount'] = $data['rentAmount']+$data['profit'];
		$data=$this->db
		  				->where('seatTypeId',$id)
		   				->update('seat_type_info',$data);
		 return  $data;
	}
	/*Seat Type End*/

	/* Seat Expire Date Start */
	public function get_all_seat_expire_date($infos)
	{
		$data=$this->db
						->select('student_seat_info.*,seat_info.seatNumber,student_info.stdIdNo,student_info.studentName')
						->from('student_seat_info')
						->join('student_info','student_info.studentId=student_seat_info.student_info_studentId')
						->join('seat_info','seat_info.seatId=student_seat_info.seat_info_seatId')
						->where('student_seat_info.studentExpireDate>=', $infos['firstDate'])
						->where('student_seat_info.studentExpireDate<=', $infos['lastDate'])
						->where('seat_info.seatStatus',1)
						->order_by('seatNumber')
						->get();
		if($data)
		{
			return $data->result();
		}
	}

	/* Seat Expire Date End */
	
	/*Add Expense Field Start*/
	public function insert_expense_field($data)
	{
		return $this->db->insert('expense_field_info', $data );
	}
	public function get_all_expense_field()
	{
		$data=$this->db 
						->select('*')
						->from('expense_field_info')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	public function get_expense_field_details_by_Id($id)
	{
		$data=$this->db 
						->select('*')
						->from('expense_field_info')
						->where('fieldId',$id)
						->get();
		if($data)
		{
			return $data->row();
		}

	}
	public function update_expense_field_info($data,$id)
	{
		unset($data['fieldId']);
		$data=$this->db
		  				->where('fieldId',$id)
		   				->update('expense_field_info',$data);
		 return  $data;
	}
	/*Add Expense Field End*/

	/* Zone Start*/
	public function insert_zone($data)
	{
		return $this->db->insert('zone_info', $data );
	}
	public function get_all_zone()
	{
		$data=$this->db 
						->select('*')
						->from('zone_info')
						->get();
		if($data)
		{
			return $data->result();
		}

	}
	public function get_zone_details_by_Id($id)
	{
		$data=$this->db 
						->select('*')
						->from('zone_info')
						->where('zoneID',$id)
						->get();
		if($data)
		{
			return $data->row();
		}

	}

	public function update_zone_info($data,$id)
	{
		unset($data['zoneID']);
		$data=$this->db
		  				->where('zoneID',$id)
		   				->update('zone_info',$data);
		 return  $data;
	}
	/*Zone End*/

	/*Admin Start*/
	public function insert_admin($data){
		return $this->db->insert('admin_info', $data);
	}

	public function get_zoneID_zoneName(){
		$data=$this->db
						->select('zone_info.zoneID, zone_info.zoneTitle')
						->from('zone_info')
						->where('zoneStatus','1')
						->get();
		if($data){
			return $data->result();
		}
	}

	public function get_all_member(){
		$data=$this->db
						->select('*,zone_info.zoneTitle')
						->from('admin_info')
						->join('zone_info','zone_info.zoneID=admin_info.zone_info_zoneID')
						->get();

		if($data){
			return $data->result();
		}
	}
	public function get_admin_details_by_id($id){
		$data=$this->db
						->select('*,zone_info.zoneTitle')
						->from('admin_info')
						->join('zone_info','zone_info.zoneID=admin_info.zone_info_zoneID')
						->where('adminID',$id)
						->get();
			if($data){
				return $data->row();
			}
	}
	public function update_admin_info($data,$id){
		unset($data['adminID']);
		$data=$this->db
		  				->where('adminID',$id)
		   				->update('admin_info',$data);
		 return  $data;
	}
	/*Admin End*/
	/*Start Bills*/
	public function create_monthly_bill($data){
		//print_r($data);exit;
		$this->db->trans_start();
		$bilData['zone_info_billZoneId']=$data['zone_info_billZoneId'];
		$bilData['monthlyBillingMonth']=$data['monthlyBillingMonth'];
		$bilData['monthlyBillingInfoAddedDate']=$this->manager_model->get_current_date_time();
		$this->db->insert('monthly_billing_info',$bilData);
		$bill_id=$this->db->insert_id();
		$students=$this->manager_model->get_all_active_student_by_zone($data['zone_info_billZoneId']);
		$bill['billingDetailsStudentElecticBill']=$data['electicBill'];
		$bill['billingDetailsStudentFoodAmount']=$data['food'];
		$bill['billingDetailsStudentWifiBill']=$data['wifi'];
		
		$totalBillAmount=$data['electicBill']+$data['food']+$data['wifi'];//+$data['profit'];
		foreach($students as $student):
			$bill['monthly_billing_info_billId']=$bill_id;
			$bill['student_info_billStudentId']=$student->student_info_studentId;
			$bill['seat_info_billStudentSeatId']=$student->seat_info_seatId;
			$bill['billing_details_monthelyRent']=$student->monthelyRent+$student->additionalCharge;
			$bill['billingDetailsHostelProfit']=$student->profit;
			$bill['billMessage']=$data['msg'];
			$bill['billing_details_specialDiscount']=$student->specialDiscount;
			$bill['billing_details_additionalCharge']=$student->additionalCharge;
			$bill['billing_details_admissionFee']=$student->admissionFee;
			$bill['billing_details_securityMoney']=$student->securityMoney;
			$bill['billingDetailsStudentTotalAmount']=(($student->monthelyRent+$student->additionalCharge+$totalBillAmount)-$student->specialDiscount);
			$bill['billingDetailsStudentPreviousDue']=$student->studentWalletAmount;
			$this->db->insert('monthly_billng_details',$bill);
		endforeach;
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	private function get_all_active_student_by_zone($zone_id){
		$data=$this->db
					->select('student_seat_info.*,seat_info.zone_info_zoneID,seat_info.seat_type_info_seatSeatTypeId,student_info.studentWalletAmount,seat_type_info.profit')
					->from('student_seat_info')
					->join('seat_info','student_seat_info.seat_info_seatId=seat_info.seatId')
					->join('student_info','student_seat_info.seat_info_seatId=student_info.seat_info_studenCurrentSeatId')
					->join('seat_type_info','seat_info.seat_type_info_seatSeatTypeId=seat_type_info.seatTypeId')
					->where('seat_info.zone_info_zoneID',$zone_id)
					->where('student_info.studentStatus',1)
					->where('student_seat_info.seat_info_studentSeatStatus',1)
					->group_by('student_info_studentId')
					->get();

		if($data){
			return $data->result();
		}
	}
	public function is_bill($data){
		$monthName=date('Y-m', strtotime($data['monthlyBillingMonth']));
		$monthStart=$monthName."-1";
		$monthEnd=$monthName."-31";
		$q=$this->db
		->select('monthlyBillingMonth')
		->from('monthly_billing_info')
		->where('zone_info_billZoneId',$data['zone_info_billZoneId'])
		->where('monthlyBillingMonth>=',$monthStart)
		->where('monthlyBillingMonth<=',$monthEnd)
		->get();

		if($q->num_rows()>0){
			return True;
		}
		else{
			return FALSE;
		}
	}
	public function make_bill_final($bill_id){
		$students=$this->manager_model->get_std_id_by_bill_id($bill_id);
		//print_r($students);exit;
		foreach($students as $std){
			$q=$this->db
				->where('studentId',$std->student_info_billStudentId)
				->set('studentWalletAmount', 'studentWalletAmount + ' . $std->billingDetailsStudentTotalAmount, FALSE)
				->update('student_info');
		}
		$status['monthlyBillingInfoStatus']=1;
		return $this->db->where('monthlyBillingInfoId',$bill_id)
						->update('monthly_billing_info',$status);

	}
	public function get_std_id_by_bill_id($bill_id){
		$data=$this->db
					->select('monthly_billng_details.student_info_billStudentId,monthly_billng_details.billingDetailsStudentTotalAmount')
					->from('monthly_billng_details')
					->where('monthly_billing_info_billId',$bill_id)
					->get();
			if($data){
				return $data->result();
			}
	}
	/*End Bills*/



}