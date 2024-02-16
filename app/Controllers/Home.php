<?php

namespace App\Controllers;

use App\Models\Categoria;

use Exception;

class Home extends BaseController
{
    public function index(): string
    {
        $categoria = new Categoria();
        $registro = $categoria->getDados();

        print_r($registro);
        die();

        $client = service('curlrequest');
        try {
            $response = $client->request('POST', 'https://opentdb.com/api.php?amount=10');
            $response = json_decode($response->getBody());

            print_r($response);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            die();
        };

        return view('app');
    }
}
