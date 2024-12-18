<footer id="footer" class="footer-section footer">
      <div class="container relative">
        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="mb-4 footer-logo-wrap">
              <a href="{{ url('/') }}" class="footer-logo">VortexEmb<span>.</span></a>
            </div>
            <p class="mb-4">
              VortexEmb is your trusted partner for premium embroidery
              digitizing and vector art services. Delivering exceptional quality
              and fast turnaround for over 18 years, we strive to exceed your
              expectations.
            </p>

            <ul class="list-unstyled custom-social">
              <li>
                <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
              </li>
            </ul>
          </div>

          <div class="col-lg-8">
            <div class="row links-wrap">
              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="{{ url('/about') }}">About Us</a></li>
                  <li><a href="{{ url('/embroidery-digitizing') }}">Embriodery Digitizing</a></li>
                  <li><a href="{{ url('/vector-conversion') }}">Vector Conversation</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                  <li><a href="{{ url('/get-inquiry') }}">Request a Quote</a></li>
                  <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="{{ url('/portfolio') }}">Our Portfolio</a></li>
                  <li><a href="{{ url('/') }}">Customer Reviews</a></li>
                  <li><a href="{{ url('/') }}">Privacy Policy</a></li>
                </ul>
              </div>

              <div class="col-6 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                  <li><a href="{{ url('/embroidery-digitizing') }}">Embroidery Digitizing</a></li>
                  <li><a href="{{ url('/vector-conversion') }}">Vector Conversion</a></li>
                  <li><a href="{{ url('/') }}">Special Offers</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="border-top copyright">
          <div class="row pt-4">
            <div class="col-lg-6">
              <p class="mb-2 text-center text-lg-start">
                Copyright &copy; {{ date('Y') }} VortexEmb. All Rights Reserved.
              </p>

            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <ul class="list-unstyled d-inline-flex ms-auto">
                <li class="me-4"><a href="{{ url('/') }}">Terms &amp; Conditions</a></li>
                <li><a href="{{ url('/') }}">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
