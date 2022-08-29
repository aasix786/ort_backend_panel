



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
        <h1 class="h3 mb-3 px-5"><strong>Please Enter Independent Dispatcher Details</strong> </h1>


        <div class="container-fluid p-0 " >




            <form class="px-5">
                <div class="row ">
                    <div class="col-4 py-2">
                        <label>Load Commission % :</label>


                        <select name="cars" id="cars" class="form-control">
                            <option value="llc"> Dropdown</option>
                            <option value="llc"> 50%</option>
                            <option value="saab"> 55%</option>
                            <option value="opel"> 60%</option>
                            <option value="opel"> 65%</option>
                            <option value="opel"> 70%</option>
                            <option value="opel"> 75%</option>
                            <option value="opel"> 80%</option>
                            <option value="opel"> 85%</option>
                            <option value="opel"> 90%</option>
                            <option value="opel"> 95%</option>
                            <option value="opel"> 100%</option>
                        </select>
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
                        <input type="text" class="form-control" placeholder="(Street, STE, City, State, ZiP)" >
                    </div>





                </div>

                <div class="container">
                    <div class="row " >

                        <div class="w-50 mt-3">
                            <div class=" card flex-fill">
                                <div class="container">
                                    <div class="row " >



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Drivers License</h4>

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



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">National ID or Passport</h4>

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


                <h4 class="h3 mb-3 "><strong>Company Information (if applicable) </strong> </h4>

                <div class="row">
                    <div class="col py-2">
                        <label>Company Name :</label>
                        <input type="text" class="form-control" placeholder="e.g Company Name " >
                    </div>
                    <div class="col py-2">
                        <label>Company Phone #</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Type of Company :</label>


                        <select name="cars" id="cars" class="form-control">
                            <option value="llc">LLC</option>
                            <option value="saab">S Corp</option>
                            <option value="opel">C Corp</option>
                        </select>







                    </div>

                </div>

                <div class="row">
                    <div class="col py-2">
                        <label>Company Email address:</label>
                        <input type="text" class="form-control" placeholder="e.g johnwick@gmail.com" >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact Position:</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Primary Contact Name :</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>



                </div>

                <div class="row">

                    <div class="col py-2">
                        <label>Company website</label>
                        <input type="text" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Company Address</label>
                        <input type="text" class="form-control" placeholder=" (Street, STE, City, State, ZiP)" >
                    </div>


                </div>

                <div class="container">
                    <div class="row " >

                        <div class="w-50 mt-3">
                            <div class=" card flex-fill">
                                <div class="container">
                                    <div class="row " >



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Company EIN</h4>

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



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">W9</h4>

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



                                        <h4 class="col py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Bank Statements (3-6 months)</h4>

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
            </form>

        </div>



    </main>
@endsection










