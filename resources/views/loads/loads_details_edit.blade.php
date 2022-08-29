



@extends('layouts.app')
@section('title', 'ORT title')

@section('content')
<style>
    /* Dropdown Button */
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover, .dropbtn:focus {
        background-color: #3e8e41;
    }

    /* The search field */
    #myInput {
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        border: none;
        border-bottom: 1px solid #ddd;
    }

    /* The search field when it gets focus/clicked on */
    #myInput:focus {outline: 3px solid #ddd;}

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        border: 1px solid #ddd;
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {display:block;}

</style>
    <main class="content">
        <div class="container-fluid p-0">

            <div class="col-2">
                <input type="hidden" id="current_stop" value="2" >
            </div>
            <input type="hidden" name="stops_data" value="" id="stops" >

            <form action="{{url("submit-load")}}" method="post" class="px-5">
                @csrf
                @section('back')
                    <div class="col-2  " style="position: absolute;margin-left: 20px;margin-top: 70px" >
                        <button onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                    </div>

                @endsection
                <h1 class="h3 mb-3"><strong>Insert Details</strong> </h1>
                <div class="row">
                    <div class="col py-2">
                        <label>Invoice Amount :</label>
                        <input type="text" id="price" name="invoice_amount" class="form-control" placeholder="$0.00" >
                    </div>
                    <div class="col py-2">
                        <label>Truck #</label>
                        <input type="text" name="truck_no" class="form-control" placeholder="" >
                    </div>
                    <div class="col py-2">
                        <label>Truck Type :</label>

                        <select name="truck_type"  class="form-control">
                            <option value="Dry Van">Dry Van</option>
                            <option value="Flat Bed">Flat Bed</option>
                            <option value="Reefer">Reefer</option>
                            <option value="Step Deck">Step Deck</option>
                            <option value="Carhaul - Truck">Carhaul - Truck</option>
                            <option value="Carhaul- Hotshot">Carhaul- Hotshot</option>
                        </select>




                </div>
                    <div class="col py-2">
                        <label>Dispatcher :</label>
                        <input type="text" name="dispatcher_name" class="form-control" placeholder="e.g John">
                    </div>
                </div>
                <div class="row">
                    <div class="col py-2">
                        <label>Miles Per Trip :</label>
                        <input type="text" id="qty" name="miles_per_trip" class="form-control" placeholder="0.00" >
                    </div>
                    <div class="col py-2">
                        <label>Ave Rate Per Miles:</label>

                        <input type="text" id="total" name="ave_rate_per_miles" class=""  >
                    </div>
                    <div class="col py-2">
                        <label># of Stops :</label>
                        <input type="text" name="total_stops" class="form-control" placeholder="" >
                    </div>

{{--                    <div class="col py-2">--}}
{{--                        <label>Status</label>--}}
{{--                        <input type="text" name="order_status" class="form-control" placeholder="e.g Order Closed" >--}}
{{--                    </div>--}}


                </div>

                <div class="row ">
                    <div class="col-3 py-2">
                        <label> Assign load To :</label>


                        <select name="user_type" id="user_type" class="form-control">

                            <option value="llc" disabled> Please Select</option>
                            <option value="Individual Driver"> Individual Driver</option>
                            <option value="Carriers"> Carriers</option>

                        </select>
                    </div>
                    <div class="col-3 py-2" id="select_driver" style="display: none">
                        <div class="col">
                            <label>Select Driver</label>
                            <select class="form-control select2" name="select_user">
                                <option value="1">Azaz</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-6 py-2 " id="select_carrier" style="display: none">
                        <div class="col-md-4">
                            <label>Select Carriers</label>
                            <select class="form-control select2" name="select_user">
                                <option value="1">Azaz</option>

                            </select>
                        </div>
                    </div>

                </div>



                <div class="row ">
                    <h3 class="h3 my-2"><strong>Pick Up Details</strong> </h3>
                    <div class="col my-2">
                        <label>PICK UP</label>
                        <input type="text" name="pick_up_address" class="form-control" placeholder="Address" >
                    </div>
                    <div class="col py-2">
                        <label>Contact#</label>
                        <input type="text" name="pick_up_contact_no" class="form-control" placeholder="" >
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 py-2">
                        <label>Special Instruction :</label>
                        <textarea class="form-control" name="pick_up_special_instruction" id="exampleFormControlTextarea1" rows="3" placeholder="e.g Driver must have load guards and belts."></textarea>

                    </div>




                </div>

                <div class="stop_block">

                <div>
                <h5 class="h3 mb-3"><strong>Stop 1</strong> </h5>
                </div>

                    <div>
                <div class="row ">
                    <div>
                    <h3 class="h3 my-2"><strong>Drop Off Details</strong> </h3>
                    </div>

                    <div class="col my-2">
                        <label>DROP OFF</label>
                        <input type="text" name="drop_off_address" class="tile form-control" placeholder="Address" >
                    </div>
                    <div class="col py-2">
                        <label>Contact#</label>
                        <input type="text" name="drop_off_contact_no" class="body form-control" placeholder="" >
                    </div>
                </div>
                    </div>

                        <div>
                <div class="row ">

                    <div class="col-6 py-2">
                        <label>Special Instruction :</label>
                        <textarea class="desc form-control" name="drop_off_special_instruction" rows="3" placeholder="e.g Driver must have load guards."></textarea>
                    </div>




                </div>
                        </div>
                </div>

            <div class="col-auto ">
                <div id="newRow"></div>
                <button id="addRow" type="button" class="btn btn-primary  mb-2">Add Stop +</button>
                <button id="deleteRow" type="button" class="btn btn-danger  mb-2">Delete Stop -</button>

            </div>
                <button type="submit" class="btn btn-success  mb-2 float-end">Submit</button>
            </form>

        </div>



    </main>
@push('script')
{{--    <script>--}}
{{--        function myFunction() {--}}
{{--            document.getElementById("myDropdown").classList.toggle("show");--}}
{{--        }--}}
{{--        function setUser(name) {--}}
{{--            $("#selected_user").val(name);--}}
{{--            myFunction()--}}
{{--        }--}}
{{--        function filterFunction() {--}}
{{--            var input, filter, ul, li, a, i;--}}
{{--            input = document.getElementById("myInput");--}}
{{--            filter = input.value.toUpperCase();--}}
{{--            div = document.getElementById("myDropdown");--}}
{{--            a = div.getElementsByTagName("a");--}}
{{--            for (i = 0; i < a.length; i++) {--}}
{{--                txtValue = a[i].textContent || a[i].innerText;--}}
{{--                if (txtValue.toUpperCase().indexOf(filter) > -1) {--}}
{{--                    a[i].style.display = "";--}}
{{--                } else {--}}
{{--                    a[i].style.display = "none";--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}
<script>
   $(document).ready(function (){
       $("#price, #qty").keyup(function (){
           var total=0;
           var x = Number($("#price").val());
           var y = Number($("#qty").val());
           if(x & y ){
               var total= x / y;
               $('#total').val(total)
           }
       })
   })
</script>

<script>
    $(document).ready(function()
    {
        $("#user_type").change(function()
        {
            var id=$(this).val();
            if(id == "Individual Driver"){
              $("#select_driver").show()
              $("#select_carrier").hide()
            }else{
                $("#select_driver").hide()
                $("#select_carrier").show()
            }

        });
    });


</script>
<script>
    $('.select2').select2();
</script>

<script type="text/javascript">
    // add row
    $("#deleteRow").click(function () {
        let stop_length = $(".stop_main_div").length;
        if(stop_length > 0){
            let stop = $("#current_stop").val();
            $("#current_stop").val(parseInt(stop) - 1);
            $(".stop_main_div:last").remove()
        }

    })
    $("#addRow").click(function () {
        var html = '';
        let stop = $("#current_stop").val();
        html += '<div class="stop_main_div stop_block">';
        html += '<div>';
        html += '<h5 class="h3 mb-3"><strong>Stop '+stop+'</strong> </h5>';
        html += '</div>';
        html += '<div>';
        html += '<div class="row ">';
        html += '<div>';
        html += '<h3 class="h3 my-2"><strong>Drop Off Details</strong> </h3>';
        html += '</div>';
        html += '<div class="col my-2">';
        html += ' <label>DROP OFF</label>';
        html += '<input type="text" name="drop_off_address" class="form-control" placeholder="Address" >';
        html += '</div>';
        html += '<div class="col py-2">';
        html += '<label>Contact#</label>';
        html += '<input type="text" name="drop_off_contact_no" class="form-control" placeholder="" >';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div>';
        html += '<div class="row ">';
        html += '<div class="col-6 py-2">';
        html += '<label>Special Instruction :</label>';
        html += '<textarea class="form-control" name="drop_off_special_instruction" id="exampleFormControlTextarea1" rows="3" placeholder="e.g Driver must have load guards."></textarea>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        $("#current_stop").val(parseInt(stop) + 1);

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });


    {{--let arr=[]--}}
    {{--$.@each( arr, stop_block--}}
    {{--let title = $(this).find(".title").val();--}}
    {{--let body = $(this).find(".body").val();--}}
    {{--let desc = $(this).find(".desc").val();--}}
    {{-- array_push(arr,{""})--}}
    {{--)--}}
</script>

@endpush
@endsection










