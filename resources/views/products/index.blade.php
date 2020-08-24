@extends('layouts.master')

@section('page-title')
	Products
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
        <div class="col-md-12" id="enterform">

            <div class="modal fade" id="add_div" tabindex="-1" role="basic" aria-hidden="true">
                <form role="form" method="post" action="/products">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New Product</h4>
                        </div>
                        <div class="modal-body">
                            
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" required="required" class="form-control" name="name" placeholder="Enter name">
                                    </div>   
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <input type="text" required="required" class="form-control" name="brand" placeholder="Enter brand">
                                    </div>         
                                    <!-- <div class="form-group">
                                        <label>Cost</label>
                                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" name="cost">
                                    </div>   -->  
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" name="price">
                                    </div>                   
                                </div>                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn green">Save changes</button>
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
                                    <!-- <div class="form-group">
                                        <label>Cost</label>
                                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" name="cost_edit" id="cost_edit">
                                    </div>   -->  
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
                    <th>Name</th>                    
                    <th>Address</th>
                    <th>Email</th>     
                    <th>Contacts</th>         
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Name"></td>
                    <td><input type="text" class="form-control" placeholder="Address"></td>
                    <td><input type="text" class="form-control" placeholder="Email"></td>  
                    <td><input type="text" class="form-control" placeholder="Contact No"></td>                   
                    <td><a class="btn btn-xs red">Remove</a></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Name"></td>
                    <td><input type="text" class="form-control" placeholder="Address"></td>
                    <td><input type="text" class="form-control" placeholder="Email"></td>  
                    <td><input type="text" class="form-control" placeholder="Contact No"></td>                   
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Inventory</th>
                             <!--    <th style="text-align:right">Cost</th> -->
                                <th style="text-align:right">Price</th>
                             <!--    <th style="text-align:right">Percentage</th> -->
                                <th style="text-align:right">Updated</th>
                            </tr>
                        </thead>
                        @forelse($products as $product)
                            <tr id="tr_{{ $product->id }}">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->Inventory }}</td>
                            <!--     <td align="right">{{ number_format($product->cost ,2)}}</td> -->
                                <td align="right">{{ number_format($product->price,2) }}</td>
                              <!--   <td align="right">{{ $product->percentage }}</td> -->
                                <td align="right"><small>{{ $product->updated_at->diffForHumans() }}</small></td>
                                <td align="right">
                                    <a class="btn btn-xs green" href="#" onclick="maintenance_edit({{ $product->id }})">Edit</a>
                                    <form action="/products/{{ $product->id }}" id="form_{{ $product->id }}" method="POST" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-xs red confirm" data-toggle="confirmation" data="{{ $product->id }}">Delete</button>
                                    </form>
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