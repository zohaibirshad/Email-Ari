<?php
require_once "common/header.php";
require_once "common/aside.php";


require_once "config/connection.php";
require_once "config/config.php";

$conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$link = $conn->connect();



	$qry = "select * from campaign where is_completed=0 and in_progress=1";

    $res = mysqli_query($link, $qry);


    $qry1 = "select * from campaign where is_completed=1 and in_progress=0";

    $res1 = mysqli_query($link, $qry1);




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
              <li class="breadcrumb-item active">Show Campaign </li>
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
            <h3 class="card-title">Show Compaign Currently Running</h3>

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
                  <th class="wrap">Item No:</th>
                  <th class="wrap">from</th>
                  <th class="wrap">Compaign Title</th>
                  <th class="wrap">Start Date</th>
                  <th class="wrap">End Date</th>
                  <th class="wrap">Email Letters</th>
                  <th classwrap>Days</th>
                  <th style='width: 20%;'>Status</th>
                  <th class="wrap">Action</th>
 
                </tr>
                </thead>
                <tbody id="data1">
				<?php $i=1; while($row = mysqli_fetch_assoc($res)){ ?>
        	<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row['from_email_address'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['start_date'] ?></td>
						<td><?php echo $row['end_date'] ?></td>
            <td><?php echo count(explode(",",$row['completed_email_letters']))."/".count(explode(",",$row['email_letters'])) ?></td>

<td>
<?php 
$now = time('Y-m-d'); // or your date as well
$your_date = strtotime($row['end_date']);
$datediff =$your_date - $now;


$day = round($datediff / (60 * 60 * 24));


if($day < 0)
{
  $day = -1 * $day;
}

if($day < 10)
{
  echo $day."/10";
}else{
  echo "10/10";

}

?>
</td>

						<td>In Progress</td>

            <td>
            <a href="javascript0:" onclick="delete_cmp(<?php echo $row['id'] ?>);">Delete<a/>
            </td>

					</tr>
        <?php $i++; } ?>
				</tbody>
				<tfoot>
                  <th>Item No:</th>
                  <th>To</th>
                  <th>Compaign Title</th>
                  <th>Subject</th>
                  <th>Body</th>
                   <th class="wrap">Email Letters</th>
                  <th>Status</th>
                  <th style='width: 20%;'>Status</th>
                  <th class="wrap">Action</th>
 
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





     
      <!-- /.modal -->

<?php require_once "common/footer.php";?>

<script>

  $(function () {
    $('#example2').DataTable({
    });
  });


  $(function () {
    $('#example3').DataTable({
    });
  });

  
  function delete_cmp(id)
  {
    // alert();
    var result = window.confirm('Are you sure you want to Delete Campaign?');
    if (result == false) {
        event.preventDefault();
    } else {
  
            $.ajax({
                type: 'Post',
                data: {'id': id},
                url: 'delete_campaign.php',
                success: function (response) {
                    // $('#example2').dataTable().fnDestroy();
                    // $('#data1').empty();
                    // $('#data1').html(response);
                    // $('#example2').DataTable();
                    location.reload();
                              },
            });
          }         
  }

</script>