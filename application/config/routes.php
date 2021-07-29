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







################--->My Controllers <---############
    #------------> Usuarios CRUD <--------------#
    
    $route['usuario'] = 'Welcome/Usuario';
    
 
    #------------> Departamentos CRUD <--------------#
    #------------> Cargos CRUD <--------------#
    #------------> Contacto CRUD <--------------#
    #------------> Persona_Natural CRUD <--------------#
    #------------> Matriz_Cotizante CRUD <--------------#
    #------------> Matriz_Servicio CRUD <--------------#
    #------------> Tipo_Servicio CRUD <--------------#
    #------------> Referencia CRUD <--------------#
    #------------> Empresa CRUD <--------------#
    #------------> Matriz_Requerimientos CRUD <--------------#
    #------------> Estados CRUD <--------------#
    #------------> Servicios_Basicos CRUD <--------------#
    #------------> Extras CRUD <--------------#
    #------------> Representante_Legal CRUD <--------------#
    #------------> Empresa_ctrlroll CRUD <--------------#
    #------------> Requerimiento CRUD <--------------#
    #------------> Noticias CRUD <--------------#
    #------------> Categorias CRUD <--------------#












########---->No Touch <----########

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;