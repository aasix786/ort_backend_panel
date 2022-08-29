



@extends('layouts.app')
@section('title', 'ORT title')

@section('content')
<style>
    .btn {
        background-color: DodgerBlue; /* Blue background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 12px 16px; /* Some padding */
        font-size: 16px; /* Set a font size */
        cursor: pointer; /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>


    <main class="content" action="{{url("submit-load")}}" method="post">
        @csrf
        <div class="container-fluid p-0">
            @section('back')
                <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                    <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                </div>

            @endsection
            <h1 class="h3 mb-3"><strong>Loads Details</strong> </h1>








            <div class="w-100">

                    <div class=" card flex-fill">
                        <div class="container">
                        <div class="row py-2" >

                            <p class="col-2" style="font-weight: bold">Load Ticket</p>
                            <p class="col-2">#{{$load_detail->load_ticket}}</p>
                            <p class="col-2" style="font-weight: bold">Invoice Amount :</p>
                            <p class="col-2">${{$load_detail->invoice_amount}}</p>
                            <p class="col-2" style="font-weight: bold">Truck Type :</p>
                            <p class="col-2">{{$load_detail->truck_type}}</p>
                        </div>
                        </div>

                        <div class="container">
                            <div class="row " >

                                <p class="col-2" style="font-weight: bold">Truck #</p>
                                <p class="col-2">#{{$load_detail->truck_no}}</p>
                                <p class="col-2" style="font-weight: bold">Dispatcher :</p>
                                <p class="col-2">{{$load_detail->dispatcher_name}}</p>
                                <p class="col-2" style="font-weight: bold"># of Stops :</p>
                                <p class="col-2">{{$load_detail->total_stops}}</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row " >

                                <p class="col-2" style="font-weight: bold">Status</p>

                                <p class="col-2 ">
                                @if($load_detail->order_status == 1)
                                    <td><span class="badge bg-danger">Order Pending</span></td>
                                @elseif($load_detail->order_status == 2)
                                    <td><span class="badge bg-warning">Order Started</span></td>
                                @else
                                    <td><span class="badge bg-success">Order Closed</span></td>
                                    @endif
                                </p>
                                <p class="col-2" style="font-weight: bold">Miles Per Trip :</p>
                                <p class="col-2">{{$load_detail->miles_per_trip}}</p>
                                <p class="col-2" style="font-weight: bold">Ave Rate Per Miles:</p>
                                <p class="col-2">${{$load_detail->ave_rate_per_miles}}</p>
                            </div>
                            <button class="btn mb-2">Distance : 138.8 Miles <i class="fa-solid fa-circle-location-arrow"></i></button>
                        </div>


                </div>
            </div>
            <div class="w-100">

            <div class="container">
                <div class="row " >
            <div class="w-50 row pt-0">

                <div class=" card flex-fill">
                    <div class="container">
                        <div class="row py-2" >

                            <p class="col-3" style="font-weight: bold;font-size: 18px">PICK UP</p>


                        </div>
                    </div>

                    <div class="container">
                        <div class="row " >

                            <p class="col-12" style="font-weight: bold"> {{$load_detail->pick_up_address}} </p>

                            <p class="col-4" style="font-weight: bold">Contact#</p>
                            <p class="col-4">{{$load_detail->pick_up_contact_no}}</p>
                        </div>
                    </div>



                    <div class="container">
                        <div class="row " >

                            <p class="col-12" style="font-weight: bold">Special Instruction :</p>
                            <p class="col-12">{{$load_detail->pick_up_special_instruction}}</p>

                        </div>
                    </div>


                </div>
            </div>
            <div style="margin-left: 10px" class="w-50 row pt-0">

                <div class=" card flex-fill">


                    <div class="container">
                        <div class="row py-2" >

                            <p class="col-4" style="font-weight: bold;font-size: 18px">DROP OFF</p>


                        </div>
                    </div>
                    <div class="container">
                        <div class="row " >
                            <p class="col-4" style="font-weight: bold;font-size: 14px;color: #fd7e14">Stop 1</p>
                            <p class="col-12" style="font-weight: bold"> {{$load_detail->drop_off_address}} </p>

                            <p class="col-4" style="font-weight: bold">Contact#</p>
                            <p class="col-4">{{$load_detail->drop_off_contact_no}}</p>
                        </div>
                    </div>



                    <div class="container">
                        <div class="row " >

                            <p class="col-12" style="font-weight: bold">Special Instruction :</p>
                            <p class="col-10">{{$load_detail->drop_off_special_instruction}}</p>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row " >
                            <p class="col-4" style="font-weight: bold;font-size: 14px;color: #fd7e14">Stop 2</p>
                            <p class="col-12" style="font-weight: bold"> Outreach Logistics Inc,22 Logan Street, Unit 4, Carmel, 46032, Indiana </p>

                            <p class="col-4" style="font-weight: bold">Contact#</p>
                            <p class="col-4">0317-51812822</p>
                        </div>
                    </div>



                    <div class="container">
                        <div class="row " >

                            <p class="col-12" style="font-weight: bold">Special Instruction :</p>
                            <p class="col-10">Driver must have load guards and belts.</p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
            </div>
        </div>
            <div class="w-100">
                <div class=" card flex-fill">
            <div class="container">
                <div class="row " >



                        <h4 class="col-6 py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Load before departing</h4>

                    </div>
                <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                    <div class="card-body">
                        <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>

                    </div>

        </div>
        </div>

            </div>
        </div>

            <div class="w-100">
                <div class=" card flex-fill">
                    <div class="container">
                        <div class="row " >



                            <h4 class="col-6 py-3 " style="font-weight: bold;color: #fd7e14;text-decoration: underline">Load before confirming delievery</h4>

                        </div>
                        <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">
                            <div class="card-body">
                                <h5 class="text-center" style="font-size: 75px;align-items: center;justify-content: center;align-items: center">+</h5>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="w-100">
                <div class=" card flex-fill">
                    <div class="container">
                        <div class="row " >



                            <h4 class="col-6 py-3 " style="font-weight: bold;color: #fd7e14;text-decoration: underline">Signed BOL</h4>

                        </div>
                        <div class="card" style="width:10rem;height: 9rem;border-width: 1px;border-color: black">

                                <img src="{{asset('img/avatar-5.jpg')}}" class="img-fluid"  />


                        </div>
                    </div>

                </div>
            </div>

            <div class="w-100">
                <div class=" card flex-fill">
                    <div class="container">
                        <h4 class="col-6 py-3" style="font-weight: bold;color: #fd7e14;text-decoration: underline">Please Select</h4>

                        <form action="/action_page.php">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I confirm the load was delivered intact and without damage.</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> I confirm the load was damaged by the 1st shipper.</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> I confirm the load got damaged while in my care and take responsibility for claim(s) in relation to this load.</label><br><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

                </div>
            </div>


            <div class="w-100">
                <div class=" card flex-fill">
                    <div class="container">
                        <div class="row " >



                            <h4 class="col-6 py-3 " style="font-weight: bold;color: #fd7e14;text-decoration: underline">MAP VIEW</h4>

                        </div>
                        <div id="map"></div>
                    </div>

                </div>
            </div>

        </div>



    </main>
@push('map')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqBO_oTLMQCXCavPq3S4Zt9Sc0SG0-7uU&callback=initMap&v=weekly"
        defer
    ></script>

    <script>
        // In the following example, markers appear when the user clicks on the map.
        // Each marker is labeled with a single alphabetical character.
        const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let labelIndex = 0;

        function initMap() {
            const initialPoint = { lat: 31.4832209, lng: 31.4832209 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 3,
                center: initialPoint,
                icon: "img/box-truck.png",
            });

            // This event listener calls addMarker() when the map is clicked.
            // google.maps.event.addListener(map, "click", (event) => {
            //     addMarker(event.latLng, map);
            // });
            let arr = [
                { lat: 31.4287722, lng: 74.1651713 },
                { lat: 35.4287722, lng: 70.1651713 },
            ]
let final={ lat: 31.5167165, lng: 74.3335221 }
            let finalimage = "img/marker.png";
            let image = "img/box-truck.png";
            addMarker(final, map,finalimage );
          if(arr.length > 0) {
              arr.map((item, index) => {
                  addMarker(item, map, image);

              })

            }
            // Add a marker at the center of the map.
        }

        // Adds a marker to the map.
        function addMarker(location, map,image) {
            // Add the marker at the clicked location, and add the next-available label
            // from the array of alphabetical characters.

            new google.maps.Marker({
                position: location,
                label: "",
                map: map,
                size: new google.maps.Size(3, 5),
                icon: image,
            });
        }




        window.initMap = initMap;
    </script>

@endpush
@endsection










