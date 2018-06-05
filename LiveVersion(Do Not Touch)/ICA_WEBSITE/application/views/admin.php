<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
<div class="row" >
<div class="col-lg-12 spacing6">
</div>
</div>
<!--content-->
<section>
<div class="spacing2"></div>    
<h1>User Accounts</h1>
<div class="spacing2"></div>
<table class="table">
 <thead>
   <tr>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Action</th>
    </tr>
   </thead>  
<?php foreach ($users->result_array() as $user): ?>
    <tr>
        <td><?=$user['email']?></td>
        <td><?=$user['role']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['surname']?></td>
        <td>
<?=form_open($form_action)?>
    <input type="hidden" name="id" value="<?=$user['id']?>"/>
<?=form_button($delete['submit'])?>
<?=form_close()?>
        </td>
    </tr>
    

<?php endforeach;?>
</table>
</div>

</section>
<!--Footer-->
