@include('components.header')
<div class="product-page">
    <div class="grid-container">
        <div class="item1"><img src="{{ asset($product['image']) }}" /></div>
        <div class="item2"><img src="{{ asset($product['image']) }}" /></div>
        <div class="item3"><img src="{{ asset($product['image']) }}" /></div>
        <div class="item4"><img src="{{ asset($product['image']) }}" /></div>
        <div class="item5"><img src="{{ asset($product['image']) }}" /></div>
    </div>
    <div class="side-grid">
        <h1 class="sgspace">{{ $product['name'] }}</h1>
        <p class="sgspace">4.8k Sold</p>
        <p class="sgspace">Price {{ $product['price'] }}</p>
        <p class="sgspace">Color</p>
        <p class="sgspace">Size</p>
        <p class="sgspace">Quantity
        <div class="counter-container">
            <button class="counter-button">-</button>
            <span class="counter-quantity">0</span>
            <button class="counter-button">+</button>
        </div>
        </p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="buy-now">Buy Now</button>
    </div>
</div>
@include('components.footer')
<style>
    body {
        margin: 0px;
    }

    .hover-effect:hover {
        background-color: #000000;
        color: #ffffff;
    }

    .product-page {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
        /* start product from left*/
        gap: 1em;
        margin: 2em 10em 2em 10em;
        padding: 2em 0em 2em 2em;
        flex-direction: row;
        background-color: bisque;
    }

    .grid-container {
        margin: 1em 4em;
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 1em;
        background-color: #ffffff00;
        width: 20%;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
    }

    .side-grid {
        height: 100%;
        width: 50%;
        margin-left: 10em;
    }

    .sgspace {
        padding-bottom: 1em;
    }

    .grid-container>div {
        background-color: rgba(255, 255, 255, 0);
        text-align: center;
        padding: 0em;
        font-size: 1em;
    }

    .item1 {
        grid-column: 1 / span 4;
    }

    .item1 img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .item2 img,
    .item3 img,
    .item4 img,
    .item5 img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .counter-container {
        border: 1px solid rgb(146, 146, 146);
        display: inline-flex;
        /* Use inline-flex to adjust vertical alignment */
        align-items: center;
        /* Center the content vertically */
        text-align: center;
        background-color: #ffffff;
        color: #000000;
        height: 100%;
        border-radius: 5px;
    }

    .counter-button,
    .counter-quantity {
        background-color: #ffffff;
        color: black;
        font-weight: bolder;
        font-size: 1.1rem;
        padding: 0.25rem 0.1rem;
        width: 2rem;
        height: 100%;
        border: none;
        border-radius: 5px;
    }

    .counter-button {
        cursor: pointer;
    }

    .counter-button:hover {
        background-color: #000000;
        color: #ffffff;
    }

    .add-to-cart,
    .buy-now {
        background-color: #ffffff;
        color: #000000;
        border: 0.05em solid black;
        border-radius: 1em;
        padding: 0.75em 1em;
        cursor: pointer;
        font-size: 0.75em;
        font-weight: bold;
    }

    .add-to-cart:hover,
    .buy-now:hover {
        background-color: #000000;
        color: #ffffff;
    }
</style>
