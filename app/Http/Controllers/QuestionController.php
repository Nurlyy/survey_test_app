<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Question;


class QuestionController extends Controller
{
    /**
     * Показ всех вопросов из базы
     */
    public function index() {
        return Cache::remember('questions', 3600, function () {
            return Question::with('options')->get();
        });
    }
    
}
