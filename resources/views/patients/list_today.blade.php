@extends('layouts.master')
@section('pagecss')
	<link href="{{ asset('/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
Patient List
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
								<span class="caption-subject bold uppercase">List Today</span>
							</div>
							<div class="tools"> </div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Birthdate</th>
										<th>Age</th>
										<th>Occupation</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Birthdate</th>
										<th>Age</th>
										<th>Occupation</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
									@forelse($bookings as $p)
										<tr>
											<td>{{$p->patient->fullname}}</td>
											<td>{{$p->patient->address}}</td>
											<td>{{$p->patient->birthdate}}</td>
											<td>{{$p->patient->age}}</td>
											<td>{{$p->patient->occupation}}</td>
											<td>
												<a href="/patients/{{$p->patient->id}}" class="btn btn-xs blue">Profile</a>												
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

@section('pagejs')
    <script src="{{ asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/pages/scripts/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
@endsection

@section('jscripts')
   

  
@endsection