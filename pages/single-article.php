<?php
$page_name = "Single Article";
include('header.php');
include('../database/db_connection.php');
// Check if the ID is set
if (isset($_GET['id'])) {
  $id = intval($_GET['id']); // Ensure the ID is an integer

  // Prepare the query to fetch the article
  $query = "SELECT * FROM articles WHERE id = $id";
  $result = mysqli_query($conn, $query);
  $article = mysqli_fetch_assoc($result);
}
?>
<main class="relative">
  <section
    class="single-article-wrapper container relative py-10 max-w-screen-xl mx-auto">

    <div class="mb-3 md:mb-0 w-full mx-auto relative" style="width: 100%; height: 500px; max-width: 1228px; margin: 0 auto; overflow: hidden; background-color: rgba(0, 0, 0, 0.05); border-radius: 5px;">
      <img
        style="width: 100%; height: 100%; object-fit: cover; object-position: center; border-radius: 5px;"
        src="<?php echo htmlspecialchars($article['image_path']); ?>"
        alt="Article Image" />
    </div>

    <div class="flex flex-col items-start lg:flex-row lg:space-x-8">
      <div
        class="py-4 md:px-4 mt-12 text-lg leading-relaxed w-full lg:w-3/4">
        <h1
          class="font-body max-[576px]:text-center text-h3-sm md:text-h3 font-semibold mb-2">
          <?php echo htmlspecialchars($article['title']); ?>
        </h1>
        <p class="py-4" style="font-size: 2rem; font-weight:500;">
          <?php echo htmlspecialchars($article['sub_title']); ?>
        </p>

        <p class="pb-6">
          <?php echo htmlspecialchars($article['article_content']); ?>
        </p>

        <p style="color: blue; fontfamily:serif;"><?php echo htmlspecialchars($article['date_published']); ?></p>

        <div class="py-8 md:px-4">
          <div class="flex justify-between items-center mb-6">
            <p class="text-lg lg:text-2xl font-bold" style="font-size: 2rem; font-weight:500;">Comments</p>
          </div>
          <article class=" p-6 text-base border-t border-border">
            <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                <p
                  class="inline-flex items-center mr-3 text-sm font-semibold">
                  <img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="https://randomuser.me/api/portraits/women/2.jpg"
                    alt="Helene Engels" />Helene Engels
                </p>
                <p class="text-sm text-muted-foreground">
                  <time
                    pubdate
                    datetime="2022-06-23"
                    title="June 23rd, 2022">Jun. 23, 2022</time>
                </p>
              </div>
            </footer>
            <p class="text-muted-foreground">
              Thanks for sharing this. I do came from the Backend
              development and explored some of the tools to design my Side
              Projects.
            </p>
            <div class="flex items-center mt-4 space-x-4">
              <button
                type="button"
                class="unstyled-btn flex items-center text-sm hover:underline font-medium">
                <svg
                  class="mr-1.5 w-3.5 h-3.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 18">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                </svg>
                Reply
              </button>
            </div>
          </article>

          <article class="p-6 text-base border-t border-border">
            <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                <p
                  class="inline-flex items-center mr-3 text-sm font-semibold">
                  <img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="https://randomuser.me/api/portraits/women/2.jpg"
                    alt="Helene Engels" />Helene Engels
                </p>
                <p class="text-sm text-muted-foreground">
                  <time
                    pubdate
                    datetime="2022-06-23"
                    title="June 23rd, 2022">Jun. 23, 2022</time>
                </p>
              </div>
            </footer>
            <p class="text-muted-foreground">
              Thanks for sharing this. I do came from the Backend
              development and explored some of the tools to design my Side
              Projects.
            </p>
            <div class="flex items-center mt-4 space-x-4">
              <button
                type="button"
                class="unstyled-btn flex items-center text-sm hover:underline font-medium">
                <svg
                  class="mr-1.5 w-3.5 h-3.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 18">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                </svg>
                Reply
              </button>
            </div>
          </article>

          <article class="p-6 text-base border-t border-border">
            <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                <p
                  class="inline-flex items-center mr-3 text-sm font-semibold">
                  <img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="https://randomuser.me/api/portraits/women/2.jpg"
                    alt="Helene Engels" />Helene Engels
                </p>
                <p class="text-sm text-muted-foreground">
                  <time
                    pubdate
                    datetime="2022-06-23"
                    title="June 23rd, 2022">Jun. 23, 2022</time>
                </p>
              </div>
            </footer>
            <p class="text-muted-foreground">
              Thanks for sharing this. I do came from the Backend
              development and explored some of the tools to design my Side
              Projects.
            </p>
            <div class="flex items-center mt-4 space-x-4">
              <button
                type="button"
                class="unstyled-btn flex items-center text-sm hover:underline font-medium">
                <svg
                  class="mr-1.5 w-3.5 h-3.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 18">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                </svg>
                Reply
              </button>
            </div>
          </article>

          <div
            class="relative space-y-8 mt-10 lg:px-4 border-t-2 border-foreground">
            <div class="title pt-5">
              <h1 class="section-title !pb-2 !text-h4">Leave A Review</h1>
            </div>
            <form class="grid gap-4" method="POST" enctype="multipart/form-data" action="single-article.php">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="fullname" class="sr-only">Full Name</label>
                  <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200"
                    placeholder="Full Name" />
                </div>

                <div>
                  <label for="email" class="sr-only">Email Address</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="py-3 px-4 block w-full border border-border rounded-lg text-sm focus:border-primary focus:ring-primary outline-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200"
                    placeholder="Email Address" />
                </div>
              </div>
              <div>
                <label for="comment" class="sr-only">Your comment</label>
                <textarea
                  id="comment"
                  name="comment"
                  rows="4"
                  class="py-3 px-4 block w-full border outline-primary border-border rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none transition-all duration-200"
                  placeholder="Write a comment..."
                  required></textarea>
              </div>
              <div class="mt-4">
                <button type="submit" class="">Post comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div
        class="relative w-full lg:w-1/4 mt-12 max-w-screen-sm max-[1024px]:mx-auto space-y-12 lg:sticky lg:top-[-195px]">

        <aside class="social-share relative space-y-4">
          <div class="title">
            <h4 class="section-title !text-xl !pb-2">Social Share</h4>
          </div>

          <div class="social-share__icons flex flex-wrap">
            <div class="social-link p-1.5 w-1/2 grow social-facebook">
              <a
                href="#"
                class="flex items-center rounded-md transition-all hover:scale-105 bg-[#3b5998]">
                <i
                  class="fab fa-facebook-f w-10 text-center text-background"></i>
                <span class="p-2.5 !pl-0 text-sm text-background">Facebook</span>
              </a>
            </div>
            <div class="social-link p-1.5 w-1/2 grow social-pinterest">
              <a
                href="#"
                class="flex items-center rounded-md transition-all hover:scale-105 bg-[#bd081c]">
                <i
                  class="fab fa-pinterest w-10 text-center text-background"></i>
                <span class="p-2.5 !pl-0 text-sm text-background">Pinterest</span>
              </a>
            </div>
            <div class="social-link p-1.5 w-1/2 grow social-whatsapp">
              <a
                href="#"
                class="flex items-center rounded-md transition-all hover:scale-105 bg-[#25d366]">
                <i
                  class="fab fa-whatsapp w-10 text-center text-background"></i>
                <span class="p-2.5 !pl-0 text-sm text-background">WhatsApp</span>
              </a>
            </div>
            <div class="social-link p-1.5 w-1/2 grow social-twitter">
              <a
                href="#"
                class="flex items-center rounded-md transition-all hover:scale-105 bg-[#1da1f2]">
                <i
                  class="fab fa-twitter w-10 text-center text-background"></i>
                <span class="p-2.5 !pl-0 text-sm text-background">Twitter</span>
              </a>
            </div>
          </div>
        </aside>

        <aside class="space-y-4">
          <div class="title">
            <h4 class="section-title !text-xl !pb-2">Get A Visa</h4>
          </div>
          <div class="flex justify-center">
            <a href="https://visas.immigration.go.ug/" target="_blank">
              <img
                alt="advertisement img"
                class="w-full h-auto rounded"
                height="250"
                width="300"
                src="https://www.mediacentre.go.ug/sites/default/files/evisa.gif.pagespeed.ce.jPaxa4PBGc.gif" />
            </a>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <?php include('./newsletter.php') ?>
</main>
<?php include('./footer.php') ?>

<?php
include("../database/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $conn->real_escape_string($_POST['fullname']);
  $email = $conn->real_escape_string($_POST['email']);
  $comment = $conn->real_escape_string($_POST['comment']);
  // $article_id = $conn->real_escape_string($_POST['id']);

  // echo $article_id;
  // exit;

  // Check if the comment is already there
  $checksql = "SELECT * FROM article_comment WHERE fullname='$fullname' AND comment='$comment'";
  $checkResult = mysqli_query($conn, $checksql);
  if ($checkResult->num_rows > 0) {
    echo "The comment already exists";
  } else {
    $sql = "INSERT INTO article_comment (fullname, email, comment, article_id) 
        VALUES('$fullname', '$email', '$comment', '$id')";

    $result = mysqli_query($conn, $sql);

    if ($result === TRUE) {
      echo "Article successifully Added";
    } else {
      echo "Operation failed, something went wrong";
    }
  }
}

?>