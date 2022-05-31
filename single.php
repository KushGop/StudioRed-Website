<?php
    get_header();
?>
    <?php
    $title = get_the_title();
    // $dashes = sanitize_title_with_dashes($title);
    global $post;
    $dashes = $post->post_name;
    ?>
<main class="page">
    <div class="hero">
    <?php 
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    function debug_to_console( $data ) {
        if ( is_array( $data ) )
         $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
         else
         $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
        echo $output;
    }
    $prev_url = get_permalink($next_post->ID);
    $next_url = get_permalink($prev_post->ID);
    debug_to_console($next_url);
    debug_to_console($prev_url);
    
    /*
    <a class="arrow" href=<?php echo get_permalink($prev_post->ID); ?> title=<?php echo $prev_post->post_title ?>>&lt;</a>
    <a class="arrow" href=<?php echo get_permalink($next_post->ID); ?> title=<?php echo $next_post->post_title ?>>&gt;</a>
    */
    ?>
        <img class="lead" src="/wp-content/themes/studiored/theme-directory/assets/images/hero/<?php echo $dashes?>.jpg" alt="">
        <div class="hero_text">
            <a class="arrow" href=<?php echo $prev_url; ?> title=<?php echo $next_post->post_title ?>>&lt;</a>
            <?php echo $title ?>
            <a class="arrow" href=<?php echo $next_url; ?> title=<?php echo $prev_post->post_title ?>>&gt;</a>
        </div>
    </div>
    <div class="content">
        <div class="description">
            <h1><?php echo $title;?></h1>
            <?php
            the_content();
            $sec;
            $path = './wp-content/themes/studiored/theme-directory/assets/images/'.$dashes.'/sec/';
            $files = scandir($path);
            $files = array_diff(scandir($path), array('.', '..'));
            foreach($files as $file){
                $sec = $file;
            }
            ?>
        </div>
        <div class="sec-container"><img class="sec" src="/wp-content/themes/studiored/theme-directory/assets/images/<?php echo $dashes;?>/sec/<?php echo $sec;?>" alt=""></div>
    </div>
    <div class="trailing-images">
        <?php
        $path    = './wp-content/themes/studiored/theme-directory/assets/images/'.$dashes.'/trail/';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        foreach($files as $file){
        echo "<img class='trail' src='/wp-content/themes/studiored/theme-directory/assets/images/$dashes/trail/$file' alt=''>";
        }
        ?>
    </div>
</main>

<?php
    get_footer();
?>