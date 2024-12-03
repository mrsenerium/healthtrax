<?php
namespace App\Livewire;

use Livewire\Component;

class MealLogger extends Component
{
    public $description;
    public $mealType;
    public $calories;

    public function submit()
    {
        $this->validate([
            'description' => 'required|string|max:255',
            'mealType' => 'required|string',
            'calories' => 'required|numeric',
        ]);

        // Store the meal log (database integration to be added later)
        session()->flash('message', 'Meal logged successfully!');

        // Clear the form fields
        $this->reset(['description', 'mealType', 'calories']);
    }

    public function render()
    {
        return view('livewire.meal-logger');
    }
}
