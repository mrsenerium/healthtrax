<?php

namespace App\Livewire;

use Livewire\Component;

class HealthTracker extends Component
{
    public $weight;
    public $calories;
    public $log = [];

    public function addLog()
    {
        $this->validate([
            'weight' => 'required|numeric',
            'calories' => 'required|numeric',
        ]);

        $this->log[] = [
            'weight' => $this->weight,
            'calories' => $this->calories,
            'logged_at' => now()->toDateTimeString(),
        ];

        // Clear input fields
        $this->weight = '';
        $this->calories = '';
    }

    public function render()
    {
        return view('livewire.health-tracker');
    }
}
