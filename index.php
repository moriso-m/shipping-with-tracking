<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 23/03/2019
 * Time: 11:29
 */
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "links.php";?>
    <title>courier</title>
    <!-- skitter slideshow plugin-->

    <script type="text/javascript" src="skitter-Slideshow/dist/jquery.skitter.min.js"></script>
    <script type="text/javascript" src="skitter-Slideshow/js/jquery.easing.1.3.js"></script>
    <!--Init the Skitter-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.skitter-large').skitter();
        });
    </script>
</head>
<body>
    <div class="container"  >
    
    <?php
    include "header.php";
    ?>
    <div style="background: url('images/background/gravel.png');" id="main-content">
        <div class="row" >
            <div class="col-lg-8 col-md-8 c0l-sm-8 col-xs-12">
                <!--carousel -->
                <div class="skitter skitter-large ">
                    <ul>
                        <li>
                            <a href="#circleInside"><img src="images/carousel/001.jpg" class="circles img-responsive" /></a>
                            <div class="label_text">
                                <h3 style="color: #ffffff;">
                                    Looking for reliable courier service for your company?<br>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <a href="#circleInside"><img src="images/carousel/001.jpg" class="circles" /></a>
                            <div class="label_text"><h4>
                                    submit your request and our network of courier service providers will be happy to respond to you

                                </h4></div>
                        </li>
                        <li>
                            <a href="#circleInside"><img src="images/carousel/002.jpg" class="swapBarsBack" /></a>
                            <div class="label_text"><p>swapBarsBack</p></div>
                        </li>
                        <li>
                            <a href="#circleInside"><img src="images/carousel/004.jpg" class="swapBarsBack" /></a>
                            <div class="label_text"><p>swapBarsBack</p></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="">
                    <h3>Place your courier order</h3>
<!--                    <img src="images/courier-9.jpg" class="img-responsive" height="50"><br>-->
                    <form method="post" class="row">
                        <div class="form-group col-lg-9">
                            <input type="text" required class="form-control" placeholder="name">
                        </div>
                        <div class="form-group col-lg-9">
                            <input type="email" required class="form-control" placeholder="email address">
                        </div>
                        <div class="form-group col-lg-9">
                            <input type="number" required class="form-control" placeholder="ID no./ passportD">
                        </div>
                        <div class="form-group col-lg-9">
                            <select name="country" required class="form-control">
                                <option value="Kenya">Kenya</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Rwanda">Rwanda</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-9 col-md-9 col-sm-12">
                            <input type="text" required class="form-control" placeholder="county / Town">
                        </div>
                        <button type="submit" class="btn btn-success col-lg-5">Track</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">

                <h3 class="text-center">Why choose us</h3>
                <div class="row jumbotron" style="margin:6px 1px;">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-hourglass-half "></span>&nbsp;<br>&nbsp;
                        We ensure your shipment is delivered in time
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-truck  "></span><br>
                        We deliver at any location in kenya and East africa
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-dollar "></span><br>
                        &nbsp;&nbsp;Get your shipment delivered at an affordable price
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-calendar-check-o "></span><br>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php include "footer.php";?>
        </div>
<!--        enroll modal-->
        <div class="modal fade" id="enroll" role="dialog" >
            <div class="modal-dialog">
                <!-- modal content-->
                <div class="modal-content" style="background: url('images/courier-3.jpg'),100% 100%;">
                    <div class="modal-title">

                    </div>
                    <div class="modal-header text-center">
                        <a href="#" data-dismiss="modal" class="close">&times;</a>
                        <h3>
                            Enroll to our courier service
                        </h3>
                    </div>
                    <div class="modal-body" >
                        <form class="form" action="sliderimages" method="post" enctype="multipart/form-data">
                            <label for="caption">Image caption:</label>
                            <input type="text" name="caption" placeholder="write some description for the video here" class="form-control col-lg-5"><br>
                            <label for="video">image:</label>
                            <input type="file" class="form-control col-lg-4" name="image"><br><br><br>
                            <button type="submit" class="btn btn-success form-control">
                                <i class="fa fa-upload"></i>
                                Upload
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>
