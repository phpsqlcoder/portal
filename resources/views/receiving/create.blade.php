@extends('layouts.master')

@section('content')
<form class="form-horizontal" method="post" action="{{ route('receiving.store') }}">
	@csrf
	<div class="form-group">
		<label class="control-label col-sm-2" for="receiptno">Receipt Number *</label>
		<div class="col-sm-5">
			<input required type="text" name="receiptno" class="form-control" placeholder="Enter receipt number">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Supplier *</label>
		<div class="col-sm-5">
			<select required name="supplier" class="form-control">
				<option value="1">Supplier 1</option>
				<option value="2">Supplier 2</option>
				<option value="3">Supplier 3</option>
				<option value="4">Supplier 4</option>
				<option value="5">Supplier 5</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Items *</label>
		<div class="col-sm-5">
			<select required name="item" id="selecteditem" class="form-control">
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
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">&nbsp;</label>
		<div class="col-sm-5">
			<table class="table">
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
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
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
	                '<td><input type="text" required name="qty[]" class="form-control"></td>'+
	                '<td><button type="button" name="remove" id="'+i+'" class="btn btn-sm btn-danger btn_remove">X</button></td>'+
	            '</tr>');

	        });


	        $(document).on('click', '.btn_remove', function(){  
	           var button_id = $(this).attr("id");   
	           $('#row'+button_id+'').remove();  
	        });
	    });
	</script>
@endsection