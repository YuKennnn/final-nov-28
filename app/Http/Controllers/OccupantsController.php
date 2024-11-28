<?php
namespace App\Http\Controllers;

use App\Models\Allocate;
use Illuminate\Http\Request;

class OccupantsController extends Controller
{
    public function index()
    {
        $occupants = Allocate::all();
        $totalOccupants = $occupants->count();
        
        return view('occupants', compact('occupants', 'totalOccupants'));
    }
}

