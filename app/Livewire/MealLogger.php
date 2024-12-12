<?php
namespace App\Livewire;

use Livewire\Component;

class MealLogger extends Component
{
    public $prompt = '';
    public $description = '';
    public $ingredients = [];
    public $calories = 0;
    public $carbohydrates = 0;
    public $remark = '';

    // Ensure this method is public
    public function fetchMealData()
    {
        $this->validate([
            'prompt' => 'required|string|max:500',
        ]);

        // Simulated response
        $response = [
            'description' => 'Grilled Chicken Salad',
            'ingredients' => ['Grilled Chicken', 'Lettuce', 'Tomatoes', 'Cucumber', 'Dressing'],
            'calories' => 350,
            'carbohydrates' => 15,
            'remark' => 'A healthy choice for your day!',
        ];

        $this->description = $response['description'];
        $this->ingredients = $response['ingredients'];
        $this->calories = $response['calories'];
        $this->carbohydrates = $response['carbohydrates'];
        $this->remark = $response['remark'];
    }

    public function render()
    {
        return view('livewire.meal-logger');
    }
}
