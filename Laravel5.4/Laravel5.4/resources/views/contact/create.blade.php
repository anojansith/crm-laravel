@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>Create Contact</h1>
</div>
</div>

<div class="row">
<div class="col-md-12">
<form class="" action="{{route('contact.store')}}" method="post">

{{csrf_field()}}

<div class="form-group{{($errors->has('name'))?$errors->first('name'):''}}">

<input type="text" name="name" class="form-control" placeholder="Enter Customer's name here">
{!! $errors->first('name','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('email'))?$errors->first('email'):''}}">
<input type="email" name="email" class="form-control" placeholder="Enter Email here">
{!! $errors->first('email','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('contact_number'))?$errors->first('contact_number'):''}}">
<input type="number" name="contact_number" class="form-control" placeholder="Enter Contact Number Here">
{!! $errors->first('contact_number','<p class="help-block">:message</p>')!!}
</div> 
 

<div class="form-group">
<input type="submit" class="btn btn-primary" value="save">

</div>

</form> 

</div>
</div>

@stop