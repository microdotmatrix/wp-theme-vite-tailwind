<?php get_header() ?>
  <main class="flex flex-col-reverse lg:flex-row gap-4 px-4 mt-4">

    <?php get_sidebar() ?>
    
    <article class="page-content">

      <h1 class="page-title"><?php the_title() ?></h1>
      <div class="mt-4">
        <?php the_content() ?>
      </div>

    </article>

  </main>
<?php get_footer() ?>