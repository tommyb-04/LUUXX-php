
    <?php 
        $thisPage="Gallery of Past Completed Projects";
        $thisPageDescription="Providers of high-end home and lifestyle technologies throughout the UK, bringing new levels of luxury to all our clients. Contact us today for more information about LUUXX.";
        $thisPageKeywords="LUUXX, Gallery of Projects, Our Work, Smart Homes, Audio Visual, Home Cinemas, Premium Homes, Luxury Lifestyle, Bespoke Home Cinemas, Custom Audio Visual Systems, Smart Technologies, UK";
        $bio_content=$_GET['role'];
        $additionalStyles="<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css'>";
        $additionalScripts="<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js'></script>";
        include 'header.php';
        include 'navigation.php';
        require_once 'php/database_connect.php';
    ?>
        
        <!-- Image Grid Section -->
        <div class="gallery-section">
            <div class="gallery-text">
                <h1>Completed Projects</h1>
                <p class="subtitle">A picture really is worth more than a thousand words.</p>
                <p>
                    Our gallery shows a vast range of our work on smart homes, audio visual systems and home cinemas accross the United Kindgom.
                    These are some fabulous examples of our use of premium home technologies, from a variety of our brilliant manufacturers.
                </p>
                <p>We show individual elements of our projects within the gallery, if you want to see more of our whole projects, see our <a href="projects.php" class="gallery-paragraph-link"><em>projects</em></a> page.
                </p>
            </div>
            <div class="gallery-grid">

            <?php

                $query = "SELECT id, title, path, description FROM images ORDER BY uploaded_date LIMIT 20";
                mysqli_select_db($database_server, $database_name);
                $result = mysqli_query($database_server, $query);
                if(!result) die("Database access failed: " . mysqli_error($database_server));

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '
                            
                                <figure class="gallery-item">
                                    <a href="' . $row['path'] . '" data-fancybox="gallery" data-caption="' . $row['title'] . '" >
                                        <img src="' . $row['path'] . '" alt="' . $row['description'] . '" class="gallery-image">
                                    </a> 
                                </figure> 
                            ';
                    }
                } else {
                    echo '<span class="full-grid"><h2 class="empty-query-message">We have no projects to show at the moment. It won&rsquo;t be long before we have some amazing projects to share
                    with you, so sit tight and check back again soon.</h2><br>
                    <h3 class="empty-query-message">While we&rsquo;re sorting this problem, why don&rsquo;t you check out our <a href="projects/.php">projects</a> for more of an idea of the work we do.</h3></span>';
                }

                require_once 'php/database_close.php';
            ?>

            </div>
        </div>
    <?php include 'footer.php' ?>