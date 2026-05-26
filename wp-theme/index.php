<?php get_header(); ?>

<main>
    <section class="hero"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/hero-image.webp');">
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
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg></div>
                    <h3>Diagnostics</h3>
                    <p>Advanced in-house and on-site control valve diagnostics to identify issues before they cause
                        failure.</p>
                    <a href="<?php echo home_url('/diagnostics'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.5 14.1 89.6c24 24 60.5 28.8 89.6 14.1L408 441c-8.8 8.8-8.8 23 0 31.8s23 8.8 31.8 0l36.2-36.2c8.8-8.8 8.8-23 0-31.8s-23-8.8-31.8 0l-36.2 36.2c14.7-29 10-65.5-14.1-89.6c-24-24-60.5-28.8-89.6-14.1L195.3 195.3V141.2c0-7.4-3.5-14.5-9.4-19l-104-80zM368 64a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg></div>
                    <h3>Repairs & Overhaul</h3>
                    <p>Full strip-down, inspection, and repair services for all types of severe service control
                        valves.</p>
                    <a href="<?php echo home_url('/valve-repairs'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M256 32c-35.3 0-64 28.7-64 64c0 4.1 .4 8.2 1.1 12.1c-13 4.2-25.1 10.4-35.9 18.2C101.8 153.5 64 200.4 64 256V320c0 17.7 14.3 32 32 32c10.1 0 19.6-4.7 25.6-12.8L144 309.3V448c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V384h64v64c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V309.3l22.4 29.9c6 8.1 15.5 12.8 25.6 12.8c17.7 0 32-14.3 32-32V256c0-55.6-37.8-102.5-93.2-129.7c1.1-4 .8-8.1 .8-12.2c0-35.3-28.7-64-64-64z"/></svg></div>
                    <h3>On-Site Support</h3>
                    <p>24/7 rapid response teams for on-site maintenance and outage support throughout the UK.</p>
                    <a href="<?php echo home_url('/on-site-services'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M343.4 106.6C302.3 84.8 256 79.6 211.1 91.8c-76.3 20.8-137.9 81.3-159.9 157.1C24.9 342.3 89.9 434.9 187.3 454c15.2 3 30.5-6.6 33.5-21.7s-6.6-30.5-21.7-33.5c-66-12.9-109.9-76.2-89.8-145.4C124.6 200.7 169.9 157 225.1 142c30.4-8.3 61.8-4.7 89.7 10.1L239 228c-10.4-5-23.3-3.8-32.6 3.7c-12.2 9.9-13.8 27.9-3.5 39.8s28.1 11.5 39.8 1.1c9.2-8.2 11.3-20.8 5.7-31.2l75-75zM512 256c0-76.9-33.9-145.9-87.8-193c-13-11.4-33-9.8-44 3.5s-9.8 33 3.5 44C424.3 147.2 448 200.2 448 256c0 106-86 192-192 192c-8 0-16-.5-23.9-1.5c-15.3-2-29.8 8.8-31.8 24.2s8.8 29.8 24.2 31.8c10.4 1.4 21 2.1 31.6 2.1c141.4 0 256-114.6 256-256z"/></svg></div>
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