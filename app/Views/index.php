<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Request</title>
    <link rel="stylesheet" href="/assets/css/create-request.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="navbar bg-blue navbar-light" aria-label="Navbar menu">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=".">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url("/main/list-request") ?>">List Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url("/main/create-request") ?>">Create Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url("/logout") ?>">Logout</a>
                        </li>
                </div>
            </div>
        </div>
        <div class="bg-bluesky">
            <p class="text-dark text-center fw-bold">Request Form</p>
        </div>

        <nav class="navbar fixed-bottom bg-blue fade-effect">
            <div class="container-fluid d-flex justify-content-evenly">
                <a class="navbar-toglle text-light btn" href="<?= site_url("/") ?>"><i class="bi bi-house-door"></i></a>
                <a class="navbar-toglle text-light btn" href="<?= site_url("/main/list-request") ?>"><i class="bi bi-card-list"></i></a>
            </div>
        </nav>
    </header>

    <script src="/assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>