<?php

include('header.php');

?>

<body class="product-category-60 layout-2 left-col">

    <?php

    include('menu.php');

    ?>


    <div class="content_headercms_top"></div>
    <div class="content-top-breadcum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-content">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Quick view JS ========= -->
    <script>
        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function() {
            quickbox();
        });
        jQuery(window).resize(function() {
            quickbox();
        });
    </script>
    <div class="container category-page">
        <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="package.php">ChefOnline EPoS Packages</a></li>
        </ul>
        <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box left-category">
                    <div class="box-heading">Categories</div>
                    <div class="box-content ">
                        <ul class="box-category treeview-list treeview">
                            <li>
                                <a href="package.php" class="active">ChefOnline EPoS Packages</a>
                            </li>
                            <li>
                                <a href="addon.php">Add ons</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div id="content" class="col-sm-9 category ">
                <div class="category-top">
                    <h1 class="page-title">ChefOnline EPoS Packages</h1>
                    <div class="category_thumb">
                        <div class="col-sm-10 category_description">For a one-off fee of just £449*, ChefOnline EPoS can
                            integrate your restaurant business digitally. Easy and efficient, we also provide training
                            on how to use our hardware and software effectively. Once the system is up and running,
                            there is no maintenance required. Updates happen automatically, and you are free to oversee
                            the administrative side of your business with no worries. </div>
                    </div>
                </div>

                <div class="category_filter">
                    <div class="col-md-4 btn-list-grid">
                        <div class="btn-group">
                            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large"></i></button>
                            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                    </div>

                    <div class="pagination-right">
                        <div class="sort-by-wrapper">
                            <div class="col-md-2 text-right sort-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                            </div>
                            <div class="col-md-3 text-right sort">
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=pd.name&amp;order=ASC">
                                        Name (A - Z)</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=pd.name&amp;order=DESC">
                                        Name (Z - A)</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=p.price&amp;order=ASC">
                                        Price (Low &gt; High)</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=p.price&amp;order=DESC">
                                        Price (High &gt; Low)</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=p.model&amp;order=ASC">
                                        Model (A - Z)</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?sort=p.model&amp;order=DESC">
                                        Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <div class="show-wrapper">
                            <div class="col-md-1 text-right show">
                                <label class="control-label" for="input-limit">Show:</label>
                            </div>
                            <div class="col-md-2 text-right limit">
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?limit=9" selected="selected">9</option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?limit=25">25
                                    </option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?limit=50">50
                                    </option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?limit=75">75
                                    </option>
                                    <option value="https://chefonline.com/epos/enterprise-epos-packages?limit=100">100
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="compare-total">
                        <a href="https://chefonline.com/epos/compare" id="compare-total">Product Compare (0)</a>
                    </div>
                </div>

                <div class="row category-product">
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">
                                <div class="image">
                                    <a href="package_detail.html">
                                        <img src="image/cache/catalog/Chefonline-epos-2021-275x358.jpg" alt="ChefOnline EPoS **" title="ChefOnline EPoS **" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="#">ChefOnline
                                                EPoS **</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">ChefOnline EPoS has a simple, elegant design, making it highly
                                            suitable for an above-the-counter placement, with a sensitive, capacitive
                                            touch screen ensuring fast and efficient data input, all within a beautiful,
                                            scratch-proof, 15” operative screen.The graceful design gives it a high-end
                                            look while..</p>

                                        <p class="price">
                                            £699.00 </p>
                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('53');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/enterprise-epos-packages/chefonline-epos'">ViewDetails</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('53');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">£699.00 </p>
                                        <div class="button-group list">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('53');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('53', '1');">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('53');"><i class="fa fa-area-chart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">
                                <div class="image">
                                    <a href="#">
                                        <img src="image/cache/catalog/our-products_1-275x358.jpg" alt="ChefOnline EPoS - Jazz **" title="ChefOnline EPoS - Jazz **" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="#">ChefOnline EPoS - Jazz **</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Suitable for above the counter, Enterprise EPoS Nino is an
                                            elegant design for your retail purpose. The Capacitive screen makes it more
                                            sensitive compared to resistive screens that ensures fast and efficient data
                                            input and processing with a full 14.1” operative screen.
                                            The device is elegant and its..</p>

                                        <p class="price">£1,199.00 </p>
                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('52');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/enterprise-epos-packages/enterprise-epos-nino'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('52');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">£1,199.00 </p>
                                        <div class="button-group list">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('52');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addtocart" onclick="cart.add('52', '1');">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('52');"><i class="fa fa-area-chart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">
                                <div class="image">
                                    <a href="#">
                                        <img src="image/cache/catalog/our-products2-275x358.jpg" alt="ChefOnline EPoS - Yuno **" title="ChefOnline EPoS - Yuno **" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-details">
                                    <div class="caption">
                                        <h4><a href="#">ChefOnline EPoS - Yuno **</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Yuno is a robust but stylish and compact product, designed by
                                            AURES to suit the many applications of the POS vertical sectors.It is a
                                            fanless, compact, high-performance system, fitted with a Quad-Core Bay Trail
                                            platform; it is available in 2 formats (traditional 4:3 15.1’’ screen and
                                            Wide 16:9 15.6’..</p>

                                        <p class="price">£1,099.00 </p>
                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/enterprise-epos-packages/pro-enterprise-epos-yuno'">View Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('51');"><i class="fa fa-area-chart"></i></button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">£1,099.00 </p>
                                        <div class="button-group list">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addtocart" onclick="cart.add('51', '1');">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('51');"><i class="fa fa-area-chart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">
                                <div class="image">
                                    <a href="#">
                                        <img src="image/cache/catalog/our-products3-275x358.jpg" alt="ChefOnline EPoS - Sango **" title="ChefOnline EPoS - Sango **" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="#">ChefOnline EPoS - Sango **</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Sango: designed to free up space beneath your terminal’s
                                            touchscreen!Sango is a completely new concept – original and innovative – of
                                            all-in-one till management system; one of its many unique features is to
                                            completely free-up the space under the touch screen.With no intrusive base,
                                            stand or foot, un..</p>

                                        <p class="price">£1,299.00 </p>
                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('50');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/enterprise-epos-packages/sango-epos'">View Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('50');"><i class="fa fa-area-chart"></i></button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">£1,299.00 </p>
                                        <div class="button-group list">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('50');"><i class="fa fa-heart"></i></button>
                                            <button type="button" class="addtocart" onclick="cart.add('50', '1');">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('50');"><i class="fa fa-area-chart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <div class="col-sm-6 text-left page-link"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    include "footer.php";
    ?>