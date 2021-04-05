<div class="background_final b-bottom-gold ">
  <a href="<?= base_url('about'); ?> " class="link-to-rea">
    <h1 class="main-title text-white text-uppercase font-weight-bold">
      Explorez
    </h1>
  </a>
</div>

<!-- <section class="background-2 d-flex justify-content-center align-items-center">
            <a href="realisations.html">
                <h1 class="main-title text-white text-uppercase font-weight-bold">Explorez</h1>
            </a>
        </section> -->

<div class="container-fluid dark">
  <div class="container">
    <h2 class="text-center text-white pb-5">
     Nos réalisations
    </h2>
    <h3 class="text-center text-white pb-5">
    Cliquez sur le produit qui vous intéresse
    </h3>
    <div class="row">
    <?php if(isset($product)){ foreach($product as $value){  ?>
  <!-- resim baslanıç -->
  <div class="col-md-3">
          <div class="gfg">
            <div class="card">
              <div class="content">
              <a  id="swipe<?= $value['product_id']; ?>" title="Time of wood" rel="gallery" class="thumbnail product-thumbnail" href="#">
                <img class="card-img-top" src="<?php echo base_url($value['image_url']);  ?>" height="160" width="640" style="object-fit: scale-down;">
              </a>
                <div class="card-body">
                
                <h5 class="card-text text-center font-weight-bold pt-1"><?php echo $value['product_title']; ?> </h5>
                  <p class="card-text  pt-1"><?php echo $value['product_description']; ?></p>
                  
                
                  <p class="card-text  ">Dimensions: <spanclass="font-weight-bold"> <?php echo $value['product_dimension']; ?> </span></p>
                  <p class="card-text  ">Prix : <a href="<?= base_url('contact')?>" class="font-weight-bold price"><?php echo $value['product_price']; ?></a></p>
                </div>
              </div>
            </div>
          </div> 
      </div>
      <!-- resim bitiş --> 
<?php } }  ?>

  
    </div>
  </div>
</div>



<div class="container mw-large">
  <div class="row">
    <div class="col-lg-8 how-img d-flex align-items-center">
      <img src="images\yellowbluetable.png" class="img-fluid" alt="background atelier" />
    </div>
    <div class="col-lg-4">
      <h4 class="card-title color-gold text-uppercase font-weight-bold title-xs-top">
        Sur-mesure
      </h4>
      <p class="lead text-dark">
        Toutes les formes et couleurs sont possibles pour le bois
        et la résine epoxy. Contactez-nous pour nous faire part de vos
        envies.
      </p>
    </div>
  </div>
  <hr class="gradient-divider" />
</div>


<div class="container">
  <div class="row">
    <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
      <i class="fa fa-truck fa-4x"></i>
      <div class="informations">
        <p class="text-center text-uppercase font-weight-bold pt-4">
          Livraison
        </p>
        <p class="text-center color-gold font-weight-bold">offerte</p>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center flex-column align-items-center">
      <img class="img-fluid homemade" src="assets/images/icones/hammer.png" alt="marteau" />
      <div class="informations">
        <p class="text-center text-uppercase font-weight-bold pt-4">
          Conception
        </p>
        <p class="text-center color-gold font-weight-bold">sur-mesure</p>
      </div>
    </div>
   
  </div>
</div>