<div class="col-lg-6 mx-auto">
    <div class="container">
        <div class="logo text-center d-flex justify-content-center align-items-center mt-3">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" style="width: 90px; height: 90px;">
            <h1 class="text-dark ml-3" style="font-family: 'Montserrat', sans-serif;">UniHealth</h1>
        </div>
        <div class="form mt-3">
            <form class="user py-3 px-5" method="post" action="<?= base_url('auth'); ?>" style="background-color: #FFB004; border-radius: 30px;">
                <h1 class="text-dark text-center" style="font-family: 'Montserrat', sans-serif">LOGIN</h1>

                <div class="form-group mt-4">
                    <label for="username">Username or email</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Enter your email or username here" style="opacity: 0.6" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password here" style="opacity: 0.6" autocomplete="off">
                </div>
                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark px-4 py-2 mt-3" style="font-size: 18px;">Login</button>
                </div>

                <p class="mt-3 text-center text-dark font-weight-bold" style="font-family: 'Roboto', sans-serif;">Don't have an account? <a href="<?= base_url('auth/register'); ?>" class="text-white">Sign up here</a> </p>
            </form>
        </div>
    </div>
</div>