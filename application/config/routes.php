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
$route['Noticias'] = 'Noticias/Navegar';
$route['Noticias/(:any)'] = 'Noticias/Navegar';
$route['Noticias/(:any)/(:any)'] = 'Noticias/Navegar';

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
    #------------> Servicios_Basicos CRUD <--------------#

<<<<<<< Updated upstream
    $route['SB'] = 'Servicios_Basicos/VerServiciosB';
    $route['insertSB'] = 'Servicios_Basicos/CrearServiciosB';
    $route['updateSB'] = 'Servicios_Basicos/ActualizarServiciosB';
    $route['deleteSB'] = 'Servicios_Basicos/EliminarServiciosB';
=======


  #------------> Noticias CRUD <--------------#
$route['MantenedorNoticias'] = 'Noticias/MantenedorNoticias';
$route['insertNoticias'] = 'Noticias/CrearNoticias';
$route['updateNoticias'] = 'Noticias/ActualizarNoticias';
$route['deleteNoticias'] = 'Noticias/EliminarNoticias';

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
>>>>>>> Stashed changes

      
    // -----------------------------------------------------------------------
    
    #------------> Matriz_Servicio CRUD <--------------#
    
    $route['MS'] = 'Welcome/VerMatrizServicio';
    $route['insertMS'] = 'Matriz_Servicio/CrearMatrizServicio';
    $route['updateMS'] = 'Matriz_Servicio/ActualizarMatrizServicio';
    $route['deleteMS'] = 'Matriz_Servicio/EliminarMatrizServicio';

    #------------> Contacto CRUD <--------------#
        
    $route['CT'] = 'Contacto/VerContactos';
    $route['insertCT'] = 'Contacto/CrearContactos';
    $route['updateCT'] = 'Contacto/ActualizarContactos';
    $route['deleteCT'] = 'Contacto/EliminarContactos';

    #------------> Empresa CRUD <--------------#
  
    $route['EMP'] = 'Empresas/VerEmpresa';
    $route['insertEMP'] = 'Empresas/CrearEmpresa';
    $route['updateEMP'] = 'Empresas/ActualizarEmpresa';
    $route['deleteEMP'] = 'Empresas/EliminarEmpresa';

    
    #------------> Referencia CRUD <--------------#

    $route['RF'] = 'Referencia/VerReferencia';
    $route['insertRF'] = 'Referencia/CrearReferencia';
    $route['updateRF'] = 'Referencia/ActualizarReferencia';
    $route['deleteRF'] = 'Referencia/EliminarReferencia';

    #------------------> Cargos CRUD <-----------------------#
    
    $route['CG'] = 'Cargos/VerCargos';
    $route['insertCG'] = 'Cargos/CrearCargos';
    $route['updateCG'] = 'Cargos/ActualizarCargos';
    $route['deleteCG'] = 'Cargos/EliminarCargos';
   
    #------------> Persona_Natural CRUD <--------------#
    
    $route['PN'] = 'Persona_Natural/verPersonaNatural';
    $route['insertPN'] = 'Persona_Natural/CrearPersonaNatural';
    $route['updatePN'] = 'Persona_Natural/ActualizarPersonaNatural';
    $route['deletePN'] = 'Persona_Natural/EliminarPersonaNatural';
    
    #------------> Empresas_CtrlRoll CRUD <--------------#

    $route['ECR'] = 'Empresas_CtrlRoll/VerEmpresasCtrl';
    $route['insertECR'] = 'Empresas_CtrlRoll/CrearEmpresasCtrl';
    $route['updateECR'] = 'Empresas_CtrlRoll/ActualizarEmpresasCtrl';
    $route['deleteECR'] = 'Empresas_CtrlRoll/EliminarEmpresasCtrl';

    #------------> Extras CRUD <--------------#

    $route['EX'] = 'Extras/VerExtras';
    $route['insertEX'] = 'Extras/CrearExtras';
    $route['updateEX'] = 'Extras/ActualizarExtras';
    $route['deleteEX'] = 'Extras/DeleteExtras';

    #------------> Matriz_Cotizante CRUD <--------------#
    
    $route['MC'] = 'Matriz_Cotizante/VerMC';
    $route['insertMC'] = 'Matriz_Cotizante/CrearMC';
    $route['updateMC'] = 'Matriz_Cotizante/ActualizarMC';
    $route['deleteMC'] = 'Matriz_Cotizante/EliminarMC';
    
    #------------> Tipo_Servicio CRUD <--------------#
    
    $route['TS'] = 'Tipo_Servicio/VerTS';
    $route['insertTS'] = 'Tipo_Servicio/CrearTS';
    $route['updateTS'] = 'Tipo_Servicio/ActualizarTS';
    $route['deleteTS'] = 'Tipo_Servicio/EliminarTS';
    
    

    #------------> Usuarios CRUD <--------------#
    $route['ViewUser'] = 'Usuario/ViewUsuario';
    $route['User'] = 'Usuario/VerUsuario';
    $route['insertUser'] = 'Usuario/CrearUsuario';
    $route['updateUser'] = 'Usuario/ActualizarUsuario';
    $route['deleteUser'] = 'Usuario/EliminarUsuario';
    

    #------------> Departamentos CRUD <--------------#

     $route['DP'] = 'Departamentos/VerDepartamentos';
     $route['insertDP'] = 'Departamentos/CrearDepartamentos';
     $route['updateDP'] = 'Departamentos/ActualizarDepartamentos';
     $route['deleteDP'] = 'Departamentos/EliminarDepartamentos';

    #------------> Laboral CRUD <--------------#
    
    $route['LB'] = 'Laboral/VerLaboral';
    $route['insertLB'] = 'Laboral/CrearLaboral';
    $route['updateLB'] = 'Laboral/ActualizarLaboral';
    $route['deleteLB'] = 'Laboral/EliminarLaboral';
    
    #------------> Matriz_Requerimientos CRUD <--------------#
    
    $route['MR'] = 'Matriz_Requerimientos/VerMR';
    $route['insertMR'] = 'Matriz_Requerimientos/CrearMR';
    $route['updateMR'] = 'Matriz_Requerimientos/ActualizarMR';
    $route['deleteMR'] = 'Matriz_Requerimientos/EliminarMR';
    
    #------------> Estados CRUD <--------------#
    $route['ET'] = 'Estados/VerEstados';
    $route['insertET'] = 'Estados/CrearEstados';
    $route['updateET'] = 'Estados/ActualizarEstados';
    $route['deleteET'] = 'Estados/EliminarEstados';

    #------------> Requerimiento CRUD <--------------#
        
    $route['RQ'] = 'Requerimiento/VerRequerimiento';
    $route['insertRQ'] = 'Requerimiento/CrearRequerimiento';
    $route['updateRQ'] = 'Requerimiento/ActualizarRequerimiento';
    $route['deleteRQ'] = 'Requerimiento/EliminarRequerimiento';

    #------------> Noticias CRUD <--------------#
        
    $route['NoticiasT'] = 'Noticias/VerNoticias';
    $route['insertNoticias'] = 'Noticias/CrearNoticias';
    $route['updateNoticias'] = 'Noticias/ActualizarNoticias';
    $route['deleteNoticias'] = 'Noticias/EliminarNoticias';
    $route['BuscarNoticias'] = 'Noticias/BuscarNoticias';
    $route['BuscarNoticias_Titulo'] = 'Noticias/BuscarNoticias_Titulo';
    $route['Recientes'] = 'Noticias/Recientes';

    #------------> Categorias CRUD <--------------#
        
    $route['Categoria'] = 'Noticias/VerCategoria';
    $route['insertCategoria'] = 'Noticias/CrearCategoria';
    $route['updateCategoria'] = 'Noticias/ActualizarCategoria';
    $route['deleteCategoria'] = 'Noticias/EliminarCategoria';
    $route['BuscarCategorias'] = 'Noticias/BuscarCategoria';


########---->No Touch <----########

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;