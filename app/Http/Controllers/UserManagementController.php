<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserManagementController extends Controller
{
    public function index(){
        return view('admin.users.index');
    }

    public function getData(){

        $users = User::query();
        
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                $editBtn = '<a href="' . '" class=""><i class="bi bi-pen"></i></a>';
                
                $deleteBtn = '<button type="button" data-id="' . $user->id . '" 
                                class=""><i class="bi bi-trash3"></i></button>';
                
                return '<div class="btn-group gap-2" role="group">' . $editBtn . $deleteBtn . '</div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}
