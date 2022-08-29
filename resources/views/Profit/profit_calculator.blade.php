



@extends('layouts.app')
@section('title', 'ORT title')

@section('content')
    <style>
        table, th, td {
            border:1px solid black;
        }







        /*
 * Always set the map height explicitly to define the size of the div element
 * that contains the map.
 */
        #map {
            height: 100%;
        }

        /*
         * Optional: Makes the sample page fill the window.
         */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }
    </style>
    <main class="content">
        <div class="container-fluid p-0">

            <form action="{{url("submit-load")}}" method="post" class="px-5">
                @csrf
                @section('back')
                    <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                        <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                    </div>

                @endsection
                <h1 class="h3 mb-3"><strong>DEAL BREAKER CALCULATOR</strong> </h1>
                <table class="m-2">
                <tr>
                    <th class="col-12"><strong>Market Ave. Rate per Mile$</strong></th>
                </tr>
<tr>
                    <td> <input type="text" id="ave_rpm" name="invoice_amount" class="form-control rpm_change" placeholder="$0.00" ></td>
                    </tr>
                </table>
<div class="head p-1 bg-warning text-dark">

    <h1 class="h3 text-center " ><strong>Trip</strong> </h1>

</div>


                    <div class="row" >
                        <div class="col-4">
                            <form>
                                <div class="form-group row py-3">
                                    <label for="staticEmail" class="col">Pickup</label>

                                </div>
                                <div class="form-group row py-3">
                                    <label for="inputPassword" class="col">Dropoff</label>

                                </div>
                                <div class="form-group row py-2">
                                    <label for="inputPassword" class="col">Results-Miles & Distance</label>

                                </div>
                                <div class="form-group row py-3">
                                    <label for="inputPassword" class="col">Days(11hrs Drive time)</label>
                                </div>
                                <div class="form-group row py-2">
                                    <label for="inputPassword" class="col">Deadhead</label>
                                </div>

                            </form>
                        </div>
                        <div class="col">
                            <form>
                                <div class="form-group row">

                                    <div class="col py-2">
                                        <input type="text" class="form-control controls" id="pac-input" placeholder="Search Box">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col py-2">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col py-2">
                                        <input type="text" class="form-control rpm_change" id="total_miles" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col py-2">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col py-2">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                            </form>
                        </div>



                <div class="head p-1 bg-warning text-dark">

                    <h1 class="h3 text-center " ><strong>PROFITABILITY</strong> </h1>

                </div>

                        <table >
                            <tr>
                                <th></th>
                                <th> </th>
                                <th>OFFERS</th>
                                <th> </th>
                                <th>FINAL</th>
                                <th> </th>
                            </tr>
                            <tr>

                                <td> </td>
                                <td>$</td>
                                <td>$</td>
                                <td> </td>
                                <td>$</td>
                                <td> </td>
                            </tr>

                            <tr>

                                <td>Load</td>
                                <td></td>
                                <td> <input type="text" id="offer" name="offer_amount" class="form-control rpm_change gross_change" placeholder="$0.00" ></td>
                                <td> </td>
                                <td> <input type="text" id="final_price" name="invoice_amount" class="form-control" placeholder="$0.00" ></td>
                                <td> </td>
                            </tr>

                            <tr>

                                <td><strong>Adjust for:</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>

                                <td>Fuel</td>
                                <td><input type="text" id="fuel" name="fuel_amount" class="form-control" placeholder="$0.00" ></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>

                                <td>Toll Fees</td>
                                <td><input type="text" id="toll" name="toll_amount" class="form-control" placeholder="$0.00" ></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>

                                <td>Deadhead(Market Ave x DH Miles)</td>
                                <td><input type="text" id="deadhead" name="deadhead_amount" class="form-control" placeholder="$0.00" ></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>

                                <td>Other</td>
                                <td><input type="text" id="other" name="other_amount" class="form-control" placeholder="$0.00" ></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>

                                <td><strong>LESS: Cost to Make Sale (COS)</strong></td>
                                <td></td>
                                <td> <span id="total" class="gross_change"></span> </td>
                                <td> <span id="total_perc" class="text-center text-danger"></span></td>
                                <td><span id="final"></span></td>
                                <td> <span id="final_offer" class="text-center text-danger"></span></td>

                            </tr>
                            <tr>

                                <td><strong>Gross Profit</strong></td>
                                <td></td>
                                <td> <span id="gross"></span></td>
                                <td> <span id="net_gross" class="text-center text-danger"></span></td>
                                <td> <span id="gross_final"></span></td>
                                <td> <span id="gross_final_percentage" class="text-center text-danger"></span></td>

                            </tr>








                        </table>



                <div class="head p-1 bg-warning text-dark ">

                    <h1 class="h3 text-center " ><strong>NEGOTIATE</strong> </h1>

                </div>


                        <table >
                            <tr>
                                <th>COUNTER</th>
                                <th>Offer </th>
                                <th>Proposed Increase</th>
                                <th> </th>
                                <th>Adjusted Offer</th>
                                <th> </th>
                                <th>Rate Per Mile </th>
                                <th>Profit/(Loss) </th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>$ </th>
                                <th>$</th>
                                <th> </th>
                                <th>$</th>
                                <th> </th>
                                <th>$</th>
                                <th>$</th>
                            </tr>

                            <tr>

                                <th>1</th>
                                <th><span id="offer_count"></span> </th>
                                <th><input  type="text" class="form-control rpm_change" id="counter_1" placeholder=""></th>
                                <th><span class="text-center text-danger" id="counter_1_percentage"></span> </th>
                                <th><span id="adjust_count_1"></span></th>
                                <th> </th>
                                <th><span id="counter_1_rpm"></span> </th>
                                <th><span id="counter_1_pl"></span> </th>
                                <th><span class="text-center text-danger" id="counter_1_pl_perc"></span> </th>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>


                            <tr>

                                <th>2</th>
                                <th><span id="offer_count_2"></span> </th>
                                <th><input type="text" class="form-control rpm_change" id="counter_2" placeholder=""></th>
                                <th><span class="text-center text-danger" id="counter_2_percentage" ></span> </th>
                                <th><span id="adjust_count_2"></span></th>
                                <th> </th>
                                <th> <span id="counter_2_rpm"></span> </th>
                                <th><span id="counter_2_pl"></span> </th>
                                <th><span class="text-center text-danger" id="counter_2_pl_perc"></span> </th>
                            </tr>





                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>


                            <tr>

                                <th>3</th>
                                <th><span id="offer_count_3"></span> </th>
                                <th><input type="text" class="form-control rpm_change" id="counter_3" placeholder=""></th>
                                <th><span class="text-center text-danger" id="counter_3_percentage"></span> </th>
                                <th><span id="adjust_count_3"></span></th>
                                <th> </th>
                                <th><span id="counter_3_rpm"></span> </th>
                                <th><span id="counter_3_pl"></span> </th>
                                <th><span class="text-center text-danger" id="counter_3_pl_perc"></span> </th>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>

                                <th>4</th>
                                <th><span id="offer_count_4"></span> </th>
                                <th><input type="text" class="form-control rpm_change" id="counter_4" placeholder=""></th>
                                <th><span class="text-center text-danger " id="counter_4_percentage"></span> </th>
                                <th><span id="adjust_count_4"></span></th>
                                <th> </th>
                                <th><span id="counter_4_rpm"></span> </th>
                                <th><span id="counter_4_pl"></span> </th>
                                <th><span class="text-center text-danger" id="counter_4_pl_perc"></span></th>
                            </tr>


                        </table>






                    </div>


                <button type="submit" class="btn btn-success  mb-2 float-end mt-2">Submit</button>



    </main>

