<?php

require_once('../model/DBConnector.php');

//$um = new ShoppingCartManager();

// Facade
class ShoppingCartManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function startCart() {
        $sql = "INSERT INTO cart (state, total) values ('started', 0.00)";
        $id = $this->db->getTransactionID($sql);
        // return id of the cart that was started
        return $id;
    }

    public function cancelCart($id) {
        $sql = "UPDATE cart SET state = 'cancelled' WHERE ID = $id";
        $count = $this->db->affectRows($sql);
        return $count;
    }

    public function checkoutCart($id) {
        $sql = "UPDATE cart SET state = 'checked out' WHERE ID = $id";
        $count = $this->db->affectRows($sql);
        return $count;
    }

    public function viewAllProducts(){
        $sql = "SELECT * FROM products";
        $rows = $this->db->query($sql);
        if(count($rows) == 1) {
            return $rows[0];
        }
        return $rows;
    
    }
    
    
    public function addItemsToCart() {
$items = json_decode($_POST['items'], true);
        foreach($items as $item) {
            $sku = $item['sku'];
            $qty = $item['qty'];

            // need to look up the ID of the product based on the SKU
            $sql = "SELECT ID FROM product WHERE SKU = '$sku'";
            $rows = $this->db->query($sql);
            
    }
    }
    public function updateAdminProducts(){
        
        $title = $_POST['newtitle'];
        $sku = $_POST['newsku'];
        $desc = $_POST['newdesc'];
        $price = $_POST['newprice'];
        $qty = $_POST['newqty']; 
        $id = $_POST['id'];
        
        $sql = "UPDATE products SET title='$title', description='$desc', sku='$sku', price='$price', quantity='$qty' WHERE id= $id";
        $count = $this->db->affectRows($sql);
        return $count;
        }
    
    public function deleteAdminProducts(){
        $id = $_POST['id'];
        $sql = "DELETE FROM products WHERE id = $id";
        $rows = $this->db->affectRows($sql);
        return $rows;
    
    
    
    }
    
    
    public function adminAddItemsToCart(){
 
        $title = $_POST['title'];
        $sku = $_POST['sku'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        
  
        
        $sql = "INSERT INTO products (title, quantity, price, description, SKU)
                VALUES ('$title', '$qty', '$price', '$desc', '$sku')";
            $rows = $this->db->affectRows($sql);
        return $rows;
        
    //VALUES ($product_id, $cart_id, $qty)";
    }

}

?>

