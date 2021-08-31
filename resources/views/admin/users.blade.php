@extends('admin.layout.adminlayout')
@section('title','Users')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Users</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">All Users</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="block-content">
                        <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>Product</th>
                                    <th class="d-none d-xl-table-cell">Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell text-right" style="width: 120px;">Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone 11 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $1199,99
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">MacBook Pro 15"</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $2.299,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nvidia GTX 2080 Ti</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $1200,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Playstation 4 Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $399,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nintendo Switch</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $349,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone 11</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $999,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Airpods Pro</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $39,99
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Xbox One X</span>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right font-w500">
                                        $499,00
                                    </td>
                                    <td class="text-center text-nowrap font-w500">
                                        <a href="javascript:void(0)">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection