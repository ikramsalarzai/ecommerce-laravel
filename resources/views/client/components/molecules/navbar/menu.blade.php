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

  @auth('customer')
      <li class="nav-item">
          <a href="{{ route('clientCheckOrder') }}" class="nav-link">Check Order</a>
      </li>
      <li class="nav-item">
          <form method="POST" action="{{ route('customer.logout') }}">
              @csrf
              <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">Logout</button>
          </form>
      </li>
  @else
      <li class="nav-item">
          <a href="{{ route('customer.login') }}" class="nav-link">Login</a>
      </li>
      <li class="nav-item">
          <a href="{{ route('customer.registration') }}" class="nav-link">Register</a>
      </li>
  @endauth
</ul>
