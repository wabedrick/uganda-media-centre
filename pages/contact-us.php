<?php
$page_name = "Contact Us";
include('header.php');
?>

<main class="relative">
  <section class="relative container breadcrumb-nav">
    <div class="relative bg-center bg-cover" style="background-image: url(../assets/images/flag.jpg)">
      <div class="absolute inset-0 bg-foreground/75"></div>
      <div class="wrapper py-32 lg:py-40 flex items-center justify-center">
        <nav class="absolute inset-0 flex items-center justify-center" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-background text-xl font-medium hover:text-primary">
                <svg class="w-5 h-5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
              </a>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-background mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-xl text-background font-medium tracking-tight md:ms-2">Contact Us</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="container max-w-2xl lg:max-w-5xl mx-auto py-4 grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-4 lg:gap-8">
    <a class="group flex flex-col h-full text-center justify-center rounded-lg p-4 sm:p-6 bg-primary/20 hover:scale-[1.02] hover:shadow-md" href="mailto:info@mediacentre.go.ug">
      <i class="fa fa-envelope text-4xl"></i>
      <div class="mt-5">
        <h3 class="text-xl font-semibold">Email Address</h3>
        <p class="text-sm mt-3 text-muted-foreground">
          If you wish to write us an email instead please use
        </p>
        <p class="transition-all mt-5 inline-flex items-center gap-x-1.5 font-medium text-primary pb-1 border-b border-transparent group-hover:border-primary">
          Send Email
          <i class="fa fa-chevron-right font-light no-trans"></i>
        </p>
      </div>
    </a>

    <a class="group relative flex flex-col h-full text-center justify-center rounded-lg p-4 sm:p-6 bg-primary/20 hover:scale-[1.02] hover:shadow-md">
      <i class="fa fa-compass text-4xl"></i>
      <div class="mt-5">
        <h3 class="text-xl font-semibold">Our Locations</h3>

        <p class="text-primary font-medium mt-4">
          <span class="text-2xl">&centerdot;</span> Plot 36, Nile Avenue,
          Kampala
        </p>
        <p class="text-primary font-medium -mt-1">
          <span class="text-2xl">&centerdot;</span> P.O.Box 2665
          kampala,Uganda
        </p>
      </div>
    </a>

    <a class="group flex flex-col h-full text-center justify-center rounded-lg p-4 sm:p-6 bg-primary/20 hover:scale-[1.02] hover:shadow-md" href="tel:+2564142371413">
      <i class="fa fa-phone-volume text-4xl origin-center -rotate-45"></i>
      <div class="mt-5">
        <h3 class="text-xl font-semibold line-clamp-1">Contact Our Team</h3>
        <p class="text-sm mt-3 text-muted-foreground">
          Contact us for help for any of your queries.
        </p>
        <p class="transition-all mt-5 inline-flex items-center gap-x-1.5 font-medium text-primary pb-1 border-b border-transparent group-hover:border-primary">
          Call Us
          <i class="fa fa-chevron-right font-light no-trans"></i>
        </p>
      </div>
    </a>
  </section>

  <section class="contact-us container py-4">
    <div class="relative grid items-start max-w-full lg:grid-cols-[1fr_auto] gap-6 lg:gap-16">
      <div class="wrapper relative w-full lg:flex-1">
        <div class="title">
          <h2 class="section-title">FAQs</h2>
        </div>
        <div class="accordion relative mt-5">
          <div class="accordion-item active">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h4 class="title">What services do you offer ?</h4>
            </div>
            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h4 class="title">What services do you offer ?</h4>
            </div>
            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h4 class="title">What services do you offer ?</h4>
            </div>
            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h1 class="title">What kind of content do you create ?</h1>
            </div>

            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h4 class="title">What services do you offer ?</h4>
            </div>
            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h4 class="title">What services do you offer ?</h4>
            </div>
            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header">
              <i class="fa fa-minus"></i>
              <i class="fa fa-plus"></i>
              <h1 class="title">What kind of content do you create ?</h1>
            </div>

            <div class="accordion-item__body">
              <span></span>
              <p>
                We offer a comprehensive suite of media and communications
                services, including public relations, social media
                management, content creation, and crisis communication.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col border border-border rounded-xl p-4 sm:p-6 lg:p-8 w-full lg:max-w-[480px] lg:sticky lg:top-[175px] max-[1024px]:mt-16">
        <h2 class="mb-8 text-2xl font-semibold">Fill in the form</h2>

        <form>
          <div class="grid gap-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="firstname" class="sr-only">First Name</label>
                <input type="text" name="firstname" id="firstname" class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200" placeholder="First Name" />
              </div>

              <div>
                <label for="lastname" class="sr-only">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200" placeholder="Last Name" />
              </div>
            </div>

            <div>
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200" placeholder="Email" />
            </div>

            <div>
              <label for="phone" class="sr-only">Phone Number</label>
              <input type="text" name="phone" id="phone" class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200" placeholder="Phone Number" />
            </div>

            <div>
              <label for="message" class="sr-only">Message</label>
              <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full border outline-primary border-border rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200" placeholder="Details"></textarea>
            </div>
          </div>

          <div class="mt-4 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent disabled:opacity-50 disabled:pointer-events-none">
              Send inquiry
            </button>
          </div>

          <div class="mt-3 text-center">
            <p class="text-sm text-gray-500 dark:text-neutral-500">
              We'll get back to you in 1-2 business days.
            </p>
          </div>
        </form>

      </div>
    </div>
  </section>

  <section class="map-section bg-secondary/5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="500" class="w-full" allowfullscreen="" loading="lazy"></iframe>
  </section>

</main>

<script>
  const accordions = document.querySelectorAll(".accordion-item");

  const openAccordion = (accordion) => {
    const accordionBody = accordion.querySelector(".accordion-item__body");
    accordion.classList.add("active");
    accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
  };

  const closeAccordion = (accordion) => {
    const accordionBody = accordion.querySelector(".accordion-item__body");
    accordion.classList.remove("active");
    accordionBody.style.maxHeight = null;
  };

  accordions.forEach((accordion) => {
    const intro = accordion.querySelector(".accordion-item__header");
    const accordionBody = accordion.querySelector(".accordion-item__body");

    intro.onclick = () => {
      if (accordionBody.style.maxHeight) {
        closeAccordion(accordion);
      } else {
        accordions.forEach((accordion) => closeAccordion(accordion));
        openAccordion(accordion);
      }
    };
  });

  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(
        ".accordion-item.active .accordion-item__body"
      ).style.maxHeight =
      document.querySelector(".accordion-item.active .accordion-item__body")
      .scrollHeight + "px";
  });
</script>
<?php include('footer.php'); ?>