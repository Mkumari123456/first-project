<?php
// Database connection
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

// Add menu item
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];

    // Ensure the uploads directory exists and is writable
    $uploads_dir = "uploads";
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir, 0777, true); // Create the directory if it doesn't exist
    }

    // Image upload handling
    $image = $_FILES['image']['name'];
    $target = $uploads_dir . "/" . basename($image);

    

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Insert into the database
        $query = "INSERT INTO product( id, Menu_Name, Description , Location, Price, Image) 
                  VALUES ('', '$name', '$description','$location', '$price',  '$image')";

        if ($connection->query($query) === TRUE) {
            echo "<div class='alert alert-success'>New menu item added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $query . "<br>" . $connection->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Failed to upload image.</div>";
    }
}

$connection->close();

// upload
// ./
// ../
// .././ folder count
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu Item</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Add New Menu Item</h2>
        
        <!-- Add Menu Form -->
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Menu Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="discount_price">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>

            <div class="form-group">
                <label for="image">Menu Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Add Menu Item</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


