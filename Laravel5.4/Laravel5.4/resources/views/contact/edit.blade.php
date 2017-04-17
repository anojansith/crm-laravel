@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>Edit Contact</h1>
</div>
</div>

<div class="row">
<div class="col-md-12">

	<form class="" action="{{route('contact.update',$contact->id)}}" method="post">
	<input name="_method" type="hidden" value="PATCH">

			{{csrf_field()}}


			<div class="form-group{{($errors->has('name'))?$errors->first('name'):''}}">
			<input type="text" name="name" value="{{$contact->name}}" class="form-control" placeholder="Enter customer name here">
			{!! $errors->first('company_name','<p class="help-block">:message</p>')!!}
			</div> 

			<div class="form-group{{($errors->has('email'))?$errors->first('email'):''}}">
			<input type="email" name="email" value="{{$contact->email}}" class="form-control" placeholder="Enter Email Address here">
			{!! $errors->first('email','<p class="help-block">:message</p>')!!}
			</div> 

			<div class="form-group{{($errors->has('contact_number'))?$errors->first('contact_number'):''}}">
			<input type="number" name="contact_number" value="{{$contact->contact_number}}" class="form-control" placeholder="Enter Contact Number Here">
			{!! $errors->first('contact_number','<p class="help-block">:message</p>')!!}
			</div> 
 

			<div class="form-group">
			<input type="submit" class="btn btn-primary" value="save">

			</div>

	</form> 

</div>
</div>

@stop