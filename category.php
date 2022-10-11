<?php get_header(); ?>
<?php get_header('hero'); ?>

<main id="main">
<hr>
    <div class="row">
        <div class="col-sm-2">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-sm-10">
            <div class="row">
            <?php while(have_posts()) {
                the_post();    
            ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <?php  
                        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small');
                    ?>
                    <img class="card-img-top" src="<?php echo $imgPath[0]; ?>" alt="Card image cap" width="200px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text">
                            <?php echo get_the_date(); ?> | <?php echo substr(get_the_excerpt(), 0 ,150); ?> | <?php the_category(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            <hr>
            <?php echo wp_pagenavi(); ?>
            </div>
        </div>
    </div>
    <hr>
    
</main>

<?php get_footer();?>