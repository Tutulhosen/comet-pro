@extends('admin.layouts.app')

@section('main-content')
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Admin User</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <div class="row">
						<div class="col-md-9">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All User</h4>
								</div>
                                @if (Session::has('success-mid'))
                                @include('validate.validate')
                                @endif

								<div class="card-body">
									<table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Cell</td>
                                                <td>Role</td>
                                                <td>Create_at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                                @forelse ($admin_user_data as $admin_user)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$admin_user->name}}</td>
                                                <td>{{$admin_user->email}}</td>
                                                <td>{{$admin_user->cell}}</td>
                                                <td>{{$admin_user->role->name}}</td>
                                                <td>{{$admin_user->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('admin.user.edit', $admin_user->id) }}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-danger delete_btn" href="{{ route('admin.user.delete', $admin_user->id) }}"><i class="fa fa-trash"></i></a>
                                                </td>
                                                @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        <p >No admin data found</p>
                                                    </td>
                                                </tr>
                                            </tr>
                                                @endforelse


                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>


						<div class="col-md-3">


                            {{-- admin user part  --}}
                            @if ($type==='add')
                            <div class="card">
								<div class="card-header">
									<h4 class="card-title">Add New User</h4>
								</div>
                                @if (Session::has('success')|| $errors->any())
                                  @include('validate.validate')
                                @endif

								<div class="card-body">


									<form action="{{route('admin.user.create')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Name</label>
											<input value="{{ old('name') }}" name="name" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Email</label>
											<input value="{{ old('email') }}" name="email" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>User Name</label>
											<input value="{{ old('username') }}" name="username" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Cell</label>
											<input value="{{ old('cell') }}" name="cell" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Password</label>
											<input name="password" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Role</label>
											<select class="form-control" name="role" id="">
                                                <option value="">--select--</option>
                                                @forelse ($role_data as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @empty
                                                <option>No Role data found</option>
                                                @endforelse
                                            </select>
										</div>



										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>


								</div>
							</div>
                            @endif


                            {{-- user edit part  --}}
                            @if ($type==='edit')
                            <div class="card">
								<div class="card-header">
									<h4 class="card-title">Edit User Data</h4>
								</div>
                                @if (Session::has('success')|| $errors->any())
                                  @include('validate.validate')
                                @endif

								<div class="card-body">


									<form action="{{route('admin.user.edit', $edit_user_data->id)}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Name</label>
											<input value="{{ $edit_user_data->name }}" name="name" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Email</label>
											<input value="{{ $edit_user_data->email }}" name="email" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>User Name</label>
											<input value="{{ $edit_user_data->username }}" name="username" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Cell</label>
											<input value="{{ $edit_user_data->cell }}" name="cell" type="text" class="form-control">
										</div>

                                        <div class="form-group">
											<label>Password</label>
											<input name="password" type="text" class="form-control">
										</div>
                                        <div class="form-group">
											<label>Role</label>
											<select class="form-control" name="role" id="">
                                                <option value="">--select--</option>
                                                @forelse ($role_data as $role)
                                                    <option @if ($role->name == $edit_user_data->role)
                                                    @endif value="{{$role->id}}">{{$role->name}}</option>
                                                @empty
                                                <option>No Role data found</option>
                                                @endforelse
                                            </select>
										</div>



										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>


								</div>
							</div>
                            @endif



						</div>
					</div>
@endsection
