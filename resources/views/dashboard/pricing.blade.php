<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href="{{ asset('css/libs_dash.css') }}" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        html {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }



        @media (min-width: 900px) {
            .background {
                padding: 0 0 25px;
            }
        }

        .container {
            margin: 0 auto;
            padding: 50px 0 0;
            max-width: 960px;
            width: 100%;
        }

        .panel {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px 25px;
            position: relative;
            width: 100%;
            z-index: 10;
        }

        .pricing-table {
            box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 900px) {
            .pricing-table {
                flex-direction: row;
            }
        }

        .pricing-table * {
            text-align: center;
            text-transform: uppercase;
        }

        .pricing-plan {
            border-bottom: 1px solid #e1f1ff;
            padding: 25px;
        }

        .pricing-plan:last-child {
            border-bottom: none;
        }

        @media (min-width: 900px) {
            .pricing-plan {
                border-bottom: none;
                border-right: 1px solid #e1f1ff;
                flex-basis: 100%;
                padding: 25px 50px;
            }

            .pricing-plan:last-child {
                border-right: none;
            }
        }

        .pricing-img {
            margin-bottom: 25px;
            max-width: 100%;
        }

        .pricing-header {
            color: #888;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .pricing-features {
            color: #016FF9;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 50px 0 25px;
        }

        .pricing-features-item {
            border-top: 1px solid #e1f1ff;
            font-size: 12px;
            line-height: 1.5;
            padding: 15px 0;
        }

        .pricing-features-item:last-child {
            border-bottom: 1px solid #e1f1ff;
        }

        .pricing-price {
            color: #016FF9;
            display: block;
            font-size: 32px;
            font-weight: 700;
        }

        .pricing-button {
            border: 1px solid #9dd1ff;
            border-radius: 10px;
            color: #348EFE;
            display: inline-block;
            margin: 25px 0;
            padding: 15px 35px;
            text-decoration: none;
            transition: all 150ms ease-in-out;
        }

        .pricing-button:hover,
        .pricing-button:focus {
            background-color: #e1f1ff;
        }

        .pricing-button.is-featured {
            background-color: #48aaff;
            color: #fff;
        }

        .pricing-button.is-featured:hover,
        .pricing-button.is-featured:active {
            background-color: #269aff;
        }
        .pricing-features li {
            list-style-type: none;
        }

    </style>

</head>

<body>


<!-- Left Panel -->
@include('dashboard.layout.headerLeft')
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
@include('dashboard.layout.headerTop')
<!-- Header-->

    <div class="content mt-3">
        <div class="main">
            <div class="background">
                <div class="container">
                    <div class="panel pricing-table">

                        <div class="pricing-plan">
                            <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
                            <h2 class="pricing-header">Personal</h2>
                            <ul class="pricing-features">
                                <li class="pricing-features-item">Custom domains</li>
                                <li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
                            </ul>
                            <span class="pricing-price">Free</span>
                            <a href="#/" class="pricing-button">Payer</a>
                        </div>

                        <div class="pricing-plan">
                            <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
                            <h2 class="pricing-header">Small team</h2>
                            <ul class="pricing-features">
                                <li class="pricing-features-item">Never sleeps</li>
                                <li class="pricing-features-item">Multiple workers for more powerful apps</li>
                            </ul>
                            <span class="pricing-price">$150</span>
                            <form method="POST" action="{{route('abonnement')}}">
                                @csrf
                                <input type="hidden" name="pay" value="500 dh">
                               <button class="pricing-button is-featured" type="submit">Payer</button>
                            </form>
                        </div>

                        <div class="pricing-plan">
                            <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img">
                            <h2 class="pricing-header">Enterprise</h2>
                            <ul class="pricing-features">
                                <li class="pricing-features-item">Dedicated</li>
                                <li class="pricing-features-item">Simple horizontal scalability</li>
                            </ul>
                            <span class="pricing-price">$400</span>
                            <a href="#/" class="pricing-button">payer</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
