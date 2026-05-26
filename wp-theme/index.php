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
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4l54.1 0 109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109 0-54.1c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7L352 176c-8.8 0-16-7.2-16-16l0-57.4c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></div>
                    <h3>Repairs & Overhaul</h3>
                    <p>Full strip-down, inspection, and repair services for all types of severe service control
                        valves.</p>
                    <a href="<?php echo home_url('/valve-repairs'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M256 32c-17.7 0-32 14.3-32 32l0 2.3 0 99.6c0 5.6-4.5 10.1-10.1 10.1c-3.6 0-7-1.9-8.8-5.1L157.1 87C83 123.5 32 199.8 32 288l0 64 512 0 0-66.4c-.9-87.2-51.7-162.4-125.1-198.6l-48 83.9c-1.8 3.2-5.2 5.1-8.8 5.1c-5.6 0-10.1-4.5-10.1-10.1l0-99.6 0-2.3c0-17.7-14.3-32-32-32l-64 0zM16.6 384C7.4 384 0 391.4 0 400.6c0 4.7 2 9.2 5.8 11.9C27.5 428.4 111.8 480 288 480s260.5-51.6 282.2-67.5c3.8-2.8 5.8-7.2 5.8-11.9c0-9.2-7.4-16.6-16.6-16.6L16.6 384z"/></svg></div>
                    <h3>On-Site Support</h3>
                    <p>24/7 rapid response teams for on-site maintenance and outage support throughout the UK.</p>
                    <a href="<?php echo home_url('/on-site-services'); ?>" class="more-link">Learn More &rarr;</a>
                </div>
                <div class="service-card">
                    <div class="icon"><svg class="icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg></div>
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