@include('components.header')
<div class="box">
    <div class="lSide">
        <span class="account">
            <img src="{{ asset('images/man.png') }}" alt="profile pic" />
            @if (Auth::check())
                <h3>{{ Auth::user()->name }}</h3>
            @else
                <h1>Guest </h1>
            @endif
        </span>
        <ul>
            <li class="main-lists">
                <span>
                    <img src="{{ asset('images/account.png') }}" />
                    <p>My Account</p>
                </span>
                <ul>
                    <li class="nested-lists profileli">Profile</li>
                    <li class="nested-lists">Address</li>
                    <li class="nested-lists">Banks & Cards</li>
                    <li class="nested-lists chpassli">Change Password</li>
                </ul>
            </li>
            <li class="main-lists">
                <span>
                    <img src="{{ asset('images/orders.png') }}" />
                    <p>My Orders</p>
                </span>
            </li>
        </ul>
    </div>
    {{-- My profile edit --}}
    <div class="rSide profile">
        <div class="head">
            <h2>My Profile</h2>
            <p>Manage your account</p>
        </div>
        <div class="body">
            <form action="" class="form">
                <table style="width: 100%">
                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">User Name</label>
                        </td>
                        <td class="column" style="width: 80%">
                            <input type="text" class="input" @if (Auth::check())value="{{ Auth::user()->name }}" @endif/>
                        </td>
                    </tr>

                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">Email</label>
                        </td>
                        <td class="column" style="width: 80%">
                            <input type="text" class="input" @if (Auth::check())value="{{ Auth::user()->email }}" @endif/>
                        </td>
                    </tr>
                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">Phone Number</label>
                        </td>
                        <td class="column" style="width: 80%">
                            <input type="text" class="input" />
                        </td>
                    </tr>
                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">Gender</label>
                        </td>
                        <td class="column" style="width: 80%">
                            <div class="div">
                                <input type="radio" name="gender_option" /> <label for="">Male</label>
                                <input type="radio" name="gender_option" />
                                <label for="">Female</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="column columnA"></td>
                        <td class="column button" style="width: 80%">
                            <button>Save</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    {{-- Change Password --}}
    <div class="rSide chpass">
        <div class="head">
            <h2>Change Password</h2>
            <p>Manage your account</p>
        </div>
        <div class="body">
            <form action="" class="form">
                <table style="width: 100%">
                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">New Password</label>
                        </td>
                        <td class="column" style="width: 70%">
                            <input type="password" class="input" />
                        </td>
                    </tr>
                    <tr>
                        <td class="column columnA">
                            <label for="" class="label">Confirm Password</label>
                        </td>
                        <td class="column" style="width: 70%">
                            <input type="password" class="input" />
                        </td>
                    </tr>
                    <tr>
                        <td class="column columnA"></td>
                        <td class="column button" style="width: 80%">
                            <button>Save</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@include('components.footer')

<style>
    body {
        margin: 0px;
    }

    .box {
        display: flex;
        margin-top: 2em;
    }

    .lSide {
        width: 20vw;
        background-color: rgb(240, 240, 240);
        box-shadow: 0px 0px 5px rgba(90, 90, 90, 0.5);
        margin: 2em 2em 2em 10em;
        border-radius: 5px;
    }

    .lSide ul {
        border-radius: 5px;
        margin: 2em 2em 0em 1em;
        list-style-type: none;
    }

    .account {
        margin-left: 3em;
        padding-top: 1em;
    }

    .account,
    .account img,
    .account h3 {
        display: flex;
        align-items: center;
        margin-right: 1em;
    }

    .main-lists,
    .nested-lists {
        margin-top: 1em;
        padding: 1em 1em 1em 0em;
    }

    .main-lists span {
        display: flex;
        align-items: center;
    }

    .main-lists img {
        width: 2em;
        height: 2em;
        margin-right: 1em;
    }

    .main-lists:hover {
        text-decoration: none;
    }

    .nested-lists:hover {
        cursor: pointer;
        color: rgb(218, 171, 33);
        text-decoration: none;
    }

    /*My Profile*/
    .rSide {
        border-radius: 5px;
        display: block;
        width: 50vw;
        margin: 2em;
        padding: 0em 2em;
        background-color: rgb(240, 240, 240);
        box-shadow: 0px 0px 5px rgba(90, 90, 90, 0.5);
    }

    .head {
        border-bottom: 0.025em solid rgba(0, 0, 0, 0.247);
    }

    .body {
        margin: 2em 0em 1em 4em;
    }

    .form {
        border-radius: 5px;
        width: 90%;
    }

    .form,
    .label,
    .input {
        margin: 1em;
        padding: 0.7em;
    }

    .columnA {
        text-align: right;
    }

    .column .div {
        margin-left: 1em;
        display: flex;
        align-items: center;
    }

    .div input,
    .div label {
        margin: 1em;
    }

    .input {
        width: 80%;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, 0.411);
    }

    .button {
        display: flex;
        justify-content: flex-end;
        margin-top: 3em;

    }

    .button button {
        padding: 0.5em 1em;
        color: #000;
    }

    .chpass,
    .profile {
        display: none;
    }
</style>

<script>
    // Get all the <li> elements with class "nested-lists"
    var liElements = document.querySelectorAll('.nested-lists');

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

            if (clickedClass == 'profileli') {
                var x = document.querySelector('.profile');
                console.log(x);
                x.style.display = 'block';
            }
            if (clickedClass == 'chpassli') {
                var x = document.querySelector('.chpass');
                console.log(x);
                x.style.display = 'block';
            }
        });
    });
</script>
