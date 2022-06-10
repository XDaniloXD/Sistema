@extends('templates.template')
@section('content')
    <div class="container">

        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Agendamentos Cadastrados</h2>
            <a href="{{route('createschedule')}}"  class="btn btn-sm btn-secondary mb-2">Cadastrar Agendamento</a>
            <a target="_blank" href="{{route('schedulespdf',['download'=>'pdf'])}}"  class="btn btn-sm btn-secondary mb-2">Listar Consultas Pdf</a>
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
                    <th>Diagnostico</th>
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
                        <td>
                            
                            @if ($schedule->confirmed == 1)
                                Sim
                            @else
                                Não
                            @endif

                            {{--$schedule->confirmed--}}
                        
                        
                        </td>
                        <td> {!! substr($schedule->diagnosis, 0, 10)!!} </td>
                        <td class="d-flex">
                            <a href="{{route('scheduleedit', $schedule->id)}}" class="btn btn-info edit-btn ms-1">Editar</a>
                            <form action="{{route('scheduledelete',$schedule->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn ms-1">Excluir</button>
                            </form>
                            <a target="_blank" href="{{route('schedulepdf', $schedule->id)}}" class="btn btn-info ms-1" >Gera Pdf</a>
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
    
@endsection
