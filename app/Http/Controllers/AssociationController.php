<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Association, Members, User };
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AssociationController extends Controller
{
    public function index()
    {
        $associations = Association::all();
        return view('association.index', compact('associations'));
    }

    public function create()
    {
        $user = User::all();
        return view('association.create' , compact('user'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
        'name' => 'required|max:100',
        'description' => 'required|max:500',
        ]);

        $association = new Association;
        $association->name = $request->name;
        $association->description = $request->description;
        $association->user_id = auth()->user()->id;
        $association->save();

        Alert::success('Félicitations', 'L\'association a été ajoutée avec succès !');

        return back();
    }

    public function show(Association $association)
    {
        $members = Members::all();
        $users = User::all();
        return view('association.show', compact('association', 'members', 'users'));
    }

    public function edit(Association $association)
    {
        return view('association.edit', compact('association'));
    }

    public function update(Request $request, Association $association)
    {
        $data = $request->validate([
        'name' => 'required|max:300',
        'description' => 'required|max:500',
        ]);

        $association->name = $request->name;
        $association->description = $request->description;
        $association->save();

        Alert::success('Félicitations', 'Les infos de l\'association ont été mises à jour avec succès !');

        return back();
    }

    public function destroy(Association $association)
    {
        $association->delete();

        Alert::success('Bravo', 'Association supprimée avec succès !');

        return back();
    }
}
