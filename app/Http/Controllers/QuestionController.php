<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all(); // Fetch all questions
        return view('main', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'category' => 'required|string|max:1',
        ]);

        DB::table('questions')->insert([
            'question' => $request->question,
            'category' => $request->category,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('main')->with('success', 'Question added successfully!');
    }

    public function addQuestion(Request $request)
    {
        // Validate the request
        $request->validate([
            'question' => 'required|string|max:255',
            'category' => 'required|string|max:1',
        ]);

        // Create a new question
        Question::create([
            'question' => $request->input('question'),
            'category' => $request->input('category'),
        ]);

        // Redirect back with a success message
        return redirect()->route('main')->with('success', 'Question added successfully!');
    }
}