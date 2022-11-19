<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageLivewire extends Component
{
    public   $messages ;
    public $showNewOrderNotification = false;
    protected $listeners = [
        'echo:orders,OrderShipped' => 'notifyNewOrder',
        'echo:my-channel,MyEvent'=>'notifyNewOrder'
    ];

    public function render()
    {
        return view('livewire.message-livewire');
    }

    public function mount()
    {
        $this->messages=Message::latest()->get();
    }
    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
        $this->messages=Message::latest()->get();
    }
}
