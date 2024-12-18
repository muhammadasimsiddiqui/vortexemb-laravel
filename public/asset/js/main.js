(function () {
  "use strict";

  // Define the toggleScrolled function
  function toggleScrolled() {
    const selectBody = document.querySelector("body");
    const selectHeader = document.querySelector(".header");
    const selectHeaderTopbar = document.querySelector(".topbar");
    const selectHeaderNavOther = document.querySelector(".other-page");
    const navLinks = document.querySelectorAll(
      ".headerNavbar .navbar-nav a.nav-link"
    );
    const navSidebarBtn = document.querySelectorAll(
      ".headerNavbar .navbar-toggler span"
    );

    // Check if the page is scrolled more than 100px
    const isScrolled = window.scrollY >= 100;

    if (isScrolled) {
      // Add 'scrolled' class to the body
      selectBody.classList.add("scrolled");

      // Hide topbar and modify header classes based on page state
      selectHeaderTopbar.classList.add("d-none");

      if (selectHeaderNavOther) {
        // Use 'sticky-top' for other-page
        selectHeader.classList.add("sticky-top");
        selectHeader.classList.remove("fixed-top");
      } else {
        // Use 'fixed-top' for non-other-page
        selectHeader.classList.add("fixed-top");
        selectHeader.classList.remove("sticky-top");
      }
    } else {
      // Remove 'scrolled' class from the body
      selectBody.classList.remove("scrolled");

      // Show the topbar again if it was hidden (d-none)
      selectHeaderTopbar.classList.remove("d-none");

      // Remove sticky-top and fixed-top classes when at the top of the page
      if (selectHeaderNavOther) {
        selectHeader.classList.add("sticky-top");
        selectHeader.classList.remove("fixed-top");
      } else {
        selectHeader.classList.add("fixed-top");
        selectHeader.classList.remove("sticky-top");
      }
    }

    // Update link and button styles based on the body class
    const bodyClasses = selectBody.classList;
    const isIndexPage = bodyClasses.contains("index-page");

    // Style nav links accordingly
    navLinks.forEach((link) => {
      if (bodyClasses.contains("scrolled") || bodyClasses.contains("sidebar")) {
        link.style.color = "var(--theme-color-five) !important";
      } else if (isIndexPage) {
        link.style.color = "var(--theme-color-six)";
      } else {
        link.style.color = "initial";
      }
    });

    // Style nav sidebar buttons accordingly
    navSidebarBtn.forEach((btn) => {
      if (bodyClasses.contains("scrolled") || bodyClasses.contains("sidebar")) {
        btn.style.color = "var(--theme-color-five) !important";
      } else if (isIndexPage) {
        btn.style.color = "var(--theme-color-six) !important";
      } else {
        btn.style.color = "initial";
      }
    });
  }

  // Trigger the function on scroll and page load
  document.addEventListener("scroll", toggleScrolled);
  window.addEventListener("load", toggleScrolled);

  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector(".scroll-top");

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    }
  }
  scrollTop.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  window.addEventListener("load", toggleScrollTop);
  document.addEventListener("scroll", toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  }
  window.addEventListener("load", aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll(".isotope-layout").forEach(function (isotopeItem) {
    let layout = isotopeItem.getAttribute("data-layout") ?? "masonry";
    let filter = isotopeItem.getAttribute("data-default-filter") ?? "*";
    let sort = isotopeItem.getAttribute("data-sort") ?? "original-order";

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector(".isotope-container"), function () {
      initIsotope = new Isotope(
        isotopeItem.querySelector(".isotope-container"),
        {
          itemSelector: ".isotope-item",
          layoutMode: layout,
          filter: filter,
          sortBy: sort,
        }
      );
    });

    isotopeItem
      .querySelectorAll(".isotope-filters li")
      .forEach(function (filters) {
        filters.addEventListener(
          "click",
          function () {
            isotopeItem
              .querySelector(".isotope-filters .filter-active")
              .classList.remove("filter-active");
            this.classList.add("filter-active");
            initIsotope.arrange({
              filter: this.getAttribute("data-filter"),
            });
            if (typeof aosInit === "function") {
              aosInit();
            }
          },
          false
        );
      });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener("load", function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: "smooth",
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll(".navmenu a");

  /**
   * Contact Form Effects
   */
  function contact_form() {
    const inputs = document.querySelectorAll(".contact_form_input");
    function focusFunc() {
      let parent = this.parentNode;
      parent.classList.add("focus");
    }
    function blurFunc() {
      let parent = this.parentNode;
      if (this.value === "") {
        parent.classList.remove("focus");
      }
    }
    inputs.forEach((input) => {
      input.addEventListener("focus", focusFunc);
      input.addEventListener("blur", blurFunc);
    });
  }
  // Initialize the contact form function on page load
  window.addEventListener("load", contact_form);
  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  }
  window.addEventListener("load", aosInit);

  function navmenuScrollspy() {
    navmenulinks.forEach((navmenulink) => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        document
          .querySelectorAll(".navmenu a.active")
          .forEach((link) => link.classList.remove("active"));
        navmenulink.classList.add("active");
      } else {
        navmenulink.classList.remove("active");
      }
    });
  }
  window.addEventListener("load", navmenuScrollspy);
  document.addEventListener("scroll", navmenuScrollspy);

  // Trigger the file input when the button is clicked
  document
    .getElementById("file-upload-button")
    .addEventListener("click", () => {
      document.getElementById("file-upload").click();
    });

  // Handle file selection and display selected files
  document.getElementById("file-upload").addEventListener("change", (event) => {
    const fileList = event.target.files;
    const fileListDiv = document.getElementById("file-list");

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

  (function () {
    "use strict";

    /* Initialize Custom Select */
    var x, i, j, l, selElmnt, a, b, c;
    x = document.getElementsByClassName("custom-select");
    l = x.length;

    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /* Create the display box */
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);

      /* Create dropdown options */
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");

      // Loop through all options, starting from the second option to skip the disabled one
      for (j = 0; j < selElmnt.length; j++) {
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;

        // Disable the first option in the dropdown (index 0) but still show it
        if (selElmnt.options[j].disabled) {
          c.setAttribute("class", "disabled-option");
          c.style.color = "#aaa"; // Optional: Style disabled options differently
        } else {
          c.addEventListener("click", function (e) {
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;

            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;

                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }

            // Trigger the custom `change` event on the select element
            var event = new Event("change");
            s.dispatchEvent(event);

            h.click(); // Close the dropdown
          });
        }
        b.appendChild(c);
      }
      x[i].appendChild(b);

      /* Toggle dropdown visibility */
      a.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }

    /* Close all dropdowns */
    function closeAllSelect(elmnt) {
      var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;

      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i);
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }

      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }

    // Add event listener for the services dropdown
    document
      .getElementById("orServices")
      .addEventListener("change", function () {
        const selectedValue = this.value;
        const embroidery = document.getElementById(
          "embroideryDigitizingFields"
        );
        const vector = document.getElementById("vectorConversationFields");

        // Hide all field groups initially
        embroidery.classList.add("d-none");
        embroidery.classList.remove("d-block");
        vector.classList.add("d-none");
        vector.classList.remove("d-block");

        // Show the appropriate field group
        if (selectedValue === "embroideryDigitizing") {
          embroidery.classList.add("d-block");
          embroidery.classList.remove("d-none");
        } else if (selectedValue === "vectorConversation") {
          vector.classList.add("d-block");
          vector.classList.remove("d-none");
        }

        document
          .getElementById("emsSelectFormat")
          .addEventListener("change", function () {
            const otherField = document.getElementById("emiSelectFormat");
            if (this.value === "other") {
              otherField.classList.remove("d-none");
              otherField.classList.add("d-block");
            } else {
              otherField.classList.add("d-none");
              otherField.classList.remove("d-block");
            }
          });
        document
          .getElementById("emsSelectFabric")
          .addEventListener("change", function () {
            const otherField = document.getElementById("emiSelectFabric");
            if (this.value === "other") {
              otherField.classList.remove("d-none");
              otherField.classList.add("d-block");
            } else {
              otherField.classList.add("d-none");
              otherField.classList.remove("d-block");
            }
          });
        document
          .getElementById("vcsSelectFormat")
          .addEventListener("change", function () {
            const otherField = document.getElementById("vciSelectFormat");
            if (this.value === "other") {
              otherField.classList.remove("d-none");
              otherField.classList.add("d-block");
            } else {
              otherField.classList.add("d-none");
              otherField.classList.remove("d-block");
            }
          });
        document
          .getElementById("vcsVectorUsage")
          .addEventListener("change", function () {
            const otherField = document.getElementById("vciVectorUsage");
            if (this.value === "other") {
              otherField.classList.remove("d-none");
              otherField.classList.add("d-block");
            } else {
              otherField.classList.add("d-none");
              otherField.classList.remove("d-block");
            }
          });
      });

    /* Close dropdowns on clicking outside */
    document.addEventListener("click", closeAllSelect);
  })();

  //
})();
