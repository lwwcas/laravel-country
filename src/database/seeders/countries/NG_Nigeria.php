<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NG_Nigeria extends CountrySeeder
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
        $this->name = 'Nigeria';
        $this->official_name = 'Federal Republic of Nigeria';
        $this->iso_alpha_2 = 'NG';
        $this->iso_alpha_3 = 'NGA';
        $this->iso_numeric = '566';
        $this->international_phone = '234';

        $this->languages = ['en'];
        $this->tld = ['.ng'];
        $this->wmo = 'NI';
        $this->geoname_id = '2328926';

        $this->emoji = [
            'img' => '🇳🇬',
            'uCode' => 'U+1F1F3 U+1F1EC',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffffff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '10 00 N',
                'desc' => '9.559505462646484',
            ],
            'longitude' => [
                'classic' => '8 00 E',
                'desc' => '8.077880859375',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '13.866667',
                'min' => '4.266667',
            ],
            'longitude' => [
                'max' => '14.65',
                'min' => '2.716667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ng"},"geometry":{"type":"MultiPolygon","coordinates":[[[[7.4663890000001,4.445277],[7.43361,4.4311100000001],[7.359166,4.43278],[7.353889,4.433055],[7.343055,4.43639],[7.335833,4.443055],[7.348611,4.479166],[7.3527770000001,4.481667],[7.38444,4.485555],[7.41194,4.48805],[7.478611,4.469166],[7.4663890000001,4.445277]]],[[[7.20361,4.3805550000001],[7.180277,4.37778],[7.166666,4.3783330000001],[7.148333,4.381389],[7.142777,4.383055],[7.138055,4.385278],[7.1349990000001,4.388888],[7.133888,4.39444],[7.13611,4.399166],[7.22611,4.52],[7.248333,4.511389],[7.293611,4.48722],[7.316667,4.4725],[7.3116660000001,4.41222],[7.3080550000001,4.408889],[7.29889,4.40444],[7.214444,4.38278],[7.20361,4.3805550000001]]],[[[5.874722,13.74944],[5.961944,13.715277],[5.997499,13.70139],[6.1333330000001,13.660831],[6.23805,13.683332],[6.2827770000001,13.683887],[6.285,13.683887],[6.3886110000001,13.625555],[6.423055,13.605276],[6.575277,13.450832],[6.676666,13.346666],[6.679166,13.343887],[6.774722,13.166943],[6.78361,13.149166],[6.806389,13.10805],[6.9333320000001,12.997221],[6.95111,12.996387],[7.02806,12.995766],[7.090555,12.995277],[7.1475,13.042776],[7.218888,13.12555],[7.3419440000001,13.106667],[7.379722,13.099722],[7.815,13.352777],[8.0436100000001,13.320833],[8.122221,13.30361],[8.1233330000001,13.303055],[8.124722,13.298611],[8.130554,13.290833],[8.141388,13.280554],[8.2261100000001,13.22361],[8.235832,13.21917],[8.251509,13.217596],[8.28722,13.198332],[8.34833,13.140554],[8.408609,13.088333],[8.44916,13.078054],[8.454166,13.08],[8.471109,13.083887],[8.497499,13.085833],[8.516388,13.08361],[8.5369430000001,13.076944],[8.5419430000001,13.074999],[8.554443,13.066666],[8.563055,13.060833],[8.60722,13.028055],[8.6150000000001,13.021944],[8.628332,13.007221],[8.636665,12.993889],[8.64833,12.971109],[8.66,12.94833],[8.66361,12.943333],[8.81861,12.896666],[8.984999,12.846666],[8.99861,12.845833],[9.010983,12.846907],[9.032499,12.846666],[9.064855,12.84466],[9.113054,12.84166],[9.236666,12.829721],[9.423887,12.81694],[9.62194,12.804443],[9.6349320000001,12.80243],[9.694166,12.871111],[9.873055,13.075277],[9.929998,13.133055],[9.93778,13.138887],[9.95861,13.153332],[9.988054,13.172777],[10.134722,13.2525],[10.148333,13.259722],[10.17305,13.269722],[10.18444,13.272221],[10.224998,13.280554],[10.3375,13.300833],[10.361666,13.304443],[10.411943,13.309721],[10.442499,13.314722],[10.463888,13.31861],[10.535276,13.34],[10.592222,13.3575],[10.64466,13.374609],[10.705,13.384443],[10.72416,13.386389],[10.749722,13.38861],[10.794998,13.389166],[10.834721,13.386944],[10.8475,13.38528],[10.87861,13.380554],[10.883333,13.378332],[10.906666,13.372499],[10.9575,13.365833],[10.977499,13.364166],[11.011389,13.36194],[11.038332,13.360277],[11.066666,13.35972],[11.100832,13.360277],[11.126944,13.361666],[11.17111,13.366388],[11.194443,13.370832],[11.213055,13.373055],[11.238609,13.375277],[11.25861,13.376389],[11.27833,13.377222],[11.33861,13.379444],[11.3925,13.381109],[11.426666,13.378887],[11.46333,13.373333],[11.491665,13.365833],[11.53111,13.355276],[11.819721,13.273054],[11.82944,13.26861],[11.890554,13.237499],[12.007776,13.17139],[12.175278,13.12222],[12.36861,13.075277],[12.429576,13.073028],[12.45917,13.06611],[12.49194,13.09778],[12.542776,13.150276],[12.545277,13.154999],[12.552221,13.176388],[12.55361,13.181665],[12.549444,13.184721],[12.537498,13.186943],[12.533333,13.189999],[12.534166,13.194721],[12.536388,13.199444],[12.573055,13.24472],[12.589167,13.263611],[12.608055,13.272778],[12.64667,13.286943],[12.74833,13.346943],[12.75111,13.35111],[12.768888,13.375555],[12.771944,13.379444],[12.87611,13.473331],[12.899721,13.484444],[13.016109,13.533609],[13.066387,13.548611],[13.07278,13.549166],[13.078333,13.547777],[13.08111,13.54361],[13.074444,13.53611],[13.07278,13.530554],[13.076387,13.527222],[13.08111,13.524721],[13.093887,13.523054],[13.125832,13.518888],[13.19972,13.526388],[13.204721,13.528332],[13.255554,13.59166],[13.25861,13.595833],[13.258888,13.60111],[13.25694,13.60611],[13.25333,13.609722],[13.251389,13.614443],[13.252222,13.620832],[13.255278,13.624722],[13.347776,13.719999],[13.62512,13.718338],[13.634722,13.70389],[13.760015,13.527803],[13.90108,13.328215],[14.07472,13.081665],[14.076944,13.068333],[14.100832,12.957222],[14.173054,12.62361],[14.199165,12.501389],[14.19861,12.48083],[14.19611,12.469166],[14.184166,12.414999],[14.174444,12.39667],[14.235832,12.353888],[14.242222,12.354443],[14.31861,12.35611],[14.325554,12.355833],[14.3925,12.352777],[14.423767,12.349102],[14.437498,12.347221],[14.46919,12.340899],[14.490833,12.335833],[14.519722,12.315554],[14.54944,12.25444],[14.554722,12.243332],[14.645277,12.188332],[14.658054,12.131943],[14.648333,12.120554],[14.64611,12.115833],[14.61916,12.035555],[14.618889,12.029999],[14.62028,12.024443],[14.633055,11.989443],[14.636944,11.979721],[14.639444,11.975277],[14.630833,11.891388],[14.612221,11.825277],[14.58861,11.754999],[14.58861,11.692221],[14.59889,11.688332],[14.634998,11.654722],[14.641109,11.646944],[14.646666,11.5825],[14.646387,11.575832],[14.6425,11.56555],[14.619999,11.510555],[14.617777,11.505554],[14.61055,11.499166],[14.466665,11.416388],[14.4575,11.411943],[14.442499,11.406111],[14.430555,11.404444],[14.41639,11.404999],[14.41083,11.403889],[14.397778,11.395832],[14.373888,11.37805],[14.329721,11.338888],[14.226665,11.26861],[14.2225,11.26583],[14.18861,11.244165],[14.16444,11.234165],[14.158054,11.23361],[14.1475,11.235832],[14.12111,11.244999],[14.10833,11.25],[14.09555,11.254999],[14.080276,11.260832],[14.026667,11.27916],[14.015554,11.282221],[14.009165,11.283333],[14.00361,11.283333],[13.991943,11.274166],[13.977499,11.260832],[13.886665,11.170555],[13.80722,11.055832],[13.774443,10.978888],[13.775,10.972776],[13.775,10.95278],[13.7725,10.941111],[13.768055,10.931665],[13.71834,10.881542],[13.717777,10.87722],[13.713055,10.860832],[13.706388,10.846666],[13.676943,10.807499],[13.649166,10.771944],[13.617777,10.73361],[13.598888,10.710833],[13.583332,10.69111],[13.571388,10.66805],[13.560833,10.64361],[13.555555,10.628054],[13.545277,10.595833],[13.519444,10.502222],[13.460278,10.244444],[13.457777,10.232777],[13.46361,10.217499],[13.468887,10.208887],[13.470833,10.204166],[13.471388,10.197777],[13.468887,10.18611],[13.462221,10.171944],[13.456944,10.163055],[13.451666,10.154444],[13.410276,10.11972],[13.398054,10.111111],[13.39569,10.110189],[13.32639,10.101665],[13.287498,10.092499],[13.271387,10.088055],[13.266388,10.086111],[13.25778,10.08083],[13.254999,10.07694],[13.25111,10.066666],[13.243889,10.03167],[13.228333,9.9097210000001],[13.228054,9.902777],[13.23,9.877777],[13.23111,9.86555],[13.233889,9.86111],[13.240555,9.8541660000001],[13.259722,9.751665],[13.24528,9.593887],[13.24361,9.588333],[13.239166,9.578888],[13.21805,9.551109],[13.195833,9.531111],[13.186666,9.526667],[13.161388,9.5177760000001],[13.150833,9.51472],[13.144444,9.514166],[13.096388,9.511944],[13.069166,9.51222],[13.052776,9.508333],[13.02389,9.496111],[12.988333,9.469721],[12.97333,9.456944],[12.96666,9.44972],[12.897778,9.34805],[12.83833,9.07472],[12.837776,9.062498],[12.846388,9.04361],[12.849722,9.0330540000001],[12.85139,9.021387],[12.85111,9.014444],[12.826666,8.859165],[12.824165,8.8475],[12.814999,8.814722],[12.80361,8.7841660000001],[12.796944,8.769722],[12.794167,8.7658330000001],[12.687498,8.660831],[12.674721,8.6527770000001],[12.613609,8.631666],[12.54639,8.613054],[12.503611,8.625832],[12.492498,8.62889],[12.479443,8.628611],[12.47389,8.627222],[12.412777,8.605555],[12.395832,8.594999],[12.397778,8.57],[12.399721,8.565277],[12.402498,8.56111],[12.411388,8.55611],[12.416111,8.546944],[12.421665,8.51861],[12.422499,8.506109],[12.421665,8.5],[12.415833,8.491943],[12.37444,8.4502770000001],[12.3675,8.44361],[12.348888,8.427776],[12.34111,8.4216650000001],[12.336111,8.41972],[12.33,8.419167],[12.320276,8.423611],[12.308054,8.43222],[12.296389,8.43444],[12.285276,8.4319440000001],[12.275276,8.428333],[12.26333,8.4194430000001],[12.253887,8.408054],[12.247221,8.393888],[12.242777,8.3774990000001],[12.237221,8.326666],[12.236944,8.313055],[12.239721,8.281944],[12.242222,8.271111],[12.252499,8.247499],[12.254999,8.236387],[12.25667,8.217777],[12.25555,8.197777],[12.245523,8.177174],[12.233889,8.164165],[12.224443,8.152498],[12.215277,8.141109],[12.21,8.1325],[12.205555,8.12278],[12.202499,8.1119440000001],[12.200277,8.100277],[12.199165,8.087221],[12.199444,8.07416],[12.201666,8.0425],[12.209444,8.0033320000001],[12.16889,7.9266660000001],[12.141109,7.87778],[12.11972,7.8511100000001],[12.10611,7.836944],[12.096109,7.826111],[12.076666,7.796389],[12.063889,7.774722],[12.05361,7.75722],[12.04361,7.739721],[12.033054,7.715],[12.029999,7.70417],[12.026943,7.686388],[12.025,7.66722],[12.025,7.6605550000001],[12.027498,7.649444],[12.029444,7.644444],[12.040833,7.628611],[12.043888,7.584444],[12.04361,7.5777770000001],[12.040833,7.57361],[11.920832,7.45222],[11.906666,7.4383330000001],[11.896111,7.4283330000001],[11.888332,7.422222],[11.871387,7.411666],[11.85722,7.398333],[11.84639,7.3813890000001],[11.799439,7.296663],[11.764444,7.2838890000001],[11.755554,7.2786100000001],[11.751944,7.275277],[11.74972,7.2705550000001],[11.74972,7.265],[11.751665,7.259999],[11.755554,7.257222],[11.76111,7.255833],[11.768055,7.25555],[11.780554,7.256666],[11.786665,7.255833],[11.791388,7.253611],[11.795,7.250278],[11.8825,7.132222],[11.864166,7.084722],[11.762777,7.003333],[11.75861,7.00083],[11.701387,6.97611],[11.646111,6.949166],[11.637777,6.943889],[11.5875,6.8922210000001],[11.579721,6.879444],[11.55639,6.833333],[11.554722,6.82111],[11.560833,6.8133330000001],[11.564999,6.8105550000001],[11.58333,6.794444],[11.585833,6.7902770000001],[11.589167,6.78],[11.58861,6.75944],[11.584721,6.73555],[11.580832,6.718611],[11.579166,6.7130550000001],[11.562498,6.6675000000001],[11.558054,6.658055],[11.555277,6.65389],[11.518332,6.6075],[11.514721,6.604166],[11.510555,6.601666],[11.504999,6.600277],[11.47333,6.6025],[11.454721,6.600833],[11.445,6.5969440000001],[11.437222,6.590833],[11.434999,6.5861110000001],[11.414999,6.51611],[11.41416,6.5097220000001],[11.41305,6.49833],[11.412777,6.4844440000001],[11.406387,6.477221],[11.388887,6.460278],[11.385277,6.456944],[11.376944,6.45167],[11.37194,6.449721],[11.34028,6.440833],[11.273054,6.433332],[11.266943,6.433055],[11.202221,6.43694],[11.197498,6.4349990000001],[11.191944,6.433888],[11.181665,6.433332],[11.140833,6.433611],[11.129166,6.435833],[11.124443,6.438055],[11.11694,6.4441660000001],[11.114443,6.44861],[11.110277,6.458055],[11.095276,6.498055],[11.092222,6.508611],[11.08833,6.525],[11.074444,6.5855550000001],[11.073332,6.59111],[11.07278,6.604166],[11.074999,6.643888],[11.076666,6.6561110000001],[11.082499,6.6777770000001],[11.082222,6.69778],[11.078333,6.7075],[11.075832,6.711666],[11.07111,6.71917],[11.04361,6.7533330000001],[11.026092,6.771448],[11.01916,6.77861],[11.013668,6.78051],[11,6.78083],[10.969444,6.7775],[10.956388,6.776944],[10.943333,6.7780550000001],[10.93861,6.78],[10.903055,6.80694],[10.88278,6.827777],[10.881109,6.83944],[10.881666,6.866944],[10.879166,6.87778],[10.864721,6.923333],[10.862778,6.928333],[10.854166,6.94694],[10.845554,6.959444],[10.837221,6.965],[10.832499,6.967222],[10.821388,6.970277],[10.73444,7.0013890000001],[10.629721,7.0491660000001],[10.619999,7.05361],[10.61666,7.0569440000001],[10.615,7.06861],[10.559999,7.021667],[10.51333,6.878055],[10.26944,6.87472],[10.237778,6.878055],[10.22361,6.884444],[10.215277,6.890277],[10.205,6.9005550000001],[10.195,6.917777],[10.191111,6.9275],[10.189722,6.9330550000001],[10.18805,6.951666],[10.187777,6.978333],[10.180555,6.998333],[10.175833,7.0072220000001],[10.16722,7.01917],[10.164999,7.021111],[10.095,6.9627770000001],[9.884998,6.7852770000001],[9.874722,6.77583],[9.795555,6.801666],[9.78639,6.7777780000001],[9.74416,6.639444],[9.708845,6.5212510000001],[9.655554,6.52583],[9.6377770000001,6.523333],[9.5944440000001,6.49778],[9.525276,6.4297220000001],[9.468529,6.4043],[9.455555,6.3691660000001],[9.437777,6.331666],[9.434999,6.327777],[9.430832,6.3250000000001],[9.42472,6.32444],[9.412222,6.3258330000001],[9.4069440000001,6.3274990000001],[9.380554,6.32917],[9.3738880000001,6.32917],[9.363333,6.3258330000001],[9.36055,6.321944],[9.333055,6.27972],[9.223331,6.150555],[9.071665,6.0136110000001],[8.963055,5.9069440000001],[8.956944,5.9077770000001],[8.943888,5.907222],[8.934166,5.90333],[8.929998,5.9005550000001],[8.868055,5.84583],[8.865276,5.841944],[8.86333,5.836944],[8.861111,5.8255550000001],[8.850832,5.7225],[8.880278,5.657222],[8.901388,5.636944],[8.908333,5.62944],[8.916388,5.616944],[8.9202770000001,5.607499],[8.921665,5.595277],[8.9158330000001,5.572778],[8.91083,5.563889],[8.908054,5.559722],[8.89361,5.546944],[8.88944,5.54417],[8.8788870000001,5.533333],[8.86778,5.5172210000001],[8.861387,5.503055],[8.86,5.497499],[8.837221,5.379722],[8.832777,5.34972],[8.831388,5.330555],[8.83333,5.318889],[8.83861,5.310555],[8.841944,5.307221],[8.84333,5.301666],[8.8425,5.29555],[8.82472,5.188611],[8.815554,5.159721],[8.8099990000001,5.151667],[8.7169440000001,5.0186110000001],[8.681665,4.972221],[8.62194,4.894722],[8.61972,4.89],[8.6191650000001,4.8775],[8.62194,4.8666660000001],[8.629444,4.854444],[8.632776,4.85083],[8.638332,4.8419440000001],[8.639721,4.837222],[8.638332,4.831666],[8.63611,4.8269440000001],[8.632776,4.823333],[8.62444,4.818055],[8.615555,4.813055],[8.6058330000001,4.809166],[8.594999,4.809722],[8.591738,4.810932],[8.593887,4.81194],[8.594166,4.817222],[8.591555,4.819834],[8.590555,4.820833],[8.586666,4.82361],[8.5816650000001,4.82555],[8.575554,4.825],[8.566666,4.820277],[8.556389,4.810277],[8.549999,4.802777],[8.5361100000001,4.775555],[8.5325,4.7599990000001],[8.534443,4.74833],[8.539165,4.73889],[8.5425,4.7286110000001],[8.5394440000001,4.710833],[8.533333,4.703333],[8.523054,4.7],[8.509998,4.69944],[8.503887,4.70028],[8.478611,4.703888],[8.40167,4.750278],[8.3427770000001,4.8061100000001],[8.274721,4.856667],[8.271692,4.842716],[8.25944,4.828055],[8.25944,4.82389],[8.2675,4.811666],[8.273611,4.804166],[8.29389,4.783333],[8.298054,4.780555],[8.304722,4.773889],[8.313055,4.761389],[8.314999,4.756666],[8.360277,4.6363890000001],[8.359444,4.629999],[8.357498,4.625278],[8.296665,4.549722],[8.29305,4.54639],[8.28833,4.544167],[8.276667,4.54222],[8.2630540000001,4.5425],[8.118332,4.550555],[8.022499,4.55139],[7.7686110000001,4.518611],[7.723611,4.502222],[7.69528,4.4974990000001],[7.676944,4.496388],[7.670833,4.4974990000001],[7.56139,4.525555],[7.53889,4.53889],[7.535555,4.5411110000001],[7.530555,4.626666],[7.531111,4.666111],[7.5344440000001,4.67694],[7.5366660000001,4.681666],[7.550405,4.706555],[7.546111,4.705555],[7.52778,4.696944],[7.521944,4.6891660000001],[7.5175,4.6797220000001],[7.513888,4.626111],[7.51583,4.621111],[7.522222,4.6141660000001],[7.526111,4.6111110000001],[7.528889,4.6069440000001],[7.530555,4.60222],[7.52944,4.59611],[7.5105550000001,4.573889],[7.504167,4.566667],[7.4991660000001,4.564722],[7.44722,4.550278],[7.272499,4.557777],[7.23861,4.56361],[7.179722,4.62722],[7.076944,4.752222],[7.071666,4.753888],[7.056666,4.7261100000001],[7.0615000000001,4.71344],[7.0631660000001,4.7107770000001],[7.08417,4.67694],[7.093333,4.66555],[7.10111,4.6597210000001],[7.11055,4.655277],[7.126111,4.649722],[7.1399990000001,4.642777],[7.143888,4.639999],[7.151111,4.633333],[7.156944,4.625555],[7.16972,4.604444],[7.1761100000001,4.584444],[7.179999,4.509999],[7.178888,4.503888],[7.173888,4.48778],[7.167777,4.47305],[7.164166,4.469999],[7.155,4.464999],[7.07305,4.43472],[7.044444,4.43639],[7.0411110000001,4.43972],[7.021111,4.4924990000001],[7.0183320000001,4.503055],[7.00361,4.569166],[7.0030550000001,4.581388],[7.027499,4.62305],[7.041389,4.6380550000001],[7.040277,4.6436110000001],[7.0341660000001,4.657499],[7.01344,4.695499],[7.009611,4.699666],[7.000555,4.7125],[6.96555,4.7244440000001],[6.962222,4.7252770000001],[6.8997220000001,4.67694],[6.90361,4.661111],[6.909166,4.646667],[6.978889,4.478333],[6.987499,4.459444],[6.99861,4.437222],[7.0080550000001,4.419722],[7.015555,4.406944],[7.023055,4.39444],[7.025,4.389444],[7.024722,4.3841660000001],[7.022499,4.379444],[7.019444,4.3755550000001],[7.01111,4.3705550000001],[7.005555,4.369444],[6.99861,4.369721],[6.961389,4.372222],[6.875278,4.389444],[6.87055,4.39167],[6.865555,4.4],[6.821666,4.524166],[6.766388,4.751111],[6.765555,4.7633330000001],[6.76805,4.774722],[6.751389,4.7647220000001],[6.806389,4.4922220000001],[6.8166670000001,4.462222],[6.834999,4.4150000000001],[6.8508330000001,4.3775000000001],[6.8486110000001,4.348332],[6.794167,4.33667],[6.7383330000001,4.33667],[6.732222,4.3375],[6.720277,4.3463890000001],[6.716944,4.349999],[6.7125,4.35889],[6.709167,4.457222],[6.7113890000001,4.490555],[6.71333,4.50278],[6.72,4.524166],[6.73139,4.5475],[6.737222,4.555277],[6.7433330000001,4.5700000000001],[6.7411110000001,4.581111],[6.735277,4.6019440000001],[6.73194,4.605277],[6.72722,4.605],[6.6569440000001,4.5075],[6.662499,4.440277],[6.6641660000001,4.4286110000001],[6.665277,4.423333],[6.6677770000001,4.4191670000001],[6.686388,4.396944],[6.688333,4.392221],[6.689444,4.386666],[6.696388,4.3344440000001],[6.694166,4.33],[6.6825,4.328333],[6.630555,4.325555],[6.574444,4.32667],[6.49361,4.32222],[6.405,4.312222],[6.30944,4.29555],[6.291666,4.293611],[6.272499,4.29306],[6.258888,4.293611],[6.252777,4.29472],[6.2480550000001,4.296944],[6.2447210000001,4.30055],[6.2430550000001,4.305277],[6.243889,4.311388],[6.245555,4.316944],[6.253333,4.336944],[6.27055,4.368055],[6.27889,4.373055],[6.286666,4.378888],[6.293056,4.38611],[6.31778,4.41639],[6.33,4.431389],[6.325277,4.433611],[6.26028,4.4563880000001],[6.24528,4.44361],[6.23305,4.38611],[6.214999,4.305833],[6.172222,4.282777],[6.115833,4.2730550000001],[6.111111,4.272499],[6.104166,4.272778],[6.0577770000001,4.288055],[5.940555,4.336111],[5.93111,4.340555],[5.86861,4.381389],[5.736944,4.48944],[5.669444,4.558332],[5.604166,4.629999],[5.594444,4.640833],[5.5852780000001,4.651944],[5.579444,4.6597210000001],[5.566111,4.6799990000001],[5.523611,4.7575000000001],[5.497499,4.8058330000001],[5.4858330000001,4.834167],[5.484722,4.8369440000001],[5.451944,4.92305],[5.383888,5.1094440000001],[5.383888,5.120832],[5.385278,5.126389],[5.3875,5.13111],[5.3952770000001,5.13694],[5.401667,5.1372210000001],[5.4144440000001,5.13611],[5.433055,5.134444],[5.437778,5.132222],[5.452222,5.1194440000001],[5.4555550000001,5.115833],[5.47056,5.091109],[5.49361,5.1413880000001],[5.4944440000001,5.1463880000001],[5.491944,5.1505550000001],[5.458611,5.18611],[5.454444,5.188889],[5.451111,5.188333],[5.45,5.182221],[5.44861,5.1625],[5.445833,5.16],[5.440833,5.158055],[5.4147210000001,5.1563880000001],[5.372777,5.155],[5.3688890000001,5.157777],[5.36639,5.161944],[5.365277,5.1675],[5.345277,5.33],[5.4525,5.363055],[5.53972,5.4147210000001],[5.620555,5.509444],[5.6388880000001,5.532777],[5.639722,5.536111],[5.635555,5.53889],[5.629999,5.539166],[5.543611,5.508611],[5.509999,5.488333],[5.506389,5.4850000000001],[5.504444,5.472777],[5.505833,5.461111],[5.50611,5.448055],[5.505833,5.4413880000001],[5.504167,5.43611],[5.498055,5.421111],[5.492222,5.413333],[5.48222,5.4027780000001],[5.4275,5.3936110000001],[5.37944,5.389999],[5.372499,5.39028],[5.2666660000001,5.430833],[5.2572220000001,5.4355550000001],[5.194166,5.502222],[5.192222,5.507222],[5.187222,5.5338890000001],[5.188333,5.545555],[5.1908330000001,5.550278],[5.208055,5.574166],[5.211666,5.5774990000001],[5.216666,5.57917],[5.2227770000001,5.579721],[5.277778,5.581388],[5.2977770000001,5.58],[5.3799990000001,5.5650000000001],[5.497222,5.576388],[5.50278,5.5774990000001],[5.5075,5.57917],[5.51055,5.58333],[5.51055,5.59611],[5.5075,5.606667],[5.503611,5.616388],[5.501111,5.620555],[5.49778,5.624166],[5.449721,5.652222],[5.445,5.654444],[5.439444,5.65333],[5.41555,5.6433320000001],[5.411388,5.6408330000001],[5.18611,5.5750000000001],[5.1808330000001,5.573889],[5.175278,5.575555],[5.1422210000001,5.604166],[5.088055,5.692499],[5.085278,5.702777],[5.083333,5.7275],[5.083888,5.74111],[4.9999970000001,5.8574970000001],[4.94861,5.924444],[4.8724990000001,6.014166],[4.75,6.13278],[4.742777,6.1391660000001],[4.7136110000001,6.16472],[4.6983330000001,6.177221],[4.541666,6.293333],[4.525833,6.304999],[4.501944,6.316111],[4.46664,6.32966],[4.454721,6.33833],[4.437222,6.348611],[4.418333,6.357499],[4.4075,6.360833],[4.396667,6.36389],[4.379444,6.368055],[4.36639,6.3691660000001],[4.3225,6.3721550000001],[4.2999990000001,6.377777],[4.085833,6.4097210000001],[3.99111,6.421389],[3.95667,6.422777],[3.845277,6.42611],[3.7475,6.426666],[3.694167,6.41972],[3.566667,6.4138880000001],[3.535,6.412499],[3.44472,6.409444],[3.4158330000001,6.40889],[3.41028,6.41055],[3.3905550000001,6.438611],[3.388611,6.4433330000001],[3.390833,6.448055],[3.395278,6.450555],[3.4316660000001,6.4541660000001],[3.437222,6.452777],[3.506667,6.449721],[3.53555,6.44861],[3.54055,6.450555],[3.73056,6.532777],[3.855,6.5975],[3.85722,6.600833],[3.853889,6.604444],[3.849722,6.60722],[3.83833,6.609722],[3.8072220000001,6.612778],[3.767222,6.61305],[3.717951,6.60616],[3.708889,6.6013880000001],[3.650555,6.564444],[3.52917,6.521944],[3.523611,6.52083],[3.485555,6.53167],[3.48,6.533333],[3.475833,6.536111],[3.47139,6.545278],[3.47222,6.55139],[3.4763880000001,6.568333],[3.48305,6.5825],[3.483333,6.588055],[3.48139,6.5927770000001],[3.47805,6.59639],[3.4725,6.596666],[3.4675,6.5947220000001],[3.443055,6.57833],[3.404166,6.550278],[3.401111,6.546389],[3.370277,6.45028],[3.37139,6.444722],[3.383611,6.416111],[3.3877770000001,6.41333],[3.319167,6.385555],[3.113889,6.37722],[3.10083,6.376944],[3.06694,6.3775],[3.0402770000001,6.379167],[3.02778,6.380833],[3.012222,6.38611],[2.97389,6.389999],[2.934444,6.3894440000001],[2.8813890000001,6.384999],[2.857222,6.38222],[2.719606,6.365505],[2.719606,6.4522410000001],[2.72722,6.474722],[2.754167,6.559444],[2.756667,6.570833],[2.761666,6.671389],[2.7627770000001,6.764999],[2.756389,6.9105550000001],[2.753333,6.9208330000001],[2.750556,6.924999],[2.747222,6.92861],[2.731667,6.940555],[2.728333,6.944166],[2.726388,6.948889],[2.72528,6.954444],[2.749722,7.094166],[2.778611,7.13444],[2.77,7.254444],[2.7366660000001,7.59639],[2.73222,7.6519440000001],[2.73295,7.658206],[2.7386110000001,7.716389],[2.742777,7.782777],[2.743055,7.796389],[2.742222,7.808611],[2.740278,7.813611],[2.7375,7.81778],[2.702926,7.865039],[2.69528,7.882222],[2.6925,7.906388],[2.7088890000001,8.008055],[2.7275,8.108332],[2.741389,8.156111],[2.751111,8.1955550000001],[2.753611,8.206944],[2.751111,8.218054],[2.742777,8.236944],[2.7400000000001,8.2411100000001],[2.733333,8.248333],[2.72805,8.256666],[2.71,8.326387],[2.709167,8.338888],[2.710278,8.3519440000001],[2.72083,8.424444],[2.72305,8.429165],[2.728889,8.43722],[2.7475,8.453054],[2.7525,8.4619430000001],[2.758333,8.49111],[2.7627770000001,8.51916],[2.75972,8.529722],[2.752966,8.535576],[2.756389,8.555277],[2.756389,8.581944],[2.74694,8.719444],[2.7429580000001,8.77076],[2.7452770000001,8.795277],[2.783055,9.016666],[2.789444,9.04389],[2.794722,9.056944],[2.81361,9.06528],[2.905278,9.078888],[2.9675,9.08166],[2.9875,9.06111],[3.005,9.06528],[3.095,9.090555],[3.131389,9.194443],[3.16639,9.3027760000001],[3.1669440000001,9.3658330000001],[3.165833,9.3713870000001],[3.16,9.38611],[3.152222,9.405554],[3.145,9.41889],[3.14194,9.429165],[3.141666,9.441111],[3.17139,9.496387],[3.317222,9.63611],[3.3633280000001,9.68194],[3.352777,9.70305],[3.337222,9.734999],[3.331111,9.7558330000001],[3.33083,9.768888],[3.33167,9.77528],[3.336389,9.79139],[3.343889,9.804998],[3.3466660000001,9.809166],[3.353889,9.815832],[3.47139,9.855833],[3.476944,9.856943],[3.483889,9.8566670000001],[3.501944,9.8533330000001],[3.512222,9.849443],[3.52111,9.844444],[3.52528,9.84417],[3.55889,9.880278],[3.606389,9.943888],[3.609444,9.948055],[3.6161110000001,9.962221],[3.675833,10.103333],[3.68,10.12028],[3.684444,10.15111],[3.683888,10.17055],[3.6805550000001,10.180832],[3.676666,10.183887],[3.666944,10.188332],[3.6572220000001,10.19278],[3.644166,10.19944],[3.581944,10.275276],[3.63722,10.411665],[3.64,10.41555],[3.683888,10.448055],[3.6888890000001,10.44972],[3.69528,10.450277],[3.701389,10.449444],[3.706388,10.447222],[3.728333,10.433887],[3.740555,10.425278],[3.75917,10.414999],[3.768611,10.410555],[3.789444,10.402777],[3.79361,10.405554],[3.812778,10.449444],[3.855,10.584999],[3.848333,10.689999],[3.846666,10.703054],[3.835556,10.709721],[3.82611,10.71417],[3.7855550000001,10.756943],[3.75389,10.794443],[3.748611,10.80305],[3.745833,10.820276],[3.746666,10.826666],[3.748888,10.831388],[3.755,10.839443],[3.759444,10.8475],[3.775278,10.898611],[3.747222,11.011665],[3.738889,11.016109],[3.7327780000001,11.023888],[3.731667,11.02944],[3.73056,11.04055],[3.728889,11.070833],[3.7286110000001,11.08417],[3.735774,11.120634],[3.71417,11.127222],[3.6947220000001,11.134722],[3.60886,11.25],[3.475,11.429722],[3.52528,11.56361],[3.568333,11.646944],[3.574166,11.654999],[3.604459,11.693274],[3.6883330000001,11.74972],[3.6725,11.80194],[3.668611,11.812498],[3.631667,11.825277],[3.6169440000001,11.91972],[3.671666,11.975554],[3.67132,11.999996],[3.670833,12.009995],[3.6369470000001,12.107771],[3.656393,12.215271],[3.666115,12.249439],[3.6611100000001,12.44528],[3.657777,12.52889],[3.912222,12.717777],[3.952777,12.748888],[4.077222,12.951111],[4.1050000000001,12.996387],[4.13972,13.177221],[4.140918,13.273586],[4.1425,13.40111],[4.143055,13.469999],[4.1425,13.476944],[4.247777,13.481388],[4.469999,13.68694],[4.48778,13.690277],[4.625978,13.721964],[4.885555,13.781387],[4.923611,13.736387],[5,13.733675],[5.215,13.746666],[5.2891660000001,13.75278],[5.341944,13.794722],[5.3633330000001,13.845554],[5.365,13.8475],[5.5263880000001,13.88694],[5.548367,13.891499],[5.657222,13.836666],[5.7002770000001,13.817778],[5.874722,13.74944]]]]}}]}';
    }
}
