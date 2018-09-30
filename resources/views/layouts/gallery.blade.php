<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Metro Fit - Services</title>
<!--
Metro Fit
http://www.templatemo.com/tm-495-metro-fit
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
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
        @include('Partial.headgallery')               
            
            <!-- Navigation -->
            @include('Partial.navgallery') 
            
            <!-- row -->
            @include('Partial.rowgallery')

            <!-- footer -->
            @include('Partial.footergallery')
            
        </div> <!-- container-fluid -->

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="{{asset('assett/js/jquery-1.11.3.min.js')}}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js')}}"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
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

                // Tabs
                // http://stackoverflow.com/questions/11645081/how-to-build-simple-tabs-with-jquery
                $('.tm-tab-content-box').hide();                
                //$('#tab1C').fadeIn('slow');
                $('#tab1C').show();

                $('.tm-tab-link').click(function(){
                  
                    var t = $(this).attr('id');
                    
                    $('.tm-tab-link').removeClass('active');
                    $(this).addClass('active');                    

                    $('.tm-tab-content-box').hide();
                    $('#'+ t + 'C').fadeIn('slow');
                
                });

                // Remove preloader
                // https://ihatetomatoes.net/create-custom-preloading-screen/
                $('body').addClass('loaded');
                           
            });

        </script>             

</body>
</html>
