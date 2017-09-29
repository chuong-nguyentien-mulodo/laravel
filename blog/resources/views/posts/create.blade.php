@extends('layouts.master')
@section('content')

<div class="col-sm-8 blog-main">
<form method="post" action="/posts">
<div class="form-group">
  <label for="ttle">Title</label>
  <input type="text" class="form-control" id="title" name="title"  >
</div>
<div class="form-group">
  <label for="body">Body</label>
  <textarea id="body" name="body" class="form-control" ></textarea>
</div>
<button type="submit" class="btn btn-default">Publish</button>
@include('layouts.errors')
</form>

</div>
@endsection
