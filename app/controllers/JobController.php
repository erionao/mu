<?php

use App\models\Job;

class JobController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function jobList()
    {
        return \View::make('admin.pages.job.list');
    }

    public function jobAdd()
    {
        return \View::make('admin.pages.job.add');
    }

    public function jobDetails($jobId)
    {
        return \View::make('admin.pages.job.details', array($jobId));
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobs = Job::get();

		return $jobs;
	}


    public function show($id)
    {
        $job = Job::find($id);

        return $job;
    }




	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$job = new Job();

        $job->title = \Input::get('title');
        $job->content = \Input::get('content');

        $job->save();

        return $job;
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
		$job = Job::find($id);

		$job->title = \Input::get('title');
        $job->content = \Input::get('content');

        $job->update();

        return $job;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$job = Job::find($id);

		$job->delete();
	}


}
