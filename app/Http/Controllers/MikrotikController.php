<?php

namespace App\Http\Controllers;

use \RouterOS\Query;
use RouterOS\Client;
use RouterOS\Config;
use App\Models\RouterosAPI;
use Illuminate\Http\Request;
// use MikrotikAPI\MikrotikAPI;

class MikrotikController extends Controller
{


    public function welcome(){
        return view('welcome');
    }
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index()
    {
        
        $client = new Client([
            'host' => '192.168.88.1',
            'user' => 'admin',
            'pass' => 'admin'
        ]);
        
        $query =(new Query('/system/identity/print'));

        // Send query and read response from RouterOS
        $response = $client->query($query)->read();

        // dd($response);
        
        return view('status', ['response' => $response]);
    }

    public function connexionUser(Request $request)
{
    // Récupérer les données du formulaire
    $username = $request->input('username');
    $password = $request->input('password');
    $userIP = $request->getClientIp();
    // Établir la connexion avec le routeur MikroTik
    $client = new Client([
        'host' => '192.168.88.1',
        'user' => 'admin',
        'pass' => 'admin'
    ]);
    // $API = new RouterosAPI();
    // $mac = $API->getMacAddress();
    // dd($mac);
    $query = new Query('/ip/hotspot/host/print');
    $response = $client->query($query)->read();
    // dd($response);
    // Créer une nouvelle requête pour ajouter l'utilisateur au hotspot
    $query = new Query('/ip/hotspot/active/login');
    $query->where('user', $username);
    
    $query->where('password', $password);
    $query->where('ip', $userIP);
    // dd($query);

    // Envoyer la requête à l'API MikroTik
    $response = $client->query($query)->read();

    // Traiter la réponse pour vérifier si l'utilisateur a été connecté avec succès
    if (!empty($response)) {
        dd($response);
        // L'utilisateur a été connecté avec succès
        return redirect()->back()->with('success', 'Utilisateur connecté au hotspot.');
    } else {
        // Une erreur s'est produite lors de la connexion de l'utilisateur
        return redirect()->back()->with('error', 'Échec de la connexion de l\'utilisateur.');
    }
}


    // public function connexionUser(Request $request)
    // {
    //     $donnees = $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $username = $request->input('username');
    //     $password = $request->input('password');
    //     // $ipAddress = $request->ip();

    //     $client = new Client([
    //         'host' => '192.168.88.1',
    //         'user' => 'admin',
    //         'pass' => 'admin'
    //     ]);

    //     $query = new Query('/ip/hotspot/active/login/add');
    //     $query->equal('user', $username);
    //     $query->equal('password', $password);

    //     $response = $client->query($query)->read();

    //     if ($response) {
    //         // Utilisation de dd() pour le débogage
    //         dd($response);
    //         // return redirect()->route('status');
    //     } else {
    //         return "Connexion échouée";
    //     }
    // }


    public function genererUser(){
        $ip= '192.168.88.1';
        $user= 'admin';
        $passsword= 'admin';
        $API = new RouterosAPI();
        $API->debug('false');


        if($API->connect($ip, $user, $passsword)){
            //Username
            $randomNumber = rand(1111, 9999);
            $username = "Anyx_".$randomNumber;

            //Password
            $randomNumber = rand(111111, 999999);
            $generatedPassword = $randomNumber; 

            $addUser = $API->comm("/user/add", [
                "username" => $username,
                "password" => $generatedPassword
                // "profile" => $profileName,
            ]);
            dd($addUser);
            if ($addUser) {
                $API->disconnect();
                return view('utilisateur',compact('addUser'));
            } else {
                $API->disconnect();
                return "Échec lors de la création de l'utilisateur";
            }
        //    dd($info_users);
        //    return redirect()->route('status');
        }else{
            return "Connexion échouée";
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
