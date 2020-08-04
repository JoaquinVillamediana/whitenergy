<!-- Navigation-->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/sb-admin.css">
<link rel="stylesheet" href="css/nav.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href=""><img src="../img/Logo_vector.png " class="logo mr-2" alt="">WhiteEnergy</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item mt-4" data-toggle="tooltip" data-placement="right" title="Usuarios">
                <a class="nav-link" href="">
                <i class="fas fa-chart-area"></i>
                    <span class="nav-link-text">Mi Consumo</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categories">
                <a class="nav-link" href="">
                <i class="fas fa-bell"></i>
                    <span class="nav-link-text">Alertas de Consumo</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="sub">
                <a class="nav-link" href="">
                  <i class="fas fa-bolt"></i>
                    <span class="nav-link-text">Cortes de luz y WiFi</span>
                </a>
            </li>
           
            


        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<script src="js/sb-admin.js"></script>

<script>
$('#toggleNavPosition').click(function () {
    $('body').toggleClass('fixed-nav');
    $('nav').toggleClass('fixed-top static-top');
});

$('#toggleNavColor').click(function () {
    $('nav').toggleClass('navbar-dark navbar-light');
    $('nav').toggleClass('bg-dark bg-light');
    $('body').toggleClass('bg-dark bg-light');
});
        </script>
