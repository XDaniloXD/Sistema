<!DOCTYPE html>
<html lang="pt-br">
<head>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        

        <!--Flash message-->
        <div>
            <p>@include('layouts.flash-message')</p> 
        </div>  


        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link btn-info col px-md-3 ms-1"
                                    href="{{route('dashboard')}}"><strong>início</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-info col px-md-3 ms-1"
                                    href="{{route('doctor')}}"><strong>Médicos</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-info col px-md-3 ms-1"
                                    href="{{route('patient')}}"><strong>Pacientes</strong></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link btn-info col px-md-3 ms-1"
                                    href="{{route('schedule')}}"><strong>Agendamento de Consulta</strong> </a>
                            </li>
                        </div>
                </div>
        </nav>
   



    

    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

