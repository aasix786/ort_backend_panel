



@extends('layouts.app')
@section('title', 'ORT title')

@section('content')
<style>


</style>
    <form class="content" action="{{url("submit-shipper")}}" method="post">
        @csrf

        <div class="container-fluid p-0">


            @section('back')
                <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                    <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                </div>

            @endsection

            <div class="px-5">
                <h1 class="h3 mb-3"><strong>Please Enter Details</strong> </h1>
                <div class="row">
                    <div class="col py-2">
                        <label>Company Name :</label>
                        <input type="text" class="form-control" name="company_name" placeholder="e.g Company Name " >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact Name</label>
                        <input type="text" class="form-control" name="primary_contact_name" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Type of Company :</label>


                        <select name="company_type" id="cars" class="form-control">
                            <option value="llc">LLC</option>
                            <option value="saab">S Corp</option>
                            <option value="opel">C Corp</option>
                        </select>







                </div>

                </div>

                <div class="row">
                    <div class="col py-2">
                        <label>Email address:</label>
                        <input type="text" class="form-control" name="email_address" placeholder="e.g johnwick@gmail.com" >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact Position:</label>
                        <input type="text" class="form-control" name="primary_contact_position" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact Number :</label>
                        <input type="text" class="form-control" name="primary_contact_number" placeholder="" >
                    </div>



                </div>

                <div class="row">

                    <div class="col py-2">
                        <label>Company website</label>
                        <input type="text" class="form-control" name="company_website" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Company Address</label>
                        <input type="text" class="form-control" name="company_address" placeholder=" (Street, STE, City, State, ZiP)" >
                    </div>


                </div>

                <div class="container">
                    <div class="row " >

                        <div class="w-50 mt-3">
                            <div class=" card flex-fill">
                                <div class="container">
                                    <div class="row " >



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">EIN verified to IRS</h4>

                                    </div>
                                    <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                                        <div class="card-body">
                                            <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>
                                            <input type="file" id="myfile" name="myfile">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="w-50 mt-3">
                            <div class=" card flex-fill">
                                <div class="container">
                                    <div class="row " >



                                        <h4 class="col py-2" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Upload screenshot of IRS info verification</h4>

                                    </div>
                                    <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                                        <div class="card-body">
                                            <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row " >

                <div class="w-50 mt-3">
                    <div class=" card flex-fill">
                        <div class="container">
                            <div class="row " >



                                <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Company EIN (attachment required)</h4>

                            </div>
                            <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                                <div class="card-body">
                                    <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>
                                    <input type="file" id="myfile" name="myfile">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-50 mt-3">
                    <div class=" card flex-fill">
                        <div class="container">
                            <div class="row " >



                                <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">W9 (attachment required)</h4>

                            </div>
                            <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                                <div class="card-body">
                                    <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                </div>
                </div>

                <button type="submit" class="btn btn-success  mb-2 float-end">Submit</button>

            </div>

        </div>



    </form>
@endsection










