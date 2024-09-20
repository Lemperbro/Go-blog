<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storereply_commentRequest;
use App\Http\Requests\Updatereply_commentRequest;
use App\Models\reply_comment;

class ReplyCommentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storereply_commentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(reply_comment $reply_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reply_comment $reply_comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatereply_commentRequest $request, reply_comment $reply_comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reply_comment $reply_comment)
    {
        //
    }
}
