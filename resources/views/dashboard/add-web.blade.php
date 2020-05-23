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
                        <input type="text" v-model="website" name="website" class="form-control" placeholder="Ajouter un website">
                    </div>
                    <div class="form-group">
                        <h4 class="pb-2 display-5">@{{domaine_ecommerce}}</h4>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" @click="send_data">
                            <i class="fa fa-dot-circle-o" id="btn_id"></i> Ajouter
                            <!--<i class="fa fa-spinner fa-spin"></i>-->
                        </button>
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
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
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
<script src="assets/js/main.js"></script>



<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    new Vue({
        el:'#app',
        data : {
             website : ''
        },
        computed : {
            domaine_ecommerce() {
                return 'www.domaine_e.'+this.website+'.com'
            }
        },
        methods : {
            send_data() {
                let element = document.getElementById("btn_id");
                element.classList.remove("fa-dot-circle-o");

                element.classList.add("fa-spinner");
                element.classList.add("fa-spin");

                axios.post('insert_domaine',{
                    domaine : this.domaine_ecommerce
                })
                    .then(res => {
                        console.log(res)
                    })
                    .catch((e) =>{
                        console.log(e)
                    })


            }
        }
    })



</script>



</body>

</html>
