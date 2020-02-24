<html>
<head>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><img src="assets/logo.png" style="width: 40px;height: 20;"><a class="navbar-brand" href="index.php"><strong>Ist das eine Primzahl?</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse"
                id="navcol-1"><a class="btn btn-primary ml-auto" role="button" href="https://github.com/TorbenHammes" target="_blank">GitHub&nbsp;<i class="fa fa-github"></i></a></div>
        </div>
    </nav>
    <!-- Start: Primzahl Form -->
    <div class="row">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Zeige mir alle Primzahlen</h2>
                <p class="text-center">An dieser Stelle hast du die Möglichkeit, dir alle Primzahlen in einem ausgewählten Bereich anzeigen zu lassen. Gib hierfür einfach eine Anfangs- und Endzahl ein.</p>
            </div>

            <div class="text-center">
              <button onclick="window.location.href='./seller/login_frage.php'">Ich bin bereits registriert und möchte mich einloggen.</button>
              <button onclick="window.location.href='./seller/register.php'">Ich bin möchte mich registrieren.</button>
              <button onclick="window.location.href='./markt.php'">Zeig mir den Marktplatz!</button>
            </div>
        </div>
    </div>
    
    
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <p class="text-muted small mb-4 mb-lg-0">© <a href="https://torbenhammes.de/"> Torben Hammes</a> 2019</p>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/torbenhammes/" target="_blank"><i class="fa fa-linkedin fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.xing.com/profile/Torben_Hammes" target="_blank"><i class="fa fa-xing fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/TorbenHammes" target="_blank"><i class="fa fa-github fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/TorbenHammes/DB2-Hoeding-BoostrapStudio-V4" target="_blank"><i class="fa fa-code-fork fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</html>
