<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        p("working");
        $users = User::all();
        return response()->json($users, 200);
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
    public function store(Request $request)
    {
        //

        // $request->validate([
        //     'name' => 'required',
        //     'email' => ['required','email'],
        //     'password' => 'required|min:6 | max:12',
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],

            'password' => 'required|min:6 | max:12',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 400);
        } else {
            // $user = new User();
            // $user->name = $request->name;
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            // $user->save();

            DB::beginTransaction();
            try{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                DB::commit();
            }
            catch(\Exception $e){
                DB::rollback();
                return response()-> json($e->getMessage(),500);
            }
        }

        p($request->all());
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
