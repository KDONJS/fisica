<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto |GRB|</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-bottom/">
    <link rel="shortcut icon" href="img/fisca 1.svg" type="image/x-icon">
</head>

<body>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs|pills" id="navId" role="tablist">
        <li class="nav-item">
            <a class="navbar-brand" href="index.html">
                <img class="vuelta" src="img/fisca 2.svg" alt="" width="30" height="24">
            </a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link active">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="nosostros.html" class="nav-link">Blog</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Cursos</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Fisica</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab3Id">Matematicá</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Contactame</a>
            </div>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>


    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector('#navId a')
        bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
    </script>
