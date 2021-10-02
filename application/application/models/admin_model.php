<?php
class admin_model extends CI_MODEL
{
    public function addnewbook($data, $image)
    {
        $dataset = array(
            "Item_Name" => $data["bookname"],
            "Grade" => $data['grade'],
            "ISBN" => $data['isbn'],
            "Book_Author" => $data['author'],
            "Item_Status" => "In_Stock",
            "Category_Name" => "Book",
            "Price" => $data["bookprice"],
            "Quantity" => $data['bookqty'],
            "Item_Image_Path" => $image,
            "BMore" => $data["bookmore"],
            "BPages" => $data["bookpage"],
            "BPublication" => $data["bookpub"]
        );
        return $r = $this->db->insert('admin_book', $dataset);
        
    }
    public function addnewtextile($data, $image)
    {
        $dataset = array(
            "Item_Name" => $data["tname"],
            "Item_Status" => "In_Stock",
            "Category_Name" => "Textile",
            "Price" => $data["tprice"],
            "Quantity" => $data['tqty'],
            "Item_Image_Path" => $image,
            "BMore" => $data["tmore"]
        );
        return $r = $this->db->insert('admin_textile', $dataset);
        
    }
    public function removebook($id)
    {
        $itemdata = [
            'Item_Status' => 'Out_Of_Stock'
        ];
        $this->db->where('Item_ID', $id);
        return $this->db->update('admin_book', $itemdata);
    }
    public function removetextile($id)
    {
        $itemdata = [
            'Item_Status' => 'Out_Of_Stock'
        ];
        $this->db->where('Item_ID', $id);
        return $this->db->update('admin_textile', $itemdata);
    }
    public function removemobile($id)
    {
        $itemdata = [
            'Item_Status' => 'Out_Of_Stock'
        ];
        $this->db->where('Item_ID', $id);
        return $this->db->update('admin_mobile', $itemdata);
    }









    public function itemdata()
    {
        // $query = $this->db->query("SELECT * FROM admin_item");
        $query = $this->db->get('admin_item');
        return $query->result();
    }
    public function orderdata()
    {
        // $query = $this->db->query("SELECT * FROM admin_item");
        $query = $this->db->get('admin_order');
        return $query->result();
    }
    public function supplydata()
    {
        // $query = $this->db->query("SELECT * FROM admin_item");
        $query = $this->db->get('admin_supplies');
        return $query->result();
    }
    public function editget($id)
    {
        $query = $this->db->get_where('admin_item', array('Item_ID' => $id));
        return $query->result();
    }
    public function editing($editData)
    {
        $itemdata = [
            'Wastage_Provision' => $editData['wastage'],
            'Item_Status' => $editData['status'],

        ];
        $this->db->where('Item_ID', $editData['Item_ID']);
        $query1 = $this->db->update('item', $itemdata);

        $itemprice = [
            'Price' => $editData['price'],
            'Price_Date' => date("Y/m/d"),
            'Item_ID' => $editData['Item_ID']
        ];
        $query2 = $this->db->insert('item_price', $itemprice);


        $itemquantity = [
            'Quantity' => $editData['qty'],
            'Quantity_Date' => date("Y/m/d"),
            'Item_ID' => $editData['Item_ID']
        ];
        $query3 = $this->db->insert('item_quantity', $itemquantity);
        if ($query1 and $query2 and $query3) {
            return $query3;
        }
    }

    public function addnew($newdata)
    {
        $category_name = $newdata['Category_Name'];
        $category_type = '';
        if ($category_name == 'Vegetables') {
            $category_type = 1;
        } else {
            $category_type = 2;
        }


        $itemdata = [
            'Item_Name' => $newdata['Item_Name'],
            'Wastage_Provision' => $newdata['Wastage_Provision'],
            'Item_Status' => $newdata['Item_Status'],
            'Category_ID' => $category_type
        ];
        $query1 = $this->db->insert('item', $itemdata);
        $this->db->select('Item_ID');
        $querynew = $this->db->get_where('item', array('Item_Name' => $newdata['Item_Name']));
        $item_details = $querynew->result_array();


        // =========================================
        $itemprice = [
            'Price' => $newdata['Price'],
            'Price_Date' => date("Y/m/d"),
            'Item_ID' => $item_details[0]['Item_ID']
        ];
        $query2 = $this->db->insert('item_price', $itemprice);

        // =========================================
        $itemquantity = [
            'Quantity' => $newdata['Quantity'],
            'Quantity_Date' => date("Y/m/d"),
            'Item_ID' => $item_details[0]['Item_ID']
        ];
        $query3 = $this->db->insert('item_quantity', $itemquantity);
        if ($query1 and $query2 and $query3) {
            return $query3;
        }
    }



