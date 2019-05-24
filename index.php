<?php 
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> Delete Checkbox </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/delete_script.js"></script>
</head>
<body>
<div class="container">
	<h2>Example: Delete Multiple Rows with Checkbox using jQuery, PHP & MySQL</h2>		
	<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" cellspacing="0">
		<thead>
		  <tr>
			<th><input type="checkbox" id="select_all"></th>
			<th scope="col">ที่</th>
      		<th scope="col">เลขที่เอกสาร </th>
      		<th scope="col">วันที่</th>
      		<th scope="col">เรื่อง </th>
      		<th scope="col">เรียน </th>
      		<th scope="col">เอกสาร </th>			 
		  </tr>
	    </thead>
		<tbody>
		<?php
		$sql = "SELECT * FROM job ";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		mysqli_set_charset($conn, "utf8");
		while( $row = mysqli_fetch_assoc($resultset) ) { 
		?>
		  <tr id="<?php echo $rows["order_id"]; ?>">
			<td><input type="checkbox" class="emp_checkbox" data-emp-id="<?php echo $rows["order_id"]; ?>"></td>
			<th> <?php echo $row['order_id'] ?> </th>
      		<td> <?php echo $row['docnum'] ?> </td>
      		<td> <?php echo $row['date'] ?> </td>
      		<td> <?php echo $row['topic'] ?> </td>
      		<td> <?php echo $row['ID'] ?> </td>
      		<td> <a href="<?php echo $row['filedirec'] ?>" target="_blank"><i class="fa fa-file-text" style="font-size:20px"> </i></a> </td>		 
		  </tr>
		<?php } ?>
		</tbody>  
	</table>		
	<div class="row">
		<div class="col-md-2 well">
			<span class="rows_selected" id="select_count">0 Selected</span>
			<a type="button" id="delete_records" class="btn btn-primary pull-right">Delete</a>
		</div>
	</div>		
</div>	
<div class="insert-post-ads1" style="margin-top:20px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Responsive Header -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-1169273815439326"
		 data-ad-slot="7951723253"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49752503-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>