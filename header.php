<?php
include_once 'seo.php';

// Detect page name (assumes .php extension)
$page = basename($_SERVER['PHP_SELF'], ".php");
$seo = get_seo_data($page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO Meta Tags -->
  <title><?php echo htmlspecialchars($seo['title']); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($seo['description']); ?>" />
  <meta name="keywords" content="<?php echo htmlspecialchars($seo['description']); ?>" />
  <meta name="robots" content="index, follow" />
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>" />


  <!-- Google Site Verification -->
  <meta name="google-site-verification" content="ezW3wl9vsk3Cmp87SiBcXZjzw29ejfE0VwRvQ25uQ-M" />

  <!-- Open Graph (OG) for better social sharing -->
  <meta property="og:title" content="<?php echo htmlspecialchars($seo['title']); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($seo['description']); ?>" />
  <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://websitedesigningmumbai.in/images/og-image.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:title" content="<?php echo htmlspecialchars($seo['title']); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($seo['description']); ?>" />
  <meta name="twitter:image" content="https://websitedesigningmumbai.in/images/og-image.jpg" /> 


   <link rel="shortcut icon" href="img/faviconn.png">
  <!-- Bootstrap 5 CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160283858-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-160283858-1');
  </script>
</head>


<style>
    .header_logo {
        width:230px;
    }
    .scrolled .text-white {
    color: #000 !important;
    
}
/* Hide the scrolled logo by default */
.scrolled-logo {
    display: none;
}

/* When the parent has .scrolled, hide default and show scrolled logo */
.scrolled .default-logo {
    display: none;
}
.scrolled .scrolled-logo {
    display: inline-block;
}
</style>
<body>

   
    <header class="main-header fixed-top py-0 z-3" id="mainHeader">
        <!-- Top Bar - Contact Info -->
        <div class="d-none d-md-block border-bottom border-light py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-4 text-muted small">
                        <div class="d-flex align-items-center gap-2 text-white">
                            <i class="bi bi-telephone"></i>
                            <span>+91 98195 55545</span>
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

                      

                       <a href="/">
                            <img src="img/websie_designing_logo_white.webp" alt="Logo" class="me-2 rounded object-fit-cover header_logo default-logo" />
                            <img src="img/websie_designing_logo.webp" alt="Logo" class="me-2 rounded object-fit-cover header_logo scrolled-logo" />
                        </a>

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
                            <a class="nav-link position-relative px-2 text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="services.htm">Services</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="portfolio.htm">Portfolio</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="about.htm">About</a>
                        </li>
                         <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="clients.htm">Clients</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link position-relative px-2 text-white" href="contact.htm">Contact</a>
                        </li>
                    </ul>
                    <button 
                        class="btn btn-warning fw-medium ms-lg-4 d-none d-md-inline-block" 
                        onclick="window.location.href='get-quote.htm'"
                    >
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
                        <a class="nav-link py-2" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="services.htm">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="portfolio.htm">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="about.htm">About</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link py-2" href="clients.htm">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="contact.htm">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-warning w-100 mt-2 fw-medium" onclick="window.location.href='get-quote.htm'">
                    Get Quote
                </button>
            </div>
        </div>
    </header>