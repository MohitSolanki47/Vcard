@extends('layout/Master')

@section('MainData')
<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Card views</p>
                                        <h4>1,368</h4>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.8% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Contact saved</p>
                                        <h4>$ 32,695</h4>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> Unique users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Unique users</p>
                                        <h4>$ 32,695</h4>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                    <h4 class="card-title mb-4">Reports for Card view, Contact saved, Unique users</h4>

                    <div id="mixed-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Earning</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <p>1 Jan - 31 Jan, 2020</p>
                                <p class="mb-2">Total Earning</p>
                                <h4>$ 12,362</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">This Month</p>
                                        <h5 class="d-inline-block align-middle mb-0">$ 9,245</h5> <span
                                            class="badge badge-soft-success">+ 1.5 %</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">Last Month</p>
                                        <h5>$ 8,234</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary btn-sm">View more</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <div id="bar-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Popular Products</h4>
                    <div class="d-flex">
                        <h5 class="me-2"><i class="mdi mdi-cellphone-android text-primary me-2"></i>
                            Mobile -</h5>
                        <p class="mb-0">62 Product sold</p>
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-monitor"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Desktop</h5>
                                        <p class="text-truncate">45 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-laptop"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Laptop</h5>
                                        <p class="text-truncate">57 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-tablet-android"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Tablet</h5>
                                        <p class="text-truncate">31 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-cellphone-android"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Mobile</h5>
                                        <p class="text-truncate">62 Product sold</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

</div>
@endsection