<ul class="nav-list">
  <li class="nav-item">
      <a href="/" class="nav-link">Home</a>
  </li>
  <li class="nav-item">
      <a href="{{ route('clientProducts') }}" class="nav-link">Products</a>
  </li>
  <li class="nav-item">
      <a href="{{ route('clientCategory') }}" class="nav-link">Category</a>
  </li>
  <li class="nav-item">
      <a href="{{ route('clientAbout') }}" class="nav-link">About</a>
  </li>
  <li class="nav-item">
      <a href="{{ route('clientCheckOrder') }}" class="nav-link">Check Order</a>
  </li>

  {{-- Display different menu items based on customer login status --}}
  @if (auth()->check())
      {{-- Display this when the customer is logged in --}}
      <li class="nav-item">
          <a href="{{ route('customer.logout') }}" class="nav-link">Logout</a>
      </li>
  @else
      {{-- Display this when the customer is not logged in --}}
      <li class="nav-item">
          <a href="{{ route('customer.login') }}" class="nav-link">Login</a>
      </li>
      <li class="nav-item">
          <a href="{{ route('customer.registration') }}" class="nav-link">Register</a>
      </li>
  @endif
</ul>
