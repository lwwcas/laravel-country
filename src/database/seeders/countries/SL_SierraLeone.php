<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class SL_SierraLeone extends CountrySeeder
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
        $this->name = 'Sierra Leone';
        $this->official_name = 'Republic of Sierra Leone';
        $this->iso_alpha_2 = 'SL';
        $this->iso_alpha_3 = 'SLE';
        $this->iso_numeric = '694';
        $this->international_phone = '232';

        $this->languages = ['en'];
        $this->tld = ['.sl'];
        $this->wmo = 'SL';
        $this->geoname_id = '2403846';

        $this->emoji = [
            'img' => '🇸🇱',
            'uCode' => 'U+1F1F8 U+1F1F1',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffffff',
                '#0000ff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,255',
                '0,0,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '8 30 N',
                'desc' => '8.521441459655762',
            ],
            'longitude' => [
                'classic' => '11 30 W',
                'desc' => '-11.843890190124512',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '10',
                'min' => '5',
            ],
            'longitude' => [
                'max' => '-4',
                'min' => '-13.316667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"sl"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-12.525278,7.431389],[-12.55945,7.420833],[-12.574722,7.446944],[-12.5775,7.451111],[-12.588335,7.461111],[-12.596945,7.4663890000001],[-12.61945,7.478055],[-12.639723,7.48472],[-12.680557,7.498055],[-12.69111,7.50111],[-12.717779,7.508611],[-12.745,7.515277],[-12.803335,7.529166],[-12.950556,7.565],[-12.95278,7.56833],[-12.89667,7.60778],[-12.885,7.614166],[-12.68806,7.635555],[-12.67472,7.636666],[-12.643057,7.638888],[-12.630556,7.638055],[-12.59111,7.634444],[-12.52639,7.599444],[-12.518612,7.593333],[-12.496946,7.57361],[-12.49556,7.568055],[-12.49556,7.503611],[-12.496946,7.498055],[-12.525278,7.431389]]],[[[-11.21444,9.997499],[-11.181391,9.985832],[-11.17833,9.9819430000001],[-11.16972,9.969721],[-11.1675,9.964998],[-11.113056,9.85889],[-11.09611,9.84833],[-11.051668,9.80944],[-11.02389,9.7819440000001],[-10.997223,9.751665],[-10.98,9.727499],[-10.909168,9.603054],[-10.838612,9.479721],[-10.75222,9.39028],[-10.74806,9.38778],[-10.699722,9.346109],[-10.65972,9.309999],[-10.656668,9.305832],[-10.656113,9.299721],[-10.656668,9.2949980000001],[-10.66833,9.233332],[-10.66972,9.22805],[-10.67833,9.2161100000001],[-10.68528,9.208887],[-10.693335,9.203333],[-10.72361,9.159443],[-10.74111,9.10055],[-10.740835,9.093611],[-10.73944,9.088055],[-10.73722,9.083332],[-10.733612,9.08],[-10.72889,9.078054],[-10.718334,9.0763870000001],[-10.705,9.075832],[-10.67861,9.077776],[-10.616667,9.074444],[-10.60556,9.07194],[-10.571526,9.05953],[-10.577314,9.041201],[-10.59445,8.9911100000001],[-10.59722,8.980276],[-10.60083,8.9566650000001],[-10.60139,8.950554],[-10.59472,8.8758320000001],[-10.59167,8.858055],[-10.583057,8.82444],[-10.51333,8.724998],[-10.50278,8.710833],[-10.532501,8.620832],[-10.53889,8.619999],[-10.543335,8.618055],[-10.576389,8.599443],[-10.618891,8.5461100000001],[-10.620834,8.54139],[-10.69389,8.361944],[-10.69583,8.29861],[-10.56,8.30722],[-10.549168,8.310276],[-10.53528,8.3174990000001],[-10.523056,8.3261110000001],[-10.496389,8.345],[-10.48889,8.35139],[-10.437223,8.401943],[-10.434446,8.40611],[-10.42278,8.435833],[-10.392778,8.48805],[-10.39,8.492222],[-10.386112,8.4949990000001],[-10.326389,8.508888],[-10.32028,8.509443],[-10.266651,8.488377],[-10.264446,8.4586110000001],[-10.26417,8.45167],[-10.29556,8.203888],[-10.29695,8.198332],[-10.302223,8.1899990000001],[-10.32583,8.1655540000001],[-10.34167,8.15361],[-10.355278,8.14639],[-10.360834,8.144999],[-10.43,8.139166],[-10.44056,8.1425],[-10.4525,8.14416],[-10.470835,8.1444440000001],[-10.47722,8.14389],[-10.49778,8.13639],[-10.50694,8.131388],[-10.51917,8.123055],[-10.52917,8.112499],[-10.60222,8.0352760000001],[-10.60306,8.030554],[-10.60195,7.85889],[-10.60778,7.7725],[-10.65222,7.760555],[-10.684723,7.74444],[-10.68889,7.741666],[-10.70583,7.7241660000001],[-10.72472,7.701944],[-10.747501,7.669722],[-10.83,7.56639],[-10.84556,7.5475],[-10.850863,7.54188],[-10.86306,7.530555],[-10.86722,7.52778],[-10.88083,7.520555],[-10.908335,7.50611],[-10.91361,7.5047220000001],[-10.91722,7.506666],[-10.92,7.510833],[-10.925556,7.511944],[-10.93195,7.51111],[-10.935835,7.5083330000001],[-11.10278,7.38444],[-11.13194,7.35139],[-11.13778,7.343562],[-11.14,7.33278],[-11.14333,7.322222],[-11.18611,7.260833],[-11.18944,7.2575],[-11.194168,7.25528],[-11.205,7.252222],[-11.23889,7.243889],[-11.2675,7.2350000000001],[-11.30528,7.216944],[-11.307501,7.212777],[-11.338612,7.15083],[-11.34167,7.116666],[-11.35139,7.07861],[-11.380001,7.0188880000001],[-11.42139,6.94194],[-11.42972,6.93611],[-11.463057,6.92361],[-11.468613,6.92361],[-11.49233,6.9270910000001],[-11.532501,6.94111],[-11.56667,6.954444],[-11.573612,6.9611110000001],[-11.587223,6.975277],[-11.638613,7.016944],[-11.646389,7.023055],[-11.66639,7.037499],[-11.735834,7.08417],[-11.82,7.136666],[-11.84167,7.1477780000001],[-11.890556,7.166944],[-12.32083,7.325277],[-12.380835,7.346666],[-12.44167,7.367499],[-12.457779,7.371944],[-12.475,7.374722],[-12.50361,7.386944],[-12.50472,7.3902770000001],[-12.495834,7.447499],[-12.494167,7.45222],[-12.46972,7.489444],[-12.44028,7.521667],[-12.43278,7.528055],[-12.42806,7.53028],[-12.401112,7.531944],[-12.395557,7.531944],[-12.359724,7.53167],[-12.31806,7.528889],[-12.307501,7.52583],[-12.300556,7.52583],[-12.230278,7.551389],[-12.196667,7.569444],[-12.192501,7.572222],[-12.1875,7.5805550000001],[-12.18278,7.5897220000001],[-12.181667,7.595277],[-12.18528,7.598611],[-12.24861,7.608333],[-12.25333,7.608889],[-12.259445,7.588055],[-12.273056,7.580832],[-12.29306,7.572778],[-12.38556,7.544722],[-12.398613,7.5436110000001],[-12.43278,7.549999],[-12.457779,7.554722],[-12.46333,7.5561100000001],[-12.53333,7.633333],[-12.539446,7.641666],[-12.58778,7.68111],[-12.600834,7.6813890000001],[-12.69222,7.701388],[-12.76611,7.74],[-12.87028,7.81778],[-12.958612,7.9],[-12.96083,7.904722],[-12.957779,7.908333],[-12.898056,7.93278],[-12.88194,7.937499],[-12.88611,7.964167],[-12.90806,8.099998],[-12.94028,8.155832],[-12.948612,8.1611100000001],[-12.963335,8.166943],[-12.967779,8.169443],[-12.97472,8.176109],[-12.980835,8.1841660000001],[-12.982779,8.1888890000001],[-12.98695,8.21278],[-12.980835,8.23361],[-12.974335,8.2477680000001],[-13.00667,8.2333320000001],[-13.13278,8.195],[-13.155001,8.21417],[-13.215557,8.3405550000001],[-13.27806,8.423611],[-13.28806,8.496111],[-13.285278,8.498888],[-13.278612,8.4991660000001],[-13.197779,8.49361],[-13.179167,8.477777],[-13.171946,8.471109],[-13.155556,8.453054],[-13.15083,8.44361],[-13.14944,8.43805],[-13.147223,8.433332],[-13.144724,8.4286100000001],[-13.14139,8.4252780000001],[-13.06861,8.3713870000001],[-13.058056,8.36833],[-13.05139,8.36861],[-13.04556,8.369999],[-13.03916,8.373653],[-13.03694,8.37528],[-13.035,8.379999],[-13.065556,8.40583],[-13.093334,8.4208320000001],[-13.09806,8.422499],[-13.11945,8.435555],[-13.12389,8.438332],[-13.127224,8.441666],[-13.1275,8.44833],[-13.125557,8.453333],[-13.12028,8.461666],[-13.11694,8.465277],[-13.09556,8.485277],[-13.014446,8.556389],[-12.98944,8.56],[-12.9325,8.55222],[-12.9275,8.550278],[-12.897501,8.567778],[-12.929167,8.586666],[-12.946667,8.591665],[-13.035,8.586666],[-13.101946,8.579721],[-13.10583,8.57],[-13.14167,8.51805],[-13.14889,8.5116650000001],[-13.153057,8.509998],[-13.158335,8.511944],[-13.16528,8.51861],[-13.179167,8.5394440000001],[-13.18944,8.55694],[-13.240557,8.665277],[-13.2425,8.783888],[-13.2425,8.8025000000001],[-13.23889,8.819166],[-13.23695,8.824165],[-13.23083,8.831665],[-13.210001,8.852499],[-13.2025,8.85889],[-13.198612,8.860277],[-13.132223,8.861944],[-13.17639,8.912498],[-13.22917,8.948055],[-13.26556,8.953609],[-13.28639,8.995554],[-13.29561,9.032143],[-13.290834,9.042776],[-13.27195,9.05861],[-13.263056,9.06361],[-13.24778,9.0697210000001],[-13.187223,9.086943],[-13.180834,9.086388],[-13.176111,9.084444],[-13.147223,9.057777],[-13.134445,9.049999],[-13.11972,9.044443],[-13.10722,9.043333],[-13.100834,9.04417],[-13.085556,9.050278],[-13.031389,9.086388],[-13.0075,9.103611],[-13.00139,9.112778],[-12.97639,9.16944],[-12.96083,9.234444],[-12.950556,9.273888],[-12.948612,9.278889],[-12.945,9.2825],[-12.930557,9.288887],[-12.92389,9.2891650000001],[-12.862501,9.2883320000001],[-12.8575,9.286388],[-12.85444,9.2825],[-12.84972,9.280554],[-12.820557,9.285555],[-12.81556,9.287777],[-12.797779,9.298054],[-12.680557,9.417221],[-12.67861,9.42222],[-12.665001,9.47611],[-12.63111,9.572777],[-12.616667,9.6061100000001],[-12.584089,9.631872],[-12.585556,9.6388870000001],[-12.58639,9.658054],[-12.492948,9.8639060000001],[-12.456112,9.888332],[-12.235279,9.9388890000001],[-12.231945,9.938332],[-12.22889,9.93417],[-12.226946,9.929443],[-12.224445,9.9177760000001],[-12.22222,9.913055],[-12.218613,9.9097210000001],[-12.214169,9.907221],[-12.15972,9.879721],[-12.13722,9.874998],[-12.13167,9.874998],[-12.10913,9.880396],[-12.105835,9.880554],[-11.89778,9.927776],[-11.89306,9.931389],[-11.89389,9.9375],[-11.89972,9.9455550000001],[-11.90222,9.957222],[-11.90111,9.969721],[-11.9,9.9752770000001],[-11.894724,9.99611],[-11.57674,9.997477],[-11.56944,9.996666],[-11.48175,9.997477],[-11.458889,9.997499],[-11.21444,9.997499]]]]}}]}';
    }
}
