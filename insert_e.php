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
              <form role="form" id="insertArtForm" action="email.php?fun=insert" method="post">
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
	                    <input type="email" class="form-control" id="phne_number" name="phne_number" placeholder="From Email" value="" required>
	                  </div>
                  	</div>
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="address">Address</label>
						<input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
	                  </div>
                  	</div>
				</div>
				<ol>
				
				<?php 
				for($i=1 ; $i<=25; $i++)
				{
				?>
				<li>
					<input type="checkbox" id="email_letter<?php echo $i ?>" onchange="getCount(<?php echo $i ?>)" name="email_letter<?php echo $i ?>" value="<?php echo $i ?>">
					<a href="view_email.php?sr_no=<?php echo $i ?>" target="_blank">View Email</a>
					</li>
				<?php } ?>

					</ol>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="validate" class="btn btn-primary" style="float: right;">Submit Compaign</button>
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
  });

//   $("#validate").click(function () {
//   console.log(($("#emails").val().match(/,/g)||[]).length < 5)
// });

$("#emails").keyup(function(){
    if(($("#emails").val().match(/,/g)||[]).length >=100 )
	{
	$('#emails').bind('keypress', function(e) {
    e.preventDefault(); 
});
	}else{
		$('#emails').unbind('keypress');
	}

});

var count = 0;

function getCount(id)
{
	if($('#email_letter'+id).prop("checked") == true)
	{
                console.log("Checkbox is checked.");
				count++;
	}

	else if($('#email_letter'+id).prop("checked") == false)
	{
		console.log("Checkbox is unChecked.");
		count--;
	}

	console.log(count);

		if(count > 4)
				{
					alert("maximum 10 Email letters can be seleted");
					count--;
					$('#email_letter'+id).prop("checked", false);
				}

}


</script>


