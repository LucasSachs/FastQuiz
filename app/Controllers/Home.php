<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $client = service('curlrequest');
        $response = $client->request('POST', 'https://opentdb.com/api.php?amount=10');
        $response = json_decode($response->getBody());

        // Formatação das questões e descarte de informações que não serão utilizadas
        foreach($response->results as $question) {
            $answer = $question->incorrect_answers;
            $answer[] = $question->correct_answer;
            shuffle($answer); // Embaralhar a array de respostas

            $questoes[] = [
                'question' => $question->question,
                'correct_answer' => $question->correct_answer,
                'category' => $question->category,
                'difficulty' => $question->difficulty,
                'answer' => $answer
            ];
        }

        return view('content', compact('questoes'));
    }
}
