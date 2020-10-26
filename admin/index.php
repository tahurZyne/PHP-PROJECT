<?php include('../admin_session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
<div style="height:40px;"></div>
    
     <?php 
                $cu=mysqli_query($conn,"select customerid from customer");
                $cu_count=mysqli_num_rows($cu);
        ?>
    <div class="row top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Customers</span>
                <h2><?php echo  $cu_count;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
        <?php 
                $sup=mysqli_query($conn,"select supplierid from suppliers");
                $sup_count=mysqli_num_rows($sup);
        ?>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Supplier</span>
                <h2><?php echo $sup_count;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
        <?php 
                $or=mysqli_query($conn,"select orderid from `order`");
                $or_count=mysqli_num_rows($or);
        ?>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Order</span>
                <h2><?php echo $or_count;?></h2>
                <span class="sparkline_two" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span> 
              </div>
        <?php 
                $staf=mysqli_query($conn,"select userid from staff");
                $staf_count=mysqli_num_rows($staf);
        ?>
              <div class="col-md-3 col-sm-3 col-xs-6 tile">
                <span>Total Staff</span>
                <h2><?php  echo $staf_count;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
            </div>
	
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>