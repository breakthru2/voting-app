@extends('admin.layout.adminlayout')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Users</h1>
                    {{-- <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item">Generic</li>
                            <li class="breadcrumb-item active" aria-current="page">Blank</li>
                        </ol>
                    </nav> --}}
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">All Users</h2>
            <p>Your content..</p>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection