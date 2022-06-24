@extends('templates.template')

    @section('content')
      <div class="container">
        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>
        <div class="d-flex justify-content-between ">
            <h2>Médicos Cadastrados</h2>
            <a href="{{route('createdoctor')}}"  class="btn btn-sm btn-success mb-2 text-center">
                        Cadastar Médico
              <img src="/images/doctor.png" width="30" />
            </a>
        </div>
          <div class=" ">
            <table  id="pesquisa" class="table table-striped table-hover">
                 <thead class="table-info ">
                    <tr>
                      <th scope="col">Matricula</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Especialidade</th>
                      <th scope="col">CRM</th>
                      <th scope="col"></th>
                      <th scope="col">Visualizar / Editar  /  Excluir  </th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($doctors as $doctor)
                    <tr>
                        <td> {{$doctor->id}}</td>
                        <td> {{ $doctor->name}} </td>
                        <td> {{ $doctor->especialidade}}</td>
                        <td> {{ $doctor->crm}} </td>
                        <td></td>
                        <td class="d-flex ">
                          <a href="{{route('doctorver', $doctor->id)}}" class="btn btn-info edit-btn ms-1 text-white " data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar">
                            <img src="/images/visu.png" width="25" />
                          </a>
                          <a href="{{route('doctoredit', $doctor->id)}}" class="btn btn-primary edit-btn ms-1"data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                            <img src="/images/edita.png" width="25" />
                          </a>
                          <form action="{{route('doctordelete',$doctor->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger delete-btn ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                <img src="/images/excluir.png" width="25" alt="Excluir" />
                              </button>
                          </form>
                      </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Não há Médicos cadastrados</td>
                    </tr>
                @endforelse
                  </tbody>
            </table>
          </div>  
      </div>
        <x-footer>

        </x-footer>
    @endsection

