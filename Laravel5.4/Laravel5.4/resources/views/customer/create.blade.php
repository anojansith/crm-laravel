@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>Create Customer</h1>
</div>
</div>

<div class="row">
<div class="col-md-12">
<form class="" action="{{route('customer.store')}}" method="post">
{{csrf_field()}}

<div class="form-group{{($errors->has('company_name'))?$errors->first('company_name'):''}}">
<input type="text" name="company_name" class="form-control" placeholder="Enter Company name here">
{!! $errors->first('company_name','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('address'))?$errors->first('address'):''}}">
<input type="text" name="address" class="form-control" placeholder="Enter Address here">
{!! $errors->first('address','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('business_registration_number'))?$errors->first('business_registration_number'):''}}">
<input type="text" name="business_registration_number" class="form-control" placeholder="Enter Business Registration Number Here">
{!! $errors->first('business_registration_number','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('website'))?$errors->first('website'):''}}">
<input type="text" name="website" class="form-control" placeholder="Enter website here">
{!! $errors->first('website','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group">
<input type="submit" class="btn btn-primary" value="save">

</div>

</form> 

</div>
</div>

@stop