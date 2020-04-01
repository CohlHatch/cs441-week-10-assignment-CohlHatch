<?php
require_once('model/fields.php');
require_once('model/validate.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('code');
$fields->addField('name');
$fields->addField('price');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}
switch ($action)
?>