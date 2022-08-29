



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
@section('back')
    <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
        <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
    </div>

@endsection
    <div class="container">
        <div class="picture-container">
            <div class="picture mt-3">
                <img src="{{asset('img/avatars/avatar-2.jpg')}}" class="picture-src" id="wizardPicturePreview" title="">
                <input type="file" id="wizard-picture" class="">
            </div>
            <h3 class="name">John Wick</h3>

        </div>
    </div>
    <form class="px-5">
        <div class="row">
            <div class="col py-2">
                <input type="text" class="form-control" name="first_name" placeholder="First name" readonly>
            </div>
            <div class="col py-2">
                <input type="text" class="form-control" name="last_name" placeholder="Last name" readonly>
            </div>

        </div>
        <div class="row">
            <div class="col py-2">
                <input type="text" class="form-control" name="phone_no" placeholder="Phone #" readonly>
            </div>
            <div class="col py-2">
                <input type="text" class="form-control" name="base_address" placeholder="Base Address" readonly>
            </div>

        </div>
        <div class="row">
            <div class="col py-2">
                <input type="text" class="form-control" name="license_no" placeholder="Driver License" readonly>
            </div>
            <div class="col py-2">
                <input type="text" class="form-control" name="email" placeholder="Email" readonly>
            </div>

        </div>
        <u><h1 style="margin-top: 20px;margin-bottom: 15px">Documents Of Registration</h1></u>
    </form>





    <div  class="row px-5 align-self-center">



            <div class="col-2 my-2" style="border: 1px solid black;margin-right: 10px;margin-left: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Agreement for Dispatch Services</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>


            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Company Ein</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Power of Attorney</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>

            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">W9</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Online Payment Form</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
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
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Factoring Agreement</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Upload Driver License</h6>
                <div >
                    <img style="width: 70px; display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('img/Icon_pdf_file.png')}} " class="center">
                </div>
                <a href="https://gahp.net/wp-content/uploads/2020/05/GAHP_COVID19_final_May4.pdf">
                    <h4 style="text-align: center;padding-top: 7px; border-top: 1px solid black;padding-bottom: 2px">View</h4>
                </a>

            </div>
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
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
            <div class="col-2  my-2" style="border: 1px solid black;margin-right: 10px;" >
                <h6 style="text-align: center;padding-top: 7px; border-bottom: 1px solid black;padding-bottom: 7px">Insurance Provider Information</h6>
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










