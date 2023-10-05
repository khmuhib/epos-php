<?php

include('header.php');

?>

<body class="information-contact layout-1">
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
                    <!--<div id="breadcrumb-content"></div>-->
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="breadcrumb-content"> 
        </div>
      </div>
    </div>
  </div>
</div> -->

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
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://chefonline.com/epos/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://chefonline.com/epos/contact">Contact Us</a></li>
        </ul>
        <div class="row">
            <div class="">
                <div id="content" class="hide">
                    <h1 class="page-title">Contact Us</h1>
                </div>
                <h3></h3>
                <div class="contact-info">
                    <!-- 		  <div class="col-md-5">
        <div class="map">
                    <script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=21.182785&long=72.831834&zoom=10&width=440&height=350&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle="></script>
        </div>
		
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4964.8117599736215!2d-0.07152400000000002!3d51.524115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39660044e279fd66!2sChefOnline!5e0!3m2!1sen!2suk!4v1560925850107!5m2!1sen!2suk" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div> -->
                    <div class="col-md-10 col-md-offset-1">

                        <form action="https://chefonline.com/epos/contact" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset>
                                <!-- <h3>Contact Form</h3> -->
                                <div class="form-group required">
                                    <!-- <label class="col-sm-2 control-label" for="input-name">Your Name</label> -->
                                    <div class="col-sm-6">
                                        <input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <!-- <label class="col-sm-2 control-label" for="input-business">Business Name</label> -->
                                    <div class="col-sm-6">
                                        <input type="text" name="business" value="" id="input-business" class="form-control" placeholder="Business Name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="postcode" value="" id="input-postcode" class="form-control" placeholder="Postcode" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <!-- <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label> -->
                                    <div class="col-sm-12">
                                        <textarea name="enquiry" rows="6" id="input-enquiry" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>
                                <fieldset>
                                    <!-- <legend>Captcha</legend> -->
                                    <div class="form-group required">
                                        <!-- <label class="col-sm-2 control-label">Please complete the captcha validation below</label>-->
                                        <div class="col-sm-12">
                                            <div class="g-recaptcha pull-right" data-sitekey="6Lct9EoiAAAAAOaI4pYVw6Jr8tpqKDJLhcF3m54I"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input class="btn btn-primary" type="submit" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>
    <?php

    include('footer.php');

    ?>