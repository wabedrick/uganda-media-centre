<?php
$page_name = "News Articles";
include("header.php");

include("../database/db_connection.php");
// Fetching the press releases
$sql_one = "SELECT * FROM articles ORDER BY created_at DESC";
$result_one = mysqli_query($conn, $sql_one);
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
                <span id="articles-page-title" class="ms-1 text-xl text-background font-medium tracking-tight md:ms-2"></span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="articles-wrapper container relative py-10">

    <div class="articles" style="display: flex; flex-wrap: wrap; gap: 1rem;">
      <?php
      if ($result_one->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result_one)) {
          echo '
        <div class="article-wrapper" style="flex: 1 1 calc(25% - 1rem); box-sizing: border-box;">
        <a href="./single-article.php?id=' . urlencode($row['id']) . '">
          <article class="article" style="height: 100%; min-height: 480px; max-height: 480px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; display: flex; flex-direction: column;">
            <div class="img-wrapper" style="flex: 0 0 auto; width: 100%; height: 200px; overflow: hidden;">
              <img src="' . htmlspecialchars($row['image_path']) . '" alt="img" style="width: 100%; height: 100%; object-fit: cover;" />
            </div>
            <div class="bio" style="flex: 1 1 auto; display: flex; flex-direction: column; padding: 0.2rem; justify-content: space-between;">
              <div style="flex-grow: 1;">
                <span class="badge" style="display: block; padding: 0.8rem 1rem; font-weight: bold; color: #555; margin-bottom: 0.5rem;">' . htmlspecialchars($row['title']) . '</span>
                <span class="date" style="display: block; color: #888; margin-bottom: 0.5rem;">' . date('d F Y', strtotime($row['date_published'])) . '</span>
                <h4 class="title" style="font-size: 1.0rem; margin-bottom: 0.5rem;">' . htmlspecialchars($row['sub_title']) . '</h4>
                <p style="color: #666; max-height: 80px; overflow: hidden; text-overflow: ellipsis; margin-bottom: 0.5rem; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">' . htmlspecialchars($row['article_content']) . '</p>
              </div>
              <button style="padding: 0.5rem 1rem; background-color: #007bff; color: white; border: none; border-radius: 1.8rem; cursor: pointer; align-self: flex-start; margin-top: 0.5rem;">Read More</button>
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


    <div class="pagination flex justify-center items-center mt-6">
      <a href="#" class="cursor-not-allowed items-center px-3.5 py-2 mx-1 text-foreground transition-all duration-300 transform bg-background rounded-md border border-border/50 hover:border-transparent flex hover:bg-primary hover:text-primary-foreground">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
        </svg>
      </a>
      <a href="#" class="items-center px-3.5 py-2 mx-1 transition-all duration-300 transform rounded-md flex bg-primary text-primary-foreground">
        1
      </a>
      <a href="#" class="items-center px-3.5 py-2 mx-1 text-foreground transition-all duration-300 transform bg-background rounded-md border border-border/50 hover:border-transparent flex hover:bg-primary hover:text-primary-foreground">
        2
      </a>
      <a href="#" class="items-center px-3.5 py-2 mx-1 text-foreground transition-all duration-300 transform bg-background rounded-md border border-border/50 hover:border-transparent flex hover:bg-primary hover:text-primary-foreground">
        &middot;&middot;
      </a>
      <a href="#" class="items-center px-3.5 py-2 mx-1 text-foreground transition-all duration-300 transform bg-background rounded-md border border-border/50 hover:border-transparent flex hover:bg-primary hover:text-primary-foreground">
        7
      </a>
      <a href="#" class="cursor-not-allowed items-center px-3.5 py-2 mx-1 text-foreground transition-all duration-300 transform bg-background rounded-md border border-border/50 hover:border-transparent flex hover:bg-primary hover:text-primary-foreground">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </section>

  <?php include('./newsletter.php') ?>

</main>

<script src="../assets/js/swiper-bundle.min.js"></script>
<script src="../assets/js/main.js"></script> -->
<script>
  let pageTitleElement = document.querySelector("#articles-page-title");

  if (
    !categorySearch ||
    !!categorySearch === false ||
    categorySearch === null
  ) {
    pageTitleElement.textContent = "Media";
  } else {
    let pageTitle = categorySearch.replace(
      /(^\w{1})|(\s+\w{1})/g,
      (letter) => letter.toUpperCase()
    );

    pageTitleElement.textContent = pageTitle;
  }
</script>
<?php include('footer.php'); ?>