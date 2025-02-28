<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Option;
use App\Models\Question;
use Exception;
use Illuminate\Support\Facades\Cache;

class ResponseController extends Controller
{
    // Сохранение ответа
    public function store(Request $request)
    {
        // Валидация входных данных
        $data = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'option_id' => 'required|exists:options,id',
            'custom_answer' => 'nullable|string|max:255',
        ]);

        // Проверка, что выбранный вариант принадлежит вопросу
        $option = Option::find($data['option_id']);
        if ($option->question_id != $data['question_id']) {
            return response()->json(['error' => 'Invalid option for question'], 400);
        }

        // Если выбран вариант "Иное", проверяем наличие custom_answer
        if ($option->is_custom && empty($data['custom_answer'])) {
            return response()->json(['error' => 'Custom answer is required for this option'], 400);
        }

        // Проверка, есть ли уже ответ пользователя на этот вопрос
        $existingResponse = Response::where('user_id', $request->user()->id)
            ->where('question_id', $data['question_id'])
            ->first();

        if ($existingResponse) {
            // Если ответ уже существует, возвращаем ошибку или обновляем данные
            return response()->json(['error' => 'You have already answered this question'], 400);

            // Альтернативно: если нужно обновить существующий ответ
            // $existingResponse->update([
            //     'option_id' => $data['option_id'],
            //     'custom_answer' => $data['custom_answer'] ?? null,
            // ]);
            // return response()->json(['message' => 'Your response has been updated']);
        }

        // Сохранение нового ответа
        Response::create([
            'question_id' => Question::findOrFail($data['question_id'])->id,
            'option_id' => Option::findOrFail($data['option_id'])->id,
            'custom_answer' => $data['custom_answer'] ?? null,
            'user_id' => $request->user()->id,
        ]);

        return response()->json(['message' => 'Ответ сохранен']);
    }
}
