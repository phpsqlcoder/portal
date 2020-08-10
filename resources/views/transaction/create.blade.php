<link href="{{ asset('/assets/google.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ asset('/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />


<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Add New Transaction </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="/transaction/store" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="patient_id" id="patient_id" value="{{$patient->id}}">
                    <div class="form-body">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" readonly="readonly" value="{{$patient->fullname}}">
                                        <span class="help-block"> {{$patient->age}} years old </span>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="date" id="date" class="form-control" value="{{date('Y-m-d')}}">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
						<div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Chief Complaint</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="chief_complaint"></textarea>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Diagnosis</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="diagnosis"></textarea>
                                        <span class="help-block"> Press Enter to add multiple diagnosis </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
							<div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Recommendation</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="recommendation"></textarea>
                                        <span class="help-block"> Press Enter to add multiple recommendations </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Remarks</label>
                                    <div class="col-md-9">
                                    <textarea class="form-control" name="remarks"></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>     
                                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <i class="icon-settings font-red-sunglo"></i>
                                            <span class="caption-subject bold uppercase"> Prescription (Existing Inventory)</span>
                                        </div>
                                        <div class="actions">
                                           
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-group">
                                            <input type="hidden" name="counter_e" id="counter_e" value="1">
                                                                            
                                            <div class="col-md-12">  
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr style="font-size:12px;color:blue;">
                                                            <th>Name</th>
                                                            <th>No. of days</th>
                                                            <th>When to take/apply</th>
                                                            <th>Qty</th>
                                                            <th>Cost</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody_e">
                                                        <tr>
                                                            <td width="30%">
                                                                <select name="medicine[1]" id="medicine1" class="form-control" onchange="apply_cost(1);">
                                                                    <option value="">- Select -</option>
                                                                    @forelse($products as $product)
                                                                        <option value="{{$product->name}}|{{$product->price}}">{{$product->name}}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </td>
                                                            <td><input type="text" class="form-control" name="days[1]" id="days[1]"></td>
                                                            <td width="30%"><input type="text" class="form-control" name="whenToTake[1]" id="whenToTake[1]"></td>
                                                            <td><input type="number" class="form-control" name="qty[1]" id="qty1" onchange="compute_cost(1)" value="1"></td>
                                                            <td><input type="number" step="0.01" min="0.00" value="0.00" class="form-control" onchange="compute_cost(1)" name="cost[1]" id="cost1"></td>
                                                            <td width="10%" align="right" id="total1">0.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td><a href="javascript:void(0)" onclick="add_e()" class="btn btn-xs blue">Add More</a></td>
                                                        </tr>                                                
                                                    </tfoot>
                                                </table>                                      
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>               
                        <div class="row">
                            <div class="col-md-8">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <i class="icon-settings font-red-sunglo"></i>
                                            <span class="caption-subject bold uppercase"> Prescription (Others)</span>
                                        </div>
                                        <div class="actions">
                                           
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-group">
                                            <input type="hidden" name="counter_o" id="counter_o" value="1">
                                                                            
                                            <div class="col-md-12">  
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr style="font-size:12px;color:blue;">
                                                            <th>Name</th>
                                                            <th>No. of days</th>
                                                            <th>When to take/apply</th>
                                                            <th>Qty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody_o">
                                                        <tr>
                                                            <td width="30%">
                                                                <input type="text" class="form-control" name="medicine_o[1]" id="medicine_o1">
                                                            </td>
                                                            <td><input type="text" class="form-control" name="days_o[1]" id="days_o[1]"></td>
                                                            <td width="30%"><input type="text" class="form-control" name="whenToTake_o[1]" id="whenToTake_o[1]"></td>
                                                            <td><input type="number" class="form-control" name="qty_o[1]" id="qty_o1" onchange="compute_cost(1)" value="1"></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td><a href="javascript:void(0)" onclick="add_o()" class="btn btn-xs blue">Add More</a></td>
                                                        </tr>                                                
                                                    </tfoot>
                                                </table>                                      
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <i class="icon-settings font-red-sunglo"></i>
                                            <span class="caption-subject bold uppercase"> Services</span>
                                        </div>
                                        <div class="actions">
                                           
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-group">
                                            <input type="hidden" name="counter_s" id="counter_s" value="1">                                                                            
                                            <div class="col-md-12">  
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr style="font-size:12px;color:blue;">
                                                            <th>Name</th>                                                    
                                                            <th>Cost</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody_s">
                                                        <tr>
                                                            <td width="70%">
                                                                <select name="service[1]" id="service1" class="form-control" onchange="apply_cost_s(1);">
                                                                    <option value="">- Select -</option>
                                                                    @forelse($services as $service)
                                                                        <option value="{{$service->name}}|{{$service->price}}">{{$service->name}}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </td>                                                    
                                                            <td><input type="number" step="0.01" min="0.00" value="0.00" class="form-control" name="cost_s[1]" id="cost_s1" onchange="total_bill();"></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td><a href="javascript:void(0)" onclick="add_s()" class="btn btn-xs blue">Add More</a></td>
                                                        </tr>                                                
                                                    </tfoot>
                                                </table>                                      
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                                     
                        
                      
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="pull-right">Total Bill: <span id="total_bill">0.00</span></h4>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>        
<textarea name="items_json" id="items_json" style="display:none;">{{ $products }}</textarea>
<textarea name="services_json" id="services_json" style="display:none;">{{ $services }}</textarea>
<script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script>
var items = $('#items_json').val();
var item_option='';
$.each(JSON.parse(items), function(key, val){
    item_option +='<option value="'+val.name+'|'+val.price+'">'+val.name+'</option>';
});   

