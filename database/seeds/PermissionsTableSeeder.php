<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        //users
        Permission::create([
        'name'          =>'Navegar Usuarios',
        'slug'          =>'users.index',
        'description'   =>'Lista y navega todos los usuarios del sistema'
        ]);

        Permission::create([
        'name'          =>'Ver detalles de Usuarios',
        'slug'          =>'users.show',
        'description'   =>'Ver en detalle cada uno de los usuarios del sistema'
        ]);
        
        Permission::create([
        'name'          =>'Editar Usuarios',
        'slug'          =>'users.edit',
        'description'   =>'Editar cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
        'name'          =>'Eliminar Usuarios',
        'slug'          =>'users.destroy',
        'description'   =>'Eliminar cualquier usuario del sistema'
        ]);

        //roles
        Permission::create([
            'name'          =>'Navegar Roles',
            'slug'          =>'roles.index',
            'description'   =>'Lista y navega todos los roles del sistema'
        ]);
    
        Permission::create([
            'name'          =>'Ver detalles de Roles',
            'slug'          =>'roles.show',
            'description'   =>'Ver en detalle cada uno de los roles del sistema'
        ]);

        Permission::create([
            'name'          =>'Creacion de Roles',
            'slug'          =>'roles.create',
            'description'   =>'Ver en detalle cada uno de los roles del sistema'
        ]);
            
            Permission::create([
            'name'          =>'Editar Roles',
            'slug'          =>'roles.edit',
            'description'   =>'Editar cualquier dato de un rol del sistema'
        ]);
            Permission::create([
            'name'          =>'Eliminar Roles',
            'slug'          =>'roles.destroy',
            'description'   =>'Eliminar cualquier rol del sistema'
        ]);

        //productos
        Permission::create([
            'name'          =>'Navegar Productos',
            'slug'          =>'products.index',
            'description'   =>'Lista y navega todos los productos del sistema'
        ]);
    
        Permission::create([
            'name'          =>'Ver detalles de Producto ',
            'slug'          =>'products.show',
            'description'   =>'Ver en detalle cada uno de los productos del sistema'
        ]);

        Permission::create([
            'name'          =>'Creacion de Productos',
            'slug'          =>'products.create',
            'description'   =>'Ver en detalle cada uno de los productos del sistema'
        ]);
            
            Permission::create([
            'name'          =>'Editar Producto',
            'slug'          =>'products.edit',
            'description'   =>'Editar cualquier dato de un producto del sistema'
        ]);
            Permission::create([
            'name'          =>'Eliminar Producto',
            'slug'          =>'products.destroy',
            'description'   =>'Eliminar cualquier producto del sistema'
        ]);
    }
}
