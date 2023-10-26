<?php
include("include/header.php")
    ?>

<div class="container-fluid">


<section class="welcome">
    <div style="height:100%;">
        <div class="row">
            <div class="col-md-8">
                <div id="makefo" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#makefo" data-slide-to="0" class="active"></li>
                        <li data-target="#makefo" data-slide-to="1"></li>
                        <li data-target="#makefo" data-slide-to="2"></li>
                        <li data-target="#makefo" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/welcome/spare.jpeg" alt="First slide">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h1>Spare Parts</h1>
                                <p class="text-white">Best Quality Spare parts</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/welcome/hair.jpg" alt="Second slide">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h1>Ladies Hair Products</h1>
                                <p class="text-white">Best Quality Hair products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/welcome/appartment.jpeg" alt="Third slide">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h1>Appartments</h1>
                                <p class="text-white">Best Quality Appartments</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/welcome/event.jpeg" alt="First slide">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h1>Event Organization</h1>
                                <p class="text-white">Best Quality Spare parts</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#makefo" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon text-danger" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#makefo" role="button" data-slide="next">
                        <span class="carousel-control-next-icon text-danger" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="card p-2">
                    <h5 class="text-center">Latest Updates</h5>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 my-2 mx-auto">
                                <h6 class="text-center">Update</h6>
                                <div class="text-center">
                                    <img src="assets/images/hair/hair1.jpeg" class="img-fluid h-50 mx-auto" alt="">
                                </div>

                            </div>
                            <div class="col-md-6 my-2 mx-auto">
                                <h6 class="text-center">Update</h6>
                                <div class="text-center">
                                    <img src="assets/images/spare/spare3.jpeg" class="img-fluid h-50 mx-auto" alt="">
                                </div>

                            </div>
                            <div class="col-md-6 my-2 mx-auto">
                                <h6 class="text-center">Update</h6>
                                <div class="text-center">
                                    <img src="assets/images/welcome/event.jpeg" class="img-fluid h-50 mx-auto" alt="">
                                </div>

                            </div>
                            <div class="col-md-6 my-2 mx-auto">
                                <h6 class="text-center">Update</h6>
                                <div class="text-center">
                                    <img src="assets/images/hair/hair3.jpeg" class="img-fluid h-50 mx-auto" alt="">
                                </div>

                            </div>
                        </div>
                        <a href="updates.php" class="text-center nav-link text-primary p-1">More Updates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service" id="services">
    <h1>We Deal In</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, numquam?</p>
    <div class="row">
        <div class="service-col">
            <h5>Spare Parts</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, praesentium deserunt placeat
                repellat itaque similique obcaecati soluta laboriosam?</p>
            <a href="spare.php" class="btn bg-secondary text-white mx- officiisauto">view</a>
        </div>
        <div class="service-col">
            <h5>Ladies Hair products</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt maxime rerum aspernatur vel
                neque repellendus vero in, dicta ducimus incidunt. </p>
            <a href="ladieshairproducts.php" class="btn bg-secondary text-white mx-auto">view</a>
        </div>
        <div class="service-col">
            <h5>Event Organization</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident hic quas error
                voluptates, aliquam totam iste fuga rem inventore. </p>
            <a href="events.php" class="btn bg-secondary text-white mx-auto">view</a>
        </div>
        <div class="service-col">
            <h5>Apartments</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem animi dicta temporibus iste
                quibusdam qui et odio odit nisi quo. </p>
            <a href="apartments.php" class="btn bg-secondary text-white mx-auto">view</a>
        </div>
    </div>
</section>

<section class="reference bg-light pt-5" id="contact">
    <div class="row">
        <div class="col-md-6 p-5">
            <h3 class="text-center">About Makefo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi laboriosam mollitia provident
                expedita earum dolorum delectus minus alias facilis, esse natus beatae eum recusandae sit ullam
                molestiae enim voluptatum ipsam! Cupiditate accusantium voluptas suscipit facilis laborum omnis
                necessitatibus ea maiores incidunt, sequi quidem quasi dolorum magnam aliquid eaque, autem
                quibusdam!</p>

        </div>
        <div class="col-md-6">
            <h3 class="text-center">Contact</h3>
            <form action="">
                <div class="row p-3">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" placeholder="Full Name" name="" id="">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" placeholder="Phone Number" name="" id="">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" placeholder="Email Address" name="" id="">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="" id="" class="form-control" cols="30" rows="5"
                            placeholder="Your message..."></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <button class="btn w-25 bg-secondary text-white">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>


<?php
include("include/footer.php")
    ?>