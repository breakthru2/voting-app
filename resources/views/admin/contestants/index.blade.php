@extends('admin.layout.adminlayout')
@section('title','Contestants')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Contestants</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Contestants
                    <a href="{{url('admin/contestant/create')}}" class="float-right btn btn-sm btn-dark">Add Data</a>
                </div>
                <div class="row card-body">
                    <div class="col-md-12">
                        <div class="block-content">                     
    
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Contestant Name</th>
                                        <th>Image</th>
                                        <th>Is Evicted?</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $contestant)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$contestant->contestant_name}}</td>
                                        <td><img src="{{asset('imgs').'/'.$contestant->full_img}}" width="50" height="50" alt=""></td>
                                        <td>
                                            @if ($contestant->isEvicted == 0)
                                                No
                                            @else
                                                Yes
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{url('admin/contestant/'.$contestant->id.'/edit')}}">Update</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/contestant/'.$contestant->id.'/delete')}}">Delete</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection