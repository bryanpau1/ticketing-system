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
				url: 'addproduct.php',
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
		var product_id = $(this).data('id');
		var product_name = $('#product_name'+product_id).text();
		$('#editmem').modal('show');
		$('#eproduct_name').val(product_name);
		$('#editbutton').val(product_id);
	});

	$('#editbutton').click(function(){
		var product_id = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'editproduct.php',
			data: editForm + "&product_id="+product_id,
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
		var product_id = $(this).data('id');
		var product_name = $('#product_name'+product_id).text();
		$('#delmem').modal('show');
		$('#dproduct_name').text(product_name);
		$('#delbutton').val(product_id);
	});

	$('#delbutton').click(function(){
		var product_id = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'deleteproduct.php',
			data: {
				product_id: product_id,
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
		url: 'product-fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}