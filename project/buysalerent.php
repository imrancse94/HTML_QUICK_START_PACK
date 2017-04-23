<?php include'include/header.php'; ?>

<?php
//include 'db/db.php';
session_start();
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
if (isset($_GET['area'])) {
    $city = $_GET['area'];
    $_SESSION['city'] = $city;
    $statement = "property where city='$city'";
} elseif (isset($_GET['serch_by_charge'])) {
    $search = $_GET['serch_by_charge'];
    $statement = "property where charge='$search' AND city = '" . $_SESSION['city'] . "' order by id asc";
} elseif (isset($_GET['order'])) {
    if ($_GET['order'] == 1) {
        $statement = "property where city='" . $_SESSION['city'] . "' order by charge asc";
    } else if ($_GET['order'] == 0) {
        $statement = "property where city='" . $_SESSION['city'] . "' order by charge desc";
    }
} else if (isset($_GET['price_range'])) {
    $min = (double) ($_GET['price_range']);
    $max = (double) ($min + 3000);
    $statement = "property where charge >=$min AND charge <=$max AND city='" . $_SESSION['city'] . "' ";
} else {
    $statement = "property where city='" . $_SESSION['city'] . "'";
    
}



$sql_price_min = "SELECT MIN(charge) AS price_min from property";
$result_price_min = mysqli_query($db, $sql_price_min);
$row_price_min = mysqli_fetch_assoc($result_price_min);
$flag = true;
$src_res = false;
$sql_price_max = "SELECT MAX(charge) AS price_max from property";
$result_price_max = mysqli_query($db, $sql_price_max);
$row_price_max = mysqli_fetch_assoc($result_price_max);
?>

<!-- banner -->
<div class="inside-banner">
    <div class="container"> 

        <marquee><a href="index.php"><h3 style="color: #72b70f;"><?php echo$_SESSION['city'];?></h3></a></marquee>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 ">

                <form action="buysalerent.php" method="get">
                    <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                        <div class="input-group">
                            <input name="serch_by_charge" class="form-control" placeholder="Search by Rent" type="text">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
                </form>
                <br>

                <form action="" >
                    <div class="row">

                        <div class="col-lg-12">

                            <select class="form-control" name="price_range">
                                <option value="">Monthly Charge range</option>
                                <?php
                                $min = (int) $row_price_min['price_min'];
                                $max = (int) $row_price_max['price_max'];
                                while ($min <= $max) {
                                    ?>
                                    <option value="<?php echo$min; ?>"><?php echo$min; ?>&nbsp;&nbsp;to&nbsp;&nbsp;<?php echo(int) $min + 3000; ?></option>
                                    <?php
                                    $min = $min + 3000;
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="row">

                    </div>
                    <button type="submit" class="btn btn-primary">Find Now</button>

            </div>
            </form>


            <div class="hot-properties hidden-xs">
                <h4>Hot Properties</h4>
                <?php 
                $s_pro = "select * from property where charge > 12000";
                $res_pro = mysqli_query($db, $s_pro);
                $counter=0;
                while ($row_pro=  mysqli_fetch_assoc($res_pro)){
                   
                    if($counter==5)
                        break;
                    $counter++;
                ?>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"><img src="<?php echo"uploads/" . $row_pro['image1']; ?>" class="img-responsive img-circle" alt="properties"></div>
                    <div class="col-lg-8 col-sm-7">
                        <h5><a href="property-detail.php?prodId=<?php echo$row_pro['id']; ?>&apprt_name=<?php echo$row_pro['name']; ?>"><?php echo$row_pro['name']; ?></a></h5>
                        <p class="price">Tk. <?php echo(int)($row_pro['charge']); ?></p> </div>
                </div>
                <?php
                }
                ?>

            </div>


        </div>

        <div class="col-lg-9 col-sm-8">
            <div class="sortby clearfix">

                <form action="buysalerent.php" method="get">
                    <div class="pull-right">
                        <select class="form-control" name="order" onchange="this.form.submit()">
                            <option>Sort by</option>
                            <option value="1">Charge: Low to High</option>
                            <option value="0">Charge: High to Low</option>
                        </select>
                    </div>
                </form>
            </div>



            <div class="row">

<?php
include("pagination/function.php");
//you have to pass your query over here
$limit = 6; //if you want to dispaly 10 records per page then you have to change here
$startpoint = ($page * $limit) - $limit;
$result_product = mysqli_query($db, "select * from {$statement} LIMIT {$startpoint} , {$limit}");
while ($row_product = mysqli_fetch_assoc($result_product)) {
    ?>
                    <!-- properties -->
                    <form action="property-detail.php" method="get">
                        <input type="hidden" name="prodId" value="<?php echo$row_product['id']; ?>">
                        <div class="col-lg-4 col-sm-6">
                            <div class="properties">
                                <div class="image-holder"><img src="<?php echo"uploads/" . $row_product['image1']; ?>" class="img-responsive" alt="properties">
                                    <div class="status sold"><?php echo$row_product['property_type']; ?></div>
                                </div>
                                <h4 style="color: #72b70f;"><?php echo$row_product['name']; ?></h4>
                                <input type="hidden" name="apprt_name" value="<?php echo$row_product['name']; ?>">
                                <p class="price">Tk.<?php echo(int)($row_product['charge']); ?>/month</p>
                                <div class="listing-detail">
                                    <h4><?php echo$row_product['city']; ?></h4>      
                                </div>
                                <button type="submit" class="btn btn-primary">View Details</button>
                            </div>
                        </div>
                    </form>
                    <!-- properties -->
    <?php
}
?>

            </div>

        </div>
    </div>
</div>
</div>


<div class="center">
<?php echo pagination($db, $statement, $limit, $page); ?>
</div>
<?php include'include/footer.php'; ?>