@extends('admin.app')
 

@section('body') 
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Announcement</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('announcement.index') }}">Announcement list</a></li>
                    <li class="breadcrumb-item active">Edit Announcement</li>
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
                            <h3 class="card-title">Edit Announcement - {{ $Announcement->title }}</h3>
                            <a href="{{ route('announcement.index') }}" class="btn btn-primary">Go Back to Announcement List</a>
                        </div>
                    </div>
					         @if($message = Session::get('success'))
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">x</button>
									<strong>{{$message}}</strong>
								</div>
								@endif
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="{{ route('announcement.update', [$Announcement->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf 
                                        @method('PUT')
                                        @if ($errors->any())
    <div class="alert alert-danger mt-3 mb-3">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                        <div class="form-group">
                                            <label for="title">Announcement title</label>
                                            <input type="name" name="title" value="{{ $Announcement->title }}" class="form-control" placeholder="Enter title">
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset($Announcement->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
											<textarea name="description" id="kt-ckeditor-1" rows="4" class="form-control"
                                                >{{ $Announcement->description }}</textarea>	
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Announcement</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerlink') 
   <script src={{asset("../../theme/html/demo1/dist/assets/plugins/custom/ckeditor/ckeditor-classic.bundle5883.js?v=7.2.9")}}></script>
   <script src={{asset("../../theme/html/demo1/dist/assets/js/pages/crud/forms/editors/ckeditor-classic5883.js?v=7.2.9")}}></script>
@endsection