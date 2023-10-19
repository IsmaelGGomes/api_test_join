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
