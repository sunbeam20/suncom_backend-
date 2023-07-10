@include('components.header')
<h1>Checkout Your Items</h1>
<form class="form" action="/neworder" method="POST">
  @csrf
  <div class="checkout-page">
    <div>
      <div class="shipping-address">
        <h2>Shipping Address</h2>
        @auth
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @endauth
        <input type="text" name="full_name" placeholder="Full Name" class="field" />
        <input type="text" name="address" placeholder="Address" class="field" />
        <input type="text" name="city" placeholder="City" class="field" />
        <input type="text" name="state" placeholder="State" class="field" />
        <input type="text" name="postal_code" placeholder="Postal/Zip-code" class="field" />
      </div>
      <div class="product-list">
        <h2>Product List</h2>
        <!-- Display your product list here -->
        <!-- Example: -->
        <ul>
          <li>{{ $product->name }}</li>
        </ul>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="product_price" value="{{ $product->price }}">
        <input type="text" class="quantity-label"  name="product_quantity" value="1" readonly>
      </div>
    </div>

    <div class="checkout-summary">
      <div class="payment-method">
        <h2>Payment Method</h2>
        <!-- Display your payment method options here -->
        <!-- Example: -->

        <button type="button" name="payment_method" value="cod" class="payment-btn" data-selected="false">
          <img class="img" src="{{ asset('images/cash-on-delivery.png') }}" />
        </button>
        <button type="button" name="payment_method" value="bank" class="payment-btn" data-selected="false">
          <img class="img" src="{{ asset('images/visa.png') }}" />
        </button>
        <button type="button" name="payment_method" value="paypal" class="payment-btn" data-selected="false">
          <img class="img" src="{{ asset('images/paypal.png') }}" />
        </button>
        <button type="button" name="payment_method" value="gpay" class="payment-btn" data-selected="false">
          <img class="img" src="{{ asset('images/google-pay.png') }}" />
        </button>
        <button type="button" name="payment_method" value="apay" class="payment-btn" data-selected="false">
          <img class="img" src="{{ asset('images/apple-pay.png') }}" />
        </button>
        <input type="hidden" name="payment_method" id="payment_method_input" value="" />
      </div>

      <h2>Order Summary</h2>
      <div class="item-cost">
        <span>Item Cost: Rm</span>
        <span>{{ $product->price }}</span>
      </div>
      <div class="shipping-cost">
        <span>Shipping Cost: Rm</span>
        <span>9.99</span>
      </div>
      <hr />
      <div class="total-cost">
        <span>Total Cost: Rm</span>
        <span>{{ $product->price }}</span>
      </div>

      <button class="place-order-button" type="submit">Place Order</button>
    </div>
  </div>
</form>
@include('components.footer')

<style>
  body {
    margin: 0px;
  }

  .img {
    width: 4em;
    height: 3em;
  }

  .payemt-btn {
    margin: 1em;
    cursor: pointer;
  }

  h1 {
    text-align: center;
    margin-top: 2em;
  }

  .form {
    padding: 2em 10em 0em 10em;
    background-color: #f5f5f5;
    border-radius: 2em;
  }

  .checkout-page {
    display: flex;
    justify-content: space-between;
  }

  .product-list,
  .checkout-summary {
    flex-basis: 45%;
  }
  .quantity-label {
  border: none;
  background-color: transparent;
  padding: 0;
  font-size: 1rem;
  font-weight: bold;
  color: #333;
}

  .place-order-button {
    display: block;
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  .item-cost,
  .shipping-cost,
  .total-cost {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
  }

  .payment-method label {
    display: block;
    margin-bottom: 0.5rem;
  }

  .shipping-address {
    width: 20em;
    display: flex;
    flex-direction: column;
  }

  .field {
    margin: 0.5em;
    padding: 0.5em;
    border-radius: 0.5em;
    border-color: grey;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.payment-btn').click(function() {
      // Reset the selected state of all buttons
      $('.payment-btn').attr('data-selected', 'false');

      // Set the selected state of the clicked button
      $(this).attr('data-selected', 'true');

      // Get the value of the selected payment method
      var selectedPaymentMethod = $(this).val();

      // Set the value of the hidden input field
      $('#payment_method_input').val(selectedPaymentMethod);
    });
  });
</script>
