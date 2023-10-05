<?php

include('header.php');

?>


<body class="product-category-61 layout-2 left-col">
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
            <li><a href="https://chefonline.com/epos/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://chefonline.com/epos/add-on">Add ons</a></li>
        </ul>
        <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box left-category">
                    <div class="box-heading">Categories</div>
                    <div class="box-content ">
                        <ul class="box-category treeview-list treeview">
                            <li>
                                <a href="https://chefonline.com/epos/enterprise-epos-packages">ChefOnline EPoS
                                    Packages</a>
                            </li>
                            <li>
                                <a href="https://chefonline.com/epos/add-on" class="active">Add ons</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div id="content" class="col-sm-9 category ">
                <div class="category-top">
                    <h1 class="page-title">Add ons</h1>
                    <div class="category_thumb">
                        <div class="col-sm-10 category_description">Streamline your business with ChefOnline EPoS
                            Add-Ons. Enjoy hassle-free management, organise every procedure, and watch the magic happen
                            before your eyes! Everything that happens within your business or with your employees can be
                            easily managed with just a few taps.<br><br>Business management has never been easier!</div>
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
                                    <option value="https://chefonline.com/epos/add-on?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=pd.name&amp;order=ASC">Name
                                        (A - Z)</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=pd.name&amp;order=DESC">Name
                                        (Z - A)</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=p.price&amp;order=ASC">Price
                                        (Low &gt; High)</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=p.price&amp;order=DESC">Price
                                        (High &gt; Low)</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=p.model&amp;order=ASC">Model
                                        (A - Z)</option>
                                    <option value="https://chefonline.com/epos/add-on?sort=p.model&amp;order=DESC">Model
                                        (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <div class="show-wrapper">
                            <div class="col-md-1 text-right show">
                                <label class="control-label" for="input-limit">Show:</label>
                            </div>
                            <div class="col-md-2 text-right limit">
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="https://chefonline.com/epos/add-on?limit=9" selected="selected">9
                                    </option>
                                    <option value="https://chefonline.com/epos/add-on?limit=25">25</option>
                                    <option value="https://chefonline.com/epos/add-on?limit=50">50</option>
                                    <option value="https://chefonline.com/epos/add-on?limit=75">75</option>
                                    <option value="https://chefonline.com/epos/add-on?limit=100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="compare-total"><a href="https://chefonline.com/epos/compare" id="compare-total">Product
                            Compare (0)</a></div>
                </div>

                <div class="row category-product">
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">
                                <div class="image">
                                    <a href="https://chefonline.com/epos/add-on/modem">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/modem-275x358.jpg" alt="Modem" title="Modem" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=63"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/modem">Modem</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">A simple caller ID product modem, built for service like fast
                                            food EPoS terminals and incoming call logging. Superbly customized, the
                                            modem is built on specifications that customers actually wanted. This has
                                            resulted in an even more reliable unit at a lower cost. This is a hardware
                                            only product an..</p>

                                        <p class="price">
                                            £99.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('63');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/modem'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('63');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £99.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('63');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('63', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('63');"><i class="fa fa-area-chart"></i>
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
                                    <a href="https://chefonline.com/epos/add-on/post-code-database-license">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/dbase-license-275x358.jpg" alt="Post Code Database License" title="Post Code Database License" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=68"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/post-code-database-license">Post
                                                Code Database License</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Post Code Database License..</p>

                                        <p class="price">
                                            £50.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('68');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/post-code-database-license'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('68');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £50.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('68');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('68', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('68');"><i class="fa fa-area-chart"></i>
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
                                    <a href="https://chefonline.com/epos/add-on/thermal-receipt-printer">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/printer-275x358.jpg" alt="Thermal Receipt Printer" title="Thermal Receipt Printer" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=61"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/thermal-receipt-printer">Thermal
                                                Receipt Printer</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Specially designed for POS and service applications, the thermal
                                            printer features a triple interface (including Ethernet) in a minimalist
                                            compact and cubic style, available in black or white.

                                            With its front receipt printout, it ensures optimum protection against dust,
                                            crumbs and liquid splashes i..</p>

                                        <p class="price">
                                            £99.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/thermal-receipt-printer'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('61');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £99.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('61');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('61', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('61');"><i class="fa fa-area-chart"></i>
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
                                    <a href="https://chefonline.com/epos/add-on/tab-software-license">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/handheld-275x358.jpg" alt="Tab Software License (Your Own Hardware)" title="Tab Software License (Your Own Hardware)" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=73"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/tab-software-license">Tab
                                                Software License (Your Own Hardware)</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Tab Software License (Your Own Hardware)..</p>

                                        <p class="price">
                                            £199.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('73');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/tab-software-license'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('73');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £199.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('73');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('73', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('73');"><i class="fa fa-area-chart"></i>
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
                                    <a href="https://chefonline.com/epos/add-on/electronic-cash-draw">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/cash-275x358.jpg" alt="Electronic Cash Draw" title="Electronic Cash Draw" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=62"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/electronic-cash-draw">Electronic
                                                Cash Draw</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Electronic Cash Draw..</p>

                                        <p class="price">
                                            £79.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('62');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/electronic-cash-draw'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('62');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £79.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('62');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('62', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('62');"><i class="fa fa-area-chart"></i>
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
                                    <a href="https://chefonline.com/epos/add-on/annual-pos-software-license-support">
                                        <img src="https://chefonline.com/epos/image/cache/catalog/license-275x358.jpg" alt="Annual PoS Software License &amp; Support (Remote Support)" title="Annual PoS Software License &amp; Support (Remote Support)" class="img-responsive" />
                                    </a>

                                    <!-- <div class="quickview-button" title="Quick view"> <a class="quickbox" href="https://chefonline.com/epos/index.php?route=product/quick_view&amp;product_id=71"><i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                                </div>
                                <div class="product-details">
                                    <div class="caption">

                                        <h4><a href="https://chefonline.com/epos/add-on/annual-pos-software-license-support">Annual
                                                PoS Software License &amp; Support (Remote Support)</a></h4>
                                        <div class="rating list">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                        <p class="desc">Annual PoS Software License &amp; Support (Remote Support)..</p>

                                        <p class="price">
                                            £260.00 </p>
                                        <!-- 			                <div class="rating">
                 													<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
											                </div>
                -->

                                    </div>
                                    <div class="button-group grid">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('71');"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="addtocart" onclick="location.href='https://chefonline.com/epos/add-on/annual-pos-software-license-support'">View
                                            Details</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('71');"><i class="fa fa-area-chart"></i>
                                        </button>
                                    </div>
                                    <div class="list-right">
                                        <p class="price">
                                            £260.00 </p>
                                        <div class="button-group list">

                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('71');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" class="addtocart" onclick="cart.add('71', '1');">Add
                                                to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('71');"><i class="fa fa-area-chart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <div class="col-sm-6 text-left page-link"></div>
                    <!-- <div class="col-sm-6 text-right page-result">Showing 1 to 6 of 6 (1 Pages)</div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php

    include('footer.php');

    ?>