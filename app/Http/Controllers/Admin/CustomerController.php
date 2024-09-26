<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerController extends Controller
{

    public function __construct(protected CustomerRepositoryInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userInterface->getAll();
        return view('pages.dashboard.user.list-page', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.user.create-page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->userInterface->create($request->validated());
        return redirect()->back()->with('success', 'You have create to customer successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = $this->userInterface->getById($id);
        return view('pages.dashboard.user.edit-page', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        $this->userInterface->update($id, $request->validated());
        return redirect()->back()->with('success', 'You have delete to customer successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->userInterface->destroy($id);
        return redirect()->back();
    }
}
