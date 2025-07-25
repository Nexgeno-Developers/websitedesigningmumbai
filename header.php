<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom css  -->
    <link rel="stylesheet" href="css/style.css">
    <title>WebDesign Mumbai</title>
</head>

<body>

    <!-- Background Gradient -->
    <div class="hero-gradient"></div>

    <!-- Background Image -->
    <div class="hero-bg-image" style="background-image: url('img/hero-image.jpg');"></div>
    <!-- Bottom Gradient Fade -->
    <div class="bottom-gradient"></div>
    <header class="main-header fixed-top py-0 z-3" id="mainHeader">
        <!-- Top Bar - Contact Info -->
        <div class="d-none d-md-block border-bottom border-light py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-4 text-muted small">
                        <div class="d-flex align-items-center gap-2 text-white">
                            <i class="bi bi-telephone"></i>
                            <span>+91 98765 43210</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 text-white">
                            <i class="bi bi-envelope"></i>
                            <span>hello@websitedesignmumbai.com</span>
                        </div>
                    </div>
                    <div class=" small text-white">
                        Mumbai's Leading Web Design Agency
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="container">
            <nav class="navbar navbar-expand-lg py-3 py-md-2">
                <!-- Logo -->
                <div class="d-flex align-items-center">
                    <div class="me-2 rounded d-flex align-items-center justify-content-center">
                        <img src="img/websie_designing_logo.png" alt="Logo" style=" height: 30px;"
                            class="me-2 rounded object-fit-cover" />
                    </div>
                    <!-- <div>
                        <div class="fw-bold fs-5 text-white">WebDesign</div>
                        <div class="small" style="color: var(--accent);">Mumbai</div>
                    </div> -->
                </div>

                <!-- Mobile Menu Button -->
                <button class="navbar-toggler border-0 shadow-none" type="button" id="mobileMenuButton"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list fs-4" id="menuIcon"></i>
                </button>

                <!-- Desktop Navigation -->
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2 text-white">
                            <a class="nav-link position-relative px-2 text-white" href="#home">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="#services">Services</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="#about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <button class="btn btn-warning fw-medium ms-lg-4 d-none d-md-inline-block">
                        Get Quote
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu d-lg-none" id="mobileMenu">
            <div class="container py-3">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#contact">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-warning w-100 mt-2 fw-medium">
                    Get Quote
                </button>
            </div>
        </div>
    </header>