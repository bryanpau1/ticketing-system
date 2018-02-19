$(document).ready(function(){
	showTable();

	
	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var name = $('#name').val();
		if(name!=''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'adduser.php',
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

//add

	//edit
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		var name = $('#name'+id).text();
		var email = $('#email'+id).text();
		var username = $('#username'+id).text();
		var password = $('#password'+id).text();
		$('#editmem').modal('show');
		$('#ename').val(name);
		$('#eemail').val(email);
		$('#eusername').val(username);
		$('#epassword').val(password);
		$('#editbutton').val(id);
	});

	$('#editbutton').click(function(){
		var id = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'edituser.php',
			data: editForm + "&id="+id,
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
		var id = $(this).data('id');
		var name = $('#name'+id).text();
		$('#delmem').modal('show');
		$('#dname').text(name);
		$('#delbutton').val(id);
	});

	$('#delbutton').click(function(){
		var id = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'deleteuser.php',
			data: {
				id: id,
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
		url: 'fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#result').html(data);
		}
	});
}


