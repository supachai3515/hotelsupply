<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //call model inti 
        $this->load->model('initdata_model');
        $this->load->library('pagination');
    }

    public function index()
    {
        //header meta tag 
        $data['header'] = array(
            'title' => 'ตะกร้าสินค้า | ' . $this->config->item('sitename'),
            'description' => 'ตะกร้าสินค้า | ' . $this->config->item('tagline'),
            'author' => 'www.bboycomputer.com',
            'keyword' => 'ตะกร้าสินค้า | ' . $this->config->item('tagline')
        );
        //get menu database 
        $this->load->model('initdata_model');
        $data['menus_list']  = $this->initdata_model->get_menu();
        $data['menu_type']   = $this->initdata_model->get_type();
        $data['menu_brands'] = $this->initdata_model->get_brands();
        //content file view
        $data['content']     = 'cart';
        // if have file script
        //$data['script_file']= "js/product_add_js";
        //load layout
        $this->load->view('template/layout', $data);
    }

    public function get_cart()
    {
        $productResult = array();
        foreach ($this->cart->contents() as $items) {
            $sql   = "SELECT p.* ,t.name type_name, b.name brand_name
                FROM  products p 
                LEFT JOIN product_brand b ON p.product_brand_id = b.id
                LEFT JOIN product_type t ON p.product_type_id = t.id  WHERE p.id = '" . $items['id'] . "'";
            $query = $this->db->query($sql);
            $row   = $query->row_array();
            if (isset($row['id'])) {
                $price = $row["price"];
                if ($this->session->userdata('is_logged_in') && $this->session->userdata('verify') == "1") {
                    if (isset($row["member_discount"])) {
                        if ($row["member_discount"] > 0) {
                            $price = $row["member_discount"];
                        }
                    }
                }
                $image_url = "";
                if ($row['image'] != "") {
                    $image_url = $this->config->item('url_img') . $row['image'];
                } else {
                    $image_url = $this->config->item('no_url_img');
                }
                $productResult[] = array(
                    'id' => $items['id'],
                    'sku' => $row['sku'],
                    'slug' => $row['slug'],
                    'name' => $row['name'],
                    'img' => $image_url,
                    'price' => $price,
                    'qty' => $items['qty'],
                    'rowid' => $items['rowid'],
                    'model' => $row['model'],
                    'brand' => $row['brand_name'],
                    'is_reservations' => $items['is_reservations'],
                    'type' => $row['type_name']
                );
            }
        }
        echo json_encode($productResult, JSON_NUMERIC_CHECK);
    }

    public function delete_item($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
    }

    public function update_item($rowid, $qty)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
    }

    public function add($id)
    {
        $sql   = "SELECT * FROM products WHERE id = '" . $id . "'";
        $query = $this->db->query($sql);
        $row   = $query->row_array();
        if (isset($row['id'])) {
            $price = $row["price"];
            if ($this->session->userdata('is_logged_in') && $this->session->userdata('verify') == "1") {
                if (isset($row["member_discount"])) {
                    if ($row["member_discount"] > 0) {
                        $price = $row["member_discount"];
                    }
                }
            }

            $data = array(
                array(
                    'id' => $row['id'],
                    'sku' => $row['id'],
                    'qty' => 1,
                    'price' => $price,
                    'is_reservations' => 0,
                    'name' => $row['id']
                )
            );
            $this->cart->insert($data);
            redirect('cart');
        }
    }

    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty' => $this->input->post($i . 'qty')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('cart');
    }
    public function delete($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('cart');
    }
}
/* End of file cart.php */
/* Location: ./application/controllers/cart.php */