<?php include_once('../includes/header.php'); ?>

<body id="bikini" class="template-collection">
    <style type="text/css">
    #wh-widget-send-button {
        margin: 0 !important;
        padding: 0 !important;
        position: fixed !important;
        z-index: 16000160 !important;
        bottom: 0 !important;
        text-align: center !important;
        height: 90px;
        width: 60px;
        visibility: visible;
        transition: none !important;
    }

    #wh-widget-send-button.wh-widget-right {
        right: 0;
    }

    #wh-widget-send-button.wh-widget-left {
        left: 10px;
    }

    #wh-widget-send-button iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    div.clear {
        clear: both;
    }
    </style>

    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <div class="gf-menu-device-wrapper">
            <div class="close-menu">x</div>
            <div class="gf-menu-device-container"></div>
        </div>
    </nav>

    <div id="PageContainer" class="drawer-page-content"></div>
    <div class="quick-view"></div>

    <div class="wrapper-container">
        <?php include_once('../includes/nav.php'); ?>

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <h1>contact us</h1>
            <a href="/" title="Back to the frontpage">Home</a>

            <span aria-hidden="true" class="breadcrumb__sep">/</span>
            <span>contact us</span>
        </nav>

        <main class="main-content">
            <div class="grid__item">
                <div class="grid">
                    <div class="grid__item">
                        <div id="shopify-section-contact-us" class="shopify-section">
                            <div data-section-id="contact-us" data-section-type="About section" class="contact-us">

                                <div class="contact-page-one">

                                    <div class="grid-uniform detail-section">
                                        <div class="container">

                                            <div
                                                class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half icon-section">
                                                <div class="icon">
                                                    <span class=""><i class="fa fa-location-arrow"
                                                            aria-hidden="true"></i></span>
                                                </div>

                                                <h4>ADDRESS</h4>


                                                <p>62,74th Avenue-galendale NY 11385 , US</p>

                                            </div>


                                            <div
                                                class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half icon-section">
                                                <div class="icon">
                                                    <span class=""><i class="fa fa-envelope-o"
                                                            aria-hidden="true"></i></span>
                                                </div>

                                                <h4>EMAIL</h4>


                                                <p><a href="">email:contact@domain.com</a></p>

                                            </div>


                                            <div
                                                class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half icon-section">
                                                <div class="icon">
                                                    <span class=""><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                </div>

                                                <h4>PHONE</h4>


                                                <p>call:+1800-567-879</p>

                                            </div>


                                            <div
                                                class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half icon-section">
                                                <div class="icon">
                                                    <span class=""><i class="fa fa-clock-o"
                                                            aria-hidden="true"></i></span>
                                                </div>

                                                <h4>TIMING</h4>


                                                <p>available at 10am-8pm</p>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="grid-uniform">

                                        <div class="map-section">
                                            <div id="map"><iframe style="border:0;scrolling=" no=""
                                                    src="https://maps.google.co.in/?ie=UTF8&amp;t=m&amp;ll=-37.823006,144.977388&amp;spn=0.02034,0.042915&amp;z=14&amp;output=embed"
                                                    width="960" height="578"></iframe> </div>
                                        </div>


                                        <div class="container">
                                            <div class="contact">
                                                <form method="post" action="/contact#contact_form" id="contact_form"
                                                    accept-charset="UTF-8" class="contact-form"><input type="hidden"
                                                        name="form_type" value="contact"><input type="hidden"
                                                        name="utf8" value="✓">
                                                    <div class="grid__item contact-frm">

                                                        <h3>SEND US A MESSAGE</h3>
                                                        <div class="header-border"></div>

                                                        <div
                                                            class="grid__item wide--one-half post-large--one-half large--one-half medium--grid__item">



                                                            <label for="ContactFormName"
                                                                class="label--hidden">Name</label>
                                                            <input type="text" id="ContactFormName" name="contact[name]"
                                                                placeholder="Name" autocapitalize="words" value="">
                                                            <label for="ContactFormEmail"
                                                                class="label--hidden">Email</label>
                                                            <input type="email" id="ContactFormEmail"
                                                                name="contact[email]" placeholder="Email"
                                                                autocorrect="off" autocapitalize="off" value="">

                                                            <label for="ContactFormPhone"
                                                                class="label--hidden">translation missing:
                                                                en.contact.form.phone</label>
                                                            <input type="tel" id="ContactFormPhone"
                                                                name="contact[translation-missing-en-contact-form-phone]"
                                                                placeholder="phone" pattern="[0-9\-]*" value="">
                                                        </div>
                                                        <div
                                                            class="grid__item wide--one-half post-large--one-half large--one-half medium--grid__item">
                                                            <label for="ContactFormMessage"
                                                                class="label--hidden">Message</label>
                                                            <textarea rows="7" id="ContactFormMessage"
                                                                name="contact[body]" placeholder="Message"></textarea>
                                                            <button class="contact-btn">Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="grid-uniform social-icon-wrapper">
                                        <div class="wrapper">
                                            <ul class="social-icon">

                                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>


                                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>


                                                <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </li>


                                                <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>


                                                <li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <style>
                            .contact-page-one .contact {
                                margin-top: -200px;
                            }

                            .contact-page-one .icon span {
                                background: #ffe400;
                            }

                            .contact-page-one .icon span {
                                color: #606060;
                            }

                            .contact-page-one .icon-section:hover .icon span::after {
                                background: #ec006c;
                            }

                            .contact-page-one h4 {
                                color: #606060;
                            }

                            .contact-page-one .detail-section p {
                                color: #747474;
                            }

                            .contact-page-one h3 {
                                color: #000;
                            }

                            .contact-page-one .header-border {
                                background: #ec006c;
                            }

                            .contact-page-one .contact-frm {
                                background: #ffffff;
                            }

                            .contact-page-one .header-border::after {
                                border-bottom: 3px solid #ec006c;
                            }

                            .contact-page-one .contact {
                                border-bottom: 1px solid #f7f7f7;
                            }

                            .contact-page-one .contact-btn {
                                background: #ffe400;
                                color: #606060;
                            }

                            .contact-page-one .contact-btn:hover {
                                background: #ec006c;
                                color: #ffffff;
                            }

                            .contact-page-one .social-icon a {
                                color: #000;
                            }

                            .contact-page-one .social-icon a:hover::after {
                                background: #ec006c;
                            }

                            .contact-page-one .social-icon a:hover {
                                color: #ffffff;
                            }

                            .contact-page-one a {
                                color: #606060;
                                transition: all 0.3s linear 0s;
                            }

                            .contact-page-one a:hover {
                                color: #ec006c;
                            }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('../includes/footer.php'); ?>
    </div>