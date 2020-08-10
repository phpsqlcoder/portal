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
    <div class="col-md-12">
        <br><br>
        <table width="100%">
            <tr><td align="center"><u>Stock Card as of {{date('F d, Y h:i A')}}</u></td></tr>
            <tr><td align="center">{{ $product->name }} ({{ $product->brand }})</td></tr>
        </table>
        <br>
        <table class="table table-condensed" style="font-size:12px;">
            <thead>
                <tr>
                    
                    <th>Date</th>  
					<th>Receiver</th>                
                    <th style="text-align: right;">Qty</th>   
                </tr>
            </thead>
            <tbody>               
                @forelse($stockins as $in)                  

                    <tr class="">
                        <td>{{ $in->document_date }}</td>
                        <td>Stock In</td>                        
                        <td align="right">{{ number_format($in->qty,2) }}</td>
                    </tr>
                @empty

                @endforelse

				@forelse($stockouts as $out)                  

                    <tr class="">
                        <td>{{ $out->header->visit_date }}</td>
                        <td>{{ $out->header->patient->fullname }}</td>                        
                        <td align="right">{{ number_format($out->qty,2) }}</td>
                    </tr>
                @empty

                @endforelse
                   
            </tbody>
        </table>
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