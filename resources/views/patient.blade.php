@extends('templates.template')
@section('content')

    <div class="container">

                <x-menu>

                </x-menu>


        <div class="d-flex justify-content-between">
            <h2>Pacientes Cadastrados</h2>
            <a href="{{route('createpatient')}}"  class="btn btn-sm btn-secondary mb-2">Cadastrar Paciente</a>
        </div>

        <table class="table table-striped table-hover">
            <thead class="table-info">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso - Kg</th>
                    <th>Altura</th>
                    <th>Tipo-Sanguíneo</th>
                    <th>Contato</th>
                    <th>Endereço</th>
                    <th>Editar / Excluir</th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr>
                        <td> {{ $patient->name }} </td>
                        <td> {{ $patient->age }} </td>
                        <td> {{ number_format($patient->weight,1,'.', '.' )}} </td>
                        <td> {{ number_format($patient->height,2, '.', '.' )}} </td>
                        <td> {{ $patient->blood}} </td>
                        <td> {{ $patient->contatc}}</td>
                        <td> {{ $patient->address }} </td>
                        <td class="d-flex">
                            <a href="{{route('patientedit', $patient->id)}}" class="btn btn-info edit-btn ms-1">  Editar</a>
                            <form action="{{route('patientdelete',$patient->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn ms-1">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Não há Pacientes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
