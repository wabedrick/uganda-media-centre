<?php
$page_name = "About Uganda";
include("header.php")
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
                <span class="ms-1 text-xl text-background font-medium tracking-tight md:ms-2">About Uganda</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section id="basic-facts" class="relative py-4">
    <div class="wrapper container relative mt-10 max-[768px]:space-y-12 md:flex md:items-start gap-12">
      <div class="md:sticky md:top-24 order-2 md:w-5/12">
        <div class="title mb-6 md:hidden">
          <h1 class="section-title">Basic Facts</h1>
        </div>
        <img class="w-full rounded-xl object-cover aspect-[3/2] md:aspect-square" src="../assets/images/uganda/anthem.jpg" alt="Image Description" width="800px" height="800px" />
      </div>

      <div class="mt-5 sm:mt-10 lg:mt-0 order-1 md:w-7/12">
        <div class="title hidden md:block mb-6">
          <h1 class="section-title">Basic Facts</h1>
        </div>
        <div class="space-y-6 sm:space-y-8">
          <div class="space-y-4 md:space-y-8">
            <div class="space-y-5">
              <p class="font-bold text-2xl">Geography and location</p>
              <p class="leading-normal md:text-lg">
                Uganda, commonly known as the ‘Pearl of Africa,’ lies
                astride the Equator. From North to South, it is located
                between latitudes 4°12' N and 1°29' S. From West to East, it
                lies between longitudes 29°34' E and 35°0' E.
              </p>
              <p class="leading-normal md:text-lg">
                It covers an area of 241,038 square kilometers, of which
                about a third is covered by fresh water bodies and wetlands.
                It is mainly a plateau astride the equator, with favorable
                tropical climate and average temperature ranging from 18 to
                28 degrees centigrade. (Source: Vision 2040)
              </p>
              <p class="leading-normal md:text-lg">
                Located in Eastern Africa, Uganda is a landlocked country,
                bordered by: Kenya to the East, South Sudan to the North,
                Democratic Republic of the Congo to the West, Rwanda to the
                Southwest and Tanzania in the South. The south-eastern part
                of the country is covered by a substantial portion of Lake
                Victoria, which is shared – at varying portions – with Kenya
                and Tanzania.
              </p>
              <p class="leading-normal md:text-lg">
                In addition to Lake Victoria (the second largest fresh water
                lake in the world), Uganda is the source of River Nile – the
                longest freshwater river n the world, covering a distance of
                6650 kms. Other major physical and geographic features
                include: the snow-capped Rwenzori Mountain ranges in Western
                Uganda; and Mountain Elgon in the East. At 4,000km², Mt.
                Elgon has the largest volcanic base in the world, and is the
                oldest and largest solitary, volcanic mountain in East
                Africa
              </p>
            </div>
            <div class="space-y-1">
              <p class="font-bold text-2xl">Independence</p>
              <p class="leading-normal md:text-lg">
                Uganda attained her Independence from British colonial rule
                on 9th October, 1962.
              </p>
            </div>
            <div class="space-y-1">
              <p class="font-bold text-2xl">Capital City</p>
              <p class="leading-normal md:text-lg">Kampala</p>
            </div>
            <div class="space-y-1">
              <p class="font-bold text-2xl">Other Cities</p>
              <p class="leading-normal md:text-lg">
                Mbarara, Gulu, Jinja, Fort Portal, Masaka, Lira, Soroti,
                Hoima (UBoS)
              </p>
            </div>
            <div class="space-y-1">
              <p class="font-bold text-2xl">Population</p>
              <p class="leading-normal md:text-lg">
                43.7 Million (UBoS: 2022 projections)
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="brief-history" class="relative py-4">
    <div class="wrapper container relative mt-10 max-[768px]:space-y-12 md:flex md:items-start gap-12">
      <div class="md:sticky md:top-24 md:w-5/12">
        <div class="title mb-6 md:hidden">
          <h1 class="section-title">Brief History</h1>
        </div>
        <img class="w-full rounded-xl object-cover aspect-[3/2] md:aspect-square" src="../assets/images/flag.jpg" alt="Image Description" width="800px" height="800px" />
      </div>

      <div class="mt-5 sm:mt-10 lg:mt-0 md:w-7/12">
        <div class="title hidden md:block mb-6">
          <h1 class="section-title">Brief History</h1>
        </div>
        <div class="space-y-5">
          <p class="leading-normal md:text-lg">
            Uganda became a British Protectorate in 1894 and was formed by
            bringing together a number of kingdoms, notably Buganda,
            Bunyoro, Toro, Busoga, Ankore and several chieftaincies. Uganda
            became independent from British colonial rule on 9th October
            1962.
          </p>
          <p class="leading-normal md:text-lg">
            Since independence, Uganda has gone through various political
            changes. The immediate post-independence government was led by
            Sir Edward Mutesa II as the first (non- executive) President
            (1962- 1966), followed by Apollo Milton Obote (1966- 1971), Idi
            Amin Dada (1971- 1979), Yusuf Kironde Lule (1979), Godfrey
            Lukongwa Binaisa (1979- 1980), Paul Muwanga (1980), Apollo
            Milton Obote (1981- 1985), Tito Okello Lutwa (1985- 1986) and
            Yoweri Kaguta Museveni (1986 to date).
          </p>
          <p class="leading-normal md:text-lg">
            Under the Leadership of His Excellency Yoweri Kaguta Museveni,
            the National Resistance Movement (NRM) government has
            revitalized the country, providing political stability, a
            growing economy, macroeconomic stability and an improved
            infrastructure.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="government" class="relative py-4">
    <div class="wrapper container relative mt-10">
      <div class="title mb-6">
        <h2 class="section-title">Government</h2>
      </div>
      <div class="max-w-[85rem] sm:px-6 lg:px-8 mx-auto">
        <div class="relative px-2 sm:p-6 md:p-16">
          <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
            <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
              <h2 class="text-lg sm:text-h5 font-bold font-body max-[768px]:pt-8">
                Uganda is a multiparty democracy and Unitary State comprised
                of three arms, namely:
              </h2>

              <nav class="grid mt-5 md:mt-10">
                <div class="accordion-item active" data-government-img="../assets/images/uganda/executive.jpg">
                  <div class="accordion-item__header">
                    <i class="fa fa-minus"></i>
                    <i class="fa fa-plus"></i>
                    <h4 class="title">The Executive</h4>
                  </div>
                  <div class="accordion-item__body">
                    <span></span>
                    <div class="text-muted-foreground pr-4 ml-4 pl-4">
                      <ul class="list-disc space-y-1.5">
                        <li class="leading-tight">President</li>
                        <li class="leading-tight">Vice President</li>
                        <li class="leading-tight">Prime Minister</li>
                        <li class="leading-tight">Cabinet Ministers</li>
                      </ul>
                      <a href="http://www.gou.go.ug/" class="flex flex-wrap w-full group text-sm mt-1.5 pb-1 leading-tight">The Executive -
                        <span class="underline group-hover:no-underline pl-1 underline-offset-2 hover:text-primary transition-all">http://www.gou.go.ug/</span></a>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-government-img="../assets/images/uganda/judiciary.jpg">
                  <div class="accordion-item__header">
                    <i class="fa fa-minus"></i>
                    <i class="fa fa-plus"></i>
                    <h4 class="title">The Judiciary</h4>
                  </div>
                  <div class="accordion-item__body">
                    <span></span>
                    <div class="text-muted-foreground pr-4 ml-4 pl-4">
                      <ul class="list-disc space-y-1.5">
                        <li class="leading-tight">
                          Supreme Court, headed by the Chief Justice
                        </li>
                        <li class="leading-tight">
                          Court of Appeal (Constitutional Court)
                        </li>
                        <li class="leading-tight">High Court</li>
                        <li class="leading-tight">Magistrate Courts</li>
                      </ul>
                      <a href="http://www.judiciary.go.ug/" class="flex flex-wrap w-full group text-sm mt-1.5 pb-1 leading-tight">The Judiciary -
                        <span class="underline group-hover:no-underline pl-1 underline-offset-2 hover:text-primary transition-all">http://www.judiciary.go.ug/</span></a>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-government-img="../assets/images/uganda/legislative.jpg">
                  <div class="accordion-item__header">
                    <i class="fa fa-minus"></i>
                    <i class="fa fa-plus"></i>
                    <h4 class="title">The Legislative</h4>
                  </div>
                  <div class="accordion-item__body">
                    <span></span>
                    <div class="text-muted-foreground pr-4 ml-4 pl-4">
                      <ul class="list-disc space-y-1.5">
                        <li class="pb-1 leading-tight">
                          Parliament (National Assembly), headed by the
                          Speaker
                          <a class="underline hover:no-underline pl-1 underline-offset-2 hover:text-primary transition-all" href="https://www.judiciary.go.ug/" target="_blank" rel="noopener noreferrer">www.parliament.go.ug</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>

            <div class="lg:col-span-7">
              <div class="relative">
                <div id="government-img-el" class="relative transition-all duration-300 bg-cover bg-primary/5 bg-center aspect-[3/2] w-full h-auto rounded-lg"></div>
              </div>
            </div>
          </div>

          <div class="absolute inset-0 grid grid-cols-12 size-full">
            <div class="col-span-full lg:col-span-7 lg:col-start-6 bg-secondary/5 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="national-symbols" class="relative py-4">
    <div class="wrapper container relative mt-10 space-y-8">
      <div class="title mb-6">
        <h2 class="section-title">National Symbols</h2>
      </div>
      <div class="flex flex-col gap-y-20 mx-auto max-w-7xl">
        <div class="national-flag relative max-[768px]:space-y-12 md:flex md:items-start gap-12">
          <div class="relative md:w-5/12 bg-cover bg-center aspect-[3/2] rounded-md" style="background-image: url(../assets/images/uganda/flag.jpg)"></div>
          <div class="relative sm:px-5 md:w-7/12 space-y-5">
            <div class="title flex justify-center">
              <h1 class="section-title !text-h4 pb-2">National Flag</h1>
            </div>
            <p class="leading-relaxed md:text-lg">
              The Uganda flag is composed of six (6) horizontal stripes
              alternating black, yellow and red. Black symbolizes our
              African heritage and the fertile soils of Uganda; Yellow
              represents the glorious sunny days, so characteristic of
              Uganda; and Red is symbolic of the blood that runs through our
              veins and that links us to the rest of humankind.In the middle
              of the flag stands the majestic crested crane (Regulorum
              gibbericeps), Uganda’s national emblem (which symbolizes
              Uganda's forward movement)
            </p>
          </div>
        </div>

        <div class="coat-of-arms relative max-[768px]:space-y-12 flex max-[768px]:flex-wrap items-center md:items-start gap-12">
          <div class="relative sm:px-5 w-full md:w-7/12 space-y-5 order-2 md:order-1">
            <div class="title flex justify-center">
              <h1 class="section-title !text-h4 pb-2">Coat Of Arms</h1>
            </div>
            <p class="leading-relaxed md:text-lg">
              The shield and spears symbolize our readiness to defend our
              motherland against all enemies. They are standing on a green
              mound to symbolise Uganda’s lush vegetation. Supporting the
              shields are the Uganda Kob (Adenota kob Thomasi) which is
              representative of Uganda’s abundance of wildlife; and the
              Crested Crane (Regulorum gibbericeps), Uganda’s national
              emblem.
            </p>
            <p class="leading-relaxed md:text-lg">
              Across the top of the shield are the waves, that are
              representative of Lake Victoria, the world’s second largest
              freshwater lake, as well as Uganda’s other great lakes and
              rivers. In the centre of the shield, the sun represents
              Uganda’s glorious sunny days. The traditional African drum at
              the bottom of the shield represents our culture, and is used
              both in dance, and communication.
            </p>
            <p class="leading-relaxed md:text-lg">
              Coffee and Cotton, Uganda’s main cash crops, are sprouting
              from the green mound alongside River Nile, the world’s longest
              river, which starts its 6650km journey from Uganda.
            </p>
          </div>
          <div class="relative w-full md:w-5/12 bg-cover bg-center aspect-square rounded-md order-1 md:order-2" style="
                  background-image: url(../assets/images/uganda/coat-of-arms.jpg);
                "></div>
        </div>

        <div class="national-anthem relative max-[768px]:space-y-12 md:flex md:items-start gap-12">
          <div class="relative md:w-5/12 bg-cover bg-center aspect-square rounded-md" style="
                  background-image: url(../assets/images/uganda/anthem.jpg);
                "></div>
          <div class="relative sm:px-5 w-full md:w-7/12 space-y-5 order-2 md:order-1">
            <div class="title">
              <h1 class="section-title !text-h4 pb-2">National Anthem</h1>
            </div>
            <ul class="list-disc space-y-5">
              <li class="leading-relaxed md:text-lg">
                Oh Uganda! may God uphold thee,<br />
                We lay our future in thy hand.<br />
                United, free,<br />
                For Liberty<br />
                Together we’ll always stand.
              </li>
              <li class="leading-relaxed md:text-lg">
                Oh Uganda! The land of freedom.<br />
                Our love and labour we give,<br />
                And with neighbours all,<br />
                At our country’s call<br />
                In peace and friendship, we’ll live
              </li>
              <li class="leading-relaxed md:text-lg">
                Oh Uganda! The land that feeds us,<br />
                By sun and fertile soils grown.<br />
                For our own dear land,<br />
                We’ll always stand,<br />
                The Pearl of Africa’s Crown.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="newsletter bg-primary/5">
    <div class="py-24 mx-auto container lg:max-w-screen-xl lg:py-10 lg:px-6">
      <div class="mx-auto max-w-screen-md sm:text-center">
        <h2 class="mb-4 text-3xl tracking-tight sm:text-4xl font-body !font-bold">
          Sign up for our newsletter
        </h2>
        <p class="mx-auto mb-8 max-w-2xl font-light md:mb-12 sm:text-xl text-muted-foreground">
          Stay up to date with the roadmap progress, announcements and
          exclusive discounts feel free to sign up with your email.
        </p>
        <form action="#">
          <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:gap-x-3 sm:space-y-0">
            <div class="relative w-full">
              <label for="email" class="hidden mb-2 text-sm font-medium text-muted-foreground">Email address</label>
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="fa fa-envelope"></i>
              </div>
              <input class="border border-border text-sm rounded-lg outline-primary focus:ring-primary focus:border-primary block w-full p-2.5 !pl-8 h-11" placeholder="Enter your email" type="email" id="email" required="" />
            </div>
            <button class="w-full sm:w-auto" type="submit">
              Subscribe
            </button>
          </div>
          <div class="mx-auto max-w-screen-sm text-sm mt-4 text-center space-y-1">
            We care about the protection of your data.
            <a href="#" class="font-medium text-primary hover:underline">Read our Privacy Policy</a>.
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="drawer" id="umc-drawer" data-drawer-target>
    <div class="drawer__overlay" data-drawer-close tabindex="-1"></div>
    <div class="drawer__wrapper">
      <div class="drawer__header">
        <a class="group flex flex-wrap items-center justify-start gap-2.5 hover:scale-[0.98] transition-all duration-300 flex-1" href="/">
          <img alt="U.M.C Logo" height="52px" width="52px" class="aspect-square" src="../assets/images/logo.png" />
          <div class="header-title flex flex-col">
            <h1 class="group-hover:text-foreground leading-none tracking-tighter text-h2 font-body font-medium">
              U M C
            </h1>
            <span class="group-hover:text-foreground font-heading font-normal text-xs uppercase">Uganda Media Center
            </span>
          </div>
        </a>
        <button class="drawer__close" data-drawer-close aria-label="Close Drawer"></button>
      </div>
      <div class="drawer__content size-full flex flex-col justify-between items-center gap-10 pb-6">
        <div class="links-wrapper w-full">
          <div class="accordion-item link">
            <div class="accordion-item__header w-full">
              <a href="/" class="title !block w-full">Home</a>
            </div>
            <div class="accordion-item__body"></div>
          </div>
          <div class="accordion-item link">
            <div class="accordion-item__header w-full">
              <a href="./about-us.html" class="title !block w-full">About UMC</a>
            </div>
            <div class="accordion-item__body"></div>
          </div>
          <div class="accordion-item bg-primary/5">
            <div class="accordion-item__header flex justify-between">
              <div class="order-2 mr-4">
                <i class="fa fa-minus"></i> <i class="fa fa-plus"></i>
              </div>
              <a href="./about-uganda.html" class="title order-1">About Uganda</a>
            </div>
            <div class="accordion-item__body flex pl-2">
              <span></span>
              <div class="flex-1">
                <ul class="dropdown px-2.5 w-full">
                  <li class="border-b border-t p-2.5">
                    <a href="./about-uganda.html#basic-facts">Basic Facts</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="./about-uganda.html#brief-history">Brief History</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="./about-uganda.html#government">The Government</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="./about-uganda.html#national-symbols">National Symbols</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="https://www.bou.or.ug/" target="_blank">Economy</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="https://www.ugandainvest.go.ug/" target="_blank">Investing in Uganda</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="https://www.exploreuganda.com/what-to-do/people-culture" target="_blank">People and Culture</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="https://www.exploreuganda.com/" target="_blank">Tourism</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item link">
            <div class="accordion-item__header w-full">
              <a href="./latest-news.html" class="title w-full">Latest News</a>
            </div>
            <div class="accordion-item__body"></div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item__header flex justify-between">
              <div class="order-2 mr-4">
                <i class="fa fa-minus"></i> <i class="fa fa-plus"></i>
              </div>
              <a href="./articles.html" class="title order-1">Media</a>
            </div>
            <div class="accordion-item__body flex pl-2">
              <span></span>
              <div class="flex-1">
                <ul class="dropdown px-2.5 w-full">
                  <li class="border-b border-t p-2.5">
                    <a href="./articles.html">Latest News</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="./articles.html">Upcoming Events</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a href="./articles.html">Opinions</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a class="anchor-link" href="./photo-gallery.html">Photo Gallery</a>
                  </li>
                  <li class="border-b p-2.5">
                    <a class="anchor-link" href="./publications.html">Downloads</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item link">
            <div class="accordion-item__header w-full">
              <a href="./accreditation.html" class="title !block w-full">Accreditation</a>
            </div>
            <div class="accordion-item__body"></div>
          </div>
          <div class="accordion-item link">
            <div class="accordion-item__header w-full">
              <a href="./contact-us.html" class="title !block w-full">Contact Us</a>
            </div>
            <div class="accordion-item__body"></div>
          </div>
        </div>
        <div class="flex lg:hidden flex-col gap-y-1.5">
          <form class="language-switch relative max-w-80">
            <select class="bg-background/30 border border-border text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full px-2.5 py-1.5">
              <option selected value="">Choose a language</option>
              <option value="UG">Uganda</option>
              <option value="US">United States</option>
              <option value="CA">Canada</option>
              <option value="FR">France</option>
              <option value="DE">Germany</option>
            </select>
          </form>
          <ul class="socials flex justify-end gap-3 px-2">
            <li>
              <a href="https://www.facebook.com/UgandaMediaCentre/" target="_blank" rel="noopener noreferrer" class="p-2 px-0.5 text-primary inline-flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook hover:text-link transition-all duration-300">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                </svg></a>
            </li>
            <li>
              <a href="https://www.instagram.com/ugandamediacentre/" target="_blank" rel="noopener noreferrer" class="p-2 px-0.5 text-primary inline-flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram hover:text-link transition-all duration-300">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                  <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                </svg></a>
            </li>
            <li>
              <a href="https://twitter.com/UgandaMediaCent/" target="_blank" rel="noopener noreferrer" class="p-2 px-0.5 text-primary inline-flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter hover:text-link transition-all duration-300">
                  <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="/" target="_blank" rel="noopener noreferrer" class="p-2 px-0.5 text-primary inline-flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube hover:text-link transition-all duration-300">
                  <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                  <path d="m10 15 5-3-5-3z" />
                </svg></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  const governmentImgEl = document.querySelector("#government-img-el");
  const tabsElements = document.querySelectorAll("[data-government-img]");

  const handleTabHeaderClick = (tab) =>
    (governmentImgEl.style.backgroundImage = `url(${tab.dataset.governmentImg})`);

  document.addEventListener("DOMContentLoaded", () => {
    tabsElements.forEach((tab, i) => {
      tab.addEventListener("click", () => {
        handleTabHeaderClick(tab);
      });
    });

    handleTabHeaderClick(tabsElements[0]);
  });
</script>
<?php include('footer.php'); ?>
<!-- </body>

</html> -->