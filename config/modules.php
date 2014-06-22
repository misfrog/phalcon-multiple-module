<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Multiple\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ),
	'backend' => array(
		'className' => 'Multiple\Backend\Module',
		'path' => __DIR__ . '/../apps/backend/Module.php'
	)
));
