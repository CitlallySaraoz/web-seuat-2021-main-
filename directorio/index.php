<?php
	$paginaweb = 'primer_nivel';
    date_default_timezone_set('America/Mexico_City');
    include '../extensiones/funcion_errores.php';
?>
<!DOCTYPE html>
  <html lang="es">
    <head>
	  <title>DIRECTORIO GENERAL DE LA INSTITUCIÓN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie-edge">
	  <meta name="robots" content="index, follow">
	  <meta name="description" content="Estudia Maestría en Administración en 4 cuatrimestres, en el Sistema Educativo Universitario Azteca | SEUAT, IESSIC" />
	  <meta name="keywords" content="construcción, dibujos, planos"/>
	  <meta name="author" content="Dirección de medios virtuales y sistemas" />
	  <meta name="copyright" content="Universidad SEUAT" />
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
     <link href="../css/estilos.css" rel="stylesheet"/>  
  
  
  
  </head>


    <body>

    
	  <header>
		<?php include '../extensiones/seleccion_menu.php'; ?>
	  </header>
      <main>



      

 <div class="container-fluid AzulOficialSeuat ">  

<div class="container">
  <div class="row pt-10 white-text SizeTexto-12">
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <p> <i class="fas fa-headset fa-sm white-text"></i> 01 800 8908403  &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fas fa-envelope fa-sm white-text"></i> inscripcion@seuat.mx</p>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <!--<p><a class="logo pt-4" href="#"><img src="images/logo_seuat_desktop_blanco.png" width="220" height="40" alt="fresh design web"></a></p>-->
      </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 align-right">
      <p> <a href="#"><i class="fab fa-facebook-f white-text"></i></a> &nbsp;&nbsp; <a href="#"><i class="fab fa-youtube white-text"></i></a> &nbsp;&nbsp; <a href="#"><i class="fab fa-instagram white-text"></i></a>  &nbsp;&nbsp; <a href="#" class="white-text"> Escribenos</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="#" class="white-text"> Preinscripción</a>  </p>
      </div>	
      <!--<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 align-right">
        <p><a class="logo pt-4" href="#"></a>Escribenos</p>
      </div>-->
  </div>
</div>
</div>

<div class="container-fluid">  <!--purple accent-4-->

	<div class="container">
		<div class="row">
		    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 letras">
		    	<p><?php include '../extensiones/menu_principal_directorio.php'; ?></p>
		    </div>
		</div>
	</div>
