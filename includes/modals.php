<script id="QuantityTemplate" type="text/template">

    <div class="js-qty">
        <input type="text" value="{{ value }}" id="{{ key }}" name="{{ name }}" pattern="[0-9]*" data-line="{{ line }}" class="js-qty__input" aria-live="polite">
        <button type="button" class="js-qty__adjust js-qty__adjust--minus" aria-label="Reduce item quantity by one">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-minus" viewBox="0 0 22 3"><path fill="#000" d="M21.5.5v2H.5v-2z" fill-rule="evenodd"/></svg>
          <span class="icon__fallback-text">−</span>
        </button>
        <button type="button" class="js-qty__adjust js-qty__adjust--plus" aria-label="Increase item quantity by one">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-plus" viewBox="0 0 22 21"><path d="M12 11.5h9.5v-2H12V0h-2v9.5H.5v2H10V21h2v-9.5z" fill="#000" fill-rule="evenodd"/></svg>
          <span class="icon__fallback-text">+</span>
        </button>
      </div>
    
  </script>