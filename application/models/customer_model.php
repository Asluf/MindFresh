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
    {   $this->db->order_by('Item_ID', 'DESC');
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock', 'Category_Name' => 'Book'));
        return $query->result_array();
    }
    public function getmore($id)
    {   
        // $this->db->order_by('Item_ID', 'DESC');
        $query = $this->db->get_where('admin_book', array('Item_ID' => $id,'Item_Status' => 'In_Stock', 'Category_Name' => 'Book'));
        return $query->result_array();
    }
    
    
    // public function gettextile()
    // {
    //     $query = $this->db->get_where('admin_textile', array('Item_Status' => 'In_Stock','Category_Name' => 'Textile'));
    //     return $query->result_array();
    // }





}
