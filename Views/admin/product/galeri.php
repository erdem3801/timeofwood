<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                
                    
                        <form action="<?= base_url("product/galeri/{$product_id}")  ?>" method="post" class="dropzone" style="margin: 20px 15px;">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>

              
                <div class="card-body all-icons">
                    <div class="row" id="galeri-view">

                        <?php if (isset($galeri_view)) {
                            foreach ($galeri_view as $view) {  ?>
                                <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <div class="font-icon-detail">
                                        <img class="card-img-top" src="<?= base_url($view['image_url']);  ?>" alt="Card image cap" style="width: 20rem;" height="200px">
                                        <a href="<?= base_url("product/galeri/sil/{$product_id}/{$view['galeri_id']}");  ?>" class="btn btn-primary">sil</a>
                                    </div>
                                </div>
                        <?php }
                        }  ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('admin-assets');  ?>/js/dropzone/dropzone.js"></script>
<script>

Dropzone.autoDiscover = false;
var myDropzone = new Dropzone('.dropzone',{
   dictDefaultMessage: "dosya yüklemek için bu alana dosyalarınızı sürükleyin yada tıklayın"
});
myDropzone.on('complete', function (param){
    let obj = JSON.parse(param.xhr.response);
    
    var $view ='';
        $view +=  '<div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">';
        $view += '<div class="font-icon-detail">';
        $view += '<img class="card-img-top" src="<?= base_url(); ?>/' + obj.data.image_url + '" alt="Card image cap" style="width: 20rem;" height="200px">';
        $view += '<a href="<?= base_url("product/galeri/sil");  ?>'+'/'+obj.data.product_id+'/'+obj.data.galeri_id+'" class="btn btn-primary">sil</a> </div> </div>';
      
     $('#galeri-view').append($view);
})


</script>