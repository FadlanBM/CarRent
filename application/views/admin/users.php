  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <a href="<?= base_url('admin/users/create') ?>" class="btn btn-primary btn-sm"><i
                                  class="fa fa-plus"></i> Tambah Users</a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr class="text-center">
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Username</th>
                                      <th>Level</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $no=1;
							foreach ($users as $item):?>
                                  <tr class="text-center">
                                      <td><?= $no++ ?></td>
                                      <td><?= $item->name ?></td>
                                      <td><?= $item->username ?></td>
                                      <td><?= $item->level == 1 ? 'Admin' : ($item->level == 0 ? 'Petugas' : 'Tidak diketahui') ?>
                                      </td>
                                      <td>
                                          <button data-toggle="modal" data-target="#edt_users<?= $item->user_id ?>"
                                              class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                                              Update</button>
                                          <a x-data="{ tooltip: 'Delete' }" href="#" class="btn btn-danger btn-sm"
                                              x-on:click.prevent="
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Tindakan ini tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Delete data!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                     axios.post(`<?= base_url('admin/users/destroy/' . $item->user_id) ?>`)
                         .then((response) => {
                        Swal.fire(
                            'Success!',
                            'Delete data successfully.',
                            'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                    })
                    .catch((error) => {
                        Swal.fire(
                            'Fail!',
                            'An error occurred while deleting account.',
                            'error'
                        );
                    });
                }
            });
        "><i
                                                  class="fa fa-trash"></i>
                                              Hapus</a>
                                      </td>
                                  </tr>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- Modal -->
      <?php	foreach ($users as $item){?>
      <div class="modal fade" id="edt_users<?= $item->user_id ?>" data-backdrop="static" data-keyboard="false"
          tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Edit Users</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="<?= base_url('admin/users/update/' . $item->user_id) ?>" id="formData"
                          method="post">
                          <input type="hidden" name="_method" value="PUT">
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" required
                                      placeholder="Masukan nama user" value="<?= $item->name ?>">
                                  <?= form_error(
                                      'name',
                                      '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button><strong>',
                                      '</strong> </div>',
                                  ) ?>
                              </div>
                              <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" required
                                      placeholder="Masukan username user" value="<?= $item->username ?>">
                                  <?= form_error(
                                      'username',
                                      '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                                      '</strong> </div>',
                                  ) ?>
                              </div>
                              <!-- select -->
                              <div class="form-group">
                                  <label for="level">Select</label>
                                  <select class="form-control" name="level" id="role">
                                      <option value="0" <?php echo $item->level == '0' ? 'selected' : ''; ?>>Petugas</option>
                                      <option value="1" <?php echo $item->level == '1' ? 'selected' : ''; ?>>Admin</option>
                                  </select>
                                  <?= form_error(
                                      'role',
                                      '<div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close"
                         type="button">&times;</button> <strong>',
                                      '</strong> </div>',
                                  ) ?>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <a id="resetButton" class="btn btn-danger text-white" x-data="{ tooltip: 'Reset' }"
                                  x-on:click.prevent="
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Tindakan ini tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Reset Password!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                     axios.post(`<?= base_url('admin/users/resetPass/' . $item->user_id) ?>`)
                         .then((response) => {
                        Swal.fire(
                            'Success!',
                            'Delete data successfully.',
                            'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                    })
                    .catch((error) => {
                        Swal.fire(
                            'Fail!',
                            'An error occurred while deleting account.',
                            'error'
                        );
                    });
                }
            });
        "><i
                                      class="fa-solid fa-arrow-rotate-right"></i> Reset Password</a>
                              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                  Submit</button>
                              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Back</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <?php }?>
  </section>
