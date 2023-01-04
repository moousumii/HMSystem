<?php
class common {

	public static function get_seat_type_by_id($id){
		$CI = & get_instance();

		$q=$CI->db->select('seatTypeName')
					->from('seat_type_info')
					->where('seatTypeId',$id)
					->get();
		return $q->row()->seatTypeName;
	}

}

?>