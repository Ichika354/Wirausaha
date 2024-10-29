<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function sellerProfileView()
    {
        $client = new Client();

        // Kirim permintaan GET ke API
        $response = $client->request('GET', 'https://wirausahaanakulbi-server.vercel.app/province');        

        // Mengecek apakah response sukses
        if ($response->getStatusCode() == 200) {
            $responseData = json_decode($response->getBody(), true);

            // Mengecek apakah ada kunci "data" dalam response
            if (isset($responseData['data'])) {
                $provinces = $responseData['data'];
            } else {
                $provinces = [];
            }
        } else {
            // Handle error, misalnya dengan memberikan array kosong atau pesan error
            $provinces = [];
            // Anda juga bisa menggunakan abort atau membuat log untuk mencatat error ini
            // abort(500, 'Error fetching provinces data');
        }

        return view('seller.profile', compact('provinces'));
    }

    public function sellerProfileUpdate(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'street' => 'required|string',
            'province' => 'required',
            'regency' => 'required',
            'district' => 'required',
            'village' => 'required',
        ]);

        $user = User::find(Auth::user()->user_id);

        $dataUser = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ];

        $dataAddress = [
            'user_id' => Auth::user()->user_id,
            'street' => $request->street,
            'province_id' => $request->province,
            'regency_id' => $request->regency,
            'district_id' => $request->district,
            'village_id' => $request->village,
        ];

        $user->update($dataUser);
        Addresses::create($dataAddress);

        return redirect()->route('profile.seller')->with('success', 'Profile update successfully');
    }
}
