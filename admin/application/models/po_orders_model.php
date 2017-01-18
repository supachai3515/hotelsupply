
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Po_orders_model extends CI_Model {


	public function get_po_orders( $start, $limit)
	{

	    $sql ="  SELECT p.* , os.name po_order_status_name ,os.priority_color , os.icon_font FROM  po_orders p INNER JOIN po_order_status os ON os.id =  p.po_order_status_id  ORDER BY p.id DESC LIMIT " . $start . "," . $limit;
		$re = $this->db->query($sql);
		return $re->result_array();

	}

	public function get_po_orders_count()
	{
		$sql =" SELECT COUNT(id) as connt_id FROM  po_orders p "; 
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return  $row['connt_id'];
	
	}


	public function get_po_orders_id($po_orders_id)
	{
		$sql =" SELECT p.* , os.name po_order_status_name , os.priority_color , os.icon_font FROM  po_orders p INNER JOIN po_order_status os ON os.id =  p.po_order_status_id
				 WHERE p.id = '".$po_orders_id."'"; 

		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row;
	}

	public function get_po_orders_detail_id($po_orders_id)
	{
		$sql ="SELECT od.* ,  IFNULL(p.sku,'') sku, IFNULL(p.name,'') product_name FROM po_order_detail od 
		LEFT JOIN products p ON od.product_id = p.id WHERE od.po_order_id = '".$po_orders_id."'"; 

		$query = $this->db->query($sql);
		$row = $query->result_array();
		return $row;
	}

	public function get_po_order_status()
	{
		$sql ="SELECT * FROM po_order_status"; 

		$query = $this->db->query($sql);
		$row = $query->result_array();
		return $row;
	}//

	public function get_po_order_status_history($po_orders_id)
	{
		$sql =" SELECT oh.* , os.name po_order_status_name 
				from po_order_status_history  oh 
				LEFT JOIN po_order_status os ON oh.po_order_status_id = os.id
				where oh.po_order_id ='".$po_orders_id."' ORDER BY oh.create_date DESC"; 

		$query = $this->db->query($sql);
		$row = $query->result_array();
		return $row;
	}
	

	public function update_status($po_orders_id)
	{
		date_default_timezone_set("Asia/Bangkok");
		$data_po_order_status = array(
			'po_order_status_id' => $this->input->post('select_status'),
			'description' => $this->input->post('description'),
			'po_order_id' => $po_orders_id,
			'create_date' => date("Y-m-d H:i:s"),						
		);
		$this->db->insert("po_order_status_history", $data_po_order_status);


		$data_order = array(
			'po_order_status_id' => $this->input->post('select_status')				
		);

		$where = "id = '".$po_orders_id."'"; 
		$this->db->update("po_orders", $data_order, $where);

	}

	public function update_tracking($po_orders_id)
	{
		$data_order = array(
			'trackpost' => $this->input->post('tracking')				
		);

		$where = "id = '".$po_orders_id."'"; 
		$this->db->update("po_orders", $data_order, $where);

	}



	 public function get_po_orders_search()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data_po_orders = array(
			'search' => $this->input->post('search'),
			'po_order_id' => $this->input->post('po_order_id')	
		);

		$sql ="SELECT p.* , os.name po_order_status_name FROM  po_orders p INNER JOIN po_order_status os ON os.id =  p.po_order_status_id WHERE  1=1 ";

				 if($data_po_orders['po_order_id'] !="")
				 { 
				 	$sql = $sql." AND p.id ='".$data_po_orders['po_order_id']."'";
				 }

				 if($this->input->post('select_status') !="0")
				 { 
				 	$sql = $sql." AND os.id ='".$this->input->post('select_status')."'";
				 }
				
				 $sql = $sql." AND (p.name LIKE '%".$data_po_orders['search']."%' 
								 OR  p.id LIKE '%".$data_po_orders['search']."%' 
								 OR  p.trackpost LIKE '%".$data_po_orders['search']."%') ";
				 


		$re = $this->db->query($sql);
		$return_data['result_po_orders'] = $re->result_array();
		$return_data['data_search'] = $data_po_orders;
		$return_data['sql'] = $sql;
		return $return_data;
	}



}

/* End of file po_orders_model.php */
/* Location: ./application/models/po_orders_model.php */