<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#form_input"
                            type="button"><i class="fa fa-plus"></i> Tambah Sead Mobil</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Jumlah Kursi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1;
							foreach ($sead as $item):?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->name ?></td>
                                    <td>
                                        <button data-toggle="modal" data-target="#form_update<?= $item->car_seat_id ?>"
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
                     axios.post(`<?= base_url('admin/carsead/destroy/'.$item->car_seat_id) ?>`)
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
    <!-- Button trigger modal -->
</section>

<?php	foreach ($sead as $item){?>
<div class="modal fade" id="form_update<?= $item->car_seat_id ?>" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/carsead/update/' . $item->car_seat_id) ?>" id="formData"
                    method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="sead">Jumlah Kursi</label>
                        <input type="number" class="form-control" id="sead" name="sead"
                            value="<?= $item->name ?>" required value="<?php echo set_value('sead'); ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php }?>

<div class="modal fade" id="form_input" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/carsead/store') ?>" id="formData" method="post">
                    <div class="form-group">
                        <label for="sead">Jumlah Kursi</label>
                        <input type="number" class="form-control" id="sead" name="sead" required
                            value="<?php echo set_value('sead'); ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
