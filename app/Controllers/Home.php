<?php

namespace App\Controllers;

use App\Models\Categoria;

use Exception;

class Home extends BaseController
{
    public function index()
    {
        $categoria = new Categoria();
        $registros = $categoria->getDados();

        dd($registros);

        $client = service('curlrequest');
        try {
            $response = $client->request('POST', 'https://opentdb.com/api.php?amount=10');
            $response = json_decode($response->getBody());
        } catch (Exception $e) {
            dd($e->getMessage());
        };

        echo view('app');
        echo view('content');
        echo view('footer');
    }
}
