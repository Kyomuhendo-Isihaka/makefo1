<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makevo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>


<div class="container-fluid">
        <section class="header">
            <nav class="navbar navbar-expand-md navbar-light p-2 bg_web fixed-top">
                <a href="index.php" class="navbar-brand">
                    <h1>MAKEFO</h1>
                </a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">ABOUT</a></li>
                        <li class="dropdown nav-item">
                            <a class="nav-link" href="spare.php" data-toggle="dropdow" role="button" aria-haspopup="tru"
                                aria-expanded="false">SPARE PARTS</a>
                            <ul class="dropdown-menu mx-auto ml-auto" style="width: 60vw">
                                <div class="row">

                                    <div class="col-md-4">
                                        <li><a href=""><a href="#">category one
                                                    <img src="assets/images/spare/spare1.jpeg" class="img-fluid" alt="">
                                                </a></a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li><a href="#">category two
                                                <img src="assets/images/spare/spare3.jpeg" class="img-fluid" alt="">
                                            </a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li><a href="#">category three
                                                <img src="assets/images/spare/spare2.jpeg" class="img-fluid" alt="">
                                            </a></li>

                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="nav-link" href="ladieshairproducts.php" role="button" aria-haspopup="true"
                                aria-expanded="false">LADIES HAIR PRODUCTS</a>
                            <ul class="dropdown-menu mx-auto ml-auto" style="width: 60vw">
                                <div class="row">

                                    <div class="col-md-4">
                                        <li><a href=""><a href="#">category one
                                                    <img src="assets/images/hair/hair1.jpeg" class="img-fluid h-75" alt="">
                                                </a></a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li><a href="#">category two
                                                <img src="assets/images/hair/hair2.jpeg" class="img-fluid h-75" alt="">
                                            </a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li><a href="#">category three
                                                <img src="assets/images/hair/hair3.jpeg" class="img-fluid h-75" alt="">
                                            </a></li>

                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="events.php" class=" nav-link" role="button" aria-haspopup="true"
                                aria-expanded="false">EVENTS</a>
                            <ul class="dropdown-menu ">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>

                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="apartments.php">APARTMENTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#services">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">CONTACT</a></li>

                        <button class="btn bg-secondary float-end text-white" data-bs-target="#leave_msg"
                            data-bs-toggle="modal">Leave a message</button>

                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>
</div>