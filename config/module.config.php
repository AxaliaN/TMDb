<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 3-11-13
 * Time: 9:05
 */

return array(
    'axalian_tmdb' => array(
        'api_version' => 3,
        'hydrators' => array(
            'invokables' => array(
                'AxalianTmdb\Hydrator\Movie' => 'AxalianTmdb\Hydrator\MovieHydrator',
                'AxalianTmdb\Hydrator\Tv' => 'AxalianTmdb\Hydrator\TvHydrator'
            )
        )
    )
);