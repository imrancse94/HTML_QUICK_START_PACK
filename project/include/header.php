<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dream House</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/style.css"/>
        <script src="assets/bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/script.js"></script>       



        <!-- Owl stylesheet -->
        <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
        <script src="assets/owl-carousel/owl.carousel.js"></script>
        <!-- Owl stylesheet -->


        <!-- slitslider -->
        <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
        <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
        <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
        <!-- slitslider -->

    </head>

    <body>


        <!-- Header Starts -->
        <div class="navbar-wrapper">

            <div class="navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">


                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>


                    <!-- Nav Starts -->
                    <div class="navbar-collapse  collapse">
                        <ul id="mylink" class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- #Nav Ends -->

                </div>
            </div>

        </div>
        <!-- #Header Starts -->





        <div class="container">

            <!-- Header Starts -->
            <div class="header">
                <a href="index.php"><img style="height: 77px;" src="images/dreamhouse.png" alt="Realestate"></a>

                <div class="form-group pull-right">

                    <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                        <form action="buysalerent.php" method="get">
                            <select class="form-control" name="area" onchange="this.form.submit()">
                                <option>Choose any location</option>
                                <?php
                                include 'db/db.php';
                                $sql = "select DISTINCT city from property";
                                $result = mysqli_query($db, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo$row['city']; ?>"><?php echo$row['city']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </form> 
						
                    </div>
                </div>
            </div>
            <!-- #Header Starts -->
        </div>