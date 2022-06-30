@extends('templates.template')
@section('content')
    <div class="container">
        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Cadastrar Médico</h2>
            <a href="{{route('doctor')}}"  class="btn btn-sm btn-secondary mb-2">Lista de Médicos</a>
        </div>
        <form class="card card-body" method="POST" action="{{route('doctorstore')}}">
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
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="especialidade">Especialidade</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="especialidade"
                           name="especialidade">
                </div>

                <div class="form-group col-md-2">
                    <label for="crm">CRM</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="crm"
                           name="crm">
                </div>
            </div>

            <div class="form-group col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('doctor') }}" class="btn btn-danger ">Cancelar</a>
            </div>

        </form>
    </div>
@endsection
