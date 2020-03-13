<div class="col-md-10">

        <h1 class="my-4">Add
          <small>Data </small>
        </h1>

  <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
  <?php echo form_open('crud/add',''); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo form_error('name', '<div class="text-danger"><small>', '</small></div>');?>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
    <?php echo form_error('phone', '<div class="text-danger"><small>', '</small></div>');?>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</div>