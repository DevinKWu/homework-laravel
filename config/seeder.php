<?php
return[
    'Permission' => [
        ['name' => 'view backend' ],
        ['name' => 'view log-viewer' ],
        ['name' => 'manage page' ],
        ['name' => 'manage post' ],
    ],
    'Role' => [
        ['name' => config('access.users.admin_role')],
        ['name' => 'executive'],
        ['name' => config('access.users.default_role')],
    ]
];