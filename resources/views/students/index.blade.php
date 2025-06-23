@extends('layout.app')

@section('title', 'Lista de Estudantes')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4 text-white">Lista de Estudantes</h2>
    <a href="{{ route('students.create') }}" class="btn btn-outline-info mb-3">Adicionar estudante</a>


    @session('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Sucesso!</strong> {{$value}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endsession


    <table class="table table-bordered table-dark table-striped">

        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Número de telemóvel</th>
                <th>Acções</th>
            </tr>
        </thead>

        <tbody>

            @forelse( $students as $student)

            <tr>
                <td> {{ $student->id }} </td>
                <td> {{ $student->name }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->phone_number }} </td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-warning">Ver</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-info">Editar</a>
                    <button type="button" class="btn btn-outline-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" data-id="{{ $student->id }}">Eliminar</button>
                </td>
            </tr>

            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum estudante encontrado!</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $students->links('vendor.pagination.bootstrap-5-dark')}}
    </div>

</div>


<!-- Delete Student Modal -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title">Eliminar Estudante?</h5>

                <button 
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            
            <div class="modal-body">
                <p>Esta acção não poderá ser revertida.</p>
            </div>
            
            <div class="modal-footer border-0">
                <button
                    type="button"
                    class="btn btn-outline-light"
                    data-bs-dismiss="modal"
                >
                    Cancelar
                </button>
                
                <form id="deleteForm" action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Eliminar estudante
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const deleteButton = document.querySelectorAll('.delete-btn');
        const deleteForm = document.getElementById('deleteForm');

        deleteButton.forEach(button =>{
            button.addEventListener('click', function(){
                const studentId = this.dataset.id;
                deleteForm.action = `/students/${studentId}`;
            })
        });
    });
</script>
@endsection