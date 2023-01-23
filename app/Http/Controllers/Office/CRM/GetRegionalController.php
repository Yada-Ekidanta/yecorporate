<?php

namespace App\Http\Controllers\Office\CRM;

use App\Http\Controllers\Controller;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;
use Illuminate\Http\Request;

class GetRegionalController extends Controller
{
    public function filter_province(Request $request)
    {
        // dd($request->country);
        $collection = Province::where('country_id', $request->country)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function filter_regency(Request $request)
    {
        $collection = Regency::where('province_id', $request->province)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function filter_district(Request $request)
    {
        $collection = District::where('regency_id', $request->regency)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function filter_village(Request $request)
    {
        $collection = Village::where('district_id', $request->district)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function filter_postcode(Request $request)
    {
        $collection = Village::where('id',$request->village)->first();
        return $collection->postcode;
    }
}
