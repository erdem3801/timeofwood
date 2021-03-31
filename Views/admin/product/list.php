 <div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-plain">
         <div class="card-header">
           Ürün listesi
         </div>
         <div class="card-body">

           <a href="<?= base_url('product/ekle') ?>" class="btn btn-fill btn-primary">Yeni ürün Ekle</a>
         </div>

         <table class="table">
           <thead>
             <tr>
 
               <th class="text-center">#</th>
               <th>URL</th>
               <th>title</th>
               <th>description</th>
               <th>dimension</th>
               <th class="text-right">price</th>
               <th class="text-right">Actions</th>
               <th>VİEW</th>
             </tr>
           </thead>
           <tbody id="sortable" data-url="<?= base_url('product/reorder');  ?>">
            
             <?php foreach ($product as $value) {   ?>

               <tr id="ord-<?= $value['product_id'];   ?>" >
                 <td class="text-center"><?= $value['product_id']; ?></td>
                 <td><?= $value['image_url']; ?></td>
                 <td><?= $value['product_title']; ?></td>
                 <td><?= $value['product_description']; ?></td>
                 <td><?= $value['product_dimension']; ?></td>

                 <td class="text-right"  ><?= $value['product_price']; ?>"></td>

                 <td class="td-actions text-right">
                   <a href="<?= base_url(); ?>/product/edit/<?= $value['product_id']; ?>" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                     <i class="tim-icons icon-settings"></i>
                   </a>
                   <a href="<?= base_url(); ?>/product/sil/<?= $value['product_id']; ?>" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                     <i class="tim-icons icon-simple-remove"></i>
                   </a>
                 </td>
                 <td> <img src="<?= base_url() . '/' . $value['image_url'];  ?>" alt="<?= $value['product_id']; ?>" sizes="50" width="50"> </td>

               </tr>
             <?php }  ?>

           </tbody>
         </table>




       </div>
     </div>
   </div>
 </div>
 </div>