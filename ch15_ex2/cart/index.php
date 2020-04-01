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
    header("Location:.?category_id=$category_id");
} else if ($action =='show_add_form') {
    $code = "";
    $name = "";
    $price = "";
    $categories = CategoryDB::getCategories();
    include('product_add.php');
} else if ($action == 'add_product') {


}



?>