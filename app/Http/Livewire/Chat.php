<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chat extends Component
{
    public $name;
    public $mensaje;

    public function mount() //se inicializa el componente, al recargar la página.
    {
        $this->name = '';
        $this->mensaje = '';
    }

    public function render()
    {
        return view('livewire.chat');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            "name" => "required|min:3",
            "mensaje" => "required",
        ]);
    }
    public function sendMessage()
    {
        $this->validate([
            "name" => "required|min:3",
            "mensaje" => "required",
        ]);

        $this->emit('mensajeEnviado'); //alerta de mensaje enviado

        $data = [
            "user" => $this->name,
            "mensaje" => $this->mensaje
        ];
        $this->emit('mensajeRecibido',$data);

        event(new \App\Events\SendMessage($this->name, $this->mensaje));
    }
}
