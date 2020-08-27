@extends('layouts.master')

@section('content')

<h3>Create New Issuance</h3>
<br><br>
<form class="form-horizontal" method="post" action="{{ route('issuance.store') }}">
	<div class="row">
		<div class="col-md-4">
			@csrf
			<div class="form-group">
				<label class="control-label col-sm-4" for="receiptno">Date*</label>
				<div class="col-sm-8">
					<input required type="date" name="issuance_date" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Type*</label>
				<div class=" col-sm-8">
					<select required name="type" class="form-control" style="text-transform: capitalize;">
						<option value="">Select Type</option>
						<option value="personal">Personal</option>
						<option value="office">Office</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Status*</label>
				<div class=" col-sm-8">
					<select required name="status" class="form-control" style="text-transform: capitalize;">
						<option value="">Select Status</option>
						<option value="saved">Saved</option>
						<option value="posted">Posted</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-4" for="receiptno">Purpose*</label>
				<div class="col-sm-8">
					<textarea required name="purpose" class="form-control" rows="5"></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Items</label>
				<div class="col-sm-6">
					<select name="item" id="selecteditem" class="form-control">
						<option value="">Select Item</option>
						@foreach($items as $item)
						<option value="{{ $item->id }}|{{ $item->name }}|{{ $item->cost }}">{{ $item->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-sm-2">
		            <div class="form-group d-flex justify-content-end mg-t-25">
		                <label class="d-block">&nbsp;</label>
		                <button type="button" class="btn btn-info btn-sm" id="addItems">+</button>
		            </div>
		        </div>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="form-group">
				<label class="control-label" for="pwd">&nbsp;</label>
				<div>
					<table class="table table-striped">
						<thead>
							<th width="50%">Name</th>
							<th width="20%">Price</th>
							<th width="20%">Qty</th>
							<th width="10%"></th>
						</thead>
						<tbody id="items_tbl"></tbody>
					</table>
				</div>
			</div>
			<div class="form-group">
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>
	

	
</form>
@endsection

@section('pagejs')
	<script>
	    $(document).ready(function(){

	        var i = 0;  

	        $('#addItems').click(function(){

	        	var item = $('#selecteditem').val();
	        	var x = item.split('|');
	           	i++;  

	            $('#items_tbl').append('<tr id="row'+i+'" class="dynamic-added">'+
	                '<td><input type="hidden" name="itemid[]" value="'+x[0]+'">'+x[1]+'</td>'+
	                '<td><input type="hidden" name="cost[]" value="'+x[2]+'">'+x[2]+'</td>'+
	                '<td><input type="text" required name="qty[]" value="1" min="1" class="form-control"></td>'+
	                '<td><button type="button" name="remove" id="'+i+'" class="btn btn-sm btn-danger btn_remove">X</button></td>'+
	            '</tr>');

	        });


	        $(document).on('click', '.btn_remove', function(){  
	           var button_id = $(this).attr("id");   
	           $('#row'+button_id+'').remove();  
	        });

	        // $(document).on('change', '#supplier', function(){  
	        //    if($(this).val() == 'Addnew'){
	        //    	$('#newsup').show();
	        //    }
	        //    else{
	        //    		$('#newsup').hide();
	        //    }
	        // });

	        
	    });
	</script>
@endsection