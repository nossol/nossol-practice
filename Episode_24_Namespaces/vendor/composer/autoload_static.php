<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0d1fed8cf45b55557e885ef4db1eb65
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/Episodes/Episode_22_Your_First_DI_Container/core/App.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInite0d1fed8cf45b55557e885ef4db1eb65' => __DIR__ . '/../..' . '/Episodes/Episode_21_Composer_Autoloading/vendor/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/../..' . '/Episodes/Episode_21_Composer_Autoloading/vendor/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite0d1fed8cf45b55557e885ef4db1eb65' => __DIR__ . '/../..' . '/Episodes/Episode_21_Composer_Autoloading/vendor/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/Episodes/Episode_23_Refactoring_to_Controller_Classes/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/Episodes/Episode_16_Router/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/Episodes/Episode_16_Router/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/Episodes/Episode_12_Classes/index.php',
        'UsersController' => __DIR__ . '/../..' . '/Episodes/Episode_23_Refactoring_to_Controller_Classes/controllers/UsersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite0d1fed8cf45b55557e885ef4db1eb65::$classMap;

        }, null, ClassLoader::class);
    }
}
