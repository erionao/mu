<?php

use App\models\Gallery;
use Intervention\Image\Facades\Image;

class GalleryController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \View::make('admin.pages.gallery.gallery', array('galleries' => Gallery::get()));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $gallery  = new Gallery();

        $gallery->image = \Input::file('image');
        $gallery->category = \Input::get('category');

        $destination = 'uploads/gallery/';

        $imageName = str_random() . '.' . $gallery->image->getClientOriginalExtension();

//        \Input::file('image')->move(public_path() . $destination, $imageName);
        Image::make(\Input::file('image'))->resize(300, 200)->save($destination.$imageName);

        $gallery->image = $imageName;

        $gallery->save();


        return \Redirect::to('gallery/images');
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

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $gallery = Gallery::find($id);

        $gallery->image = \Input::file('image');
        $gallery->category = \Input::get('category');

        $destination = 'uploads/gallery/';

        $imageName = str_random() . '.' . $gallery->image->getClientOriginalExtension();

//        \Input::file('image')->move(public_path() . $destination, $imageName);

        Image::make(\Input::file('image'))->resize(300, 200)->save($destination.$imageName);

        $gallery->image = $imageName;

        $gallery->update();

        return \Redirect::to('gallery/images');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        $gallery->delete();

        return \Redirect::to('gallery/images');

    }


}
