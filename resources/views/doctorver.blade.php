@extends('templates.template')
@section('content')
    <div class="container">
        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Médico</h2>
            <a href="{{route('doctoredit', $doctor->id)}}"  class="btn btn-sm btn-secondary mb-2">Lista de Médicos</a>
        </div>
        <form class="card card-body" method="POST" action="{{route('doctorupdtade', $doctor->id)}}">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="name">Nome</label>
                    <input type="text"
                           class="form-control"
                           value="{{$doctor->name}}"
                           required
                           name="name"
                           disabled>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="especialidade">Especialidade</label>
                    <input type="text"
                           class="form-control"
                           required
                           value="{{$doctor->especialidade}}"
                           name="especialidade"
                           disabled>
                </div>

                <div class="form-group col-md-2">
                    <label for="crm">CRM</label>
                    <input type="text"
                           class="form-control"
                           required
                           value="{{$doctor->crm}}"
                           name="crm"
                           disabled>
                </div>
            </div>

            <div class="form-group col-md-6 mt-2">
                <a href="{{ route('doctor') }}" class="btn btn-danger ">Voltar</a>
            </div>

        </form>
    </div>
@endsection
