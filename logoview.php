<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch all menu items
$query = "SELECT * FROM logo ";
$result = $connection->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
        </nav>

        <!-- Sidebar + Content -->
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">Dashboard</a>
                        </li>

                        <!-- Menu Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" href="menu_add.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Add Menu Item</a>
                        </li>

                        <!-- Gallery Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" href="gallery_add.php">Gallery</a>
                        </li>


                        <!-- Login Option -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2>Menu Items</h2>

                <!-- Display Success Message -->
                <?php if (isset($_GET['message']) && $_GET['message'] == 'success'): ?>
                    <div class="alert alert-success">New menu item added successfully!</div>
                <?php endif; ?>

                <!-- Table to Display Menu Items -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>logo Image</th>
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
                                    <td><img src="uploads/<?= $row['logo']; ?>" alt="Product Image" height="50"></td>
                                
                                    <td>
                                        <a href="logoedit.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$connection->close();
?>