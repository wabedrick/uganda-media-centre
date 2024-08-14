<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $page_name; ?> | MINISTRY OF ICT AND NATIONAL GUIDANCE | REPUBLIC OF
        UGANDA
    </title>
    <meta name="description" content="Welcome to the official website of Uganda Media Center. Our mandate is to effectively facilitate the communication of government policies, programmes, and projects to the public through various media channels." />
    <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./assets/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/icons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/favicon-16x16.png" />
    <!-- <link rel="manifest" href="./assets/icons/site.webmanifest" /> -->
    <link rel="mask-icon" href="./assets/icons/safari-pinned-tab.svg" color="#349d9d" />
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta name="msapplication-TileColor" content="#f7f7f7" />
    <meta name="application-name" content="Uganda Media Center" />
    <link rel="author" href="https://www.twitter.com/dumanimedia" />
    <meta name="author" content="Dumani Media" />
    <meta name="theme-color" content="#f7f7f7" />

    <meta property="og:title" content="Uganda Media Centre | MINISTRY OF ICT AND NATIONAL GUIDANCE | REPUBLIC OF UGANDA" />
    <meta property="og:description" content="Welcome to the official website of Uganda Media Center. Our mandate is to effectively facilitate the communication of government policies, programmes, and projects to the public through various media channels." />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image" content="https://umc-new.vercel.app/assets/images/social.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Uganda Media Centre | MINISTRY OF ICT AND NATIONAL GUIDANCE | REPUBLIC OF UGANDA" />
    <meta name="twitter:description" content="Welcome to the official website of Uganda Media Center. Our mandate is to effectively facilitate the communication of government policies, programmes, and projects to the public through various media channels." />
    <meta property="twitter:image:width" content="1200" />
    <meta property="twitter:image:height" content="630" />
    <meta property="twitter:image" content="https://umc-new.vercel.app/assets/images/social.jpg" />
    <meta property="twitter:image:type" content="image/jpeg" />
    <meta name="publisher" content="Dumani Media" />
    <meta name="category" content="Media and Communication" />

    <link rel="stylesheet" href="./assets/css/globals.css" />
    <link rel="stylesheet" href="./assets/css/fontawesome/all.min.css" />
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/translate-api.css" />
</head>

<body>
    <header class="header sticky -top-[156px] z-[1000] bg-background lg:-top-28">
        <div class="header__top relative container flex-col lg:flex-row flex flex-wrap items-center justify-center lg:justify-between py-3 gap-5 gap-x-6">
            <a class="header__top-logo group flex flex-wrap items-center justify-center gap-2.5 md:gap-3.5 hover:scale-[0.98] transition-all duration-300 max-[1024px]:w-full" href="/">
                <img alt="U.M.C Logo" height="72" width="72" class="aspect-square" src="./assets/images/logo.png" />
                <div class="header-title flex flex-col gap-2 max-[1024px]:w-full">
                    <h1 class="group-hover:text-foreground tracking-tighter max-[1024px]:text-center text-h3 lg:text-h2 font-body font-medium">
                        Uganda Media Centre
                    </h1>
                    <span class="group-hover:text-foreground font-normal max-[1024px]:text-xs uppercase max-[1024px]:text-center">
                        Ministry of ICT and National Guidance
                        <span> | Republic of Uganda</span>
                    </span>
                </div>
            </a>
            <div class="header__top-navigation reltive max-[640px]:w-full">
                <div class="header__top-desktop-ui hidden lg:flex flex-col gap-y-1.5">

                    <div id="google_translate_element"></div>

                    <ul class="header__top-socials flex justify-end gap-3 px-2">
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
                <div class="header__top-mobile-ui flex items-center gap-5 justify-between w-full lg:hidden">
                    <a class="hover:text-primary" href="#" data-drawer-trigger aria-controls="umc-drawer" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                    </a>

                    <form class="search">
                        <label for="search-articles" class="sr-only">Search Articles</label>
                        <div class="relative w-full">
                            <input type="text" id="search-articles" class="border border-border text-sm rounded-lg outline-primary focus:ring-primary focus:border-primary block w-full pe-11 p-2.5" placeholder="Search Articles..." required />
                            <button type="submit" class="search-button p-[7px] ms-2 text-background text-sm font-medium bg-primary rounded-lg border border-primary hover:bg-link focus:ring-4 focus:outline-none focus:ring-primary absolute top-1/2 -translate-y-1/2 right-0.5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="header__bottom-nav container hidden lg:block relative">
            <ul class="wrapper flex items-center justify-center gap-12 bg-secondary text-secondary-foreground">
                <li class="nav-link"><a class="active" href="./index.php">Home</a></li>
                <li class="nav-link">
                    <a class="" href="./pages/about-us.php">About UMC</a>
                </li>

                <li class="nav-link group">
                    <a class="" href="./pages/about-uganda.php">About Uganda<i class="caret fas fa-chevron-down group-hover:rotate-180"></i></a>
                    <ul class="dropdown">
                        <li class="">
                            <a href="./pages/about-uganda.php#basic-facts">Basic Facts</a>
                        </li>
                        <li class="">
                            <a href="./pages/about-uganda.php#brief-history">Brief History</a>
                        </li>
                        <li class="">
                            <a href="./pages/about-uganda.php#government">The Government</a>
                        </li>
                        <li class="">
                            <a href="./pages/about-uganda.php#national-symbols">National Symbols</a>
                        </li>
                        <li class="">
                            <a href="https://www.bou.or.ug/" target="_blank">Economy</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.ugandainvest.go.ug/" target="_blank">Investing in Uganda</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.exploreuganda.com/what-to-do/people-culture" target="_blank">People and Culture</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.exploreuganda.com/" target="_blank">Tourism</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a class="" href="./pages/latest-news.php">Latest News</a>
                </li>
                <li class="nav-link group">
                    <a class="" href="./pages/articles.php">Media<i class="caret fas fa-chevron-down group-hover:rotate-180"></i></a>
                    <ul class="dropdown">
                        <li class="">
                            <a href="./pages/articles.php">Latest Press</a>
                        </li>
                        <li class="">
                            <a href="./pages/articles.php">Press Release</a>
                        </li>
                        <li class="">
                            <a href="./pages/articles.php">Upcoming Events</a>
                        </li>
                        <li class=""><a href="./pages/articles.php">Opinions</a></li>
                        <li class="">
                            <a class="anchor-link" href="./pages/photo-gallery.php">Photo Gallery</a>
                        </li>
                        <li class="">
                            <a class="anchor-link" href="./pages/publications.php">Downloads</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a class="" href="./pages/accreditation.php">Accreditation</a>
                </li>
                <li class="nav-link">
                    <a class="" href="./pages/contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </header>