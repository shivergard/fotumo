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

sms_table must contain fields [wrapper] what will be used for response . 
Inside wrapper must have part (RESULT) what will contain result parts.

sms_table must contain field processor , what will be full path to class what will generate result. This class must have static function get , witch will reciewe message text string. And must give result.