    // ============================================
    // Get customer data to admin
    public function customerdata()
    {
        // $query = $this->db->query("SELECT * FROM admin_customer");
        $query = $this->db->get('admin_customer');
        return $query->result();
    }


    // ============================================
    // Get farmer data to admin
    public function farmerdata()
    {
        // $query = $this->db->query("SELECT * FROM admin_farmer");
        $query = $this->db->get('admin_famer');
        return $query->result();
    }







    // ===================================================
    // Order Table
    public function order_moreinfo($id)
    {  
        //  return $id;
        $query = $this->db->get_where('admin_order_item', array('Checkout_ID' => $id));
        return $query1 = $query->result_array();
    }
    // public function order_moreinfo2($id)
    // {
    //     $query2 = $this->db->get_where('admin_order_item', array('Checkout_ID' => $id));
    //     return $query3 = $query2->result_array();
    // }
    public function set_delivered_status($data)
    {
        $itemdata = [
            'Delivered' => $data['value']
        ];
        $this->db->where('Item_Order_ID', $data['id']);
        $query = $this->db->update('item_order', $itemdata);
    }
    public function set_dispatched_status($data)
    {
        $itemdata = [
            'Dispatched' => $data['value']
        ];
        $this->db->where('Item_Order_ID', $data['id']);
        $query = $this->db->update('item_order', $itemdata);
    }
    public function set_completed_status($data)
    {
        $itemdata = [
            'Completed' => $data['value']
        ];
        $this->db->where('Item_Order_ID', $data['id']);
        $query = $this->db->update('item_order', $itemdata);
    }

    // =============================================
    // Supply Table

    public function addsupplies()
    {
        $query = $this->db->get('admin_farmer_item');
        return $query->result_array();
    }
    public function getitem($farmerid)
    {
        $query = $this->db->get_where('admin_farmer_item',array('Farmer_ID' => $farmerid));
        return $query->result_array();
    }
    public function getitems()
    {
        $query = $this->db->get('item');
        return $query->result_array();
    }
    public function getsupply(){
        $query = $this->db->get('admin_supplies');
        return $query->result_array();
    }
    public function supplypayment($data)
    {
        $a = $data['datee'];
        $b = $data['item'];
        $c = $data['quantity'];
        $d = $data['payment'];

        $result = $this->db->query("CALL insert_supply(" .$a . ", " . $b . " , " . $c . " , " . $d . " , " . '@f' .")");
		
		if ($result) {
			return true;
		}else{
            return false;

        }
        
		

        // $itemdata = [
        //     'Payment_Due_Amount' => $data['payment']
        // ];
        // return $query3 = $this->db->insert('supply_payment', $itemdata);
    }
    public function get_last_id()
    {
        $query = $this->db->query("SELECT Supply_Payment_ID FROM supply_payment ORDER BY Supply_Payment_ID DESC LIMIT 1");
        return $query->result_array();
    }
    public function supplyform($newdata, $id)
    {
        $itemdata = [
            'Supplied_Date' => $newdata['date'],
            'Farm_Farmer_Item_ID' => $newdata['farmer'],
            'Quantity' => $newdata['quantity'],
            'Supply_Payment_ID' => $id[0]['Supply_Payment_ID']

        ];
        $query3 = $this->db->insert('supply', $itemdata);
    }
    public function getsupplierdetails($supplyref)
    {
        $query = $this->db->get_where('admin_supplies', array("Supply_ID" => $supplyref));
        return $query->result_array();
    }
    public function addsupplypayment($data){
        $status ='';
        $due = '';
        if($data['dueamaount'] <= $data['paid']){
            $due = $data['dueamount'] - $data['paid'];

        }else{
            $due = $data['paid'] - $data['dueamount'];
        }

        if($data['dueamount'] > $data['paid']){
            $status = 'inprogress';
        }else{
            $status = 'complete';
        }
        $itemdata = [
            'Payment_Date' =>$data['date'],
            'Payment_Due_Amount' => $due,
            'Payment_Amount' => $data['paid'],
            'Payment_Status' => $status
        ];
        $this->db->where('Supply_Payment_ID', $data['paymentid']);
        $query = $this->db->update('supply_payment', $itemdata);

        
    }
    public function getchartdata(){
        $query = $this->db->get_where('checkout', array('Checkout_Status' => 'complete'));
        return $query->result();
    }

}
