@extends('admin.layouts.app')

@section('main-content')
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Add Permission</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Basic Form</h4>
								</div>
								<div class="card-body">
									<table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Slug</td>
                                                <td>Created_at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Slider</td>
                                                <td>Slider</td>
                                                <td>10min ago</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href=""><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add New Permission</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Permission name</label>
											<input type="text" class="form-control">
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
