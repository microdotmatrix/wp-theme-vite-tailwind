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
      <div class="container mx-auto flex justify-between items-center py-6 min-h-[40px]">
        <section class="title-block flex-none text-center px-1">
          <div class="bg-blue-bright p-4 rounded-full divide-y">
            <h3 class="site-name text-3xl leading-relaxed">
              <a href="<?php echo home_url() ?>">Cypress Speaks</a>
            </h3>
            <h5 class="site-tagline text-lg uppercase">Speech Therapy</h5>
          </div>
        </section>
        <section class="menu-block flex-1 flex justify-center">
          <nav class="menu">
            <div class="row">
              <div class="col">
                <a href="/">Home</a>
              </div>
              <div class="col">
                <a href="/services">Services</a>
              </div>
              <div class="col">
                <a href="/clinicians">Our Clinicians</a>
              </div>
              <div class="col">
                <a href="/faq">FAQ</a>
              </div>
              <div class="col">
                <a href="/contact">Contact</a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <img src="/assets/img/icons/boy-outline.png" alt="Home" />
              </div>
              <div class="col">
                <a href="/services">S</a>
              </div>
              <div class="col">
                <a href="/clinicians">O</a>
              </div>
              <div class="col">
                <a href="/faq">F</a>
              </div>
              <div class="col">
                <a href="/contact">C</a>
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
        <section class="flex-none">
          <h4 class="text-xl tracking-wide font-semibold">Call: (281) 246-0004</h4>
          <h4 class="text-xl tracking-wide font-semibold">Email: info@cypressspeaks.com</h4>
        </section>
      </div>
    </header>

