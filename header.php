<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Walter+Turncoat&display=swap" rel="stylesheet" />
  <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col h-screen') ?>>
  <?php wp_body_open(); ?>

    <header class="flex-0 bg-yellow-bright shadow-md  border-b-[20px] border-b-blue-dark">
      <div class="container mx-auto flex flex-col lg:flex-row justify-center lg:justify-between items-center lg:items-end min-h-[40px]">
        <section class="title-block flex-none text-center px-1 py-2">
          <figure class="logo">
            <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/cypress-speaks-logo.png" alt="Cypress Speaks Logo" class="w-full" />
          </figure>
          <div class="bg-blue-bright py-2 px-2 rounded-full">
            <h3 class="site-name leading-relaxed text-blue-dark">
              <a href="<?php echo home_url() ?>">Cypress Speaks</a>
            </h3>
            <h5 class="site-tagline text-sm md:text-md lg:text-lg uppercase">Speech Therapy</h5>
          </div>
        </section>
        <section class="menu-block flex-1 flex justify-center h-full">
          <nav id="site-navigation" class="nav-menu">
            <div class="row">
              <div class="col menu-item">
                <a href="/" class="menu-link hidden md:block">Home</a>
                <a href="/" class="menu-link block md:hidden">
                  <iconify-icon icon="ph:house"></iconify-icon>
                </a>
              </div>
              <div class="col menu-item menu-item-has-children">
                <a href="/services" class="menu-link hidden md:block">Services</a>
                <a href="/services" class="menu-link block md:hidden">
                  <iconify-icon icon="ph:wrench"></iconify-icon>
                </a>
                <div class="sub-menu">
                  <a href="/services#assessments">Assessments</a>
                  <a href="/services#treatment">Treatment</a>
                  <a href="/services#in-service-training">In-Service Training</a>
                </div>
              </div>
              <div class="col menu-item menu-item-has-children">
                <a href="/our-clinicians" class="menu-link hidden md:block">Our Clinicians</a>
                <a href="/our-clinicians" class="menu-link block md:hidden">
                  <iconify-icon icon="healthicons:doctor-female"></iconify-icon>
                </a>
                <div class="sub-menu">
                  <a href="/our-clinicians/emily-henry-ms-ccc-slp">Emily Henry, Owner</a>
                </div>
              </div>
              <div class="col menu-item">
                <a href="/faq" class="menu-link hidden md:block">FAQ</a>
                <a href="/faq" class="menu-link block md:hidden">
                  <iconify-icon icon="ph:question"></iconify-icon>
                </a>
              </div>
              <div class="col menu-item">
                <a href="/contact" class="menu-link hidden md:block">Contact</a>
                <a href="/contact" class="menu-link block md:hidden">
                  <iconify-icon icon="ph:envelope"></iconify-icon>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/icons/boy-outline.png" alt="Home" class="nav-icon" />
              </div>
              <div class="col">
                <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/icons/tree-icon.png" alt="Services" class="nav-icon" />
              </div>
              <div class="col">
                <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/icons/girl-outline.png" alt="Clinicians" class="nav-icon" />
              </div>
              <div class="col">
                <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/icons/tree-icon.png" alt="FAQ" class="nav-icon" />
              </div>
              <div class="col">
                <img src="<?php echo home_url() ?>/wp-content/themes/cypress/assets/img/icons/wheelchair-outline.png" alt="Contact" class="nav-icon" />
              </div>
            </div>
          </nav>
          
          <!--<nav class="w-3/4 mx-auto">
            <ul class="flex flex-row justify-around [&_li]:text-center [&_li]:w-full">
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/services">Services</a>
              </li>
              <li>
                <a href="/clinicians">Our Clinicians</a>
              </li>
              <li>
                <a href="/faq">FAQ</a>
              </li>
              <li>
                <a href="/contact">Contact</a>
              </li>
            </ul>
          </nav>-->
          <div class="hidden"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?></div>
          <div class="hidden"><?php echo wp_nav_menu() ?></div>
        </section>
        <section class="contact-info-bubble">
          <h4 class="text-lg xl:text-xl font-semibold tracking-snug">
            <a href="tel:+12812460004" class="flex flex-row items-center">
              <iconify-icon icon="mdi:phone" style="vertical-align: middle; margin-top: -0.05rem;"></iconify-icon>
              <span class="hidden lg:inline-flex ml-1">Call: (281) 246-0004</span>
            </a>
          </h4>
          <h4 class="text-lg xl:text-xl font-semibold tracking-tight">
            <a href="mailto:info@cypressspeaks.com" class="flex flex-row items-center">
              <iconify-icon icon="mdi:email" style="vertical-align: middle; margin-top: -0.05rem;"></iconify-icon>
              <span class="hidden lg:inline-flex ml-1">Email: info@cypressspeaks.com</span>
            </a>
          </h4>
        </section>
      </div>
    </header>

