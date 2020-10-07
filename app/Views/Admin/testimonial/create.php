 <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item"><a href="<?= base_url()?>/admin/testimonial">Testimonial</a></li>
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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open_multipart('admin/testimonial/store'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="exampleInputFile">
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">&#10148; Simpan</button>
                </div>
                <?= form_close(); ?>
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>