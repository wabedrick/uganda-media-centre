<?php
$page_name = "Uganda Media Centre";
include("./header.php");
include("./database/db_connection.php");

// $sql = "SELECT * FROM slider_content_table LIMIT 3";
// $result = mysqli_query($conn, $sql);
// <a href="' . htmlspecialchars($release['link']) . '"></a>
// <img src="' . htmlspecialchars($release['image_path']) . '" alt="img" />
?>

<?php
include("./database/db_connection.php");
// Fetching the press releases
$sql_one = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 5";
$result_one = mysqli_query($conn, $sql_one);

// Fetching the news updates
$sql_two = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 5";
$result_two = mysqli_query($conn, $sql_two);

// Fetching the opinion posts
$sql_three = "SELECT * FROM opinions ORDER BY created_at DESC LIMIT 8";
$result_three = $conn->query($sql_three);

// Fetching the national news
$sql_four = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 6";
$result_four = mysqli_query($conn, $sql_four);

?>

<main class="relative">
  <section class="hero-carousel relative container">
    <div class="hero-carousel-swiper relative h-[80vh] w-full overflow-x-hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(./assets/images/hero-slides/1.jpeg)">
          <a href="/">Why Uganda ignored lions and used crested cranes</a>
        </div>

        <div class="swiper-slide" style="background-image: url(./assets/images/hero-slides/1.jpeg)">
          <a href="/">Why Uganda ignored lions and used crested cranes lorem10</a>
        </div>
      </div>
    </div>
  </section>

  <section class="hero-category-links">
    <a class="category-link group" href="./pages/articles.html?category=opinions">
      <div class="wrapper">
        <div class="category-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flashlight">
            <path d="M18 6c0 2-2 2-2 4v10a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V10c0-2-2-2-2-4V2h12z" />
            <line x1="6" x2="18" y1="6" y2="6" />
            <line x1="12" x2="12" y1="12" y2="12" />
          </svg>
        </div>
        <p class="category-title">Spotlight</p>
        <div class="arrow-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right group-hover:-rotate-45 duration-300">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </div>
      </div>
    </a>

    <a class="category-link group" href="./pages/articles.html?category=latest+news">
      <div class="wrapper">
        <div class="category-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history">
            <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
            <path d="M3 3v5h5" />
            <path d="M12 7v5l4 2" />
          </svg>
        </div>
        <p class="category-title">Press Release</p>
        <div class="arrow-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right group-hover:-rotate-45 duration-300">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </div>
      </div>
    </a>
    <a class="category-link group" href="./pages/articles.html?category=media+releases">
      <div class="wrapper">
        <div class="category-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clapperboard">
            <path d="M20.2 6 3 11l-.9-2.4c-.3-1.1.3-2.2 1.3-2.5l13.5-4c1.1-.3 2.2.3 2.5 1.3Z" />
            <path d="m6.2 5.3 3.1 3.9" />
            <path d="m12.4 3.4 3.1 4" />
            <path d="M3 11h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
          </svg>
        </div>
        <p class="category-title">Multimedia</p>
        <div class="arrow-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right group-hover:-rotate-45 duration-300">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </div>
      </div>
    </a>
  </section>

  <section id="hero-latest-releases" class="relative container w-full py-4">
    <div class="title">
      <h2 class="section-title">Press Release</h2>
    </div>

    <div class="latest-releases-swiper relative overflow-hidden">
      <div class="swiper-wrapper mt-6">
        <?php
        if ($result_one->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result_one)) {
            echo '
            <div class="swiper-slide article-wrapper">
            <a href="./pages/single-article.php?id=' . urlencode($row['id']) . '">
                <article class="article" style="min-height: 480px; max-height: 480px;">
                    
                    <div class="img-wrapper">
                         <img src="' . htmlspecialchars($row['image_path']) . '" alt="img" />
                    </div>
                    <div class="bio">
                        <span class="badge">' . htmlspecialchars($row['title']) . '</span>
                        <span class="date">' . date('d F Y', strtotime($row['date_published'])) . '</span>
                        <h4 class="title">' . htmlspecialchars($row['sub_title']) . '</h4>
                        <p>' . htmlspecialchars($row['article_content']) . '</p>
                        <button>Read More</button>
                    </div>
                </article>
                </a>
            </div>';
          }
        } else {
          echo "<p>No press releases found.</p>";
        }
        ?>
      </div>
    </div>
    <button class="!block !mx-auto w-full max-w-screen-md mt-10" onclick="redirectToPage()">
      Load More
    </button>

    <script>
      function redirectToPage() {
        window.location.href = "./pages/articles.php";
      }
    </script>
  </section>

  <section id="hero-news-updates" class="relative container w-full py-4">
    <div class="title">
      <h2 class="section-title">News Updates</h2>
    </div>

    <div class="news-updates-swiper relative overflow-hidden">
      <div class="swiper-wrapper mt-6">
        <?php
        if ($result_two->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result_two)) {
            echo '
            <div class="swiper-slide article-wrapper">
            <a href="./pages/single-article.php?id=' . urlencode($row['id']) . '">
                <article class="article" style="min-height: 480px; max-height: 480px;">
                    
                    <div class="img-wrapper">
                         <img src="' . htmlspecialchars($row['image_path']) . '" alt="img" />
                    </div>
                    <div class="bio">
                        <span class="badge">' . htmlspecialchars($row['title']) . '</span>
                        <span class="date">' . date('d F Y', strtotime($row['date_published'])) . '</span>
                        <h4 class="title">' . htmlspecialchars($row['sub_title']) . '</h4>
                        <p>' . htmlspecialchars($row['article_content']) . '</p>
                        
                            <button>Read More</button>
                       
                    </div>
                </article>
                 </a>
            </div>';
          }
        } else {
          echo "<p>No press releases found.</p>";
        }
        ?>

      </div>
    </div>
    <button class="!block !mx-auto w-full max-w-screen-md mt-10" onclick="redirectToPageOne()">
      Load More
    </button>

    <script>
      function redirectToPageOne() {
        window.location.href = "./pages/latest-news.php";
      }
    </script>
  </section>

  <section id="hero-media-release" class="relative container w-full py-3">
    <div class="title">
      <h2 class="section-title">Opinion posts</h2>
    </div>
    <!-- Carousel Start -->
    <div class="relative p-2 flex flex-wrap gap-3 items-center justify-center sm:justify-start mt-6">
      <?php

      if ($result_three->num_rows > 0) {
        while ($row = $result_three->fetch_assoc()) {
          echo '
    <article class="news-article relative border border-border shadow-xl flex items-start gap-1.5 sm:gap-3 w-full max-[768px]:max-w-screen-sm md:w-[calc(50%-12px)] lg:w-[calc(33.33%-12px)] p-2 rounded-md">
        <div class="info flex-1 flex flex-col gap-2">
            <h4 class="title !text-h5 line-clamp-2 font-body !font-semibold">
                ' . htmlspecialchars($row['title']) . '
            </h4>
            <p class="line-clamp-2 text-muted-foreground text-sm">
                ' . htmlspecialchars($row['content']) . '
            </p>
            <p>' . htmlspecialchars($row['author']) . '</p>
        </div>
    </article>';
        }
      } else {
        echo "<p>No opinion posts found.</p>";
      }
      ?>
    </div>
    <button class="!block !mx-auto w-full max-w-screen-md mt-10">
      Load More
    </button>
  </section>
  </body>

  </html>

  <section id="national-social-news" class="relative container w-full py-4 flex flex-wrap items-start max-[768px]:justify-center justify-between gap-5">
    <div class="national-news relative w-full xl:flex-1">
      <div class="title">
        <h2 class="section-title">National News</h2>
      </div>

      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      if ($result_four->num_rows > 0) {
        while ($row = $result_four->fetch_assoc()) {
          $imagePath = htmlspecialchars($row['image_path']);
          echo '
            <article class="news-article relative border border-border shadow-xl flex items-start gap-1.5 sm:gap-3 w-full max-w-screen-md 2xl:max-w-[492px] p-2 rounded-md">
                <a href="' . htmlspecialchars($row['link']) . '" class="absolute inset-0"></a>
                <img class="object-cover aspect-square w-[104px] sm:w-32" src="' . $imagePath . '" alt="article img" />
                <div class="info flex-1 flex flex-col gap-2">
                    <h4 class="title !text-h5 line-clamp-2 font-body !font-semibold">
                        ' . htmlspecialchars($row['sub_title']) . '
                    </h4>
                    <p class="line-clamp-2 text-muted-foreground text-sm">
                        ' . htmlspecialchars($row['article_content']) . '
                    </p>
                    <p>' . htmlspecialchars($row['date_published']) . '</p>
                </div>
            </article>';
        }
      } else {
        echo "<p>No any National News uploaded.</p>";
      }
      ?>


      <div class="mt-8 flex justify-center max-w-screen-md w-full">
        <a href="https://visas.immigration.go.ug/" target="_blank" class="w-full flex flex-wrap max-[620px]:items-center max-[620px]:justify-center max-[620px]:flex-col items-start gap-8 lg:gap-12 rounded p-2 border border-primary hover:border-border">
          <div class="relative flex items-center justify-center">
            <img alt="advertisement img" class="aspect-[300/250] !w-40 rounded" src="https://www.mediacentre.go.ug/sites/default/files/evisa.gif.pagespeed.ce.jPaxa4PBGc.gif" />
          </div>
          <div class="relative flex flex-col gap-4">
            <div class="title">
              <h4 class="section-title !text-xl !pb-2">
                In need of visa services?
              </h4>
            </div>

            <ul class="lg:list-disc space-y-2.5">
              <li class="text-sm">Document Preparation</li>
              <li class="text-sm">Booking visa appointment slots</li>
              <li class="text-sm">Visa Application Handling</li>
              <li class="text-sm">
                Assisting with urgent visa applications
              </li>
            </ul>
          </div>
        </a>
      </div>
    </div>
    </div>
    <!-- X news section -->
    <div class="social-news relative w-full max-w-md xl:sticky xl:top-20">
      <div class="title">
        <h2 class="section-title">X News</h2>
      </div>
      <!-- <div class="twitter-posts relative max-h-[500px] overflow-auto rounded-lg border border-border shadow-md mt-6 space-y-10">
        <blockquote class="twitter-tweet">
          <p lang="en" dir="ltr">
            𝐒𝐓𝐀𝐓𝐄𝐌𝐄𝐍𝐓 | Clarification on media reports regarding UNOC&#39;s
            first petroleum product shipment.<br /><br />(Source:
            <a href="https://twitter.com/UNOC_UG?ref_src=twsrc%5Etfw">@UNOC_UG</a>)
            <a href="https://t.co/e4THwYTZ3c">pic.twitter.com/e4THwYTZ3c</a>
          </p>
          &mdash; Uganda Media Centre (@UgandaMediaCent)
          <a href="https://twitter.com/UgandaMediaCent/status/1811706558532760004?ref_src=twsrc%5Etfw">July 12, 2024</a>
        </blockquote>

        <blockquote class="twitter-tweet">
          <p lang="en" dir="ltr">
            <a href="https://twitter.com/hashtag/SalariesPublicUniversities?src=hash&amp;ref_src=twsrc%5Etfw">#SalariesPublicUniversities</a>:<a href="https://twitter.com/GovUganda?ref_src=twsrc%5Etfw">@GovUganda</a>
            is committed to a phased approach of enhancing and harmonizing
            salaries for staff in public universities and other degree
            awarding institutions. Thus, an additional Shs. 70.2 billion
            provided in the FY2024/2025 budget.…
            <a href="https://t.co/kFSZoQBbmj">pic.twitter.com/kFSZoQBbmj</a>
          </p>
          &mdash; Dennis Mugimba (@DeKaMug)
          <a href="https://twitter.com/DeKaMug/status/1811681497004249586?ref_src=twsrc%5Etfw">July 12, 2024</a>
        </blockquote>

        <blockquote class="twitter-tweet">
          <p lang="en" dir="ltr">
            <a href="https://twitter.com/hashtag/StrategicComms?src=hash&amp;ref_src=twsrc%5Etfw">#StrategicComms</a>
            Meeting
            <a href="https://twitter.com/KagutaMuseveni?ref_src=twsrc%5Etfw">@KagutaMuseveni</a>
            in Kyankwanzi today.
            <a href="https://twitter.com/GovUganda?ref_src=twsrc%5Etfw">@GovUganda</a>
            <a href="https://twitter.com/UgandaMediaCent?ref_src=twsrc%5Etfw">@UgandaMediaCent</a>
            <a href="https://twitter.com/GCICUganda?ref_src=twsrc%5Etfw">@GCICUganda</a>
            <a href="https://twitter.com/MKarekye?ref_src=twsrc%5Etfw">@MKarekye</a>
            <a href="https://twitter.com/Charlie_Kemi?ref_src=twsrc%5Etfw">@Charlie_Kemi</a>
            <a href="https://t.co/inacdJg5iH">pic.twitter.com/inacdJg5iH</a>
          </p>
          &mdash; Ofwono Opondo P&#39;Odel (@OfwonoOpondo)
          <a href="https://twitter.com/OfwonoOpondo/status/1811427037602586794?ref_src=twsrc%5Etfw">July 11, 2024</a>
        </blockquote>
      </div> -->
      <a class="twitter-timeline" data-height="600" href="https://twitter.com/UgandaMediaCent?ref_src=twsrc%5Etfw">Tweets by UgandaMediaCent</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

  </section>
  <?php include('./pages/newsletter.php') ?>
</main>
<?php include('./footer.php'); ?>