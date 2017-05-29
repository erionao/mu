<?php

use App\models\Project;
use App\models\ProjectImage;
use App\models\ProjectType;

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function projectList()
	{
		return \View::make('admin.pages.project.list');
	}

	public function add()
	{
		return \View::make('admin.pages.project.add');
	}

	public function index(){
		$project = Project::with('type')->get();

		return $project;
	}


	/**
	 * @param $projectId
	 * @return mixed
	 */
	public function details($projectId)
	{
		return \View::make('admin.pages.project.details', array($projectId));
	}

	public function show($projectId)
	{
		$project = Project::with('images', 'type')->find($projectId);

		return $project;
	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$project = new Project();
		$project->title = \Input::get('title');
		$project->content = \Input::get('content');
		$project->type_id = \Input::get('type_id');

		$project->save();

		$files = \Input::file('file');

		foreach( $files as $file){
			$image = new ProjectImage();
			$image->project_id = $project->id;


			$destination = 'uploads/projects/';
			$imageName = str_random() . '.' . $file['files']->getClientOriginalExtension();

			$file['files']->move(public_path() . $destination, $imageName);
//			Image::make($file['files'])->resize(1200, 800)->save($destination.$imageName);

			$image->image = $imageName;

			$image->save();
		}

		return $project;
	}



	public function addImage($projectId){
		$image = new ProjectImage();

		$image->project_id = $projectId;

		$image->image = \Input::file('file');



				$destination = 'uploads/projects/';
			$imageName = str_random() . '.' . $image->image->getClientOriginalExtension();

//        \Input::file('image')->move(public_path() . $destination, $imageName);
			Image::make($image->image)->resize(1200, 800)->save($destination.$imageName);

			$image->image = $imageName;

			$image->save();

		return $image;

	}

	/**
	 * Delete project image
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteImage($id)
	{
		$image = ProjectImage::find($id);



		$image->delete();
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
		$project = Project::find($id);

		$project->delete();
	}



	// Project Type Get All
	public function indexTypes()
	{
		$types = ProjectType::get();

		return $types;
	}

	public function manjakosType(){


		$type = array('operations', 'construction', 'reference');

		foreach($type as $t){
			$projectType = new ProjectType();
			$projectType->name = $t;
			$projectType->save();
		}
	}


}
