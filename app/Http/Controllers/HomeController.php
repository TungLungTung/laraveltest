<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
        * display about page
        * @return \Illuminate\Http\Response
    */
    public function about() {
        // Truyền theo compact
        $title = "About";
        $description = "Laravel by Tung Tung Tung";
        // return view('main.about',
        //     compact('title','description'));

        // Khai bảo array
        $data = [
            'User One' => 'Tung',
            'User Two' => 'Le'
        ];

        // Truyền theo with()
        // return view('main.about')->with('title',$title);

        // Truyền with() với $data là array
        //return view('main.about')->with('data',$data);

        // Truyền trực tiếp vào
        return view('main.about',[
            'data' => $data,
            'title' => $title,
            'description' => $description
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
