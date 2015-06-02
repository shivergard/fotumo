To Start using it add to composer.json repozitory

    "repositories": [
      {
      "type": "git",
       "url": "git@github.com:shivergard/fortumo.git"
      }
    ],

and add requirements

	"require": {
		...
        "shivergard/fortumo" : "dev-master" 
    },

and add service provider

		'providers' => [
		...
      'Shivergard\Fortumo\FortumoServiceProvider',
		...