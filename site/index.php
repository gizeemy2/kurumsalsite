
<?php
$sayfa="Anasayfa";
include("include/dbctx.php");


$sorgu=$baglanti->prepare("select*from homepage");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc['tanimlama'];
$key=$sonuc['key'];
include("include/header.php");


?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?=  $sonuc["TopTitle"]?></div>
                <div class="masthead-heading text-uppercase"><?= $sonuc["UnderTitle"]?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><?= $sonuc["LinkText"]?></a>
            </div>
        </header>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">

                <?php 
               $sorgu2=$baglanti->prepare("select * from reference WHERE active=1");
               $sorgu2->execute();
               while ($sonuc2=$sorgu2->fetch()) {      
                    ?>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?=  $sonuc2["Link"]?>"><img class="img-fluid d-block mx-auto" src="assets/img/logos/<?=  $sonuc2["Photo"]?>" alt="" /></a>
                    </div>
                    <?php
               }
               ?>
                </div>
            </div>
        </div>

<?php
include("include/footer.php")
?>

 <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        
    </body>
</html>
