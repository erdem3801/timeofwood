<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    Ürün listesi
                </div>
                <div class="card-body">
                <form action="<?= base_url('admin/about')  ?>" method="post" enctype="multipart/form-data">
                <textarea id="summernote" name="about_text">
                      <?= $about_text["about_text"];  ?>
              </textarea>   
              
                 <input type="submit"  class="form-control" value="kaydet">
              </form>

                </div>
            </div>
        </div>
    </div>
</div>
