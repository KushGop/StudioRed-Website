<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>StudioRed</title> -->
    <link rel="stylesheet" id="google_fonts-css" href="//fonts.googleapis.com/css?family=Raleway:300,300italic,600,600italic,800" type="text/css" media="all">
    <meta name="description" content="studioRed Landscape Architecture Inc. is a Canadian landscape architecture firm located in Ottawa, Ontario. Our principal, Kaja Cerveny built this company from th ground up, reaching across Canada and the USA">

    <?php
    wp_head();
    ?>

</head>
<body>
    <nav>
        <div class="logo-container"> 
            <a class="logo" href="<?php echo get_home_url();?>"><img src="/wp-content/themes/studiored/theme-directory/assets/images/icons/studioRedLogo.PNG" alt=""></a>
            <p id="under_logo">Landscape Architecture Inc.</p>
        </div>
        <ul id="navigation" data-visible="false">
            <?php
            $option = '<li><a class="nav_links" href="'.get_home_url() . '">';
            $option .= "Home";
            $option .= '</a></li>';
            echo $option;
            $pages = array(
                get_page_by_title("About"),
                get_page_by_title('Services'),
                get_page_by_title("News"),
                get_page_by_title("Contact")
            );
            foreach($pages as $page){
                $option = '<li><a class="nav_links" href="'.get_page_link($page->ID) . '">';
                $option .= $page->post_title;
                $option .= '</a></li>';
                echo $option;
            }
            ?>
        </ul> 
        <div class="dropdown">
            <button id="nav-toggle" type="button"></button>
        </div>
    </nav>