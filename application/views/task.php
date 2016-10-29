<html>
<head>
	<title>Task</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		padding-top: 30px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="row">

		<form id="frm-simpan">
			<label> Task </label>
		
			<input type="text" name="task" maxlength="35"></input></br>
			<button type="submit"> Simpan </button>
		</form>
		<br/>
		<table border="1" class="table" style="width: 60%">
			<thead>
				<tr>
					<td>List</td>
					<td>Tanggal</td>
					<td>Jam</td>
				</tr>
			</thead>
		<tbody id="bd-table">
		<?php 
		foreach ($task as $row) {
		echo "<tr>";
			echo "<td>".$row['task']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".$row['time']."</td>";
		echo "</tr>";
	}
		</tbody>
</body>
</html>
