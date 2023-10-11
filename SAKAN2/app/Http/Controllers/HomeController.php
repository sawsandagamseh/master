<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Category;
use App\Models\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allhomes = Home::all();
       

        return view("dash.admin_my_listings", compact('allhomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcat = Category::all();
        return view("dash.add_property" , compact('allcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $imageNames = [];

        for ($i = 1; $i <= 10; $i++) {
            $image = $request->file("image{$i}");
    
            if ($image) {
                $imageName = time() . "_{$i}." . $image->getClientOriginalExtension();
                $image->move(public_path('images/'), $imageName);
    
                // Store the image name in the array with the loop index as the key
                $imageNames[] = $imageName;
            }
        }
        // $input = $request->all();


        Home::create([
            'name' => $request->name,
            'price' => $request->price,
            'age' => $request->age,
            'bath_number' => $request->bath_number,
            'room_number' => $request->room_number,
            'carage_number' => $request->carage_number,
            'bedroom_number' => $request->bedroom_number,
            'plane_image' => $request->plane_image,
            'description' => $request->description,
            'location' => $request->location,
            'avaliable' => $request->avaliable,
            'image1' => isset($imageNames[0]) ? $imageNames[0] : 'null',
            'image2' => isset($imageNames[1]) ? $imageNames[1] : 'null',
            'image3' => isset($imageNames[2]) ? $imageNames[2] : 'null',
            'image4' => isset($imageNames[3]) ? $imageNames[3] : 'null',
            'image5' => isset($imageNames[4]) ? $imageNames[4] : 'null',
            'image6' => isset($imageNames[5]) ? $imageNames[5] : 'null',
            'image7' => isset($imageNames[6]) ? $imageNames[6] : 'null',
            'image8' => isset($imageNames[7]) ? $imageNames[7] : 'null',
            'image9' => isset($imageNames[8]) ? $imageNames[8] : 'null',
            'image10' => isset($imageNames[9]) ? $imageNames[9] : 'null',
            'city' => $request->city,
            'district' => $request->district,
            'area_type' => $request->area_type,
            'area_name' => $request->area_name,
            'category_id' => $request->category_id,
            'agent_id' => 1,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home,$id)
    {

        $allcat = Category::all();
        $allsub = Subscription::all();
        $editHome = Home::find($id);
        return view('Dash.edit_property', compact('allcat', 'allsub', 'editHome'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $home = Home::find($id);
        $input = $request->all();
    //    dd($request);
    $home->update($input);
    //dd($input);
    // return redirect("dashboard_admin.index")->with('success','Category updated successfully');
                   
    return redirect()->route('admin_my_listings.index')->with('success', 'Category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
