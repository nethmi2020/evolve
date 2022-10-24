<?php include 'partials/header.php' ?>

<div class="container">

<h2 class="mt-5 mb-5">Seller Page</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-5 mb-5" data-toggle="modal" data-target="#exampleModal">
  Add Seller
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Seller</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <?php echo validation_errors(); ?> -->
            <?php echo form_open('sellerController/insertSeller'); ?>
            <!-- <form action="" method="POST"> -->
                <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="exampleInputName"  name="name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"   name="email" aria-describedby="emailHelp">     
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                    
                    <div class="form-check">
                    
                    <input class="form-check-input" name="status" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Active
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" name="status" type="checkbox" value="0" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Inactive
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            <!-- </form> -->
            <?php echo form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Submit</button> -->
       
      </div>
    </div>
  </div>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td> 
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->email;?></td>
            <td><a href="productController/productdata/<?php echo $row->id;?>">Product</a> </td>
            <td><a href="<?php echo $row->id;?>" data-toggle="modal" data-target="#edit">Edit</a> </td>
            </tr>  
         <?php }  
         ?>  

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <?php echo validation_errors(); ?> -->
        <?php echo form_open('sellerController/editSeller'); ?>
            <!-- <form action="" method="POST"> -->
                <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="exampleInputName"  name="name" value=<?php foreach ($h->result() as $row) {$row->name;} ?>>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"   name="email" aria-describedby="emailHelp">     
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                    
                    <div class="form-check">
                    
                    <input class="form-check-input" name="status" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Active
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" name="status" type="checkbox" value="0" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Inactive
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            <!-- </form> -->
            <?php echo form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </tbody>
</table>
</div>
<?php  
      
 include 'partials/footer.php' ?>