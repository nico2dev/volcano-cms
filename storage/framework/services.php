<?php

return array (
  'providers' => 
  array (
    0 => 'Volcano\\Auth\\AuthServiceProvider',
    1 => 'Volcano\\Bus\\BusServiceProvider',
    2 => 'Volcano\\Broadcasting\\BroadcastServiceProvider',
    3 => 'Volcano\\Cache\\CacheServiceProvider',
    4 => 'Volcano\\Routing\\RoutingServiceProvider',
    5 => 'Volcano\\Cookie\\CookieServiceProvider',
    6 => 'Volcano\\Database\\DatabaseServiceProvider',
    7 => 'Volcano\\Encryption\\EncryptionServiceProvider',
    8 => 'Volcano\\Filesystem\\FilesystemServiceProvider',
    9 => 'Volcano\\Localization\\LocalizationServiceProvider',
    10 => 'Volcano\\Hashing\\HashServiceProvider',
    11 => 'Volcano\\Mail\\MailServiceProvider',
    12 => 'Volcano\\Notifications\\NotificationServiceProvider',
    13 => 'Volcano\\Packages\\PackageServiceProvider',
    14 => 'Volcano\\Pagination\\PaginationServiceProvider',
    15 => 'Volcano\\Queue\\QueueServiceProvider',
    16 => 'Volcano\\Redis\\RedisServiceProvider',
    17 => 'Volcano\\Session\\SessionServiceProvider',
    18 => 'Volcano\\Validation\\ValidationServiceProvider',
    19 => 'Volcano\\View\\ViewServiceProvider',
    20 => 'Volcano\\Cache\\ConsoleServiceProvider',
    21 => 'Volcano\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    22 => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    23 => 'Volcano\\Database\\MigrationServiceProvider',
    24 => 'Volcano\\Database\\SeedingServiceProvider',
    25 => 'Volcano\\Localization\\ConsoleServiceProvider',
    26 => 'Volcano\\Notifications\\ConsoleServiceProvider',
    27 => 'Volcano\\Packages\\ConsoleServiceProvider',
    28 => 'Volcano\\Routing\\ConsoleServiceProvider',
    29 => 'Volcano\\Session\\ConsoleServiceProvider',
    30 => 'App\\Providers\\AppServiceProvider',
    31 => 'App\\Providers\\AuthServiceProvider',
    32 => 'App\\Providers\\EventServiceProvider',
    33 => 'App\\Providers\\RouteServiceProvider',
    34 => 'App\\Providers\\BroadcastServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Volcano\\Auth\\AuthServiceProvider',
    1 => 'Volcano\\Broadcasting\\BroadcastServiceProvider',
    2 => 'Volcano\\Routing\\RoutingServiceProvider',
    3 => 'Volcano\\Cookie\\CookieServiceProvider',
    4 => 'Volcano\\Database\\DatabaseServiceProvider',
    5 => 'Volcano\\Encryption\\EncryptionServiceProvider',
    6 => 'Volcano\\Filesystem\\FilesystemServiceProvider',
    7 => 'Volcano\\Packages\\PackageServiceProvider',
    8 => 'Volcano\\Pagination\\PaginationServiceProvider',
    9 => 'Volcano\\Session\\SessionServiceProvider',
    10 => 'Volcano\\Packages\\ConsoleServiceProvider',
    11 => 'App\\Providers\\AppServiceProvider',
    12 => 'App\\Providers\\AuthServiceProvider',
    13 => 'App\\Providers\\EventServiceProvider',
    14 => 'App\\Providers\\RouteServiceProvider',
    15 => 'App\\Providers\\BroadcastServiceProvider',
  ),
  'deferred' => 
  array (
    'Volcano\\Bus\\Dispatcher' => 'Volcano\\Bus\\BusServiceProvider',
    'Volcano\\Bus\\DispatcherInterface' => 'Volcano\\Bus\\BusServiceProvider',
    'Volcano\\Bus\\QueueingDispatcherInterface' => 'Volcano\\Bus\\BusServiceProvider',
    'cache' => 'Volcano\\Cache\\CacheServiceProvider',
    'cache.store' => 'Volcano\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Volcano\\Cache\\CacheServiceProvider',
    'language' => 'Volcano\\Localization\\LocalizationServiceProvider',
    'hash' => 'Volcano\\Hashing\\HashServiceProvider',
    'mailer' => 'Volcano\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Volcano\\Mail\\MailServiceProvider',
    'swift.transport' => 'Volcano\\Mail\\MailServiceProvider',
    'notifications' => 'Volcano\\Notifications\\NotificationServiceProvider',
    'queue' => 'Volcano\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Volcano\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Volcano\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Volcano\\Queue\\QueueServiceProvider',
    'command.queue.work' => 'Volcano\\Queue\\QueueServiceProvider',
    'command.queue.listen' => 'Volcano\\Queue\\QueueServiceProvider',
    'command.queue.restart' => 'Volcano\\Queue\\QueueServiceProvider',
    'command.queue.subscribe' => 'Volcano\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Volcano\\Queue\\QueueServiceProvider',
    'redis' => 'Volcano\\Redis\\RedisServiceProvider',
    'validator' => 'Volcano\\Validation\\ValidationServiceProvider',
    'view' => 'Volcano\\View\\ViewServiceProvider',
    'view.finder' => 'Volcano\\View\\ViewServiceProvider',
    'view.engine.resolver' => 'Volcano\\View\\ViewServiceProvider',
    'template' => 'Volcano\\View\\ViewServiceProvider',
    'template.compiler' => 'Volcano\\View\\ViewServiceProvider',
    'markdown' => 'Volcano\\View\\ViewServiceProvider',
    'markdown.compiler' => 'Volcano\\View\\ViewServiceProvider',
    'section' => 'Volcano\\View\\ViewServiceProvider',
    'command.cache.clear' => 'Volcano\\Cache\\ConsoleServiceProvider',
    'command.cache.forget' => 'Volcano\\Cache\\ConsoleServiceProvider',
    'command.cache.table' => 'Volcano\\Cache\\ConsoleServiceProvider',
    'composer' => 'Volcano\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'forge' => 'Volcano\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.asset.publish' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.config.publish' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.clear-compiled' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.clear-log' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.console.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.down' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.environment' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.event.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.job.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.key.generate' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.listener.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.model.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.optimize' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.policy.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.provider.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.request.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.serve' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.shared.make' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.assets-link' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.up' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.vendor.publish' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.view.clear' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'command.view.publish' => 'Volcano\\Foundation\\Providers\\ForgeServiceProvider',
    'migrator' => 'Volcano\\Database\\MigrationServiceProvider',
    'migration.repository' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.rollback' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.reset' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.refresh' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.install' => 'Volcano\\Database\\MigrationServiceProvider',
    'migration.creator' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.make' => 'Volcano\\Database\\MigrationServiceProvider',
    'command.migrate.status' => 'Volcano\\Database\\MigrationServiceProvider',
    'seeder' => 'Volcano\\Database\\SeedingServiceProvider',
    'command.seed' => 'Volcano\\Database\\SeedingServiceProvider',
    'command.seeder.make' => 'Volcano\\Database\\SeedingServiceProvider',
    'command.languages.update' => 'Volcano\\Localization\\ConsoleServiceProvider',
    'command.notification.table' => 'Volcano\\Notifications\\ConsoleServiceProvider',
    'command.notification.make' => 'Volcano\\Notifications\\ConsoleServiceProvider',
    'command.controller.make' => 'Volcano\\Routing\\ConsoleServiceProvider',
    'command.middleware.make' => 'Volcano\\Routing\\ConsoleServiceProvider',
    'command.route.list' => 'Volcano\\Routing\\ConsoleServiceProvider',
    'command.session.database' => 'Volcano\\Session\\ConsoleServiceProvider',
  ),
  'when' => 
  array (
    'Volcano\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Volcano\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Volcano\\Localization\\LocalizationServiceProvider' => 
    array (
    ),
    'Volcano\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Volcano\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Volcano\\Notifications\\NotificationServiceProvider' => 
    array (
    ),
    'Volcano\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Volcano\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Volcano\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'Volcano\\View\\ViewServiceProvider' => 
    array (
    ),
    'Volcano\\Cache\\ConsoleServiceProvider' => 
    array (
    ),
    'Volcano\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Volcano\\Foundation\\Providers\\ForgeServiceProvider' => 
    array (
    ),
    'Volcano\\Database\\MigrationServiceProvider' => 
    array (
    ),
    'Volcano\\Database\\SeedingServiceProvider' => 
    array (
    ),
    'Volcano\\Localization\\ConsoleServiceProvider' => 
    array (
    ),
    'Volcano\\Notifications\\ConsoleServiceProvider' => 
    array (
    ),
    'Volcano\\Routing\\ConsoleServiceProvider' => 
    array (
    ),
    'Volcano\\Session\\ConsoleServiceProvider' => 
    array (
    ),
  ),
);
