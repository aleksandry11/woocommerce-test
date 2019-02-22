<?php 

function loading_assets () {
    wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('index', get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'index', get_stylesheet_directory_uri() . '/assets/js/index.js', array('owl-carousel', 'jquery'), true);
}
add_action('wp_enqueue_scripts', 'loading_assets');

add_shortcode( 'template_dir', function( $atts ){
    return get_template_directory_uri() . '/assets/img/' . $atts['image'];
});


function load_slider() {
    $a = get_template_directory_uri();
    return <<<HTML
        <section class="slider">
            <div class="owl-carousel">
                <div><img src="{$a}/assets/img/6.jpg" alt="1"></div>
                <div><img src= "{$a}/assets/img/5.jpg" alt="2"></div>
                <div><img src= "{$a}/assets/img/4.jpg" alt="3"></div>
                <div><img src= "{$a}/assets/img/3.jpg" alt="4"></div>
                <div><img src= "{$a}/assets/img/2.jpg" alt="5"></div>
                <div><img src= "{$a}/assets/img/1.jpg" alt="6"></div>
            </div>
        </section>
HTML;
}
add_shortcode( 'slider', 'load_slider' );

function about_us() {
    return <<<HTML
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-info">
                        <h1>We're a small<br />business</h1>
                        <h3>We print on demand. What we lack<br /> in speed we make up in quality.</h3>
                    </div>
                </div>
            </div>
        </div>        
    </section>
HTML;
}
add_shortcode('about_us', 'about_us');
?>

