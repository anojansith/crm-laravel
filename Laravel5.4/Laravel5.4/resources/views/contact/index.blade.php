@extends('master')
@section('content')
<div class="row">
<div class="col-md-12">
<h1>List of Contacts</h1>
</div>
</div>

<div class="row">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>

<a href="{{route('contact.create')}}" class="btn btn-info pull-right">Create New Contact </a> <br>
    <?php $no=1; ?>
    <tbody>   
    @foreach($contacts as $contact)
      <tr>      
        <td>{{$no++}}</td>
        <td>{{$contact->name}}</td>
         <td>{{$contact->email}}</td>
         <td>{{$contact->contact_number}}</td>         
         <td>{{$contact->created_at}}</td> 
         <td>{{$contact->updated_at}}</td>  
         <td>
         <form class="" action="{{route('contact.destroy',$contact->id)}}" method="post">
		  <input type="hidden" name="_method" value="delete">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		  <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-primary">Edit </a>
		  <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure  to remove this data');" name="name" value="delete">
		</form> 
 
         </td>       
      </tr>   
      @endforeach    

       {{$contacts->links()}}
<!-- The above code will create the pagination numbers automatically -->
    </tbody>
  </table>
</div>

@stop