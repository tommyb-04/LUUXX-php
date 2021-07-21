
<?php include 'php/admin-header.php' ?>

    </head>
    <body>

        <?php include 'php/admin-navigation.php' ?>

        <div class="admin-breadcrumb">Blog Management Page</div>

        <div class="admin-side-nav">
            <p><i class="fas fa-chart-pie admin-side-icons"></i>&nbsp;&nbsp; Dashboard</p>
            <p><i class="fas fa-folder-open admin-side-icons"></i>&nbsp;&nbsp; All Posts</p>
            <p><i class="fas fa-tasks admin-side-icons"></i>&nbsp;&nbsp; Manage Posts</p>
            <p><i class="fas fa-plus-circle admin-side-icons"></i>&nbsp;&nbsp; Add Posts</p>
            <p><i class="fas fa-edit admin-side-icons"></i>&nbsp;&nbsp; Edit Posts</p>
            <p><i class="fas fa-minus-circle admin-side-icons"></i>&nbsp;&nbsp; Delete Posts</p>
            <hr class="side-nav-breaker">
            <p><i class="fas fa-user-circle admin-side-icons"></i>&nbsp;&nbsp; Admin Profile</p>
            <p><i class="fas fa-power-off admin-side-icons"></i>&nbsp;&nbsp; Logout</p>
        </div>

        <div class="dashboard-container">
            <div class="stats-section-container">
                <form action="blog-management.php" method="post">
                    <input type="text" name="searchbar" class="search-bar" placeholder="Search...">
                </form>
                <div class="stats-cards">
                    <div class="stats-card">
                        <div class="stats-card-text">
                            <h2>Number of total like on all posts</h2>
                        </div>
                    </div>
                    <div class="stats-card">
                        <div class="stats-card-text">
                            <h2>Number of total comments on all posts</h2>
                        </div>
                    </div>
                    <div class="stats-card">
                        <div class="stats-card-text">
                            <h2>Number of total posts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'php/footer.php' ?>
        
        