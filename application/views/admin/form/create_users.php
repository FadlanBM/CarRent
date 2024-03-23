 <!-- general form elements -->
 <div class="card card-primary">
     <!-- /.card-header -->
     <!-- form start -->
     <form action="<?= base_url('users/store') ?>" id="formData" method="post">
         <div class="card-body">
             <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama user"
                     value="<?php echo set_value('name'); ?>">
                 <?= form_error(
                     'name',
                     '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button><strong>',
                     '</strong> </div>',
                 ) ?>
             </div>
             <div class="form-group">
                 <label for="username">Username</label>
                 <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>"
                     placeholder="Masukan username user">
                 <?= form_error(
                     'username',
                     '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                     '</strong> </div>',
                 ) ?>
             </div>

             <div class="form-group">
                 <label for="password">Password</label>
                 <div class="input-group">
                     <input type="password" class="form-control" id="password" name="password"
                         value="<?php echo set_value('password'); ?>" placeholder="Masukan password user">
                     <div class="input-group-append">
                         <button class="btn btn-outline-secondary" type="button" id="showPasswordBtn"
                             onclick="togglePassword()">Show</button>
                     </div>
                 </div>
                 <?= form_error(
                     'password',
                     '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                     '</strong> </div>',
                 ) ?>
             </div>
             <div class="form-group">
                 <label for="confirmPassword">Password Confirm</label>
                 <div class="input-group">
                     <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                         value="<?php echo set_value('confirmPassword'); ?>" placeholder="Masukan confirm password user">
                     <div class="input-group-append">
                         <button class="btn btn-outline-secondary" type="button" id="showPasswordConfirmBtn"
                             onclick="togglePasswordConfirm()">Show</button>
                     </div>
                 </div>
                 <?= form_error(
                     'confirmPassword',
                     '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                     '</strong> </div>',
                 ) ?>
             </div>
             <!-- select -->
             <div class="form-group">
                 <label for="level">Select</label>
                 <select class="form-control" name="level" id="role">
                     <option value="0" <?php echo set_select('level', '0'); ?>>Petugas</option>
                     <option value="1" <?php echo set_select('level', '1'); ?>>Admin</option>
                 </select>
                 <?= form_error(
                     'role',
                     '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                     '</strong> </div>',
                 ) ?>
             </div>
         </div>

         <!-- /.card-body -->

         <div class="card-footer">
             <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
             <button type="reset" id="resetButton" class="btn btn-warning"><i class="fa-solid fa-arrow-rotate-right"></i> Reset</button>
             <a href="<?= base_url('users') ?>" class="btn btn-danger">Back</a>
         </div>
     </form>
 </div>
 <!-- /.card -->

 <script>
     function togglePassword() {
         var passwordInput = document.getElementById("password");
         var showPasswordBtn = document.getElementById("showPasswordBtn");

         if (passwordInput.type === "password") {
             passwordInput.type = "text";
             showPasswordBtn.textContent = "Hide";
         } else {
             passwordInput.type = "password";
             showPasswordBtn.textContent = "Show";
         }
     }

     function togglePasswordConfirm() {
         var passwordConfirmInput = document.getElementById("confirmPassword");
         var showPasswordConfirmBtn = document.getElementById("showPasswordConfirmBtn");
         if (passwordConfirmInput.type === "password") {
             passwordConfirmInput.type = "text";
             showPasswordConfirmBtn.textContent = "Hide";
         } else {
             passwordConfirmInput.type = "password";
             showPasswordConfirmBtn.textContent = "Show";
         }
     }
 </script>
