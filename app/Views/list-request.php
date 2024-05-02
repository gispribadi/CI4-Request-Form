<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Request</title>

    <link rel="stylesheet" href="/assets/css/listReq.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aclonica&display=swap" rel="stylesheet">
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
                            <a class="nav-link" aria-current="page" href="<?= site_url("/") ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=".">List Request</a>
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
            <p class="text-dark text-center fw-bold">List Request</p>
        </div>

        <nav class="navbar fixed-bottom bg-blue fade-effect">
            <div class="container-fluid d-flex justify-content-evenly">
                <a class="navbar-toglle text-light btn" href="<?= site_url("/") ?>"><i class="bi bi-house-door"></i></a>
                <a class="navbar-toglle text-light btn" href="<?= site_url("/main/list-request") ?>"><i class="bi bi-card-list"></i></a>
            </div>
        </nav>
    </header>

    <div class="container pb-5">
        <div class="input-group mb-4 border rounded-3 bg-body-secondary p-1">
            <div class="input-group-prepend border-0">
                <button id="button-addon4" type="button" class="btn btn-link text-secondary"><i class="fa fa-search"></i></button>
            </div>
            <input type="search" placeholder="Search Request" style="text-align: center;" aria-describedby="button-addon4" class="form-control bg-body-secondary border-0">
        </div>

        <div class="list-req-items" id="cardContainer">
            <!-- <div class="card bg-bluesky" style="width: 300px;">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Request# : 435591</span>
                        <button class="btn bg-blue btn-sm text-light rounded-pill" id="detail">View Detail</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="bg-light py-1 d-flex align-items-center">
                        <div class="my-1 rounded-2" style="width: 120px; height:25px; background-color: #DCFAF8;">
                            <span class="text-blue abril-fatface-regular ps-1">Total Items</span>
                        </div>
                        <span class="aclonica-regular ps-2" id="totalItem">10</span>
                    </div>
                    <div class="bg-light py-1 mt-1 d-flex align-items-center">
                        <div class="my-1 rounded-2" style="width: 120px; height:25px; background-color: #DCFAF8;">
                            <span class="text-blue abril-fatface-regular ps-1">Total Quantity</span>
                        </div>
                        <span class="aclonica-regular ps-2" id="totalQuantity">10</span>
                    </div>  
                </div>
            </div> -->
        </div>

    </div>

    <script src="/assets/js/listReq.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>