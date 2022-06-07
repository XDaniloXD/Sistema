
<!DOCTYPE html>
<html>
<head>
  <title>Gerado PDF</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href=" asset('css/app.css') " rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="text-center text-info">
        <h2>Clinica Medica Medicenter</h2>
    </div>

    <div class="text-center">
        <h3>Receita Medica</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-info bg-light">

        </thead>
        <tbody>
                <tr>
                    <td> Data {{Carbon\Carbon::parse($schedules->date)->format('d/m/Y')}} </td>
                    <td> Horario {{Carbon\Carbon::parse($schedules->time)->format('H:i') }} Hs</td>
                </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="form-group col-md-3">

        <h5>Paciente:</h5>

             <h6>{{ $schedules->patients->name }}</h6>
    </div>
    <hr>

    <div class="form-group text-center">

        <h5>Medico:</h5>

            <h6>{{ $schedules->doctors->name }}</h6>

    </div>
    <div class="form-group col-md-3">

            <h6 class="">Motivo da consulta:{{ $schedules->reason }}</h6>

    </div>
    <div class="form-group col-md-3">

        <h5>Relatorio Medico:</h5>

             <p><h6>{!! $schedules->diagnosis!!}</h6></p>

    </div>



</div>
