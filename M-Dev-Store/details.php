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
           <div class="col-md-9"><!-- col-md-9 begin -->
               <div id="productMain" class="row"><!-- productMain begin -->
                   <div class="col-sm-6"><!-- col-sm-6 begin -->
                       <div id="mainImage"><!-- mainImage begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- myCarousel begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators finish -->
                               <div class="carousel-inner">
                                   <div class="item active">
                                        <center><img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                   </div>
                                   <div class="item">
                                        <center><img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                   </div>
                                   <div class="item">
                                        <center><img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                   </div>
                               </div>
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control finish -->

                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control finish -->
                           </div><!-- myCarousel finish -->
                       </div><!-- mainImage finish -->
                   </div><!--col-sm-6 finish -->
                   <div class="col-sm-6"><!-- col-sm-6 begin -->
                       <div class="box"><!-- box begin -->
                           <h1 class="text-center">M-Dev Polo Shirt Men</h1>
                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                               <div class="form-group"><!-- form-group begin -->
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                   <div class="col-md-7"><!-- col-md-7 begin -->
                                       <select name="product_qty" id="" class="form-control"><!-- product_qty begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                       </select><!-- product_qty finish -->
                                   </div><!-- col-md-7 finish -->
                               </div><!-- form-group finish -->
                               <div class="form-group"><!-- form-group begin -->
                                   <label class="col-md-5 control-label">Products Size</label>
                                   <div class="col-md-7"><!-- col-md-7 begin -->
                                       <select name="product_size" id="" class="form-control"><!-- product_qty begin -->
                                           <option>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>
                                       </select><!-- product_qty finish -->
                                  
                                    </div><!-- col-md-7 finish -->
                                
                                </div><!-- form-group finish -->
                                
                                <p class="price" style="font-size: 25px;text-align: center;font-weight: 400;">$50</p>

                                <p class="text-center buttons">
                                    <button class="btn btn-primary i fa fa-shopping-cart">
                                        Add To Cart
                                    </button>
                                </p>
                           </form><!-- form-horizontal finish -->
                       </div><!-- box finish -->

                       <div class="row" id="thumbs"><!-- row begin -->
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a  data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb begin -->
                                    <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 finish -->
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a  data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb begin -->
                                    <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 finish -->
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a  data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb begin -->
                                    <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                </a><!-- thumb finish -->
                            </div><!-- col-xs-4 finish -->
                       </div><!-- row finish -->
                   </div><!-- col-sm-6 finish -->
               </div><!-- productMain finish -->
               <div class="box" id="details"><!-- box begin -->
                    
                    <h4><b>Product Details</b></h4>
                   
                <p>Make / Create a modern E-Commerce Store website In php, mysqli and bootstrap with complete functionalities in a single course.</p>
                   
                   <h4><b>Size</b></h4>
                   
                   <ul>
                       <li>Small</li>
                       <li>Medium</li>
                       <li>Large</li>
                   </ul>
                    <hr>
               </div><!-- box finish -->
               <div id="row same-height-row"> <!-- row same-height-row begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 begin -->
                       <div class="box same-height headline"><!--box same-height headline begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!--box same-height headline finish -->

                   </div><!-- col-md-3 col-sm-6 finish -->

                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
                    <div class="product same-height"><!-- product same-height begin -->
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">M-Dev Tank Top Women</a>
                                <p class="price">$40</p>
                            </h3>
                        </div>
                    </div><!-- product same-height finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive finish -->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
                    <div class="product same-height"><!-- product same-height begin -->
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">M-Dev Tank Top Women</a>
                                <p class="price">$40</p>
                            </h3>
                        </div>
                    </div><!-- product same-height finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive finish -->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin -->
                    <div class="product same-height"><!-- product same-height begin -->
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">M-Dev Tank Top Women</a>
                                <p class="price">$40</p>
                            </h3>
                        </div>
                    </div><!-- product same-height finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive finish -->

               </div><!-- row same-height-row finish -->

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