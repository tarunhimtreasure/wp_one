<?php get_header(); ?>
<?php get_header('hero'); ?>
<?php the_post(); ?>

<main id="main">
    <div class="container mt-4">
        <h1 class="text-center">
            <?php the_title(); ?>
        </h1>
        <div class="container">
            <?php  
                $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small');
                //echo $imgPath[0];
            ?>
            <img src="<?php echo $imgPath[0]; ?>" class="img-fluid" alt="" srcset="">
        </div>
        <p>
            <small><?php the_date(); ?> | <?php the_author(); ?></small>
            <?php the_content(); ?>
        </p>
        <div class="container">
            <section class="comment">
                <?php comment_form(); ?>
                <hr>
                <?php comments_template();?>
            </section>
        </div>
    </div>
</main>

<?php get_footer();?>