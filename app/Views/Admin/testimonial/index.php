<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Testimonial</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= base_url()?>/admin/testimonial/create" class="btn btn-primary btn-md">&#10010; Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no =0;

                    foreach($testimonial as $ts):
                      $no++;
                    ?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?= $ts['username'];?></td>
                      <td><?= $ts['deskripsi'];?></td>
                      <td><image src="<?= base_url("uploads/$ts[image]");?>" alt="image-ptofile" class="rounded-circle" width='80' height='80'></td>
                    </tr>
                    <?php endforeach;?>
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
    </section>
    <!-- /.content -->
  </div>