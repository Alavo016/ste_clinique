<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Specialites;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function index(){
        $totalPatients = User::where('id_role', 1)->count();
        $doctors = User::where('id_role', 2)->count();
        $infirmiere =  User::where('id_role', 3)->count();

        return view('admin.dashboard', compact('totalPatients', 'doctors', 'infirmiere'));
    }
    public function statistique(){
        return view ('admin.statistique');
    }
    public function listdocteur()
    {
        $roles = Roles::all();
        $specialites = Specialites::all();

        $listdocteurs = User::where('id_role', 2)->get();
        return view('admin.list_docteur', compact('listdocteurs', 'roles', 'specialites'));
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'pseudo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone'=>['required','string','max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'integer'],
            'specialite' => ['required', 'integer'],
        ]);

        // Créez un nouvel utilisateur avec les données validées
        $user = new User();
        $user->name = $validatedData['name'];
        $user->prenom = $validatedData['prenom'];
        $user->pseudo = $validatedData['pseudo'];
        $user->email = $validatedData['email'];
        $user->telephone = $validatedData['telephone'];
        $user->password = Hash::make($validatedData['password']);
        $user->id_role = $validatedData['role'];
        $user->specialite_id = $validatedData['specialite'];

        // Enregistrez l'utilisateur dans la base de données
        $user->save();

        // Redirigez l'utilisateur vers une autre page après l'enregistrement
        return redirect()->route('admin.listdocteur')->with('success', 'Utilisateur créé avec succès.');
    }

    public function supprimerdoc($id)
    {
        // Recherche du docteur par son ID
        $docteur = User::find($id);

        // Vérification si le docteur existe
        if (!$docteur) {
            // Redirection avec un message d'erreur si le docteur n'est pas trouvé
            return redirect()->back()->with('error', 'Docteur non trouvé.');
        }

        // Suppression du docteur
        $docteur->delete();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Docteur supprimé avec succès.');
    }

}
