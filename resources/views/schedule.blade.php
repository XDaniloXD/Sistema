@extends('templates.template')
@section('content')
    <div class="container">

        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Agendamentos Cadastrados</h2>
        </div>

        <div class="d-flex justify-content-end ">
            <div class="d-flex ms-5 justify-content-start">
                <a href="{{route('createschedule')}}"  class="btn btn-success mb-2 ms-1">Cadastrar Agendamento</a>
                <a target="_blank" href="{{route('schedulespdf',['download'=>'pdf'])}}"  class="btn btn-secondary mb-2 ms-1">Consultas em Pdf</a>
            </div>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-primary mb-2 ms-1 text-white" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Status
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
                  <li><a href="{{route('schedule')}}"  class="btn btn-sm btn btn-primary mb-2  ms-1">A Consultar</a></li>
                  <li><a href="{{route('schedulesim')}}"  class="btn btn-sm btn btn-primary mb-2  ms-1">Realizadas</a></li>
                  <li><a href="{{route('scheduletodas')}}"  class="btn btn-sm btn btn-primary mb-2  ms-1">Todas</a></li>
                </ul>
            </div>
        </div>

        <table id="pesquisa" class="table table-striped table-hover">

       
            <thead class="table-info bg-light">
                
                <tr>
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Motivo</th>
                    <th>Data </th>
                    <th>Hora</th>
                    <th>Realizada</th>
                    {{--<th>Diagnostico</th>--}}
                    <th></th>
                    <th>Visualizar / Editar  /  Excluir  </th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <tr>
                        <td> {{ $schedule->patients->name }} </td>
                        <td> {{ $schedule->doctors->name }} </td>
                        <td> {{ $schedule->reason }} </td>
                        <td> {{Carbon\Carbon::parse($schedule->date)->format('d/m/Y')}} </td>
                        <td> {{Carbon\Carbon::parse($schedule->time)->format('H:i') }} </td>
                        <td> {{ ($schedule->confirmed == 1 ? 'Sim' : 'Não')}}</td>
                        <td> {{--!! substr($schedule->diagnosis, 0, 10)!!--}} </td>
                        <td class="d-flex">
                            <a href="{{route('schedulever', $schedule->id)}}" class="btn btn-info edit-btn ms-1 text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar">
                                <img src="/images/visu.png" width="25" />
                            </a>
                            <a href="{{route('scheduleedit', $schedule->id)}}" class="btn btn-primary edit-btn ms-1 rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                <img src="/images/edita.png" width="25" />
                            </a>
                            <form action="{{route('scheduledelete',$schedule->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger delete-btn ms-1" 
                                            data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" 
                                            data-bs-target="#deleteModal" data-id="{{$schedule->id}}" title="Excluir">
    
                                             <img src="/images/excluir.png" width="25" />
                                     </button>
    
            
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <strong>Excluir Agendamento !</strong>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Confirma a exclusão do registro ?</p>
                                            </div>
                                                <input type="hidden" name="schedule_id" id="schedule_id" value="">
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
                        <td colspan="12" class="text-center"><strong>Não há Consultas cadastradas</strong></td>
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
          modal.find('#schedule_id').val(recipientId);
        })

    </script>

@endsection
