<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacia: Purchases</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="table1.css">
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
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
          <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
          <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
      </svg>
  
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
              Light
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
              Dark
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
        </ul>
      </div>
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

                <div class="offcanvas offcanvas-start text-bg-auto" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">PHARMACIA</h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-theme="dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="adminmainpage.php">Dashboard</a>
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
                                    <li><a class="dropdown-item active" href="purchase-view.php">Manage Purchases</a></li>
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
        <div class="container my-5 vh-80">
            <p class="lead">STOCK PURCHASE LIST</p>
        </div>
        <div class="container text-center">
            <table id="table1">
                <tr>
                    <th>Purchase ID</th>
                    <th>Supplier ID</th>
                    <th>Medicine ID</th>
                    <th>Medicine Name</th>
                    <th>Quantity</th>
                    <th>Cost of Purchase</th>
                    <th>Date of Purchase</th>
                    <th>Manufacturing Date</th>
                    <th>Expiry Date</th>
                    <th>Action</th>
                </tr>
                
            <?php
        
            include "config.php";
            $sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date,mfg_date,exp_date FROM purchase";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                
                $sql1="SELECT med_name from meds where med_id=".$row["med_id"]."";
                $result1 = $conn->query($sql1);
                
                while($row1 = $result1->fetch_assoc()) {
        
                    echo "<tr>";
                        echo "<td>" . $row["p_id"]. "</td>";
                        echo "<td>" . $row["sup_id"]. "</td>";
                        echo "<td>" . $row["med_id"]. "</td>";
                        echo "<td>" . $row1["med_name"] . "</td>";
                        echo "<td>" . $row["p_qty"]. "</td>";
                        echo "<td>" . $row["p_cost"]. "</td>";
                        echo "<td>" . $row["pur_date"]. "</td>";
                        echo "<td>" . $row["mfg_date"] . "</td>";
                        echo "<td>" . $row["exp_date"]. "</td>";
                        echo "<td>";		 
                        echo "<a class='btn btn-info mx-1' href=purchase-update.php?pid=".$row['p_id']."&sid=".$row['sup_id']."&mid=".$row['med_id'].">Edit</a>";
                        echo "<a class='btn btn-danger mx-1' href=purchase-delete.php?pid=".$row['p_id']."&sid=".$row['sup_id']."&mid=".$row['med_id'].">Delete</a>";
                        echo "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        } 
            $conn->close();
            
            ?>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>