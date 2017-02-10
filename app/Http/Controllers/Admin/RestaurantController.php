<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Restaurants;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array(
            'module_name' => 'Restaurant',
            'module_page' => 'List',
            'restaurants' => Restaurants::latest()->get(),
        );

        return view('admin/restaurant/list', $data);
    }

    public function addBasicInfo(Request $request)
    {
        return view('admin/restaurant/add', array(
            'module_name' => 'Restaurant',
            'module_page' => 'Create',
            'restoInfo' => $request->session()->get('restoInfo')
        ));
    }

    public function saveBasicInfo(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, array(
            'name' => 'required|max:60',
            'website' => 'required|url',
            'owner_name' => 'required|max:255',
            'date_established' => 'required|date',
            'phone_number' => 'required|digits:11',
            'mobile_number' => 'digits:11',
            'address' => 'required|max:255',
        ));

        if ($validator->fails()) {
            return redirect()->route('add-basic-info')->withErrors($validator);
        }

        if ($validator) {
            $create = Restaurants::create([
                'name' => $data['name'],
                'website' => $data['website'],
                'owner' => $data['owner_name'],
                'date_established' => $data['date_established'],
                'phone_number' => $data['phone'],
                'mobile_number' => $data['mobile'],
                'address' => $data['address'],
            ]);

            if ($create) {
                return $this->index();
            }
        }
    }

    public function updateBasicInfo($id)
    {
        $restaurantInfo = Restaurants::find($id);

        if ($restaurantInfo) {
            return view('admin/restaurant/update', array(
                'module_name' => 'Restaurant',
                'module_page' => 'Update',
                'restoInfo' => $restaurantInfo
            ));
        }
    }

    public function saveUpdateBasicInfo(Request $request, $id)
    {
        $input = $request->all();
        $update = Restaurants::where('id', $id)
            ->update([
                'name' => $input['name'],
                'website' => $input['website'],
                'owner' => $input['owner_name'],
                'date_established' => $input['date_established'],
                'mobile_number' => $input['mobile'],
                'phone_number' => $input['phone'],
                'address' => $input['address']
        ]);

        if ($update) {
            return $this->updateBasicInfo($id);
        }
    }
}
