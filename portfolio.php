<?php include 'header.php';?>

    <!-- portfolio -->
    <!-- Hero Section -->
    <section class="service-ready-start section-padding-80px">
        <div class="container text-center">
            <h1 class="display-4 fw-bold pt-5 mb-3 hero-header-text">Our Portfolio</h1>
            <p class="fs-3 text-white text-opacity-80 mx-auto mb-md-5 mb-3 hero-para-text">
                Explore our successful projects and see how we've helped businesses achieve their goals
            </p>
            <button class="btn btn-hero btn-lg py-3 hero-header-pricing hero-header-pricing-text" onclick="window.location.href='get-quote.htm'">
                Start Your Project
            </button>
        </div>
    </section>

    <!-- Filter Section -->
    <!-- <section class="py-4 protfolio-list-background">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-3 pt-md-3 pt-1 pb-md-3 pb-1">
                <button class="btn btn-outline-secondary filter-btn active">All</button>
                <button class="btn btn-outline-secondary filter-btn">E-commerce</button>
                <button class="btn btn-outline-secondary filter-btn">Healthcare</button>
                <button class="btn btn-outline-secondary filter-btn">Education</button>
                <button class="btn btn-outline-secondary filter-btn">Startup</button>
                <button class="btn btn-outline-secondary filter-btn">Corporate</button>
            </div>
        </div>
    </section> -->

    <!-- Projects Grid -->
    <section class="protfolio-list-background section-padding-80px">
         <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-3 pb-md-5 pb-3">
                <button class="btn btn-outline-secondary filter-btn active">All</button>
                <button class="btn btn-outline-secondary filter-btn">E-commerce</button>
                <button class="btn btn-outline-secondary filter-btn">Healthcare</button>
                <button class="btn btn-outline-secondary filter-btn">Education</button>
                <button class="btn btn-outline-secondary filter-btn">Startup</button>
                <button class="btn btn-outline-secondary filter-btn">Corporate</button>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">TechStore E-commerce Platform</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    E-commerce
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Modern e-commerce platform with advanced filtering, payment integration, and inventory
                                management.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">React</span>
                                    <span class="badge-tech">Node.js</span>
                                    <span class="badge-tech">MongoDB</span>
                                    <span class="badge-tech">Stripe</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Payment Gateway</span>
                                    <span class="badge-feature">Inventory Management</span>
                                    <span class="badge-feature">Real-time Chat</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">300% increase in online sales</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">Healthcare Plus Medical Portal</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    Healthcare
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Patient management system with appointment booking, medical records, and telemedicine
                                features.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">React</span>
                                    <span class="badge-tech">Express</span>
                                    <span class="badge-tech">PostgreSQL</span>
                                    <span class="badge-tech">WebRTC</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Appointment Booking</span>
                                    <span class="badge-feature">Video Consultations</span>
                                    <span class="badge-feature">Medical Records</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">500+ patients registered in first month</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">EduLearn Online Platform</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    Education
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Complete learning management system with course creation, progress tracking, and
                                certificates.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">Next.js</span>
                                    <span class="badge-tech">Python</span>
                                    <span class="badge-tech">Django</span>
                                    <span class="badge-tech">AWS</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Course Management</span>
                                    <span class="badge-feature">Progress Tracking</span>
                                    <span class="badge-feature">Certificate Generation</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">10,000+ students enrolled</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">StartupLaunch Landing Page</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    Startup
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                High-converting landing page with lead capture forms and conversion optimization.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">React</span>
                                    <span class="badge-tech">Tailwind</span>
                                    <span class="badge-tech">EmailJS</span>
                                    <span class="badge-tech">Google Analytics</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Lead Capture</span>
                                    <span class="badge-feature">A/B Testing</span>
                                    <span class="badge-feature">Analytics Integration</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">85% conversion rate improvement</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">GlobalCorp Business Website</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    Corporate
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Professional corporate website with multi-language support and content management.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">WordPress</span>
                                    <span class="badge-tech">PHP</span>
                                    <span class="badge-tech">MySQL</span>
                                    <span class="badge-tech">i18n</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Multi-language</span>
                                    <span class="badge-feature">CMS</span>
                                    <span class="badge-feature">Contact Forms</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">200% increase in business inquiries</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100 border-0">
                        <div class="project-image">
                            <div class="project-overlay">
                                <h3 class="h3 fw-bold mb-2">FashionHub Online Store</h3>
                                <span
                                    class="badge bg-opacity-20 text-white border border-white border-opacity-30 rounded-pill">
                                    E-commerce
                                </span>
                            </div>
                            <button class="project-link btn btn-sm btn-light rounded-circle">
                                <i class="bi-box-arrow-up-right"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Fashion e-commerce with virtual try-on, size recommendations, and social integration.
                            </p>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Technologies:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-tech">React</span>
                                    <span class="badge-tech">Node.js</span>
                                    <span class="badge-tech">MongoDB</span>
                                    <span class="badge-tech">AR.js</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-semibold mb-2">Key Features:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge-feature">Virtual Try-on</span>
                                    <span class="badge-feature">Size Guide</span>
                                    <span class="badge-feature">Social Shopping</span>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <p class="small fw-semibold text-accent mb-1">Results:</p>
                                        <p class="small text-muted mb-0">400% increase in customer engagement</p>
                                    </div>
                                    <button class="btn btn-link p-0 text-decoration-none view-more-btn-portfolio text-dark">
                                        View Details <i class="bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-light-blue section-padding-80px">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3 hero-header-text">Project Success Metrics</h2>
            </div>

            <div class="row g-4" id="counter">
                <div class="col-6 col-md-3 text-center">
                    <div class="display-4 fw-bold text-portfolio-stat-1 mb-2 counter-value" data-count="4500">0+</div>
                    <p class="text-muted fw-medium">Projects Done</p>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="display-4 fw-bold text-portfolio-stat-2 mb-2 counter-value"  data-count="3000">0+</div>
                    <p class="text-muted fw-medium">Happy Clients</p>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="display-4 fw-bold text-portfolio-stat-3 mb-2 counter-value" data-count="17">0+</div>
                    <p class="text-muted fw-medium">Years Of Experience</p>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="display-4 fw-bold text-portfolio-stat-4 mb-2 counter-value" data-count="45">0+</div>
                    <p class="text-muted fw-medium">Dedicated Employees</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- filter functonal script -->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all filter buttons and project cards
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.col-md-6.col-lg-4');
            
            // Add click event listeners to each filter button
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get the filter value (text content of the button)
                    const filterValue = this.textContent.trim();
                    
                    // Show/hide projects based on filter
                    projectCards.forEach(card => {
                        // Get the category badge text (remove any extra whitespace)
                        const categoryBadge = card.querySelector('.badge.rounded-pill');
                        const category = categoryBadge ? categoryBadge.textContent.trim() : '';
                        
                        // Show all projects if "All" is selected
                        if (filterValue === 'All') {
                            card.style.display = 'block';
                        } 
                        // Show only projects that match the selected category
                        else if (category === filterValue) {
                            card.style.display = 'block';
                        } 
                        // Hide projects that don't match
                        else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
     </script>
    <!-- filter functonal script -->
    <!-- portfolio -->

   <?php include 'footer.php';?>