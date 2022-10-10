<?php get_header(); ?>
<?php get_header('hero'); ?>
<?php the_post(); ?>

<main id="main">
    <div class="container mt-4">
        <h1 class="text-center">
            <?php the_title(); ?>
        </h1>
        <p class="text-center">
            <?php the_content(); ?>
        </p>
    </div>
</main>

<?php get_footer();?>