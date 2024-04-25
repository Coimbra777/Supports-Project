<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(
        protected SupportService $service
    ) {
    }
    public function index(Request $request,)
    {
        // $supports = $support->all();

        $supports = $this->service->getAll($request->filter);

        dd($supports);

        return view('admin/supports/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request)
    {
        // $data = $request->all();
        // $data['status'] = 'a';
        // $support = $support->create($data);
        // dd($support);

        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function show(string $id)
    {

        // if (!$support = $support->find($id)) {
        //     return redirect()->route('supports.index');
        // }

        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }


    public function edit(string $id)
    {
        // if (!$support = $support->find($id)) {
        //     return redirect()->route('supports.index');
        // }

        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin/supports/edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, string $id)
    {
        $this->service->update(
            UpdateSupportDTO::makeFromRequest($request),
            $id
        );

        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        // if (!$support = $support->find($id)) {
        //     return back();
        // }
        $this->service->delete($id);
        // $support->delete();


        return redirect()->route('supports.index');
    }
}
