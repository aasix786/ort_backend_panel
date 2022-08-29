



@extends('layouts.app')
@section('title', 'ORT title')
<style>
    h1 {
        text-align: center;
    }

    h2 {
        text-align: left;
    }

    h3 {
        text-align: right;
    }
    card{
        border: 5px solid black;
    }
</style>
@section('content')

    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Trucks</a>
        </li>

    </ul><!-- Tab panes -->

    <div class="tab-content">
        @section('back')
            <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 110px" >
                <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
            </div>

        @endsection
        <div class="tab-pane active mt-4" id="tabs-1" role="tabpanel">
            <h1>Carrier Information</h1>


            <form class="px-5">
                <div class="row">
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Company name" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="D/B/A (If Any)" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Mailing Address" readonly>
                    </div>

                </div>
                <div class="row">
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Main Contact" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Company Phone#" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Company Address" readonly>
                    </div>

                </div>
                <div class="row">
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="City" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="State" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="ZIP" readonly>
                    </div>

                </div>
            </form>

            <h1>Carrier Company Registration</h1>

            <form class="px-5">
                <div class="row">
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Office Phone" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Cell Phone" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Emergency Contact" readonly>
                    </div>

                </div>
                <div class="row">
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Scac Code" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Twic Certified" readonly>
                    </div>
                    <div class="col py-2">
                        <input type="text" class="form-control" placeholder="Hazmat Certified" readonly>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3 py-2">
                        <input type="text" class="form-control" placeholder="Fax" readonly>
                    </div>
                    <div class="col-3 py-2">
                        <input type="text" class="form-control" placeholder="US DOT#" readonly>
                    </div>
                    <div class="col-3 py-2">
                        <input type="text" class="form-control" placeholder="MC#" readonly>
                    </div>
                    <div class="col-3 py-2">
                        <input type="text" class="form-control" placeholder="Interstate Permit#" readonly>
                    </div>



                </div>
            </form>



            <u><h1 style="margin-top: 20px;margin-bottom: 15px">Documents Of Registration</h1></u>

            <div style="width: 100% ;">
                <div style="width: 70% ; display: flex;
   margin-left: auto;
  margin-right: auto;
    "; >
                    <div style="width: 50% ;border: 1px solid black;margin-right: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Company EIN</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>
                    <div style="width: 50% ;border: 1px solid;margin-left: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">W9</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>
                    <div style="width: 50% ;border: 1px solid;margin-left: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Insurance Information</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="http://gahp.net/wp-content/uploads/2017/09/sample.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>

                </div>
            </div>








            <u><h1 style="margin-top: 20px;margin-bottom: 15px">Areas of Operation</h1></u>

            <div  style="flex-direction: row;margin-left: auto;
  margin-right: auto;width: 90% ">
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill" style="border-radius: 5%">Callifornia</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Texas</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill ">Florida</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Virginia</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Alaska</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Hawaii</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Georgia</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Washington</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Washington</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Washington</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Washington</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Washington</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Florida</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Virginia</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Alaska</button>
                <button type="button" class="btn btn-outline-primary m-1 rounded-pill">Hawaii</button>
            </div>

            <u><h1 style="margin-top: 20px;margin-bottom: 15px">Other Attachements</h1></u>
            <div style="width: 100% ;">
                <div style="width: 90% ; display: flex;
   margin-left: auto;
  margin-right: auto;
    "; >
                    <div style="width: 50% ;border: 1px solid black;margin-right: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Dispatch Services</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>
                    <div style="width: 50% ;border: 1px solid;margin-left: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Power of Attorney</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>
                    <div style="width: 50% ;border: 1px solid;margin-left: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Online Payment Form</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="http://gahp.net/wp-content/uploads/2017/09/sample.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>

                    </div>
                    <div style="width: 50% ;border: 1px solid;margin-left: 10px;" >
                        <h4 style="text-align: center;padding-top: 10px; border-bottom: 1px solid black;padding-bottom: 10px">Factoring Agreement</h4>
                        <div >
                            <img style="width: 100px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                        </div>
                        <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                            <h4 style="text-align: center;padding-top: 10px; border-top: 1px solid black;padding-bottom: 10px">View</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tabs-2" role="tabpanel">
            <main class="content">
                <div class="container-fluid p-0">

                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                            <div class="card flex-fill">

                                <table class="table table-hover ">
                                    <thead>
                                    <tr style="font-size: 12px">
                                        <th scope="col">#</th>
                                        <th scope="col">License Plate#</th>
                                        <th scope="col">VIN#</th>
                                        <th scope="col">Max Drive Miles</th>
                                        <th scope="col">Max Deadhead Miles</th>
                                        <th scope="col">Max Load Size</th>
                                        <th scope="col">Weekly Load Revenue goal</th>
                                        <th scope="col">Truck Type</th>
                                        <th scope="col">Truck Size</th>
                                        <th scope="col">Vehicle Registration & Fitness</th>
                                        <th scope="col">Insurance Provider</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="font-size: 12px">
                                        <th scope="row">1</th>
                                        <td><span class="badge bg-success">#5424</span></td>
                                        <td><span class="badge bg-success">#524</span></td>
                                        <td>48751</td>
                                        <td>45000</td>
                                        <td>40</td>
                                        <td>$500</td>
                                        <td>Flatbed</td>
                                        <td>51</td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>

                                    </tr>

                                    <tr style="font-size: 12px">
                                        <th scope="row">2</th>
                                        <td><span class="badge bg-success">#1724</span></td>
                                        <td><span class="badge bg-success">#894</span></td>
                                        <td>5851</td>
                                        <td>7400</td>
                                        <td>38</td>
                                        <td>$480</td>
                                        <td>Flatbed</td>
                                        <td>53</td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>

                                    </tr>
                                    <tr style="font-size: 12px">
                                        <th scope="row">3</th>
                                        <td><span class="badge bg-success">#5424</span></td>
                                        <td><span class="badge bg-success">#524</span></td>
                                        <td>48751</td>
                                        <td>45000</td>
                                        <td>40</td>
                                        <td>$500</td>
                                        <td>Flatbed</td>
                                        <td>51</td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>
                                        <td><img style="width: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  ;" src="{{asset('img/Icon_pdf_file.png')}} " class="center"></td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>



            </main>
        </div>

    </div>


@endsection










