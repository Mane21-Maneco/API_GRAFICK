<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ClienteResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return ClienteResource::collection(Cliente::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // For API-based controllers, `create` is not typically used.
        // Return an empty 204 or the list — here we return the list.
        $clientes = Cliente::all();
        return ClienteResource::collection($clientes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $data = $request->validated();
        $cliente = Cliente::create($data);
        return (new ClienteResource($cliente))->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return (new ClienteResource($cliente))->response()->setStatusCode(200);
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return response()->noContent();
    }
}
