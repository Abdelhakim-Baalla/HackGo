<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class UtilisateurController extends Controller
{
    public function utilisateur()
    {
        $utilisateurs = DB::table('utilisateur')->get();
        return $utilisateurs;
    }

    public function utilisateurParId(Request $request)
    {
        $utilisateurs = DB::table('utilisateur')->get()->where('id', '=', $request->id);
        return $utilisateurs;
    }

    public function create(Request $request)
    {
       
        DB::table('utilisateur')->insert([
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

        DB::table('utilisateur')->where('id', '=', $request->id)->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => $request->password,
            'updated_at' => now()
        ]);
    }


    public function supprimer(Request $request)
    {
        DB::table('utilisateur')->where('id', '=', $request->id)->delete();
    }

}
