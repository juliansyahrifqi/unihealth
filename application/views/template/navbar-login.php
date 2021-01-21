<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/font-awesome/css/all.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #FFB004; font-family: 'Oswald', sans-serif; letter-spacing: 1px;">
        <a class="navbar-brand mx-3" href="<?= base_url('main'); ?>">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" style="width: 60px; height: 60px;">
        </a>

        <ul class="nav justify-content-end">
            <li class="nav-item text-dark">
                <a class="nav-link text-dark mx-2" href="<?= base_url('main'); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mx-2" href="<?= base_url('calculator'); ?>">Nutrition Calc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mx-2" href="<?= base_url('search'); ?>">Foods</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link mr-5" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-dark">Hi, <?= $user['user_name']; ?> </span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/images/image1.jpg'); ?>" style="width:30px; height: 30px;">
                </a>
                <div class="dropdown-menu dropdown-menu-center mr-5">
                    <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Logout</a>
                </div>
            </li>

        </ul>
    </nav>