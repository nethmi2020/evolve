<?php include 'partials/header.php' ?>

<div class="container">

<h2 class="mt-5 mb-5">Product Page</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  <?php  
         foreach ($h as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td> 
            <td><?php echo $row->price;?></td>  
            <td><?php echo $row->quantity;?></td>
            <td><a href="productController/productdata/<?php echo $row->id;?>"  data-toggle="modal" data-target="#product">Product Details</a> </td>
           
            </tr>  
         <?php } ?>
         
  </tbody>
</table>
<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Name</p>
        <p>Price</p>
        <p>Available item</p>
        <p>Description</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php  
      
 include 'partials/footer.php' ?>

