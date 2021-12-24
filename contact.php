<?php session_start(); ?>
<section class="footer-contact" id="contact">
    <div class="container">
        <div class="footer-upper">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/contact.svg" alt="... " class="img-fluid " id="contact-img">
                    <div class="info">
                        <p id="footer-text">Phone: +8801304034975</p>
                        <p id="footer-text">Email : sefatulwasi@gmail.com</p>
                        <div class="social-icons ">
                            <a class="socials-footer " href="https://www.facebook.com/Sefatulwasi16/ " target="_blank ">
                                <i class="fab fa-facebook fa-3x "></i>
                            </a>
                            <a class="socials-footer " href="https://www.linkedin.com/in/sefatul-wasi-5a606715a/ " target="_blank ">
                                <i class="fab fa-linkedin fa-3x "></i>
                            </a>
                            <a class="socials-footer " href="https://github.com/WallE1602 " target="_blank ">
                                <i class="fab fa-github fa-3x "></i>
                            </a>
                            <a class="socials-footer " href="https://twitter.com/Sefatul_wasi16 " target="_blank ">
                                <i class="fab fa-twitter fa-3x "></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-2 order-lg-2 p-5">
                    <h2 class="pb-2" id="footer-text">Contact Us</h2>
                    <?php if (!empty($_SESSION['message'])) { ?>
                        <div class="alert text-center alert-success" role="alert">
                            <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php } ?>


                    <form name="contact-form" role="form" action="save_contact.php" method="post">
                        <div class="p-2 form-group">
                            <label class="name-label " id="footer-text" for="name">Full Name:
                            </label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name Here">
                        </div>

                        <div class="p-2 form-group">
                            <label class="email-label" id="footer-text" for="email">Email Address:
                            </label>
                            <input class="form-control" type="text" name="email" placeholder="example@mail.com">
                        </div>

                        <div class="p-2 form-group">
                            <label class="msg-label" id="footer-text" for="msg">Message:
                            </label>
                            <textarea class="form-control" name="message" cols="20" rows="10"></textarea>
                        </div>

                        <div class="p-2 form-group">
                        <button class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
            $(function() {
                $("form[name='contact-form']").validate({
                    // Define validation rules
                    rules: {
                        name: "required",
                        email: "required",
                        message: "required",
                        name: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    // Specify validation error messages
                    messages: {
                        name: "The name field is required.",
                        email: {
                            required: "The email field is required",
                            minlength: "Please enter a valid email address"
                        },
                        message: "The message field is required"
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
        </script>