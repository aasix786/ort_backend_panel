



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
                    <h3 class="one"><strong>SHIPPER</strong></h3>
                </div>
                <div class="col-auto">
                    <a  href="{{route('AddShipper')}}">
                        <button class="btn btn-secondary pull-right mb-2">Add New +</button>
                    </a>
                </div>
            </div>



            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">List of Shipper</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Company Phone #</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th class="d-none d-xl-table-cell">Address</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(sizeof($shippers) > 0)
                                @foreach($shippers as  $shipper)
                            <tr>
                                <td>{{$shipper->company_name}}</td>
                                <td class="d-none d-xl-table-cell">{{$shipper->primary_contact_number}}</td>
                                <td class="d-none d-xl-table-cell">{{$shipper->email_address}}</td>
                                <td class="d-none d-xl-table-cell">{{$shipper->company_address}} </td>
                                <td class="d-none d-md-table-cell"><a  href="{{url('shipper_detail/'.$shipper->id)}}">
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










