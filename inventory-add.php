<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacia: Inventory Managment- Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="snippets/navbars-offcanvas/navbars-offcanvas.css" rel="stylesheet">
</head>

<body>
    <main>
        <!-- navigation bar stuff -->
        <nav class="navbar navbar-light bg-primary" style="background-color:#003366;" aria-label="Dark offcanvas navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="heading-2" style="color:aliceblue;">PHARMACIA</h1>

                <a href="logout.php" style="text-decoration: none;color:azure;" class="lead">Logout(Logged in as
                    Admin)</a>

                <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">PHARMACIA</h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-theme="dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="adminmainpage.php">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Inventory
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="inventory-add.php">Add New Medicine</a></li>
                                    <li><a class="dropdown-item" href="inventory-view.php">Manage Inventory</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Suppliers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="supplier-add.php">Add New Supplier</a></li>
                                    <li><a class="dropdown-item" href="supplier-view.php">Manage Suppliers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Stock Purchase
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="purchase-add.php">Add New Purchase</a></li>
                                    <li><a class="dropdown-item" href="purchase-view.php">Manage Purchases</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Employees
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="employee-add.php">Add New Employee</a></li>
                                    <li><a class="dropdown-item" href="employee-view.php">Manage Employees</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Customers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="customer-add.php">Add New Customer</a></li>
                                    <li><a class="dropdown-item" href="customer-view.php">Manage Customers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sales-view.php">View Sales Invoice Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="salesitems-view.php">View Sold Products Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pos1.php">Add New Sale</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reports
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="stockreport.php">Medicines - Low Stock</a></li>
                                    <li><a class="dropdown-item" href="expiryreport.php">Medicines - Soon to Expire</a>
                                    </li>
                                    <li><a class="dropdown-item" href="salesreport.php">Transaction reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- actual content goes in the following div -->

        <div class="container my-5">
            <p class="lead">ADD MEDICINE DETAILS</p>
        </div>
       <div class="container">
       <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="container bg-light">
                <!-- First Row -->
                <div class="d-flex">
                    <div class="col-6 m-1 p-1">
                        <label for="medid">Medicine ID</label>
                        <input type="number" class="form-control" placeholder="ID" name="medid" required>
                    </div>
                    <div class="col-6 m-1 p-1">
                        <label for="medname">Medicine Name:</label>
                        <input type="text" name="medname" class="form-control" placeholder="">
                    </div>
                </div>
                <!-- Second Row -->
                <div class="d-flex mb-3">
                    <div class="col-6 m-1 p-1">
                        <label for="qty">Quantity:</label>
                        <input type="number" name="qty" class="form-control" placeholder="No. of Units" required>
                    </div>
                    <div class="col-6 m-1 p-1">
                        <label for="cat">Category</label>
                        <!-- <input type="text" class="form-control" placeholder="Input 4"> -->
                        <select name="cat" id="cat" class="form-select" required>
                            <option selected disabled>Click to choose</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Capsule">Capsule</option>
                            <option value="Syrup">Syrup</option>
                        </select>
                    </div>
                </div>
                <!-- Third Row -->
                <div class="d-flex">
                    <div class="col-6 m-1 p-1">
                        <label for="sp">Price:</label>
                        <input type="number" step="0.01" name="sp" class="form-control" placeholder="$">
                    </div>
                    <div class="col-6 m-1 p-1">
                        <label for="loc">Location:</label>
                        <input type="text" name="loc" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-12 m-4 p-1 text-center"><input type="submit" name="add" value="Add Medicine"
                            class="btn btn-primary"></div>
                </div>
            </div>
        </form>
        <?php
        include "config.php";
        if (isset($_POST['add'])) {
            $id = mysqli_real_escape_string($conn, $_REQUEST['medid']);
            $name = mysqli_real_escape_string($conn, $_REQUEST['medname']);
            $qty = mysqli_real_escape_string(
                $conn,
                $_REQUEST['qty']
            );
            $category = mysqli_real_escape_string(
                $conn,
                $_REQUEST['cat']
            );
            $sprice = mysqli_real_escape_string($conn, $_REQUEST['sp']);
            $location =
                mysqli_real_escape_string($conn, $_REQUEST['loc']);
            $sql = "INSERT INTO meds VALUES ($id, '$name',
        $qty,'$category',$sprice, '$location')";
            if (
                mysqli_query(
                    $conn,
                    $sql
                )
            ) {
                echo "
        <p style='font-size:8;'>Medicine details successfully added!</p>";
            } else {
                echo "
        <p style='font-size:8; color:red;'>Error! Check details.</p>";
            }
        }
        $conn->close(); ?>
       </div>
</main>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>