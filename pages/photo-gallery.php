<?php
$page_name = "Photo Gallery";
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
                <span class="ms-1 text-xl text-background font-medium tracking-tight md:ms-2">Photo Gallery</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="container relative py-4">
    <div class="flex flex-wrap justify-between items-start py-4 gap-x-5 gap-y-4">
      <div class="title">
        <h1 class="section-title">Photo Gallery</h1>
      </div>
      <div class="flex items-center justify-center flex-wrap">
        <button type="button" class="max-[640px]:!px-4 !text-sm">
          All Images
        </button>
        <button type="button" class="!text-sm max-[640px]:!px-4 !bg-transparent border !text-foreground !border-primary hover:!text-primary-foreground hover:!bg-primary">
          Previous
        </button>
        <button type="button" class="!text-sm max-[640px]:!px-4 !bg-transparent border !text-foreground !border-primary hover:!text-primary-foreground hover:!bg-primary">
          Uganda
        </button>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
      <a data-lightbox="roadtrip" data-title="Caption 1" href="../assets/images/articles/5.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/5.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 2" href="../assets/images/articles/9.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/9.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 3" href="../assets/images/articles/10.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/10.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 4" href="../assets/images/articles/4.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/4.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 5" href="../assets/images/articles/1.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/1.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 6" href="../assets/images/articles/2.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/2.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 7" href="../assets/images/articles/3.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/3.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 8" href="../assets/images/articles/8.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/6.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 9" href="../assets/images/articles/7.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/7.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 10" href="../assets/images/articles/8.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/8.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 11" href="../assets/images/articles/11.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/11.jpg" alt="" width="768px" height="768px" />
      </a>
      <a data-lightbox="roadtrip" data-title="Caption 12" href="../assets/images/articles/12.jpg">
        <img class="max-w-full aspect-square object-cover rounded-lg" src="../assets/images/articles/12.jpg" alt="" width="768px" height="768px" />
      </a>
    </div>
  </section>

  <?php include('./newsletter.php') ?>

</main>

<?php include('footer.php'); ?>