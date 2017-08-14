<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->only('user_id', 'product_id', 'content');
            try {
                $comment = new Comment;
                $comment->user_id = $input['user_id'];
                $comment->product_id = $input['product_id'];
                $comment->content = $input['content'];
                $comment->save();
                $htmlComment = view('comment', compact('comment'))->render();
            $result = [
                'success' => true,
                'htmlComment' => $htmlComment,
            ];
            } catch (Exception $e) {
                $result = [
                    'success' => false,
                    'message' => trans('label.comment_fail'),
                ];
                return response()->json($result);
            }
            return response()->json($result);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Comment::findOrFail($id)->delete();

            return redirect()->back()
                ->with('success', trans('auth.delete-comment-successfully'));
        } catch (Exception $e) {
            return redirect()->back()
                ->with('errors', trans('auth.delete-comment-fail'));
        }
    }

    public function updateComment(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->only('id', 'content');
            try {
            $comment = Comment::findOrFail($input['id']);
            $comment->content = $input['content'];
            $comment->save();
            $htmlComment = view('comment', compact('comment'))->render();
            $result = [
                'success' => true,
                'htmlComment' => $htmlComment,
            ];
            } catch (Exception $e) {
                $result = [
                    'success' => false,
                    'message' => trans('label.edit_comment_fail'),
                ];
                return response()->json($result);
            }
            return response()->json($result);
        }
        return redirect()->back();
    }
}
