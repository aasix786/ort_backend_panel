



@extends('layouts.app')
@section('title', 'ORT title')
@section('content')
    <main class="content">
        <div class="container-fluid p-0 row">
            @section('back')
                <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                    <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                </div>

            @endsection
            <div class="row">
                <div class="col">
                    <h3 class="one"><strong>
                            DISPATCHER</strong></h3>
                </div>

                <div class="dropdown col-auto mb-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add New
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('Independent_dispatcher_details')}}">Independent Dispatcher</a>
                        <a class="dropdown-item" href="{{route('Dedicated_dispatcher_details')}}">Dedicated Dispatcher</a>
                        <a class="dropdown-item"href="{{route('Sales_dispatcher_details')}}">Sales Representative</a>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of
                                Dispatcher</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Dispatcher Type</th>
                                <th>First Name</th>
                                <th class="d-none d-xl-table-cell">Personal Email Address</th>
                                <th>Company Name</th>
                                <th>Company Phone #</th>
                                <th class="d-none d-xl-table-cell">Address</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Independent Dispatcher</td>
                                <td class="d-none d-xl-table-cell">Saim</td>
                                <td class="d-none d-xl-table-cell">saim123@gmail.com</td>
                                <td class="d-none d-xl-table-cell">The Fast Truck</td>
                                <td class="d-none d-xl-table-cell">+9528282852</td>
                                <td class="d-none d-xl-table-cell">Johar town Lahore Pakistan </td>
                                <td class="d-none d-md-table-cell"><a  href="{{route('carrier_details')}}">
                                        <button   type="button" class="btn btn-success">View details</button>
                                    </a></td>
                            </tr>

                            <tr>
                                <td>Dedicated Dispatcher</td>
                                <td class="d-none d-xl-table-cell">John</td>
                                <td class="d-none d-xl-table-cell">saim123@gmail.com</td>
                                <td class="d-none d-xl-table-cell">The Fast Truck</td>
                                <td class="d-none d-xl-table-cell">+9528282852</td>
                                <td class="d-none d-xl-table-cell">Johar town Lahore Pakistan </td>
                                <td class="d-none d-md-table-cell"><a  href="{{route('carrier_details')}}">
                                        <button   type="button" class="btn btn-success">View details</button>
                                    </a></td>
                            </tr>

                            <tr>
                                <td>Sales Representative</td>
                                <td class="d-none d-xl-table-cell">Azii</td>
                                <td class="d-none d-xl-table-cell">aziijnb@gmail.com</td>
                                <td class="d-none d-xl-table-cell">The Truck Army</td>
                                <td class="d-none d-xl-table-cell">+9528282852</td>
                                <td class="d-none d-xl-table-cell">Johar town Lahore Pakistan </td>
                                <td class="d-none d-md-table-cell"><a  href="{{route('carrier_details')}}">
                                        <button   type="button" class="btn btn-success">View details</button>
                                    </a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection










