@extends('layouts.app')

@section('content')

<p>{{ session('status') }}</p>

<form method="POST" action="{{ url("import") }}" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
    <label for="file" class="control-label">CSV file to import</label>
    
    <input id="file" type="file" class="form-control" name="file" required>

    @if ($errors->has('file'))
        <span class="help-block">
        <strong>{{ $errors->first('file') }}</strong>
        </span>
    @endif
    
</div>
 
<p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>
@endsection