<?php

namespace App\Controllers;

use App\Models\Categoria;

class Home extends BaseController
{
    public function index()
    {
        $rules = [
            'quantidade' => 'required',
            'categoria' => 'required'
        ];

        $messages = [
            'quantidade' => [
                'required' => 'O preenchimento deste campo é obrigatório, selecione uma das alternativas.',
            ],
            'categoria' => [
                'required' => 'O preenchimento deste campo é obrigatório, selecione uma das alternativas.',
            ]
        ];

        if(!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $request = service('request');
        $amount = $request->getPost('quantidade');
        $category = $request->getPost('categoria');

        $client = service('curlrequest');
        $response = $client->request('POST', "https://opentdb.com/api.php?amount=$amount&category=$category");
        $response = json_decode($response->getBody());

        // Formatação da array de questões e descarte de informações que não serão utilizadas
        foreach($response->results as $question) {
            $answer = $question->incorrect_answers;
            $answer[] = $question->correct_answer;
            shuffle($answer); // Embaralhar a array de respostas

            // Definir as cores dos níveis de dificuldade
            $difficulty_color = null;
            switch($question->difficulty) {
                case 'easy': 
                    $difficulty_color = 'text-bg-success';
                break;

                case 'medium':
                    $difficulty_color = 'text-bg-warning';
                break; 

                case 'hard':
                    $difficulty_color = 'text-bg-danger';
                break;
            };

            $questoes[] = [
                'question' => $question->question,
                'correct_answer' => $question->correct_answer,
                'category' => $question->category,
                'difficulty' => $question->difficulty,
                'difficulty_color' => $difficulty_color,
                'answer' => $answer
            ];
        }

        return view('content', compact('questoes'));
    }

    public function home() {
        $categoria = new Categoria;
        $categorias = $categoria->getCategorias();
        return view('home', compact('categorias'));
    }

    public function leaderboard() {
        return view('leaderboard');
    }
}
