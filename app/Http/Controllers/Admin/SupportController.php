<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        // dd($supports);

        return view('admin/supports/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);
        // dd($support);

        return redirect()->route('supports.index');
    }

    public function show(Support $support, string|int $id)
    {

        if (!$support = $support->find($id)) {
            return redirect()->route('supports.index');
        }

        return view('admin/supports/show', compact('support'));
    }


    public function edit(Support $support, string| int $id)
    {
        if (!$support = $support->find($id)) {
            return redirect()->route('supports.index');
        }

        return view('admin/supports/edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }

        $support->update($request)->validated();

        return redirect()->route('supports.index');
    }

    public function destroy(Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }

        $support->delete();


        return redirect()->route('supports.index');
    }
}
