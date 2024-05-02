<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Request</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/create-request.css">
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
                            <a class="nav-link" aria-current="page" href="<?= site_url("/") ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url("/main/list-request") ?>">List Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=".">Create Request</a>
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
    <div class="container">
        <div class="row g-5 pb-5">
            <div class="col-md-7 col-lg-8">
                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name">Enter your name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your name!
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="phone">Enter your mobile phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback">
                                Please enter your phone number!
                            </div>
                        </div>
                        <div id="itemsContainer">
                            <div class="row g-3 items">
                                <div class="form-group col-sm-6">
                                    <label for="item">Select Items</label>
                                    <select class="form-select" size="1" id="item" name="item" required>
                                        <?php foreach ($items as $item) : ?>
                                            <option value="<?= $item['item_name']; ?>"><?= $item['item_name']; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please select request item!
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="10" value="1" required>
                                    <div class="invalid-feedback">
                                        Please enter quantity item!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-0">
                            <button type="button" class="btn bg-blue text-light" id="addItemBtn"><i class="bi bi-plus"></i>Add Item</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-lg-4 order-md-last pb-5">
                <div class="card">
                    <h4 class="card-header d-flex justify-content-between bg-light align-items-center">
                        <span class="text-blue">List item</span>
                        <span class="badge bg-blue rounded-pill" id="count"></span>
                    </h4>
                    <div class="card-body" id="listItemsContainer" style="max-height: 200px; overflow-y: auto;">
                        <ul class="list-group mb-3 listItem">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <h6 class="my-0">Item name</h6>
                                <span class="text-body-secondary" id="quantity">Quantity</span>
                                <span class="text-body-secondary" id="delete">Delete</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-blue text-white" id="submitListItem">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit modal -->
    <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="submitModalLabel">List request item</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn bg-blue text-light">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/create-request.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>