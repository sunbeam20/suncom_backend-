@include('components.header')
<form class="login-form" action="/register" method="POST">
    @csrf
    <h1>Sign Up</h1>
    <input class="input" type="text" placeholder="Full Name" id="fullname" name="name" />
    <input class="input" type="email" placeholder="Email Address" id="email" name="email" />

    <input class="input" type="password" placeholder="Password" id="password" name="password" />

    <input class="input" type="text" placeholder="Address" id="address" name="address" />

    <div class="side-side">
        <div class="input-group">
            <input class="input" type="text" placeholder="City" id="city" name="city" />
            <input class="input" type="text" placeholder="State" id="state" name="state" />
        </div>
        <div class="input-group">
            <input class="input" type="text" placeholder="ZIP-code" id="zip" name="zip" />
            <input class="input" type="tel" placeholder="Contact Number" id="contact" name="contact" />
        </div>
    </div>

    <div class="radio-buttons">
        <label class="label">Gender:</label>
        <label>
            <input class="input" type="radio" name="gender" value="male" name="male" />
            Male
        </label>
        <label class="label">
            <input class="input" type="radio" name="gender" value="female" name="female" />
            Female
        </label>
    </div>
    <!-- <SignupBtn /> -->
    <div><button type="submit" class="signupBtn">Signup</button></div>
    <p class="Log-in">
        Already have an account?<a href="/Login">Log in</a>
    </p>
</form>
@include('components.footer')

<style>
    body {
        margin: 0px;
    }

    .login-form {
        text-align: center;
        max-width: 25%;
        margin: 4em auto;
        padding: 1em 2em 2em 2em;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        margin-bottom: 1.5em;
    }

    .label {
        display: block;
        margin-bottom: 0.5em;
        font-weight: bold;
    }

    .input {
        border: 1px solid #ccc;
        margin: 1em 1em 0em 1em;
    }

    .input,
    .input-group {
        display: block;
        margin: 0em 1em 0em 1em auto;
        width: 90%;
        padding: 5px;
        border-radius: 5px;
    }

    .input:focus {
        outline: none;
        border-color: dodgerblue;
    }

    .side-side {
        display: flex;
        justify-content: center;
    }

    .input-group {
        width: 45%;
    }

    .input-group input {
        width: 90%;
        box-sizing: border-box;
    }

    .radio-buttons {
        display: flex;
        flex-direction: row;
        padding: 1em;
        justify-content: center;
        color: gray;
    }

    .radio-buttons label {
        display: flex;
        align-items: center;
    }

    .radio-buttons input[type="radio"] {
        margin: 0em 1em;
    }

    .Log-in {
        text-align: center;
    }

    .Log-in a {
        text-decoration: none;
    }

    .Log-in a:hover {
        text-decoration: underline;
    }

    .input[type="text"],
    .input[type="email"],
    .input[type="password"],
    .input[type="tel"] {
        width: 90%;
        padding: 0.5em;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .signupBtn {
        background-color: #614700ef;
        border: none;
        color: white;
        padding: 1em 0em;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        cursor: pointer;
        border-radius: 5px;
        width: 90%;
    }

    div {
        text-align: center;
    }

    button:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 255, 0.5);
    }
</style>
