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

    $route['DP'] = 'Welcome/VerDepartamentos';
    $route['insertDP'] = 'Welcome/CrearDepartamentos';
    $route['updateDP'] = 'Welcome/ActualizarDepartamentos';
    $route['deleteDP'] = 'Welcome/EliminarDepartamentos';

    #------------------> Cargos CRUD <-----------------------#
  
    $route['CG'] = 'Welcome/VerCargos';
    $route['insertCG'] = 'Welcome/CrearCargos';
    $route['updateCG'] = 'Welcome/ActualizarCargos';
    $route['deleteCG'] = 'Welcome/EliminarCargos';

    #------------> Persona_Natural CRUD <--------------#

    $route['RL'] = 'Welcome/VerRepresentante';
    $route['insertRL'] = 'Welcome/CrearRepresentante';
    $route['updateRL'] = 'Welcome/ActualizarRepresentante';
    $route['deleteRL'] = 'Welcome/EliminarRepresentante';

    #------------> Matriz_Servicio CRUD <--------------#
    
    $route['MS'] = 'Welcome/VerMatrizServicio';
    $route['insertMS'] = 'Welcome/CrearMatrizServicio';
    $route['updateMS'] = 'Welcome/ActualizarMatrizServicio';
    $route['deleteMS'] = 'Welcome/EliminarMatrizServicio';

    #------------> Empresa CRUD <--------------#
  
    $route['EMP'] = 'Welcome/VerEmpresa';
    $route['insertEMP'] = 'Welcome/CrearEmpresa';
    $route['updateEMP'] = 'Welcome/ActualizarEmpresa';
    $route['deleteEMP'] = 'Welcome/EliminarEmpresa';

    #------------> Servicios_Basicos CRUD <--------------#

    $route['SB'] = 'Welcome/VerServiciosB';
    $route['insertSB'] = 'Welcome/CrearServiciosB';
    $route['updateSB'] = 'Welcome/ActualizarServiciosB';
    $route['deleteSB'] = 'Welcome/EliminarServiciosB';

    #------------> Representante_Legal CRUD <--------------#
    
    $route['PN'] = 'Welcome/verPersonaNatural';
    $route['insertPN'] = 'Welcome/CrearPersonaNatural';
    $route['updatePN'] = 'Welcome/ActualizarPersonaNatural';
    $route['deletePN'] = 'Welcome/EliminarPersonaNatural';

    #------------> Contacto CRUD <--------------#
    
    $route['CT'] = 'Welcome/VerContactos';
    $route['insertCT'] = 'Welcome/CrearContactos';
    $route['updateCT'] = 'Welcome/ActualizarContactos';
    $route['deleteCT'] = 'Welcome/EliminarContactos';

    #------------> Referencia CRUD <--------------#

    $route['RF'] = 'Welcome/VerReferencia';
    $route['insertRF'] = 'Welcome/CrearReferencia';
    $route['updateRF'] = 'Welcome/ActualizarReferencia';
    $route['deleteRF'] = 'Welcome/EliminarReferencia';

    #------------> Empresas_CtrlRoll CRUD <--------------#

    $route['ECR'] = 'Welcome/VerEmpresasCtrl';
    $route['insertECR'] = 'Welcome/CrearEmpresasCtrl';
    $route['updateECR'] = 'Welcome/ActualizarEmpresasCtrl';
    $route['deleteECR'] = 'Welcome/EliminarEmpresasCtrl';

    #------------> Extras CRUD <--------------#

    $route['EX'] = 'Welcome/VerExtras';
    $route['insertEX'] = 'Welcome/CrearExtras';
    $route['updateEX'] = 'Welcome/ActualizarExtras';
    $route['deleteEX'] = 'Welcome/DeleteExtras';

    #------------> Laboral CRUD <--------------#
    $route['LB'] = 'Welcome/VerLaboral';
    $route['insertLB'] = 'Welcome/CrearLaboral';
    $route['updateLB'] = 'Welcome/ActualizarLaboral';
    $route['deleteLB'] = 'Welcome/EliminarLaboral';
    
    #------------> Matriz_Cotizante CRUD <--------------#
    $route['MC'] = 'Welcome/VerMC';
    $route['insertMC'] = 'Welcome/CrearMC';
    $route['updateMC'] = 'Welcome/ActualizarMC';
    $route['deleteMC'] = 'Welcome/EliminarMC';

    

    #------------> Tipo_Servicio CRUD <--------------#
   
    #------------> Requerimiento CRUD <--------------#
    #------------> Noticias CRUD <--------------#
    #------------> Categorias CRUD <--------------#
    
    #------------> Matriz_Requerimientos CRUD <--------------#
    #------------> Estados CRUD <--------------#



########---->No Touch <----########

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;