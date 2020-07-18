<?php
require_once "common/header.php";
require_once "common/aside.php";
?>
  <link rel="stylesheet" href="assets/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/css/style1.css">

<style type="text/css">

</style>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Insert Compaign</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Insert Compaign</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">Insert Compaign</h3>

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
	                    <label for="emails">Enter "Send To" Email Addresses (comma separated, 100 max): </label>
						<div class="help-tip">
							<p>Enter Email Addresses.</p>
						</div>
	                    <input type="text" class="form-control" id="emails" name="emails" placeholder="Enter Emails" value="" required>
	                  </div>
                  	</div>
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="subject">Subject: </label>
	                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
	                  </div>
                  	</div>
				</div>
				<div class="row">
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="InputUserName">Enter Your "From" Email Address:</label>
	                    <input type="text" class="form-control" id="phne_number" name="phne_number" placeholder="From Email" value="" required>
	                  </div>
                  	</div>
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="address">Address</label>
						<input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
	                  </div>
                  	</div>
				</div>
				<div class="row">
	              <div class="col-md-12">
	                  <div class="form-group">
	                    <label for="address">Address</label>
	               		 <textarea class="textarea" placeholder="Place some text here"
	                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	                  </div>
	              </div>
				</div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="float: right;">Submit Compaign</button>
                </div>
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

<script type="text/javascript">
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>


