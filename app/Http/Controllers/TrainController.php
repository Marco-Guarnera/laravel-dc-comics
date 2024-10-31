<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // Create
    public function create() {
        return view('trains.create');
    }

    // Store
    public function store(Request $request) {
        $data_list = $request->all();

        /*
        $train = new Train();
        $train->azienda = $data_list['azienda'];
        $train->stazione_partenza = $data_list['stazione-partenza'];
        $train->stazione_arrivo = $data_list['stazione-arrivo'];
        $train->data_partenza = $data_list['data-partenza'];
        $train->data_arrivo = $data_list['data-arrivo'];
        $train->orario_partenza = $data_list['orario-partenza'];
        $train->orario_arrivo = $data_list['orario-arrivo'];
        $train->codice_treno = $data_list['codice-treno'];
        $train->numero_carrozze = $data_list['numero-carrozze'];
        $train->in_orario = $data_list['in-orario'];
        $train->cancellato = $data_list['cancellato'];
        $train->save();
        */

        $train = Train::create($data_list);

        return redirect()->route('trains.index');
    }

    // Index
    public function index() {
        $trains_list = Train::all();
        return view('trains.index', compact('trains_list'));
    }

    // Show
    public function show(string $id) {
        $train = Train::findOrFail($id);
        return view('trains.show', compact('train'));
    }

    // Edit
    public function edit(string $id) {
        $train = Train::findOrFail($id);
        return view('trains.edit', compact('train'));
    }

    // Update
    public function update(Request $request, string $id) {
        $data_list = $request->all();

        $train = Train::findOrFail($id);
        $train->azienda = $data_list['azienda'];
        $train->stazione_partenza = $data_list['stazione-partenza'];
        $train->stazione_arrivo = $data_list['stazione-arrivo'];
        $train->data_partenza = $data_list['data-partenza'];
        $train->data_arrivo = $data_list['data-arrivo'];
        $train->orario_partenza = $data_list['orario-partenza'];
        $train->orario_arrivo = $data_list['orario-arrivo'];
        $train->codice_treno = $data_list['codice-treno'];
        $train->numero_carrozze = $data_list['numero-carrozze'];
        $train->in_orario = $data_list['in-orario'];
        $train->cancellato = $data_list['cancellato'];
        $train->update();

        return redirect()->route('trains.index');
    }

    // Delete
    public function destroy(string $id) {
        $train = Train::findOrFail($id);

        $train->delete();

        return redirect()->route('trains.index');
    }
}
