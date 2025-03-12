<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch the product details to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM contact_form WHERE id = $id";
    $result = $connection->query($query);
    $contact_form = $result->fetch_assoc();
}

// Update the product details
if (isset($_POST['update'])) {
    $f_Fname = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $category_name = $_POST['category_name'];
    $menu_name = $_POST['menu_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $price = $_POST['price'];
    $image = $product['image'];
    // Check if new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
    // Update query
    $update_query = "UPDATE contact_form SET f_name='$f_name', l_name='$l_name', category_name='$category_name',
     menu_name='$menu_name',phone='$phone',email='$email',price='$price',image='$image' WHERE id=$id";

    if ($connection->query($update_query) === TRUE) {
        header("Location: dashboard.php?message=updated");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
}
$connection->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>User Edit Product</h2>
        <form action="user_edit.php?id=<?= $contact_form['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="f_name">First name</label>
            <input type="text" class="form-control" id="f_name" name="f_name" value="<?= $contact_form['f_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="l_name">Last name</label>
                <input type="text" class="form-control" id="l_name" name="l_name" value="<?= $contact_form['l_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="category_name">Categogy Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $contact_form['category_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="menu name">Menu Name</label>
                <input type="text" class="form-control" id="menu name" name="menu name" value="<?= $contact_form['menu_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone"> Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="<?= $contact_form['phone']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $contact_form['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= $contact_form['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="image"> Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="uploads/<?= $contact_form['image']; ?>" alt="Image" height="100">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Product</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
