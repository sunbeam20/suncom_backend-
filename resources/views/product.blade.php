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
    <form class="product-form" action="/cart" method="POST">
      @csrf
      @auth
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      @endauth
      <input type="hidden" name="product" value="{{ json_encode($product) }}">
      <button class="add-to-cart" type="submit">Add to Cart</button>
    </form>
    <a href={{ 'checkout/' . $product['id'] }} class="buy-now">Buy Now</a>
  </div>
  <div class="product-description">
    <h2>Product Description</h2>
    <pre>
      Welcome To Our Store

      1,What our aiming at? 
      ★ Perfect product: popular & practical & inexpensive.
      ★ Fast delivery: ready stock & Quick Shipping
      2,Better consumer protection 
      ★ Full refund if you don't receive your order.
      ★ Full or partial refund , if the item is not as described.
      
      Product description:
      
      Simple to wear plus cartoon elements, comfortable socks design
      One pair of socks can be worn in two styles, comfortable socks toe
      Comfortable sock heel, soft and skin-friendly, more wearable, more durable
      Rich in elasticity
      
      Specifications:
      Material: polyester fiber
      Size: 8*21cm
      Style: casual
      Color: beige cartoon
      Function: breathable, invisible, antibacterial
      
      Package contains: 1 pair* Random Style socks
    </pre>
  </div>
  <div class="product-rating">
    <h2>Product Rating</h2>
    <div class="star">
      <div>
        <span class="rating"> 4.9 </span>
        <span> out of 5 </span>
        <button class="btn">All</button>
        <button class="btn">5 Star</button>
        <button class="btn">4 Star</button>
        <button class="btn">3 Star</button>
        <button class="btn">2 Star</button>
        <button class="btn">1 Star</button>
      </div>
      <div class="star-img">
        <img src="../assets/star.png" />
        <img src="../assets/star.png" />
        <img src="../assets/star.png" />
        <img src="../assets/star.png" />
        <img src="../assets/star.png" />
      </div>
    </div>
  </div>
</div>
@include('components.footer')

<style>
  body {
    margin: 0px;
  }

  .product-form {
    display: block;
    margin-top: 0em;
    margin-block-end: 1em;
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
    background-color: rgb(235, 235, 235);
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

  .product-description {
    display: block;
    flex-wrap: wrap;
    justify-content: left;
    width: 100%;
    gap: 1em;
    border-radius: 5px;
    margin: 2em 4em 2em 4em;
    padding: 2em 0em 2em 2em;
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  pre {
    font: inherit;
  }

  .product-rating {
    display: block;
    flex-wrap: wrap;
    justify-content: left;
    width: 100%;
    gap: 1em;
    border-radius: 5px;
    margin: 2em 4em 2em 4em;
    padding: 2em 0em 2em 2em;
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .star {
    margin: 1em 2em 1em 1em;
    padding: 2em 0em 2em 2em;
    background-color: #f5f2e7;
    border: 1px solid #f5eac0;
  }

  .rating {
    font-size: 2em;
  }

  .btn {
    font-size: 1em;
    margin: 1em;
    padding: 0.5em 1em 0.5em 1em;
    background-color: #ffffff;
    border: 1px solid rgb(200, 198, 198);
    color: rgb(54, 52, 52);
    font: inherit;
  }

  .star-img img {
    width: 1em;
  }
</style>
