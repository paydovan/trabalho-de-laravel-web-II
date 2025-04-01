<?php

use App\Models\Complaint;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/complaint/{resident}/{description}', function ($resident, $description) {
    $date = now();

    try {
        Complaint::create([
            'resident' => $resident,
            'description' => $description,
            'reported_at' => $date
        ]);

        return "Reclamação criada!";
    } catch (Error) {
        return "Falha na criação de uma reclamação!";
    };
});
