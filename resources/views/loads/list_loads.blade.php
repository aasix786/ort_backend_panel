



@extends('layouts.app')
@section('title', 'ORT title')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            @section('back')
                <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                    <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                </div>

            @endsection
            <div class="row">
                <div class="col">
                    <h3 class="one"><strong>Loads</strong></h3>
                </div>
                <div class="col-auto">
                    <a  href="{{route('loads_details_edit')}}">
                    <button class="btn btn-secondary pull-right mb-2">Add New +</button>
                    </a>
                </div>
            </div>







            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of Loads</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">Load Ticket </th>
                                <th>Truck #</th>
                                <th class="d-none d-xl-table-cell">Invoice Amount</th>
                                <th>Dispatcher</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(sizeof($get_loads) > 0)
                                @foreach($get_loads as  $get_load)
                                    <tr>
                                        <td class="d-none d-xl-table-cell">#{{$get_load->load_ticket}}</td>
                                        <td class="d-none d-xl-table-cell">#{{$get_load->truck_no}}</td>
                                        <td class="d-none d-xl-table-cell">${{$get_load->invoice_amount}} </td>
                                        <td class="d-none d-xl-table-cell">{{$get_load->dispatcher_name}} </td>
                                        @if($get_load->order_status == 1)
                                            <td><span class="badge bg-danger">Order Pending</span></td>
                                        @elseif($get_load->order_status == 2)
                                            <td><span class="badge bg-warning">Order Started</span></td>
                                        @else
                                            <td><span class="badge bg-success">Order Closed</span></td>
                                            @endif

                                        <td class="d-none d-md-table-cell"><a  href="{{url('load_details/'.$get_load->id)}}">
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










