<?php include 'header.php';?>

    <!-- contact us  -->
    <!-- Hero Section -->
    <section class="service-ready-start section-padding-80px">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4 pt-md-5">Get In Touch</h1>
            <p class="fs-3 text-white text-opacity-80 mx-auto mb-0">
                Ready to start your project? Let's discuss how we can help bring your vision to life.
            </p>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="services-section section-padding-80px">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-8 ">
                    <div class="card card-hover border-0 shadow border-radius-75rem">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="text-center display-5 fw-bold mb-4">Start Your Project Today</h2>
                            <p class="text-center text-muted mb-5">
                                Fill out the form below and we'll get back to you within 24 hours with a detailed
                                proposal.
                            </p>


                            <form action="https://usebasin.com/f/5a33516b4f98" method="POST" enctype="multipart/form-data" id="form">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" name="name" required placeholder="Your full name" />
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" name="email" required placeholder="your@email.com" />
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" name="phone" required placeholder="+91 98765 43210" />
                            </div>
                            <div class="col-md-6">
                                <label for="companyname" class="form-label">Company Name *</label>
                                <input type="text" class="form-control" name="companyname" placeholder="Your company name" />
                            </div>

                             <div class="col-12">
                                    <label for="project" class="form-label">Project Type *</label>
                                    <select class="form-select" name="project" required>
                                        <option value="Select project type">Select project type</option>
                                        <option value="Static Website">Static Website</option>
                                        <option vlaue="E-commerce Store">E-commerce Store</option>
                                        <option value="Web Application">Web Application</option>
                                        <option value="WordPress Site">WordPress Site</option>
                                        <option value="Landing Page">Landing Page</option>
                                        <option value="Mobile App">Mobile App</option>
                                        <option value="ustom Soluti">Custom Solution</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="budgetrange" class="form-label">Budget Range</label>
                                    <select class="form-select" name="budgetrange" required>
                                        <option value="Select budget range">Select budget range</option>
                                        <option value="Under ₹25,000">Under ₹25,000</option>
                                        <option value="₹25,000 - ₹50,000">₹25,000 - ₹50,000</option>
                                        <option value="₹50,000 - ₹1,00,000">₹50,000 - ₹1,00,000</option>
                                        <option value="₹1,00,000 - ₹2,50,000">₹1,00,000 - ₹2,50,000</option>
                                        <option value="₹2,50,000+">₹2,50,000+</option>
                                        <option value="Let's Discuss">Let's Discuss</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="selecttimeline" class="form-label">Timeline</label>
                                    <select class="form-select" name="selecttimeline" required>
                                        <option value="Select timeline">Select timeline</option>
                                        <option value="ASAP (Rush)">ASAP (Rush)</option>
                                        <option value="1-2 weeks">1-2 weeks</option>
                                        <option value="2-4 weeks">2-4 weeks</option>
                                        <option value="1-2 months">1-2 months</option>
                                        <option value="2-3 months">2-3 months</option>
                                        <option value="Flexible">Flexible</option>
                                    </select>
                                </div>

                            <div class="col-md-12">
                                <label for="message" class="form-label">Project Details *</label>
                                <textarea rows="6" class="form-control" name="message" placeholder="Tell us about your project requirements, goals, and any specific features you need..."></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" id="submitBtn" class="btn btn-accent w-100 py-3 fw-semibold"><i class="bi-send-fill me-2"></i> Send Project Details</button>
                            </div>
                        </div>
                    </form>
