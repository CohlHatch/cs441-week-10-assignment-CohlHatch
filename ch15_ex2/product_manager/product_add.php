<?php include '../view/header.php'; ?>

<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category->getID(); ?>">
                <?php echo $category->getName(); ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Code:</label>
        <input type="input" name="code">
        <?php value="echo htmlspecialchars($code);?">
        echo $fields->getField('code')getHTML();?>
        <br>

        <label>Name:</label>
        <input type="input" name="name">
       <?php value="echo htmlspecialchars($name);?">
        echo $fields->getField('name')getHTML();?>
        <br>

        <label>List Price:</label>
        <input type="input" name="price">
        <?php value="echo htmlspecialchars($price);?">
        echo $fields->getField('price')getHTML();?>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product">
        <br>
    </form>
    <p><a href="index.php?action=list_products">View Product List</a></p>

</main>
 <?php include '../view/footer.php'; ?>