<div>
    <!-- Prompt Input -->
    <div class="mb-3">
        <label for="prompt" class="form-label">Describe Your Meal</label>
        <input type="text" id="prompt" wire:model="prompt" class="form-control" placeholder="E.g., Today I had a Grilled Chicken Salad">
        @error('prompt') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button wire:click="fetchMealData" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">Analyze Meal</button>

    <hr class="my-4">

    <!-- ChatGPT Response -->
    @if ($description)
        <h3>Meal Details</h3>
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="description" class="form-label">Meal Description</label>
                <input type="text" id="description" wire:model="description" class="form-control">
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredients</label>
                <ul>
                    @foreach ($ingredients as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-3">
                <label for="calories" class="form-label">Calories</label>
                <input type="number" id="calories" wire:model="calories" class="form-control">
                @error('calories') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="carbohydrates" class="form-label">Carbohydrates</label>
                <input type="number" id="carbohydrates" wire:model="carbohydrates" class="form-control">
                @error('carbohydrates') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Remark</label>
                <p>{{ $remark }}</p>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">Log Meal</button>
        </form>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
    
</div>