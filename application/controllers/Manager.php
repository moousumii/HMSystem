<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends MY_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('manager_model');
		if(!$this->session->userdata('admin_id'))return redirect('login/');
	}

	public function myAccount(){
		$id=$this->session->userdata('admin_id');
		$data=$this->manager_model->get_user_details_by_id($id);
		$this->load->view('manager/myAccount',['data'=>$data]);
	}

	public function index(){
		$data['totalExpense']=$this->manager_model->get_total_expense_amount();
		$data['totalReturn']=$this->manager_model->get_total_return_payment();
		$data['totalPayment']=$this->manager_model->get_total_receive_payment();
		$data['billPayment']=$this->manager_model->get_individual_receive_payment('2');
		$data['securityPayment']=$this->manager_model->get_individual_receive_payment('4');
		$data['otherPayment']=$this->manager_model->get_individual_receive_payment('3');
		$data['totalCash']=$data['totalPayment']-($data['totalExpense']+$data['totalReturn']);
		$data['totalSeat']=$this->manager_model->get_total_seats();
		$data['fullSeat']=$this->manager_model->get_individual_seat_total('2');
		$data['freeSeat']=$this->manager_model->get_individual_seat_total('1');
		$data['due']=$this->manager_model->get_total_due_amount();
		$this->load->view('manager/dashBoard',$data);
	}	

	/*Add Students Start*/
	public function addStudent(){
		$infos=$this->manager_model->get_zoneID_zoneName();
		$admission=$this->manager_model->get_admissionTypeID_admissionTypeName();
		$this->load->view('manager/addStudent',['values'=>$infos,'admissions'=>$admission]);
	}
	public function insertStudents(){		
		$data=$this->input->post();
		//print_r($data);//exit;
		$data['studentBirthDate']= date('Y-m-d', strtotime($data['studentBirthDate']));
		//print_r($data); exit;
		//if (($_FILES['stdImage']['name']) && ($_FILES['stdIdCard']['name']) && ($_FILES['parentsImage']['name']) && ($_FILES['parentsIdCard']['name'])){
			$data['stdImage']="";
			$data['stdIdCard']="";
			$data['parentsImage']="";
			$data['parentsIdCard']="";
			$images = array();
			if (isset($_FILES['stdImage'])&& $_FILES['stdImage']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('stdImage')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['stdImage']=$image;
						//print_r($data); exit;
				}
			}
			if (isset($_FILES['stdIdCard'])&& $_FILES['stdIdCard']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('stdIdCard')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['stdIdCard']=$image;
						//print_r($data); exit;
				}
			}
			if (isset($_FILES['parentsImage'])&& $_FILES['parentsImage']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('parentsImage')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['parentsImage']=$image;
						//print_r($data); exit;
				}
			}
			if (isset($_FILES['parentsIdCard'])&& $_FILES['parentsIdCard']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('parentsIdCard')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['parentsIdCard']=$image;
						//print_r($data); exit;
				}
			}
			$studentid=$this->manager_model->insert_student($data);
			if($studentid){
				if (isset($_FILES['additionalOne'])&& $_FILES['additionalOne']['size'] > 0){
					$file='additionalOne';
					$this->insertAdditionalImages($file,$data['captionOne'],$studentid);
				}
				if (isset($_FILES['additionalTwo'])&& $_FILES['additionalTwo']['size'] > 0){
					$file='additionalTwo';
					$this->insertAdditionalImages($file,$data['captionTwo'],$studentid);
				}
				if (isset($_FILES['additionalThree'])&& $_FILES['additionalThree']['size'] > 0){
					$file='additionalThree';
					$this->insertAdditionalImages($file,$data['captionThree'],$studentid);
				}
				
				$this->session->set_flashdata('feedback_successfull', 'Added Student Successfully');
				return redirect('manager/viewStudentList/'.$studentid);
			}
			else {
				$this->session->set_flashdata('feedback_failed', 'Add Student Failed!');
				return redirect('manager/addStudent');
			}
		//}	
	}
	public function insertAdditionalImages($file,$caption,$std_id){
		
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//echo "no"; exit;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($file)) {
			$this->session->set_flashdata('feedback_failed', 'Image upload failed');
			return redirect('manager/addStudent');
		}
		else {
			$data1 = $this->upload->data();
			$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
			$data['imageName']=$image;
			$data['imageCaption']=$caption;
			$data['student_info_studentId']=$std_id;
			$table='student_image_info';
			return $this->manager_model->insert_data($table,$data);
				//print_r($data); exit;
		}
	}
	
	/*Add Students End*/

	/*Student List Start*/
	public function studentList(){
		$data=$this->manager_model->get_student_list();
		$this->load->view('manager/studentList',['infos'=>$data]);
	}
	public function allStudentList(){
		$data=$this->manager_model->get_all_student_list();
		$this->load->view('manager/allStudentList',['infos'=>$data]);
	}
	/*Student List End*/

	/*View Student Start*/
	public function viewStudentList($id){
		$qualification=array();
		$qualification['ssc']=$this->manager_model->get_qualification_info('1',$id);
		$qualification['hsc']=$this->manager_model->get_qualification_info('2',$id);
		$qualification['graduation']=$this->manager_model->get_qualification_info('3',$id);
		$qualification['postGraduation']=$this->manager_model->get_qualification_info('4',$id);
		$admission=$this->manager_model->get_admissionTypeId_admissionTypeName();
		$infos=$this->manager_model->get_zoneID_zoneName();
		$seat=$this->manager_model->get_seatId_seatNo();
		$data=$this->manager_model->get_student_details_by_id($id);
		$std_info['seat_info']=$this->manager_model->get_student_seat_details_by_std_id($id);
		$std_info['work_info']=$this->manager_model->get_student_work_details_by_std_id($id);
		$std_info['image_info']=$this->manager_model->get_student_image_details_by_std_id($id);
		$std_info['gurdian_info']=$this->manager_model->get_student_gurdian_details_by_std_id($id);
		$std_info['course_info']=$this->manager_model->get_student_course_details_by_std_id($id);
		//print_r($std_info);exit;
		$this->load->view('manager/viewStudentList',['data'=>$data,'qualification'=>$qualification,'admissions'=>$admission, 'values'=>$infos,'seats'=>$seat,'std_info'=>$std_info]);
	}
	/*View Student End*/

	/*Update Student Info Start*/
	public function updateStudentInfo(){
		$data=$this->input->post();
		$id=$data['studentId'];
		$img=$this->manager_model->get_student_image_by_id($id);
		$data['studentBirthDate']= date('Y-m-d', strtotime($data['studentBirthDate']));
		if (isset($_FILES['stdImage'])&& $_FILES['stdImage']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$picture=$img->stdImage;
				unlink($picture);

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('stdImage')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['stdImage']=$image;
						//print_r($data); exit;
				}
			}
		if (isset($_FILES['stdIdCard'])&& $_FILES['stdIdCard']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$picture=$img->stdIdCard;
				unlink($picture);

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('stdIdCard')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['stdIdCard']=$image;
						//print_r($data); exit;
				}
			}
			if (isset($_FILES['parentsImage'])&& $_FILES['parentsImage']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$picture=$img->parentsImage;
				unlink($picture);

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('parentsImage')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['parentsImage']=$image;
						//print_r($data); exit;
				}
			}
			if (isset($_FILES['parentsIdCard'])&& $_FILES['parentsIdCard']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$picture=$img->parentsIdCard;
				unlink($picture);

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('parentsIdCard')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
						$data1 = $this->upload->data();
						$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
						$data['parentsIdCard']=$image;
						//print_r($data); exit;
				}
			}
		if($this->manager_model->update_student_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
				redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}

	public function updateGurdianInfo(){
		$data=$this->input->post();
		$id=$data['gurdianId'];
		unset($data['gurdianId']);
		if($this->manager_model->update_student_gurdian_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}

	public function updateStudentQualificationInfo(){
		$data=$this->input->post();
		$id=$data['sQId'];
		if($this->manager_model->update_student_qualification_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}

	public function updateStdCourseInfo(){
		$data=$this->input->post();
		$id=$data['coursesId'];
		unset($data['coursesId']);
		if($this->manager_model->update_student_course_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}

	public function updateStudentSeatInfo(){
		$data=$this->input->post();
		//print_r($data); exit;
		$id=$data['sSeatId'];
		if($this->manager_model->update_student_seat_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}

	public function updateStudentWorkInfo(){
		$data=$this->input->post();
		$id=$data['sWId'];
		unset($data['sWId']);
		if($this->manager_model->update_student_work_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}
	public function updateStudentImageInfo(){
		$data=$this->input->post();
		$id=$data['sImgId'];
		unset($data['sImgId']);
		if (isset($_FILES['stdAImage'])&& $_FILES['stdAImage']['size'] > 0) {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//echo "no"; exit;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('stdAImage')) {
					$this->session->set_flashdata('feedback_failed', 'Image upload failed');
					return redirect('manager/addStudent');
				}
				else {
					$data1 = $this->upload->data();
					$image ="images/" . $data1['raw_name'] . $data1['file_ext'];
					$data['imageName']=$image;
				}
			}

		if($this->manager_model->update_student_image_info($data,$id)){
			$this->session->set_flashdata('feedback_successfull', 'Updated Student Info Successfully');
			redirect($this->agent->referrer());
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Update Student Info Failed!');
				redirect($this->agent->referrer());
			}
	}
	/*Update Student Info End*/

	public function studentHistory(){
		$this->load->view('manager/studentHistory');
	}
	public function transfer(){
		$students=$this->manager_model->get_studentId_studentName();
		$zones=$this->manager_model->get_zoneID_zoneName();
		$this->load->view('manager/transfer',['students'=>$students,'zones'=>$zones]);
	}
	public function saveTransfer(){
		$data=$this->input->post();
		//print_r($data);exit;
		if($this->manager_model->save_transfer_seat($data)){
			$this->session->set_flashdata('feedback_successfull', 'Student Transfered Successfully');
				return redirect('manager/studentList');
		}
		else{
				$this->session->set_flashdata('feedback_failed', 'Please Try Again!');
				return redirect('manager/studentList');
			}

	}
	public function vacant(){
		$students=$this->manager_model->get_studentId_studentName();
		$zones=$this->manager_model->get_zoneID_zoneName();
		$this->load->view('manager/vacant',['students'=>$students,'zones'=>$zones]);
	}

	public function saveVacantSeat(){
		$data=$this->input->post();
		//print_r($data);exit;
		if($this->manager_model->save_vacant_seat_info($data)){
			$this->session->set_flashdata('feedback_successfull', 'Successful');
				return redirect('manager/studentList');
		}
		else{
			$this->session->set_flashdata('feedback_failed', 'Please Try Again!');
			return redirect('manager/studentList');
		}
	}

	/*All Bills Start*/
	/*public function allBills(){
		$infos=$this->input->post();
		if($infos){
			if($infos['firstDate']){
				$infos['firstDate']= date('Y-m-d 00:00:00',strtotime($infos['firstDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			}
			if($infos['lastDate']){
				$infos['lastDate']= date('Y-m-d 23:59:59',strtotime($infos['lastDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			}
		}
		else{
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			
		}
		$data=$this->manager_model->get_all_bills($infos);
		
		$this->load->view('manager/allBills',['infos'=>$data,'inputs'=>$infos]);

	}*/

	public function allBills(){
		$data=$this->manager_model->get_all_bills();
		$this->load->view('manager/allBills',['infos'=>$data]);
	}
	/*All Bills End*/

	public function printInvoice($bill_id){
		$data['bill_info']=$this->manager_model->get_bill_print_bill_info($bill_id);
		//print_r($data);exit;
		$data['seat_info']=$this->manager_model->get_bill_print_seat_info($data['bill_info']->seat_info_billStudentSeatId);
		$this->load->view('manager/printInvoice',$data);
	}

	/*Generate Bills Start*/
	public function generateBill(){
		$infos=$this->manager_model->get_zoneID_zoneName();
		$data=$this->manager_model->get_all_generate_bills();
		$this->load->view('manager/generateBill',['zones'=>$infos,'infos'=>$data]);
	}

	public function generateMonthlyBill($id,$status){
		$data=$this->manager_model->get_generate_bill_details_by_id($id);
		$this->load->view('manager/generateMonthlyBill',['infos'=>$data,'bill_id'=>$id,'status'=>$status]);
	}
	/*Generate Bills End*/

	public function createMonthlyBill(){
		$data=$this->input->post();
		$data['monthlyBillingMonth']=date('Y-m-d', strtotime($data['monthlyBillingMonth']));
		if(!$this->manager_model->is_bill($data)){
			if($this->manager_model->create_monthly_bill($data)){
				$this->session->set_flashdata('feedback_successfull', 'Bill has Generated Successfully');
				return redirect('manager/generateBill');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Please Try Again!');
				return redirect('manager/generateBill');
			}
		}
		else{
			$this->session->set_flashdata('feedback_failed', 'Bill Already Exist for Selected Month And Zone');
			return redirect('manager/generateBill');
		}
	}
	public function makeBillFinal($bill_id){
		if($this->manager_model->make_bill_final($bill_id)){
			$this->session->set_flashdata('feedback_successfull', 'Bill Marked as Final.');
			return redirect('manager/generateBill');
		}
		else{
			$this->session->set_flashdata('feedback_failed', 'Please Try Again!');
			return redirect('manager/generateBill');
		}
	}


	/* Receive Payment Start*/
	public function receivePayment(){
		$info=$this->manager_model->get_zoneID_zoneName();
		$value=$this->manager_model->get_paymentId_paymentType();
		$student=$this->manager_model->get_studentId_studentName();
		$this->load->view('manager/receivePayment',['infos'=>$info,'values'=>$value,'students'=>$student]);
	}
	public function insertReceivePayment(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addReceivePayment')){
			$data=$this->input->post();
			if($this->manager_model->insert_receive_payment($data))
			{	
				$this->session->set_flashdata('feedback_successfull', 'Receive Payment Inserted Successfully');
				return redirect('manager/receivePayment');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Receive Payment Insert Failed');
				return redirect('manager/receivePayment');
			}
		}
		else{
			$this->load->view('manager/receivePayment');
		}	
	}
	public function viewReceivePayment($id){
		$info=$this->manager_model->get_zoneID_zoneName();
		$value=$this->manager_model->get_paymentId_paymentType();
		$student=$this->manager_model->get_studentId_studentName();
		$data=$this->manager_model->get_receive_payment_details_by_id($id);
		$this->load->view('manager/viewReceivePayment',['infos'=>$info,'values'=>$value,'students'=>$student,'data'=>$data]);
	}
	/*Receive Payment End*/

	/*Add Expense Start*/
	public function expense(){
		$data=$this->manager_model->get_all_expense();
		$this->load->view('manager/expense',['infos'=>$data]);
	}
	public function addExpense(){
		$value=$this->manager_model->get_zoneID_zoneName();
		$info=$this->manager_model->get_fieldId_fieldTitle();
		$this->load->view('manager/addExpense',['values'=>$value,'infos'=>$info]);
	}
	public function insertExpense(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addExpense')){
			$data=$this->input->post();
			if($this->manager_model->insert_expense($data))
			{	
				$this->session->set_flashdata('feedback_successfull', 'Expense Inserted 
				Successfully');
				return redirect('manager/expense');
			}
			else{

				$this->session->set_flashdata('feedback_failed', 'Expense Insert Failed');
				return redirect('manager/addExpense');
			}
		}
		else{
			$this->load->view('manager/addExpense');
		}
		
	}
	public function viewExpense($id){
		$value=$this->manager_model->get_zoneID_zoneName();
		$info=$this->manager_model->get_fieldId_fieldTitle();
		$data=$this->manager_model->get_expense_details_by_id($id);
		$this->load->view('manager/viewExpense',['data'=>$data,'values'=>$value,'infos'=>$info]);
	}
	/*Add Expense End*/

	/*Add Return Start*/
	public function addReturn(){
		$info=$this->manager_model->get_zoneID_zoneName();
		$value=$this->manager_model->get_returnPaymentId_returnPaymentType();
		$student=$this->manager_model->get_studentId_studentName();
		$this->load->view('manager/addReturn',['infos'=>$info,'values'=>$value,'students'=>$student]);
	}
	public function insertReturnPayment(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addReturn')){
			$data=$this->input->post();
			if($this->manager_model->insert_return_payment($data))
			{	
				$this->session->set_flashdata('feedback_successfull', 'Return Inserted Successfully');
				return redirect('manager/addReturn');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Return Insert Failed');
				return redirect('manager/addReturn');
			}
		}
		else{
			$this->load->view('manager/addReturn');
		}	
	}
	public function viewReturnPayment($id){
		$info=$this->manager_model->get_zoneID_zoneName();
		$value=$this->manager_model->get_returnPaymentId_returnPaymentType();
		$student=$this->manager_model->get_studentId_studentName();
		$data=$this->manager_model->get_return_payment_details_by_id($id);
		$this->load->view('manager/viewReturnPayment',['infos'=>$info,'values'=>$value,'students'=>$student,'data'=>$data]);
	}
	/*Add Return End*/

	/*Transaction Start*/
	public function transactions(){
		
		$infos=$this->input->post();
		//print_r($infos);exit;
		if($infos){
			if($infos['firstDate']){
				$infos['firstDate']= date('Y-m-d 00:00:00',strtotime($infos['firstDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			}
			if($infos['lastDate']){
				$infos['lastDate']= date('Y-m-d 23:59:59',strtotime($infos['lastDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			}
			if(!$infos['transectionType'])
				$infos['transectionType']=0;
		}
		else{
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			$infos['transectionType']=0;
			
		}

		$data=$this->manager_model->get_all_transaction($infos);
		$this->load->view('manager/transactions',['infos'=>$data,'inputs'=>$infos]);
	}
	/*Transaction End*/
	

	/*Income Expense Report Start*/
	public function incomeExpenseReport(){
		/*$fDate = date("Y-m-d 00:00:00", strtotime("first day of this month"));
		$lDate = date("Y-m-d 23:59:59", strtotime("last day of this month"));
		if($this->input->post()){
			$fDate =$this->input->post('firstDate');
			$fDate =date("Y-m-d 00:00:00", strtotime($fDate));

			$lDate =$this->input->post('lastDate');
			$lDate =date("Y-m-d 23:59:59", strtotime($lDate));
		}*/
		//echo $fDate."<br>".$lDate."<br>";
		$infos=$this->input->post();
		//print_r($infos);exit;
		if($infos){
			if($infos['firstDate']){
				$infos['firstDate']= date('Y-m-d 00:00:00',strtotime($infos['firstDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			}
			if($infos['lastDate']){
				$infos['lastDate']= date('Y-m-d 23:59:59',strtotime($infos['lastDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			}
		}
		else{
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			
		}
		$income=$this->manager_model->get_total_income($infos);
		/*print_r($income);
		exit();*/
		$expense=$this->manager_model->get_total_expense($infos);
		$this->load->view('manager/incomeExpenseReport',['incomes'=>$income,'expenses'=>$expense,'inputs'=>$infos]);
	}
	/*Income Expense Report End*/

	public function studentReport(){
		
		$data['students']=$this->manager_model->get_all_studentId_studentName();
		$data['infos']="";
		$data['transections']="";
		if($this->input->post()){
			$id=$this->input->post('student_id');
			$data['infos']=$this->manager_model->get_student_details_by_id($id);
			$data['transections']=$this->manager_model->get_student_transections_by_id($id);
			//print_r($data['transections']); exit;
		}
		$this->load->view('manager/studentReport',$data);
	}


	public function dueList(){
		$data=$this->manager_model->get_all_student_due_list();
		$this->load->view('manager/dueList',['infos'=>$data]);
	}

	/*Building Start*/
	public function addBuilding(){
		$info=$this->manager_model->get_zoneID_zoneName();
		$this->load->view('manager/addBuilding',['values'=>$info]);
	}
	public function insertBuilding(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addBuilding')){
			$data=$this->input->post();
			if($this->manager_model->insert_building($data)){
				$this->session->set_flashdata('feedback_successfull', 'Building Inserted Successfully');
				return redirect('manager/building');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Building Insert Failed');
				return redirect('manager/addBuilding');
			}
		}
		else{
			$this->load->view('manager/addBuilding');
		}
	}
	public function building(){
		$data=$this->manager_model->get_all_building();
		//print_r($data); exit();
		$this->load->view('manager/building',['infos'=>$data]);
	}
	public function viewBuilding($id){
		$info=$this->manager_model->get_zoneID_zoneName();
		$data=$this->manager_model->get_building_details_by_id($id);
		$floor=$this->manager_model->get_all_floor_in_building($id);
		$this->load->view('manager/viewBuilding',['data'=>$data,'values'=>$info,'floors'=>$floor]);
	}
	public function updateBuilding(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateBuilding')){
			$data=$this->input->post();
			$id=$data['buildingId'];
			if($this->manager_model->update_building_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Building Updated Successfully');
				return redirect('manager/building');
			}	
			else{
				$this->session->set_flashdata('feedback_failed', 'Building Update Failed');
				return redirect('manager/viewBuilding');
			}
		}
		else{
			$info=$this->manager_model->get_zoneID_zoneName();
			$data=$this->manager_model->get_building_details_by_id($this->input->post('buildingId'));
			$floor=$this->manager_model->get_all_floor_in_building($this->input->post('buildingId'));
			$this->load->view('manager/viewBuilding',['data'=>$data,'values'=>$info,'floors'=>$floor]);
		}
	}
	/*Building End*/

	/*Floor Start*/
	public function addFloor(){
		$info=$this->manager_model->get_zoneID_zoneName();
		/*$value=$this->manager_model->get_buildingId_buildingNo();*/
		$this->load->view('manager/addFloor',['values'=>$info]);
	}
	public function insertFloor(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addFloor')){
			$data=$this->input->post();
			//print_r($data); exit();
			if($this->manager_model->insert_floor($data)){
				$this->session->set_flashdata('feedback_successfull', 'Floor Inserted Successfully');
				return redirect('manager/floor');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Floor Insert Failed');
				return redirect('manager/addFloor');
			}
		}
		else{
			$this->load->view('manager/addFloor');
		}
		
	}
	public function floor(){
		$data=$this->manager_model->get_all_floor();
		$this->load->view('manager/floor',['infos'=>$data]);
	}
	public function viewFloor($id){
		$value=$this->manager_model->get_zoneID_zoneName();
		$data=$this->manager_model->get_floor_details_by_id($id);
		$info=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
		$unit=$this->manager_model->get_all_unit_in_floor($id);
		$this->load->view('manager/viewFloor',['data'=>$data,'values'=>$value,'infos'=>$info,'units'=>$unit]);
	}
	public function updateFloor(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateFloor')){
			$data=$this->input->post();
			$id=$data['floorId'];
			if($this->manager_model->update_floor_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Floor Updated Successfully');
				return redirect('manager/floor');
			}	
			else{
				$this->session->set_flashdata('feedback_failed', 'Floor Update Failed');
				return redirect('manager/viewFloor');
			}
		}
		else{
			$value=$this->manager_model->get_zoneID_zoneName();
			$data=$this->manager_model->get_floor_details_by_id($this->input->post('floorId'));
			$info=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
			$unit=$this->manager_model->get_all_unit_in_floor($this->input->post('floorId'));
			$this->load->view('manager/viewFloor',['data'=>$data,'values'=>$value,'infos'=>$info,'units'=>$unit]);
		}
	}
	/*Floor End*/

	/*Unit Start*/
	public function addUnit(){
		$info=$this->manager_model->get_zoneID_zoneName();
		/*$buildings=$this->manager_model->get_buildingId_buildingNo();
		$floors=$this->manager_model->get_floorId_floorNo();*/
		$this->load->view('manager/addUnit',['values'=>$info]);
	}
	public function insertUnit(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addUnit')){
			$data=$this->input->post();
			if($this->manager_model->insert_unit($data)){
				$this->session->set_flashdata('feedback_successfull', 'Unit Inserted Successfully');
				return redirect('manager/units');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Unit Insert Failed');
			    return redirect('manager/addUnit');
			}
		}
		else{
			$this->load->view('manager/addUnit');
		}
		
	}
	public function units(){
		$data=$this->manager_model->get_all_units();
		$this->load->view('manager/units',['infos'=>$data]);
	}
	public function viewUnit($id){
		$infos=$this->manager_model->get_zoneID_zoneName();
		/*$buildings=$this->manager_model->get_buildingId_buildingNo();
		$floors=$this->manager_model->get_floorId_floorNo();*/
		$data=$this->manager_model->get_unit_details_by_id($id);
		$buildings=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
		$floors=$this->manager_model->get_floorId_floorNo_by_building_id($data->building_info_unitBuildingId);
		$this->load->view('manager/viewUnit',['values'=>$infos,'data'=>$data,'buildings'=>$buildings,'floors'=>$floors]);
	}
	public function updateUnit(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateUnit')){
			$data=$this->input->post();
			$id=$data['unitId'];
			if($this->manager_model->update_unit_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Unit Updated Successfully');
				return redirect('manager/units');
			}	
			else{
				$this->session->set_flashdata('feedback_failed', 'Unit Update Failed');
				return redirect('manager/viewUnit');
			}
		}
		else{
			$infos=$this->manager_model->get_zoneID_zoneName();
			$data=$this->manager_model->get_unit_details_by_id($this->input->post('unitId'));
			$buildings=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
			$floors=$this->manager_model->get_floorId_floorNo_by_building_id($data->building_info_unitBuildingId);
			$this->load->view('manager/viewUnit',['values'=>$infos,'data'=>$data,'buildings'=>$buildings,'floors'=>$floors]);
		}
	}
	/*Unit End*/

	/*Room Start*/
	public function addRoom(){
		$info=$this->manager_model->get_zoneID_zoneName();
		/*$buildings=$this->manager_model->get_buildingId_buildingNo();
		$floors=$this->manager_model->get_floorId_floorNo();
		$units=$this->manager_model->get_unitId_unitNo();*/
		$this->load->view('manager/addRoom',['values'=>$info]);
	}
	public function insertRoom(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addRoom')){
			$data=$this->input->post();
			if($this->manager_model->insert_room($data)){
				$this->session->set_flashdata('feedback_successfull', 'Room Inserted Successfully');
				return redirect('manager/room');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Room Insert Failed');
				return redirect('manager/addRoom');
			}
		}
		else{
			$this->load->view('manager/addRoom');
		}
	}
	public function room(){
		$data=$this->manager_model->get_all_room();
		$this->load->view('manager/room',['infos'=>$data]);
	}
	public function viewRoom($id){
		$infos=$this->manager_model->get_zoneID_zoneName();
		/*$buildings=$this->manager_model->get_buildingId_buildingNo();
		$floors=$this->manager_model->get_floorId_floorNo();
		$units=$this->manager_model->get_unitId_unitNo();*/
		$data=$this->manager_model->get_room_details_by_id($id);
		$buildings=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
		$floors=$this->manager_model->get_floorId_floorNo_by_building_id($data->building_info_roomBuildingId);
		$units=$this->manager_model->get_unitId_unitNo_by_floor_id($data->floor_info_roomFloorId);
		$this->load->view('manager/viewRoom',['values'=>$infos,'data'=>$data,'buildings'=>$buildings,'floors'=>$floors,'units'=>$units]);
	}
	public function updateRoom(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateRoom')){
			$data=$this->input->post();
			$id=$data['roomId'];
			if($this->manager_model->update_room_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Room Updated Successfully');
				return redirect('manager/room');
			}	
			else{
				$this->session->set_flashdata('feedback_failed', 'Room Update Failed');
				return redirect('manager/viewRoom');
			}
		}
		else{
			$infos=$this->manager_model->get_zoneID_zoneName();
			$data=$this->manager_model->get_room_details_by_id($this->input->post('roomId'));
			$buildings=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
			$floors=$this->manager_model->get_floorId_floorNo_by_building_id($data->building_info_roomBuildingId);
			$units=$this->manager_model->get_unitId_unitNo_by_floor_id($data->floor_info_roomFloorId);
			$this->load->view('manager/viewRoom',['values'=>$infos,'data'=>$data,'buildings'=>$buildings,'floors'=>$floors,'units'=>$units]);
		}
	}
	/*Room End*/

	/*Seat Start*/
	public function addSeats(){
		$info=$this->manager_model->get_zoneID_zoneName();
		
		$seatTypes=$this->manager_model->get_seatTypeId_seatTypeName_rent();
		$seatStatus=$this->manager_model->get_seatStausId_seatStatusStatus();
		$this->load->view('manager/addSeats',['values'=>$info,'seatTypes'=>$seatTypes, 'seatStatus'=>$seatStatus]);
	}
	public function insertSeat(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addSeat')){
			$data=$this->input->post();
			//print_r($data);exit;
			if($this->manager_model->insert_seat($data))
			{
				$this->session->set_flashdata('feedback_successfull', 'Seat Inserted Successfully');
				return redirect('manager/seat');
			}
			else{		
				$this->session->set_flashdata('feedback_failed', 'Seat Insert Failed');
				return redirect('manager/addSeats');
			}
		}
		else{
			$this->load->view('manager/addSeats');
		}
		
	}
	public function seat(){
		$data=$this->manager_model->get_all_seat();
		$this->load->view('manager/seat',['infos'=>$data]);
	}
	public function viewSeats($id){
		$infos=$this->manager_model->get_zoneID_zoneName();
		$seatTypes=$this->manager_model->get_seatTypeId_seatTypeName_rent();
		$seatStatus=$this->manager_model->get_seatStausId_seatStatusStatus();
		$data=$this->manager_model->get_seat_details_by_id($id);
		$others['buildings']=$this->manager_model->get_buildingId_buildingNo_by_zoneID($data->zone_info_zoneID);
		$others['floors']=$this->manager_model->get_floorId_floorNo_by_building_id($data->building_info_seatBuildingId);
		$others['units']=$this->manager_model->get_unitId_unitNo_by_floor_id($data->floor_info_seatFloorId);
		$others['rooms']=$this->manager_model->get_roomId_roomNo_by_unit_id($data->unit_info_seatUnitId);
		$this->load->view('manager/viewSeats',['values'=>$infos, 'seatTypes'=>$seatTypes, 'seatStatus'=>$seatStatus,'data'=>$data,'others'=>$others]);
	}
	public function updateSeat(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateSeat')){
			$data=$this->input->post();
			$id=$data['seatId'];
			if($this->manager_model->update_seat_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Seat Updated Successfully');
				return redirect('manager/seat');
			}	
			else{

				$this->session->set_flashdata('feedback_failed', 'Seat Update Failed');
				return redirect('manager/viewSeats');
			}
		}
		else{
			$infos=$this->manager_model->get_zoneID_zoneName();
			$seatTypes=$this->manager_model->get_seatTypeId_seatTypeName_rent();
			$seatStatus=$this->manager_model->get_seatStausId_seatStatusStatus();
			$data=$this->manager_model->get_seat_details_by_id($this->input->post('seatId'));
			$this->load->view('manager/viewSeats',['values'=>$infos, 'seatTypes'=>$seatTypes, 'seatStatus'=>$seatStatus,'data'=>$data]);
		}

	}
	
	/*Seat End*/

	/*Seat Type Start*/
	public function addSeatType(){
		$this->load->view('manager/addSeatType');
	}
	public function insertSeatType(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addSeatType')){
			$data=$this->input->post();
			if($this->manager_model->insert_seat_type($data))
			{
				$this->session->set_flashdata('feedback_successfull', 'Seat Type Inserted Successfully');
				return redirect('manager/seatType');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Seat Type Insert Failed');
				return redirect('manager/addSeatType');
			}
		}
		else{
			$this->load->view('manager/addSeatType');
		}
		
	}
	public function seatType(){
		$data=$this->manager_model->get_all_seat_type();
		$this->load->view('manager/seatType',['infos'=>$data]);
	}
	public function viewSeatType($id){
		$data=$this->manager_model->get_seat_type_details_by_Id($id);
		$this->load->view('manager/viewSeatType',['data'=>$data]);
	}
	public function updateSeatType(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateSeatType')){
			$data=$this->input->post();
			$id=$data['seatTypeId'];
			if($this->manager_model->update_seat_type($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Seat Type Updated Successfully');
				return redirect('manager/seatType');
			}
			else{
					$this->session->set_flashdata('feedback_failed', 'Seat Type Update Failed');
					return redirect('manager/viewSeatType');
				}
		}
		else{
			$info=$this->manager_model->get_seat_type_details_by_Id($this->input->post('seatTypeId'));
			$this->load->view('manager/viewSeatType',['data'=>$info]);
		}
		
	}
	/*Seat Type End*/

	/* Seats Expire Date Start */

	public function seatExpire(){
		$infos=$this->input->post();
		//print_r($infos);exit;
		if($infos){
			if($infos['firstDate']){
				$infos['firstDate']= date('Y-m-d 00:00:00',strtotime($infos['firstDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			}
			if($infos['lastDate']){
				$infos['lastDate']= date('Y-m-d 23:59:59',strtotime($infos['lastDate']));
			}
			else{
				$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
				$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			}
		}
		else{
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$infos['firstDate']= $dt->format('Y-m-d 00:00:00');
			$infos['lastDate']= $dt->format('Y-m-d 23:59:59');
			
		}
		//print_r($infos);exit;
		$expire=$this->manager_model->get_all_seat_expire_date($infos);
		$this->load->view('manager/seatExpire',['expires'=>$expire,'inputs'=>$infos]);
	}

	/* Seats Expire Date End */

	/*Add Expense Field Start*/
	public function addExpenseField(){
		$this->load->view('manager/addExpenseField');
	}
	public function insertExpenseField(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addExpenseField')){
			$data=$this->input->post();
			if($this->manager_model->insert_expense_field($data))
			{
				$this->session->set_flashdata('feedback_successfull', 'Expense Field Inserted Successfully');
				return redirect('manager/expenseField');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Expense Field Insert Failed');
				return redirect('manager/addExpenseField');
			}
		}
		else{
			$this->load->view('manager/addExpenseField');
		}
		
	}
	public function expenseField(){
		$data=$this->manager_model->get_all_expense_field();
		$this->load->view('manager/expenseField',['infos'=>$data]);
	}
	public function viewExpenseField($id){
		$data=$this->manager_model->get_expense_field_details_by_Id($id);
		$this->load->view('manager/viewExpenseField',['data'=>$data]);
	}
	public function updateExpenseField(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateExpenseField')){
			$data=$this->input->post();
			//print_r($data); exit();
			$id=$data['fieldId'];
			if($this->manager_model->update_expense_field_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Expense Field Updated Successfully');
				return redirect('manager/expenseField');
			}
			else{
					$this->session->set_flashdata('feedback_failed', 'Expense Field Update Failed!');
					return redirect('manager/viewExpenseField');
				}
		}
		else{
			//$this->load->view('manager/viewExpenseField');
			$value=$this->manager_model->get_expense_field_details_by_Id($this->input->post('fieldId'));
			$this->load->view('manager/viewExpenseField',['data'=>$value]);
		}
		
	}
	/*Add Expense Field End*/
	/* SMS Section Start */
	public function sendsms(){
		$data['students']=$this->manager_model->get_all_studentId_studentName();
		$data['infos']="";
		if($this->input->post()){
			$id=$this->input->post('student_id');
			$data['infos']=$this->manager_model->get_student_sms_info_by_id($id);
			
		}
		$this->load->view('manager/sendsms',$data);
	}
	public function createSms(){
		$data=$this->input->post();
		//print_r($data); exit;

		if($data['send_to']=1 || $data['send_to']=3){	
			$_url='http://brandsms.mimsms.com/miscapi';
			$_param = array(
		       "api_key" =>"C20008475a546fce91a097.45912341",
		       "type" =>"text",
		       "contacts" => $data['std_mob'],
		       "senderid"=>"8804445629106",
		       "msg"=>$data['message']
		    );
		    $postData = '';
		    
		    //create name value pairs seperated by &
		    foreach($_param as $k => $v) 
		    { 
		      $postData .= $k . '='.$v.'&'; 
		    }
		    rtrim($postData, '&');


		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL,$_url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		    curl_setopt($ch, CURLOPT_HEADER, false); 
		    curl_setopt($ch, CURLOPT_POST, count($postData));
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

		    $output=curl_exec($ch);

		    curl_close($ch);
		}
		if($data['send_to']=1 || $data['send_to']=2){	
			$_url='http://brandsms.mimsms.com/miscapi';
			$_param = array(
		       "api_key" =>"C20008475a546fce91a097.45912341",
		       "type" =>"text",
		       "contacts" => $data['gur_mob'],
		       "senderid"=>"8804445629106",
		       "msg"=>$data['message']
		    );
		    $postData = '';
		    
		    //create name value pairs seperated by &
		    foreach($_param as $k => $v) 
		    { 
		      $postData .= $k . '='.$v.'&'; 
		    }
		    rtrim($postData, '&');


		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL,$_url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		    curl_setopt($ch, CURLOPT_HEADER, false); 
		    curl_setopt($ch, CURLOPT_POST, count($postData));
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

		    $output=curl_exec($ch);

		    curl_close($ch);
		}
		/*if($output){
		    $this->session->set_flashdata('feedback_successfull', 'SMS has Send Successfully');
		}
		else{
		    $this->session->set_flashdata('feedback_failed', 'Please Try Again');
		}*/
		return redirect('manager/sendsms');
	}
	/* SMS Section End */

	/*Zone Start*/
	public function addZone(){
		$this->load->view('manager/addZone');
	}
	public function insertZone(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addZone')){
			$data=$this->input->post();
			if($this->manager_model->insert_zone($data))
			{
				$this->session->set_flashdata('feedback_successfull', 'Zone Inserted Successfully');
				return redirect('manager/allZone');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Zone Insert Failed');
				return redirect('manager/addZone');
			}
		}
		else{
			$this->load->view('manager/addZone');
		}
	}
	public function allZone(){
		$data=$this->manager_model->get_all_zone();
		$this->load->view('manager/allZone',['infos'=>$data]);
	}
	public function viewZone($id){
		$data=$this->manager_model->get_zone_details_by_Id($id);
		$this->load->view('manager/viewZone',['data'=>$data]);
	}
	public function updateZone(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateZone')){
			$data=$this->input->post();
			$id=$data['zoneID'];
			if($this->manager_model->update_zone_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Zone Updated Successfully');
				return redirect('manager/allZone');
			}
			else{
					$this->session->set_flashdata('feedback_failed', 'Zone Update Failed!');
					return redirect('manager/viewZone');
				}
		}
		else{
			$info=$this->manager_model->get_zone_details_by_Id($this->input->post('zoneID'));
			$this->load->view('manager/viewZone',['data'=>$info]);
		}
		
	}
	/*Zone End*/

	/*Admin Start*/
	public function addAdmin(){
		$info=$this->manager_model->get_zoneID_zoneName();
		$this->load->view('manager/addAdmin',['values'=>$info]);
	}
	public function insertAdmin(){
		$this->load->library('form_validation');
		if($this->form_validation->run('addAdmin')){
			$data=$this->input->post();
			if($this->manager_model->insert_admin($data))
			{
				$this->session->set_flashdata('feedback_successfull', 'Admin Inserted Successfully');
				return redirect('manager/allAdmin');
			}
			else{
				$this->session->set_flashdata('feedback_failed', 'Admin Insert Failed');
				return redirect('manager/addAdmin');
			}
		}
		else{
			$this->load->view('manager/addAdmin');
		}
	}
	public function allAdmin(){
		$data=$this->manager_model->get_all_member();
		$this->load->view('manager/allAdmin',['infos'=>$data]);
	}
	public function viewAdmin($id){
		$info=$this->manager_model->get_zoneID_zoneName();
		$data=$this->manager_model->get_admin_details_by_id($id);
		$this->load->view('manager/viewAdmin',['data'=>$data,'values'=>$info]);
	}
	public function updateAdmin(){
		$this->load->library('form_validation');
		if($this->form_validation->run('updateAdmin')){
			$data=$this->input->post();
			//print_r($data); exit();
			$id=$data['adminID'];
			if($this->manager_model->update_admin_info($data,$id)){
				$this->session->set_flashdata('feedback_successfull', 'Admin Updated Successfully');
				return redirect('manager/allAdmin');
			}	
			else{
				$this->session->set_flashdata('feedback_failed', 'Admin Update Failed');
				return redirect('manager/viewAdmin');
			}
		}
		else{
			$info=$this->manager_model->get_zoneID_zoneName();
			$data=$this->manager_model->get_admin_details_by_id($this->input->post('adminID'));
			$this->load->view('manager/viewAdmin',['data'=>$data,'values'=>$info]);
		}

	}

	/*Admin End*/

	/*Delete Image*/

	/* public function delete_image(){*/
        /*$id = $this->input->post('studentId');
        $picture = $this->input->post('stdImage');

        $this->manager_model->delete_image('9', '413.jpg');
        return redirect('manager/viewStudentList');  */
       /* $picture="images/4113.jpg";
        unlink($picture);
        echo $picture;
    }*/

}
