<?php

namespace App\Http\Controllers;
use App\Models\EventParticipant;
use Illuminate\Http\Request;

class EventParticipantController extends Controller
{
    //Método para traer los datos GET request
    public function index()
    {
        return EventParticipant::all();
    }


    //Método para crear los datos POST request 
    public function store()
    {
        request()->validate([
            'event_id' => 'required',
            'participant_id' => 'required',
            
        ]);
        return EventParticipant::create([
    
            'event_id' => request('event_id'),
            'participant_id' => request('participant_id'),
            
        ]);
    }


    //Método para actualizar los datos PUT request
    public function update(EventParticipant $eventparticipant)
    {
        request()->validate([
            'event_id' => 'required',
            'participant_id' => 'required',
            
        ]);

      $success =  $eventparticipant->update([
    
            'event_id' => request('event_id'),
            'participant_id' => request('participant_id'),
            
        ]);

       return ['Exito Peticion PUT' => $success];
    }











    
    //Método para eliminar los datos DELETE request
    public function destroy(EventParticipant $eventparticipant)
    {
        $success = $eventparticipant->delete();
        return ['Exito Peticion DELETE' => $success];
    }
}
