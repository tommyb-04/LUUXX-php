
<?php 
        $thisPage="Past and Completed Projects";
        $thisPageDescription="Browse our previous projects and see how your home and lifestyle can be improved with one of our premium installations. Contact us today with your requirements.";
        $thisPageKeywords="LUUXX, Projects, Our Work, Smart Homes, Audio Visual, Home Cinemas, Premium Homes, Luxury Lifestyle, Bespoke Home Cinemas, Custom Audio Visual Systems, Smart Technologies, UK";
        $additionalStyles="<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/carousel.css'>";
        $additionalScripts="<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/carousel.umd.js'></script>
        <script>
            const myCarousel = new Carousel(document.querySelector('#myCarousel'), {
                Dots: false
            });
        </script>";
        include 'header.php';
        include 'navigation.php';

        require_once 'php/database_connect.php';
                
        $project_query = "SELECT * FROM projects";
        mysqli_select_db($database_server, $database_name);
        $project_result = mysqli_query($database_server, $project_query);
        if(!result) die("Database access failed: " . mysqli_error($database_server));
    ?>
        
        <!-- Projects Sliding Header Section -->
        <div id="myCarousel" class="carousel project-carousel">
            <?php

                if ($project_result->num_rows > 0) {
                    
                    while($row = $project_result->fetch_assoc()) {
                        $date = date("Y", strtotime($row['project_date']));
                        echo '
                                <div class="carousel__slide project-carousel__slide" style="background-image: url(' . $row['project_image'] . ')">
                                    <div class="project-carousel__slide-overlay">
                                        <div class="project-carousel__slide-overlay-content">
                                            <h2>' . $row['project_name'] . '</h2>
                                            <a href="project.php?id=' . $row['id'] . '"><div class="project-carousel__slide-button">
                                                <p class="serif">View Project &nbsp; <i class="fas fa-chevron-right"></i></p>
                                            </div></a>
                                        </div>
                                    </div>
                                    <p class="right-hand-tag serif">' . $row['project_name'] . ' - ' . $date . '</p>
                                    <p class="left-hand-tag serif">' . $row['project_name'] . ' - ' . $date . '</p>
                                </div>
                            ';
                    }
                
            ?>
        </div>
        <!-- First Text Section -->
        <div class="projects-section">
            <div class="introduction-image image-planning" id="section-part-1">
                <button class="image-top-frame">
                    <span class="image-bottom-frame">
                        <p class="image-text serif">Initial project design</p>
                    </span>
                </button>
                <div class="image-hover-overlay"></div>
            </div>
            <div class="introduction-text" id="section-part-2">
                <div class="body-text">
                    <h3 class="small-caps-title">Our Best Installations</h3>
                    <h1 class="page-title">Past Projects</h1>
                    <hr class="title-divider">
                    <p>
                        <span class="subtitle">Variety of Solutions</span><br>
                        Take a look at all of our amazing solutions that we have provided for homes and families all around
                        the United Kingdom. All of our projects we take from concept to completion, starting off with initial
                        designs and eventually delivering a perfect space for our clients wonderful homes. We take great pride
                        in each and every one of our projects, whether it be from the smallest smart lighting installation to 
                        fitting a 10,000 sq. ft. mansion full of luxury smart home technology. The projects shown on our 
                        website provide a snapshot of what we offer, highlighting the variety of services that we offer.
                    </p>
                </div>
            </div>
            <div class="introduction-text" id="section-part-3">
                <p class="body-text">
                    <span class="subtitle">Planning</span><br>
                    There is a lot of planning and effort that goes into a LUUXX home installation and we feel that it is 
                    important to keep you, our clients, fully involved with the proccess along the way. We provide sketches 
                    and plans from the very start of the project, which enables you to visualise the latest addition to 
                    your home.
                </p>
            </div>
            <div class="introduction-image image-planning-2" id="section-part-4">
                <button class="image-top-frame">
                    <span class="image-bottom-frame">
                        <p class="image-text serif">Project Design</p>
                    </span>
                </button>
                <div class="image-hover-overlay"></div>
            </div>
            <div class="introduction-image image-keypad" id="section-part-5">
                <button class="image-top-frame">
                    <span class="image-bottom-frame">
                        <p class="image-text serif">System Installation Example</p>
                    </span>
                </button>
                <div class="image-hover-overlay"></div>
            </div>
            <div class="introduction-text" id="section-part-6">
                <p class="body-text">
                    <span class="subtitle">The Process</span><br>
                    With any installation, the process begins with a consultation where we get to know the needs of our client 
                    and the need of the property itself. Our experts are highly qualified and can efficiently match the perfect 
                    technology to meet your needs. Our experience comes from working with many manufacturers, meaning we will be 
                    100% honest about the correct fit for your home. We have no preference on the brands we use, it is a decision 
                    based solely on what will suit you better. This style of approach to installations means that every smart 
                    home system that we install is completely bespoke and is perfect for you, our client.
                </p>
            </div>
        </div>
        <div class="project-section-cards">
            <h3 class="small-caps-title">Take a Look at Our Work</h3>
            <h3>Our Projects</h3>
            <div class="cards-grid">
                <?php
                        $project_result->data_seek(0); 
                        while($row = $project_result->fetch_assoc()) {
                            echo '
                                <div class="project-card">
                                    <div class="project-card-header" style="background-image: url(' . $row['project_image'] . ')"></div>
                                    <h4 class="project-card-title">' . $row['project_name'] . '</h4>
                                    <p class="project-card-info">' . mb_strimwidth($row['project_writeup'], 0, 200, "...") . '</p>
                                    <a href="project.php?id=' . $row['id'] . '"><div class="project-card-button">
                                        <p class="serif">View Project</p>
                                    </div></a>
                                </div>
                                ';
                        }
                    } else {
                        echo '<span class="full-grid"><h3 class="empty-query-message">0 results</h3></span>';
                    }


                    require_once 'php/database_close.php';
                ?>
            </div>
        </div>

    <?php include 'footer.php' ?>