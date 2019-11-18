<?php
namespace App\Http\Controllers;
use App\AdminUsers;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Role;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // return "hi";

       $data['users']=AdminUsers::all();

      return view('dashboard.users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        return view('dashboard.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(UsersRequest $request)
    // {
    //     // return $request->all();

    //     User::create($request->all());

    //     return view('dashboard.users.index');
    // }
    public function store(UsersRequest $request)
    {
        //


        if(trim($request->password) == ''){

            $input = $request->except('password');

        } else{


            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }
        User::create($input);


        return view('dashboard.users.index');


//        return $request->all();





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
        return view('dashboard.users.show');
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
        return view('dashboard.users.edit');
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
        //
    }
}
