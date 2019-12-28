@extends('layouts.main')
@section('content')
	@if(\Session::has('success'))
	<div class="alert alert-sucsess">{{\Session::get('succses')}}</div>
	@endif
	<div class="w-100 mb-3 mt-2 clearfix">
		<a href="{{ route('user.create')}}" class="btn btn-info text-white px-4 float-right">Add User</a>
	</div>
	<div class="card">
		<div class="card-header">
			<h4 class="mb-0 float-left" >List user</h4>

		</div>
		<div class="float-left">
			<form action="{{route('user.index')}}" method="get">
				<input type="text" name="query" class="form-control" placeholder="search" value="{{ app ('request')->input('query') }}">
			</form>
		</div>
	</div>
<table class="table table-stripped table-bordered ">
		</div>
         <thead class="bg-primary text-white">
           <tr>
             <th scope="col">No</th>
             <th scope="col">Profile</th>
             
             <th scope="col">email</th>
             <th scope="col">Name</th>
             <th scope="col">Addres</th>
             <th scope="col">Phone</th>
             <th scope="col">Born</th>
              <th scope="col">Age</th>
             <th scope="col">Hobby</th>
            <th scope="col">Action</th>

             
           </tr>
         </thead>
         <tbody>
         	@foreach($users as $key => $user)
           <tr>
             <td>{{ $key + 1}}</td>
             <td>
               <img src="{{ $user->profile ? URL::to('storage/user/images/'. $user->profile): asset('images/default.png') }} " height="70px">
             </td>
             
             <td>{{ $user->email}}</td>
             <td>{{ $user->name}}</td>
             <td>{{ $user->addres}}</td>
             <td>{{ $user->phone}}</td>
             <td>{{ $user->born}}</td>
             <td>{{ \Carbon\Carbon::parse($user->born)->diffForHumans(null,true)}}</td>
             <td>{{ $user->hobby }}</td>
             <td>
               <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary btn-sm text-white">Edit</a>
               <form method="POST" action="{{ route('user.delete')}}">
                 @csrf
                  {{ method_field('DELETE') }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <button type="submit" class="btn btn-danger btn-sm text-white">Delete</button>
              </form>
             </td>
             
           </tr>
          	@endforeach
         </tbody>  
       </table>
     </div>
@endsection
