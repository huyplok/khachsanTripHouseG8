  <?php require './views/layout/header.php'; ?>
  <!-- Navbar -->
  <?php require './views/layout/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require './views/layout/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh sách đơn đặt</h1>
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Mã đơn đặt</th>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Ngày đặt</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>PHP</td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-don-dat'?>">
                              <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </a>
                            <a href="<?= BASE_URL_ADMIN . '?act=form-sua-don-dat'?>">
                              <button class="btn btn-warning"><i class="fas fa-cogs"></i></button>
                            </a>
                          </div>

                        </td>
                      </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>STT</th>
                      <th>Mã đơn đặt</th>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Ngày đặt</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </tfoot>
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
  <!-- /.content-wrapper -->
  <!-- <footer> -->
  <?php include './views/layout/footer.php'; ?>

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  </body>

  </html>