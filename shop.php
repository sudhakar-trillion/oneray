<?php include('header.php');?>
<?php include('menu.php'); ?>
	
    <div class="hero-area">
        <!-- start page banner -->
        <div class="page-banner parallax">
            <!-- start container -->
            <div class="container">
             	<h1>Shop</h1>
            </div>
            <!-- end container -->
        </div>
        <!-- end page banner -->
    </div>
    <!-- end hero area -->
	<!-- Start body content -->
    <div class="main" role="main">
    	<div id="content" class="content full">
            <!-- start container -->
            <div class="container padding-tb60">
                <p class="woocommerce-result-count pull-left">Showing all 4 results</p>
                <form action="#" class="woocommerce-ordering pull-right">
                    <select class="orderby">
                        <option selected="selected" value="menu_order">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </form>
                <div class="clearfix"></div>
                <div class="woocommerce">
                    <ul class="products">
                        <li class="product">
                            <a href="single-product.html" title="" class="woocommerce-LoopProduct-link">
                                <span class="onsale">Sale!</span>
                                <img src="images/flower4-300x300.jpg" alt="">
                                <h3>Condolences Flowers</h3>
                                <span class="price">
                                    <del>
                                        <span>£<span>79.99</span></span>
                                    </del>
                                    <ins>
                                        <span>£<span>59.99</span></span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" title="" class="button product_type_simple">Add to cart</a>	
                        </li>
                        <li class="product">
                            <a href="single-product.html" title="" class="woocommerce-LoopProduct-link">
                                <img src="images/flower3-300x300.jpg" alt="">
                                <h3>Granny’s Garden Table Basket</h3>
                                <span class="price">
                                    <span>£<span>59.99</span></span>
                                </span>
                            </a>
                            <a href="#" title="" class="button product_type_simple">Add to cart</a>	
                        </li>
                        <li class="product">
                            <a href="single-product.html" title="" class="woocommerce-LoopProduct-link">
                                <img src="images/flower1-300x300.jpg" alt="">
                                <h3>Indoor Garden Basket</h3>
                                <span class="price">
                                    <span>£<span>69.99</span></span>
                                </span>
                            </a>
                            <a href="#" title="" class="button product_type_simple">Add to cart</a>	
                        </li>
                        <li class="product">
                            <a href="single-product.html" title="" class="woocommerce-LoopProduct-link">
                                <span class="onsale">Sale!</span>
                                <img src="images/flower2-300x300.jpg" alt="">
                                <h3>Table Basket</h3>
                                <span class="price">
                                    <del>
                                        <span>£<span>129.99</span></span>
                                    </del>
                                    <ins>
                                        <span>£<span>119.99</span></span>
                                    </ins>
                                </span>
                            </a>
                            <a href="#" title="" class="button product_type_simple">Add to cart</a>	
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- end body content -->
    <!-- start footer -->
<?php include('footer.php'); ?>    
    <!-- end footer -->
<?php include('foot_script.php'); ?>    