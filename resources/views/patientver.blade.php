@extends('templates.template')

@section('content')
    <div class="container">
        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Paciente</h2>
            <a href="{{ route('patientedit', $patient->id) }}" class="btn btn-sm btn-secondary mb-2">Lista de Pacientes</a>
        </div>
        <form class="card card-body" method="POST" action="{{route('patientupdate',$patient->id )}}">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="name">Nome</label>
                    <input type="text"
                           class="form-control"
                           value="{{$patient->name}}"
                           required
                           name="name"
                           disabled>
                </div>

                <div class="form-group col-md-2">
                    <label for="age">Idade</label>
                    <input type="number"
                           class="form-control"
                           required
                           value="{{$patient->age}}"
                           name="age"
                           disabled>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="weight">Peso</label>
                    <input type="number"
                           class="form-control"
                           required
                           value="{{ number_format($patient->weight,1,'.', '.' )}}"
                           name="weight"
                           disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="height">Altura</label>
                    <input type="text"
                           class="form-control"
                           required
                           value="{{number_format($patient->height,2, '.', '.' )}}"
                           name="height"
                           disabled>
                </div>


                <div class="form-group col-md-2">
                    <label for="sexo">Sexo</label>
                    <select class="form-control"
                            name="sexo"
                            required
                            type="text"
                            disabled>
                            <option value="Feminino" {{($patient->sexo == 'Feminino' ? 'selected' : '')}}>Feminino</option>
                            <option  value="Masculino" {{($patient->sexo == 'Masculino' ? 'selected' : '')}}>Masculino</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="address">Tipo-Sanguíneo</label>
                    <select class="form-control"
                            name="blood"
                            id="blood"
                            required
                            type="text"
                            disabled>
                            <option value="A+"  {{($patient->blood == 'A+'  ? 'selected' : '')}} >A+</option>
                            <option value="B+"  {{($patient->blood == 'B+'  ? 'selected' : '')}} >B+</option>
                            <option value="AB+" {{($patient->blood == 'AB+' ? 'selected' : '')}} >AB+</option>
                            <option value="O+"  {{($patient->blood == 'O+'  ? 'selected' : '')}} >O+</option>
                            <option value="A-"  {{($patient->blood == 'A-'  ? 'selected' : '')}} >A-</option>
                            <option value="B-"  {{($patient->blood == 'B-'  ? 'selected' : '')}} >B-</option>
                            <option value="AB-" {{($patient->blood == 'AB-' ? 'selected' : '')}} >AB-</option>
                            <option value="O-"  {{($patient->blood == 'O-'  ? 'selected' : '')}} >O-</option>
                    </select>

                </div>


              <!--  <div class="form-group col-md-2">
                    <label for="blood">Tipo-Sanguíneo</label>
                    <input type="text"
                           class="form-control"
                           required
                           value="{{--$patient->blood--}}"
                           name="blood">
                </div> -->
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="address">Endereço</label>
                    <input type="text"
                           class="form-control"
                           required
                           value="{{$patient->address}}"
                           name="address"
                           disabled>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="contatc">Contato</label>
                    <input type="tel"
                           class="form-control"
                           required
                           value="{{$patient->contatc}}"
                           name="contatc"
                           maxlength="11"
                           disabled>
                </div>
            </div>
            <div class="form-group col-md-6 mt-2">
                <a href="{{ route('patient') }}" class="btn btn-danger ">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
