<?php include_once ('./php/proLP.crud.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Testimonial Form</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- Navigation-->
        <?php include ("./navbar.php")?>
        <!-- Register -->
        <section class="page-section" id="servicos">
            <div class="container">
                <div class="text-center mt-5">
                <h2 class="section-heading">You're in testimonial register page.</h2>
                    <h3 class="section-subheading text-muted">Fill the Form, it's easy.</h3>
                    <?php if($_GET) : ?>
                    <h3 class="section-subheading text-danger"><strong>There was an error in the database, please try again.</strong></h3>
                    <?php endif; ?>
                </div>
                <form id="servicosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="./register/testimonial.register.php">
                    <div class="row align-items-center mb-5 offset-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Image input-->
                                <input class="form-control" id="imagem" name="inputImage" type="text" placeholder="Image" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="imagem:required">An image is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="title" name="inputNome" type="text" placeholder="Name" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="title:required">A name is required.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Message input-->
                                <input class="form-control" id="description" name="inputMessage" type="text" placeholder="Message" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="description:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-sm-xl" id="submitButton" type="submit">Register</button></div>
                </form>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
