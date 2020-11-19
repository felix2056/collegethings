<?php

$products = array();

/**
 * Storage Starts Here
*/

$product31 = array();
$product31['id'] = 31;
$product31['title'] = "Casual Genuine Cowhide Leather Bag";
$product31['price'] = "$7.94";
$product31['sale_price'] = "$6.98";
$product31['meta'] = array(
    "theme" => "Modern",
    "style" => "Animal",
    "material" => "Ceramic & Enamel"
);

$product31['featured_image'] = "/assets/images/products/product-image-1583648423_480x480.jpg";
$product31['images'] = array();


$product32 = array();
$product32['id'] = 32;
$product32['title'] = "Magnetic USB Type C Cable 540 Degree Rotate";
$product32['price'] = "$58.70";
$product32['sale_price'] = "$43.90";
$product32['meta'] = array(
    "style" => "Religious",
    "material" => "Metal",
    "theme" => "Mascot",
    "special" => "metal craft",
    "feature" => "collection",
    "size" => "1.69*1.69*3.14 inch"
);

$product32['featured_image'] = "/assets/images/products/product-image-1462541579_480x480.jpg";
$product32['images'] = array();

$product33 = array();
$product33['id'] = 33;
$product33['title'] = "Desktop Foldable Dimmable Eye Protection Study Lamp";
$product33['price'] = "$69.97";
$product33['sale_price'] = "$52.99";
$product33['meta'] = array(
    "material" => "Resin",
    "style" => "Retro and Nostalgic/Old Furniture",
    "theme" => "Architecture",
    "photo_size" => "12.7 x 8.9cm(5 inch) and 10 x 7.6cm(4 inch)"
);

$product33['featured_image'] = "/assets/images/products/product-image-1495419905_480x480.jpg";
$product33['images'] = array();


$product34 = array();
$product34['id'] = 34;
$product34['title'] = "Magnetic USB Cable Fast Charging USB Type C";
$product34['price'] = "$38.94";
$product34['sale_price'] = "$12.98";
$product34['meta'] = array(
    "theme" => "Pattern",
    "specifications" => "Single-piece Package",
    "style" => "Solid",
    "scenerios" => "Wall",
    "brand_name" => "mondecor",
    "material" => "Plastic",
    "pattern" => "Plane Wall Sticker",
    "size" => "0.6 x 3M / 5M / 10M",
);

$product34['featured_image'] = "/assets/images/products/product-image-1433339228_480x480.jpg";
$product34['images'] = array();

$product35 = array();
$product35['id'] = 35;
$product35['title'] = "Portable Dust-Proof Moisture-Proof Student Mask Box";
$product35['price'] = "$6.24";
$product35['sale_price'] = "$4.08";
$product35['meta'] = array(
    "style" => "Europe",
    "material" => "Iron",
    "theme" => "Flower"
);

$product35['featured_image'] = "/assets/images/products/product-image-1534153543_480x480.jpg";
$product35['images'] = array();

$product36 = array();
$product36['id'] = 36;
$product36['title'] = "Portable Mini Zipper Organizer Storage Bag";
$product36['price'] = "$6.80";
$product36['sale_price'] = "$4.60";
$product36['meta'] = array(
    "style" => "Europe",
    "material" => "Plastic",
    "theme" => "Landscape"
);

$product36['featured_image'] = "/assets/images/products/product-image-1532962744_480x480.jpg";
$product36['images'] = array();


$product37 = array();
$product37['id'] = 37;
$product37['title'] = "Netac USB Flash Drive";
$product37['price'] = "$52.70";
$product37['sale_price'] = "$39.90";
$product37['meta'] = array(
    "style" => "Artificial",
    "material" => "Plastic",
    "theme" => "Animal"
);

$product37['featured_image'] = "/assets/images/products/product-image-1553761366_480x480.jpg";
$product37['images'] = array();


$product38 = array();
$product38['id'] = 38;
$product38['title'] = "Solid State Drive for Desktop Laptop";
$product38['price'] = "$77.20";
$product38['sale_price'] = "$57.40";
$product38['meta'] = array(
    "style" => "Modern",
    "material" => "Plastic",
    "theme" => "Sports",
    "special" => "metal craft",
    "weight" => "300g",
    "use" => "Home Decor",
    "usage" => "Gift"
);

$product38['featured_image'] = "/assets/images/products/product-image-1583644961_480x480.jpg";
$product38['images'] = array();


$product39 = array();
$product39['id'] = 39;
$product39['title'] = "Micro SD Flash Memory Card";
$product39['price'] = "$44.05";
$product39['sale_price'] = "$33.35";
$product39['meta'] = array(
    "style" => "Pastoral",
    "material" => "Resin",
    "theme" => "Animal",
    "quantity" => "10 pieces , mix model , 2 Hen + 2 nest + 3 Chick + 3 egg",
    "size" => "1.4-2.5cm"
);

$product39['featured_image'] = "/assets/images/products/product-image-1531366973_480x480.jpg";
$product39['images'] = array();

/**
 * Storage Ends Here
*/
array_push($products, $product31);
array_push($products, $product32);
array_push($products, $product33);
array_push($products, $product34);
array_push($products, $product35);
array_push($products, $product36);
array_push($products, $product37);
array_push($products, $product38);
array_push($products, $product39);

function getAllStorage() {
    return json_encode($GLOBALS['products']);
}

?>