@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>List of Customers</h1>
</div>
</div>

<div class="row">
<table class="table table-striped">
    <thead>
      <tr>
         <th>Number</th>
        <th>Company Name</th>
        <th>Address</th>
        <th>B.Reg No</th>
        <th>Website</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>

<a href="{{route('customer.create')}}" class="btn btn-info pull-right">Create New Customer </a> <br>
    <?php $no=1; ?>
    <tbody>   
    @foreach($customers as $customer)
      <tr>     
      <!-- <td>{{$loop->index+1}}</td>  -->
      <!-- This will count the loop, normally it starts from 0, here we need it from 1, so +1 -->
       
         <td>{{$no++}}</td>  
        <td>{{$customer->company_name}}</td>
         <td>{{$customer->address}}</td>
         <td>{{$customer->business_registration_number}}</td>
         <td>{{$customer->website}}</td> 
         <td>{{$customer->created_at}}</td> 
         <td>{{$customer->updated_at}}</td>  
         <td>
         <form class="" action="{{route('customer.destroy',$customer->id)}}" method="post">
		  <input type="hidden" name="_method" value="delete">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		  <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary">Edit </a>
		  <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure  to remove this data');" name="name" value="delete">
		</form> 
 
         </td>       
      </tr>   

      @endforeach  


      {{$customers->links()}}
<!-- The above code will create the pagination numbers automatically -->

  
    </tbody>
  </table>
</div>

@stop