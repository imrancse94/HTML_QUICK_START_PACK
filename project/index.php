<?php include'include/header.php';?>
<?php 

$sql_hot_proj = "select * from property where charge >12000";
$res_hot_proj = mysqli_query($db, $sql_hot_proj);
$myvalue = array();
while ($row_hot_proj = mysqli_fetch_assoc($res_hot_proj)){
   
   $myvalue[] = $row_hot_proj; 
}

?>
<style>
    #txt{
        text-transform: lowercase;
    } 
    
    </style>
<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
       
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
           
              <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              
              <h2><a href="property-detail.php?prodId=<?php echo($myvalue[0]['id']); ?>&apprt_name=<?php echo($myvalue[0]['name']); ?>"><?php echo($myvalue[0]['name']); ?></a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo($myvalue[0]['address']); ?>, <?php echo($myvalue[0]['city']); ?></p>
           
              <cite id="txt">Tk.<?php echo(int)($myvalue[0]['charge']); ?>/month</cite>
              </blockquote>
           
            </div>
          
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
               <h2><a href="property-detail.php?prodId=<?php echo($myvalue[1]['id']); ?>&apprt_name=<?php echo($myvalue[1]['name']); ?>"><?php echo($myvalue[1]['name']); ?></a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo($myvalue[1]['address']); ?>, <?php echo($myvalue[1]['city']); ?></p>
           
              <cite id="txt">Tk.<?php echo(int)($myvalue[1]['charge']); ?>/month</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="property-detail.php?prodId=<?php echo($myvalue[2]['id']); ?>&apprt_name=<?php echo($myvalue[2]['name']); ?>"><?php echo($myvalue[2]['name']); ?></a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo($myvalue[2]['address']); ?>, <?php echo($myvalue[2]['city']); ?></p>
           
              <cite id="txt">Tk.<?php echo(int)($myvalue[2]['charge']); ?>/month</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
               <h2><a href="property-detail.php?prodId=<?php echo($myvalue[3]['id']); ?>&apprt_name=<?php echo($myvalue[3]['name']); ?>"><?php echo($myvalue[3]['name']); ?></a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo($myvalue[3]['address']); ?>, <?php echo($myvalue[3]['city']); ?></p>
           
              <cite id="txt">Tk.<?php echo(int)($myvalue[3]['charge']); ?>/month</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="property-detail.php?prodId=<?php echo($myvalue[4]['id']); ?>&apprt_name=<?php echo($myvalue[4]['name']); ?>"><?php echo($myvalue[4]['name']); ?></a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo($myvalue[4]['address']); ?>, <?php echo($myvalue[4]['city']); ?></p>
           
              <cite id="txt">Tk.<?php echo(int)($myvalue[4]['charge']); ?>/month</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
      
</div>



<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall"></a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
        <?php
        $sql_feature = "select * from property";
        $res_feature = mysqli_query($db, $sql_feature);
        while ($row_feature = mysqli_fetch_assoc($res_feature)){
        ?>
        <form action="property-detail.php" method="get">
      <div class="properties">
          <div class="image-holder"><img src="uploads/<?php echo$row_feature['image1'];?>" class="img-responsive" alt="properties"/>
          <div class="status sold"><?php echo$row_feature['property_type'];?></div>
        </div>
          <h4 style="color:#72b70f;"><?php echo$row_feature['name'];?></h4>
        <p class="price">Tk. <?php echo$row_feature['charge'];?>/month</p>
        <div class="listing-detail">
            <h4><?php echo$row_feature['city']; ?></h4> 
            <input type="hidden" name="prodId" value="<?php echo$row_feature['id']; ?>">
            <input type="hidden" name="apprt_name" value="<?php echo$row_feature['name']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" href="property-detail.php">View Details</button>
      </div>
        </form>
        <?php
        }
        ?>

      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
<!--        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
           Carousel items 
          <div class="carousel-inner">
              
            <div class="item active">
              <div class="row">
                  <div class="col-lg-4"><img src="uploads/<?php echo($myvalue[0]['image1']); ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                    <h5 style="color:#72b70f;"><a href="property-detail.php?prodId=<?php echo($myvalue[0]['id']); ?>&apprt_name=<?php echo($myvalue[0]['name']); ?>"><?php echo($myvalue[0]['name']); ?></a></h5>
                  <p class="price">Tk.<?php echo($myvalue[0]['charge']); ?></p>
                 
              </div>
            </div>
             
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="uploads/<?php echo($myvalue[1]['image1']); ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5 style="color:#72b70f;"><a href="property-detail.php?prodId=<?php echo($myvalue[1]['id']); ?>&apprt_name=<?php echo($myvalue[1]['name']); ?>"><?php echo($myvalue[1]['name']); ?></a></h5>
                  <p class="price">Tk.<?php echo($myvalue[1]['charge']); ?></p>
                   </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="uploads/<?php echo($myvalue[2]['image1']); ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5 style="color:#72b70f;"><a href="property-detail.php?prodId=<?php echo($myvalue[2]['id']); ?>&apprt_name=<?php echo($myvalue[2]['name']); ?>"><?php echo($myvalue[2]['name']); ?></a></h5>
                  <p class="price">Tk.<?php echo($myvalue[2]['charge']); ?></p>
                   </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                  <div class="col-lg-4"><img src="uploads/<?php echo($myvalue[3]['image1']); ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5 style="color:#72b70f;"><a href="property-detail.php?prodId=<?php echo($myvalue[3]['id']); ?>&apprt_name=<?php echo($myvalue[3]['name']); ?>"><?php echo($myvalue[3]['name']); ?></a></h5>
                  <p class="price">Tk.<?php echo($myvalue[3]['charge']); ?></p>
                   </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
</div>
<?php include'include/footer.php';?>