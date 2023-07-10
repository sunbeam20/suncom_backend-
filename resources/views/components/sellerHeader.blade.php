<header class="sticky-header">
  <nav class="nav">
    <div class="navleft">
      <a href="/">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" />
      </a>
      <form action="/SellerHome" method="POST" class="link">
        @csrf
        <button type="submit">Seller Hub</button>
          @if (Auth::guard('seller')->check())
          <input type="hidden" name="seller_id" value="{{ Auth::guard('seller')->user()->id }}">
          @endif
      </form>
    </div>
  </nav>
</header>
<style>
  .sticky-header {
    position: sticky;
    top: 0;
    height: 4vh;
  }

  .nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #463300e3;
    padding-right: 2em;
  }

  .navleft {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }

  .navleft img {
    border-radius: 2em;
    width: auto;
    height: 4em;
    cursor: pointer;
    padding: 0.2em;
  }

  h1 {
    color: rgb(222, 179, 51);
    margin-left: 1em;
  }

  .link {
    text-decoration: none;
  }
</style>
