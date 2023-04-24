<?php
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CrimesController extends Controller
{
    public function getCrimes(Request $request)
    {
        $client = new Client();
        $url = 'https://data.police.uk/api/crimes-at-location?date=2017-02&location_id=884227';

        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('crimes', ['crimes' => $data]);
    }
}

