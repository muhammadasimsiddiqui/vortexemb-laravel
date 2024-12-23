@extends('frontend.layouts.app')

@section('title', 'Vector Conversation')

@section('content')

    <!-- Start Hero Section -->
    <div class="mainHeroBanner">
      <div class="container">
        <div
          class="mainbannerhero"
          style="background-image: url('asset/images/banner/vector-art.svg')"
        ></div>
      </div>
    </div>
    <!-- /End Hero Section -->

    <!-- Vector Section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 order-1 order-md-2">
            <picture>
              <source
                srcset="asset/images/vector-conversation.svg"
                type="image/svg+xml"
              />
              <img
                src="asset/images/vector-conversation.svg"
                class="img-fluid"
                alt="Vector Conversation"
              />
            </picture>
          </div>
          <div class="col-md-5 align-content-center order-2 order-md-1">
            <h2 class="headingLeft text-dark">
              Vector Conversation Services
            </h2>
            <p>
              We provide high-resolution vector tracing services for your
              pixelated images and artwork. Experience the high-level expertise
              of our vector artist to get your artwork perfectly vectorized for
              your screen printing process
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Vector Section -->

    <!-- Raster To Vector Section -->
    <section class="section section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 justify-content-center d-flex">
            <picture>
              <source
                srcset="
                  asset/images/portfolio/vector-conversation/original/Islanders-Racing-Team-Logo-Vector-Conversation.jpg
                "
                type="image/svg+xml"
              />
              <img
                src="asset/images/portfolio/vector-conversation/original/Islanders-Racing-Team-Logo-Vector-Conversation.jpg"
                class="img-fluid rounded-4"
                alt="Raster To Vector"
              />
            </picture>
          </div>
          <div class="col-md-6 align-content-center">
            <h2 class="headingLeft text-dark">Raster To Vector</h2>
            <p>
              Are you a screen printer? Looking for high-resolution scalable
              vector graphics for tumblers, shirts and printing accessories for
              your customers. Get your vectorized file that best fit for your
              DTG, sublimation, vinyl, and heat transfer screen printing
              technique.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Raster To Vector Section -->

    <!-- Silhouette Art Section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 order-1 order-md-2 justify-content-center d-flex"
          >
            <picture>
              <source
                srcset="asset/images/silhouette-art.svg"
                type="image/svg+xml"
              />
              <img
                src="asset/images/silhouette-art.svg"
                class="img-fluid"
                alt="Silhouette Art"
              />
            </picture>
          </div>
          <div class="col-md-6 align-content-center order-2 order-md-1">
            <h2 class="headingLeft text-dark">Silhouette Art</h2>
            <p>
              Want some bold and black art? Get personalized your mugs and
              printable accessories with a black-filled touch of your favourite
              characters and sayings silhouette printable files at economical
              rates.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Silhouette Art Section -->

    <!-- Stencil Art Section -->
    <section class="section section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 justify-content-center d-flex">
            <picture>
              <source
                srcset="asset/images/Stencil-Art.webp"
                type="image/svg+xml"
              />
              <img
                src="asset/images/Stencil-Art.webp"
                class="img-fluid"
                alt="Stencil Art"
              />
            </picture>
          </div>
          <div class="col-md-6 align-content-center">
            <h2 class="headingLeft text-dark">Stencil Art</h2>
            <p>
              Searching for customized cut files? Get the stencil file that
              helps you to convert your images into cut files for a high-quality
              silk screen printing process with the ultra-fast turnaround.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Stencil Art Section -->

    <!-- Color Separation Section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 order-1 order-md-2 justify-content-center d-flex"
          >
            <picture>
              <source
                srcset="asset/images/color-separation.svg"
                type="image/svg+xml"
              />
              <img
                src="asset/images/color-separation.svg"
                class="img-fluid"
                alt="Color Separation"
              />
            </picture>
          </div>
          <div class="col-md-6 align-content-center order-2 order-md-1">
            <h2 class="headingLeft text-dark">Color Separation</h2>
            <p>
              Do you think color separation is complicated? DigitEMB provides
              vector conversion services with color separation that helps you to
              meshed your frame with favourite colors and makes color separation
              process more smooth and easier.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Color Separation Section -->


@endsection