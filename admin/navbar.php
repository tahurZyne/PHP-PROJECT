<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
				<a class="navbar-brand" href="https://www.sourcecodester.com/user/224918/track">herbal system</a>
            </div>
           
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>   
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        
                                <li>
                                    <a href="#"><span class="fa fa-users"></span> Users <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="customer.php"> <i class="fa fa-credit-card"></i> Customer</a>
                                        </li>
                                        <li>
                                            <a href="staff.php"> <i class="fa fa-user"></i> Staff</a>
                                        </li>
                                        
                                        <li>
                                            <a href="suppliers.php"> <i class="fa fa-truck"></i> Supplier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.php"> <i class="fa fa-product-hunt"></i> Products</a>
                                </li>
                         <li>
                                    <a href="order.php"> <i class="fa fa-money"></i> Orders</a>
                                </li>
                            
                         <li>
                             <a href="sales.php"><i class="fa fa-money fa-fw"></i> Sales </a>
                                </li>
                         <li>
                                    <a href="inventory.php"><i class="fa fa-barcode fa-fw"></i> Inventory Report</a>
                                </li>
						
						<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>