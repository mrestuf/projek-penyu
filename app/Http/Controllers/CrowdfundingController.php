<?php

namespace App\Http\Controllers;

use App\Models\Crowdfunding;
use Illuminate\Http\Request;

class CrowdfundingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Crowdfunding $crowdfunding)
    {
      $crowdfundings = $crowdfunding->take(3)->inRandomOrder()->get();

      return view('cfs.contents.index', compact('cfs'));
    }

    public function eksplorCrowdfunding()
    {
      return view('crowdfundings.contents.eksplor');
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
    public function show($id, Crowdfunding $crowdfunding)
    {
      $crowdfunding = $crowdfunding->where('id', $id)->first();
      $total = $crowdfunding->total_pengembangan;
      $target = $crowdfunding->target_pengembangan;
      $persen = ($target - $total) * 100;
      return view('crowdfundings.contents.detail', compact('crowdfunding', 'persen'));
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
