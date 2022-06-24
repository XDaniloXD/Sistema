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
                <a href="{{route('createschedule')}}"  class="btn btn-sm btn-success mb-2 ms-1">Cadastrar Agendamento</a>
                <a target="_blank" href="{{route('schedulespdf',['download'=>'pdf'])}}"  class="btn btn-sm btn-secondary mb-2 ms-1">Consulta em Pdf</a>
            </div>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-outline-primary mb-2 ms-1" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <th>Editar  /  Excluir  / Gera PDF </th>
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
                            <a href="{{route('scheduleedit', $schedule->id)}}" class="btn btn-primary edit-btn ms-1 rounded">Editar</a>
                            <form action="{{route('scheduledelete',$schedule->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn ms-1 rounded">Excluir</button>
                            </form>
                            <a target="_blank" href="{{route('schedulepdf', $schedule->id)}}" class="btn btn-dark ms-1 rounded" >Gera Pdf</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Não há Consultas cadastradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <x-footer>

    </x-footer>

@endsection
