 
 
 


  <section id="wrapper">

    <div class="container">

      <nav data-depth="2" class="breadcrumb hidden-sm-down">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">


          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="index.html">
              <span itemprop="name">Accueil</span>
            </a>
            <meta itemprop="position" content="1">
          </li>


          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="nous-contacter.html">
              <span itemprop="name">Contactez-nous</span>
            </a>
            <meta itemprop="position" content="2">
          </li>


        </ol>
      </nav>



      <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
        <div class="contact-rich">
          <h4>Informations</h4>
          <div class="block">
            <div class="icon"><i class="material-icons">&#xE55F;</i></div>
            <div class="data">Time Of Wood<br />France</div>
          </div>
          <hr />
          <div class="block">
            <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
            <div class="data">
              Appelez-nous :<br />
              <a href="tel:06 64 03 33 43">+06 64 03 33 43 </a>
            </div>
          </div>
          <hr />
          <div class="block">
            <div class="icon"><i class="material-icons">&#xE158;</i></div>
            <div class="data email">
              Envoyez-nous un e-mail :<br />
            </div>
            <a href="mailto:timeofwood.gestion@gmail.com">timeofwood.gestion@gmail.com</a>
          </div>
        </div>

      </div>



      <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">



        <section id="main">




          <section id="content" class="page-content  card-block">


            <section class="contact-form">
              <form action="<?php echo base_url('sendmail'); ?>" method="post" enctype="multipart/form-data">


                <section class="form-fields">

                  <div class="form-group row">
                    <div class="col-md-9 col-md-offset-3">
                      <h3>Contactez-nous</h3>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Sujet</label>
                    <div class="col-md-6">
                      <select name="id_contact" class="form-control form-control-select">
                        <option value="2">Service client</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Adresse e-mail</label>
                    <div class="col-md-6">
                      <input class="form-control" name="from" type="email" value="" placeholder="votre@email.com" required="">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Document joint</label>
                    <div class="col-md-6">
                      <input type="file" name="fileUpload" class="filestyle" data-buttonText="Choisir un fichier">
                    </div>
                    <span class="col-md-3 form-control-comment">
                      optionnel
                    </span>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Message</label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="message" placeholder="Comment pouvons-nous aider ?" rows="3" required=""></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="offset-md-3">

                    </div>
                  </div>

                </section>

                <footer class="form-footer text-sm-right">
                  <style>
                    input[name=url] {
                      display: none !important;
                    }
                  </style>
                  <input type="text" name="url" value="" />
                  <input type="hidden" name="token" value="308eba8d88f8cbca1e664761adbf2179" />
                  <input class="btn btn-primary" type="submit" name="submitMessage" value="Envoyer">
                </footer>

              </form>
            </section>


          </section>



          <footer class="page-footer">

            <!-- Footer content -->

          </footer>


        </section>



      </div>



    </div>

  </section>


  </main>

  








</body>


<!-- Mirrored from www.blueriverparis.com/boutique/nous-contacter by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 09:31:04 GMT -->

</html>