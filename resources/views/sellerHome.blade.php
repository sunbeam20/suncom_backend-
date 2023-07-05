@include('components.sellerHeader')
<div class="container">
    <div class="sidebar">
        <ul>
            <li class="head-lists">
                <span>
                    <img class="navImg" src="{{ asset('images/shipment.png') }}" />
                    Shipment
                    <img class="navImg sideimg" src="{{ asset('images/left.png') }}" />
                    <img class="navImg sideimg" src="{{ asset('images/down.png') }}" />
                </span>
                <ul>
                    <li class="lists shipment">My Shipment</li>
                    <li class="lists shipping">Mass Shipping</li>
                    <li class="lists shipsettings">Shipping Settings</li>
                </ul>
            </li>
            <li class="head-lists">
                <span>
                    <img class="navImg" src="{{ asset('images/order.png') }}" />
                    Orders
                    <img class="navImg sideimg" src="{{ asset('images/left.png') }}" />
                    <img class="navImg sideimg" src="{{ asset('images/down.png') }}" />
                </span>
                <ul>
                    <li class="lists orders">My Orders</li>
                    <li class="lists return">Return/Refund</li>
                    <li class="lists cancellation">Cancellation</li>
                </ul>
            </li>
            <li class="head-lists">
                <span>
                    <img class="navImg" src="{{ asset('images/product.png') }}" />
                    Product
                    <img class="navImg sideimg" src="{{ asset('images/left.png') }}" />
                    <img class="navImg sideimg" src="{{ asset('images/down.png') }}" />
                </span>
                <ul>
                    <li class="lists products">My Products</li>
                    <li class="lists newproducts">Add New Products</li>
                    <li class="lists prodsetting">Products Settings</li>
                </ul>
            </li>
            <li class="head-lists">
                <span>
                    <img class="navImg" src="{{ asset('images/customer-service.png') }}" />
                    Customer Service
                    <img class="navImg sideimg" src="{{ asset('images/left.png') }}" />
                    <img class="navImg sideimg" src="{{ asset('images/down.png') }}" />
                </span>
                <ul>
                    <li class="lists"> </li>
                    <li class="lists"> </li>
                </ul>
            </li>
            <li class="head-lists">
                <span><img class="navImg" src="{{ asset('images/shop.png') }}" /> Shop
                    <img class="navImg sideimg" src="{{ asset('images/left.png') }}" />
                    <img class="navImg sideimg" src="{{ asset('images/down.png') }}" /></span>
                <ul>
                    <li class="lists profile">Shop Profile</li>
                    <li class="lists rating">Shop Rating</li>
                    <li class="lists categories">Shop Categories</li>
                </ul>
            </li>
            <li class="lists settingsli head-lists ">
                <span><img class="navImg" src="{{ asset('images/settings.png') }}" /> Settings</span>
            </li>
        </ul>
    </div>
    {{-- Dashboard --}}
    <div class="dashBoard rSide">
        <div class="toDo">
            <h2>To Do lists</h2>
            <p>Things you need to deal with</p>
            <table class="dTable" style="width: 100%">
                <tbody class="dtBody">
                    <tr class="dTr">
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>Unpaid</p>
                        </td>
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>To-Ship</p>
                        </td>
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>Shipped</p>
                        </td>
                        <td class="dTd">
                            <p class="p">0</p>
                            <p>Pending Cancellation</p>
                        </td>
                    </tr>
                    <tr class="dTr">
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>Pending Return/Refund</p>
                        </td>
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>Banned Products</p>
                        </td>
                        <td class="border-right dTd">
                            <p class="p">0</p>
                            <p>Sold Out Products</p>
                        </td>
                        <td class="dTd">
                            <p class="p">0</p>
                            <p>Pending Cancellation</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- AddProduct  --}}
    <form class="add-product rSide">
        <h2>Add New Products</h2>
        <div>
            <label for="product-images">Product images</label>
            <input type="file" name="images" multiple accept="image/*" />
        </div>
        <div>
            <label for="product-category">Product Category</label>
            <select name="mySelect">
                @foreach($categories as $category)
                {{$category->name}}
                @endforeach
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div>
            <label for="product-name">Product name</label>
            <input type="text" />
        </div>
        <div class="details">
            <label for="product-details">Product details</label>
            <textarea rows="5"></textarea>
        </div>
        <div>
            <label for="product-quantity">Product Quantity</label>
            <input type="number" name="quantity" min="1" max="100" step="1" />
        </div>
        <div>
            <label for="original-price">Original Price</label>
            <input type="number" step="0.01" min="0" name="price" />
        </div>
        <div>
            <label for="selling-price">Selling Price</label>
            <input type="number" step="0.01" min="0" name="price" />
        </div>
        <div>
            <label for="sizes">sizes</label>
            <input type="text" />
        </div>
        <div>
            <label for="available-sizes">Available sizes</label>
            <input type="text" />
        </div>
        <div>
            <label for="colors">colors</label>
            <input type="text" />
        </div>
        <div>
            <label for="available-colors">Available colors</label>
            <input type="text" />
        </div>
        <div>
            <label for="weight">weight</label>
            <input type="text" />
        </div>
        <div>
            <label for="product-keywords">Product keywords</label>
            <input type="text" />
        </div>
        <button class="cancel">Cancel</button>
        <button class="upload" type="submit">Upload</button>
    </form>

    {{-- My Shipment --}}
    <div class="myshipment rSide">
        <div class="nav-btn">
            <button>To Ship</button>
            <button>Shipping</button>
            <button>Completed</button>
        </div>
        <div class="storage">
            <div class="order-container">
                <span>Order ID</span>
                <input class="search-input" type="text" placeholder="Enter Order ID" />
                <img src="{{ asset('images/search.png') }}" />
                <button class="search-button" type="submit">Search</button>
                <button class="reset-button" type="submit">Reset</button>
            </div>
            <div class="order-list">
                <table class="myshipTable" style="width: 100%">
                    <tr class="myshiptr myshiptrdatas" style="width: 100%">
                        <td class="myshipTd" style="width: 20%">Item(s)</td>
                        <td class="myshipTd" style="width: 16%">Quantity</td>
                        <td class="myshipTd" style="width: 16%">Total Price</td>
                        <td class="myshipTd" style="width: 16%">Status</td>
                        <td class="myshipTd" style="width: 16%">Delivery channels</td>
                        <td class="myshipTd" style="width: 16%">Actions</td>
                    </tr>
                    {{-- use foreach loop here to show all theproduts --}}
                    <tr class="myshiptrdatas" style="width: 100%">
                        <td class="myshipTd" style="width: 20%">
                            <img src="{{ asset('images/1.png') }}" alt="item.name" class="hover-effect img" />
                        </td>
                        <td class="myshipTd td" style="width: 16%">1</td>
                        <td class="myshipTd td" style="width: 16%">Rm 15</td>
                        <td class="myshipTd td" style="width: 16%">To Ship</td>
                        <td class="myshipTd td" style="width: 16%">J&T</td>
                        <td class="myshipTd td" style="width: 16%">Actions</td>
                    </tr>
                </table>
            </div>
            <div class="cart-total">Total: RM 99</div>
        </div>
    </div>

    {{-- My Orders --}}
    <div class="myorders rSide">
        <div class="nav-btn">
            <button>All</button>
            <button>Completed</button>
            <button>Cancellation</button>
            <button>Return/Refund</button>
        </div>
        <div class="storage">
            <div class="order-container">
                <span>Order ID</span>
                <input class="search-input" type="text" placeholder="Enter Order ID" />
                <img src="{{ asset('images/search.png') }}" />
                <button class="search-button" type="submit">Search</button>
                <button class="reset-button" type="submit">Reset</button>
            </div>
            <div class="order-list">
                <table class="myorderTable" style="width: 100%">
                    <tr class="myordertr myordertrdatas">
                        <td class="myorderTd" style="width: 20%">Item(s)</td>
                        <td class="myorderTd" style="width: 16%">Quantity</td>
                        <td class="myorderTd" style="width: 16%">Total Price</td>
                        <td class="myorderTd" style="width: 16%">Status</td>
                        <td class="myorderTd" style="width: 16%">Delivery channels</td>
                        <td class="myorderTd" style="width: 16%">Actions</td>
                    </tr>
                    <tr class="myordertrdatas" style="width: 100%">
                        <td class="myorderTd" style="width: 20%">
                            <img src="{{ asset('images/1.png') }}" alt="item.name" class="hover-effect img" />
                        </td>
                        <td class="myorderTd td" style="width: 16%">1</td>
                        <td class="myorderTd td" style="width: 16%">RM 15</td>
                        <td class="myorderTd td" style="width: 16%">To Ship</td>
                        <td class="myorderTd td" style="width: 16%">J&T</td>
                        <td class="myorderTd td" style="width: 16%">Actions</td>
                    </tr>
                </table>
            </div>
            <div class="cart-total">Total: Rm 99</div>
        </div>
    </div>

    {{-- Settings --}}
    <div class="settings rSide">
        <div class="head">
            <h2>Account</h2>
            <p>Manage your account</p>
        </div>
        <div class="body">
            <div class="div">
                <img class="simg" src="{{asset('images/seller.png')}}" />
                <label class="slabel items">My Profile</label>
                <p class="items">user_name</p>
                <button class="buttons" @click="toggleLists('username')">Edit</button>
            </div>
            <div class="nestedDiv" v-show="isClicked['username']">
                <div class="nestedHead">
                    <label class="slabel">Username</label>
                    <input type="text" />
                </div>
                <button class="nestedButtons">Save</button>
            </div>
            <div class="div btop">
                <img class="simg" src="{{asset('images/phone.png')}}" />
                <label class="slabel items">Phone</label>
                <p class="items">+60178841890</p>
                <button class="buttons" @click="toggleLists('phone')">Edit</button>
            </div>
            <div class="nestedDiv" v-show="isClicked['phone']">
                <div class="nestedHead">
                    <label class="slabel">Phone Number</label>
                    <input type="text" />
                </div>
                <button class="nestedButtons">Save</button>
            </div>
            <div class="div btop">
                <img class="simg" src="{{asset('images/email.png')}}" />
                <label class="slabel items">Email</label>
                <p class="items">rasulyeabari@gmail.com</p>
                <button class="buttons" @click="toggleLists('email')">Edit</button>
            </div>
            <div class="nestedDiv" v-show="isClicked['email']">
                <div class="nestedHead">
                    <label class="slabel">Email</label>
                    <input type="text" />
                </div>
                <button class="nestedButtons">Save</button>
            </div>
            <div class="div btop">
                <img class="simg" src="{{asset('images/lock.png')}}" />
                <label class="slabel items">Password</label>
                <p class="items"></p>
                <button class="buttons" @click="toggleLists('password')">Change</button>
            </div>
            <div class="nestedDiv" v-show="isClicked['password']">
                <div class="nestedHead">
                    <label class="slabel">New Password</label>
                    <input type="text" />
                </div>
                <button class="nestedButtons">Save</button>
            </div>
        </div>
    </div>
    {{-- 
    <Dashboard v-if="!selectedLink" />
    <AddProduct v-else-if="selectedLink == 'Add-product'" />
    <MyShipment v-else-if="selectedLink == 'My-Shipment'" />
    <MyOrders v-else-if="selectedLink == 'Orders'" />
    <Settings v-else-if="selectedLink == 'Settings'" /> 
    --}}
