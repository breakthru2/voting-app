@extends('admin.layout.adminlayout')
@section('title','Add Category')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Prediction Category</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">Add Category</h2>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Add
                    <a href="{{url('admin/predictionCategory')}}" class="float-right btn btn-sm btn-dark">All Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
      
                      @if($errors)
                        @foreach($errors->all() as $error)
                          <p class="text-danger">{{$error}}</p>
                        @endforeach
                      @endif
      
                      @if(Session::has('success'))
                      <p class="text-success">{{session('success')}}</p>
                      @endif
      
                      <form method="post" action="{{url('admin/predictionCategory')}}" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" />
                                </td>
                            </tr>
                        </table>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection