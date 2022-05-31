<?php
    get_header();
?>

<!-- ABOUT -->

<?php
global $post;
if(strcasecmp(get_the_title(),'About')==0 ){
    $title = get_the_title();
    echo '<header><span class="title">'.$title.'</span> </header>';
    echo '<main class="mugs">"';
    the_content();
    echo '</main>';
}elseif(strcasecmp(get_the_title(),'Contact')==0){
    $title = get_the_title();
    echo '<header><span class="title">'.$title.'</span> </header>
         <main id="contact">
            <article>
                <div id="details">
                    <p>76 Chamberlain Avenue</p>
                    <p>Ottawa, Ontario</p>
                    <p>K1S 1V9</p>
                    <p>613 866 4551</p>
                    <a href="info@studiored.ca" id="email">info@studiored.ca</a>
                </div>
                <div id="maps">
                    <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.120809014597!2d-75.69670668444451!3d45.406903379100264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b6d94f849b%3A0x91329a6ddb70b1f!2s76+Chamberlain+Ave%2C+Ottawa%2C+ON+K1S+1V9!5e0!3m2!1sen!2sca!4v1487185649634" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    <iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sca!4v1486693732785!6m8!1m7!1sB-Zeb4VPNVH-ufvBJHm9uA!2m2!1d45.40706296353223!2d-75.69464801193095!3f150.26!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </article>
        </main>';
}elseif(strcasecmp(get_the_title(),'News')==0){
    $title = get_the_title();
    echo '<header><span class="title">'.$title.'</span> </header>';
    echo '<main class="articles">';
    the_content();
    echo '</main>';
}elseif(strcasecmp(get_the_title(),'Services')==0){
    $title = get_the_title();
    echo '<header><span class="title">'.$title.'</span> </header>';
    echo '<main>
        <div id="serv-container">
            <ul id="services">
                <li class="service">Site & Master Planning</li>
                <li class="service">Streetscape Redevelopment</li>
                <li class="service">Parks Playgrounds & Sport Fields</li>
                <li class="service">Landscape Rehabilitation & Restoration</li>
                <li class="service">Historic & Cultural Landscapes</li>
                <li class="service">Public Art Consultation</li>
            </ul>
            <img id="serv-image" src="/wp-content/themes/studiored/theme-directory/assets/images/services/SERVICES IMAGE .JPG">
        </div>
    </main>';
}
?>
<?php
    get_footer();
?>
