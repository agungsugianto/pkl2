<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aksesoris Handphone </title>
<!--
Metro Fit
http://www.templatemo.com/tm-495-metro-fit
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="{{asset('assett/https://fonts.googleapis.com/css?family=Open+Sans:300,400')}}">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('assett/font-awesome-4.5.0/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assett/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('assett/css/magnific-popup.css')}}">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="{{asset('assett/css/templatemo-style.css')}}">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <!-- Header gallery -->
        <center>
        <font size="8" face="Courier New" color="black">
        <h1><u><i class="fa fa-android" style="font-size:39px"></i>Aksesoris Handphone</u><i class="fa fa-android" style="font-size:39px"></i>
        </h1></font>
        @include('Partial.header')        

            @include('Partial.nav')

            

            

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="tm-testi">
                        <img src="{{asset('assett/img/img-11-01.jpg')}}" alt="Image" class="img-fluid img-circle tm-testi-img">
                        <div class="tm-testi-text-box">
                            <p class="tm-testi-text">Quisque eu lectus quis tortor efficitur sollicitudin at eu elit. Aliquam a sagittis lectus, semper porta mauris. Duis ut dignissim dui. Nam tincidunt purus quis ultrices iaculis.</p>                            
                        </div>
                        <p class="tm-testi-sig">Quiseuq a nunc elit</p>
                    </div>
                </div>
            </div> <!-- row -->

            <div class="row tm-nav-2-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="tm-social-icons-container text-xs-center">
                        <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            @include('Partial.footer')

            
            
        </div> <!-- container-fluid -->
        
        <!-- load JS files -->
        <script src="{{asset('assett/js/jquery-1.11.3.min.js')}}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{asset('assett/https://www.atlasestateagents.co.uk/javascript/tether.min.js')}}"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="{{asset('assett/js/bootstrap.min.js')}}"></script>             <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="{{asset('assett/js/jquery.magnific-popup.min.js')}}"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script>     
       
            $(window).load(function(){
                /* Gallery pop up
                -----------------------------------------*/
                $('.tm-header-gallery').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
                           
            });

        </script>             

</body>
</html>