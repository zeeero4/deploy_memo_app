<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemoRequest;

use App\Models\Memo;
class MemoController extends Controller
{
    // showページへの移動
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }

    public function index()
    {
        $memos = Memo::all();
        return view('memos.index', ['memos' => $memos]);
    }

    public function create()
    {
        return view('memos.create');
    }

    public function store(MemoRequest $request)
    {
        $memo = new Memo;

        $memo->title = $request->title;
        $memo->body = $request->body;

        $memo->save();

        return redirect('/memos');
    }

    public function edit($id)
    {
        $memo = Memo::find($id);
        return view('memos.edit', ['memo' => $memo]);

    }

    public function update(MemoRequest $request, $id)
    {
        $memo = Memo::find($id);

        $memo->title = $request->title;
        $memo->body = $request->body;

        $memo->save();

        return redirect('/memos');
    }

    public function destroy($id)
    {
        $memo = Memo::find($id);
        $memo->delete();

        return redirect('/memos');

    }

}
