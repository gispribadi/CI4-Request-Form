<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/assets/css/login.css'>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/assets/bootstrap/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="form-structor position-absolute top-50 start-50 translate-middle">
        <div class="signin">
            <h2 class="form-title text-break" id="sigin">Hello,Welcome</h2>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">Log in</h2>
                <form method="POST" action="<?= base_url('/login/process') ?>">
                    <div class="form-holder">
                        <input class="input bg-light text-dark" type="text" name="username" placeholder="Username" required />
                        <input type="password" class="input bg-light text-dark" name="password" placeholder="Password" required />
                    </div>
                    <button type="submit" class="submit-btn" name="login">Log in</button>
                </form>
                <p class="text-center guest">Dont have an account?
                    <a href="#" class="bg-blue text-decoration-none" id="signGuest">
                        Sign as Guest
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Guest Modal -->
    <div class="modal fade" id="guestModal" tabindex="-1" aria-labelledby="guestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="guestModalLabel">Sign as Guest</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="guestNIK" class="form-label">NIK Employe</label>
                            <input type="text" class="form-control" id="guestNIK" placeholder="Enter your NIK">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="enterGuestBtn">Enter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModelLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModelLabel">Login Failed!</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <script src='assets/js/login.js'></script>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>