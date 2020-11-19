<div id="shopify-section-header" class="shopify-section">
    <style>
    .site-header__logo img {
        max-width: 270px;
    }
    </style>

    <div id="NavDrawer" class="drawer drawer--left">
        <div class="drawer__inner">
            <form action="/search" method="get" class="drawer__search" role="search">
                <input type="search" name="q" placeholder="Search" aria-label="Search" class="drawer__search-input">
                <button type="submit" class="text-link drawer__search-submit">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                        viewBox="0 0 32 32">
                        <path fill="#444"
                            d="M21.839 18.771a10.012 10.012 0 0 0 1.57-5.39c0-5.548-4.493-10.048-10.034-10.048-5.548 0-10.041 4.499-10.041 10.048s4.493 10.048 10.034 10.048c2.012 0 3.886-.594 5.456-1.61l.455-.317 7.165 7.165 2.223-2.263-7.158-7.165.33-.468zM18.995 7.767c1.498 1.498 2.322 3.49 2.322 5.608s-.825 4.11-2.322 5.608c-1.498 1.498-3.49 2.322-5.608 2.322s-4.11-.825-5.608-2.322c-1.498-1.498-2.322-3.49-2.322-5.608s.825-4.11 2.322-5.608c1.498-1.498 3.49-2.322 5.608-2.322s4.11.825 5.608 2.322z">
                        </path>
                    </svg>
                    <span class="icon__fallback-text">Search</span>
                </button>
            </form>
            <ul class="drawer__nav">
                <li class="drawer__nav-item">
                    <a href="/" class="drawer__nav-link drawer__nav-link--top-level" aria-current="page">
                        Home
                    </a>
                </li>

                <li class="drawer__nav-item">
                    <a href="/collections/decorations.php" class="drawer__nav-link drawer__nav-link--top-level">
                        Decorations
                    </a>
                </li>

                <li class="drawer__nav-item">
                    <a href="/collections/lighting.php" class="drawer__nav-link drawer__nav-link--top-level">
                        Lighting
                    </a>
                </li>

                <li class="drawer__nav-item">
                    <a href="/collections/storage.php" class="drawer__nav-link drawer__nav-link--top-level">
                        Storage
                    </a>
                </li>

                <li class="drawer__nav-item">
                    <a href="/collections/other.php" class="drawer__nav-link drawer__nav-link--top-level">
                        Other
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <header class="site-header page-element is-moved-by-drawer" role="banner" data-section-id="header"
        data-section-type="header">
        <div class="site-header__upper page-width">
            <div class="grid grid--table">
                <div class="grid__item small--one-quarter medium-up--hide">
                    <button type="button" class="text-link site-header__link js-drawer-open-left" aria-expanded="false">
                        <span class="site-header__menu-toggle--open">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger"
                                viewBox="0 0 32 32">
                                <path fill="#444"
                                    d="M4.889 14.958h22.222v2.222H4.889v-2.222zM4.889 8.292h22.222v2.222H4.889V8.292zM4.889 21.625h22.222v2.222H4.889v-2.222z">
                                </path>
                            </svg>
                        </span>
                        <span class="site-header__menu-toggle--close">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                                viewBox="0 0 32 32">
                                <path fill="#444"
                                    d="M25.313 8.55l-1.862-1.862-7.45 7.45-7.45-7.45L6.689 8.55l7.45 7.45-7.45 7.45 1.862 1.862 7.45-7.45 7.45 7.45 1.862-1.862-7.45-7.45z">
                                </path>
                            </svg>
                        </span>
                        <span class="icon__fallback-text">Site navigation</span>
                    </button>
                </div>

                <div class="grid__item small--one-half medium-up--two-thirds small--text-center">
                    <h1 class="site-header__logo" itemscope="" itemtype="http://schema.org/Organization">
                        <a href="/" itemprop="url" class="site-header__logo-link">
                            <img src="//cdn.shopify.com/s/files/1/0004/2395/2390/files/college_logo_270x.png?v=1524200925"
                                srcset="//cdn.shopify.com/s/files/1/0004/2395/2390/files/college_logo_270x.png?v=1524200925 1x, //cdn.shopify.com/s/files/1/0004/2395/2390/files/college_logo_270x@2x.png?v=1524200925 2x"
                                alt="collegethings-1804" itemprop="logo">
                        </a>
                    </h1>
                </div>

                <div class="grid__item small--one-quarter medium-up--one-third text-right">
                    <div id="SiteNavSearchCart">
                        <form action="/search" method="get" class="site-header__search small--hide" role="search">

                            <div class="site-header__search-inner">
                                <label for="SiteNavSearch" class="visually-hidden">Search</label>
                                <input type="search" name="q" id="SiteNavSearch" placeholder="Search"
                                    aria-label="Search" class="site-header__search-input">
                            </div>

                            <button type="submit" class="text-link site-header__link site-header__search-submit">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                                    viewBox="0 0 32 32">
                                    <path fill="#444"
                                        d="M21.839 18.771a10.012 10.012 0 0 0 1.57-5.39c0-5.548-4.493-10.048-10.034-10.048-5.548 0-10.041 4.499-10.041 10.048s4.493 10.048 10.034 10.048c2.012 0 3.886-.594 5.456-1.61l.455-.317 7.165 7.165 2.223-2.263-7.158-7.165.33-.468zM18.995 7.767c1.498 1.498 2.322 3.49 2.322 5.608s-.825 4.11-2.322 5.608c-1.498 1.498-3.49 2.322-5.608 2.322s-4.11-.825-5.608-2.322c-1.498-1.498-2.322-3.49-2.322-5.608s.825-4.11 2.322-5.608c1.498-1.498 3.49-2.322 5.608-2.322s4.11.825 5.608 2.322z">
                                    </path>
                                </svg>
                                <span class="icon__fallback-text">Search</span>
                            </button>
                        </form>

                        <a href="/products/cart.php" class="site-header__link site-header__cart">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart"
                                viewBox="0 0 31 32">
                                <path
                                    d="M14.568 25.629c-1.222 0-2.111.889-2.111 2.111 0 1.111 1 2.111 2.111 2.111 1.222 0 2.111-.889 2.111-2.111s-.889-2.111-2.111-2.111zm10.22 0c-1.222 0-2.111.889-2.111 2.111 0 1.111 1 2.111 2.111 2.111 1.222 0 2.111-.889 2.111-2.111s-.889-2.111-2.111-2.111zm2.555-3.777H12.457L7.347 7.078c-.222-.333-.555-.667-1-.667H1.792c-.667 0-1.111.444-1.111 1s.444 1 1.111 1h3.777l5.11 14.885c.111.444.555.666 1 .666h15.663c.555 0 1.111-.444 1.111-1 0-.666-.555-1.111-1.111-1.111zm2.333-11.442l-18.44-1.555h-.111c-.555 0-.777.333-.667.889l3.222 9.22c.222.555.889 1 1.444 1h13.441c.555 0 1.111-.444 1.222-1l.778-7.443c.111-.555-.333-1.111-.889-1.111zm-2 7.443H15.568l-2.333-6.776 15.108 1.222-.666 5.554z">
                                </path>
                            </svg>
                            <span class="icon__fallback-text">Cart</span>
                            <span class="site-header__cart-indicator hide"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="StickNavWrapper" style="height: 60px;">
            <div id="StickyBar" class="sticky">
                <nav class="nav-bar small--hide" role="navigation" id="StickyNav">
                    <div class="page-width">
                        <div class="grid grid--table">
                            <div class="grid__item seven-eighths" id="SiteNavParent">
                                <button type="button"
                                    class="hide text-link site-nav__link site-nav__link--compressed js-drawer-open-left"
                                    id="SiteNavCompressed" aria-expanded="false">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-hamburger" viewBox="0 0 32 32">
                                        <path fill="#444"
                                            d="M4.889 14.958h22.222v2.222H4.889v-2.222zM4.889 8.292h22.222v2.222H4.889V8.292zM4.889 21.625h22.222v2.222H4.889v-2.222z">
                                        </path>
                                    </svg>
                                    <span class="site-nav__link-menu-label">Menu</span>
                                    <span class="icon__fallback-text">Site navigation</span>
                                </button>
                                
                                <ul class="site-nav list--inline" id="SiteNav">
                                    <li class="site-nav__item">
                                        <a href="/" class="site-nav__link" aria-current="page">
                                            Home
                                        </a>
                                    </li>

                                    <li class="site-nav__item">
                                        <a href="/collections/decorations.php" class="site-nav__link">
                                            Decorations
                                        </a>
                                    </li>

                                    <li class="site-nav__item">
                                        <a href="/collections/lighting.php" class="site-nav__link">
                                            Lighting
                                        </a>
                                    </li>

                                    <li class="site-nav__item">
                                        <a href="/collections/storage.php" class="site-nav__link">
                                            Storage
                                        </a>
                                    </li>

                                    <li class="site-nav__item">
                                        <a href="/collections/other.php" class="site-nav__link">
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid__item one-eighth text-right">
                                <div class="sticky-only" id="StickyNavSearchCart">
                                    <form action="/search" method="get" class="site-header__search small--hide"
                                        role="search">

                                        <div class="site-header__search-inner">
                                            <label for="SiteNavSearch" class="visually-hidden">Search</label>
                                            <input type="search" name="q" id="SiteNavSearch" placeholder="Search"
                                                aria-label="Search" class="site-header__search-input">
                                        </div>

                                        <button type="submit"
                                            class="text-link site-header__link site-header__search-submit">
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-search" viewBox="0 0 32 32">
                                                <path fill="#444"
                                                    d="M21.839 18.771a10.012 10.012 0 0 0 1.57-5.39c0-5.548-4.493-10.048-10.034-10.048-5.548 0-10.041 4.499-10.041 10.048s4.493 10.048 10.034 10.048c2.012 0 3.886-.594 5.456-1.61l.455-.317 7.165 7.165 2.223-2.263-7.158-7.165.33-.468zM18.995 7.767c1.498 1.498 2.322 3.49 2.322 5.608s-.825 4.11-2.322 5.608c-1.498 1.498-3.49 2.322-5.608 2.322s-4.11-.825-5.608-2.322c-1.498-1.498-2.322-3.49-2.322-5.608s.825-4.11 2.322-5.608c1.498-1.498 3.49-2.322 5.608-2.322s4.11.825 5.608 2.322z">
                                                </path>
                                            </svg>
                                            <span class="icon__fallback-text">Search</span>
                                        </button>
                                    </form>

                                    <a href="/products/cart.php" class="site-header__link site-header__cart">
                                        <svg aria-hidden="true" focusable="false" role="presentation"
                                            class="icon icon-cart" viewBox="0 0 31 32">
                                            <path
                                                d="M14.568 25.629c-1.222 0-2.111.889-2.111 2.111 0 1.111 1 2.111 2.111 2.111 1.222 0 2.111-.889 2.111-2.111s-.889-2.111-2.111-2.111zm10.22 0c-1.222 0-2.111.889-2.111 2.111 0 1.111 1 2.111 2.111 2.111 1.222 0 2.111-.889 2.111-2.111s-.889-2.111-2.111-2.111zm2.555-3.777H12.457L7.347 7.078c-.222-.333-.555-.667-1-.667H1.792c-.667 0-1.111.444-1.111 1s.444 1 1.111 1h3.777l5.11 14.885c.111.444.555.666 1 .666h15.663c.555 0 1.111-.444 1.111-1 0-.666-.555-1.111-1.111-1.111zm2.333-11.442l-18.44-1.555h-.111c-.555 0-.777.333-.667.889l3.222 9.22c.222.555.889 1 1.444 1h13.441c.555 0 1.111-.444 1.222-1l.778-7.443c.111-.555-.333-1.111-.889-1.111zm-2 7.443H15.568l-2.333-6.776 15.108 1.222-.666 5.554z">
                                            </path>
                                        </svg>
                                        <span class="icon__fallback-text">Cart</span>
                                        <span class="site-header__cart-indicator hide"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>
                <div id="NotificationSuccess" class="notification notification--success" aria-hidden="true">
                    <div class="page-width notification__inner notification__inner--has-link">
                        <a href="/products/cart.php" class="notification__link">
                            <span class="notification__message">Item added to cart. <span>View cart and check
                                    out</span>.</span>
                        </a>
                        <button type="button" class="text-link notification__close">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                                viewBox="0 0 32 32">
                                <path fill="#444"
                                    d="M25.313 8.55l-1.862-1.862-7.45 7.45-7.45-7.45L6.689 8.55l7.45 7.45-7.45 7.45 1.862 1.862 7.45-7.45 7.45 7.45 1.862-1.862-7.45-7.45z">
                                </path>
                            </svg>
                            <span class="icon__fallback-text">Close</span>
                        </button>
                    </div>
                </div>
                <div id="NotificationError" class="notification notification--error" aria-hidden="true">
                    <div class="page-width notification__inner">
                        <span class="notification__message notification__message--error" aria-live="assertive"
                            aria-atomic="true"></span>
                        <button type="button" class="text-link notification__close">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                                viewBox="0 0 32 32">
                                <path fill="#444"
                                    d="M25.313 8.55l-1.862-1.862-7.45 7.45-7.45-7.45L6.689 8.55l7.45 7.45-7.45 7.45 1.862 1.862 7.45-7.45 7.45 7.45 1.862-1.862-7.45-7.45z">
                                </path>
                            </svg>
                            <span class="icon__fallback-text">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>


</div>