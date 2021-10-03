<?php
class customer_model extends CI_MODEL
{
    public function getprofile($customerid)
    {
        $query = $this->db->get_where('admin_customer', array('Customer_ID' => $customerid));
        return $query->result_array();
    }

    public function editprofile($dataset)
    {
        $itemdata = [
            'Address_Line_1' => $dataset['address1'],
            'Address_Line_2' => $dataset['address2'],
            'Province_ID' => $dataset['province'],
            'District_ID' => $dataset['district'],
            'City_ID' => $dataset['city'],
            'Mobile' => $dataset['mobile']
        ];
        $this->db->where('Customer_ID', $dataset['id']);
        return $this->db->update('customer', $itemdata);
    }
    public function customer_registration($data, $image)
    {

        $dataset = array(
            "Customer_Name" => $data["customerName"],
            "Address_Line_1" => $data["deliveryAddress"],
            "Email" => $data["emailAddress"],
            "Province_ID" => $data["province"],
            "District_ID" => $data['district'],
            "City_ID" => $data['city'],
            "Mobile" => $data["mobile"],
            "Image_Path" => $image
        );
        $r = $this->db->insert('customer', $dataset);
        if ($r) {
            $dataset2 = array(
                "Email" => $data['emailAddress'],
                "Password" => md5(sha1(md5($data['password']))),
                "Role" => "customer"
            );
            return $res = $this->db->insert('logins', $dataset2);
        }
    }
    public function getbook()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Category_Name' => 'Book'));
        return $query->result_array();
    }
    public function book1()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '1'));
        return $query->result_array();
    }
    public function book2()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '2'));
        return $query->result_array();
    }
    public function book3()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '3'));
        return $query->result_array();
    }
    public function book4()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '4'));
        return $query->result_array();
    }
    public function book5()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '5'));
        return $query->result_array();
    }
    public function book6()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '6'));
        return $query->result_array();
    }
    public function book7()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '7'));
        return $query->result_array();
    }
    public function book8()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '8'));
        return $query->result_array();
    }
    public function book9()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '9'));
        return $query->result_array();
    }
    public function book10()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '10'));
        return $query->result_array();
    }
    public function book11()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Grade' => '11'));
        return $query->result_array();
    }
    public function getmobile()
    {
        $this->db->order_by('Time', 'DESC');
        $query = $this->db->get_where('admin_mobile', array('Item_Status' => 'In_Stock', 'Category_Name' => 'Mobile'));
        return $query->result_array();
    }
    public function getsearch($id)
    {
        $st_name = $id;

        $conditions = array();
        if (!empty($st_name)) {

            // $conditions[] = 'Brand_Name  LIKE "%' . $st_name . '%"';
            // $conditions[] = 'Model_Name  LIKE "%' . $st_name . '%"';

            // $sqlStatement = "SELECT * FROM admin_mobile WHERE " . implode(' OR ', $conditions) . " ORDER BY Item_ID";
            // $result = $this->db->query($sqlStatement)->result_array();

            $this->db->from('admin_mobile');
            $this->db->like('Brand_Name', $st_name);
            $query = $this->db->get();
            if ($query->num_rows() >= 1) {
                return $query->result_array();
            } else {
                $this->db->from('admin_mobile');
                $this->db->like('Model_Name', $st_name);
                $query2 = $this->db->get();
                if ($query2->num_rows() == 0) {
                    return "No Results";
                } else {
                    return $query2->result_array();
                }
            }
        } else {
            $result = '';
        }
    }
    // public function gettextile()
    // {
    //     $query = $this->db->get_where('admin_textile', array('Item_Status' => 'In_Stock','Category_Name' => 'Textile'));
    //     return $query->result_array();
    // }





}
