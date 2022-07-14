<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRubriqueRequest;
use App\Models\Rubrique;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $rubriques = Rubrique::all();

        return response()->json([
            'status' => true,
            'rubriques' => $rubriques
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
     * @param StoreRubriqueRequest $request
     * @param Rubrique $rubrique
     * @return JsonResponse
     */
    public function store(StoreRubriqueRequest $request)
    {
        $rubrique = Rubrique::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Rubrique ajoutée avec succès",
            'rubrique' => $rubrique
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrique $rubrique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubrique $rubrique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreRubriqueRequest $request
     * @param \App\Models\Rubrique $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRubriqueRequest $request, Rubrique $rubrique)
    {
        $rubrique->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return JsonResponse
     */
    public function destroy(Rubrique $rubrique)
    {
        $rubrique->delete();

        return response()->json([
            'status' => true,
            'message' => "Rubrique supprimée avec succès"
        ], 200);
    }
}
