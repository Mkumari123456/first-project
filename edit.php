<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch the product details to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id = $id";
    $result = $connection->query($query);
    $product = $result->fetch_assoc();
}

// Update the product details
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    // echo $location;
    // exit;
    $price = $_POST['price'];
    $image = $product['image'];

    // Check if new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    // Update query
    $update_query = "UPDATE product SET Menu_Name='$name', description='$description', Location='$location',
     price='$price',Image='$image' WHERE id=$id";

    if ($connection->query($update_query) === TRUE) {
        header("Location: dashboard.php?message=updated");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Edit Product</h2>
        <form action="edit.php?id=<?= $product['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $product['Menu_Name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required><?= $product['Description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="Location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?= $product['Location']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= $product['Price']; ?>" required>
            </div>
         
            <div class="form-group">
                <label for="image"> Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="uploads/<?= $product['Image']; ?>" alt="Product Image" height="100">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Product</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
