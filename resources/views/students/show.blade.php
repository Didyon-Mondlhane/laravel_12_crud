@extends('layout.app')

@section('title', 'Detalhes do Estudante')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h2 class="mb-4 text-white">Detalhes do Estudante</h2>

            <div class="card bg-dark text-white -mt-4">
                <div class="card-body border boder-success rounded">
                    <h5 clas="card-title"><strong>Nome: </strong> {{ $student->name }} </h5>
                    <p clas="card-text"><strong>Email: </strong> {{ $student->email }} </p>
                    <p clas="card-text"><strong>Número de telemóvel: </strong> {{ $student->phone_number }} </p>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Regressar à lista</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection