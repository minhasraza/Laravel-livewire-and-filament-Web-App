<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServicesDetailPage extends Component
{
    public $service;

    public function mount($id){
        $this->service = Service::findorFail($id);
    }

    public function render()
    {
        return view('livewire.show-services-detail-page',[
            "service" => $this->service
        ]);
    }
}
