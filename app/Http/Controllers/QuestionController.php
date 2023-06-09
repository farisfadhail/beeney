<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Reply;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Question $questions)
    {
        $questions = Question::latest()->paginate(5);
        $latestQuestion = Question::latest()->first();

        $questionCounts = DB::table('questions')
                ->leftJoin('replies', 'questions.id', '=', 'replies.question_id')
                ->select('questions.id', DB::raw('COUNT(replies.id) as reply_count'))
                ->groupBy('questions.id')
                ->get()
                ->pluck('reply_count', 'id');

        return view('pages.question.index', [
            'questions' => $questions,
            'latestQuestion' => $latestQuestion,
            'questionCounts' => $questionCounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Question $question)
    {
        return view('pages.question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        $request->validated();

        Question::create([
            "id" => Str::uuid(),
            "user_id" => Auth::user()->id,
            "title" => $request->title,
            "body" => $request->body,
        ]);

        $question = Question::latest()->get();

        return redirect()->route("question.show", $question[0]->id)->with("success", "Question berhasil dibuat");
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question, Reply $replies)
    {
        $replies = Reply::where('question_id', $question->id)->get();

        $this->increaseWatchCount($question->id);

        return view('pages.question.show', [
            'question' => $question,
            'replies' => $replies,
            'users' => User::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('pages.question.edit',[
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $request->validated();

        $question->update([
            "title" => $request->title,
            "body" => $request->body,
        ]);

        return redirect()->route("question.index")->with("success", "Question berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route("question.index")->with("success", "Question berhasil dihapus");
    }

    public function increaseWatchCount($id)
    {
        $question = Question::findOrFail($id);
        $question->watch += 1;
        $question->save();
    }
}
