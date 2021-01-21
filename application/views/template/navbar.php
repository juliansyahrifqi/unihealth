    <nav class="navbar navbar-light" style="background-color: #FFB004; font-family: 'Oswald', sans-serif; letter-spacing: 1px;">
        <a class="navbar-brand mx-3" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" style="width: 60px; height: 60px;">
        </a>

        <ul class="nav justify-content-end">
            <li class="nav-item text-dark">
                <a class="nav-link text-dark mx-2" href="<?= base_url('home'); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mx-2" href="<?= base_url('calculator'); ?>">Nutrition Calc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mx-2" href="<?= base_url('foods'); ?>">Foods</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark mx-2" href="<?= base_url('auth'); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-links btn btn-dark px-3 mx-2" style="border-radius: 30px;" href="<?= base_url('auth/register'); ?>">Sign Up</a>
            </li>
        </ul>
    </nav>
    