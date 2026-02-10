<?php get_header(); ?>

<main>
    <section class="hero"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/hero-image.png');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge">Independent Specialist Since 2007</span>
            <h1>Precision Valve Engineering.<br>Zero Margin for Error.</h1>
            <p>The U.K.’s leading independent specialists in control valve overhaul, in-situ diagnostics, and
                emergency repair. Keeping the nation’s critical infrastructure flowing since 2007.</p>
            <div class="hero-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">Emergency Outage
                    Support</a>
                <a href="<?php echo home_url('/services'); ?>" class="btn btn-secondary btn-lg">View Our
                    Capabilities</a>
            </div>
        </div>
    </section>

    <section id="services" class="services-grid section">
        <div class="container">
            <div class="section-header">
                <h2>Our Specialist Expertise</h2>
                <p>Comprehensive support for all major valve manufacturers including Fisher, Flowserve, and
                    Copes-Vulcan.</p>
            </div>
            <div class="grid">
                <div class="service-card">
                    <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h3>Diagnostics</h3>
                    <p>Advanced in-house and on-site control valve diagnostics to identify issues before they cause
                        failure.</p>
                    <a href="<?php echo home_url('/diagnostics'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h3>Repairs & Overhaul</h3>
                    <p>Full strip-down, inspection, and repair services for all types of severe service control
                        valves.</p>
                    <a href="<?php echo home_url('/valve-repairs'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fa-solid fa-helmet-safety"></i></div>
                    <h3>On-Site Support</h3>
                    <p>24/7 rapid response teams for on-site maintenance and outage support throughout the UK.</p>
                    <a href="<?php echo home_url('/on-site-services'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fa-solid fa-gauge-high"></i></div>
                    <h3>Safety Relief Valves</h3>
                    <p>Comprehensive turnkey service for the inspection, test, overhaul and repair of Safety
                        Relief valves.</p>
                    <a href="<?php echo home_url('/safety-valves'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>