</div>






      <h1 class="tite"> DIRECTORIO GENERAL DE LA INSTITUCIÓN</h1>
     <hr/>
     <!--Carrusel-->
    <div class"container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 align-center ">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../images/licen.jpg" class="d-block w-100" alt="..." width="100%" height="450" >
                      </div>
                      <div class="carousel-item">
                        <img src="../images/imd.jpg" class="d-block w-100" alt="..." width="100%" height="450">
                      </div>
                      <div class="carousel-item">
                        <img src="../images/unnamed.jpg" class="d-block w-100" alt="..."width="100%" height="450">
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!--Formulario-->
    <div class="container">
        <div class="row bg-blanco  p-3">
            <div class="col-sm-12 col-md-4 bg-primary bg-gradient">
                <div class="form">
                <h3 class="texfor">Dejar Comentario</h3>
     
                    <div class="texfor">
                    <label for="exampleFormCoform-rowntrolInput1" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                    </div>

                    <div class="form-row frmlo">
                    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="micorreo@ejemplo.com">
                    </div>

                    <div class="form-row frmlo">
                    <label for="exampleFormControlInput1" class="form-label">Telèfono</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Telèfono 10 digitos">
                    </div>

                    <div class="form-row frmlo">
                    <label for="exampleFormControlInput1" class="form-label">Asunto</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Asunto Principal">
                    </div>
  
                    <div class="form-row frmlo">
                    <label for="exampleFormControlInput1" class="form-label">Plantel Perteneciente</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="--Elige un Plantel--">
                    </div>
 
                    <div class="form-row frmlo">
                    <label for="exampleFormControlInput1" class="form-label">Nivel Educativo</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="--Elige un Nivel Educativo--">
                    </div>

                    <div class="form-row frmlo ">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="Dejar su Comentario" rows="3"></textarea>
                    </div>

                    <div>
                    <button type="button" class="btnfrmlo btn-principal btn-block">Enviar solicitud de información</button>	  
                    </div>
            </div>
        </div>
                  <div class="col-sm-12 col-md-2">
                      <!--<p>jaajajjajjajajaaj</p>-->
                  </div>
              <!--DIRECTORIO-->
            <div class="col-sm-12 col-md-6  bg-blanco">
                
              <!--Cuadro de Tuxtla-->
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Tuxtla" aria-expanded="true" aria-controls="collapseOne">
                          
                          Tuxtla Gutiérrez <hr/>
  
                      </button>
                      </h2>
                       <div id="Tuxtla" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <p>2a. Av. Norte No. 741 entre 6a. y 7a. Oriente, Tuxtla Gutiérrez, Chiapas.</p> <br/>
                      <p>01 (961) 61 2 23 29 y 01 (961) 61 3 79 26</p> <br/>
                     <p>inscripcion@seuat.mx</p>    
                    </div>
                    </div>
                    </div>

                     <!--Cuadro de Tapachula-->
                  
                    <div class="accordion " id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Tapachula" aria-expanded="true" aria-controls="collapseOne">
                          
                            Tapachula <hr/>
  
                            </button>
                         </h2>
                     <div id="Tapachula" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                     <p>5a. Calle Oriente No. 21 Entre 1a. y 3a. Norte, Tapachula, Chiapas.</p> <br/>
                     <p>01 (962) 62 6 81 55 y 01 (962) 11 8 19 19 </p> <br/> 
                     <p>inscripcion@seuat.mx</p>
                     </div>
                     </div>
                    </div>

                     <!--Cuadro de Tapilula-->
                  
                    <div class="accordion " id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Tapilula" aria-expanded="true" aria-controls="collapseOne">
                    
                            Tapilula <hr/>
                  
                          </button>
                          </h2>
                    <div id="Tapilula" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Carretera Federal Tapilula - Pichucalco KM. 1 Barrio Guadalupe. Tapilula, Chiapas.</p> <br/>
                    <p>01 (919) 68 5 43 62 </p> <br/>
                    <p> inscripcion@seuat.mx</p>
                    
                    </div>
                     </div>
                     </div>

                      <!--Cuadro de Reforma-->
               
                    <div class="accordion " id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Reforma" aria-expanded="true" aria-controls="collapseOne">
                           
                            Reforma <hr/>
    
                          </button>
                        </h2>
                        <div id="Reforma" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                     <p>Calle Oaxaca S/N Esquina Calle Veracruz, Colonia Lázaro Cárdenas Zona 10, Reforma, Chiapas.</p> <br/>
                     <p>01 (917) 32 8 88 74</p> <br/>
                     <p>inscripcion@seuat.mx</p>
                   
                    </div>
                    </div>
                  </div>
                
                      <!--Cuadro de Campecche-->
              
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Campeche" aria-expanded="true" aria-controls="collapseOne">
                        
                            Campeche  <hr/>
                      
                          </button>
                    </h2>
                    <div id="Campeche" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">    
                    <p>Calle Kabah No. 27 Entre Palenque y Labná Col. Kalá I San Francisco de Campeche, Campeche</p> <br/>
                    <p>01 (981) 82 7 73 20</p> <br/>
                    <p>inscripcion@seuat.mx</p>
                  </div>
                </div>
              </div>

                        <!--Cuadro de Yajalón-->
       
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Yajalón" aria-expanded="true" aria-controls="collapseOne">
                
                Yajalón <hr/>
              
              </button>
               </h2>
              <div id="Yajalón" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">    
              <p>1a. Poniente No. 13 Entre 3a. y 4a. Calle Norte, Barrio Belisario Dominguez, Yajalón, Chiapas.</p> <br/>
              <p>01 (919) 67 4 18 00 </p> <br/>
              <p>inscripcion@seuat.mx</p>
            </div>
         </div>
       </div>

        <!--Cuadro de  Oaxaca-->
        
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Oaxaca" aria-expanded="true" aria-controls="collapseOne"> 
                   
                    Oaxaca <hr/>
         
                    </button>
                   </h2>
              <div id="Oaxaca" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
              <p>Calle Corregidora entre Calle Morelos y Calle Camino Real Municipio de Santa Maria Coyotepec, Oaxaca</p> <br/>
              <p>01 (951) 37 7 45 15</p> <br/>
              <p>inscripcion@seuat.mx</p>
               </div>   
              </div>
           </div>

            <!--Cuadro de Palenque -->  
           
                <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Palenque" aria-expanded="true" aria-controls="collapseOne"> 
                      
                       Palenque <hr/>
            
                       </button>
                      </h2>
                 <div id="Palenque" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                 <div class="accordion-body"> 
                 <p>Calle Carretera Palenque-Pakal-Na Ref. Norte, Aeropuerto</p> <br/>
                 <p>01 (919) 67 4 18 00</p></p> <br/>
                 <p>inscripcion@seuat.mx</p>
                  </div>   
                 </div>
                </div>
                          
                  <!--Cuadro de Comitán --> 
            
                <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Comitán" aria-expanded="true" aria-controls="collapseOne"> 
                     
                       Comitán<hr/>
            
                       </button>
                      </h2>
                 <div id="Comitán" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                 <div class="accordion-body"> 
                 <p>Prolongación de la 6a. Av. oriente sur, Barrio Los Sabinos, entrada Zapata. Comitán, Chiapas</p> <br/>
                 <p>01 (963) 165 77 19</p></p> <br/>
                 <p>inscripcion@seuat.mx</p>
                  </div>   
                 </div>
                </div>





            </div>
        </div>
      </div>



           <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
     

      <?php include '../extensiones/scripts.php'; ?>
<?php include '../extensiones/pie_de_pagina.php'; ?> 
	  