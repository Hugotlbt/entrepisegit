<?php
require_once '../base.php';
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Compresseurs</title>
        <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
        <link rel="stylesheet" href="assets/css/panier.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    </head>
    <body>
    <!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>

    <section class="h-100 h-custom" style="background-color: #ffffff;">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-12">
                    <div class="card card-registration card-registration-2 shadow-lg p-3 mb-5 bg-white rounded" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">PANIER</h1>
                                            <!--    nombre d'item-->
                                            <h6 class="mb-0 text-muted">1 items</h6>
                                        </div>
                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Compresseur</h6>
                                                <h6 class="text-black mb-0">Cla 2a - Waves</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                                       class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">€ 44.00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="./index.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Retour à la boutique</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Sommaire</h3>
                                        <hr class="my-4">
                                        <!--    nombre d'item-->
                                        <div class="d-flex justify-content-between mb-4">

                                            <h5 class="text-uppercase">items 1</h5>
                                            <h5>€ 44.00</h5>
                                        </div>
                                        

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total</h5>
                                            <h5>€ 44.00</h5>
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button
                                                    class="btn btn-lg btn-primary mt-5" type="button">Payer</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    Pied de page-->
    <?php require_once BASE_PROJET . '/src/_partials/footer.php';
    ?>

    <!-- End of .container -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
