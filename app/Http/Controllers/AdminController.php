<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;

class AdminController extends Controller
{

    public function __construct()
    {
        $admin = new Admin;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh sách quản trị viên';

        $adminsList = Admin::all();
        return view('admin.admin-list', compact('adminsList','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tạo mới quản trị viên';
        return view('admin.admin-create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $admin = Admin::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

        return redirect()->route('admin.admin-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($AdminId)
    {
        $title = 'Cập nhật thông tin';

        $admin = Admin::find($AdminId);

        return view('admin.admin-edit', compact('title','admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin, $AdminId)
    {
        $admin = Admin::find($AdminId);

        $admin->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!empty($id)) {
            $user = Admin::find($id);
            $user->delete();
        }
        return redirect()->back();
    }
}
