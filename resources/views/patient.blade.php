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
                                <button type="button" class="btn btn-danger delete-btn ms-1" 
                                        data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" 
                                        data-bs-target="#deleteModal" data-id="{{$patient->id}}" title="Excluir">

                                        <img src="/images/excluir.png" width="25" />

                                </button>

        
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                   <strong> Excluir Paciente ! </strong>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Confirma a exclusão do registro ?</p>
                                            
                                            </div>
                                                <input type="hidden" name="patient_id" id="patient_id" value="">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <script type="text/javascript">
        $('#deleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var recipientId = button.data('id');
          console.log(recipientId);

          var modal = $(this);
          modal.find('#patient_id').val(recipientId);
        })

    </script>

@endsection
