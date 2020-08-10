@extends('layouts.master')
@section('pagecss')
	
@endsection
@section('page-title')
Schedule Booking Today ({{date('F d, Y')}})
@endsection
@section('customcss')
<style>
	.booked {
		background-color: #B3FCA8;
	}
</style>
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
								<span class="caption-subject bold uppercase">Personnel Schedule</span>
							</div>
							<div class="tools"> Legend: 
								<span style="background-color:#B3FCA8;">&nbsp;&nbsp;Booked&nbsp;&nbsp;</span>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="200">Doctors</th>
										<th>7:00 AM</th>
										<th>7:30 AM</th>
										<th>8:00 AM</th>
										<th>8:30 AM</th>
										<th>9:00 AM</th>
										<th>9:30 AM</th>
										<th>10:00 AM</th>
										<th>10:30 AM</th>
										<th>11:00 AM</th>
										<th>11:30 AM</th>
										<th>12:00 NN</th>
										<th>12:30 NN</th>
										<th>1:00 PM</th>
										<th>1:30 PM</th>
										<th>2:00 PM</th>
										<th>2:30 PM</th>
										<th>3:00 PM</th>
										<th>3:30 PM</th>
										<th>4:00 PM</th>
										<th>4:30 PM</th>
										<th>5:00 PM</th>
										<th>5:30 PM</th>
										<th>6:00 PM</th>										
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>Dr. Cooney</td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Dr. Drentlaw</td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Dr. Melcher</td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Dr. Woody</td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Nurse Blanchett</td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
                </div>
                       
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
                <div class="portlet-body">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption font-dark">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject bold uppercase">Equipment Schedule</span>
							</div>
							<div class="tools"> Legend: 
								<span style="background-color:#B3FCA8;">&nbsp;&nbsp;Booked&nbsp;&nbsp;</span>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="200">Machines</th>
										<th>7:00 AM</th>
										<th>7:30 AM</th>
										<th>8:00 AM</th>
										<th>8:30 AM</th>
										<th>9:00 AM</th>
										<th>9:30 AM</th>
										<th>10:00 AM</th>
										<th>10:30 AM</th>
										<th>11:00 AM</th>
										<th>11:30 AM</th>
										<th>12:00 NN</th>
										<th>12:30 NN</th>
										<th>1:00 PM</th>
										<th>1:30 PM</th>
										<th>2:00 PM</th>
										<th>2:30 PM</th>
										<th>3:00 PM</th>
										<th>3:30 PM</th>
										<th>4:00 PM</th>
										<th>4:30 PM</th>
										<th>5:00 PM</th>
										<th>5:30 PM</th>
										<th>6:00 PM</th>										
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>Machine 1</td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Machine 2</td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Machine 3</td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									<tr>
										<td>Machine 4</td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="booked"></td>
										<td class="booked"></td>
										<td class="available"></td>
										<td class="available"></td>
										<td class="available"></td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
                </div>
                       
        </div>
    </div>
  	<div class="modal fade" id="available_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New Booking</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Patient Name</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
				
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Purpose</label>
				    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
				  </div>
				  
				 
				</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="booked_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Schedule</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<p>
					Patient Name: Adaline Lizaola
	        	</p>
	        	<p>
					Purpose: Facial Rejuvenation Acupuncture
	        	</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

@endsection

@section('pagejs')
	
@endsection

@section('jscripts')
<script >
$('.available').on('click',function(){
	$('#available_modal').modal('show');
});

$('.booked').on('click',function(){
	$('#booked_modal').modal('show');
});
</script>
  
@endsection