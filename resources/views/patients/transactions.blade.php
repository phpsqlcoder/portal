<link href="{{ asset('/assets/google.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ asset('/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">List</h3>
      </div>
      <div class="panel-body">
            <a class="btn green" href="/transaction/create/{{$patient}}">Add New</a>
            <table class="table table-hover">
                <thead>
                    <tr>
						<th>Reference Code</th>
                        <th>Date</th>                       
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($transactions as $t)
                    <tr>
                        <td>{{$t->refcode}}</td>
                        <td>{{date('F d, Y',strtotime($t->visit_date))}}</td>                       
                        <td>
							<a href="/transaction/view/{{$t->id}}" class="btn btn-xs green">View</a>
							<a target="_blank" href="/transaction/patient/medcert/{{$t->id}}" class="btn btn-xs purple">Print Med-cert</a>
							<a target="_blank" href="/transaction/patient/prescription/{{$t->id}}" class="btn btn-xs blue">Print Prescription</a>
							<a target="_blank" href="/transaction/patient/receipt/{{$t->id}}" class="btn btn-xs red">Print Receipt</a>
						</td>
						
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            
      </div>
</div>
