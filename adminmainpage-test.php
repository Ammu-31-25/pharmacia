<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacia: Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="/snippets/navbars-offcanvas/navbars-offcanvas.css" rel="stylesheet">
</head>

<body>
    <main>
        <!-- navigation bar stuff -->
        <nav class="navbar navbar-light bg-primary" style="background-color:#003366;"
            aria-label="Dark offcanvas navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="heading-2" style="color:aliceblue;">PHARMACIA</h1>

                <a href="logout.php" style="text-decoration: none;color:azure;" class="lead">Logout(Logged in as
                    Admin)</a>

                <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasNavbarDark"
                    aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">PHARMACIA</h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-theme="dark"
                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="adminmainpage.php">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Inventory
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New Medicine</a></li>
                                    <li><a class="dropdown-item" href="">Manage Inventory</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Suppliers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New Supplier</a></li>
                                    <li><a class="dropdown-item" href="">Manage Suppliers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Stock Purchase
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New Purchase</a></li>
                                    <li><a class="dropdown-item" href="">Manage Purchases</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Employees
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New Employee</a></li>
                                    <li><a class="dropdown-item" href="">Manage Employees</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Customers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New Customer</a></li>
                                    <li><a class="dropdown-item" href="">Manage Customers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Sales Invoice Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Sold Products Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Add New Sale</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Reports
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Medicines - Low Stock</a></li>
                                    <li><a class="dropdown-item" href="">Medicines - Soon to Expire</a></li>
                                    <li><a class="dropdown-item" href="">Transaction reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- actual content goes in the following div -->

        <div class="container my-5 vh-80">
            <p class="lead">Admin Dashboard</p>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor"
                                class="bi bi-cart-plus card-img-top" viewBox="0 0 16 16">
                                <path
                                    d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                                <path
                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="inventory.png" class="card-img-top" alt="..."> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor"
                                class="bi bi-list-ul card-img-top" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="carticon1.png" class="card-img-top" alt="..."> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor"
                                class="bi bi-person-lines-fill card-img-top" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="carticon1.png" class="card-img-top" alt="..."> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor"
                                class="bi bi-person-lines-fill card-img-top" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="carticon1.png" class="card-img-top" alt="..."> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor"
                                class="bi bi-person-lines-fill card-img-top" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>