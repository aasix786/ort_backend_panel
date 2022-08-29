



@extends('layouts.app')
@section('title', 'ORT title')
@section('content')

    <style>
        /*Profile Pic Start*/
        .picture-container{
            position: relative;
            cursor: pointer;
            text-align: center;
        }
        .picture{
            width: 106px;
            height: 106px;
            border: 4px solid #CCCCCC;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0px auto;
            overflow: hidden;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
            margin-top: 20px;
        }
        .picture:hover{
            border-color: #2ca8ff;
        }
        .content.ct-wizard-green .picture:hover{
            border-color: #05ae0e;
        }
        .content.ct-wizard-blue .picture:hover{
            border-color: #3472f7;
        }
        .content.ct-wizard-orange .picture:hover{
            border-color: #ff9500;
        }
        .content.ct-wizard-red .picture:hover{
            border-color: #ff3b30;
        }
        .picture input[type="file"] {
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .picture-src{
            width: 100%;

        }
        .name{
            padding-bottom: 20px;
        }
        /*Profile Pic End*/
    </style>

    <div class="container">
        @section('back')
            <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
            </div>

        @endsection

            <h3 class="name py-4 mt-3">Truck Details</h3>


    </div>
    <form action="{{url("submit-truck")}}" method="post" class="px-5">
        @csrf
        <div class="row">
            <div class="col py-2">
                <label>VIN#</label>
                <input type="text" name="vin_no" class="form-control" placeholder="#{{$truck_detail->vin_no}}" readonly>
            </div>
            <div class="col py-2">
                <label>License Plate#</label>
                <input type="text" name="license_no" class="form-control" placeholder="#{{$truck_detail->license_no}}" readonly>
            </div>
            <div class="col py-2">
                <label>Max Drive Miles</label>
                <input type="text" name="max_drive_miles" class="form-control" placeholder="{{$truck_detail->max_drive_miles}}" readonly>
            </div>
            <div class="col py-2">
                <label>Max Deadhead Miles</label>
                <input type="text" name="max_deadhead_miles" class="form-control" placeholder="{{$truck_detail->max_deadhead_miles}}" readonly>
            </div>


        </div>
        <div class="row">
            <div class="col py-2">
                <label>Max Load Size</label>
                <input type="text" name="max_load_size" class="form-control" placeholder="{{$truck_detail->max_load_size}}" readonly>
            </div>
            <div class="col py-2">
                <label>Weekly Load Revenue goal</label>
                <input type="text" name="weekly_load_revenue_goal" class="form-control" placeholder="${{$truck_detail->weekly_load_revenue_goal}}" readonly>
            </div>
            <div class="col py-2">
                <label>Truck Type</label>
                <input type="text" name="truck_type" class="form-control" placeholder="{{$truck_detail->truck_type}}" readonly>
            </div>
            <div class="col py-2">
                <label>Truck Size</label>
                <input type="text" name="truck_size" class="form-control" placeholder="{{$truck_detail->truck_size}}'" readonly>
            </div>


        </div>
        <u><h1 style="margin-top: 20px;margin-bottom: 15px">Trucks Documents </h1></u>
    </form>





    <div  class="row align-self-center">



        <div class="col-5  my-2" style="border: 1px solid black;margin-right: 10px;" >
            <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Insurance Provider</h6>
            <div >
                <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
            </div>
            <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
            </a>

        </div>

        <div class="col-5  my-2" style="border: 1px solid black;margin-right: 10px;" >
            <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Vehicle Registration & Fitness </h6>
            <div >
                <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
            </div>
            <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
            </a>

        </div>





    </div>
@endsection