<div id="formAlert" class="mt-3"></div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="mb-5">
                        <h2 class="display-6 fw-bold mb-4">Contact Information</h2>
                        <p class="text-muted">
                            Multiple ways to reach us. Choose what works best for you.
                        </p>
                    </div>

                    <!-- Phone -->
                    <div class="card card-hover-contact-us mb-4 border-0 border-radius-75rem">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-4">
                                <div class="accent-gradient rounded-2 d-flex align-items-center justify-content-center contact-icon"
                                    style="width: 48px; height: 48px;">
                                    <i class="bi-telephone fs-5"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-1 contact-title">Phone</h3>
                                    <p class="small text-muted mb-2">Call us anytime</p>
                                    <p class="fw-medium mb-1 contact-field-number-email"><a class="contact-field-number-email" href="tel:+919819555545"> +91 9819555545</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="card card-hover-contact-us mb-4 border-0 border-radius-75rem">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-4">
                                <div class="accent-gradient rounded-2 d-flex align-items-center justify-content-center contact-icon"
                                    style="width: 48px; height: 48px;">
                                    <i class="bi-envelope fs-5"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-1 contact-title">Email</h3>
                                    <p class="small text-muted mb-2">Drop us a line</p>
                                    <p class="fw-medium mb-1"><a class="contact-field-number-email" href="mailto:hello@websitedesignmumbai.com">hello@websitedesignmumbai.com</a></p>
                                    <p class="fw-medium"><a class="contact-field-number-email" href="mailto:shahrukh@nexgeno.in">shahrukh@nexgeno.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="card card-hover-contact-us mb-4 border-0 border-radius-75rem">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-4">
                                <div class="accent-gradient rounded-2 d-flex align-items-center justify-content-center contact-icon"
                                    style="width: 48px; height: 48px;">
                                    <i class="bi-geo-alt fs-5"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-1 contact-title">Address</h3>
                                    <p class="small text-muted mb-2">Visit our office</p>
                                    <p class="fw-medium mb-1">Unit No. F-50, First Floor,</p>
                                    <p class="fw-medium mb-1">Kohinoor City Mall,</p>
                                    <p class="fw-medium mb-1">Opp Holly Cross School,</p>
                                    <p class="fw-medium mb-1">Kurla (West) Mumbai,</p>
                                    <p class="fw-medium">Maharashtra - 400070, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="card card-hover-contact-us mb-4 border-0 border-radius-75rem">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-4">
                                <div class="accent-gradient rounded-2 d-flex align-items-center justify-content-center contact-icon"
                                    style="width: 48px; height: 48px;">
                                    <i class="bi-clock fs-5"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-1 contact-title">Business Hours</h3>
                                    <p class="small text-muted mb-2">We're available</p>
                                    <p class="fw-medium mb-1">Mon - Fri: 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="d-grid gap-3">
                        <button onclick="window.open('https://wa.me/919819555545', '_blank')" class="btn btn-offer-service d-flex align-items-center justify-content-center py-3">
                            <i class="bi-whatsapp me-2"></i>
                            WhatsApp Chat
                        </button>
                        <button class="btn btn-offer-service d-flex align-items-center justify-content-center py-3" onclick="window.open('https://calendly.com/shahrukh-nexgeno', '_blank')">
                            <i class="bi-calendar-check me-2"></i>
                            Schedule Video Call
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-light-blue section-padding-80px">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Frequently Asked Questions</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- FAQ 1 -->
                    <div class="card faq-card mb-4 border-0">
                        <div class="card-body p-4">
                            <div class="d-flex gap-4">
                                <div class="accent-gradient rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-3">How long does it take to build a website?</h3>
                                    <p class="text-muted">
                                        Typical timelines: Landing pages (3-7 days), Business websites (10-15 days),
                                        E-commerce sites (15-25 days), Custom applications (20-40 days). Rush projects
                                        available.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="card faq-card mb-4 border-0">
                        <div class="card-body p-4">
                            <div class="d-flex gap-4">
                                <div class="accent-gradient rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-3">What's included in your website development service?
                                    </h3>
                                    <p class="text-muted">
                                        Complete package: Design, development, responsive optimization, SEO setup,
                                        content integration, testing, deployment, and 30-day support.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="card faq-card mb-4 border-0">
                        <div class="card-body p-4">
                            <div class="d-flex gap-4">
                                <div class="accent-gradient rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-3">Do you provide ongoing maintenance and support?</h3>
                                    <p class="text-muted">
                                        Yes! We offer maintenance packages including updates, security monitoring,
                                        backups, and technical support starting from ₹3,000/month.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="card faq-card mb-4 border-0">
                        <div class="card-body p-4">
                            <div class="d-flex gap-4">
                                <div class="accent-gradient rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-3">Can you work with our existing brand guidelines?
                                    </h3>
                                    <p class="text-muted">
                                        Absolutely! We'll work within your brand guidelines and can also help enhance
                                        them if needed. Just share your brand assets with us.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="card faq-card border-0">
                        <div class="card-body p-4">
                            <div class="d-flex gap-4">
                                <div class="accent-gradient rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <h3 class="h5 fw-semibold mb-3">Do you build mobile apps as well?</h3>
                                    <p class="text-muted">
                                        We specialize in web applications and Progressive Web Apps (PWAs) that work like
                                        native apps. For native mobile apps, we partner with trusted developers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us  -->

<?php include 'footer.php';?>


<script>
    $(document).ready(function(){
    $('#form').on('submit', function(e){
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: formData,
            headers: { 
                'Accept': 'application/json'   // Prevent Basin redirect
            },
            success: function(){
                $('#formAlert').html(
                    '<div class="alert alert-success">✅ Thank you! Your project details have been submitted successfully.</div>'
                );
                $('#form')[0].reset();
            },
            error: function(){
                $('#formAlert').html(
                    '<div class="alert alert-danger">⚠️ Oops! Something went wrong. Please try again later.</div>'
                );
            }
        });
    });
});
</script>