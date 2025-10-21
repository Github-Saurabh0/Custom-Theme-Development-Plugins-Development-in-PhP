<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo("name") ?> <?php echo get_bloginfo("description") ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <style>
    /* Force override conflicting theme styles */
.mobile-nav {
    display: none !important;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.08) !important;
    backdrop-filter: blur(25px) !important;
    border-radius: 20px !important;
    position: absolute !important;
    top: 90px !important;
    right: 20px !important;
    padding: 25px 35px !important;
    z-index: 9999 !important;
    box-shadow: 0 4px 25px rgba(0,0,0,0.35) !important;
    transform: translateY(-15px);
    opacity: 0;
    transition: all 0.4s ease !important;
}

/* Show when toggled active */
.mobile-nav.active {
    display: flex !important;
    transform: translateY(0);
    opacity: 1;
}

/* Menu Links */
.mobile-nav .nav-links {
    display: flex !important;
    flex-direction: column !important;
    gap: 15px !important;
    text-align: right !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
}

.mobile-nav .nav-links a {
    color: #ffffff !important;
    font-weight: 600 !important;
    text-decoration: none !important;
    letter-spacing: 0.5px !important;
    transition: 0.3s ease !important;
}

.mobile-nav .nav-links a:hover {
    color: #ff66c4 !important;
    transform: translateX(-5px);
}

/* Slide-in (optional enhancement) */
@keyframes slideInGlass {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.mobile-nav.active {
    animation: slideInGlass 0.4s ease-out;
}


    /* When JS toggles active class */
    .mobile-menu-toggle.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translateY(8px);
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translateY(-8px);
    }

    /* Hide on desktop */
    @media (min-width: 768px) {
        .mobile-menu-toggle,
        .mobile-nav {
            display: none !important;
        }
    }


    .logo-design img{
        height: 50px;
        width: 130px;
    }

    </style>
</head>

<body>
    <!-- Epic Neural Background -->
    <div class="neural-background"></div>
    
    <!-- Floating Geometric Shapes -->
    <div class="geometric-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Neural Network Lines -->
    <div class="neural-lines">
        <div class="neural-line"></div>
        <div class="neural-line"></div>
        <div class="neural-line"></div>
    </div>

    <!-- Header -->
    <header class="glass">
        <nav>
            <!-- <a href="#home" class="logo">
                <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#e0a3ff"/>
                            <stop offset="50%" style="stop-color:#ff69b4"/>
                            <stop offset="100%" style="stop-color:#9370db"/>
                        </linearGradient>
                    </defs>
                    <circle cx="50" cy="30" r="8" fill="url(#logoGradient)" opacity="0.8">
                        <animate attributeName="opacity" values="0.8;1;0.8" dur="2s" repeatCount="indefinite"/>
                    </circle>
                    <circle cx="30" cy="60" r="6" fill="url(#logoGradient)" opacity="0.6">
                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2.5s" repeatCount="indefinite"/>
                    </circle>
                    <circle cx="70" cy="65" r="7" fill="url(#logoGradient)" opacity="0.7">
                        <animate attributeName="opacity" values="0.7;1;0.7" dur="1.8s" repeatCount="indefinite"/>
                    </circle>
                    <line x1="50" y1="30" x2="30" y2="60" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                        <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" repeatCount="indefinite"/>
                    </line>
                    <line x1="50" y1="30" x2="70" y2="65" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2.2s" repeatCount="indefinite"/>
                    </line>
                    <line x1="30" y1="60" x2="70" y2="65" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                        <animate attributeName="opacity" values="0.6;1;0.6" dur="2.8s" repeatCount="indefinite"/>
                    </line>
                </svg>
                WEARL
            </a> -->

            <!-- Custom logo setup -->
            <a href="../" class="logo-design">
             <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if(has_custom_logo()){
                   $img = esc_url( $logo[0] );
                   echo '<img src="' . $img . '" alt="Wearl Technologies Logo" class="logo-image">';
                }
              ?>
            </a>

            
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'nav-links',
                        'container' => false,
                    )
                );
            ?>

            <div class="mobile-menu-toggle">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </div>
        </nav>

        <div class="mobile-nav">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary-menu',
                        'menu_class' => 'nav-links',
                        'container' => false,
                    )
                );
            ?>
        </div>
    </header>

    <?php wp_footer(); ?>
</body>
</html>
