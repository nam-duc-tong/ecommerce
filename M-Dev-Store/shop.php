<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
          /* footer */
          #footer{
            background: #e0e0e0;
            padding: 20px 0;
        }
        #footer a{
            text-decoration: none;
        }
        #footer a:hover{
            color: #666;
        }
        #footer ul{
            list-style: none;
            padding-left: 0px;
        }
        #footer a{
            color: #999;
            padding: 20px 0;
            text-decoration: none;
            padding: 2px 0;
        }
        #footer ul a:hover{
            color: #666;
        }
        #footer .social{
            text-align: left;
        }
        #footer .social a{
            margin: 0px 10px 0px 0px;
            display: inline-block;
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 15px;
            line-height: 30px;
            font-size: 15px;
            text-align: center;
            vertical-align: bottom;
            background: #555;
            text-decoration: none;
        }
        #footer .social a:hover{
            background-color: #2b0fe1;
        }
        #copyright{background: #333;color:#ccc;padding: 20px 0px;font-size: 12px;}
        #copyright p{margin: 0px;}
        .breadcrumb{
            padding: 8px 15px;
            margin-bottom: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.5);
        }
        .breadcrumb> li + li:before{
            content: ">\00a0";
            color: #ccc;
        }
        @media(max-width: 991px){
            .breadcrumb{
                padding: 8px 0px;
                text-align: center;
            }
        }
 
    </style>
</head>
<body>
    
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
    
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->

   <div id="content"><!-- content begin -->
       <div class="container"><!-- container begin -->
           <div class="col-sm-12"><!--col-md-12  begin -->
                <ul class="breadcrumb"><!-- breadcrumb begin -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
           </div><!-- col-md-12  Finish -->
           <div class="col-md-3"> <!-- col-md-3 begin -->            
            <?php
                include("includes/sidebar.php");
            ?>
           </div><!-- col-md-3 finish -->
            <div class="col-md-9">
                <div class="box">
                    <h1>Shop</h1>
                    <p>Make / Create a modern E-Commerce Store website In php, mysqli and bootstrap with complete functionalities in a single course.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product"><!-- product begin -->
                            <a href="details.php">
                                <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begin -->
                                <h3>
                                    <a href="details.php">
                                        M-Dev T-Shirt Woman
                                    </a>
                                </h3>
                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>
                                    </a>
                                </p>
                            </div><!-- text finish -->

                        </div><!-- product finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive finish -->

                </div> <!-- row finish -->

                <center>
                    <ul class="pagination">
                        <li><a href="#">First Page</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Last Page</a></li>
                    </ul>
                </center>
            </div><!-- col-md-9 finish -->
           
       </div><!-- container Finish -->

   </div><!-- content Finish -->

   <?php
        include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>