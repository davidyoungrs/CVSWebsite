<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "@id": "https://controlvalveservices.co.uk",
      "name": "Control Valve Services",
      "image": "<?php echo get_template_directory_uri(); ?>/assets/logo.png",
      "url": "https://controlvalveservices.co.uk",
      "telephone": "+441484401648",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Unit 1 Birds Royd Mill, Birds Royd Lane",
        "addressLocality": "Brighouse",
        "addressRegion": "West Yorkshire",
        "postalCode": "HD6 1LQ",
        "addressCountry": "GB"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 53.6841, 
        "longitude": -1.8344
      },
      "description": "Specialist independent control valve maintenance, repair, and diagnostic services for the oil, gas, and power industries.",
      "areaServed": {
        "@type": "Country",
        "name": "United Kingdom"
      }
    }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.webp" alt="CVS Logo" width="180" height="80">
                </a>
            </div>
            <nav class="desktop-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul>%3$s</ul>',
                ));
                ?>
                <?php // Fallback if no menu assigned (mimics static) ?>
                <?php if (!has_nav_menu('primary')): ?>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                        <li><a href="<?php echo home_url('/valve-supply'); ?>">Supply</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>">News</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
            <div class="header-actions">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Request a Quote</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Menu"><svg class="icon-svg" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></button>
        </div>
    </header>