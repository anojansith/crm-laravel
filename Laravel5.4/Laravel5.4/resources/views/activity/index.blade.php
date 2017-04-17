@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>List of activities</h1>
</div>
</div>

<div class="row">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Customer Name</th>
        <th>Date</th>
        <th>Type of Activity</th>
        <th>Outcome</th>
        <th>Sales Person Name</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>

<a href="{{route('activity.create')}}" class="btn btn-info pull-right">Create New Activity </a> <br>
    <?php $no=1; ?>
    <tbody>   
    @foreach($activities as $activity)
      <tr>      
        <td>{{$no++}}</td>
        <td>{{$activity->company_name}}</td>
         <td>{{$activity->date}}</td>
         <td>{{$activity->type_of_activity}}</td>         
         <td>{{$activity->outcome}}</td>  
         <td>{{$activity->sales_person_name}}</td>  
         <td>{{$activity->created_at}}</td> 
         <td>{{$activity->updated_at}}</td>  
         <td>
         <form class="" action="{{route('activity.destroy',$activity->id)}}" method="post">
		  <input type="hidden" name="_method" value="delete">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		  <a href="{{route('activity.edit',$activity->id)}}" class="btn btn-primary">Edit </a>
		  <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure  to remove this data');" name="name" value="delete">
		</form> 
 
         </td>       
      </tr>   
      @endforeach  

      {{$activities->links()}}  
    </tbody>
  </table>
</div>

@stop