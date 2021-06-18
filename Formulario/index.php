<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de informacion</title>

    <link rel="stylesheet" href="./styleN.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arsenal&family=Bellota:wght@700&family=Megrim&display=swap" rel="stylesheet">
</head>
<body>
    
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">                
                <br><br><br>
                <img class="icon1" src="./accident.png" alt=""/>
                <h2 class="topFont">TBOI SEGUROS</h2>
            </section>
            <section class="info_items">
                <div>
                    <br><br><br>
                    <img class= "imagenfondo" src="./fondo10.png" alt=""/>
                </div>               
            </section>
        </section>

        <form  class="form_contact" id="formulario" name="formulario"  action= "mostrar.php">
            <h2 class="topFont">Consulta de accidente</h2>
            <div class="formFont">
            <div class="container">
                <div class="row">
                    <div class="col-3"> 
                        <label class="btnTop" for="phone">ID de Persona</label>
                    </div>
                    <div class="col-5">                                                
                        <input type="number" name="idPersona" placeholder="0">
                    </div>
                    <div class="col-4">
                        <div class="user_info ">               
                            <input type="submit" value="Consultar " name="btnConIDPersona" action= "">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="table">
                        <table>
                            <tr>
                            <th>Nombre</th>
                            <th>Apellido </th>
                            <th>Apellido </th>
                            <th>Vehiculo</th>
                            <th>Estado</th>
                            <th>ID</th>
                            <th>Acontecimiento</th>
                        </tr>                   
                        </table>
                    </div>
                  </div>
                </div>
                <br> 
              </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
