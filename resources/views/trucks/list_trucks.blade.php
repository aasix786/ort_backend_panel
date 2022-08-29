



@extends('layouts.app')
@section('title', 'ORT title')
@section('content')
    <main class="content">
        @section('back')
            <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
            </div>

        @endsection
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Trucks</strong> </h1>








            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of Trucks</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">Truck Type</th>
                                <th>License #</th>
                                <th class="d-none d-xl-table-cell">Truck Size</th>
                                <th>Max Load Size</th>
                                <th>Max Drive Miles</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(sizeof($get_trucks) > 0)
                                @foreach($get_trucks as  $get_truck)
                            <tr>
                                <td class="d-none d-xl-table-cell">{{$get_truck->truck_type}}</td>
                                <td><span class="badge bg-success">#{{$get_truck->license_no}}</span></td>
                                <td class="d-none d-xl-table-cell">{{$get_truck->truck_size}}"</td>
                                <td class="d-none d-xl-table-cell">{{$get_truck->max_load_size}}</td>
                                <td class="d-none d-xl-table-cell">{{$get_truck->max_drive_miles}} </td>
                                <td class="d-none d-md-table-cell"><a  href="{{url('trucks_details/'.$get_truck->id)}}">
                                        <button   type="button" class="btn btn-success">View details</button>
                                    </a></td>
                            </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection










