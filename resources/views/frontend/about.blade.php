@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')

    <!-- Start Hero Section -->
    <div class="mainHeroBanner">
      <div class="container">
        <div
          class="mainbannerhero"
          style="background-image: url('asset/images/banner/about.svg')"
        ></div>
      </div>
    </div>
    <!-- /End Hero Section -->

    <!-- Our Story Section -->
    <section class="our-introduction section">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 order-1 order-md-2 justify-content-center d-flex"
          >
            <picture>
              <source srcset="asset/images/about-2.jpg" type="image/svg+xml" />
              <img
                src="asset/images/about-2.jpg"
                class="img-fluid"
                alt="Embriodery Digitizing"
              />
            </picture>
          </div>
          <div class="col-md-6 align-content-center order-2 order-md-1">
            <h2 class="headingLeft text-gradient">Our Story</h2>

            <p>
              The company started out as a digitizing service provider in the
              year of 2006 in Memphis, Tennessee. As time progresses so does our
              company. The name of the company is a portmanteau of Digitization
              and Embroidery. In the year 2008, we started our operations in
              vector art services venture as well. That consists of color
              separation, graphic designing, raster to vector and logo designs.
              With more than a decade of experience, Vortexemb excels at
              delivering fastpaced digitizing and vector art services of a
              supreme quality that renders maximum customer satisfaction. Today,
              the company is valiantly located at the heart of New York City,
              New York. Serving over thousands of custom embroidery digitizing
              services and graphic art designs, hitting milestones every year to
              be at the top of the heap.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Our Story Section -->

    <section>
      <div class="container">
        <div class="row g-4 align-items-stretch justify-content-evenly">
          <div class="col-md-5 d-flex">
            <div class="vision-mission text-center">
              <div class="iconBox">
                <i class="fa-regular fa-eye"></i>
              </div>
              <h2>VISION</h2>
              <p>
                Vortexemb has the vision to provide a bonafide platform where it
                amalgamates all the companies that relate to embroidery and
                vector art services. That would enable the customers the utmost
                ease and comfort to buy the best quality products hassle-free at
                an affordable price.
              </p>
            </div>
          </div>
          <div class="col-md-5 d-flex">
            <div class="vision-mission text-center">
              <div class="iconBox">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <h2>MISSION</h2>
              <p>
                Vortexemb endeavors to determine the highest standards and
                stringent monitoring mechanism of quality digitizing and vector
                art services with premium customer service that yields exemplary
                and long-lasting relationship
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    @include('frontend.partials.whychooseus')
    <!-- /Why Choose Us Section -->

    <!-- Stats Section -->
    @include('frontend.partials.stats')
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    @include('frontend.partials.testinomial')
    <!-- /Testimonials Section -->

    <!-- Feature Section -->
    @include('frontend.partials.feature')
    <!-- /Feature Section -->

    @endsection