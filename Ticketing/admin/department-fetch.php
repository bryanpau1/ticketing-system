<?php
	include('conn.php');
	if(isset($_POST['fetch'])){
		?>
		<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<th style="padding-right: 100px;">Department</th >
				<th style="text-align: center;">Action</th>
			
			</thead>
			<tbody>
			<?php
				$query=$conn->query("select * from `department`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="department_name<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></span></td>
						<td align="center">
							<a style="cursor:pointer;" class="btn btn-info  edit" data-id="<?php echo $row['department_id']; ?>"><span class="glyphicon glyphicon-edit"></span></a> || 
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['department_id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
		<?php
	}
?>


