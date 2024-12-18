<header class="header" style="z-index: 999">
      <div class="topbar d-flex align-items-center">
        <div
          class="container d-flex justify-content-center justify-content-md-between"
        >
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"
              ><a href="mailto:contact@vortexemb.com" class="ps-2"
                >contact@vortexemb.com</a
              ></i
            >
            <i class="bi bi-envelope d-flex align-items-center ms-4 pe-3"
              ><a href="mailto:support@vortexemb.com" class="ps-2"
                >support@vortexemb.com</a
              ></i
            >
            <!-- <i class="bi bi-phone d-flex align-items-center ms-4"
              ><span>+1 5589 55488 55</span></i
            > -->
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.x.com" target="_blank" class="twitter px-2"
              ><i class="bi bi-twitter-x"></i
            ></a>
            <a
              href="https://www.facebook.com"
              target="_blank"
              class="facebook px-2"
              ><i class="bi bi-facebook"></i
            ></a>
            <a
              href="https://www.instagram.com"
              target="_blank"
              class="instagram px-2"
              ><i class="bi bi-instagram"></i
            ></a>
            <a
              href="https://www.linkedin.com"
              target="_blank"
              class="linkedin px-2"
              ><i class="bi bi-linkedin"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="headerNavbar">
        <div class="container py-3">
          <nav class="navbar navbar-expand-lg p-0">
            <div class="container p-0">
              <!-- Logo -->
              <a class="navbar-brand" href="index.html">
                <!-- <img src="img/Logo/logo.svg" height="50" alt=""/> -->
                VortexEmb
              </a>

              <div class="justify-content-end d-flex">
                <!-- NavBar Toggle Btn -->
                <button
                  class="navbar-toggler shadow-none border-0"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasNavbar"
                  aria-controls="offcanvasNavbar"
                  aria-label="Toggle navigation"
                >
                  <span class="text-dark fa-1x fa-solid fa-bars pt-1"></span>
                </button>
              </div>
              <!-- SideBar -->
              <div
                class="sidebar offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
              >
                <!-- SideBar Header -->
                <div class="offcanvas-header border-bottom background-white">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <a class="navbar-brand" href="index.html">
                      <!-- <img src="img/Logo/logo.svg" width="" height="70" alt=""/> -->
                      VortexEmb
                    </a>
                  </h5>
                  <button
                    type="button"
                    class="btn-close shadow-none border-0 fa-solid fa-xmark"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <!-- SideBar Body -->
                <div
                  class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0 background-white align-items-center"
                >
                  <div
                    class="row justify-content-center align-items-center w-100 pt-lg-2"
                  >
                    <ul
                      class="navbar-nav justify-content-center align-items-start align-items-lg-center fs-5 flex-grow-1 px-3"
                    >
                      <li class="nav-item mx-2">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                      </li>

                      <li class="nav-item mx-2">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                      </li>

                      <li class="nav-item mx-2 dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Services
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item {{ Request::is('embroidery-digitizing') ? 'active' : '' }}"
                              href="{{ url('/embroidery-digitizing') }}"
                              >Embriodery Digtizing</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item {{ Request::is('Vector Conversation') ? 'active' : '' }}"
                              href="{{ url('/vector-conversion') }}"
                              >Vector Conversation</a
                            >
                          </li>
                        </ul>
                      </li>

                      <li class="nav-item mx-2">
                        <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="{{ url('/portfolio') }}">Portfolio</a>
                      </li>

                      <li class="nav-item mx-2">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Us</a>
                      </li>
                    </ul>
                  </div>

                  <!-- Signup Button -->
                  <a href="{{ url('/order-now') }}" class="mt-auto">
                    <button
                      class="glBtn d-none align-items-center d-lg-flex justify-content-center"
                    >
                      Order Now
                    </button>
                    <button class="glBtn d-lg-none">Order Now</button>
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>