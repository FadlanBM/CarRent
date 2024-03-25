<section>
	  <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <a href="<?= base_url('admin/mobil/create') ?>" class="btn btn-primary btn-sm"><i
                                  class="fa fa-plus"></i> Tambah Users</a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr class="text-center">
                                      <th>No</th>
                                      <th>Nama Brand</th>
                                      <th>Plate Mobil</th>
                                      <th>Color</th>
                                      <th>Tahun Rilis</th>
                                      <th>Status</th>
                                      <th>Harga Mobile</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="text-center">
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                      </td>
                                      <td>
                                          <button data-toggle="modal" data-target="#edt_users"
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
                     axios.post(`<?= base_url('admin/users/destroy/') ?>`)
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
</section>
