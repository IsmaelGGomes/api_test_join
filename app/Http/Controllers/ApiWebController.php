<?php

namespace App\Http\Controllers;

use App\Models\ApiWeb;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ApiWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $client = new Client();
        // $client->setHeaders([
        //     'Authorization' => 'Bearer my-api-key',
        // ]);

        $headers = [
            'apiKey' => 'BvYTphcHBjb29wZXJhZG9w',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Content-Type' => 'application/json',
            'Connection' => 'keep-alive',
        ];

        $params = [
            'HP0289366487' => '',
        ];

        $lista = [
            '65981023100',
            '65981048575',
            '65981058473',
            '65981110119',
            '65981110150',
            '65981110341',
            '65981112599',
            '65981115845',
            '65981122282',
            '65981123532',
            '65981126260',
            '65981126681',
            '65981128002',
            '65981140084',
            '65981142060',
            '65981143121',
            '65981146720',
            '65981170001',
            '65981173477',
            '65981176666',
            '65981179828',
            '65981181610',
            '65981181622',
            '65981182347',
            '65981183331',
            '65981186594',
            '65981188875',
            '65981199999',
            '65981222290',
            '65981233189',
            '65981238498',
            '65981244558',
            '65981254018',
            '65981294565',
            '65981320702',
            '65981330729',
            '65981360205',
            '65981361116',
            '65981363597',
            '65981384025',
            '65981510236',
            '65981572064',
            '65984012326',
            '65984015432',
            '65984015579',
            '65984015673',
            '65984015929',
            '65984016354',
            '65984016574',
            '65984016668',
            '65984020036',
            '65984022785',
            '65984025102',
            '65984025396',
            '65984027132',
            '65984028183',
            '65984028494',
        ];


        $body = [
            "number" => "5566999194897",
            "options" => [
                "delay" => 5000,
                "presence" => "composing"
            ],
            "textMessage" => [
                "text" => "Olá, mundo! teste de mensagens"
            ]
        ];

        $response = $client->post('https://api.joindeveloper.com.br:1051/mensagens/enviartexto/HP0289366487', [
            'headers' => $headers,
            'body' => json_encode($body),
        ]);

        // Processe a resposta
        $data = json_decode($response->getBody(), true);

        // Retorne a resposta
        return $data;

        //instancia
        // $request = request();

        // // url
        // $request->url('https://api.joindeveloper.com.br:1051/mensagens/enviartexto/HP0289366487');

        // // body 
        // $data = [
        //     "number" => "5566999194897",
        //     "options" => [
        //         "delay" => 5000,
        //         "presence" => "composing"
        //     ],
        //     "textMessage" => [
        //         "text" => "Olá, mundo! teste de mensagens"
        //     ]
        // ];

        //$request->post($data);

        // headers
        // $request->headers([
        //     'apikey' => 'BvYTphcHBjb29wZXJhZG9w']
        // );

        // Envie os parametros da requisição
        // $request->query([
        //     'HP0289366487' => ''
        // ]);

        // return $request->send($data);
        // $request = $request->withHeaders([
        //     'Authorization' => 'Bearer my-api-key',
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //Create Client object to deal with
        $client = new Client();

        // Define the request parameters
        $url = 'https://reqres.in/api/users';

        $headers = [
            'Content-Type' => 'application/json',
        ];

        $data = [
            'name' => $request->input('name'),
            'job' => $request->input('job'),
        ];

        // POST request using the created object
        $postResponse = $client->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        // Get the response code
        $responseCode = $postResponse->getStatusCode();
        return response()->json(['response_code' => $responseCode]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiWeb $apiWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiWeb $apiWeb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApiWeb $apiWeb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiWeb $apiWeb)
    {
        //
    }
}
