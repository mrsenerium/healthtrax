<div>
    <h2 class="mb-3">Log a Meal</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit" class="border p-4 rounded">
        <div class="mb-3">
            <label for="description" class="form-label">Meal Description</label>
            <input type="text" id="description" wire:model="description" class="form-control">
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="mealType" class="form-label">Meal Type</label>
            <select id="mealType" wire:model="mealType" class="form-select">
                <option value="">Select Meal Type</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="snack">Snack</option>
            </select>
            @error('mealType') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="calories" class="form-label">Calories</label>
            <input type="number" id="calories" wire:model="calories" class="form-control">
            @error('calories') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Log Meal</button>
    </form>
</div>