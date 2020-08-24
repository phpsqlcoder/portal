@extends('layouts.report')

@section('pagecss')   
    <style>       
        @page {
          size: auto;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <br>
        <div class="text-center"><h5>Receiving</h5></div><br>
        <div class="row">
            <div class="col-md-12">
                <form>
                <table width="100%" style="font-size:12px;font-family:Arial;">
                    <tr>
                        <td>Start: <input type="date" name="startdate" class="form-control input-sm " value="{{ request('startdate') }}"></td>
                        <td>End: <input type="date" name="enddate" class="form-control input-sm " value="{{ request('enddate') }}"></td>                        
                        <td><br><input type="submit" value="Generate" class="btn btn-md btn-success"></td>
                    </tr>
                </table>
                </form>
               
            </div>
        </div>
        <br><br>
        @if(isset($rs))
            <div class="row row-sm">
                <!-- Start Filters -->
                <div class="col-md-12">
                    <table id="example" class="display nowrap" style="width:100%;font: normal 13px/150% Arial, sans-serif, Helvetica;">
                        <thead>
                        <tr>
                            <th>Transaction Number</th>
                            <th>Item Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($rs as $r)
                            <tr style="text-align: left">
                                <td>{{ $r->receiving_detail->receipt_no }}</td>
                                <td>{{ $r->item_detail->name }}</td>
                                <td>{{ $r->qty }}</td>
                                <td>{{ $r->cost }}</td>
                                <td>{{ date('m-d-Y h:i A',strtotime($r->created_at)) }}</td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>   
@endsection

@section('customjs')
    <script src="{{ asset('js/datatables/Buttons-1.6.1/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                pageLength: 20,
                buttons: [
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [ {
                    targets: [],
                    visible: false
                } ]
            } );
        } );
    </script>
@endsection



