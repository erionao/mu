<?php
use App\models\Background;
use App\models\Section;

class BackgroundController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return \View::make('admin.pages.background.pages');

    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function section($sectionId)
	{
        $section = Section::with('images')->find($sectionId);

        return $section;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store($sectionId){
        $image = new Background();

        $image->section_id = $sectionId;

        $image->image = \Input::file('file');



        $destination = 'uploads/background/';
        $imageName = str_random() . '.' . $image->image->getClientOriginalExtension();

//        \Input::file('image')->move(public_path() . $destination, $imageName);
        Image::make($image->image)->resize(1200, 800)->save($destination.$imageName);

        $image->image = $imageName;

        $image->save();

        return $image;

    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $image = Background::find($id);
        $image->delete();
	}


}
