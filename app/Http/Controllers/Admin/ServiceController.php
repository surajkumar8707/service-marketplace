<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\ServiceDatatable;

class ServiceController extends Controller
{
    // public function index()
    // {
    //     return view('admin.service.index');
    // }

    public function index(ServiceDatatable $dataTable)
    {
        return $dataTable->render('admin.service.index');
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    public function update(Service $service, Request $request)
    {
        dd($service, $request);
    }

    public function delete(Service $service)
    {
        dd($service);
    }

    public function changeStatus(Request $request)
    {
        $status = $request->status;
        $id = $request->id;
        $service = Service::find($id);
        if ($service) {
            $service->update([
                'status' => $status,
            ]);
            return returnWebJsonResponse('Status changed successfully', 'success', $service);
        } else {
            return returnWebJsonResponse('Service not found');
        }
    }
}
