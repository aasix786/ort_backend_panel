



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
                    <h3 class="one"><strong>Carrier</strong></h3>
                </div>
{{--                <div class="col-auto">--}}
{{--                    <button class="btn btn-secondary pull-right mb-2">Add New +</button>--}}
{{--                </div>--}}
            </div>



            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of Carrier</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Phone #</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th class="d-none d-xl-table-cell">Address</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Project Apollo</td>
                                <td class="d-none d-xl-table-cell">+920580181000</td>
                                <td class="d-none d-xl-table-cell">apollo@gmail.com</td>
                                <td class="d-none d-xl-table-cell">Johar town Lahore Pakistan </td>
                                <td class="d-none d-md-table-cell"><a  href="{{route('carrier_details')}}">
                                        <button   type="button" class="btn btn-success">View details</button>
                                    </a></td>
                            </tr>

                            <tr>
                                <td>Project Trucks</td>
                                <td class="d-none d-xl-table-cell">+920580181000</td>
                                <td class="d-none d-xl-table-cell">apollo@gmail.com</td>
                                <td class="d-none d-xl-table-cell">Johar town Lahore Pakistan </td>
                                <td class="d-none d-md-table-cell"><button type="button" class="btn btn-success">View details</button></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection










