<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Load;
use App\Models\Shipper;
use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function list_carriers()
    {
        return view('carriers.list_carrier');
    }
    public function list_trucks()
    {

        $get_trucks = Truck::all();
        return view('trucks.list_trucks',compact('get_trucks'));
    }
    public function driver_deta()
    {

        $get_data = Driver::all();
        return view('drivers.list_drivers',compact('get_data'));
    }
    public function submit_truck(Request $request)
    {
        $add_truck = Truck::create([
            'vin_no' => $request->input('vin_no'),
            'license_no' => $request->input('license_no'),
            'max_drive_miles' => $request->input('max_drive_miles'),
            'max_deadhead_miles' => $request->input('max_deadhead_miles'),
            'max_load_size' => $request->input('max_load_size'),
            'weekly_load_revenue_goal' => $request->input('weekly_load_revenue_goal'),
            'truck_type' => $request->input('truck_type'),
            'truck_size' => $request->input('truck_size'),
            'select_user' => $request->input('select_user'),

        ]);
        if ($add_truck){
            return redirect('trucks');

        }else{
            return redirect()->back();

        }
    }
    public function list_drivers()
    {
        return view('drivers.list_drivers');
    }
    public function list_loads()
    {

        $get_loads = Load::all();
        return view('loads.list_loads',compact('get_loads'));
    }
    public function submit_load(Request $request)
    {
        $load_ticket = rand(100000, 999999);

        $add_load = Load::create([
            'load_ticket' => $load_ticket,
            'invoice_amount' => $request->input('invoice_amount'),
            'truck_no' => $request->input('truck_no'),
            'truck_type' => $request->input('truck_type'),
            'dispatcher_name' => $request->input('dispatcher_name'),
            'miles_per_trip' => $request->input('miles_per_trip'),
            'ave_rate_per_miles' => $request->input('ave_rate_per_miles'),
            'total_stops' => $request->input('total_stops'),
//            'order_status' => $request->input('order_status'),
            'user_type' => $request->input('user_type'),
            'select_user' => $request->input('select_user'),
            'pick_up_address' => $request->input('pick_up_address'),
            'pick_up_contact_no' => $request->input('pick_up_contact_no'),
            'pick_up_special_instruction' => $request->input('pick_up_special_instruction'),
            'drop_off_address' => $request->input('drop_off_address'),
            'drop_off_contact_no' => $request->input('drop_off_contact_no'),
            'drop_off_special_instruction' => $request->input('drop_off_special_instruction'),
        ]);
if ($add_load){
    return redirect('loads');

}else{
    return redirect()->back();

}


    }
    public function driver_details()
    {
        return view('drivers.driver_details');
    }
    public function carrier_details()
    {
        return view('carriers.carrier_details');
    }
    public function loads_details($id = null)
    {
        $load_detail = Load::query()->where('id','=',$id)->first();
        return view('loads.loads_details', compact('load_detail'));
    }
    public function trucks_details($id = null)
    {
        $truck_detail = Truck::query()->where('id','=',$id)->first();
        return view('trucks.trucks_details', compact('truck_detail'));
    }
    public function shipper_details($id = null)
    {
        $truck_detail = Shipper::query()->where('id','=',$id)->first();
        return view('trucks_details.trucks_details', compact('truck_detail'));
    }
    public function Settlement()
    {
        return view('Settlement.Settlement');
    }
    public function loads_details_edit()
    {
        return view('loads.loads_details_edit');
    }

    public function Shipper()
    {
        $shippers = Shipper::all();
        return view('Shipper.Shipper',compact('shippers'));
    }

    public function submit_shipper(Request $request)
    {
        $add_shipper = Shipper::create([
            'company_name' => $request->input('company_name'),
            'primary_contact_name' => $request->input('primary_contact_name'),
            'company_type' => $request->input('company_type'),
            'email_address' => $request->input('email_address'),
            'primary_contact_position' => $request->input('primary_contact_position'),
            'primary_contact_number' => $request->input('primary_contact_number'),
            'company_website' => $request->input('company_website'),
            'company_address' => $request->input('company_address'),

        ]);

        if ($add_shipper){
            return redirect('Shipper');

        }else{
            return redirect()->back();

        }
        return view('submit_shipper.submit_shipper');
    }
    public function Dispatcher()
    {
        return view('Dispatcher.Dispatcher');
    }
    public function add_shipper()
    {
        return view('Shipper.add_shipper');
    }
    public function Independent_dispatcher_details()
    {
        return view('Dispatcher.Independent_dispatcher_details');
    }
    public function profit_calculator()
    {
        return view('Profit.profit_calculator');
    }
    public function Dedicated_dispatcher_details()
    {
        return view('Dispatcher.Dedicated_dispatcher_details');
    }
    public function Sales_dispatcher_details()
    {
        return view('Dispatcher.Sales_dispatcher_details');
    }



}

