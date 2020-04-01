<?php
require('../model/database.php');
require('../model/category.php');
require('../model/category_db.php');
require('../model/product.php');
require('../model/product_db.php');
require('../model/fields.php');
require('../model/validate.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('code');
$fields->addField('name');
$fields->addField('price', 'Use valid price please');

$action = filter_input(INPUT_POST,'action');
if ($action === NULL){
    $action = 'reset';
} else {
    $action = strtolower($action);

} else if  ($action =='show_add_form') {
    $code = "";
    $name = "";
    $price = "";
    $categories = CategoryDB::getCategories();
    include('product_add.php');
} else if ($action == 'add_product') {
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST,'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price')

        $validate->text('code',$code,true, 1, 10);
    $validate->text('name', $name);
    $validate->number('price', $price);

    if ($fields->hasErrors()) {
        $categories = CategoryDB::getCategories();
        include 'product_add.php';

    } else {
        $current_category = CategoryDB::getCategories($category_id);
        $product = new Product($current_category, $code, $name, $price);
        ProductDB::addProduct($product);

        header("Location:.?category_id=$category_id");
    }
}



?>