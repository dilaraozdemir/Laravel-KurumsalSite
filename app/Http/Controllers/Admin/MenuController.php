<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    protected $appends=[
        'getParentsTree'
    ];
    public static function getParentsTree($menu, $title)
    {
        if ($menu->parent_id == 0)
        {
            return $title;
        }
        $parent = Menu::find($menu->parent_id);
        $title = $parent->title.'>'.$title;
        return MenuController::getParentsTree($parent,$title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datalist = DB::select( 'select * from categories');

        $datalist = Menu::with('children')->get();
        return view('admin.menu' , ['datalist' =>$datalist]);
    }
    /**
     * ADD
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $datalist = Menu::with('children')->get();
        //print_r($datalist);
        //exit();
        return view('admin.menu_add' , ['datalist' =>$datalist]);
    }
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('menus')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);
        return redirect()->route('admin_menu');
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {
        $data = Menu::find($id);
        $datalist = Menu::with('children')->get();
        return view('admin.menu_edit',['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu,$id)
    {
        // Working with model
        $data = Menu::find($id);

        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');

        $data->save();
        return redirect()->route('admin_menu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        //
        $datalist = DB::table('menus')->where('id','=', $id)->delete();
        return redirect()->route('admin_menu');
    }
}
