<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php //include("content/head.php") ?>
        <title>Boutique</title>
        <link rel="stylesheet" href="./assets/css/boutique.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- CSS slider -->
        <link href="assets/css/slider.css" rel="stylesheet">
    </head>
    <body>
        <?php include("content/navbar.php") ?>
        
        <main role="main" class="container">
            <!-- Page Content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <h4 class="my-3">Boutique BDE</h4>
                        <div class="list-group">
                            <!-- Trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">Trier par...</button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Choisissez vos filtres :</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    
                                        <div class="modal-body">
                                            <form>

                                                <!-- Slider min max Prix-->
                                                <div id="rangeBox">
                                                    <!-- Partie gauche puis droite du slider -->    
                                                    <div id="sliderBox">
                                                        <input type="range" id="slider0to50" class="custom-range" step="1" min="0" max="50">
                                                        <input type="range" id="slider51to100" class="custom-range" step="1" min="50" max="100">
                                                    </div>
                                                    <!-- Box value min et max du slider -->
                                                    <div id="inputRange">
                                                        <input type="number" step="1" min="0" max="50" placeholder="Min €" id="min" >
                                                        <input type="number" step="1" min="51" max="100" placeholder="Max €" id="max">
                                                    </div>
                                                </div>

                                                <!-- Checkboxs des catégories -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="CP" required>
                                                    <label class="custom-control-label" for="CP">Textile</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="CP" required>
                                                    <label class="custom-control-label" for="CP">Accessoires</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="CP" required>
                                                    <label class="custom-control-label" for="CP">Alcool</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="CP" required>
                                                    <label class="custom-control-label" for="CP">Avions</label>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                    <button type="button" class="btn btn-primary">Valider</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </main>

        <?php include("content/foot.php") ?>
    </body>
    <script src="content/rangeValue.js"></script>
</html>
