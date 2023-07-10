@include('components.header')
<div class="cart">
  <h2>Your Cart</h2>
  <div class="cart-empty">Your cart is empty</div>
  <div>
    <table class="cart-table">
      <thead class="tableHead">
        <tr>
          <th> <input type="checkbox" class="cart-checkbox all-checkbox" />All </th>
          <th>Item</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carts as $product)
          <tr>
            <td>
              <input type="checkbox" class="cart-checkbox" />
            </td>
            <td class="img">
              <div class="image-container">
                <img src="{{ asset($product->product->image) }}" alt="{{ $product->product->name }}" class="hover-effect" />
                <span class="item-name hover-effect">{{ $product->product->name }}</span>
              </div>
            </td>
            <td id="perPrice-{{ $product['id'] }}">{{ $product['product_price'] }}</td>
            <td>
              <div class="counter-container">
                <button class="counter-button decrement" data-id="{{ $product['id'] }}">-</button>
                <span class="counter-quantity" id="counter-{{ $product['id'] }}">{{ $product['product_quantity'] }}</span>
                <button class="counter-button increment" data-id="{{ $product['id'] }}">+</button>
              </div>
            </td>
            <td class="total-price" id="price-{{ $product['id'] }}"> {{ $product['product_price'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="cart-total">
      Total:
      <button class="checkoutbtn">Checkout</button>
    </div>
  </div>
</div>
@include('components.footer')

<style>
  body {
    margin: 0px;
  }

  .cart {
    padding: 1em;
    background-color: #f5f5f5;
    margin: 2em 3em 3em 3em;
  }

  .cart-table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 1.25em;
  }

  .cart-table th,
  .cart-table td {
    padding: 0.6em;
    text-align: left;
  }

  .cart-table th {
    background-color: #ccc;
    font-weight: bold;
  }

  .cart-table td {
    border-bottom: 1px solid #ddd;
  }

  .img img {
    width: 8em;
    height: auto;
  }

  .image-container {
    position: relative;
  }

  .item-name {
    font-weight: bold;
    position: absolute;
    color: #000000;
    font-size: 1rem;
    padding: 0.5rem;
  }

  .cart-checkbox {
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
  }

  .cart h2 {
    font-size: 1.5em;
    margin-bottom: 1.25px;
  }

  .cart-empty {
    font-size: 1.125em;
    color: #999;
    text-align: center;
  }

  .cart-total {
    font-size: 1.25em;
    font-weight: bold;
    margin-top: 1.25em;
    text-align: right;
  }

  .tableHead {
    font-size: 1.5em;
  }

  .all-checkbox {
    width: 2em;
    height: 2em;
    margin-right: 1em;
    vertical-align: middle;
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

  .checkoutbtn {
    margin-left: 1em;
    padding: 1em;
    background-color: bisque;
  }
</style>

<script>
  // counter buton & totalk price js 
  // Add click event listeners to all decrement buttons
  const decrementButtons = document.querySelectorAll('.decrement');

  decrementButtons.forEach(button => {
    button.addEventListener('click', () => {

      const productId = button.dataset.id; //data-id 
      const counterElement = document.getElementById(`counter-${productId}`); //html text of quantity
      const currentValue = parseInt(counterElement.textContent); //convert quantity to integer
      const priceElement = document.getElementById(`price-${productId}`); // html text of product total price
      const perPriceElement = document.getElementById(`perPrice-${productId}`); // html text of one pieces price
      const priceValue = parseFloat(perPriceElement.textContent); // convert one pieces price to float 

      if (currentValue > 1) {
        priceElement.textContent = 0;
        counterElement.textContent = currentValue - 1; //decrement the quantity
        const updatedValue = parseInt(counterElement.textContent); // get updated quantity
        priceElement.textContent = (priceValue * updatedValue).toFixed(2); //update the price with new quantity
      }
    });
  });

  // Add click event listeners to all increment buttons
  const incrementButtons = document.querySelectorAll('.increment');

  incrementButtons.forEach(button => {
    button.addEventListener('click', () => {

      const productId = button.dataset.id;
      const counterElement = document.getElementById(`counter-${productId}`);
      const currentValue = parseInt(counterElement.textContent);
      const priceElement = document.getElementById(`price-${productId}`);
      const perPriceElement = document.getElementById(`perPrice-${productId}`);
      const priceValue = parseFloat(perPriceElement.textContent);

      priceElement.textContent = 0;
      counterElement.textContent = currentValue + 1;
      const updatedValue = parseInt(counterElement.textContent);
      priceElement.textContent = (priceValue * updatedValue).toFixed(2);
    });
  });

  // Checkbox js from here
  // Get references to the checkbox elements
  const allCheckbox = document.querySelector('.all-checkbox');
  const tbodyCheckboxes = document.querySelectorAll('.cart-checkbox:not(.all-checkbox)');

  // Add event listener to the "All" checkbox
  allCheckbox.addEventListener('change', function() {
    const isChecked = this.checked;

    // Update the state of all tbody checkboxes
    tbodyCheckboxes.forEach(checkbox => {
      checkbox.checked = isChecked;
    });
  });

  // Add event listener to the tbody checkboxes
  tbodyCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const isAnyUnchecked = [...tbodyCheckboxes].some(checkbox => !checkbox.checked);

      // Update the state of the "All" checkbox
      allCheckbox.checked = !isAnyUnchecked;
    });
  });
</script>
