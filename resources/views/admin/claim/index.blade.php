@extends('admin.app')
 

@section('body') 
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Claimed profile List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Claimed profile List</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Claimed profile List</h3>
                           
                        </div>
                    </div>
					@if($message = Session::get('success'))
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">x</button>
									<strong>{{$message}}</strong>
								</div>
								@endif
								<?php
        $Show = Session::get('Show');
        if($Show)
        {
			?>
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			 <script>
$(function() {
    $('#exampleModalCustomScrollable').modal('show');
});
</script>

		  <?php
          

        }
        ?>
                    <!-- /.card-header -->
					<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">
													<div class="row align-items-center">
														<div class="col-md-4 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
														<div class="col-md-4 my-2 my-md-0">
														<div class="input-icon">
																<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCustomScrollable">
																Claimed profile
																</button>
															</div>
														</div>
														
														
													</div>
												</div>
												
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
											<thead>
                                <tr>contact
                                    <th style="width: 10px">ID</th>
									<th>Company</th>
									<th>Name</th>
                                    <th>Email</th>
									<th>Contact</th>
                                    <th>Is Active</th>
                                    <th style="width: 130px">Created Date</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
											<tbody>
												

													 @if($UserClaim->count())
                                @foreach ($UserClaim as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->company_name }}</td>
                                        <td>{{ $post->first_name }}</td>
                                        <td>{{ $post->email }}</td>
									    <td>{{ $post->contact }}</td>
									    <td  class="text-right">
										@if(($post->is_active)==2)
																		
										<span class="label label-label-l label-light-danger label-inline">Rejected</span>
										@elseif(($post->is_active)==0)
										<span class="label label-lg label-light-warning label-inline">Pending</span>
										@elseif(($post->is_active)==1)
										<span class="label label-lg label-light-primary label-inline">Approved</span>
										@endif
										</td>
                                        
                                       
                                        <td style="width: 130px">{!! date('D, d, M, Y', strtotime($post->created_at)) !!}</td>
                                        <td class="d-flex">
                                           
                                            <a href="{{ route('claim_set', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                @else   
                                    <tr>
                                        <td colspan="6">
                                            <h5 class="text-center">No rewards found.</h5>
                                        </td>
                                    </tr>
                                @endif
													
													
												
												
												
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
					
					
                    <!-- /.card-body -->
                   
                </div>
            </div>
        </div>
		@include('admin.claim.set');
    </div>
</div>
	
@endsection
