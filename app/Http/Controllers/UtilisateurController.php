<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class UtilisateurController extends Controller
{
    public function utilisateur()
    {
        // $utilisateurs = DB::table('utilisateur')->get();
        $utilisateurs = Utilisateur::all();
        return $utilisateurs;
    }

    public function utilisateurParId(Request $request)
    {
        // $utilisateurs = DB::table('utilisateur')->get()->where('id', '=', $request->id);
        $utilisateurs = Utilisateur::find($request->id);
        return $utilisateurs;
    }

    public function create(Request $request)
    {
       
        Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id,
            'created_at' => now()
        ]);
    }


    public function update(Request $request)
    {

        $user = Utilisateur::find($request->id);

        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => $request->password,
            'updated_at' => now()
        ]);
        
        $user->save();
    }


    public function supprimer(Request $request)
    {
        $user = Utilisateur::find($request->id);
        $user->delete();
    }

}
