@extends('admin.layout.adminlayout')
@section('title','Prediction Category')
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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Categories
                    <a href="{{url('admin/predictionCategory/create')}}" class="float-right btn btn-sm btn-dark">Add Data</a>
                </div>
                <div class="row card-body">
                    <div class="col-md-12">
                        <div class="block-content">                     
    
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Question</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $cat)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{url('admin/predictionCategory/'.$cat->id.'/edit')}}">Update</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/predictionCategory/'.$cat->id.'/delete')}}">Delete</a>
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