</div>

<style scoped>
    body {
        margin: 0px;
    }

    .container {
        display: flex;
    }

    .sidebar {
        background-color: #f5f5f5;
        /* Set your desired background color */
        margin-right: 1.25em;
        margin-top: 4vh;
        /* Converted margin value */
        min-height: 92vh;
        max-height: 92vh;
        /* Set the maximum height for scrolling */
        overflow-y: auto;
        /* Enable vertical scrolling if content overflows */
        border-radius: 5px;
        /* Converted border-radius value */
        box-shadow: 0 0.125em 0.25em rgba(0, 0, 0, 0.5);
        /* Converted box-shadow value */
        width: 20vw;
        /* Set the desired width in pixels or em units */
        position: fixed;
    }

    li .sideimg {
        width: 0.5em;
        height: auto;
        align-items: center;
        float: right;
        margin: 0.25em 3em 0em 0em;
    }

    .navImg {
        width: 1em;
        /* Converted width value */
        height: auto;
        margin-right: 0.1em;
        /* Converted margin-right value */
        vertical-align: middle;
    }

    span {
        font-size: 1.5em;
    }

    /* Style for the links and list items */
    .sidebar ul {
        list-style-type: none;
        padding: 0em;
        margin-top: 1em;
    }

    li {
        margin: 1em 0em 0.5em 2em;
        /* Converted padding value */
        font-size: 1.1em;
    }

    .head-lists {
        margin-bottom: 2em;
    }

    .sidebar a {
        text-decoration: none;
        color: #333;
        /* Set the color for the links */
    }

    .sidebar .lists:hover {
        color: rgb(141, 114, 35);
        /* Set the color when links are hovered */
        cursor: pointer;
        text-decoration: underline;
    }

    .head-lists:hover {
        cursor: pointer;
    }

    /* Dashboard Styles */
    .dashBoard {
        width: 45%;
        height: 80%;
        margin: 4vh 5em 5em 30vw;
        padding: 2em 3em 3em 0em;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    .toDo {
        display: block;
        margin-left: 2em;
    }

    .dTable {
        display: flex;
    }

    .dtBody {
        margin: 0em 1em;
    }

    .dTr {
        display: flex;
        justify-content: space-evenly;
        margin-top: 1em;
    }

    .dTable,
    .dtBody,
    .dTr {
        width: 100%;
    }

    .dTd {
        display: flex;
        /*background-color: aliceblue;*/
        flex-direction: column;
        align-items: center;
        width: 25%;
        border-radius: 5px;
    }

    .p {
        font-size: large;
        font-weight: bold;
    }

    .dTd:hover {
        background-color: #ffffff;
        cursor: pointer;
    }

    /* Border styles */
    .dTd.border-right {
        /*
  border-right: 1px solid rgba(160, 160, 160, 0.5);*/
        border-right-style: inset;
    }

    /* Add Product Styles */
    .add-product {
        width: 50vw;
        height: 80%;
        margin: 4vh 5em 5em 30vw;
        padding: 2em 3em 3em 0em;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        background-color: #f5f5f5;
        text-align: right;
        border-radius: 5px;
        display: none;
    }

    h2 {
        text-align: left;
        margin-left: 3em;
    }

    .details {
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: flex-end;
    }

    .details textarea {
        resize: vertical;
    }

    .add-product input,
    .add-product textarea {
        width: 60%;
        margin-left: 5em;
        margin-top: 1em;
        padding: 0.5em;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .add-product input:focus,
    .add-product textarea:focus {
        outline: none;
        border-color: #5b9dd9;
        box-shadow: 0 0 0 3px rgba(91, 157, 217, 0.2);
    }

    .upload,
    .cancel {
        padding: 0.5em;
        margin: 2em 0em 0em 0.5em;
        border-radius: 5px;
        border: 0.5px solid grey;
        font-weight: bold;
        font-size: large;
        color: white;
    }

    .upload {
        background-color: rgb(222, 179, 51);
    }

    .cancel {
        background-color: #483912e3;
    }

    button:hover {
        cursor: pointer;
    }

    .upload:hover {
        background-color: rgb(243, 196, 56);
        color: black;
    }

    .cancel:hover {
        background-color: #c49f4be3;
        color: black;
    }

    /* My Shipment/My Orders Styles */
    .myshipment,
    .myorders {
        display: none;
        width: 74vw;
        margin-left: 24vw;
        height: auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        margin-top: 4vh;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    .nav-btn {
        display: block;
        margin-top: 1.5em;
        background-color: #f5f5f5;
        text-align: center;
    }

    .nav-btn button {
        padding: 0.5em;
        margin-right: 0.5em;
        font-size: 1.5em;
        background-color: #f5f5f5;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .nav-btn button:hover {
        background-color: #d7d2b0;
    }

    .order-container {
        display: flex;
        background-color: #f5f5f5;
        font-size: 1.5em;
        padding: 0.5em;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }

    .order-container img {
        width: 2%;
    }

    .search-input {
        border: none;
        margin-left: 2em;
        font-size: 0.8em;
        background-color: #f5f5f5;
        width: 50%;
    }

    .search-input:focus {
        outline: none;
        border-color: transparent;
    }

    .search-button {
        background-color: rgb(222, 179, 51);
        border: none;
        cursor: pointer;
        margin-left: 1em;
        font-size: 1em;
        color: white;
    }

    .search-button:hover {
        transform: scale(1.1);
    }

    .reset-button {
        background-color: rgb(209, 118, 20);
        border: none;
        cursor: pointer;
        margin-left: 1em;
        font-size: 1em;
        color: white;
    }

    .order-list {
        display: block;
        background-color: #f5f5f5;
        font-size: 1.5em;
    }

    .myshipTable,
    .myorderTable {
        display: block;
        padding: 1em;
    }

    .myshipTable tbody {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
    }

    .myorderTable tbody {
        display: flex;
        flex-wrap: nowrap;
        flex-direction: column;
    }

    .myshiptr,
    .myordertr {
        background-color: rgb(201, 201, 201);
        border-radius: 5px;
        padding: 1em;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
    }

    .myshiptrdatas,
    .myordertrdatas {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        text-align: center;
        padding: 0.5em;
        border-bottom: 1px solid rgba(100, 100, 100, 0.103);
    }

    .myshipTd,
    .myoderTd {
        padding: 0.025em;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: space-around;
        justify-content: center;
    }

    .myshipTd img,
    .myorderTd img {
        width: 60%;
    }

    .myshiptrdatas .td,
    .myordertrdatas .td {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        flex-direction: column;
        font-size: large;
        color: rgba(0, 0, 0, 0.692);
    }

    /* Settings Style */
    .settings {
        display: none;
        width: 60vw;
        margin-left: 30vw;
        height: auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        margin-top: 4vh;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        background-color: #f5f5f5;
        border-radius: 5px;
        padding: 2em;
    }

    .head {
        border-bottom: 0.025em solid rgba(0, 0, 0, 0.247);
        padding: 1em 1em 2em 1em;
    }

    .body {
        margin: 3em 0em 1em 4em;
    }

    .div {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        padding: 1em;
        margin: 1em;
    }

    .simg {
        width: 3%;
    }

    .slabel {
        font-size: large;
        font-weight: bold;
    }

    .items {
        width: 25%;
    }

    .buttons {
        width: 7%;
        padding: 0.5em;
        border: 0.5px solid gray;
        border-radius: 5px;
        cursor: pointer;
    }

    .nestedDiv {
        background-color: #ececec;
        padding: 1em;
        margin: 1em 12em;
        display: block;
    }

    .nestedHead {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin: 1em 3em;
    }

    .nestedHead label {
        padding: 1em;
    }

    .nestedHead input {
        width: 40%;
        padding: 0.5em;
    }

    .nestedButtons {
        display: block;
        margin-left: 14em;
        padding: 0.5em;
    }

    .btop {
        border-top: 0.1px solid gray;
    }
</style>
<script>
    // Get all the <li> elements with class "lists"
    var liElements = document.querySelectorAll('.lists');

    // Add event listeners to each <li> element
    liElements.forEach(function(li) {
        li.addEventListener('click', function() {
            // Get the class of the clicked <li> element
            var clickedClass = this.classList[1];
            console.log(clickedClass);
            // Get all the .rSide divs
            var rSideDivs = document.querySelectorAll('.rSide');
            // Hide all .rSide divs
            rSideDivs.forEach(function(div) {
                div.style.display = 'none';
                console.log(div);
            });

            if (clickedClass == 'newproducts') {
                var x = document.querySelector('.add-product');
                console.log(x);
                x.style.display = 'block';
            } else if (clickedClass == 'shipment') {
                var x = document.querySelector('.myshipment');
                console.log(x);
                x.style.display = 'flex';
            } else if (clickedClass == 'orders') {
                var x = document.querySelector('.myorders');
                console.log(x);
                x.style.display = 'flex';
            }else if (clickedClass == 'settingsli') {
                var x = document.querySelector('.settings');
                console.log(x);
                x.style.display = 'flex';
            } else {
                var x = document.querySelector('.dashBoard');
                console.log(x);
                x.style.display = 'block';
            }
        });
    });
</script>
