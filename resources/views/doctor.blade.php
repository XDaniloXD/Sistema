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
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger delete-btn ms-1" 
                                  data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" 
                                  data-bs-target="#deleteModal" data-id="{{$doctor->id}}" title="Excluir">

                                  <img src="/images/excluir.png" width="25" />

                              </button>

        
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                      Excluir Médico !
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <p>Confirma a exclusão do registro ?</p>
                                    
                                    </div>
                                    <input type="hidden" name="doctor_id" id="doctor_id" value="">
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
                        <td colspan="12" class="text-center"> <strong>Não há Médicos cadastrados</strong></td>
                    </tr>
                @endforelse
                  </tbody>
            </table>
          </div>  
      </div>
        <x-footer>

        </x-footer>

        <script type="text/javascript">
            $('#deleteModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget);
              var recipientId = button.data('id');
              console.log(recipientId);

              var modal = $(this);
              modal.find('#doctor_id').val(recipientId);
            })

        </script>
    @endsection

