<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h4 class="text-primary"><i class="fa fa-hashtag me-2"></i>Career Veda</h4>
                </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                <?php  if (isset($_SESSION['user'])) : ?>
                    <h6 class="mb-0"><?php echo $_SESSION['user']['FirstName']; ?></h6>
                    <span>(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="contact.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Contact</a>
                <a href="user_detials.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>User Details</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="../signin.php" class="dropdown-item">Sign In</a>
                        <a href="../signup.php" class="dropdown-item">Sign Up</a>
                        <a href="create_user.php" class="dropdown-item">Add Users</a>
                        <a href="404.php" class="dropdown-item">404 Error</a>
                        <a href="blank.php" class="dropdown-item">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['user']['FirstName']; ?></span>
                    </a>      
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="create_user.php" class="dropdown-item">Add user</a>
                        <a href="index.php?logout='1'" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    <?php endif ?>
