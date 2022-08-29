



@extends('layouts.app')
@section('title', 'ORT title')

@section('content')
<style>


</style>
    <main class="content">
        @section('back')
            <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
            </div>

        @endsection
        <h1 class="h3 mb-3 px-5"><strong>Please Enter Dedicated Dispatcher Details</strong> </h1>


        <div class="container-fluid p-0 " >




            <form class="px-5">
                <div class="row ">
                    <div class="col py-2">
                        <label>Load Commission % :</label>


                        <select name="cars" id="cars" class="form-control">
                            <option value="llc"> Dropdown</option>
                            <option value="llc"> 5%</option>
                            <option value="saab"> 10%</option>
                            <option value="opel"> 15%</option>
                            <option value="opel"> 20%</option>
                            <option value="opel"> 25%</option>
                            <option value="opel"> 30%</option>
                            <option value="opel"> 35%</option>
                            <option value="opel"> 40%</option>

                        </select>
                    </div>



                    <div class="col py-2">
                        <label>Flat Rate:</label>
                        <input type="text" class="form-control" placeholder="$0.00" >
                    </div>




                </div>

                <h4 class="h3 mb-3 "><strong>Personal Information </strong> </h4>

                <div class="row">
                    <div class="col py-2">
                        <label>First Name:</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact #</label>
                        <input type="text" class="form-control" placeholder=" " >
                    </div>

                    <div class="col py-2">
                        <label>Personal Email Address</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>






                </div>

                <div class="row">
                    <div class="col py-2">
                        <label>Home Address :</label>
                        <input type="text" class="form-control" placeholder="(Street, STE, City, State, ZiP or your country)" >
                    </div>





                </div>




                <h4 class="h3 mb-3 "><strong>Banking Information </strong> </h4>

                <div class="row">
                    <div class="col py-2">
                        <label>Bank  Name :</label>
                        <input type="text" class="form-control" placeholder="e.g Bank  Name " >
                    </div>
                    <div class="col py-2">
                        <label>Bank Account #</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>

                    <div class="col py-2">
                        <label>Routing #</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col py-2">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                       <strong> <label for="vehicle1"> For Bank account outside of US, please provide Wire transfer information:</label></strong>
                    </div>



                </div>

                <div class="row">


                    <div class="col-4 py-2">
                        <label>Wire transfer</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>


                </div>
                <h4 class="h3 mb-3 "><strong>Other </strong> </h4>
                <div class="container">
                    <div class="row " >

                        <div class="w-50 mt-3">
                            <div class=" card flex-fill">
                                <div class="container">
                                    <div class="row " >



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Dispatch Course Certification</h4>

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



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Proof of Address - mail within 30 days</h4>

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



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Resume</h4>

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

            </form>

        </div>



    </main>
@endsection










