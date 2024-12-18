@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Start Hero Section -->
    <section class="heroSection section">
      <div class="container">
        <div class="row gy-5">
          <div class="col-md-6">
            <div class="heroContent">
              <h2 class="HerogradientHeading text-start">
                Embroidery Digitizing & Vector Conversion
              </h2>
              <p class="heroDesc text-white">
                At VortexEmb, our in-house team of skilled digitizers ensures
                precision and creativity to meet your unique requirements. With
                over <strong>9 years of industry experience</strong>, we are
                proud to deliver reliable, high-quality services to our global
                clients.
              </p>
              <ul class="mark-line">
                <li>
                  <img src="asset/images/icons/check.png" alt="" />
                  <span>Unmatched quality at competitive pricing.</span>
                </li>
                <li>
                  <img src="asset/images/icons/check.png" alt="" />
                  <span
                    >Embroidery Digitizing starting at just $3/1000
                    stitches.</span
                  >
                </li>
                <li>
                  <img src="asset/images/icons/check.png" alt="" />
                  <span
                    >Vector Conversion services starting at $25 per
                    artwork.</span
                  >
                </li>
              </ul>

              <p class="text-white">
                Looking for exceptional quality
                <strong>Embroidery Digitizing</strong> and
                <strong>Vector Conversion</strong> services at unbeatable
                prices?
                <br />
              </p>
              <p class="text-white">
                Elevate your brand with professional designs crafted for
                perfection. Start your journey with us today!
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="heroForm d-flex">
              <div class="contactSection">
                <form id="contactForm">
                  <h3 class="title">Request a Order</h3>
                  <div class="input-container">
                    <input
                      type="text"
                      name="cpName"
                      id="formName"
                      class="contact_form_input input"
                      pattern="^[A-Za-z\s'-]{3,}$"
                      title="Name must only contain letters, spaces, hyphens, or apostrophes, and must be at least 3 characters long."
                      required
                    />
                    <label for="cpName">Name</label>
                    <span>Name</span>
                  </div>
                  <div class="input-container">
                    <input
                      type="email"
                      name="cpEmail"
                      id="formEmail"
                      class="contact_form_input input"
                      required
                    />
                    <label for="cpEmail">Email</label>
                    <span>Email</span>
                  </div>
                  <div class="input-container">
                    <input
                      type="tel"
                      name="cpPhone"
                      id="formPhone"
                      class="contact_form_input input"
                      pattern="[0-9]{4,}"
                      title="Please Enter Correct Phone Number"
                    />
                    <label for="cpPhone">Phone</label>
                    <span>Phone</span>
                  </div>
                  <div class="input-container">
                    <input
                      type="text"
                      name="cpCompanyName"
                      id="formName"
                      class="contact_form_input input"
                      pattern="[A-Za-z]{3,}"
                      required
                    />
                    <label for="cpCompanyName">Company Name</label>
                    <span>Company Name</span>
                  </div>
                  <div class="input-container textarea">
                    <textarea
                      name="cpMessage"
                      class="contact_form_input input"
                      id="formMessage"
                    ></textarea>
                    <label for="cpMessage">Message</label>
                    <span>Message</span>
                  </div>
                  <div>
                    <div>
                      <label for="file-upload" class="custom-file-label">
                        <button
                          type="button"
                          id="file-upload-button"
                          class="upload-button"
                        >
                          <i class="fa-solid fa-cloud-arrow-up"></i> Upload
                          Files
                        </button>
                      </label>
                      <input
                        type="file"
                        id="file-upload"
                        name="cpAttachements"
                        multiple
                        style="display: none"
                        required
                      />
                      <div id="file-list" class="file-list"></div>
                    </div>
                  </div>
                  <script>
                    // Trigger the file input when the button is clicked
                    document
                      .getElementById("file-upload-button")
                      .addEventListener("click", () => {
                        document.getElementById("file-upload").click();
                      });

                    // Handle file selection and display selected files
                    document
                      .getElementById("file-upload")
                      .addEventListener("change", (event) => {
                        const fileList = event.target.files;
                        const fileListDiv =
                          document.getElementById("file-list");

                        // Clear previous file list
                        fileListDiv.innerHTML = "";

                        // Display the selected file names
                        if (fileList.length > 0) {
                          Array.from(fileList).forEach((file, index) => {
                            const fileItem = document.createElement("div");
                            fileItem.textContent = `${index + 1}. ${file.name}`;
                            fileListDiv.appendChild(fileItem);
                          });
                        } else {
                          fileListDiv.innerHTML = "<p>No files selected.</p>";
                        }
                      });
                  </script>
                  <button type="submit" class="glBtn">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /End Hero Section -->

    <!-- Embriodery Section -->
    <section class="embriodery section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 order-1 order-md-2">
            <picture>
              <source
                srcset="asset/images/embroidery-digitizing.png"
                type="image/svg+xml"
              />
              <img
                src="asset/images/embroidery-digitizing.png"
                class="img-fluid"
                alt="Embriodery Digitizing"
              />
            </picture>
          </div>
          <div class="col-md-5 align-content-center order-2 order-md-1">
            <h2 class="headingLeft text-gradient">Embroidery Digitizing</h2>
            <p>
              At <strong>Vortexemb</strong>, we specialize in high-quality
              **embroidery digitizing** services, transforming your logos and
              artwork into precise embroidery files. Our expert digitizers
              ensure smooth stitching and fast turnaround, with prices starting
              at just $3 per 1,000 stitches. We deliver top-notch results
              quickly, helping you meet deadlines without compromising on
              quality.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Embriodery Section -->

    <!-- Vector Section -->
    <section class="vector section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
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
          <div class="col-md-6 align-content-center">
            <h2 class="headingLeft text-gradient">Vector Conversation</h2>
            <p>
              We convert your raster art images into High Quality Print ready
              Vector Art. We can produce color separation for screen printing,
              We can convert your vector images in many file formats such as
              .eps, .ai, .psd, .cdr, .svg, etc.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Vector Section -->

    <!-- Start Services Section -->
    <section class="section services">
      <div class="container">
        <div class="section-title">
          <h2>Our Services</h2>
        </div>
        <div class="row g-4 align-items-stretch">
          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Left-Chest-Logo-Digitizing.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Left-Chest-Logo-Digitizing.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">
                Left Chest Logo Digitizing
              </h4>
              <p class="serviceDesc">
                Vortexemb Offers Left Chest embroidery Digitizing Services for
                shirts and other promotional items of clothing and uniforms
                achieved via the cutting-edge technology of logo embroidery
                digitizing.
              </p>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Cap-Digitizing.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Cap-Digitizing.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">Cap Digitizing</h4>
              <p class="serviceDesc">
                Cap embroidery is one of the most common form of embroidery,
                given a dose of personalization with customization options
                available via the latest technology of cap embroidery
                digitizing.
              </p>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Jacket-Back-Digitizing.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Jacket-Back-Digitizing.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">
                Jacket Back Digitizing
              </h4>
              <p class="serviceDesc">
                Vortexemb is a pioneer in offering custom digitizing services,
                especially for Jacket Backs.
              </p>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Towel-Digitizing.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Towel-Digitizing.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">Towel Digitizing</h4>
              <p class="serviceDesc">
                Towel digitizing is not much different than other forms of
                machine embroidery or does it need specialized embroidery
                digitizing machines capable for executing such embroidery.
              </p>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Other-Digitizing.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Other-Digitizing.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">Other Digitizing</h4>
              <p class="serviceDesc">
                Vortexemb offers a wide range of custom embroidery digitizing
                which includes Gloves Digitizing, Sleeves Digitizing, Towel
                Digitizing and all sort of custom logo embroidery digitizing.
              </p>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="serviceCard">
              <div class="serviceIcon">
                <img
                  src="asset/images/icons/services/primary_color/Raster-to-Vector.svg"
                  alt=""
                  srcset=""
                />
                <img
                  src="asset/images/icons/services/secondary_color/Raster-to-Vector.svg"
                  alt=""
                  srcset=""
                />
              </div>
              <h4 class="serviceHeading text-gradient">Raster to Vector</h4>
              <p class="serviceDesc">
                Vortexemb also offers Raster to Vector art conversion service,
                where we convert your low res / raster images to high quality
                line art.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Start Services Section -->

    <!-- Why Choose Us Section -->
    @include('frontend.partials.whychooseus')
    <!-- /Why Choose Us Section -->

    <!-- Stats Section -->
    @include('frontend.partials.stats')
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    @include('frontend.partials.testinomial')
    <!-- /Testimonials Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">
      <div class="container section-title">
        <h2>Pricing</h2>
      </div>

      <div class="container">
        <div class="pricing-area">
          <div class="container">
            <div class="row gy-4 align-items-stretch">
              <div class="col-md-3 d-flex discount-banner">
                <div class="align-items-center">
                  <div class="discBanner">
                    <h4 class="discHeading">
                      <span class="discGet">GET</span><br />
                      <span class="disc50 text-gradient">50%</span>
                      <br />DISCOUNT ON YOUR FIRST ORDER
                    </h4>
                    <p class="tca">Terms & Conditions Applied <span>*</span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-9 justify-content-evenly d-flex p-0">
                <div class="row gy-4 w-100">
                  <div class="col-md-4 basic">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Basic</h3>
                          <h4 class="planPriceDisc">$25.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>18.00
                          </h4>
                          <p class="planOffering">20,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 standard">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Standard</h3>
                          <h4 class="planPriceDisc">$35.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>25.00
                          </h4>
                          <p class="planOffering">30,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp;&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 professional">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Professional</h3>
                          <h4 class="planPriceDisc">$45.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>35.00
                          </h4>
                          <p class="planOffering">30,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Pricing Section -->

    <!-- Feature Section -->
    @include('frontend.partials.feature')
    <!-- /Feature Section -->

@endsection
