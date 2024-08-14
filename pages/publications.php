<?php
$page_name = "Public Downloads";
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
                <span class="ms-1 text-xl text-background font-medium tracking-tight md:ms-2">Public Downloads</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="container relative py-4">
    <div class="title mb-6">
      <h1 class="section-title">Public Downloads</h1>
    </div>
    <div class="wrapper mx-auto relative max-[425px]:gap-y-5 gap-4 mt-10 items-start flex flex-wrap justify-center sm:justify-start">
      <!-- <a class="group relative p-4 rounded-lg overflow-hidden bg-secondary/5 border border-[#2b579a] hover:bg-secondary/15 aspect-[3/2] min-[425px]:max-w-[350px] w-full sm:w-[calc(50%-16px)] md:w-[calc(33.33%-16px)] xl:w-[calc(25%-16px)] flex flex-col justify-between" download="Kampala Final Outcome Document.docx" href="../assets/files/word.docx">
        <div class="flex w-full justify-end px-5">
          <i class="fa fa-file-word text-5xl text-[#2b579a]"></i>
        </div>
        <div class="content flex flex-col items-start gap-2.5">
          <p class="line-clamp-2 max-h-[40px]">
            Kampala Final Outcome Document
          </p>

          <button class="unstyled-btn transition-all duration-300 text-[#2b579a] font-bold py-2.5 px-4 border border-[#2b579a] rounded-sm group-hover:bg-[#2b579a] group-hover:text-primary-foreground">
            Download
          </button>
        </div>
      </a> -->
      <?php
      include('../database/db_connection.php');

      // Fetch files from the database
      $sql = "SELECT * FROM downloads ORDER BY created_at DESC";
      $result = $conn->query($sql);

      // Check if any files were found
      if ($result->num_rows > 0) {
        // Output the files in the desired HTML format
        while ($row = $result->fetch_assoc()) {
          $fileInfo = htmlspecialchars($row['description']);
          $fileName = htmlspecialchars($row['file_path']);
          $filePath = htmlspecialchars($row['file_path']);

          echo "
        <a class=\"group relative p-4 rounded-lg overflow-hidden bg-secondary/5 border border-[#f40f02] hover:bg-secondary/15 aspect-[3/2] min-[425px]:max-w-[350px] w-full sm:w-[calc(50%-16px)] md:w-[calc(33.33%-16px)] xl:w-[calc(25%-16px)] flex flex-col justify-between\" download=\"$fileName\" href=\"$filePath\">
            <div class=\"flex w-full justify-end px-5\">
                <i class=\"fa fa-file text-5xl text-[#f40f02]\"></i>
            </div>
            <div class=\"content flex flex-col items-start gap-2.5\">
                <p class=\"line-clamp-2 max-h-[40px]\">
                    $fileInfo
                </p>
                <button class=\"unstyled-btn transition-all duration-300 text-[#f40f02] font-bold py-2.5 px-4 border border-[#f40f02] rounded-sm group-hover:bg-[#f40f02] group-hover:text-primary-foreground\">
                    Download
                </button>
            </div>
        </a>";
        }
      } else {
        echo "No files found.";
      }

      $conn->close();
      ?>


    </div>

    <div class="pagination flex justify-center items-center mt-16">
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

<?php include('footer.php'); ?>