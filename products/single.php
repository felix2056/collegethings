<?php include_once('../includes/header.php'); ?>

<body class="template-index" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">

    <a class="in-page-link visually-hidden skip-link" href="#MainContent">
        Skip to content
    </a>

    <?php include_once('../includes/nav.php'); ?>

    <?php require_once('../products/db/products.php'); ?>

    <?php if ( isset($_GET['product'])) : ?>
    
    <?php
        $id = (int) $_GET['product'];
        $single = json_decode(find($id), true);
        // echo $_GET['product'];
    ?>

    <div class="page-container page-element is-moved-by-drawer">
        <main class="main-content" id="MainContent" role="main">
            <div id="shopify-section-product-template" class="shopify-section">
                <div class="page-width" itemscope="" itemtype="http://schema.org/Product"
                    id="ProductSection-product-template" data-section-id="product-template" data-section-type="product"
                    data-enable-history-state="true" data-ajax="true" data-stock="false">

                    <meta itemprop="name" content="<?php echo $single['title']; ?>">
                    <meta itemprop="url"
                        content="/products/single.php?product=<?php echo $product['id'] ?>">
                    <meta itemprop="image" content="<?php echo $single['featured_image']; ?>">


                    <div class="grid product-single">
                        <div class="grid__item medium-up--three-fifths">
                            <div class="photos">
                                <div class="photos__item photos__item--main">
                                    <div class="product-single__photo" id="ProductPhoto">

                                        <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428548_1024x1024.jpg?v=1602321417"
                                            class="js-modal-open-product-modal" id="ProductPhotoLink-product-template"
                                            aria-expanded="false">
                                            <img src="<?php echo $single['featured_image']; ?>"
                                                alt="<?php echo $single['title']; ?>"
                                                id="ProductPhotoImg-product-template">
                                        </a>
                                    </div>
                                </div>

                                <!-- <div class="photos__item photos__item--thumbs">
                                    <div class="product-single__thumbnails slick-initialized slick-slider slick-vertical"
                                        id="ProductThumbs-product-template"><button type="button"
                                            class="slick-prev slick-arrow" aria-disabled="false"
                                            style="display: block;"><span class="medium-up--hide"><svg
                                                    aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-arrow-left" viewBox="0 0 32 32">
                                                    <path fill="#444"
                                                        d="M24.333 28.205l-1.797 1.684L7.666 16l14.87-13.889 1.797 1.675L11.269 16z">
                                                    </path>
                                                </svg></span><span class="small--hide"><svg aria-hidden="true"
                                                    focusable="false" role="presentation" class="icon icon-arrow-up"
                                                    viewBox="0 0 32 32">
                                                    <path fill="#444"
                                                        d="M26.984 23.5l1.516-1.617L16 8.5 3.5 21.883 5.008 23.5 16 11.742z">
                                                    </path>
                                                </svg></span></button>

                                        <div aria-live="polite" class="slick-list draggable" style="height: 402px;">
                                            <div class="slick-track"
                                                style="opacity: 1; height: 1340px; transform: translate3d(0px, -804px, 0px);">
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="0" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428538_480x480.jpg?v=1602321412"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428538_1024x1024.jpg?v=1602321412"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428538_160x160.jpg?v=1602321412"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="1" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428544_480x480.jpg?v=1602321412"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428544_1024x1024.jpg?v=1602321412"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428544_160x160.jpg?v=1602321412"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="2" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428550_480x480.jpg?v=1602321413"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428550_1024x1024.jpg?v=1602321413"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428550_160x160.jpg?v=1602321413"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="3" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428545_480x480.jpg?v=1602321414"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428545_1024x1024.jpg?v=1602321414"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428545_160x160.jpg?v=1602321414"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="4" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428552_480x480.jpg?v=1602321414"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428552_1024x1024.jpg?v=1602321414"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428552_160x160.jpg?v=1602321414"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="5" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428546_480x480.jpg?v=1602321415"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428546_1024x1024.jpg?v=1602321415"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428546_160x160.jpg?v=1602321415"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide slick-current slick-active"
                                                    data-slick-index="6" aria-hidden="false" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428549_480x480.jpg?v=1602321416"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428549_1024x1024.jpg?v=1602321416"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428549_160x160.jpg?v=1602321416"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  is-active  slick-slide slick-active"
                                                    data-slick-index="7" aria-hidden="false" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428548_480x480.jpg?v=1602321417"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428548_1024x1024.jpg?v=1602321417"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428548_160x160.jpg?v=1602321417"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide slick-active"
                                                    data-slick-index="8" aria-hidden="false" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428547_480x480.jpg?v=1602321419"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428547_1024x1024.jpg?v=1602321419"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428547_160x160.jpg?v=1602321419"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                                <div class="product-single__thumbnail-item  slick-slide"
                                                    data-slick-index="9" aria-hidden="true" style="width: 101px;">
                                                    <a href="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428551_480x480.jpg?v=1602321420"
                                                        data-zoom="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428551_1024x1024.jpg?v=1602321420"
                                                        class="product-single__thumbnail product-single__thumbnail-product-template">
                                                        <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428551_160x160.jpg?v=1602321420"
                                                            alt="LED Night Light With Wireless USB Rechargeable Motion Sensor">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>



















                                        <button type="button" class="slick-next slick-arrow" style="display: block;"
                                            aria-disabled="false"><span class="medium-up--hide"><svg aria-hidden="true"
                                                    focusable="false" role="presentation" class="icon icon-arrow-right"
                                                    viewBox="0 0 32 32">
                                                    <path fill="#444"
                                                        d="M7.667 3.795l1.797-1.684L24.334 16 9.464 29.889l-1.797-1.675L20.731 16z">
                                                    </path>
                                                </svg></span><span class="small--hide"><svg aria-hidden="true"
                                                    focusable="false" role="presentation" class="icon icon-arrow-down"
                                                    viewBox="0 0 32 32">
                                                    <path fill="#444"
                                                        d="M26.984 8.5l1.516 1.617L16 23.5 3.5 10.117 5.008 8.5 16 20.258z">
                                                    </path>
                                                </svg></span></button>
                                    </div>
                                </div> -->

                                <script>
                                var sliderArrows = {
                                    left: "\u003csvg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon icon-arrow-left\" viewBox=\"0 0 32 32\"\u003e\u003cpath fill=\"#444\" d=\"M24.333 28.205l-1.797 1.684L7.666 16l14.87-13.889 1.797 1.675L11.269 16z\"\/\u003e\u003c\/svg\u003e",
                                    right: "\u003csvg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon icon-arrow-right\" viewBox=\"0 0 32 32\"\u003e\u003cpath fill=\"#444\" d=\"M7.667 3.795l1.797-1.684L24.334 16 9.464 29.889l-1.797-1.675L20.731 16z\"\/\u003e\u003c\/svg\u003e",
                                    up: "\u003csvg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon icon-arrow-up\" viewBox=\"0 0 32 32\"\u003e\u003cpath fill=\"#444\" d=\"M26.984 23.5l1.516-1.617L16 8.5 3.5 21.883 5.008 23.5 16 11.742z\"\/\u003e\u003c\/svg\u003e",
                                    down: "\u003csvg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon icon-arrow-down\" viewBox=\"0 0 32 32\"\u003e\u003cpath fill=\"#444\" d=\"M26.984 8.5l1.516 1.617L16 23.5 3.5 10.117 5.008 8.5 16 20.258z\"\/\u003e\u003c\/svg\u003e"
                                }
                                </script>

                            </div>
                        </div>

                        <div class="grid__item medium-up--two-fifths" itemprop="offers" itemscope=""
                            itemtype="http://schema.org/Offer">
                            <div class="product-single__info-wrapper">
                                <meta itemprop="priceCurrency" content="USD">
                                <link itemprop="availability" href="http://schema.org/InStock">

                                <div class="product-single__meta small--text-center">
                                    <h1 itemprop="name" class="product-single__title"><?php echo $single['title']; ?></h1><a style="text-decoration: none!important;"
                                        class="areviews_main_header_container" href="javascript:void(0);"> <span
                                            class="main_starts_box areviews_header_rating"
                                            style="display:inline-block;font-size:16px;margin:5px 0"> <i
                                                style="color:#f3c621" class="far fa-star" aria-hidden="true"></i> <i
                                                style="color:#f3c621" class="far fa-star" aria-hidden="true"></i> <i
                                                style="color:#f3c621" class="far fa-star" aria-hidden="true"></i> <i
                                                style="color:#f3c621" class="far fa-star" aria-hidden="true"></i> <i
                                                style="color:#f3c621" class="far fa-star" aria-hidden="true"></i> <span
                                                style="display: inline-block;color:#212020"
                                                class="areviews_no_reviews_title">Write Review</span> </span> </a>

                                    <ul class="product-single__meta-list list--no-bullets list--inline">
                                        <li id="ProductSaleTag-product-template" class="hide">
                                            <div class="product-tag">
                                                Sale
                                            </div>
                                        </li>
                                        <li>

                                            <span id="ProductPrice-product-template" class="product-single__price"
                                                itemprop="price" content="17.34">
                                                <?php echo $single['price']; ?>
                                            </span>
                                        </li>

                                        <li>
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"
                                                class="product-single__price product-single__price--compare">
                                                <?php echo $single['sale_price']; ?>
                                            </s>
                                        </li>
                                    </ul>
                                </div>

                                <hr>


                                <form method="post" action="/cart/add" id="AddToCartForm-product-template"
                                    accept-charset="UTF-8" class="product-form" enctype="multipart/form-data"><input
                                        type="hidden" name="form_type" value="product"><input type="hidden" name="utf8"
                                        value="✓">


                                    <div class="selector-wrapper js product-form__item">
                                        <label for="SingleOptionSelector-product-template-0">Emitting Color</label>
                                        <select
                                            class="single-option-selector single-option-selector-product-template product-form__input"
                                            id="SingleOptionSelector-0" data-name="Emitting Color" data-index="option1">

                                            <option value="30cm-20LED" selected="selected">30cm-20LED</option>

                                            <option value="21cm-14LED">21cm-14LED</option>

                                            <option value="19cm-24LED">19cm-24LED</option>

                                            <option value="50cm-36LED">50cm-36LED</option>

                                            <option value="15cm-10LED">15cm-10LED</option>

                                            <option value="19cm-10LED">19cm-10LED</option>

                                            <option value="30cm-40LED">30cm-40LED</option>

                                            <option value="40cm-60LED">40cm-60LED</option>

                                            <option value="9cm-6LED">9cm-6LED</option>

                                        </select>
                                    </div>

                                    <div class="selector-wrapper js product-form__item">
                                        <label for="SingleOptionSelector-product-template-1">Color</label>
                                        <select
                                            class="single-option-selector single-option-selector-product-template product-form__input"
                                            id="SingleOptionSelector-1" data-name="Color" data-index="option2">

                                            <option value="Warm White" selected="selected">Warm White</option>

                                            <option value="White">White</option>

                                        </select>
                                    </div>

                                    <div class="selector-wrapper js product-form__item">
                                        <label for="SingleOptionSelector-product-template-2">Ships From</label>
                                        <select
                                            class="single-option-selector single-option-selector-product-template product-form__input"
                                            id="SingleOptionSelector-2" data-name="Ships From" data-index="option3">

                                            <option value="China" selected="selected">China</option>

                                            <option value="Russian Federation">Russian Federation</option>

                                            <option value="Spain">Spain</option>

                                        </select>
                                    </div>



                                    <select name="id" id="ProductSelect-product-template"
                                        class="product-form__variants no-js">

                                        <option selected="selected" data-sku="34739417-30cm-20led-warm-white-china"
                                            value="36453156814920">

                                            30cm-20LED / Warm White / China - $17.34 USD

                                        </option>

                                        <option data-sku="34739417-30cm-20led-white-china" value="36453156847688">

                                            30cm-20LED / White / China - $17.34 USD

                                        </option>

                                        <option data-sku="34739417-30cm-20led-warm-white-russian-federation"
                                            value="36453156880456" disabled="disabled">

                                            30cm-20LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-20led-white-russian-federation"
                                            value="36453156913224" disabled="disabled">

                                            30cm-20LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-20led-warm-white-spain" value="36453156945992"
                                            disabled="disabled">

                                            30cm-20LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-20led-white-spain" value="36453156978760"
                                            disabled="disabled">

                                            30cm-20LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-21cm-14led-warm-white-china" value="36453157011528">

                                            21cm-14LED / Warm White / China - $15.66 USD

                                        </option>

                                        <option data-sku="34739417-21cm-14led-white-china" value="36453157044296">

                                            21cm-14LED / White / China - $15.66 USD

                                        </option>

                                        <option data-sku="34739417-19cm-24led-warm-white-spain" value="36453157077064"
                                            disabled="disabled">

                                            19cm-24LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-24led-white-spain" value="36453157109832"
                                            disabled="disabled">

                                            19cm-24LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-50cm-36led-warm-white-china" value="36453157142600">

                                            50cm-36LED / Warm White / China - $25.58 USD

                                        </option>

                                        <option data-sku="34739417-50cm-36led-white-china" value="36453157175368">

                                            50cm-36LED / White / China - $25.58 USD

                                        </option>

                                        <option data-sku="34739417-50cm-36led-warm-white-russian-federation"
                                            value="36453157208136" disabled="disabled">

                                            50cm-36LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-50cm-36led-white-russian-federation"
                                            value="36453157240904" disabled="disabled">

                                            50cm-36LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-50cm-36led-warm-white-spain" value="36453157273672"
                                            disabled="disabled">

                                            50cm-36LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-50cm-36led-white-spain" value="36453157306440"
                                            disabled="disabled">

                                            50cm-36LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-15cm-10led-warm-white-spain" value="36453157339208"
                                            disabled="disabled">

                                            15cm-10LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-15cm-10led-white-spain" value="36453157371976"
                                            disabled="disabled">

                                            15cm-10LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-10led-warm-white-china" value="36453157404744">

                                            19cm-10LED / Warm White / China - $12.02 USD

                                        </option>

                                        <option data-sku="34739417-19cm-10led-white-china" value="36453157437512">

                                            19cm-10LED / White / China - $12.02 USD

                                        </option>

                                        <option data-sku="34739417-19cm-10led-warm-white-russian-federation"
                                            value="36453157470280" disabled="disabled">

                                            19cm-10LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-10led-white-russian-federation"
                                            value="36453157503048" disabled="disabled">

                                            19cm-10LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-10led-warm-white-spain" value="36453157535816"
                                            disabled="disabled">

                                            19cm-10LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-10led-white-spain" value="36453157568584"
                                            disabled="disabled">

                                            19cm-10LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-21cm-14led-warm-white-russian-federation"
                                            value="36453157601352" disabled="disabled">

                                            21cm-14LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-21cm-14led-white-russian-federation"
                                            value="36453157634120" disabled="disabled">

                                            21cm-14LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-21cm-14led-warm-white-spain" value="36453157666888"
                                            disabled="disabled">

                                            21cm-14LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-21cm-14led-white-spain" value="36453157699656"
                                            disabled="disabled">

                                            21cm-14LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-15cm-10led-warm-white-china" value="36453157732424">

                                            15cm-10LED / Warm White / China - $14.04 USD

                                        </option>

                                        <option data-sku="34739417-15cm-10led-white-china" value="36453157765192">

                                            15cm-10LED / White / China - $14.04 USD

                                        </option>

                                        <option data-sku="34739417-15cm-10led-warm-white-russian-federation"
                                            value="36453157797960" disabled="disabled">

                                            15cm-10LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-15cm-10led-white-russian-federation"
                                            value="36453157830728" disabled="disabled">

                                            15cm-10LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-40led-warm-white-russian-federation"
                                            value="36453157863496" disabled="disabled">

                                            30cm-40LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-40led-white-russian-federation"
                                            value="36453157896264" disabled="disabled">

                                            30cm-40LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-40led-warm-white-spain" value="36453157929032"
                                            disabled="disabled">

                                            30cm-40LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-40led-white-spain" value="36453157961800"
                                            disabled="disabled">

                                            30cm-40LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-24led-warm-white-china" value="36453157994568">

                                            19cm-24LED / Warm White / China - $20.00 USD

                                        </option>

                                        <option data-sku="34739417-19cm-24led-white-china" value="36453158027336">

                                            19cm-24LED / White / China - $20.00 USD

                                        </option>

                                        <option data-sku="34739417-19cm-24led-warm-white-russian-federation"
                                            value="36453158060104" disabled="disabled">

                                            19cm-24LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-19cm-24led-white-russian-federation"
                                            value="36453158092872" disabled="disabled">

                                            19cm-24LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-40cm-60led-warm-white-china" value="36453158125640">

                                            40cm-60LED / Warm White / China - $26.74 USD

                                        </option>

                                        <option data-sku="34739417-40cm-60led-white-china" value="36453158158408">

                                            40cm-60LED / White / China - $26.74 USD

                                        </option>

                                        <option data-sku="34739417-40cm-60led-warm-white-russian-federation"
                                            value="36453158191176" disabled="disabled">

                                            40cm-60LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-40cm-60led-white-russian-federation"
                                            value="36453158223944" disabled="disabled">

                                            40cm-60LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-40cm-60led-warm-white-spain" value="36453158256712"
                                            disabled="disabled">

                                            40cm-60LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-40cm-60led-white-spain" value="36453158289480"
                                            disabled="disabled">

                                            40cm-60LED / White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-30cm-40led-warm-white-china" value="36453158322248">

                                            30cm-40LED / Warm White / China - $24.14 USD

                                        </option>

                                        <option data-sku="34739417-30cm-40led-white-china" value="36453158355016">

                                            30cm-40LED / White / China - $24.14 USD

                                        </option>

                                        <option data-sku="34739417-9cm-6led-warm-white-china" value="36453158387784">

                                            9cm-6LED / Warm White / China - $9.12 USD

                                        </option>

                                        <option data-sku="34739417-9cm-6led-white-china" value="36453158420552">

                                            9cm-6LED / White / China - $9.12 USD

                                        </option>

                                        <option data-sku="34739417-9cm-6led-warm-white-russian-federation"
                                            value="36453158453320" disabled="disabled">

                                            9cm-6LED / Warm White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-9cm-6led-white-russian-federation"
                                            value="36453158486088" disabled="disabled">

                                            9cm-6LED / White / Russian Federation - Sold Out

                                        </option>

                                        <option data-sku="34739417-9cm-6led-warm-white-spain" value="36453158518856"
                                            disabled="disabled">

                                            9cm-6LED / Warm White / Spain - Sold Out

                                        </option>

                                        <option data-sku="34739417-9cm-6led-white-spain" value="36453158551624"
                                            disabled="disabled">

                                            9cm-6LED / White / Spain - Sold Out

                                        </option>

                                    </select>
                                    <div class="product-form__item product-form__item--quantity">
                                        <label for="Quantity">Quantity</label>
                                        <div class="js-qty">
                                            <input type="text" value="1" id="Quantity" name="quantity" pattern="[0-9]*"
                                                data-line="" class="js-qty__input" aria-live="polite">
                                            <button type="button" class="js-qty__adjust js-qty__adjust--minus"
                                                aria-label="Reduce item quantity by one">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon--wide icon-minus" viewBox="0 0 22 3">
                                                    <path fill="#000" d="M21.5.5v2H.5v-2z" fill-rule="evenodd"></path>
                                                </svg>
                                                <span class="icon__fallback-text">−</span>
                                            </button>
                                            <button type="button" class="js-qty__adjust js-qty__adjust--plus"
                                                aria-label="Increase item quantity by one">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-plus" viewBox="0 0 22 21">
                                                    <path d="M12 11.5h9.5v-2H12V0h-2v9.5H.5v2H10V21h2v-9.5z" fill="#000"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                                <span class="icon__fallback-text">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-form__item product-form__item--submit">
                                        <button type="submit" name="add" id="AddToCart-product-template"
                                            class="btn btn--full product-form__cart-submit">
                                            <span id="AddToCartText-product-template">

                                                Add to Cart

                                            </span>
                                        </button>

                                    </div>
                                </form>

                                <hr>

                                <div class="rte product-single__description" itemprop="description">
                                    <p><span><strong>Brand Name:</strong>
                                            Plutus-Quinn</span><br><span><strong>Type:</strong> Night
                                            Light</span><br><span><strong>Shape:</strong>
                                            Strip</span><br><span><strong>Origin:</strong>
                                            CN(Origin)</span><br><span><strong>Is Bulbs Included:</strong>
                                            Yes</span><br><span><strong>Model Number:</strong>
                                            Y190</span><br><span><strong>Item Type:</strong> Night
                                            Lights</span><br><span><strong>Is Batteries Included:</strong>
                                            Yes</span><br><span><strong>Body Material:</strong>
                                            Aluminum</span><br><span><strong>Battery Type:</strong> LITHIUM
                                            ION</span><br><span><strong>Light Source:</strong> LED
                                            Bulbs</span><br><span><strong>Power Generation:</strong>
                                            motion</span><br><span><strong>Voltage:</strong>
                                            36V</span><br><span><strong>Power Source:</strong> Dry
                                            Battery</span><br><span><strong>Is Batteries Required:</strong>
                                            Yes</span><br><span><strong>Usage:</strong>
                                            Emergency</span><br><span><strong>Wattage:</strong>
                                            0-5W</span><br><span><strong>Certification:</strong>
                                            CCC</span><br><span><strong>Certification:</strong>
                                            ce</span><br><span><strong>Certification:</strong> CQC</span></p>
                                </div>

                                <hr>
                                <!-- /snippets/social-sharing.liquid -->
                                <div class="social-sharing grid medium-up--grid--table">

                                    <div class="grid__item medium-up--one-third medium-up--text-left">
                                        <span class="social-sharing__title">Share</span>
                                    </div>

                                    <div class="grid__item medium-up--two-thirds medium-up--text-right">

                                        <a target="_blank"
                                            href="//www.facebook.com/sharer.php?u=/products/single.php?product=<?php echo $product['id'] ?>"
                                            class="social-sharing__link share-facebook" title="Share on Facebook">
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-facebook" viewBox="0 0 32 32">
                                                <path fill="#444"
                                                    d="M18.222 11.556V8.91c0-1.194.264-1.799 2.118-1.799h2.326V2.667h-3.882c-4.757 0-6.326 2.181-6.326 5.924v2.965H9.333V16h3.125v13.333h5.764V16h3.917l.528-4.444h-4.444z">
                                                </path>
                                            </svg>
                                            <span class="share-title visually-hidden">Share on Facebook</span>
                                        </a>



                                        <a target="_blank"
                                            href="//twitter.com/share?text=LED%20Night%20Light%20With%20Wireless%20USB%20Rechargeable%20Motion%20Sensor&amp;url=/products/single.php?product=<?php echo $product['id'] ?>"
                                            class="social-sharing__link share-twitter" title="Tweet on Twitter">
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-twitter" viewBox="0 0 32 32">
                                                <path fill="#444"
                                                    d="M30.75 6.844c-1.087.481-2.25.806-3.475.956a6.079 6.079 0 0 0 2.663-3.35 12.02 12.02 0 0 1-3.844 1.469A6.044 6.044 0 0 0 21.675 4a6.052 6.052 0 0 0-6.05 6.056c0 .475.05.938.156 1.381A17.147 17.147 0 0 1 3.306 5.106a6.068 6.068 0 0 0 1.881 8.088c-1-.025-1.938-.3-2.75-.756v.075a6.056 6.056 0 0 0 4.856 5.937 6.113 6.113 0 0 1-1.594.212c-.388 0-.769-.038-1.138-.113a6.06 6.06 0 0 0 5.656 4.206 12.132 12.132 0 0 1-8.963 2.507A16.91 16.91 0 0 0 10.516 28c11.144 0 17.231-9.231 17.231-17.238 0-.262-.006-.525-.019-.781a12.325 12.325 0 0 0 3.019-3.138z">
                                                </path>
                                            </svg>
                                            <span class="share-title visually-hidden">Tweet on Twitter</span>
                                        </a>



                                        <a target="_blank"
                                            href="//pinterest.com/pin/create/button/?url=/products/single.php?product=<?php echo $product['id'] ?>&amp;media=//cdn.shopify.com/s/files/1/0004/2395/2390/products/product-image-1519428538_1024x1024.jpg?v=1602321412&amp;description=LED%20Night%20Light%20With%20Wireless%20USB%20Rechargeable%20Motion%20Sensor"
                                            class="social-sharing__link share-pinterest" title="Pin on Pinterest">
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-pinterest" viewBox="0 0 32 32">
                                                <path fill="#444"
                                                    d="M16 2C8.269 2 2 8.269 2 16c0 5.731 3.45 10.656 8.381 12.825-.037-.975-.006-2.15.244-3.212l1.8-7.631s-.45-.894-.45-2.213c0-2.075 1.2-3.625 2.7-3.625 1.275 0 1.887.956 1.887 2.1 0 1.281-.819 3.194-1.238 4.969-.35 1.488.744 2.694 2.212 2.694 2.65 0 4.438-3.406 4.438-7.444 0-3.069-2.069-5.362-5.825-5.362-4.244 0-6.894 3.169-6.894 6.706 0 1.219.363 2.081.925 2.744.256.306.294.431.2.781-.069.256-.219.875-.287 1.125-.094.356-.381.481-.7.35-1.956-.8-2.869-2.938-2.869-5.35 0-3.975 3.356-8.744 10.006-8.744 5.344 0 8.863 3.869 8.863 8.019 0 5.494-3.056 9.594-7.556 9.594-1.512 0-2.931-.819-3.419-1.744 0 0-.813 3.225-.988 3.85-.294 1.081-.875 2.156-1.406 3 1.256.369 2.588.575 3.969.575 7.731 0 14-6.269 14-14 .006-7.738-6.262-14.006-13.994-14.006z">
                                                </path>
                                            </svg>
                                            <span class="share-title visually-hidden">Pin on Pinterest</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="full-width full-width--return-link">
                <a href="/" class="h1 return-link">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-thin-left"
                        viewBox="0 0 32 32">
                        <path fill="#444"
                            d="M10.253 24.134c.269-.269.26-.694 0-.981l-5.764-6.458h24.705c.382 0 .694-.313.694-.694s-.313-.694-.694-.694H4.489l5.755-6.458c.252-.295.278-.703.009-.972s-.738-.286-.99-.009c0 0-6.875 7.552-6.944 7.639s-.208.243-.208.495.139.425.208.495 6.944 7.639 6.944 7.639a.716.716 0 0 0 .99 0z">
                        </path>
                    </svg>
                    Back to Home
                </a>
            </div>


            <script>
            // Override default values of shop.strings for each template.
            // Alternate product templates can change values of
            // add to cart button, sold out, and unavailable states here.
            window.productStrings = {
                addToCart: "Add to Cart",
                soldOut: "Sold Out",
                unavailable: "Unavailable"
            }
            </script>
        </main>

        <?php include_once('../includes/footer.php'); ?>
    </div>
    <?php endif; ?>
</body>
</html>