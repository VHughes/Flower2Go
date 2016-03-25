<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        foreach($rows as $row) {
            
            $sku = $row['SKU'];
            $title = $row['title'];
            $price = $row['price'];
            $desc = $row['description'];
            $qty = $row['quantity'];
            $html .= "<tr id='ShoppingCartTr'>
                        <td data-sku-title='$sku'>$title</td>
                        <td data-sku-desc='$sku'>$desc</td>
                        <td><input data-sku-qty='$sku' type='number' value='1' min='1' max='10' step='1'/></td>
                        <td data-sku-price='$sku'>$price</td>
                        <td data-sku-qty='$sku'>$qty</td>
                        <td><input id='addBut' data-sku-add='$sku' type='button' value='+'/></td>
                      </tr>";
        }
        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
