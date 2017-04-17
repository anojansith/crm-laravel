@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>Create activity</h1>
</div>
</div>

<div class="row">
<div class="col-md-12">
<form class="" action="{{route('activity.store')}}" method="post">

{{csrf_field()}}

<div class="form-group{{($errors->has('company_name'))?$errors->first('company_name'):''}}">
<input type="text" name="company_name" class="form-control" placeholder="Enter Customer's name here">
{!! $errors->first('company_name','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('date'))?$errors->first('date'):''}}">
<input type="date" name="date" class="form-control" placeholder="Enter Date here">
{!! $errors->first('date','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('type_of_activity'))?$errors->first('type_of_activity'):''}}">
<!-- <input type="text" name="type_of_activity" class="form-control" placeholder="Type of activity">
 -->
<select class="form-control" name="type_of_activity">
  <option value="call">Call</option>
  <option value="email">Email</option>
  <option value="meeting">Meeting</option>   
</select>

{!! $errors->first('type_of_activity','<p class="help-block">:message</p>')!!}
</div> 
 
<div class="form-group{{($errors->has('outcome'))?$errors->first('outcome'):''}}">
<input type="text" name="outcome" class="form-control" placeholder="Outcome">
{!! $errors->first('outcome','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group{{($errors->has('sales_person_name'))?$errors->first('sales_person_name'):''}}">
<input type="text" name="sales_person_name" class="form-control" placeholder="Sales Person Name">
{!! $errors->first('sales_person_name','<p class="help-block">:message</p>')!!}
</div> 

<div class="form-group">
<input type="submit" class="btn btn-primary" value="save">

</div>

</form> 

</div>
</div>

@stop