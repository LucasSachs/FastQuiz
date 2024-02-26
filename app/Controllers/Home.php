<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $client = service('curlrequest');
        $response = $client->request('POST', 'https://opentdb.com/api.php?amount=10');
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
}