@push('script')


    <script>

    </script>


    <script>
        $(document).ready(function (){
            $("#fuel, #toll,#deadhead,#other").keyup(function (){
                var total=0;
                var x = Number($("#fuel").val());
                var y = Number($("#toll").val());
                var z = Number($("#deadhead").val());
                var a = Number($("#other").val());
                var offer = Number($("#offer").val());
                if(x & y ){
                    var total= x + y + z + a;
                    $('#total').html(total)
                    $('#gross').html(offer-total)
                }
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#fuel, #toll,#deadhead,#other").keyup(function (){
                var final=0;
                var x = Number($("#fuel").val());
                var y = Number($("#toll").val());
                var z = Number($("#deadhead").val());
                var a = Number($("#other").val());
                if(x & y ){
                    var final= x + y + z + a;
                    $('#final').html(final)
                }
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#offer,#fuel, #toll,#deadhead,#other").keyup(function (){
                var total_perc=0;
                var x = Number($("#total").text());
                var y = Number($("#offer").val());

                    var total_perc= (x / y) * 100 ;


                    $('#total_perc').html(parseInt(total_perc)+'%')

            })
        })
    </script>





    <script>
        $(document).ready(function (){
            $("#fuel, #final_price, #toll, #deadhead, #other").keyup(function (){
                var gross_final=0;
                var x = Number($("#final_price").val());
                var fuel = Number($("#fuel").val());
                var toll = Number($("#toll").val());

                if(x != 0 && fuel != 0 && toll !=0){
                    var y = Number($("#final").text());

                    var gross_final= x - y ;


                    $('#gross_final').html(gross_final)
                }


            })
        })
    </script>


    <script>
        $(document).ready(function (){
            $("#final, #final_price,#fuel, #final_price, #toll, #deadhead, #other").keyup(function (){
                var final_offer=0;
                var x = Number($("#final").text());
                var y = Number($("#final_price").val());
                if(x != 0 && fuel != 0 && toll !=0) {
                    var final_offer = (x / y) *100;


                    $('#final_offer').html((parseInt(final_offer) + '%'))
                }
            })
        })
    </script>


    <script>
        $(document).ready(function (){
            $("#gross, #offer,#fuel, #toll, #deadhead, #other").keyup(function (){
                var net_gross=0;
                var x = Number($("#gross").text());
                var y = Number($("#offer").val());

                var net_gross= (x / y) * 100 ;


                $('#net_gross').html( parseInt(net_gross)+'%')

            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $("#gross_final, #final_price").keyup(function (){
                var gross_final_percentage=0;
                var x = Number($("#gross_final").text());
                var y = Number($("#final_price").val());

                var gross_final_percentage = (x / y) * 100 ;


                $('#gross_final_percentage').html(parseInt(gross_final_percentage)+'%')

            })
        })
    </script>



    //offers count
    <script>
        $(document).ready(function (){
            $(" #offer").keyup(function (){
                var offer_count=0;
                var y = Number($("#offer").val());
                var offer_count=  y ;
                $('#offer_count').html(offer_count)
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(" #offer").keyup(function (){
                var offer_count_2=0;
                var y = Number($("#offer").val());
                var offer_count_2=  y ;
                $('#offer_count_2').html(offer_count_2)
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(" #offer").keyup(function (){
                var offer_count_3=0;
                var y = Number($("#offer").val());
                var offer_count_3=  y ;
                $('#offer_count_3').html(offer_count_3)
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(" #offer").keyup(function (){
                var offer_count_4=0;
                var y = Number($("#offer").val());
                var offer_count_4=  y ;
                $('#offer_count_4').html(offer_count_4)
            })
        })
    </script>





    <script>
        $(document).ready(function (){
            $("#counter_1, #offer_count").keyup(function (){
                var adjust_count_1=0;
                var x = Number($("#offer_count").text());
                var y = Number($("#counter_1").val());

                var adjust_count_1 = x + y ;


                $('#adjust_count_1').html(adjust_count_1)

            })
        })
    </script>


    <script>
        $(document).ready(function (){
            $("#counter_2, #offer_count").keyup(function (){
                var adjust_count_2=0;
                var x = Number($("#offer_count").text());
                var y = Number($("#counter_2").val());

                var adjust_count_2 = x + y ;


                $('#adjust_count_2').html(adjust_count_2)

            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $("#counter_3, #offer_count").keyup(function (){
                var adjust_count_3=0;
                var x = Number($("#offer_count").text());
                var y = Number($("#counter_3").val());

                var adjust_count_3 = x + y ;


                $('#adjust_count_3').html(adjust_count_3)

            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $("#counter_4, #offer_count").keyup(function (){
                var adjust_count_4=0;
                var x = Number($("#offer_count").text());
                var y = Number($("#counter_4").val());

                var adjust_count_4 = x + y ;


                $('#adjust_count_4').html(adjust_count_4)

            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $("#counter_1").keyup(function (){
                var counter_1_percentage=0;
                var x = Number($("#counter_1").val());
                var y =  Number($("#offer_count").text());

                var counter_1_percentage = (x / y) * 100 ;


                $('#counter_1_percentage').html(parseInt(counter_1_percentage)+'%')

            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#counter_2").keyup(function (){
                var counter_2_percentage=0;
                var x = Number($("#counter_2").val());
                var y =  Number($("#offer_count_2").text());

                var counter_2_percentage = (x / y) * 100 ;


                $('#counter_2_percentage').html(parseInt(counter_2_percentage)+'%')

            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#counter_3").keyup(function (){
                var counter_3_percentage=0;
                var x = Number($("#counter_3").val());
                var y =  Number($("#offer_count_3").text());

                var counter_3_percentage = (x / y) * 100 ;


                $('#counter_3_percentage').html(parseInt(counter_3_percentage)+'%')

            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#counter_4").keyup(function (){
                var counter_4_percentage=0;
                var x = Number($("#counter_4").val());
                var y =  Number($("#offer_count_4").text());

                var counter_4_percentage = (x / y) * 100;


                $('#counter_4_percentage').html(parseInt(counter_4_percentage)+'%')

            })
        })
    </script>




    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_1_rpm=0;
                var x = Number($("#adjust_count_1").text());
                var y =  Number($("#total_miles").val());

if(x != 0 && y != 0){
    var counter_1_rpm = x / y;


    $('#counter_1_rpm').html(counter_1_rpm.toFixed(2))
}


            })
        })
    </script>


    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_3_rpm=0;
                var x = Number($("#adjust_count_3").text());
                var y =  Number($("#total_miles").val());

                if(x != 0 && y != 0){
                    var counter_3_rpm = x / y;


                    $('#counter_3_rpm').html(counter_3_rpm.toFixed(2))
                }


            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_2_rpm=0;
                var x = Number($("#adjust_count_2").text());
                var y =  Number($("#total_miles").val());

                if(x != 0 && y != 0){
                    var counter_2_rpm = x / y;


                    $('#counter_2_rpm').html(counter_2_rpm.toFixed(2))
                }


            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_4_rpm=0;
                var x = Number($("#adjust_count_4").text());
                var y =  Number($("#total_miles").val());

                if(x != 0 && y != 0){
                    var counter_4_rpm = x / y;


                    $('#counter_4_rpm').html(counter_4_rpm.toFixed(2))
                }


            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_1_pl=0;
                var x = Number($("#counter_1_rpm").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_1_pl = x - y;


                    $('#counter_1_pl').html(counter_1_pl.toFixed(2))
                }


            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_2_pl=0;
                var x = Number($("#counter_2_rpm").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_2_pl = x - y;


                    $('#counter_2_pl').html(counter_2_pl.toFixed(2))
                }


            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_3_pl=0;
                var x = Number($("#counter_3_rpm").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_3_pl = x - y;


                    $('#counter_3_pl').html(counter_3_pl.toFixed(2))
                }


            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_4_pl=0;
                var x = Number($("#counter_4_rpm").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_4_pl = x - y;


                    $('#counter_4_pl').html(counter_4_pl.toFixed(2))
                }


            })
        })
    </script>

    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_1_pl_perc=0;
                var x = Number($("#counter_1_pl").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_1_pl_perc = (x / y) * 100;


                    $('#counter_1_pl_perc').html(parseInt(counter_1_pl_perc)+'%')
                }


            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_2_pl_perc=0;
                var x = Number($("#counter_2_pl").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_2_pl_perc = (x / y) * 100;


                    $('#counter_2_pl_perc').html(parseInt(counter_2_pl_perc)+'%')
                }


            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_3_pl_perc=0;
                var x = Number($("#counter_3_pl").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_3_pl_perc = x / y * 100;


                    $('#counter_3_pl_perc').html(parseInt(counter_3_pl_perc)+'%')
                }


            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $(".rpm_change").keyup(function (){

                var counter_4_pl_perc=0;
                var x = Number($("#counter_4_pl").text());
                var y =  Number($("#ave_rpm").val());

                if(x != 0 && y != 0){
                    var counter_4_pl_perc = (x / y) * 100;


                    $('#counter_4_pl_perc').html(parseInt(counter_4_pl_perc)+'%')
                }


            })
        })
    </script>
    //
@endpush
@endsection










