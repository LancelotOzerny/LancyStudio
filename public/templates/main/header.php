<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="/templates/main/assets/css/bootstrap5.3.min.css">
    <link rel="stylesheet" href="/templates/main/assets/css/style.css">
</head>
<body>

<header class="border-bottom bg-light px-2 px-sm-0">
    <nav class="container navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="/templates/main/assets/images/logo.png" alt="Lancy" width="64">
        </a>
        <button class="navbar-toggler"  type="button" data-bs-toggle="offcanvas" data-bs-target="#navigationCanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link <?= CURRENT_URL === '/' ? 'active' : ''?>" href="/">Главная</a>
                <a class="nav-link <?= CURRENT_URL === '/portfolio' ? 'active' : ''?>" href="/portfolio">Портфолио</a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start hide" tabindex="-1" id="navigationCanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="/">
                <img src="/templates/main/assets/images/logo.png" alt="Lancy" width="64">
            </a>
            <button type="button" class="btn-close" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navigationCanvas" aria-label="Закрыть"></button>
        </div>
        <div class="offcanvas-body">
            <div class="navbar-nav">
                <a class="nav-link <?= CURRENT_URL === '/' ? 'active' : ''?>" href="/">Главная</a>
                <a class="nav-link <?= CURRENT_URL === '/portfolio' ? 'active' : ''?>" href="/portfolio">Портфолио</a>
            </div>
        </div>
    </div>

</header>