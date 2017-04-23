<?php include'include/header.php'; ?>
<?php

$userId = $_REQUEST['prodId'];
$apprt_name = $_REQUEST['apprt_name'];
$sql = "select * from property where id = $userId";
$result = mysqli_query($db, $sql);
?>
<!-- banner -->
<div class="inside-banner">
    <div class="container"> 
       
        <marquee><h2 style="color: #72b70f;">Welcome to at <?php echo$apprt_name;?></h2></marquee>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 hidden-xs">

                <div class="hot-properties hidden-xs">
                   
                </div>



                <div class="advertisement">
                    <h4>Advertisements</h4>
                    <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

                </div>

            </div>

            <div class="col-lg-9 col-sm-8 ">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <h2><?php echo$row['name']; ?></h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="property-images">
                                <!-- Slider Starts -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators hidden-xs">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <!-- Item 1 -->
                                        <div class="item active">
                                            <img src="uploads/<?php echo$row['image1']; ?>" class="properties" alt="properties" />
                                        </div>
                                        <!-- #Item 1 -->

                                        <!-- Item 2 -->
                                        <div class="item">
                                            <img src="uploads/<?php echo$row['image2']; ?>" class="properties" alt="properties" />

                                        </div>
                                        <!-- #Item 2 -->

                                        <!-- Item 3 -->
                                        <div class="item">
                                            <img src="uploads/<?php echo$row['image3']; ?>" class="properties" alt="properties" />
                                        </div>
                                        <!-- #Item 3 -->

                                        <!-- Item 4 -->
                                        <div class="item ">
                                            <img src="uploads/<?php echo$row['image4']; ?>" class="properties" alt="properties" />

                                        </div>
                                        <!-- # Item 4 -->
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <!-- #Slider Ends -->

                            </div>




                            <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Description</h4>
                                <?php echo$row['description']; ?>
                            </div>
                            

                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12  col-sm-6">
                                <div class="property-info">
                                    <h4 style="color: #72b70f;">Monthly charge</h4> 
                                    <p class="text-primary">Tk.<?php echo$row['charge']; ?>/month</p>
                                    <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo$row['address']; ?>, <?php echo$row['city']; ?>, Bangladesh</p>

                                    <div class="profile">
                                        <span class="glyphicon glyphicon-user"></span>House Owner
                                        <p><?php echo$row['owner_name']; ?><br><?php echo$row['owner_contact']; ?></p>
                                    </div>
                                </div>
                                <h6><span class="glyphicon glyphicon-home"></span> Floor space: <?php echo(int)($row['floor_space']);?><i>sft</i></h6>
                                 <br>
                                <h6> Availabilty</h6>
                                <div class="listing-detail">
                                    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php if (isset($row['bed_room']))
                        echo$row['bed_room'];
                    else
                        echo 0;
                        ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php if (isset($row['living_room']))
                                        echo$row['living_room'];
                                    else
                                        echo 0;
                                    ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php if (isset($row['parking']))
                                        echo$row['parking'];
                                    else
                                        echo 0;
                        ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php if (isset($row['kitchen']))
                        echo$row['kitchen'];
                    else
                        echo 0;
                    ?></span> </div>

                                <h6><span class="glyphicon glyphicon-wrench"></span>Utility</h6>
                                <div class="profile">
                                    <h6>Gas&nbsp;:&nbsp;<?php echo$row['gas'];?></h6>
                                    <h6>Water&nbsp;:&nbsp;<?php echo$row['water'];?></h6>
                                    <h6>Electricity&nbsp;:&nbsp;<?php echo$row['electricity'];?></h6>
                                    
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="col-lg-12 col-sm-6 ">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include'include/footer.php'; ?>