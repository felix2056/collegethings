<?php include_once('../includes/header.php'); ?>


<body class="template-index" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">

    <a class="in-page-link visually-hidden skip-link" href="#MainContent">
        Skip to content
    </a>


    <?php include_once('../includes/nav.php'); ?>

    <?php require_once('../products/db/lighting_cat.php'); ?>

    <?php
        $products = json_decode(getAlllighting(), true);
    ?>

    <div class="page-container page-element is-moved-by-drawer">
        <main class="main-content" id="MainContent" role="main">
            <div class="page-width">
                <header class="grid medium-up--grid--table section-header small--text-center">
                    <div class="grid__item medium-up--one-half section-header__item">
                        <h1 class="section-header__title">
                            Lighting
                        </h1>

                    </div>

                    <div class="grid__item medium-up--one-half medium-up--text-right section-header__item">
                        <div id="shopify-section-collection-filters" class="shopify-section">
                            <div data-section-id="collection-filters" data-section-type="collection-filters">

                                <div class="collection-sort">
                                    <label for="SortTags" class="collection-sort__label">Filter by</label>
                                    <select name="SortTags" id="SortTags" class="collection-sort__input">

                                        <option value="/collections/other-1">All</option>


                                        <option value="/collections/other-1/other">other</option>

                                    </select>
                                </div>


                                <div class="collection-sort">
                                    <label for="SortBy" class="collection-sort__label">Sort by</label>
                                    <select name="SortBy" id="SortBy" data-default-sort="best-selling"
                                        class="collection-sort__input">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>

                            </div>


                        </div>
                    </div>
                </header>

               
                <?php if (count($products) > 0) : ?>
                <div class="grid grid--no-gutters grid--uniform">
                    <?php foreach ($products as $product) : ?>
                    <div class="grid__item small--one-half medium-up--one-fifth">
                        <!-- /snippets/product-card.liquid -->
                        <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                            class="product-card">
                            <div class="product-card__image-wrapper">
                                <img src="<?php echo $product['featured_image'] ?>"
                                    alt="<?php echo $product['title'] ?>"
                                    class="product-card__image">
                            </div>
                            
                            <div class="product-card__info">
                                <div class="product-card__name"><?php echo $product['title'] ?></div>

                                <div class="product-card__price">
                                    <span class="visually-hidden">Regular price</span>
                                    <?php echo $product['price'] ?>
                                </div>
                            </div>


                            <div class="product-card__overlay">
                                <span class="btn product-card__overlay-btn ">View</span>
                            </div>
                        </a>

                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </main>

        <?php include_once('../includes/footer.php'); ?>
    </div>
</body>