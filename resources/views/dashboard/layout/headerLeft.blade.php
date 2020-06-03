
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li>
                    <a href="{{route('profil')}}"> <i class="menu-icon fa fa-user"></i>Profil </a>
                </li>
                <li>
                    <a href="{{route('add_web')}}"> <i class="menu-icon fa fa-plus"></i>Créer les sites e-commerce</a>
                </li>
                <li>
                    <a href="{{route('add_web')}}"> <i class="menu-icon fa fa-sitemap"></i>Créer ...</a>
                </li>
                <li>
                    <a href="{{route('pricing')}}"> <i class="menu-icon fa fa-usd"></i>Abonnement</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
