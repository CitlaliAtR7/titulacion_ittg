<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>
    
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Dashboard</h4><hr>
                   <table class="table table-hover">
                      <thead>
                        <th>N° de control</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Carrera</th>
                        <th>Campus</th>
                        <th>Plan De Estudios</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            <td>{{ $egresado->NoControl }}</td>
                            <td>{{ $egresado->Nombre }}</td>
                            <td>{{ $egresado->APaterno }}</td>
                            <td>{{ $egresado->AMaterno }}</td>
                            <td>{{ $egresado->Carrera }}</td>
                            <td>{{ $egresado->Campus }}</td>
                            <td>{{ $egresado->plan->Nombre }}</td>
                            <td>{{ $egresado->email }}</td>
                            <td><a href="{{ route('auth.logout') }}" class="btn btn-warning">Logout</a></td>
                            
                         </tr>
                      </tbody>
                   </table>

                   <ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="/admin/profile">Profile</a></li>
                       <li><a href="/admin/settings">Settings</a></li>
                       <li><a href="/admin/staff">Staff</a></li>
                       <li><a href="/egresado">Egresado</a></li>
                       <li><a href="/avances">Avances</a></li>
                   </ul>
            </div>
         </div>
    </div>
</body>
</html>