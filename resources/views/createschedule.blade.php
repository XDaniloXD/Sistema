@extends('templates.template')

@section('content')
    <div class="container">

        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Cadastrar Consultas</h2>
            <a href="{{ route('schedule') }}" class="btn btn-sm btn-secondary mb-2">Lista de Consultas</a>
        </div>
        <form class="card card-body" method="POST" action="{{ route('schedulestore') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="patients_id">Paciente</label>
                    <select class="js-example-basic-single form-control" name="patients_id">
                        @if (!empty($patients))
                            @foreach ($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
                            @endforeach
                        @endif
                      </select>
                </div>
                <div class="col-md-6">
                    <label for="patients_id"><strong>Medico</strong></label>
                    <select class="js-example-basic-single form-control" name="doctors_id">
                        @if (!empty($doctors))
                            @foreach ($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                            @endforeach
                        @endif
                      </select>
                </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="reason">Motivo</label>
                    <input type="text"
                           class="form-control"
                           id="reason"
                           name="reason">
                </div>


                <div class="form-group col-md-3">
                    <label for="date">Data </label>
                    <input type="date"
                           class="form-control"
                           required
                           id="date"
                           name="date">

                </div>
                <div class="form-group col-md-3">
                    <label for="time">Hora </label>
                    <input type="time"
                           class="form-control"
                           required
                           id="time"
                           name="time">

                </div>

                <div class="form-group col-md-50">
                     <hr>
                    <label>Diaginostico</label>

                    <hr>
                    <textarea class="form-control" name="diagnosis" id="diagnosis"></textarea>

                </div>
            </div>
            <div class="form-group col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('schedule') }}" class="btn btn-danger ">Cancelar</a>
            </div>
        </form>
    </div>
    <script>

        // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function($) {
            $('.js-example-basic-single').select2();
            $('#diagnosis').summernote({
        height: 150
    });
    $('div.note-group-select-from-files').remove();
        });

    </script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">

</script>
@endsection
