@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Main Page</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('add-question') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">Add Question:</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <h2>Questions List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->category }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="form-group">
            <label for="category">Select RIASEC Category:</label>
            <select class="form-control" id="category" name="category" required>
                <option value="R">Realistic</option>
                <option value="I">Investigative</option>
                <option value="A">Artistic</option>
                <option value="S">Social</option>
                <option value="E">Enterprising</option>
                <option value="C">Conventional</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Question</button>
    </form>
</div>
@endsection