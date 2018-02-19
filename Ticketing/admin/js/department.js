$(document).ready(function(){
	showTable();

	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var department_name = $('#department_name').val();
		if(department_name!=''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'adddepartment.php',
				data: addForm,
				success:function(){
					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
					$('#alerttext').text('Member Added Successfully');
				}
			});
		}
		else{
			alert('Please input Fields')
		}
		
	});
	//
	//edit
	$(document).on('click', '.edit', function(){
		var department_id = $(this).data('id');
		var department_name = $('#department_name'+department_id).text();
		$('#editmem').modal('show');
		$('#edepartment_name').val(department_name);
		$('#editbutton').val(department_id);
	});

	$('#editbutton').click(function(){
		var department_id = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'editdepartment.php',
			data: editForm + "&department_id="+department_id,
			success:function(){
				$('#editmem').modal('hide');
				$('#editForm')[0].reset();
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('Member Updated Successfully');
			}
		});
	});
	//
	//delete
	$(document).on('click', '.delete', function(){
		var department_id = $(this).data('id');
		var department_name = $('#department_name'+department_id).text();
		$('#delmem').modal('show');
		$('#ddepartment_name').text(department_name);
		$('#delbutton').val(department_id);
	});

	$('#delbutton').click(function(){
		var department_id = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'deletedepartment.php',
			data: {
				department_id: department_id,
			},
			success:function(){
				$('#delmem').modal('hide');
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('Member Deleted Successfully');
			}
		});
	});

});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'department-fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table1').html(data);
		}
	});
}