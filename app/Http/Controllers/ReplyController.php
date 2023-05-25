<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Requests\UpdateReplyRequest;
use Illuminate\Support\Facades\Date;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($question_id)
    {
        $question = Question::findOrFail($question_id);

        return view('pages.replies.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request)
    {
        $request->validated();

        $reply = Reply::create([
            "user_id" => Auth::user()->id,
            "question_id" => $request->question_id,
            "reply_body" => $request->reply_body,
            'created_date' => Date::now()
        ]);

        return redirect()->route("question.show", $request->question_id)->with("success", "Reply berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        return view('pages.replies.edit', [
            'reply' => $reply
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReplyRequest $request, Reply $reply)
    {
        $request->validated();

        $reply->update([
            "reply_body" => $request->reply_body
        ]);

        return redirect()->route("question.show", $request->question_id)->with("success", "Reply berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();

        return redirect()->route("question.index")->with("success", "Question berhasil dihapus");
    }

    public function createPage($question_id)
    {
        $question = Question::findOrFail($question_id);

        return view('pages.replies.create')->with($question);
    }
}
