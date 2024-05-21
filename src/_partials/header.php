<?php require_once '../base.php';

// Vérifier si l'utilisateur est connecté
$pseudo_utilisateur = isset($_SESSION['pseudo_utilisateur']) ? $_SESSION['pseudo_utilisateur'] : "";
?>
<!--    Navbar-->
<header>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-sm-0 fs-2 fw-bold ps-5" href="./index.php">

                Digitals Loops</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav justify-content-end collapse navbar-collapse pe-5 " id="navbarNav">
                <ul class="navbar-nav md-5">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 pt-4 " aria-current="page" href="./index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item fs-5 pt-3">
                        <a class="nav-link" href="./produits.php">Produits</a>
                    </li>
                    <li class="nav-item fs-5 pt-3">
                        <a class="nav-link" href="./service.php">Services</a>
                    </li>
                    <li class="nav-item fs-5 pt-3">
                        <a class="nav-link" href="./notre-equipe.php">Notre équipe</a>
                    </li>
                    <a class="nav-link" href="./panier.php">
                        <button type="button" class="btn btn-dark fs-5">Panier <i class="bi bi-cart"></i></button>
                    </a>
                </ul>
                <?php
                // Affichage du bouton de connexion ou du pseudo de l'utilisateur
                if (!empty($pseudo_utilisateur)) {
                    echo '<div class="dropdown">
                          <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person"></i> ' . $pseudo_utilisateur . ' </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item text-decoration-none" href="../deconnexion.php">Déconnexion</a></li>
                          </ul>
                      </div>';
                } else {
                    echo '<form class="d-flex" role="search">
                          <button class="btn btn-dark" type="submit"><a href="../connexion.php" class="text-decoration-none text-white">Se connecter</a></button>
                      </form>';
                }
                ?>
            </div>
        </div>
    </nav>

</header>