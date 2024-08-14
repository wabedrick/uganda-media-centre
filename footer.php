<?php
include("./database/db_connection.php");
date_default_timezone_set('Africa/Nairobi');
$current_datetime = date('Y-m-d H:i:s');
$sql = "SELECT * FROM upcoming_events WHERE event_date > '$current_datetime'";
$result = $conn->query($sql);
?>


<footer class="bg-secondary pb-6">
    <div class="container pt-12 mx-auto max-w-screen-lg 2xl:max-w-screen-xl">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="relative text-background">
                <p class="mb-6 font-semibold uppercase !text-xl tracking-wide">
                    Contact Info
                </p>

                <ul class="text-background/90 2xl:px-2">
                    <li class="mb-3">Uganda Media Centre</li>
                    <li class="mb-3">Plot 36, Nile Avenue, Kampala</li>
                    <li class="mb-3">P.O.Box 2665 kampala,Uganda</li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a class="transition-all duration-300 hover:text-link pl-4" href="mailto:info@mediacentre.go.ug">Email: info@mediacentre.go.ug
                        </a>
                    </li>

                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a class="transition-all duration-300 hover:text-link pl-4" href="tel:+25631226152567">Phone 1: +25631226152567
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a class="transition-all duration-300 hover:text-link pl-4" href="tel:+2564142371413">Phone 2: +2564142371413
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative text-background">
                <p class="mb-6 font-semibold uppercase !text-xl tracking-wide">
                    Important Links
                </p>

                <ul class="text-background/90 2xl:px-2">
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.mak.ac.ug/">Makerere University
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.bou.co.ug/">Bank Of Uganda
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.immigration.co.ug/">Department Of Immigration
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.uia.co.ug/">Uganda Insurers Association
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://ura.go.ug/en/">Uganda Revenue Authority
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.ucc.co.ug/">Uganda Communications Commission
                        </a>
                    </li>
                    <li class="mb-3 relative group">
                        <i class="fa fa-chevron-right group-hover:text-link absolute left-0 top-1/2 -translate-y-1/2"></i>
                        <a target="_blank" rel="noopener noreferrer" class="transition-all duration-300 hover:text-link pl-4" href="https://www.statehouse.go.ug/">State House Uganda
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative text-background">
                <p class="mb-6 font-semibold uppercase !text-xl tracking-wide">
                    Upcoming Events
                </p>

                <div class="relative space-y-4">
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <?php
                            $event_date = new DateTime($row['event_date']);
                            $day = $event_date->format('d');
                            $monthName = $event_date->format('M');
                            ?>
                            <a href="/" class="flex items-start gap-2 group p-1 rounded border border-background hover:border-primary">
                                <div class="aspect-square w-14 bg-primary p-1 flex flex-col items-center justify-center">
                                    <span class="font-bold text-2xl"><?php echo $day; ?></span>
                                    <span class="font-semibold uppercase"><?php echo $monthName; ?></span>
                                </div>
                                <p class="text-sm flex-1 line-clamp-3 group-hover:text-link transition-all">
                                    <?php echo htmlspecialchars($row['event_name'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </a>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>No past events found.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <hr class="border-border sm:mx-auto my-5" />
    <span class="block text-sm text-background sm:text-center px-4">© <span id="current-year"></span>
        <a href="/" class="underline-offset-4 underline hover:text-link font-semibold">Uganda Media Center</a>. All Rights Reserved.</span>
</footer>

<script src="./assets/js/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- to your js part -->
<script src="script.js"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }

    // Function to remove Google Translate branding
    function removeGoogleTranslateBranding() {
        // Try to hide Google branding
        var brandingElements = document.querySelectorAll('.goog-logo-link, .goog-te-gadget > span');
        brandingElements.forEach(function(element) {
            element.style.display = 'none';
        });
    }

    // Remove branding after translation element initialization
    document.addEventListener('DOMContentLoaded', function() {
        // Delay to ensure the widget is fully loaded
        setTimeout(removeGoogleTranslateBranding, 1000);
    });
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

</html>