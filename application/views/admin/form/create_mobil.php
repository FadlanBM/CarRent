 <body class="hold-transition sidebar-mini">
     <div class="wrapper">
         <!-- general form elements -->
         <div class="card card-primary">
             <!-- /.card-header -->
             <!-- form start -->
             <form action="<?= base_url('admin/users/store') ?>" id="formData" method="post">
                 <div class="card-body">
                     <div class="form-group">
                         <label for="brand">Name Brand</label>
                         <input type="text" class="form-control" id="brand" name="brand"
                             placeholder="Masukan nama brand" value="<?php echo set_value('brand'); ?>">
                         <?= form_error(
                             'brand',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button><strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                     <div class="form-group">
                         <label for="plate">No Plate</label>
                         <input type="text" class="form-control" id="plate" name="plate"
                             value="<?php echo set_value('plate'); ?>" placeholder="Masukan No Plate">
                         <?= form_error(
                             'plate',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                     <div class="form-group">
                         <label for="color">Color</label>
                         <input type="text" class="form-control" id="color" name="color"
                             value="<?php echo set_value('color'); ?>" placeholder="Masukan color mobil">
                         <?= form_error(
                             'color',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                     <div class="form-group">
                         <label for="year">Tahun Rilis</label>
                         <input type="text" class="form-control" id="year" name="year"
                             value="<?php echo set_value('year'); ?>" placeholder="Masukan Tahun Rilis">
                         <?= form_error(
                             'year',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                     <div class="form-group">
                         <label for="price">Rental Price</label>
                         <input type="text" class="form-control" id="price" name="price"
                             value="<?php echo set_value('price'); ?>" placeholder="Masukan Rental Price">
                         <?= form_error(
                             'price',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>

                     <!-- select -->
                     <div class="form-group">
                         <label for="level">Status</label>
                         <select class="form-control" name="level" id="role">
                             <option value="0" <?php echo set_select('status', '0'); ?>>Di pinjam</option>
                             <option value="1" <?php echo set_select('status', '1'); ?>>Tersedia</option>
                         </select>
                         <?= form_error(
                             'role',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                     <!-- select -->
                     <div class="form-group">
                         <label for="sead">Car Seat</label>
                         <select class="form-control" name="sead" id="sead">
                             <option value="0" >2</option>                            
                         </select>
                         <?= form_error(
                             'sead',
                             '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                             '</strong> </div>',
                         ) ?>
                     </div>
                 </div>
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                     <button type="reset" id="resetButton" class="btn btn-warning"><i
                             class="fa-solid fa-arrow-rotate-right"></i> Reset</button>
                     <a href="<?= base_url('admin/mobil') ?>" class="btn btn-danger">Back</a>
                 </div>
             </form>
         </div>
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
