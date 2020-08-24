@extends('layouts.master')

@section('page-title')
	Receiving List
@endsection

@section('content')
	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <meta name="_token" content="{{ csrf_token() }}"/>
    <div class="row">
        <div class="col-md-12">
            
                <div class="portlet-body">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption font-dark">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject bold uppercase">List</span>
							</div>
							<a href="{{ route('receiving.create') }}" class="btn btn-primary" style="float:right;">Create Receiving</a>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Receipt Number</th>
										<th>Supplier</th>								
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@forelse($data as $d)
										<tr>
											<td>{{ $d->receipt_no }}</td>
											<td>{{ $d->supplier_id }}</td>	
											<td>{{ date('m-d-Y',strtotime($d->created_at)) }}</td>	
											<td>
												<button type="button" data-toggle="collapse" data-target="#receiving-items{{$d->id}}" class="btn btn-xs green">View Items</a>
											</td>
										</tr>
										<tr id="receiving-items{{$d->id}}" class="collapse">
		                                    <td colspan="4">
		                                    	<div class="col-md-12">
		                                    		<table class="table table-bordered" width="100%">
		                                        		<thead>
		                                        			<th>Name</th>
		                                        			<th>Cost</th>
		                                        			<th>Qty</th>
		                                        		</thead>
		                                        		<tbody>
		                                        			@foreach($d->items as $item)
		                                        			<tr>
		                                        				<td>{{ $item->item_detail->name }}</td>
		                                        				<td>{{ $item->cost }}</td>
		                                        				<td>{{ $item->qty }}</td>
		                                        			</tr>
					                                    	@endforeach
		                                        		</tbody>
		                                        	</table>
		                                    	</div>
		                                    </td>
		                                </tr>
									@empty

									@endforelse
									
								</tbody>
							</table>
						</div>
					</div>
                </div>
                       
        </div>
    </div>
@endsection