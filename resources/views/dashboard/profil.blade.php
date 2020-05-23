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
        <div class="col-lg-12">
            @if(\Illuminate\Support\Facades\Session::has('edit_user'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{session('edit_user')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header"><strong>Profil</strong></div>
                <div class="card-body card-block">
                    {!! Form::model($user,['method' => 'PATCH','action' => ['UsersController@update',$user->id]]) !!}
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Nom</label>
                           <!-- <input type="text" id="company" placeholder="Nom" class="form-control">-->
                            {!! Form::text('name', null , ['class'=>'form-control','placeholder' => 'nom']) !!}
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Telephone</label>
                            {!! Form::text('telephone', null , ['class'=>'form-control','placeholder' => 'telephone']) !!}
                        </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="ville" class=" form-control-label">Ville</label>
                                        <!--<input type="text" id="city" placeholder="Ville" class="form-control">-->
                                        {!! Form::text('ville', null , ['class'=>'form-control','placeholder' => 'ville']) !!}

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="postal-code" class=" form-control-label">Postal Code</label>
                                        <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Mise à jour
                                </button>
                            </div>
                        </div>



                     {!! Form::close() !!}

            </div>
        </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>



<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>



</body>

</html>
