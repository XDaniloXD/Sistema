@extends('templates.template')
         

@section('content')

    <div class="container">

        <x-menu>
            <!-- Menu / componentes -->
        </x-menu>

        <div class="d-flex justify-content-between">
            <h2>Editar Consulta</h2>
           
            <a href="{{ route('schedule') }}" class="btn btn-sm btn-secondary mb-2">Lista de Consultas</a>
        </div>
        <form class="card card-body" method="POST" action="{{ route('scheduleupdate.update', $schedules->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                
                <div class="col-md-6 mb-2">
                    <label class="mb-2"><strong>Paciente</strong></label>
                    <input type="text" class="form-control " name="patients_id" value="{{$schedules->patients->name}} "disabled>
                </div>
                <div class="col-md-6">
                    <label class="mb-2"><strong>Medico</strong></label>
                    <select class="form-control" name="doctors_id">

                        @foreach ($doctors as $doctor)
                            {{--<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>--}}
                            <option value="{{ $doctor->id }}" {{(old($schedules->doctors_id) == $doctor->id ? 'selected':
                             ($schedules->doctors_id == $doctor->id ? 'selected' :''))}}>{{$doctor->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="reason">Motivo</label>
                        <input type="text" value="{{ $schedules->reason }}" class="form-control" name="reason">
                    </div>


                    <div class="form-group col-md-3">
                        <label for="date">Data </label>
                        <input type="date" class="form-control" required value="{{ $schedules->date }}" name="date">

                    </div>
                    <div class="form-group col-md-3">
                        <label for="time">Hora </label>
                        <input type="text" class="form-control" required
                            value="{{ Carbon\Carbon::parse($schedules->time)->format('H:i') }}" name="time">

                    </div>

                    <div class="form-group col-md-3">
                        <div>
                            Consulta realizada? <br>
                            <input type="checkbox" id="confirmed" name="confirmed" value="0">
                            <label for="confirmed">Não</label>
                        </div>
    
                        <div>
                            <input type="checkbox" id="confirmed" name="confirmed" value="1">
                            <label for="confirmed">Sim</label>
                        </div>
                    </div>
    

                    <div class="form-group col-md-50">
                        <hr>
                        <label>Diaginostico</label>

                        <hr>
                        <textarea class="form-control" name="diagnosis" id="diagnosis">
                    {{ $schedules->diagnosis }}
                </textarea>

                    </div>

                    {{-- <div class="form-group col-md-50">
                    <label for="diagnosis">Diagnostico</label>
                    <input type="text"
                           class="form-control"
                           value="{!!$schedules->diagnosis!!}"
                           name="diagnosis">
                </div> --}}
                </div>
                <div class="form-group col-md-6 mt-2">
                    <button type="submit" class="btn btn-success">Salvar</button>
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
    <script type="text/javascript"></script>
@endsection
