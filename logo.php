<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT * FROM logo ";
$result = $connection->query($query);

?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
    <h1>Upload Logo</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">Logo</label>
        <input type="file" name="image" id="image" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<?php

if (isset($_POST['submit'])) {

    if (!empty($_FILES['image']['name'])) {
        // Get the image details
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);

        // Validate the file type (Only allow images)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['image']['type'], $allowedTypes)) {
            echo "Only JPG, PNG, and GIF files are allowed!";
            exit;
        }

        // Validate file size (Limit: 2MB)
        if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
            echo "File size exceeds the 2MB limit.";
            exit;
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Image successfully uploaded
            echo "Image uploaded successfully!";

            // Insert the image path into the database
            $Insert_query = "INSERT INTO logo (logo) VALUES ('$image')";

            if ($connection->query($Insert_query) === TRUE) {
                echo "Record added successfully!";
            } else {
                echo "Error: " . $connection->error;
            }
        } else {
            // Error in uploading
            echo "Error in uploading image!";
        }
    } else {
        echo "Please select an image to upload.";
    }
}
?>


    </body>
    </html>
    
