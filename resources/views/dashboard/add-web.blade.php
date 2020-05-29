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
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
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
    <div class="content mt-3" id="app">
        @if(\Illuminate\Support\Facades\Session::has('edit_user'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{session('edit_user')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Ajouter des sites</strong>
                </div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <input type="text" v-model="website" id="website_2" name="website" class="form-control" placeholder="Ajouter un website">
                        <small class="form-text text-muted" id="domainename">@{{domaine_ecommerce}}</small>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" id="username" name="username" v-model="username" placeholder="Username" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" id="nom_complet" name="nom_complet" v-model="nom_complet" placeholder="Nom complet" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" style="font-size: 0.8rem;"><i class="fa fa-asterisk"></i></div>
                            <input type="password" id="password" name="password" v-model="password" placeholder="Password" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" @click="send_data" :disabled="IsDisabled">
                            <i class="fa fa-dot-circle-o" id="btn_id"></i> Ajouter
                            <!--<i class="fa fa-spinner fa-spin"></i>-->
                        </button>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h3 class="h_title" id="id_h_title" style="display:none;">Génération <span class="blue">Base de données</span></h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="progress col-sm-12" style="display: none;" id="id_bar">
                            <div class="bar" id="id_width" style="width:5%;">
                                <p class="percent" id="id_percent">5%</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" style="color:red" id="error"></label>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Listes des sites</strong>
                    </div>
                    <div class="card-body card-block">
                        <table class="table table-striped" id="tab1">
                            <thead>
                            <tr>
                                <th scope="col">Subdomain</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody id="id_body">
                             @foreach($site_ecommerce as $site)
                                <tr>
                                    <td><a href="{{$site->name_site}}" target="blank">{{$site->name_site}}</a></td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" role="button" style="border-radius: 9px;color: aliceblue;font-size: 11px;" href="#">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                              @endforeach
                                <tr v-for="item in items">
                                    <td>@{{item.link}}</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" role="button" style="color: aliceblue;" href="#">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </a>
                                    </td>
                                   <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>




<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="assets/js/main.js"></script>







</body>

</html>
