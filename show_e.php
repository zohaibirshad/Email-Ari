<?php
require_once "common/header.php";
require_once "common/aside.php";
?>
<style type="text/css">

.wrap{
white-space: nowrap;
}
</style>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ARI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Show Compaign</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
  <!--               <button type="button" class="btn btn-success swalDefaultSuccess">
                  Launch Success Toast
                </button> -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Show Compaign</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="wrap">Sr No:</th>
                  <th class="wrap">To</th>
                  <th class="wrap">Compaign Title</th>
                  <th class="wrap">Subject</th>
                  <th class="wrap">Body</th>
                  <th style='width: 20%;'>Status</th>
                </tr>
                </thead>
                <tbody id="data1">
					<tr>
						<td>1</td>
						<td>demo@gmail.com</td>
						<td>Title</td>
						<td>Hello World</td>
						<td>hi welcome to the ARI. Where you ....</td>
						<td>Sent</td>
					</tr>
					<tr>
						<td>2</td>
						<td>demo@gmail.com</td>
						<td>Title</td>
						<td>Hello World</td>
						<td>hi welcome to the ARI. Where you ....</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>3</td>
						<td>demo@gmail.com</td>
						<td>Title</td>
						<td>Hello World</td>
						<td>hi welcome to the ARI. Where you ....</td>
						<td>Sent</td>
					</tr>
					<tr>
						<td>4</td>
						<td>demo@gmail.com</td>
						<td>Title</td>
						<td>Hello World</td>
						<td>hi welcome to the ARI. Where you ....</td>
						<td>Sent</td>
					</tr>
				</tbody>
				<tfoot>
                  <th>Sr No:</th>
                  <th>To</th>
                  <th>Compaign Title</th>
                  <th>Subject</th>
                  <th>Body</th>
                  <th>Status</th>
                </tfoot>
              </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            
          </div>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	</div>
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<?php require_once "common/footer.php";?>

<script>

  $(function () {
    $('#example2').DataTable({
    });
  });
</script>