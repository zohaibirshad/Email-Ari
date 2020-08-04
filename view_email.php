<?php
require_once "common/header.php";

require "config/connection.php";
require "config/config.php";

$conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

$link = $conn->connect();

$qry = "select * from email_letters where sr_no =". $_GET['sr_no'];

$res = mysqli_query($link, $qry);

$data = mysqli_fetch_assoc($res);



?>
  <link rel="stylesheet" href="assets/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/css/style1.css">

<style type="text/css">

</style>
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">View Email</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body pad">
              <form role="form" id="insertArtForm" action="" onsubmit="return false" method="post">
                <div class="card-body">
				<div class="row">
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="subject">Subject: </label>
	                    <input type="text" value="<?php echo $data['subject'] ?>" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
	                  </div>
                  	</div>
				</div>
				
				<div class="row">
	              <div class="col-md-12">
	                  <div class="form-group">
	                    <label for="address">Address</label>
	               		 <textarea class="textarea" placeholder="Place some text here" 
	                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php  echo $data['body']; ?></textarea>
	                  </div>
	              </div>
				</div>

                </div>
                <!-- /.card-body -->

               
              </form>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
			</div>
		</div>
	</div>
</section>
<!-- /.card -->

</div>
<?php require_once "common/footer.php";?>
<script src="assets/summernote/summernote-bs4.min.js"></script>

