<div>
    {{-- Stop trying to control. --}}
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>
    <input type="text" wire:model="todo" wire:keydown.enter="addTodo" placeholder="Add a new todo...">
    <button wire:click="addTodo">Add Todo</button>
    <button wire:click="resetTodos">Reset Todo</button>
    <ol class="list-disc pl-5">
        @foreach($todos as $todo)
            <li class="flex items-center space-x-2">
                {{ $todo }}
            </li>

        @endforeach
</ol>
</div>