var services = $('#services_json').val();
var service_option='';
$.each(JSON.parse(services), function(key, val){
    service_option +='<option value="'+val.name+'|'+val.price+'">'+val.name+'</option>';
});

function add_e(){
    
    var s = parseInt($('#counter_e').val()) + 1;
    $('#tbody_e').append('<tr>'+
                            '<td width="30%">'+
                                '<select name="medicine['+s+']" id="medicine'+s+'" class="form-control" onchange="apply_cost('+s+');">'+
                                    '<option value="">- Select -</option>'+item_option+                                    
                                '</select>'+
                            '</td>'+
                            '<td><input type="text" class="form-control" name="days['+s+']" id="days['+s+']"></td>'+
                            '<td width="30%"><input type="text" class="form-control" name="whenToTake['+s+']" id="whenToTake['+s+']"></td>'+
                            '<td><input type="number" class="form-control" name="qty['+s+']" id="qty'+s+'" value="1" onchange="compute_cost('+s+')"></td>'+
                            '<td><input type="number" step="0.01" min="0.00" value="0.00" class="form-control" name="cost['+s+']" onchange="compute_cost('+s+')" id="cost'+s+'"></td>'+
                            '<td width="10%" align="right" id="total'+s+'">0.00</td>'+
                        '</tr>');
    $('#counter_e').val(s);
}

function apply_cost(x){
    var c = $("#medicine"+x).find(":selected").val();
    //alert(c);
    var res = c.split("|");
    $('#cost'+x).val(res[1]);
    compute_cost(x);
}
function compute_cost(x){
    var cost = $('#cost'+x).val();
    var qty =  $('#qty'+x).val();
    $('#total'+x).html(parseFloat(cost) * parseFloat(qty));
    total_bill();
}

function add_o(){
    
    var s = parseInt($('#counter_o').val()) + 1;
    $('#tbody_o').append('<tr>'+
                            '<td width="30%">'+
                            '<input type="text" class="form-control" name="medicine_o['+s+']" id="medicine_o'+s+'">'+
                            '</td>'+
                            '<td><input type="text" class="form-control" name="days_o['+s+']" id="days_o['+s+']"></td>'+
                            '<td width="30%"><input type="text" class="form-control" name="whenToTake_o['+s+']" id="whenToTake_o['+s+']"></td>'+
                            '<td><input type="number" class="form-control" name="qty_o['+s+']" id="qty_o'+s+'" value="1"></td>'+
                        '</tr>');
    $('#counter_o').val(s);
}

function add_s(){
    
    var s = parseInt($('#counter_s').val()) + 1;
    $('#tbody_s').append('<tr>'+
                            '<td width="30%">'+
                                '<select name="service['+s+']" id="service'+s+'" class="form-control" onchange="apply_cost_s('+s+');">'+
                                    '<option value="">- Select -</option>'+service_option+                                    
                                '</select>'+
                            '</td>'+                            
                            '<td><input type="number" step="0.01" min="0.00" value="0.00" class="form-control" onchange="total_bill();" name="cost_s['+s+']" id="cost_s'+s+'"></td>'+
                        '</tr>');
    $('#counter_s').val(s);
}
function apply_cost_s(x){
    var c = $("#service"+x).find(":selected").val();
    var res = c.split("|");
    $('#cost_s'+x).val(res[1]);  
    total_bill(); 
}

function total_bill(){
    var total_bill = 0;
    var e = parseInt($('#counter_e').val());
    var s = parseInt($('#counter_s').val());
    for(x = 1; x<=e; x++){
        if($('#cost'+x).length){
            total_bill += parseFloat($('#cost'+x).val()) * parseFloat($('#qty'+x).val());
        }
    }

    for(x = 1; x<=s; x++){
        if($('#cost'+x).length){
            total_bill += parseFloat($('#cost_s'+x).val());
        }
    }

    $('#total_bill').html(total_bill.toFixed(2));
}

</script>