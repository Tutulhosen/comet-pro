@extends('admin.layouts.app')

@section('main-content')
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Add Roles</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Role</h4>
                                    @if (Session::has('success-mid'))
                                    @include('validate.validate')
                                    @endif

								</div>
								<div class="card-body">
									<table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Slug</td>
                                                <td>Permission</td>
                                                <td>Created_at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($role_data as $item)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->slug}}</td>
                                                <td>

                                                    {{-- <ul>
                                                        @forelse (json_decode($item->permission)as $per)
                                                            <li>{{$per}}</li>
                                                        @empty

                                                        @endforelse
                                                    </ul> --}}
                                                </td>
                                                <td>{{$item->created_at->diffForhumans()}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href=""><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('role.destroy', $item->id) }}"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td>
                                                        <p >No role data found</p>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add New Role</h4>
								</div>
                                @if (Session::has('success')|| $errors->any())
                                @include('validate.validate')
                                @endif

								<div class="card-body">


									<form action="" method="POST">
                                        @csrf

										<div class="form-group">
											<label>Role name</label>
											<input name="name" type="text" class="form-control">
										</div>


                                        <div class="form-group">
											<label>Permissions</label>

                                            @forelse ($permission_data as $item)
                                            <label class="d-block" for="">
                                                <input name="per[]" value="{{$item->name}}" type="checkbox">
                                                {{$item->name}}
                                            </label>
                                            @empty
                                                no permission found
                                            @endforelse


										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>


								</div>
							</div>
						</div>
					</div>
@endsection
