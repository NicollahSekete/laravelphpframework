@extends('layouts.master')
@section('content') 
<div class="row">
<div class="col-md-12">
<h1>control structures</h1>
<p>Hello = {{$hello = 6}}</p>
@if($hello == 5)
<p>This only displays if hello = 5.</p>
@else
<p>This only displays if hello doesnt equal 5.</p>
@endif
<hr>
@for($i = 0; $i<5; $i++)
<p>{{$i + 1}}.Iteration</p>
@endfor
<hr>
</div>
</div>
@endsection('content') 
 