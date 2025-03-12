<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch the product details to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM logo WHERE id = $id";
    $result = $connection->query($query);
    $product = $result->fetch_assoc(); // Changed from $contact_form to $product
}

// Update the product details
if (isset($_POST['update'])) {
    $image = $product['logo'];  // Keep the old image name initially
    
    // Check if new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        // Get the new image name and path
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);

        // Move the uploaded file to the 'uploads' directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Image successfully uploaded
        } else {
            echo "Error uploading file.";
        }
    }

    // Update the logo in the database
    $update_query = "UPDATE logo SET logo='$image' WHERE id=$id";

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
                <label for="image"> Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                
                <?php if (!empty($product['logo']) && file_exists('uploads/' . $product['logo'])): ?>
                    <img src="uploads/<?= $product['logo']; ?>" alt="Product Image" height="100">
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Product</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>

