@extends('admin.layout.adminlayout')
@section('title','Update Contestant')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Contestant</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">Add Contestant</h2>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Add
                    <a href="{{url('admin/contestant')}}" class="float-right btn btn-sm btn-dark">All Data</a>
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
      
                      <form method="post" action="{{url('admin/contestant/'.$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Contestant Name</th>
                                <td><input type="text" name="contestant_name" value="{{$data->contestant_name}}" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Contestant Image</th>
                                <td><p class="my-2"><img width="80" src="{{asset('imgs')}}/{{$data->full_img}}" alt=""></p>
                                    <input type="file" name="full_img" class="form-control"/></td>
                                <input type="hidden" name="full_img" value="{{$data->full_img}}">
                            </tr>
                            <tr>
                                <th>Is Contestant evicted?</th>
                                <td><select class="custom-select" id="validationDefault04" name="isEvicted">
                                    @if ($data->isEvicted == 1)
                                        <option value="1">Yes</option>
                                    @else
                                        <option value="0">No</option>
                                    @endif  
                                  </select></td>
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