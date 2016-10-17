

<?php include('includes/header.php'); ?>

<?php require ('includes/slider.php'); ?>

<main role="main">
    
    <!--Enluminure Coeur-->
    <section>
        <div class="row">
            <div class="col offset-s2 s8  m6 offset-l3 l8">
            <img src="images/Enluminure-COEURpng.png"  class="responsive-img" alt="Enluminure coeur">
            </div>
            <div class="col s2 m6 l1 "></div>
        </div>
    </section>
    
    <!--Collections-->
    <section>
        <div class="container">
            <div class="row">
                <!--partie écran large et tablette-->
                <div class="col s12 m12 l12  "> 
                    <div class="card horizontal hide-on-small-only"> 
                        <div class="card-stacked">
                            <div class="card-content">
                                <h4 class="header center amber-text">Mes évènements</h4>
                                <p class="p-padding amber-text">
                                    Dans cette rubrique,<br>
                                    vous trouverez tous les<br>
                                    évènements dans lesquels<br>
                                    je serais présente.
                                </p>
                            </div>
                            <div class="card-action center hover-margin">
                                <a href=""><h5>Venir à mes évènements</h5></a>
                            </div>
                        </div>
                        <div class="card-image" id="card-image-collection-height">
                            <a href="#">
                                <img src="images/collection.jpg" class="image-height" alt="collection.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <!--partie pour Mobile-->
                <div class="row hide-on-med-and-up">
                    <div class="card-image" id="">
                        <a href="events.php"><img src="images/collection.jpg" alt="events" class="responsive-img"></a>
                    </div>
                    <h4 class="center amber-text">Mes évènements</h4> 
                    <p class="amber-text center">
                        Dans cette rubrique,<br>
                        vous trouverez tous les<br>
                        évènements dans lesquels<br>
                        je serais présente.
                    </p>
                    <!--saut de ligne pour mobile-->
                    <br /><br /><br />
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <!--partie écran large et tablette-->
                <div class="col s12 m12 l12  ">
                    
                    <div class="card horizontal hide-on-small-only"> 
                        <div class="card-image" id="card-image-collection-height">
                            <a href="#">
                                <img src="images/atelier1.JPG" class="image-height" alt="collection.jpg">
                            </a>                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h4 class="header center amber-text">Mon atelier</h4>
                                <p class="p-padding amber-text">Voici mon atelier,<br>
                                    là ou la magie opère<br>
                                    et d'ou sortent de mon<br>
                                    imagination toutes les créations.
                                </p>
                            </div>
                            <div class="card-action center hover-margin">
                                <a href=""><h5>Venir à mes évènements</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--partie pour mobile-->
                <div class="row hide-on-med-and-up">
                    <div class="card-image" id="">                   
                        <a href="atelier.php"><img src="images/atelier1.JPG" class="responsive-img" alt="atelier1"></a>
                        <h4 class="center amber-text">Mon atelier</h4>
                        <p class="amber-text center">Voici mon atelier,<br>
                            là ou la magie opère<br>
                            et d'ou sortent de mon<br>
                            imagination toutes les créations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php require ('includes/footer.php'); ?>