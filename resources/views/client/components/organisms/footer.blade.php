<div class="sub-footer bg-light py-5 mt-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
              <div class="short-about text-center">
                  <img src="{{ asset('shop/'.$shop->path) }}" alt="" width="80px" class="mb-3">
                  <h1>{{ $shop->name_shop }}</h1>
                  <p>{{ $shop->desc }}</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-6">
              <h6 class="mb-3">Company</h6>
              <ul class="list-unstyled">
                  <li><a href="/about" class="text-decoration-none text-dark">About Us</a></li>
                  <li><a href="/products" class="text-decoration-none text-dark">Product</a></li>
                  <li><a href="/about#address" class="text-decoration-none text-dark">Address</a></li>
              </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-6">
              <h6 class="mb-3">Support</h6>
              <ul class="list-unstyled">
                  <li><a href="/about#faq" class="text-decoration-none text-dark">FAQ</a></li>
                  <li><a href="/about#shippingandreturns" class="text-decoration-none text-dark">Shipping & Returns</a></li>
                  <li><a href="/about#warranty" class="text-decoration-none text-dark">Warranty</a></li>
              </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-6 d-flex flex-column align-items-center">
              <h6 class="mb-3">Contact Us</h6>
              <p class="mb-2"><img src="{{ asset('client/img/icon-phone.png') }}" alt="" class="img-fluid me-2">{{ $shop->phone }}</p>
              <p class="mb-2"><img src="{{ asset('client/img/icon-email.png') }}" alt="" class="img-fluid me-2">hello{!! '@'.str_replace(' ', '', strtolower($shop->name_shop)) !!}.com</p>
              <div class="d-lg-block d-md-block d-none">
                  <div class="row">
                      <div class="col-4">
                          <img src="{{ asset('client/img/icon-instagram.png') }}" alt="" class="img-fluid">
                      </div>
                      <div class="col-4">
                          <img src="{{ asset('client/img/icon-tokopedia.png') }}" alt="" class="img-fluid">
                      </div>
                      <div class="col-4">
                          <img src="{{ asset('client/img/icon-facebook.png') }}" alt="" class="img-fluid">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-6 d-lg-none d-md-none d-block">
              <h6 class="mb-3">Social Media</h6>
              <div class="row">
                  <div class="col-4">
                      <img src="{{ asset('client/img/icon-instagram.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                      <img src="{{ asset('client/img/icon-tokopedia.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="col-4">
                      <img src="{{ asset('client/img/icon-facebook.png') }}" alt="" class="img-fluid">
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<footer class="text-center py-3 bg-dark text-white">
  <p>&#169; {{ now()->year }} {{ $shop->name_shop }}. All rights reserved.</p>
</footer>
