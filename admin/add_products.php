<?php include('include/header.php'); ?>
<?php include('../server/connection.php'); ?>
<?php 

if(isset($_POST['create_product'])){
    $product_name = $_POST['name'];
    $product_category = $_POST['category'];
    $product_description = $_POST['description'];
    $product_price = $_POST['price'];
    $product_location = $_POST['location'];
    $image_fname = $_POST['image'];

    $image = $_FILES['image']['tmp_name'];

    $image_name = $image_fname;

    move_uploaded_file($image,"..assets/img/".$image_name);

     $stmt = $conn->prepare("INSERT INTO products (product_name,product_category, product_description, product_image, product_price, product_location) 
                    VALUES(?,?,?,?,?,?)"); 

    $stmt->bind_param('ssssss',$product_name, $product_category, $product_description, $image_name, $product_price, $product_location);

    if($stmt->execute()){
        header('location: products.php?product_created=Product has been created successfully');
    }else{
        header('location: products.php?product_created=Error Occured');
    }
}





?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Products</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="add_products.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Category Name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Category</label>
                            <input type="text" name="category" placeholder="Enter Product Category" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea rows="3" name="description" type="text" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Choose product Image</label>
                            <input class="form-control" name="image" type="file" id="formFile">
                        </div>
                        <div class="col-md-6">
                            <label for="">Price</label>
                            <input type="text" name="price" placeholder="Enter Product Price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Location</label>
                            <input type="text" name="location" placeholder="Enter Location" class="form-control">
                        </div>

                    </div>
                    <div >
                    <input  type="submit" name="create_product"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>