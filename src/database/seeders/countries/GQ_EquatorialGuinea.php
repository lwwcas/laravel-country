<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class GQ_EquatorialGuinea extends CountrySeeder
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
    public $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Equatorial Guinea';
        $this->official_name = 'Republic of Equatorial Guinea';
        $this->iso_alpha_2 = 'GQ';
        $this->iso_alpha_3 = 'GNQ';
        $this->iso_numeric = '226';
        $this->international_phone = '240';

        $this->languages = ['es','fr'];
        $this->tld = ['.gq'];
        $this->wmo = 'GQ';
        $this->geoname_id = '2309096';

        $this->emoji = [
            'img' => '🇬🇶',
            'uCode' => 'U+1F1EC U+1F1F6',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffffff',
                '#ff0000',
                '#007fff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,255',
                '255,0,0',
                '0,127,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '2 00 N',
                'desc' => '1.5331259965896606',
            ],
            'longitude' => [
                'classic' => '10 00 E',
                'desc' => '10.372581481933594',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '3.783333',
                'min' => '-1.483333',
            ],
            'longitude' => [
                'max' => '11.4',
                'min' => '5.05',
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
      "properties": { "cca2": "gq" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [5.641388, -1.47472],
              [5.625555, -1.479445],
              [5.62028, -1.47806],
              [5.616666, -1.47472],
              [5.615277, -1.469167],
              [5.616111, -1.438334],
              [5.616666, -1.432222],
              [5.618889, -1.42722],
              [5.622777, -1.42444],
              [5.6338880000001, -1.42056],
              [5.637221, -1.4225],
              [5.6433320000001, -1.43],
              [5.645555, -1.435],
              [5.647499, -1.446389],
              [5.646111, -1.45889],
              [5.641388, -1.47472]
            ]
          ],
          [
            [
              [10.02611, 2.16806],
              [10.073889, 2.167778],
              [10.18107, 2.167862],
              [10.305555, 2.1675000000001],
              [10.332777, 2.1675000000001],
              [10.408661, 2.167849],
              [10.42139, 2.1675000000001],
              [10.44861, 2.1675000000001],
              [10.537222, 2.1675000000001],
              [10.564722, 2.1675000000001],
              [10.65333, 2.1675000000001],
              [11.082499, 2.16806],
              [11.225832, 2.1683330000001],
              [11.339764, 2.168611],
              [11.343611, 2.164444],
              [11.344999, 2.007778],
              [11.344444, 1.987222],
              [11.344999, 1.919167],
              [11.345833, 1.830555],
              [11.346695, 1.740699],
              [11.347776, 1.694167],
              [11.34861, 1.605556],
              [11.349998, 1.448611],
              [11.35389, 1.001944],
              [11.24444, 1.002222],
              [10.969844, 1.00359],
              [10.909721, 1.002778],
              [10.77305, 1.0025],
              [10.520277, 1.002222],
              [10.493055, 1.002222],
              [10.41505, 1.0024970000001],
              [10.308611, 1.0025],
              [10.28139, 1.0025],
              [10.253887, 1.0025],
              [10.22666, 1.0025],
              [10.02861, 1.0025],
              [10.00111, 1.002222],
              [9.992213, 1.00188],
              [9.9754550000001, 0.945943],
              [9.9591, 0.93425],
              [9.94392, 0.926066],
              [9.8921, 0.951859],
              [9.875814, 0.967676],
              [9.867109, 0.984656],
              [9.839165, 1.001651],
              [9.825757, 1.002451],
              [9.80398, 1.002608],
              [9.801666, 1.027778],
              [9.840277, 1.069722],
              [9.849998, 1.073611],
              [9.84861, 1.076389],
              [9.8447210000001, 1.079167],
              [9.784721, 1.094444],
              [9.75694, 1.1011110000001],
              [9.737778, 1.1002780000001],
              [9.70222, 1.097222],
              [9.675554, 1.08889],
              [9.571943, 1.0716660000001],
              [9.570555, 1.077222],
              [9.553888, 1.114444],
              [9.551109, 1.11861],
              [9.543888, 1.125],
              [9.539165, 1.1272220000001],
              [9.5175, 1.1330550000001],
              [9.494165, 1.1363890000001],
              [9.488054, 1.13583],
              [9.4824980000001, 1.134722],
              [9.470833, 1.126111],
              [9.4175, 1.105],
              [9.412222, 1.103889],
              [9.407499, 1.104722],
              [9.393888, 1.111666],
              [9.36472, 1.149444],
              [9.356943, 1.167222],
              [9.363609, 1.182222],
              [9.425833, 1.291944],
              [9.45611, 1.384722],
              [9.456944, 1.390833],
              [9.462776, 1.398889],
              [9.4858320000001, 1.424166],
              [9.494165, 1.429444],
              [9.5605550000001, 1.4925],
              [9.639444, 1.583889],
              [9.63333, 1.59167],
              [9.611944, 1.63111],
              [9.609999, 1.635833],
              [9.611944, 1.660278],
              [9.64028, 1.70055],
              [9.681389, 1.741111],
              [9.703609, 1.753611],
              [9.714167, 1.763611],
              [9.720554, 1.770833],
              [9.794998, 1.888889],
              [9.81222, 1.92],
              [9.814165, 1.92472],
              [9.814444, 1.931389],
              [9.812777, 1.943055],
              [9.799166, 1.996666],
              [9.778055, 2.117777],
              [9.771387, 2.31194],
              [9.772499, 2.3247220000001],
              [9.77528, 2.328888],
              [9.811764, 2.343698],
              [9.825832, 2.2786110000001],
              [9.828333, 2.267777],
              [9.830276, 2.262777],
              [9.835278, 2.25444],
              [9.83861, 2.251111],
              [9.8944440000001, 2.210833],
              [9.89889, 2.2086110000001],
              [9.93528, 2.19139],
              [9.974443, 2.175555],
              [9.990833, 2.1711110000001],
              [10.015833, 2.1683330000001],
              [10.02611, 2.16806]
            ]
          ],
          [
            [
              [8.85667, 3.49944],
              [8.8025000000001, 3.396111],
              [8.78, 3.3325],
              [8.777777, 3.320833],
              [8.774443, 3.3105550000001],
              [8.7688880000001, 3.3025000000001],
              [8.6991650000001, 3.2025],
              [8.6913870000001, 3.1963890000001],
              [8.6847210000001, 3.1963890000001],
              [8.6791650000001, 3.197778],
              [8.497499, 3.24361],
              [8.481943, 3.248333],
              [8.4625, 3.256667],
              [8.454443, 3.261944],
              [8.44611, 3.2744440000001],
              [8.429165, 3.318889],
              [8.4249990000001, 3.333889],
              [8.4241660000001, 3.34],
              [8.4241660000001, 3.346944],
              [8.428333, 3.374444],
              [8.43111, 3.3852780000001],
              [8.43444, 3.3955550000001],
              [8.44972, 3.435277],
              [8.457777, 3.4475],
              [8.466665, 3.459167],
              [8.471666, 3.4611110000001],
              [8.522221, 3.4625],
              [8.5338880000001, 3.460556],
              [8.54361, 3.45639],
              [8.554443, 3.453611],
              [8.566666, 3.455],
              [8.5716650000001, 3.457222],
              [8.581944, 3.467222],
              [8.586666, 3.476111],
              [8.617498, 3.5461110000001],
              [8.6194440000001, 3.550833],
              [8.6202770000001, 3.5569440000001],
              [8.62444, 3.595277],
              [8.625832, 3.64305],
              [8.625043, 3.650001],
              [8.645, 3.68278],
              [8.68611, 3.741666],
              [8.7394430000001, 3.76333],
              [8.9086090000001, 3.751944],
              [8.9141650000001, 3.750556],
              [8.923054, 3.745],
              [8.93555, 3.7366660000001],
              [8.9588870000001, 3.703888],
              [8.9613880000001, 3.6997220000001],
              [8.9622210000001, 3.674444],
              [8.960833, 3.655278],
              [8.954721, 3.634166],
              [8.950554, 3.624722],
              [8.945, 3.616389],
              [8.941666, 3.613055],
              [8.9202770000001, 3.5930550000001],
              [8.87444, 3.529444],
              [8.866108, 3.517219],
              [8.85667, 3.49944]
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
