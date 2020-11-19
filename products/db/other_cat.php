<?php
$products = array();

/**
 * Other Stats Here
 */
$product40 = array();
$product40['id'] = 40;
$product40['title'] = "Genuine Leather Designer Women Handbags";
$product40['price'] = "$8.70";
$product40['sale_price'] = "$8.50";
$product40['meta'] = array(
    "theme" => "Fairy",
    "material" => "Resin",
    "style" => "Pastoral",
    "type" => "Decorative Flowers & Wreaths",
    "style" => "Mordern"
);

$product40['featured_image'] = "/assets/images/products/product-image-1583648402_480x480.jpg";
$product40['images'] = array();


$product41 = array();
$product41['id'] = 41;
$product41['title'] = "Multi-functional Scientific Calculator Computing Tools for School";
$product41['price'] = "$17.67";
$product41['sale_price'] = "$22.89";
$product41['meta'] = array(
    "style" => "Modern",
    "theme" => "Pattern",
    "classification" => "Window Stickers,For Wall,For Tile,Furniture Stickers,For Refrigerator",
    "specification" => "Single-piece Package",
    "scenerios" => "Wall",
    "censor_code" => "Coffee Cup Vinyl Wall Sticker For Kitchen",
    "material" => "PVC",
    "pattern" => "Plane Wall Sticker",
    "material" => "Vinyl"
);

$product41['featured_image'] = "/assets/images/products/product-image-1583690060_480x480.jpg";
$product41['images'] = array();

$product42 = array();
$product42['id'] = 42;
$product42['title'] = "Magnetic Whiteboard Eraser Cleaner";
$product42['price'] = "$26.14";
$product42['sale_price'] = "$15.38";
$product42['meta'] = array(
    "style" => "Artificial",
    "material" => "Resin",
    "theme" => "Animal",
    "use" => "Home Garden Decoration",
    "size" => "as the picture shows"
);

$product42['featured_image'] = "/assets/images/products/product-image-1157566612_480x480.jpg";
$product42['images'] = array();


$product43 = array();
$product43['id'] = 43;
$product43['title'] = "Multi-functional Scientific Calculator Computing Tools";
$product43['price'] = "$17.94";
$product43['sale_price'] = "$29.98";
$product43['meta'] = array(
    "specification" => "Single-piece Package",
    "style" => "Creative",
    "pattern" => "Plane Wall Sticker",
    "scenerios" => "Wall",
    "material" => "vinyl"
);

$product43['featured_image'] = "/assets/images/products/product-image-1583633568_480x480.jpg";

$product43['images'] = array();


$product44 = array();
$product44['id'] = 44;
$product44['title'] = "High Quality Big Long Handle Transparent Umbrella";
$product44['price'] = "$29.18";
$product44['sale_price'] = "$23.18";
$product44['meta'] = array(
    "style" => "Modern",
    "material" => "Spandex",
    "theme" => "Sports",
    "size" => "40cm*40cm/15.7*15.7"
);

$product44['featured_image'] = "/assets/images/products/product-image-751039946_480x480.jpg";
$product44['images'] = array();


$product45 = array();
$product45['id'] = 45;
$product45['title'] = "Capacitive Touch Screen Stylus Pen";
$product45['price'] = "$74.20";
$product45['sale_price'] = "$56.40";
$product45['meta'] = array(
    "style" => "Flower Bouquet",
    "material" => "Plastic",
    "model" => "Artificial flower",
    "occasion" => "Valentine's Day",
    "type" => "Decorative Flowers & Wreaths,Peony",
    "classification" => "rtificial Flowers"
);

$product45['featured_image'] = "/assets/images/products/product-image-1583632228_480x480.jpg";
$product45['images'] = array();


/* 
* Other Ends Here
*/

array_push($products, $product40);
array_push($products, $product41);
array_push($products, $product42);
array_push($products, $product43);
array_push($products, $product44);
array_push($products, $product45);

function getAllOther() {
    return json_encode($GLOBALS['products']);
}
?>