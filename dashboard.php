<?php
$connection = new mysqli("localhost", "root", "", "project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch all menu items
// $query = "SELECT * FROM menu";
// $result = $connection->query($query);

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

                        <!-- Gallery Dropdown -->
                        <li class="nav-item">
                            <a class="nav-link" href="menu_add.php?add_gallery=1">Gallery</a>
                        </li>

                        <!-- Login Option -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="logo.php">Logo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logoview.php">Logo View</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- 4 Boxes Section -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Box 1</h5>
                                <p class="card-text">Content for Box 1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-secondary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Box 2</h5>
                                <p class="card-text">Content for Box 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Box 3</h5>
                                <p class="card-text">Content for Box 3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Box 4</h5>
                                <p class="card-text">Content for Box 4.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
