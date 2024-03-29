<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   
   <body id="home">
        <div class="wrapper">
            <?php
            // header
                include 'header.php';
            // end header
            // slider
                include 'slider.php';
            // end slide
            // content
            if (isset($_GET['page_layout'])) {
                switch ($_GET['page_layout']) {
                    case 'cart': include_once('cart.php');
                        break;
                    case 'checkout': include_once('checkout.php');
                        break;
                    case 'checkout2': include_once('checkout2.php');
                        break;
                    case 'contact': include_once('contact.php');
                        break;
                    case 'details': include_once('details.php');
                        break;
                    case 'productgird': include_once('productgird.php');
                        break;
                    case 'productlitst': include_once('productlitst.php');
                        break;
                    
                }
            }else {
                include 'hotproduct.php';
                include 'featuredproduct.php';
            }


                
            // end content
            // our brand
                include 'ourbrand.php';
            // end our brand
            // footer
                include 'footer.php';
            // end footer
            ?>
        </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
      <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>