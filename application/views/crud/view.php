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
<div class="col-md-10">
<h1 class="my-4">Views
          <small>Data </small>
        </h1>

<font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>

<table class="table"> 
  <thead class="thead-dark>">
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Option</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $nomer=1;?>
    <?php
    foreach ($tmp as $key) { ?>
    <tr>
      <td <?php echo $nomer; ?></td>
      <td><?php echo $key->name; ?></td>
      <td><?php echo $key->email; ?></td>
      <td><?php echo $key->phone; ?></td>
      <td>
        <?php echo anchor('crud/edit/'.$key->id, 'Edit', 'class="badge badge-info"');  ?>
        /
        <?php echo anchor('crud/del/'.$key->id, 'Delete',array('class'=>'badge badge-danger', 'onclick'=>"return confirmDialog();"));  ?>
     </td>
    </tr>
   <?php }?>
  </tbody>
</table>
</div>

<script type="text/javascript">
function confirmDialog() {
  var x=confirm("Yakin akan di hapus?")
  if (x) {
    return true;
  } else {
    return false;
  } }
</script>