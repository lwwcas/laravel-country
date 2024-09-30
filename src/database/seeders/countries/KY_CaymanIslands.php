<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class KY_CaymanIslands extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Cayman Islands';
        $this->official_name = 'Cayman Islands';
        $this->iso_alpha_2 = 'KY';
        $this->iso_alpha_3 = 'CYM';
        $this->iso_numeric = '163';
        $this->international_phone = '1-345';

        $this->languages = ['en'];
        $this->tld = ['.ky'];
        $this->wmo = 'GC';
        $this->geoname_id = '3580718';

        $this->emoji = [
            'img' => '🇰🇾',
            'uCode' => 'U+1F1F0 U+1F1FE',
        ];
        $this->color = [
            'hex' => [
                '#3f26bf',
                '#ff3f34',
                '#ffffff',
            ],
            'rgb' => [
                '63,38,191',
                '255,63,52',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '19 30 N',
                'desc' => '19.308862686157227',
            ],
            'longitude' => [
                'classic' => '80 30 W',
                'desc' => '-81.25680541992188',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '19.75',
                'min' => '19.25',
            ],
            'longitude' => [
                'max' => '-79.716667',
                'min' => '-81.416667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "ky" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-81.09723, 19.308887],
              [-81.10556, 19.302776],
              [-81.260284, 19.265274],
              [-81.266953, 19.26472],
              [-81.38417, 19.26472],
              [-81.390015, 19.26472],
              [-81.39418, 19.267498],
              [-81.397232, 19.271942],
              [-81.400558, 19.282219],
              [-81.40112, 19.28833],
              [-81.400558, 19.30778],
              [-81.39917, 19.313053],
              [-81.395, 19.326111],
              [-81.37195, 19.30917],
              [-81.367233, 19.306942],
              [-81.35556, 19.303886],
              [-81.341675, 19.304165],
              [-81.316956, 19.306389],
              [-81.31111, 19.30778],
              [-81.301392, 19.312222],
              [-81.27251, 19.325554],
              [-81.26945, 19.32944],
              [-81.275284, 19.34333],
              [-81.254456, 19.35389],
              [-81.15001, 19.354164],
              [-81.115005, 19.353333],
              [-81.108337, 19.3525],
              [-81.09917, 19.3475],
              [-81.09611, 19.34333],
              [-81.093063, 19.332775],
              [-81.093338, 19.319164],
              [-81.095, 19.31361],
              [-81.09723, 19.308887]
            ]
          ],
          [
            [
              [-80.0975, 19.65416],
              [-80.103897, 19.65361],
              [-80.109726, 19.655277],
              [-80.11168, 19.66222],
              [-80.11, 19.6675],
              [-80.10695, 19.671665],
              [-80.08057, 19.695],
              [-80.07584, 19.6975],
              [-79.99084, 19.711388],
              [-79.97696, 19.711666],
              [-79.97084, 19.710278],
              [-79.966675, 19.707222],
              [-79.965286, 19.703053],
              [-79.96918, 19.699718],
              [-79.974457, 19.69778],
              [-80.0975, 19.65416]
            ]
          ],
          [
            [
              [-79.86639, 19.686943],
              [-79.87889, 19.68528],
              [-79.88556, 19.686108],
              [-79.89056, 19.689163],
              [-79.89334, 19.69333],
              [-79.88972, 19.69666],
              [-79.769455, 19.761665],
              [-79.76306, 19.762218],
              [-79.756958, 19.76055],
              [-79.74112, 19.754444],
              [-79.73611, 19.75222],
              [-79.73279, 19.748608],
              [-79.73279, 19.74472],
              [-79.73668, 19.741386],
              [-79.753067, 19.729443],
              [-79.771118, 19.718887],
              [-79.78667, 19.713333],
              [-79.86639, 19.686943]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
