<?php

namespace App\Http\Controllers\Office\CRM;

use App\Http\Controllers\Controller;
use App\Models\Regional\Country;
use App\Models\Regional\District;
use App\Models\Regional\Province;
use App\Models\Regional\Regency;
use App\Models\Regional\Village;

class GetRegionalController extends Controller
{
    public function get_province(Country $country)
    {
        $collection = Province::where('country_id', $country->id)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function get_regency(Province $province)
    {
        $collection = Regency::where('province_id', $province->id)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function get_district(Regency $regency)
    {
        $collection = District::where('regency_id', $regency->id)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function get_village(District $district)
    {
        $collection = Village::where('district_id', $district->id)->orderBy('name', 'asc')->get();
        $list = "";
        foreach ($collection as $row) {
            $list .= "<option value='$row->id'>$row->name</option>";
        }
        return $list;
    }

    public function get_postcode(Village $village)
    {
        return $village->postcode;
    }
}
