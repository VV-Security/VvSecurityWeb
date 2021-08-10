<?php
defined('BASEPATH') or exit('No direct script access allowed');

################--->My Views <---###############
$route['default_controller'] = 'Vistas';

 #------------> Nosotros Vistas <--------------#
$route['Nosotros'] = 'Vistas/Nosotros';
$route['Sucursales'] = 'Vistas/Sucursales';

#------------> Servicios Vistas <--------------#
$route['Servicios'] = 'Vistas/Servicios';

#------------> Noticias Vistas <--------------#
$route['Recientes'] = 'Vistas/Recientes';
$route['SarsCov2'] = 'Vistas/SarsCov2';

#------------> SoftGuard Vistas <--------------#
$route['SmartPanic'] = 'Vistas/SmartPanic';
$route['Monitoreo'] = 'Vistas/Monitoreo';
$route['TrackGuard'] = 'Vistas/TrackGuard';
$route['VideoVigilancia'] = 'Vistas/VideoVigilancia';

#------------> Trabajos Vistas <--------------#
$route['ggss'] = 'Vistas/ggss';
$route['ssppz'] = 'Vistas/ssppz';
$route['Contactar'] = 'Vistas/Contactar';

#------------> Contacto Vistas <--------------#
$route['Requerimientos'] = 'Vistas/Requerimientos';
$route['Capacitaciones'] = 'Vistas/Capacitaciones';

#------------> Contacto Vistas <--------------#
$route['Login'] = 'Vistas/Login';

#|#####################################################################################################|
#|#####################################################################################################|
#|#####################################################################################################|
#|#####################################################################################################|

################--->My Controllers <---############

    #------------> Usuarios CRUD <--------------#
    
    $route['User'] = 'Welcome/VerUsuario';
    $route['insertUser'] = 'Welcome/CrearUsuario';
    $route['updateUser'] = 'Welcome/ActualizarUsuario';
    $route['deleteUser'] = 'Welcome/EliminarUsuario';
    
 
    #------------> Departamentos CRUD <--------------#

    $route['Depts'] = 'Welcome/VerDepartamentos';
    $route['insertDepts'] = 'Welcome/CrearDepartamentos';
    $route['updateDepts'] = 'Welcome/ActualizarDepartamentos';
    $route['deleteDepts'] = 'Welcome/EliminarDepartamentos';

    #------------------> Cargos CRUD <-----------------------#
  
    $route['Cargo'] = 'Welcome/VerCargos';
    $route['insertCargo'] = 'Welcome/CrearCargos';
    $route['updateCargo'] = 'Welcome/ActualizarCargos';
    $route['deleteCargo'] = 'Welcome/EliminarCargos';




    #------------> Contacto CRUD <--------------#
    #------------> Persona_Natural CRUD <--------------#

    $route['RL'] = 'Welcome/VerRepresentante';
    $route['insertRL'] = 'Welcome/CrearRepresentante';
    $route['updateRL'] = 'Welcome/ActualizarRepresentante';
    $route['deleteRL'] = 'Welcome/EliminarRepresentante';


    #------------> Matriz_Cotizante CRUD <--------------#

    #------------> Matriz_Servicio CRUD <--------------#
    
    $route['Ms'] = 'Welcome/VerMatrizServicio';
    $route['insertMs'] = 'Welcome/CrearMatrizServicio';
    $route['updateMs'] = 'Welcome/ActualizarMatrizServicio';
    $route['deleteMs'] = 'Welcome/EliminarMatrizServicio';

    #------------> Tipo_Servicio CRUD <--------------#
    #------------> Referencia CRUD <--------------#
    
    #------------> Empresa CRUD <--------------#
  
    $route['Emp'] = 'Welcome/VerEmpresa';
    $route['insertEmp'] = 'Welcome/CrearEmpresa';
    $route['updateEmp'] = 'Welcome/ActualizarEmpresa';
    $route['deleteEmp'] = 'Welcome/EliminarEmpresa';



    #------------> Matriz_Requerimientos CRUD <--------------#
    #------------> Estados CRUD <--------------#
    #------------> Servicios_Basicos CRUD <--------------#
    #------------> Extras CRUD <--------------#

    #------------> Representante_Legal CRUD <--------------#
    
    $route['PN'] = 'Welcome/verPersonaNatural';
    $route['insertPN'] = 'Welcome/CrearPersonaNatural';
    $route['updatePN'] = 'Welcome/ActualizarPersonaNatural';
    $route['deletePN'] = 'Welcome/EliminarPersonaNatural';

    #------------> Empresa_ctrlroll CRUD <--------------#
    #------------> Requerimiento CRUD <--------------#
    #------------> Noticias CRUD <--------------#
    #------------> Categorias CRUD <--------------#












########---->No Touch <----########

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;