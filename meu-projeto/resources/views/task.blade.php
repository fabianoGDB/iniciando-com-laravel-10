<form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Nova tarefa">
    <button type="submit">Salvar</button>
</form>

<ul>
    @foreach($tasks as $task)
        <li>{{ $task->title }}</li>
    @endforeach
</ul>