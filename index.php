<?php
    get_header();
?>

    <main id="content">
        <div class="images">
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        ?>
                        <a class="container" href="<?php the_permalink();?>">
                            <img class="image" src="<?php echo $url ?>" alt="<?php the_title();?>">
                            <div class="overlay">
                                <div class="text"><?php the_title();?></div>
                            </div>
                        </a>
                        <?
                    }
                }
            ?>
        </div>
    </main>
<?php
    get_footer();
?>