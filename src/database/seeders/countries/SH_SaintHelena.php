<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SH_SaintHelena extends CountrySeeder
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
        $this->name = 'Saint Helena';
        $this->official_name = 'Saint Helena, Ascension and Tristan da Cunha';
        $this->iso_alpha_2 = 'SH';
        $this->iso_alpha_3 = 'SHN';
        $this->iso_numeric = '654';
        $this->international_phone = '290';

        $this->languages = ['en'];
        $this->tld = [];
        $this->wmo = 'HE';
        $this->geoname_id = '3370751';

        $this->emoji = [
            'img' => '🇸🇭',
            'uCode' => 'U+1F1F8 U+1F1ED',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '15 57 S',
                'desc' => '-15.957334518432617',
            ],
            'longitude' => [
                'classic' => '5 42 W',
                'desc' => '-5.716914176940918',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-7.9',
                'min' => '-40.4',
            ],
            'longitude' => [
                'max' => '-5.633333',
                'min' => '-14.416667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sh"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-9.892223,-40.390839],[-9.91111,-40.40389],[-9.92389,-40.402229],[-9.941668,-40.39667],[-9.94806,-40.39445],[-10.040834,-40.341667],[-10.04139,-40.336945],[-10.031389,-40.31444],[-10.02861,-40.30945],[-10.023056,-40.30695],[-10.009724,-40.305],[-9.959167,-40.30528],[-9.95222,-40.306671],[-9.90333,-40.36528],[-9.892223,-40.390839]]],[[[-12.20639,-37.112503],[-12.26583,-37.155556],[-12.28278,-37.148056],[-12.30306,-37.136391],[-12.33,-37.11306],[-12.33167,-37.107506],[-12.330557,-37.10139],[-12.30306,-37.0625],[-12.296667,-37.053612],[-12.28945,-37.052505],[-12.259445,-37.05278],[-12.24417,-37.05445],[-12.238335,-37.056671],[-12.21472,-37.0725],[-12.210556,-37.07612],[-12.19361,-37.095001],[-12.2025,-37.108612],[-12.20639,-37.112503]]],[[[-5.66222,-15.987501],[-5.69833,-16.005001],[-5.7025,-16.002502],[-5.710556,-15.996389],[-5.712976,-15.99286],[-5.72528,-16.003334],[-5.72889,-16.00556],[-5.73722,-16.00972],[-5.76639,-16.02333],[-5.77056,-16.020557],[-5.78722,-16.009167],[-5.79306,-15.994167],[-5.7925,-15.988056],[-5.770278,-15.949446],[-5.7675,-15.94528],[-5.74861,-15.929167],[-5.72889,-15.91389],[-5.71639,-15.905279],[-5.70417,-15.90306],[-5.697779,-15.90389],[-5.69194,-15.905001],[-5.67139,-15.90944],[-5.64528,-15.94],[-5.64583,-15.955557],[-5.646945,-15.961113],[-5.65861,-15.98389],[-5.66222,-15.987501]]],[[[-14.36389,-7.97972],[-14.391525,-7.98409],[-14.40972,-7.97833],[-14.41222,-7.97417],[-14.41611,-7.94],[-14.41445,-7.93444],[-14.405834,-7.915278],[-14.398613,-7.90194],[-14.386112,-7.88639],[-14.38194,-7.88361],[-14.37833,-7.883056],[-14.359167,-7.89028],[-14.355835,-7.892222],[-14.31944,-7.91806],[-14.29417,-7.93972],[-14.29306,-7.94528],[-14.29667,-7.948611],[-14.31139,-7.96139],[-14.34028,-7.97333],[-14.34528,-7.97528],[-14.36389,-7.97972]]]]}}]}';
    }
}
