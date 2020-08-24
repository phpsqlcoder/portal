@extends('layouts.master')

@section('content')

<h3>Create New Receiving Transaction</h3>
<br><br>
<form class="form-horizontal" method="post" action="{{ route('receiving.store') }}">
	<div class="row">
		<div class="col-md-4">
			@csrf
			<div class="form-group">
				<label class="control-label col-sm-4" for="receiptno">Receipt/Invoice no.</label>
				<div class="col-sm-8">
					<input required type="text" name="receiptno" class="form-control" placeholder="Enter receipt or invoice number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Supplier</label>
				<div class=" col-sm-8">
					<select name="supplier" id="supplier" class="form-control" style="text-transform: capitalize;">
						<option value="">Select Supplier</option>
						<option value="Medshop Philippines">Medshop Philippines</option>
						<option value="New hlink medical corporation">New hlink medical corporation</option>
						<option value="Octa-Gene Systems, Incorporated">Octa-Gene Systems, Incorporated</option>
						<option value="Botica Carsal">Botica Carsal</option>
						<option value="KMG MEDICAL SUPPLIES AND EQUIPMENT">KMG MEDICAL SUPPLIES AND EQUIPMENT</option>
						<option value="Addnew">Add New</option>
					</select>
				</div>
			</div>
			<div class="form-group" style="display:none;" id="newsup">
				<label class="control-label col-sm-4" for="pwd">New Supplier</label>
				<div class="col-sm-8">
					<input type="text" name="newsupplier" class="form-control" placeholder="Enter new supplier">
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

	        $(document).on('change', '#supplier', function(){  
	           if($(this).val() == 'Addnew'){
	           	$('#newsup').show();
	           }
	           else{
	           		$('#newsup').hide();
	           }
	        });

	        
	    });
	</script>
@endsection