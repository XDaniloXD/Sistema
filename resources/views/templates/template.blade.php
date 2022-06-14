<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{url('/assets/bootstrap/css/bootstrap.min.css')}}">
    <title>Clinica Medica</title>
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{--<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!--pesquisa-->
    <script  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js">  </script>

    <!-- Using Select2 from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Usando Menu não ficar grande
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>-->
    
    
</head>
<body>
   


    @yield('content') 
    
    
</body>
<script>
    $(document).ready(function () {
        $('#pesquisa').DataTable({
            "ordering": false,
            "responsive": true,
                language: {
                lengthMenu: '_MENU_ Registros por página',
                zeroRecords: 'Nenhum registro encontrado',
                info: 'Exibindo página _PAGE_ de _PAGES_',
                infoEmpty: 'Nenhum registro disponivel',
                infoFiltered: '(filtered from _MAX_ registros no total)',
                search: "Pesquisar",
                
            },
        });
    });
</script>

</html>
