<?php
class Product {
    public $product_id;
    public $name;
    public $price;
    public $family;
    public $longevity;
    public $best_for;
    public $description;
    public $image_url;
    public $stock_quantity;
    
    public function __construct($id, $name, $price, $family, $longevity, $best_for, $desc, $image, $stock) {
        $this->product_id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->family = $family;
        $this->longevity = $longevity;
        $this->best_for = $best_for;
        $this->description = $desc;
        $this->image_url = $image;
        $this->stock_quantity = $stock;
    }
    
    public function displayAsTableRow() {
        return "<tr>
            <td>{$this->product_id}</td>
            <td>{$this->name}</td>
            <td>{$this->price} OMR</td>
            <td>{$this->family}</td>
            <td>{$this->stock_quantity}</td>
        </tr>";
    }
}

function displayProductsTable($productsArray) {
    $html = "<table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Family</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>";
    
    foreach($productsArray as $product) {
        $html .= $product->displayAsTableRow();
    }
    
    $html .= "</tbody></table>";
    return $html;
}
?>