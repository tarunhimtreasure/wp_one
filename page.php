<?php get_header(); ?>
<?php get_header('hero'); ?>
<?php the_post(); ?>

<main id="main">
    <div class="container mt-4">
        <h1 class="text-center">
            <?php the_title(); ?>
        </h1>
        <p class="text-center">
            <?php //  echo get_the_content(); ?>
            <?php the_post_thumbnail('medium'); ?>
            <hr>
            IMAGE FULL PATH : 
            <?php  
                $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small');
                echo $imgPath[0];
            ?>
            <hr>
            <img src="<?php echo $imgPath[0]?>" alt="" srcset="" width="500px">
            <hr>
            <?php the_content(); ?>
        </p>
    </div>
</main>

<?php get_footer();?>