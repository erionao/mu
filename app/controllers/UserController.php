<?php

use App\models\User;

class UserController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::get();

        return $users;
    }

    public function show($id)
    {
        $user = User::find($id);

        return $user;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function login()
    {
        $rules = array(
            'email' => 'required|email',
            // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3'
            // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = \Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return \Redirect::to('login')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(\Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' => \Input::get('email'),
                'password' => \Input::get('password')
            );

            // attempt to do the login
            if (\Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return \Redirect::to('/dashboard');

            } else {

                // validation not successful, send back to form
                return \Redirect::to('login');

            }

        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = new User();

        $user->email = \Input::get('email');
        $user->password = \Hash::make(\Input::get('password'));

        $user->save();

        return $user;


    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function showLoginForm()
    {
        return \View::make('admin.auth.login');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function logout()
    {
        \Auth::logout();

        return \Redirect::to('login');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::find($id);

        $user->email = \Input::get('email');
        $user->password = \Hash::make(\Input::get('password'));

        $user->update();

        return $user;


    }

    public function userLists()
    {
        return \View::make('admin.pages.users.add');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

    }

    public function seedUser()
    {

        $user = new User();
        $user->email = 'admin@admin.com';
        $user->password = \Hash::make('admin');

        $user->save();
    }


}
