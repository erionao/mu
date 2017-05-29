<?php

use App\models\Page;
use App\models\Section;

class PagesController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $section = '';
        return \View::make('admin.pages.pages.edit');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getPages()
    {
        $pages = Page::with('sections')->get();

        return $pages;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function sectionStore($pageName, $sectionName)
    {
        $section = Section::whereHas('page', function ($q) use ($pageName, $sectionName) {
            $q->where('name', $pageName);
        })->where('name', $sectionName)->first();

        $section->name = $sectionName;
        $section->content = \Input::get('content');
        $section->page_id = $section->page_id;


        $section->update();

        return $section;
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
    public function section($pageName, $sectionName)
    {
        $section = Section::whereHas('page', function ($q) use ($pageName, $sectionName) {
            $q->where('name', $pageName);
        })->where('name', $sectionName)->first();

        return $section;
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

    public function sectionsManjakos()
    {
        $sections = array(
            'About Us' => ['section1'],
//            'Catering' => ['section1', 'section2', 'section3', 'section4'],
//            'Consulting' =>['section1', 'section2', 'section3'],
//            'Chocolate' =>['section1', 'section2', 'section3'],
//            'Career' => ['section1', 'section2'],
            'Contact' => ['info']

        );

        foreach ($sections as $key => $value) {

            $p = new Page();
            $p->name = $key;
            $p->save();

            foreach($value as $k){
                $sect = new Section();
                $sect->name = $k;
                $sect->page_id = $p->id;
                $sect->save();
            }

        }


    }


}
