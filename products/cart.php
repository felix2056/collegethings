<?php include_once('../includes/header.php'); ?>


<body class="template-index" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">

    <a class="in-page-link visually-hidden skip-link" href="#MainContent">
        Skip to content
    </a>

    <?php include_once('../includes/nav.php'); ?>

    <div class="page-container page-element is-moved-by-drawer">
        <main class="main-content" id="MainContent" role="main">
            <div id="shopify-section-cart-template" class="shopify-section">
                <div data-section-id="cart-template" data-section-type="cart">
                    <div class="page-width">

                        <div class="page-empty text-center">
                            <h1>Shopping Cart</h1>
                            <p class="cart--empty-message">Your cart is currently empty.</p>
                            <hr>
                            <p class="cart--continue-message">
                                <a href="/collections/all" class="btn">Continue browsing</a>
                            </p>
                            <p class="cart--cookie-message">Enable cookies to use the shopping cart</p>
                        </div>

                    </div>

                    <script id="CartProductTemplate" type="text/template">

                        {{#items}}
            <tr class="cart__row responsive-table__row">
              <td class="cart__cell--image text-center">
                <a href="{{ url }}" class="cart__image">
                  <img src="{{ img }}" alt="{{ name }}">
                </a>
              </td>
              <td>
                <a href="{{ url }}" class="h5">
                  {{{ name }}}
                </a>
                {{#if variation}}
                  <p>{{variation}}</p>
                {{/if}}
      
                {{#properties}}
                  {{#each this}}
                    {{#if this}}
                      <p>{{@key}}: {{this}}</p>
                    {{/if}}
                  {{/each}}
                {{/properties}}
      
                <p>
                  <a href="/cart/change?line={{ line }}&amp;quantity=0">Remove</a>
                </p>
              </td>
              <td class="cart__cell--quantity">
                <label for="Updates_{{ key }}" class="cart__quantity-label medium-up--hide">
                  Quantity</label>
                <input type="number" name="updates[]" id="Updates_{{ key }}" value="{{ itemQty }}" min="0" data-line="{{ line }}" aria-label="Quantity">
              </td>
              <td class="cart__cell--total">
                {{#if discountsApplied}}
                  <small class="cart-item__original-price cart__item-total"><s>{{{originalLinePrice}}}</s></small><br>
                  <span class="cart__item-total">{{{linePrice}}}</span>
                {{else}}
                  <span class="cart__item-total">{{{linePrice}}}</span>
                {{/if}}
                {{#if discountsApplied}}
                {{#each discounts}}
                  <p class="cart-item__discount cart__item-total">{{ this.title }}</p>
                  {{/each}}
                {{/if}}
              </td>
            </tr>
            {{/items}}
          
        </script>
                </div>

                <script type="application/json" id="CartJson-cart-template">
                {
                    "note": null,
                    "attributes": {},
                    "original_total_price": 0,
                    "total_price": 0,
                    "total_discount": 0,
                    "total_weight": 0.0,
                    "item_count": 0,
                    "items": [],
                    "requires_shipping": false,
                    "currency": "USD",
                    "items_subtotal_price": 0,
                    "cart_level_discount_applications": []
                }
                </script>


            </div>

        </main>

        <?php include_once('../includes/footer.php'); ?>
    </div>
</body>