<footer class="page-footer font-small stylish-color-dark pt-4 dark text-white  ">
  <div class="container text-center text-md-left">
    <div class="row" style="text-align: center;">


      <div class="col-md-6 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 color-gold">
          Plans
        </h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo base_url('about'); ?>" class="text-white">A propos de nous</a>
          </li>
          <li>
            <a href="<?php echo base_url('projets'); ?>" class="text-white">Nos projets</a>
          </li>
          <li>
            <a href="<?php echo base_url('contact'); ?>" class="text-white">Contact</a>
          </li>


        </ul>
      </div>
      <div class="col-md-6 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 color-gold">
          Contact
        </h5>
        <ul class="list-unstyled">
          <li>Time Of Wood</li>
          <li>France/Paris.</li>
          <li>06 64 03 33 43 </li>

          <a class="text-white" href=" mailto:timeofwood.gestion@gmail.com">
            <li><u>timeofwood.gestion@gmail.com</u></li>
          </a>
        </ul>
      </div>
    </div>
  </div>

  <hr class="divider" />

  <div class="rounded-social-buttons mt-4">
    <p>Pour visiter notre instagram cliqué sur le logo</p>
    <a class="social-button instagram mr-12" href="https://www.instagram.com/Timeofwood1" target="_blank"><i class="fab fa-instagram"></i></a>
  </div>
  <div class="footer-copyright text-center py-3">
    © 2019 Copyright -
    <a href="index.html" class="color-gold">
      timeofwood.fr</a>
  </div>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"> </script>
<script>
  VanillaTilt.init(document.querySelectorAll(".card"), {
    max: 10,
    speed: 100,
    glare: true,
    "max-glare": 0.5,
  });

  VanillaTilt.init(document.querySelectorAll(".link-to-rea"), {
    max: 0,
    speed: 0,
    glare: true,
    "max-glare": 0.5,
  });
</script>




<script src="assetss/js/jquery-3.3.1.slim.min.js"></script>
<script src="assetss/js/popper.min.js"></script>
<script src="assetss/js/bootstrap.min.js"></script>
<script defer src="assetss/js/all.js"></script>

<script src="assetss/lib/jquery-3.5.1.min.js"></script>
<script src="assetss/src/js/jquery.swipebox.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    /* Basic Gallery */
    <?php if(isset($product)) { foreach($product as $value){  ?>

    $('#swipe<?= $value['product_id']; ?>').click(function(e) {
      e.preventDefault();
      $.swipebox([
        {
          href: '<?= $value['image_url'] ?>',
          title: '<?php if($value['ptoduct_title']=='') echo 'galeri'; else echo $value['product_title']; ?>'
        },
        <?php if(isset($galeri)) { foreach($galeri as $galeri_value) { if($galeri_value['product_id']== $value['product_id']) { ?>
        {
          href: '<?= $galeri_value['image_url'] ?>',
          title: '<?php if($value['ptoduct_title']=='') echo 'galeri'; else echo $value['product_title']; ?>'
        },
        <?php } } } ?>
      ]);
    });

    <?php } } ?>


  });
</script>
<script src="assetss/js/sweetalert2.all.min.js"></script>
<?php if (isset($mail)) {
  if ($mail == true) {
    echo
    "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Votre message a été envoyé',
  showConfirmButton: false,
  timer: 2000
})
</script>";
  } else {
    echo
    "<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Votre message n'a pas été publié',
    showConfirmButton: false,
    timer: 2000
  })
  </script>";
  }
}

?>
<!-- <script>
    var x = document.querySelector("video");
    x.duration = "50";
    console.log(x);

    window.onscroll = function() {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 3830 ||
        document.documentElement.scrollTop > 3830
      ) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script> -->

</body>

<!-- Mirrored from www.blueriverparis.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 09:29:55 GMT -->

</html>