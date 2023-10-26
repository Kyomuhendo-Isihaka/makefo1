<!-- ------------leave msg popup------------------------- -->
<div class="modal fade" id="leave_msg" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" method="POST">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" name="uname" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-12">
                            <input type="text" name="uname" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-12">
                            <textarea name="msg" id="" cols="30" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="add_warehouse"
                            class="btn bg-secondary text-white w-25">Send</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- ------------product popup------------------------- -->
<div class="modal fade" id="product" data-bs-backdrop="stati" data-bs-keyboard="false" >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row d-flex">
                <img src="assets/images/hair/hair1.jpeg" alt="" class="img-fluid">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, saepe?</p>
                </div>
                
                <h5 class="text-center">Leave a comment</h5>
                <form action="" class="form-horizontal" method="POST">
                    <input type="text" class="form-control my-2" placeholder="Phone Number" name="" id="">
                    <textarea name="" placeholder="Your comment" class="form-control my-2" id="" cols="30" rows="5"></textarea>
                   
                        <button type="submit" name="add_warehouse"
                            class="btn bg-secondary text-white">Comment</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container footer_container">
        <div class="footer_1">
            <a href="#" class="footer_logo nav-link">
                <h4>MAKEFO VENTURES</h4>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, exercitationem!</p>
        </div>

        <div class="footer_2">
            <h4>Permalinks</h4>
            <ul class="peermalinks">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">SparParts</a></li>
                <li><a href="#">Ladies hair Products</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Apartments</a></li>
            </ul>
        </div>

        <div class="footer_3">
            <h4>Privacy</h4>
            <ul class="privacy">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Refund Policy</a></li>
            </ul>
        </div>

        <div class="footer_4">
            <h4>Contact Us</h4>
            <div>
                <p class="footer_socials"><i class="fa fa-phone"></i>0778237748</p>
                <a href="https://wa.me/0778237748" class="nav-link">
                    <p class="footer_socials"><i class="fab fa-whatsapp"></i>Whatsapp</p>
                </a>
                <a href="mailto:makefo@gmail.com" class="nav-link">
                    <p class="footer_socials"><i class="fas fa-envelope"></i>makefo@gmail.com</p>
                </a>


            </div>

            <ul class="footer_socials">
                <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </div>

    </div>
    <div class="footer_copyright">
        <small>Copyright &copy;2023 makefo ventures</small>
    </div>
</footer>

<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>

</html>