@extends('layouts.master')
@section('page-title')
	Stock In
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
        <div class="col-md-12 id="enterform">

            <div class="modal fade" id="add_div" tabindex="-1" role="basic" aria-hidden="true">
                <form role="form" method="post" action="/stockin">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New Inventory</h4>
                        </div>
                        <div class="modal-body">
                            
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" required="required" class="form-control" value="{{date('Y-m-d')}}" name="date">
                                    </div>   
                                    <div class="form-group">
                                        <label>Product</label>                                      
										
										<select name="product" id="product" class="form-control" required="required">
											<option value=""></option>
											@foreach($products as $product)
												<option value="{{$product->id}}">{{$product->name}}</option>
											@endforeach
										</select>
										
                                    </div>         
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <input type="number" min="0.00" value="0.00" class="form-control" name="qty">
                                    </div>    
                                    <div class="form-group">
                                        <label>Details</label>                                        
										<textarea name="details" id="details" class="form-control" rows="3"></textarea>
										
                                    </div>                   
                                </div>                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn green">Save</button>
                        </div>
                    </div>                  
                </div>  
                </form>           
            </div>
            
            <div class="modal fade" id="update_div" tabindex="-1" role="basic" aria-hidden="true">
                <form role="form" method="post" id="update_form" action="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Update Product</h4>
                        </div>
                        <div class="modal-body">                            
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id_edit" id="id_edit">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" required="required" class="form-control input-lg" name="name_edit" id="name_edit" value="">
                                    </div>   
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <input type="text" required="required" class="form-control input-lg" name="brand_edit" id="brand_edit" value="">
                                    </div>     
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" name="cost_edit" id="cost_edit">
                                    </div>    
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" name="price_edit" id="price_edit">
                                    </div>                       
                                </div>                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" onclick="cancel_edit();">Close</button>
                            <button type="submit" class="btn green">Save changes</button>
                        </div>
                    </div>                  
                </div>
                </form>             
            </div>
           
        </div>
    </div>
    <div class="row hide">
        <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Date</th>                    
                    <th>Product</th>
                    <th>Qty</th> 
					<th>Added By</th>    
					<th>Added On</th>    
                    <th>Details</th>         
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Date"></td>
                    <td><input type="text" class="form-control" placeholder="Product"></td>
                    <td><input type="text" class="form-control" placeholder="Qty"></td>  
                    <td><input type="text" class="form-control" placeholder="Added By"></td>     
					<td><input type="text" class="form-control" placeholder="Added On"></td> 
					<td><input type="text" class="form-control" placeholder="Details"></td>               
                    <td><a class="btn btn-xs red">Remove</a></td>
                </tr>
                <tr>
				<td><input type="text" class="form-control" placeholder="Date"></td>
                    <td><input type="text" class="form-control" placeholder="Product"></td>
                    <td><input type="text" class="form-control" placeholder="Qty"></td>  
                    <td><input type="text" class="form-control" placeholder="Added By"></td>     
					<td><input type="text" class="form-control" placeholder="Added On"></td> 
					<td><input type="text" class="form-control" placeholder="Details"></td>                  
                    <td><a class="btn btn-xs red">Remove</a></td>
                </tr>
            </tbody>
        </table>
        <div><a href="#" class="btn btn-sm green">Add New</a></div>
        </div>
    </div>
    <br><br>
   
    
	<div class="row">
		<div class="col-md-12">			       
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-blue">
                        <i class="icon-settings font-blue"></i>
                        <span class="caption-subject bold uppercase"> List</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a href="javascript:void(0)" onclick="add_new();" class="btn btn-sm green">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
								<th>Date</th>                    
								<th>Product</th>
								<th>Qty</th> 
								<th>Added By</th>    
								<th>Added On</th>    
								<th>Details</th> 
                            </tr>
                        </thead>
                        @forelse($stockins as $stockin)
                            <tr id="tr_{{ $stockin->id }}">
                                <td>{{ $stockin->document_date }}</td>
                                <td>{{ $stockin->product->name }}</td>     
								<td>{{ $stockin->qty }}</td>                           
                                <td>{{ $stockin->user->name }}</td>
                                <td><small>{{ $stockin->updated_at->diffForHumans() }}</small></td>
								<td width="30%">{{ $stockin->other_details }}</td>
                                <td align="right">
                                    <a class="btn btn-xs green" href="#" onclick="maintenance_edit({{ $stockin->id }})">Edit</a>                                    
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5">No record found</td></tr>
                        @endforelse
                    </table>
                </div>
            </div>
		</div>
        
	</div>

@endsection

@section('pagejs')
    <script src="{{ asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>
@endsection

@section('jscripts')
    <script>
        var UIConfirmations = function() {

            var n = function() {
                $(".confirm").on("confirmed.bs.confirmation", function() {                   
                    
                    maintenance_delete($(this).attr('data'));

                }), 
                $(".confirm").on("canceled.bs.confirmation", function() {
                   
                })
            };
            return {
                init: function() {
                    n()
                }
            }
        }();
        jQuery(document).ready(function() {
            UIConfirmations.init()
        });
    </script>

    <script>
        function maintenance_edit(x){       
            $.ajax({
                method: "GET",
                dataType: "json",
                url: "/products/"+x            
            })
            .done(function( d ) {
                //alert(d.id);
                console.log(d);
                $('#name_edit').val(d.name);
                $('#brand_edit').val(d.brand);
                $('#cost_edit').val(d.cost);
                $('#price_edit').val(d.price);
                $('#id_edit').val(d.id);
                $('#update_form').attr('action', '/products/'+x);
                $('#update_div').modal('show');
                
            });
        }

        function cancel_edit(){
            $('#name_edit').val('');
            $('#id_edit').val('');
            $('#brand_edit').val('');
            $('#cost_edit').val('');
            $('#price_edit').val('');
            $('#update_form').attr('action', '');           
            $('#update_div').modal('hide');
        }

        function maintenance_delete(x){
            $('#form_'+x).submit();
        }

        function add_new(){          
            $('#add_div').modal('show');
        }
    </script>
@endsection