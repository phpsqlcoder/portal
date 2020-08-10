<link href="{{ asset('/assets/google.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ asset('/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

<form action="/patient/upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="counter" id="counter" value="1">
    <table class="table">
        <thead>
            <tr>
                <th>Seq</th>
                <th>File</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody id="table_div">
            <tr id="tr1">
                <td>1</td>
                <td><input type="file" name="fileToUpload1" id="fileToUpload1"></td>
                <td><input type="text" class="form-control" name="filename[1]" id="filename[1]" required="required"></td>
                <td><a href="javascript:void(0)" onclick="remove(1)" class="btn btn-xs red">Remove</a></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="patient_id"  value="{{$id}}">
    <a href="javascript:void(0)" onclick="add()" class="btn btn-xs blue">Add More</a>
    <input type="submit" value="Upload Files" name="submit" class="btn green pull-right">
</form>
.
<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Uploaded Files</h3>
      </div>
      <div class="panel-body">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>File</th>
                        <th>Uploaded</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($files as $file)
                    <tr>
                        <td>{{$file->description}}</td>
                        <td><a href="{{$file->filename}}" target="_blank">Open</a></td>
                        <td>{{$file->updated_at->diffForHumans() }}</td>
                        <td><a href="/patient/upload/delete/{{$file->id}}" class="btn btn-xs red">Delete</a></td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            
      </div>
</div>

<script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script>
function add(){
    var s = parseInt($('#counter').val()) + 1;
    $('#table_div').append('<tr id="tr'+s+'"><td>'+s+'</td><td><input type="file" name="fileToUpload'+s+'" id="fileToUpload'+s+'"></td><td><input type="text" class="form-control" name="filename['+s+']" id="filename['+s+']" required="required"></td><td><a href="javascript:void(0)" onclick="remove('+s+')" class="btn btn-xs red">Remove</a></td></tr>');
    $('#counter').val(s);
}

function remove(x){
    $('#tr'+x).remove();
}
</script>