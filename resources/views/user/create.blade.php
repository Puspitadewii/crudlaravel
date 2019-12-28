@extends('layouts.main')

@section('content')
	<div class="row mx-auto">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="mb-0">Create user</h4>
				</div>
				<div class="card-body">
					<form action="{{ route('user.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="profile" class="col-form-label">Profile</label>
							<input type="file" class="form-control form-control-file @error('profile') is-invalid @enderror" id="profile" name="profile" accept="image/">
							@error('profile')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name" class="col-form-label">Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="email" name="name" value="{{ old('name')}}">
							@error('name')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="email" class="col-form-label">Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
							@error('email')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="address" class="col-form-label">Address</label>
							<input type="text" class="form-control @error('address') is-invalid @enderror" id="addres" name="address" value="{{ old('address')}}">
							@error('address')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="born" class="col-form-label">Born</label>
							<input type="date" class="form-control @error('hobby') is-invalid @enderror" id="born" name="born" value="{{ old('born')}}">
							@error('born')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>


						<div class="form-group">
							<label for="name" class="col-form-label">Hobby</label>
							<input type="text" class="form-control @error('hobby') is-invalid @enderror" id="hobby" name="hobby" value="{{ old('hobby')}}">
							@error('hobby')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name" class="col-form-label">Phone</label>
							<input type="text" class="form-control @error('hobby') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone')}}">
							@error('phone')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name" class="col-form-label">Password</label>
							<input type="password" class="form-control @error('hobby') is-invalid @enderror" id="password" name="password">
							@error('password')
							<span class="invalid-feedback">{{$message}}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="name" class="col-form-label">Password Confirmation</label>
							<input type="password" class="form-control"  id="password" name="password_confirmation">
							
						</div>




						<div class="w-100 clearfix mt-3 mb-3">
							<button class="float-right btn btn-info px-4 text-white" type="submit">Submit</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
@endsection