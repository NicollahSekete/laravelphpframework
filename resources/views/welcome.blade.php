@extends('layouts.master')
@section('content') 
<div class="row">
<div class="col-md-12">
<h1>Here i will practise basic php</h1>
<h2>if else</h2>
<p>Hello = {{$hello = 6}}</p>
@if($hello == 5)
<p>This only displays if hello = 5.</p>
@else
<p>This only displays if hello doesnt equal 5.</p>
@endif
<hr>
<h2>loops</h2>
@for($i = 0; $i<10; $i++)
<p>{{$i * 2}}.Iteration</p>
@endfor
<hr>
{{$text = "PHP"}}
<p>I love {{$text}}</p>
<hr>
<h2>switch cases</h2>
{{$color = "Red"}}
@switch ($color)
@case ("Red")
<p>the color is red</p>
@break
@default
<p>the color is green</p>
@endswitch

</div>
</div>
@endsection('content') 
 