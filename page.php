<?php get_header() ?>

    <article class="container mx-auto w-full">

        <h1 class="text-3xl font-semibold"><?php the_title() ?></h1>
        <div class="mt-4">
            <?php the_content() ?>
        </div>

    </article>

<?php get_footer() ?>