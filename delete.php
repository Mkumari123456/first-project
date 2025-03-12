<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if 'id' is provided to delete the product
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the image name to delete from the server
    $query = "SELECT image FROM product WHERE id = $id";
    $result = $connection->query($query);
    $product = $result->fetch_assoc();

    // Delete the product image from the 'uploads' folder
    if (file_exists("uploads/" . $row['image'])) {
        unlink("uploads/" . $row['image']);
    }

    // Delete the product from the database
    $delete_query = "DELETE FROM product WHERE id = $id";
    
    if ($connection->query($delete_query) === TRUE) {
        header("Location: dashboard.php?message=deleted");
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}

$connection->close();
?>
