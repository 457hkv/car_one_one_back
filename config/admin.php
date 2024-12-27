<?php
// config/admin.php
return [
    'database' => [
//        'operation_log_table' => 'operation_logs', // 表名
        'users_table' => 'admin_users',
        'roles_table' => 'admin_roles',
        'permissions_table' => 'admin_permissions',
        'menu_table' => 'admin_menu',
        'role_users_table' => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'user_permissions_table' => 'admin_user_permissions',
        'role_menu_table' => 'admin_role_menu',
        'operation_log_table' => 'admin_tables',
    ],
];
