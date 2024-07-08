<?php

return array(

    'deleted' => 'Proveedor eliminado',
    'does_not_exist' => 'El proveedor no existe.',


    'create' => array(
        'error'   => 'El proveedor no ha sido creado, inténtalo de nuevo.',
        'success' => 'Proveedor creado con éxito.'
    ),

    'update' => array(
        'error'   => 'El proveedor no ha sido actualizado, por favor, inténtalo de nuevo',
        'success' => 'Proveedor actualizado con éxito.'
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar este proveedor?',
        'error'   => 'Hubo un problema borrando el proveedor. Por favor, inténtalo de nuevo.',
        'success' => 'El proveedor fue eliminado con éxito.',
        'assoc_assets'	 => 'Este proveedor está actualmente asociado con :asset_count activo(s) y no puede ser eliminado. Actualice sus activos para que ya no hagan referencia a este proveedor e inténtelo de nuevo. ',
        'assoc_licenses'	 => 'Este proveedor está asociado actualmente con :licenses_count licences(s) y no puede ser eliminado. Por favor, actualice sus licencias para dejar de hacer referencia a este proveedor e inténtelo de nuevo. ',
        'assoc_maintenances'	 => 'Este proveedor está actualmente asociado con :asset_maintenances_count mantenedor(es) de activo y no puede ser eliminado. Por favor, actualiza tus mantenedores de activo para no referenciar este proveedor e inténtalo de nuevo. ',
    )

);
