<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch all menu items
$query = "SELECT * FROM contact_form ";
$result = $connection->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- Optional: You can add Bootstrap for table styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main role="main" class="container">
        <h2>Data Contact Form</h2>

        <!-- Table to Display Menu Items -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Category Name</th>
                    <th>Menu Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        if ($result->num_rows > 0) {
                            $count = 1;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= $count++; ?></td>
                                    <td><?= $row['f_name']; ?></td>
                                    <td><?= $row['l_name']; ?></td>
                                    <td><?= $row['category_name']; ?></td>
                                    <td><?= $row['menu_name']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td>$<?= $row['price']; ?></td>
                                    <td><img src="uploads/<?= $row['image']; ?>" alt="Image" height="50"></td>
                                    <td>
                                        <a href="user_edit.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="user_delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>

                <!-- Example row with sample data -->
                <tr>
                    
                </tr>
                <tr>
                    
                </tr>
                <!-- Add more rows as necessary -->
            </tbody>
        </table>
    </main>

    <!-- Optional: Bootstrap JS for table functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
