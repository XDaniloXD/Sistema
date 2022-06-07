<!DOCTYPE html>
<html>
<head>
  <title>Gerado PDF</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href=" asset('css/app.css') " rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="container">
        <div class="row">
        <div class="col-lg-12" style="margin-top: 15px ">
            <div class="pull-left">
            <h2>Consultas Agendadas</h2>
            </div>

        </div>
        </div><br>

        <table class="table table-bordered">
        <tr class="text-info bg-secondary">
            <th>Paciente</th>
            <th>Medico</th>
            <th>Motivo</th>
            <th>Data </th>
            <th>Hora</th>
            <th>Diagnostico</th>
        </tr>

        @foreach ($schedules as $schedules)
        <tr class="text-dark">
            <td> {{ $schedules->patients->name }} </td>
            <td> {{ $schedules->doctors->name }} </td>
            <td> {{-- $schedules->reason --}} </td>
            <td> {{Carbon\Carbon::parse($schedules->date)->format('d/m/Y')}} </td>
            <td> {{Carbon\Carbon::parse($schedules->time)->format('H:i') }} </td>
            <td> {!!substr($schedules->diagnosis, 0, 0)!!} </td>
        </tr>
        @endforeach
        </table>
  </div>
</body>
</html>
