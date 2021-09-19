<?php
class customer_model extends CI_MODEL
{
    public function getprofile($customerid)
    {
        $query = $this->db->get_where('admin_customer', array('Customer_ID' => $customerid));
        return $query->result_array();
    }
    public function getorder($customerid)
    {
        $query = $this->db->get_where('admin_order', array('Customer_ID' => $customerid));
        return $query->result();
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
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Category_Name' => 'Book'));
        return $query->result_array();
    }
    public function book1()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '1'));
        return $query->result_array();
    }
    public function book2()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '2'));
        return $query->result_array();
    }
    public function book3()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '3'));
        return $query->result_array();
    }
    public function book4()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '4'));
        return $query->result_array();
    }
    public function book5()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '5'));
        return $query->result_array();
    }
    public function book6()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '6'));
        return $query->result_array();
    }
    public function book7()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '7'));
        return $query->result_array();
    }
    public function book8()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '8'));
        return $query->result_array();
    }
    public function book9()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '9'));
        return $query->result_array();
    }
    public function book10()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '10'));
        return $query->result_array();
    }
    public function book11()
    {
        $query = $this->db->get_where('admin_book', array('Item_Status' => 'In_Stock','Grade' => '11'));
        return $query->result_array();
    }
    public function gettextile()
    {
        $query = $this->db->get_where('admin_textile', array('Item_Status' => 'In_Stock','Category_Name' => 'Textile'));
        return $query->result_array();
    }
    
    // view
    public function wishlist()
    {
        $query = $this->db->get_where('customer_wishlist_view', array('Customer_ID' =>  $this->session->userdata('Id')));
        return $query->result_array();
    }
    // table
    public function wish($data)
    {

        $dataset = array(
            "Item_ID" => $data["itemid"],
            "Customer_ID" => $data["userid"]
        );
        return $r = $this->db->insert('customer_wishlist', $dataset);
    }
    // table
    public function deletewish($data)
    {
        $this->db->where('Item_ID', $data['itemid']);
        $this->db->where('Customer_ID', $data['userid']);

        return $this->db->delete('customer_wishlist');

    }
    public function addtocart($data)
    {

        $dataset = array(
            "Item_ID" => $data["itemid"],
            "Customer_ID" => $data["userid"],
            "Order_Item_Unit_Price" => $data['unitprice'],
            "Order_Item_Status" => "inprogress"
        );
        return $r = $this->db->insert('order_cart_item', $dataset);
    }
    public function cart()
    {
        $query = $this->db->get_where('admin_order_item', array('Customer_ID' =>  $this->session->userdata('Id')));
        return $query->result_array();
    }
    public function deletecart($data)
    {
        $this->db->where('Item_ID', $data['itemid']);
        $this->db->where('Customer_ID', $data['userid']);

        return $this->db->delete('order_cart_item');

    }
    public function changequantity($dataset)
    {
        $itemdata = [
            'Order_Qty' => $dataset['quantity']
        ];
        $this->db->where('Item_ID', $dataset['itemid']);
        $this->db->where('Customer_ID', $dataset['userid']);
        return $this->db->update('order_cart_item', $itemdata);
    }
    public function totalcartprice($id){
        $this->db->select_sum('Total_Price');
        $this->db->from('admin_order_item');
        $this->db->where('Customer_ID', $id);
        $this->db->where('Order_Item_Status', 'inprogress');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function buynow($data){
        $userid = $data['userid'];
        $itemid = $data['itemid'];
        $quantity = $data['quantity'];
        $unitprice = $data['unit'];
        try{
            $result = $this->db->query("CALL direct_checkout(" .$userid . ", " . $itemid . " , " . $quantity . " , " . $unitprice . ")");
		    return true;

        }catch(Exception $e){
            return false;

        }
        
		
    }
    public function getcheckout(){
        $query = $this->db->get_where('checkout',array('Customer_ID' => $this->session->userdata('Id') , 'Checkout_Status' => 'inprogress'));
        return $query->result_array();
    }
    
    public function getcheckoutdetails($checkoutid){
        $query = $this->db->get_where('admin_order_item',array('Checkout_ID' => $checkoutid ));
        return $query->result_array();
    }
    public function cancelcheckout($id){
        $query = $this->db->query("CALL cancel_checkout(".$id.", ".'@f'.")");
        return true;
    }
    public function insertcheckout($id){
        $query = $this->db->query("CALL insert_checkout(".$id.", ".'@f'.")");
        return true;
    }

    public function delivery_registration($data, $image1, $image2)
    {

        $dataset = array(
            "Deliver_Name" => $data["delivername"],
            "License_Number" => $data["licensenumber"],
            "Province_ID" => $data["province"],
            "District_ID" => $data['district'],
            "City_ID" => $data['city'],
            "Deliver_Email" => $data["driveremail"],
            "Password" => $data["password"],
            "Vehicle" => $data["vehicle"],
            "Vehicle_Model" => $data["vehiclemodel"],
            "Vehicle_Reg_No" => $data["vehiclereg"],
            "License_Pic" => $image1,
            "Drivebook_Pic" => $image2
        );
        return $r = $this->db->insert('deliveryboy', $dataset);

        
    }
    public function placeorder($id){
        $dataset = array(
            "Checkout_ID" => $id,
            "Dispatched" => "No",
            "Delivered" => "No",
            "Completed" => "No"
            
        );
        $query = $this->db->insert('item_order', $dataset);
        if($query){
            $dataset2 = array(
                
                "Checkout_Status" => "complete"
                
            );
            $this->db->where('Checkout_ID',$id);
            return $query2 = $this->db->update('checkout', $dataset2);
        }
    }
    
    

}
