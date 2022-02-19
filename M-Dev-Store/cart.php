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
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li class="active">
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
                        Cart
                    </li>
                </ul>
           </div><!-- col-md-12  Finish -->

           <div id="cart" class="col-md-9"><!-- col-md-9 begin -->

               <div class="box"><!-- box begin -->

                   <form action="cart.php" method="post" entype="multipart/formdata"><!-- form begin -->

                       <h1>Shopping Cart</h1>

                       <p class="text-muted"> You currently have 3 item(s)  in your cart</p>

                       <div class="table-responsive"><!-- table-responsive begin -->

                            <table class="table"><!-- table begin -->

                                <thead><!-- thead begin -->

                                    <tr><!-- tr begin -->

                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>

                                    </tr><!-- tr finish -->

                                </thead><!-- thead finish -->

                                <tbody> <!-- tbody begin -->

                                    <tr>

                                        <td>

                                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                        
                                        </td>

                                        <td>
                                            <a href="#">M-dev Polo Shirt Men</a>
                                        </td>

                                        <td>2</td>
                                        <td>$50</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$100</td>
                                    </tr>

                                </tbody> <!-- tbody finish -->

                                <tbody> <!-- tbody begin -->

                                    <tr>

                                        <td>

                                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                        
                                        </td>

                                        <td>
                                            <a href="#">M-dev Polo Shirt Men</a>
                                        </td>

                                        <td>2</td>
                                        <td>$50</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$100</td>
                                    </tr>

                                </tbody> <!-- tbody finish -->

                                <tbody> <!-- tbody begin -->

                                    <tr>

                                        <td>

                                            <img class="img-responsive"src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                        
                                        </td>

                                        <td>
                                            <a href="#">M-dev Polo Shirt Men</a>
                                        </td>

                                        <td>2</td>
                                        <td>$50</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$100</td>
                                    </tr>

                                </tbody> <!-- tbody finish -->

                                <tfoot><!-- tfoot begin -->
                                    <tr>
                                        <th colspan="5">Total</th>

                                        <th colspan="2">$100</th>
                                    </tr>
                                </tfoot><!-- tfoot finish -->

                            </table><!-- table finish -->

                       </div><!-- table-responsive Finish -->

                    <div class="box-footer"><!-- box-footer begin -->
                        
                        <div class="pull-left">

                            <a href="index.php" class="btn btn-default">

                                <i class="fa fa-chevron-left">
                                    </i> Continue Shopping

                            </a>

                        </div>
                        <div class="pull-right">

                            <button type="submit" name="update" value = "Update Cart" class="btn btn-default">

                                <i class="fa fa-refresh"></i> Update Cart

                            </button>
                            
                            <a href="checkout.php" class="btn btn-primary">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    
                    </div><!-- box-footer Finish -->

                   </form><!-- form Finish -->

               </div><!-- box Finish -->
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

           </div><!-- col-md-9 Finish -->

           <div class="col-md-3">

               <div id="order-summary" class="box">

                   <div class="box-header">

                       <h3>Order Summary</h3>

                   </div>

                   <p class="text-muted">

                       Shipping and additional costs are calculated based on  value you have entered
                  
                    </p>

                   <div class="table-responsive">

                       <table class="table">

                           <tbody>

                               <tr>
                                   <td> Order Sub-Total </td>
                                   <th> $200 </th>
                               </tr>
                               <tr>
                                   <td> Shipping and Handing </td>
                                   <th> $0 </th>
                               </tr>
                               <tr>
                                   <td> Tax </td>
                                   <th> $0 </th>
                               </tr>
                               <tr class="total">
                                   <td> Total </td>
                                   <th> $200 </th>
                               </tr>

                           </tbody>

                       </table>

                   </div>

               </div>

           </div>
           
        </div><!-- container Finish -->

    </div><!-- content Finish -->

<?php
     include("includes/footer.php");
 ?>
 <script src="js/jquery-331.min.js"></script>
 <script src="js/bootstrap-337.min.js"></script>
</body>
</html>