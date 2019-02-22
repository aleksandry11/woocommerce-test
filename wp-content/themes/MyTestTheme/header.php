<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2">
                    <div class="site-logo">
                        <img src="<?php echo do_shortcode('[template_dir image="logo.png"]') ?>" alt="">
                        
                    </div>
                </div>
                <div class="col-md-2 col-lg-10">
                    <div class="header-menu">

                        <ul class="search">
                            <li><a href="#" class="auth">Sign in</a></li>
                            <li><input type="text" class="search-button" placeholder="Search..."></li>                         
                        </ul>                        
                        
                        <ul class="navigation">
                            <li class="navigation-item"><a href="#">Nasa</a></li>
                            <li class="navigation-item"><a href="#">Final Space</a></li>
                            <li class="navigation-item"><a href="#">Short Sleeve</a></li>
                            <li class="navigation-item"><a href="#">Long Sleeve</a></li>
                            <li class="navigation-item"><a href="#">Outerwear</a></li>
                            <li class="navigation-item"><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="cart">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i>Cart</a></li>
                        </ul>                            
                        
                    </div>
                </div>
            </div>
        </div>
    </header>