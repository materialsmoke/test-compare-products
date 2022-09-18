@extends('admin.layout.app')
@section('content')
<div class="row">
    <h4>Categories page</h4>
</div>
<br>
<div class="row">
    <form action="{{route('admin.categories.store')}}" method="POST" class="form-inline">
        <div class="form-group mb-2">
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>
        <div class="form-group mb-2 ml-2">
            <input type="text" class="form-control" name="parent_id" placeholder="parent_id">
        </div>
        <button class="btn btn-primary mb-2 ml-2" type="submit">ADD NEW</button>
    </form>
</div>
<br>
<div class="row">
    
</div>
@endsection