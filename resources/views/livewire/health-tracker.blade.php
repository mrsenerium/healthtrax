<div>
    <div class="container mt-5">
        <h1 class="text-primary">Bootstrap is Working!</h1>
        <button class="btn btn-danger">Click Me</button>
    </div>
    <h1>Health Tracker</h1>

    <form wire:submit.prevent="addLog">
        <div>
            <label for="weight">Weight (lbs):</label>
            <input type="number" id="weight" wire:model="weight" />
            @error('weight') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="calories">Calories:</label>
            <input type="number" id="calories" wire:model="calories" />
            @error('calories') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit">Add Log</button>
    </form>

    <h2>Logs</h2>
    <table>
        <thead>
            <tr>
                <th>Weight</th>
                <th>Calories</th>
                <th>Logged At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($log as $entry)
                <tr>
                    <td>{{ $entry['weight'] }}</td>
                    <td>{{ $entry['calories'] }}</td>
                    <td>{{ $entry['logged_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>