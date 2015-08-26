<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Smiley Images URL
    |--------------------------------------------------------------------------
    |
    | The URL to the smiley images.
    |
    */

    'url' => app()->runningInConsole() ?: asset('smilies'),

    /*
    |--------------------------------------------------------------------------
    | Smiley Images Mapping
    |--------------------------------------------------------------------------
    |
    | http://docs.hazzardweb.com/laravel-comments/master/configuration#smilies
    |
    */

    'smilies' => [
        /*
        ':)' => 'smile.png',
        ':(' => 'frown.png',
        ':P' => 'tongue.png',
        ';)' => 'wink.png',
        ':x' => 'angry.png',
        ':|' => 'bored.png',
        ':D' => 'big_grin_squint.png',
        ':S' => 'confused.png',
        '8-)'=> 'sunglasses_3.png',
        ':O' => 'agape.png',
        ':asleep:'      => 'asleep_2.png',
        ':bashful:'     => 'bashful.png',
        ':bashfulcute:' => 'bashful_cute.png',
        ':bigevilgrin:' => 'big_grin_evil.png',
        ':bigsmile:'    => 'big_grin.png',
        ':bigwink:'     => 'big_grin_wink.png',
        ':chuckle:'     => 'little_laugh.png',
        ':crying:'      => 'crying.png',
        ':confused:'    => 'confused.png',
        ':confusedsad:' => 'don\'t_cry.png',
        ':dead:'        => 'dead.png',
        ':delicious:'   => 'delicious.png',
        ':depressed:'   => 'not_even.png',
        ':evil:'        => 'evil_invert.png',
        ':evilgrin:'    => 'evil_grin.png',
        ':grin:'        => 'grin.png',
        ':impatient:'   => 'impatient.png',
        ':inlove:'      => 'inlove.png',
        ':kiss:'        => 'kiss.png',
        ':mad:'         => 'mad.png',
        ':nerdy:'       => 'nerdy.png',
        ':notfunny:'    => 'not_entertained.png',
        ':ohrly:'       => 'oh_rly.png',
        ':reallyevil:'  => 'evil.png',
        ':sarcasm:'     => 'sarcasm.png',
        ':shocked:'     => 'shocked.png',
        ':sick:'        => 'sick.png',
        ':silly:'       => 'silly.png',
        ':sing:'        => 'sing.png',
        ':smitten:'     => 'smitten.png',
        ':smug:'        => 'smug.png',
        ':stress:'      => 'stress.png',
        ':sunglasses:'  => 'sunglasses_1.png',
        ':sunglasses2:' => 'sunglasses_2.png',
        ':superbashfulcute:' => 'bashful_cute_2.png',
        ':tired:'       => 'asleep.png',
        ':whistle:'     => 'whistle.png',
        ':winktongue:'  => 'wink_tongue.png',
        ':yawn:'        => 'yawn.png',
        ':zipped:'      => 'zipped.png',
        */
    ],
];
