<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Crowdfunding;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Wisata $wisata, Crowdfunding $crowdfunding)
    {
      $wisatas = $wisata->take(3)->inRandomOrder()->get();
      $crowdfundings = $crowdfunding->take(3)->inRandomOrder()->get();

      return view('welcome', compact('wisatas','crowdfundings'));
    }

//     public function eksplorWisata()
//     {
//       return view('wisatas.contents.eksplor');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id, Wisata $wisata)
//     {
//       $wisata = $wisata->where('id', $id)->first();

//       return view('wisatas.contents.detail', compact('wisata'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
