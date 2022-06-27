@extends('templates.template')
@section('content')

    <div class="container">

                <x-menu>

                </x-menu>


        <div class="d-flex justify-content-between">
            <h2>Pacientes Cadastrados</h2>
            <a href="{{route('createpatient')}}"  class="btn btn-sm btn-success mb-2">
                Cadastrar Paciente
                <img src="/images/patient.png" width="30"  />
            </a>
        </div>

        <table id="pesquisa" class="table table-striped table-hover">
            <thead class="table-info">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso Kg</th>
                    <th>Altura</th>
                    <th>Sexo</th>
                    <th>Tipo-Sanguíneo</th>
                    <th>Contato</th>
                    <th>Endereço</th>
                    <th>Visualizar / Editar  /  Excluir  </th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr>
                        <td> {{ $patient->name }} </td>
                        <td> {{ $patient->age }} </td>
                        <td> {{ number_format($patient->weight,1,'.', '.' )}} </td>
                        <td> {{ number_format($patient->height,2, '.', '.' )}} </td>
                        <td> {{ $patient->sexo}}</td>
                        <td> {{ $patient->blood}} </td>
                        <td> {{ $patient->contatc}}</td>
                        <td> {{ substr($patient->address, 0, 15)}} </td>

                        {{-- Botoes  Visualizar / Editar / Excluir--}}

                        <td class="d-flex">
                            <a href="{{route('patientver', $patient->id)}}" class="btn btn-info edit-btn ms-1 text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar">
                                <img src="/images/visu.png" width="25" />
                            </a>
                            <a href="{{route('patientedit', $patient->id)}}" class="btn btn-primary edit-btn ms-1"data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                <img src="/images/edita.png" width="25" />
                            </a>
                            <form action="{{route('patientdelete',$patient->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn ms-1"data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                    <img src="/images/excluir.png" width="25" />
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center"> <strong>Não há Pacientes cadastrados</strong> </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <x-footer>

    </x-footer>
@endsection
