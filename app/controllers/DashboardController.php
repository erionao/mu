<?php

use App\models\Blog;
use App\models\Gallery;
use App\models\User;

class DashboardController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function dashboard()
    {

        $blogs = Blog::orderBy('created_at', 'desc')->limit(10)->get();
        $blogCount = Blog::count();
        $blogsArray = array('count' => $blogCount, 'blogs' => $blogs);



        $gallery = Gallery::orderBy('created_at', 'desc')->limit(10)->get();
        $galleryCount = Gallery::count();
        $galleryArray = array('count' => $galleryCount, 'gallery' => $gallery);

        $users = User::orderBy('created_at', 'desc')->limit(10)->get();
        $usersCount = User::count();
        $usersArray = array('count' => $usersCount, 'users' => $users);


        return \View::make('admin.pages.index',
            array('blogs' => $blogsArray, 'galleries' => $galleryArray, 'users' => $usersArray));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
