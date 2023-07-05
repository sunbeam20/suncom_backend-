@include('components.header')
@if (Auth::check())
    <h1>Logged in as {{ Auth::user()->name }}</h1>
@else
    <h1>Guest </h1>
@endif

<div class="product-list">
    <h1 class="h1">Products</h1>
    @include('components.productCard')
    <div class="view-more">
        <a href="/Results">
            <h2 class="h2">View More <img src="{{ asset('images/more.png') }}" /></h2>
        </a>
    </div>
</div>

@include('components.footer')

<style>
    body {
        margin: 0px;
    }

    .h1,
    .h2 {
        width: 100%;
        cursor: pointer;
        text-decoration: none;
    }

    .h2 {
        text-align: right;
        cursor: pointer;
    }

    .h2 img {
        height: 10px;
        width: auto;
        cursor: pointer;
    }

    .h1:hover,
    .h2:hover,
    .h2 img:hover {
        text-decoration: underline;
    }

    .product-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
        /* start product from left*/
        align-items: center;
        gap: 1em;
        margin: 2em 10em 2em 10em;
        padding: 2em 1em 2em 1em;
        flex-direction: row;
        background-color: rgb(235, 235, 235);
    }

    .view-more {
        width: 100%;
        right: 1em;
        margin-right: 2em;
    }
</style>
