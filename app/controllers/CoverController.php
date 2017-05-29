<?php

use App\models\Cover;


class CoverController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \View::make('admin.pages.cover.cover',
            array(
                'cover' => Cover::where('type', 'cover')->get(),
                'logo' => Cover::where('type', 'logo')->get(),
                'flaticon' => Cover::where('type', 'flaticon')->get()
            ));
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
    public function store($type)
    {
        $cover = new Cover();
        $cover->image = \Input::file('image');
        $cover->type = $type;

        $destination = 'uploads/cover/';

        $imageName = str_random() . '.' . $cover->image->getClientOriginalExtension();

        \Input::file('image')->move(public_path() . $destination, $imageName);

        $cover->image = $imageName;

        $cover->save();

        return \Redirect::to('/cover');
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
    public function update($type, $id)
    {

        $cover = Cover::find($id);
        $cover->image = \Input::file('image');
        $cover->type = $type;

        $destination = 'uploads/cover/';

        $imageName = str_random() . '.' . $cover->image->getClientOriginalExtension();

        \Input::file('image')->move(public_path() . $destination, $imageName);

        $cover->image = $imageName;

        $cover->update();

        return \Redirect::to('/cover');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $cover  = Cover::find($id);

        $cover->delete();

        return \Redirect::to('/cover');
    }


}
