@extends('templates.template')

@section('content')
    <div class="container">
        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Cadastrar Paciente</h2>
            <a href="{{ route('patient') }}" class="btn btn-sm btn-secondary mb-2">Lista de Pacientes</a>
        </div>
        <form class="card card-body" method="POST" action="{{ route('patientstore') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="name">Nome</label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           required
                           name="name">
                </div>

                <div class="form-group col-md-2">
                    <label for="age">Idade</label>
                    <input type="number"
                           class="form-control"
                           required
                           id="age"
                           name="age"
                           maxlength="3">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="weight">Peso</label>
                    <input type="number"
                           class="form-control"
                           required
                           id="weight"
                           name="weight"
                           maxlength="2">
                </div>
                <div class="form-group col-md-3">
                    <label for="height">Altura</label>
                    <input type="number"
                           class="form-control"
                           required
                           id="height"
                           name="height"
                           maxlength="4">
                </div>

                <div class="form-group col-md-2">
                    <label for="sexo">Sexo</label>
                    <select class="form-control "
                            name="sexo" 
                            id="sexo" 
                            required 
                            type="text">
                            <option selected></option>
                            <option >Masculino</option>
                            <option >Feminino</option>
                    </select>
                </div>

                    <div class="form-group col-md-2">
                        <label for="address">Tipo-Sangu??neo</label>
                        <select class="form-control "
                                name="blood" 
                                id="blood" 
                                required 
                                type="text">
                                <option selected></option>
                                <option >A+</option>
                                <option >B+</option>
                                <option >AB+</option>
                                <option >O+</option>
                                <option >A-</option>
                                <option >B-</option>
                                <option >AB-</option>
                                <option >O-</option>
						</select>
                    </div>
                <!--<div class="form-group col-md-2">
                    <label for="address">Tipo-Sangu??neo</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="blood"
                           name="blood">
                </div>-->
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="address">Endere??o</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="address"
                           name="address">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="address">Contato</label>
                    <input type="tel"
                           class="form-control"
                           required
                           id="contatc"
                           name="contatc"
                           maxlength="11">
                </div>
            </div>
            <div class="form-group col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('patient') }}" class="btn btn-danger ">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
