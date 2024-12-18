@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
  <!-- Start Hero Section -->
  <div class="mainHeroBanner">
      <div class="container">
        <div
          class="mainbannerhero"
          style="background-image: url('asset/images/banner/contact-us.svg')"
        ></div>
      </div>
    </div>
    <!-- /End Hero Section -->
     
    <section class="contactSection">
      <span class="big-circle"></span>
      <span class="medium-circle"></span>
      <img src="img/Icons/dots.png" alt="" class="square" srcset="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Have questions or need support? Reach out and let’s discuss how we
            can assist with your embroidery and digitizing needs!<br /><br />
            Let us help bring your ideas to life. Contact us now for
            personalized assistance and inquiries about our services.
          </p>

          <div class="info">
            <div class="information">
              <i class="fa-2x fa-regular fa-envelope pe-3 icon"></i>
              <a href="mailto:info@vortexemb.com"><p>info@vortexemb.com</p></a>
            </div>
            <div class="information">
              <i class="fa-2x fa-regular fa-envelope pe-3 icon"></i>
              <a href="mailto:support@vortexemb.com"
                ><p>support@vortexemb.com</p></a
              >
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://x.com" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form onsubmit="formsubmition()" id="contactForm">
            <h3 class="title">Contact us</h3>
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
                    <i class="fa-solid fa-cloud-arrow-up"></i> Upload Files
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
            <button
              type="submit"
              class="plantpalace-btn mt-auto cta-one__btn rounded-5 border-0 mt-0 py-2 px-4 justify-content-center"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
@endsection