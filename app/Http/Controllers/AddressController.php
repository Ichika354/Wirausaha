<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AddressController extends Controller
{
  public function getRegency(Request $request)
  {
    $province_id = $request->province_id;

    $client = new Client();
    $response = $client->get('https://wirausahaanakulbi-server.vercel.app/regency');
    $regencies = json_decode($response->getBody(), true)['data'];

    $filteredRegencies = array_filter($regencies, function ($regency) use ($province_id) {
      return $regency['province_id'] == $province_id;
    });

    dd($filteredRegencies);

    $options = '<option value="">Select Regency</option>';
    foreach ($filteredRegencies as $regency) {
      $options .= "<option value='{$regency['id']}'>{$regency['name']}</option>";
    }

    return response()->json($options);
  }

  public function getDistrict(Request $request)
  {
    $regency_id = $request->regency_id;

    $client = new Client();
    $response = $client->get('https://wirausahaanakulbi-server.vercel.app/district');
    $districts = json_decode($response->getBody(), true)['data'];

    $filteredDistricts = array_filter($districts, function ($district) use ($regency_id) {
      return $district['regency_id'] == $regency_id;
    });

    $options = '<option value="">Select District</option>';
    foreach ($filteredDistricts as $district) {
      $options .= "<option value='{$district['id']}'>{$district['name']}</option>";
    }

    return response()->json($options);
  }

  public function getVillage(Request $request)
  {
    $district_id = $request->district_id;

    $client = new Client();
    $response = $client->get('https://wirausahaanakulbi-server.vercel.app/village');
    $villages = json_decode($response->getBody(), true)['data'];

    $filteredVillages = array_filter($villages, function ($village) use ($district_id) {
      return $village['district_id'] == $district_id;
    });

    $options = '<option value="">Select Village</option>';
    foreach ($filteredVillages as $village) {
      $options .= "<option value='{$village['id']}'>{$village['name']}</option>";
    }

    return response()->json($options);
  }
}
