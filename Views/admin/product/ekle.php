
 
      <div class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('product/ekle')?>" method="post" enctype="multipart/form-data" onchange="previewFile(this);">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-fill btn-primary">Resim Yükle</button>
                        <input type="file" class="form-control" name="image" placeholder="Başlık" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" class="form-control" name="title" placeholder="Başlık" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Açıklma</label>
                        <input type="text" class="form-control" name="description" placeholder="Açıklama" value="">
                      </div>
                    </div>
                  </div>
 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Boyut</label>
                        <input type="text" class="form-control" name="dimension" placeholder="Ölçüler" value="">
                      </div>
                    </div>
                  </div>
 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Fiyat</label>
                        <input type="text" name="price" class="form-control" placeholder="Fiyat" value="">
                      </div>
                    </div>
                  </div>

         
                  <div class="card-footer">
                     <input type="submit" name="submit" class="btn btn-fill btn-primary" value="Ekle">
                     <a href="<?php echo base_url('product')  ?>" class="btn btn-fill btn-danger">İptal</a>
                 </div>
                </form>
              </div>
            
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                 
                    <img class="avatar" src="" id="previewImg" alt="<?php echo $product['image_title'];  ?>">
                      
                  
                   
                  </div>
                </p>
                
              </div>
            
            </div>
          </div>
        </div>
      </div> 