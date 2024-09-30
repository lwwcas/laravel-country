<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;

class DO_DominicanRepublic extends CountrySeeder
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
        // Set the country's common name
        $this->name = 'Dominican Republic';

        // Set the country's official name
        $this->official_name = 'Dominican Republic';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'DO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'DOM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '214';

        // Set the international dialing code
        $this->international_phone = '1-809, 1-829, 1-849';

        // Define the languages spoken in the country
        $this->languages = ['es']; // Spanish is the official language

        // Define the top-level domain(s)
        $this->tld = ['.do'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '40 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '74%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Instituto Dominicano de las Telecomunicaciones (INDOTEL)';

        // List popular web technologies in the Dominican Republic
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'DO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3508796';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Dominican peso',
            // Currency code
            'code' => 'DOP',
            // Currency symbol
            'symbol' => 'RD$',
            // Main unit
            'main_unit' => 'peso',
            // Subunit
            'sub_unit' => 'centavo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['50', '100', '200', '500', '1,000', '2,000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '25'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10 centavos'],
        ];

        // Set the population
        $this->population = 10996710; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 48671; // km²

        // Set the capital city
        $this->capital = 'Santo Domingo';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Santo_Domingo',
                // Standard time offset
                'standard_time' => 'UTC-4', // Atlantic Standard Time (AST)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1844-02-27'; // Date of independence from Haiti

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Organization of American States (OAS)',
            'Caribbean Community (CARICOM) - Observer',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 94.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential republic';

        // Set the national sport
        $this->national_sport = 'Baseball'; // Baseball is the most popular sport in the Dominican Republic

        // Define bordering countries
        $this->borders = [
            ['name' => 'Haiti', 'iso_alpha_2' => 'HT'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇩🇴',
            // Unicode code points
            'uCode' => 'U+1F1E9 U+1F1F4',
            // HTML entities
            'html' => '&#x1F1E9;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1E9\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127465;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇩🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE9\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-do:',
            // Hexadecimal entity
            'hex' => '&#x1F1E9;&#x1F1F4;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#C60C30',
                // RGB color values
                'rgb' => '198,12,48',
                // CMYK color values
                'cmyk' => '0,94,76,22',
                // HSL color values
                'hsl' => '348,89%,41%',
                // HSV color values
                'hsv' => '348,94%,78%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002D62',
                // RGB color values
                'rgb' => '0,45,98',
                // CMYK color values
                'cmyk' => '100,54,0,62',
                // HSL color values
                'hsl' => '212,100%,19%',
                // HSV color values
                'hsv' => '212,100%,38%',
                // Pantone color code
                'pantone' => '281 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'White',
                // Web color name
                'web_name' => 'white',
                // Hexadecimal color code
                'hex' => '#FFFFFF',
                // RGB color values
                'rgb' => '255,255,255',
                // CMYK color values
                'cmyk' => '0,0,0,0',
                // HSL color values
                'hsl' => '0,0%,100%',
                // HSV color values
                'hsv' => '0,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '18.7357',
            // Longitude in decimal degrees
            'longitude' => '-70.1627',
            // Degrees with decimal
            'dd' => '18.7357° N, 70.1627° W',
            // Degrees, minutes, seconds
            'dms' => '18°44\'8.52" N, 70°9\'45.72" W',
            // Degrees and decimal minutes
            'dm' => '18°44.142\' N, 70°9.762\' W',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N18°44\'8.52", W70°9\'45.72"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '18°44\'8.52"N, 70°9\'45.72"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '18 44 8.52, -70 9 45.72',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '184408.52, -700945.72',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]ddd.dddd',
                    // Coordinates in this format
                    'coordinates' => '18.7357 -70.1627',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '18.73570°, -70.16270°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '18.7357000N70.1627000W',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '1844.142N07009.762W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '18°44\'8.52"N, 70°9\'45.72"W',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '184408.52N0700945.72W',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 18 44.142 W 70 9.762',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '18:44:08N,-70:09:45W',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '18:44:08.52N 70:09:45.72W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '18°44\'8"N 70°9\'45"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '18°44\'8" -70°9\'45"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '18d 44\' 8" N 70d 9\' 45" W',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] ddd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '18.7357N 70.1627W',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '18° 44.142, -70° 9.762',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '1844.142, -7009.762',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '1844.142N, 7009.762W',
                ],
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
      "properties": { "cca2": "do" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-71.532227, 17.540276],
              [-71.53862, 17.540276],
              [-71.541397, 17.544441],
              [-71.54279, 17.549442],
              [-71.54306, 17.55583],
              [-71.538345, 17.589722],
              [-71.53639, 17.594997],
              [-71.524734, 17.611942],
              [-71.522232, 17.615276],
              [-71.5164, 17.616108],
              [-71.496399, 17.606941],
              [-71.49139, 17.604443],
              [-71.466675, 17.58583],
              [-71.46306, 17.581944],
              [-71.48889, 17.559444],
              [-71.49306, 17.556389],
              [-71.511948, 17.547497],
              [-71.532227, 17.540276]
            ]
          ],
          [
            [
              [-68.574448, 18.12944],
              [-68.568893, 18.114998],
              [-68.568069, 18.109444],
              [-68.568619, 18.103886],
              [-68.57333, 18.101665],
              [-68.590012, 18.113609],
              [-68.62056, 18.12167],
              [-68.640289, 18.124996],
              [-68.652237, 18.123608],
              [-68.66223, 18.11972],
              [-68.688065, 18.111111],
              [-68.69446, 18.111111],
              [-68.701675, 18.111942],
              [-68.73195, 18.119999],
              [-68.75362, 18.12833],
              [-68.757507, 18.131386],
              [-68.77917, 18.165554],
              [-68.78389, 18.174164],
              [-68.785, 18.179722],
              [-68.78389, 18.195],
              [-68.782227, 18.197498],
              [-68.776947, 18.199165],
              [-68.61, 18.164719],
              [-68.597778, 18.16139],
              [-68.5889, 18.15583],
              [-68.585556, 18.151943],
              [-68.574448, 18.12944]
            ]
          ],
          [
            [
              [-70.783615, 19.846664],
              [-70.70946, 19.802219],
              [-70.63501, 19.76083],
              [-70.63, 19.75861],
              [-70.56111, 19.753052],
              [-70.55417, 19.753052],
              [-70.52251, 19.754997],
              [-70.51417, 19.759163],
              [-70.49278, 19.77333],
              [-70.485001, 19.779442],
              [-70.47417, 19.782497],
              [-70.468338, 19.783333],
              [-70.462234, 19.78416],
              [-70.455, 19.783607],
              [-70.45029, 19.781109],
              [-70.39944, 19.74472],
              [-70.3914, 19.738331],
              [-70.38473, 19.73111],
              [-70.35362, 19.692219],
              [-70.32085, 19.667221],
              [-70.30334, 19.654999],
              [-70.293625, 19.65],
              [-70.28807, 19.648331],
              [-70.27528, 19.645554],
              [-70.185837, 19.629166],
              [-70.14696, 19.622776],
              [-70.125, 19.620831],
              [-70.10057, 19.623333],
              [-70.09584, 19.625832],
              [-70.08778, 19.631943],
              [-70.08446, 19.63583],
              [-70.07291, 19.655828],
              [-70.06723, 19.662498],
              [-70.055557, 19.674442],
              [-70.051117, 19.676941],
              [-70.035568, 19.682499],
              [-70.02917, 19.682499],
              [-69.96695, 19.678886],
              [-69.952515, 19.677498],
              [-69.94612, 19.676109],
              [-69.9364, 19.671108],
              [-69.898621, 19.637218],
              [-69.8914, 19.630276],
              [-69.885559, 19.62222],
              [-69.88223, 19.61222],
              [-69.881393, 19.600277],
              [-69.89223, 19.525276],
              [-69.878067, 19.445],
              [-69.876114, 19.439999],
              [-69.864731, 19.4175],
              [-69.83917, 19.37444],
              [-69.824448, 19.354443],
              [-69.81778, 19.34666],
              [-69.758347, 19.29222],
              [-69.75362, 19.289444],
              [-69.74139, 19.28639],
              [-69.7289, 19.285831],
              [-69.718613, 19.28889],
              [-69.702515, 19.29361],
              [-69.67557, 19.300831],
              [-69.53723, 19.33333],
              [-69.52585, 19.335552],
              [-69.51918, 19.335552],
              [-69.44556, 19.33333],
              [-69.319168, 19.316387],
              [-69.30724, 19.325554],
              [-69.26222, 19.355],
              [-69.23889, 19.365276],
              [-69.23251, 19.365276],
              [-69.22168, 19.362221],
              [-69.21779, 19.358887],
              [-69.15918, 19.297222],
              [-69.15668, 19.292774],
              [-69.156113, 19.28722],
              [-69.157501, 19.281109],
              [-69.16, 19.276665],
              [-69.16556, 19.267498],
              [-69.216675, 19.18805],
              [-69.220001, 19.184166],
              [-69.23001, 19.180275],
              [-69.24306, 19.180275],
              [-69.37001, 19.196663],
              [-69.588348, 19.224163],
              [-69.60945, 19.22666],
              [-69.61473, 19.225277],
              [-69.61945, 19.222775],
              [-69.62611, 19.215275],
              [-69.62807, 19.209721],
              [-69.63722, 19.116108],
              [-69.6364, 19.110275],
              [-69.63167, 19.101665],
              [-69.623337, 19.089165],
              [-69.616959, 19.087776],
              [-69.6039, 19.088055],
              [-69.57806, 19.088886],
              [-69.531952, 19.094168],
              [-69.51556, 19.098053],
              [-69.468903, 19.10611],
              [-69.44278, 19.106941],
              [-69.429733, 19.10722],
              [-69.41528, 19.105831],
              [-69.40224, 19.103054],
              [-69.39111, 19.099163],
              [-69.383057, 19.093052],
              [-69.378891, 19.083611],
              [-69.37946, 19.071941],
              [-69.37779, 19.06694],
              [-69.37529, 19.062496],
              [-69.366394, 19.056664],
              [-69.35583, 19.052219],
              [-69.25389, 19.020832],
              [-69.19223, 19.01194],
              [-69.17878, 19.012131],
              [-68.98946, 19.018887],
              [-68.9639, 19.03083],
              [-68.926682, 19.03083],
              [-68.92111, 19.028889],
              [-68.907227, 19.020554],
              [-68.89362, 19.012218],
              [-68.77335, 18.968887],
              [-68.73889, 18.957775],
              [-68.729172, 18.952774],
              [-68.725006, 18.949718],
              [-68.69612, 18.928055],
              [-68.69223, 18.924721],
              [-68.6889, 18.921108],
              [-68.656403, 18.88305],
              [-68.590561, 18.82111],
              [-68.56723, 18.801388],
              [-68.53973, 18.77861],
              [-68.43553, 18.70516],
              [-68.357788, 18.65472],
              [-68.34639, 18.644444],
              [-68.340012, 18.63694],
              [-68.32556, 18.61666],
              [-68.32223, 18.606667],
              [-68.32223, 18.60055],
              [-68.323624, 18.594444],
              [-68.335556, 18.569164],
              [-68.44972, 18.355831],
              [-68.45306, 18.351944],
              [-68.462784, 18.348053],
              [-68.47362, 18.344997],
              [-68.479446, 18.344166],
              [-68.51889, 18.344166],
              [-68.5314, 18.346943],
              [-68.55084, 18.35722],
              [-68.56946, 18.36805],
              [-68.58362, 18.375832],
              [-68.589447, 18.377777],
              [-68.595, 18.37833],
              [-68.6064, 18.368332],
              [-68.60779, 18.362221],
              [-68.63139, 18.256943],
              [-68.636124, 18.219444],
              [-68.637787, 18.213333],
              [-68.640289, 18.208611],
              [-68.644455, 18.205555],
              [-68.64973, 18.204166],
              [-68.69473, 18.203331],
              [-68.701401, 18.203331],
              [-68.72862, 18.207222],
              [-68.755, 18.216942],
              [-68.756119, 18.2225],
              [-68.76167, 18.236942],
              [-68.77139, 18.26083],
              [-68.781677, 18.277775],
              [-68.820557, 18.341663],
              [-68.8325, 18.357498],
              [-68.83974, 18.364441],
              [-68.847229, 18.371387],
              [-68.86334, 18.384163],
              [-68.872787, 18.389164],
              [-68.895279, 18.396385],
              [-68.90889, 18.39833],
              [-68.91473, 18.397501],
              [-68.973068, 18.40472],
              [-69.05972, 18.39055],
              [-69.06723, 18.39139],
              [-69.08612, 18.395275],
              [-69.08788, 18.39564],
              [-69.15918, 18.408054],
              [-69.16417, 18.410553],
              [-69.19278, 18.425831],
              [-69.196945, 18.42916],
              [-69.384445, 18.426109],
              [-69.468613, 18.416111],
              [-69.516678, 18.402775],
              [-69.54723, 18.416943],
              [-69.69084, 18.455555],
              [-69.69723, 18.45694],
              [-69.746399, 18.460278],
              [-69.77604, 18.46048],
              [-69.881668, 18.469444],
              [-69.88779, 18.468609],
              [-69.90334, 18.463886],
              [-69.912506, 18.45916],
              [-69.9425, 18.439999],
              [-69.95946, 18.42916],
              [-69.967216, 18.423059],
              [-69.9989, 18.421108],
              [-70.005, 18.420277],
              [-70.010681, 18.416895],
              [-70.059723, 18.338333],
              [-70.0625, 18.333885],
              [-70.07251, 18.32222],
              [-70.15417, 18.233055],
              [-70.164734, 18.23],
              [-70.17202, 18.23237],
              [-70.18417, 18.227776],
              [-70.229446, 18.22361],
              [-70.319458, 18.23055],
              [-70.38, 18.236111],
              [-70.387512, 18.236664],
              [-70.400009, 18.235],
              [-70.41167, 18.22583],
              [-70.459732, 18.204441],
              [-70.47528, 18.199718],
              [-70.48668, 18.19722],
              [-70.504181, 18.19472],
              [-70.51083, 18.19472],
              [-70.54584, 18.20611],
              [-70.556396, 18.22583],
              [-70.547226, 18.23055],
              [-70.54668, 18.23583],
              [-70.552505, 18.250275],
              [-70.555557, 18.253887],
              [-70.58703, 18.274624],
              [-70.573624, 18.309444],
              [-70.57167, 18.31472],
              [-70.56862, 18.364998],
              [-70.586121, 18.40166],
              [-70.589447, 18.405552],
              [-70.593613, 18.408607],
              [-70.61111, 18.41972],
              [-70.62251, 18.423611],
              [-70.652237, 18.431942],
              [-70.66446, 18.434998],
              [-70.690002, 18.433887],
              [-70.69389, 18.430832],
              [-70.71223, 18.413609],
              [-70.711945, 18.408886],
              [-70.707779, 18.399441],
              [-70.707779, 18.39333],
              [-70.70834, 18.386387],
              [-70.712784, 18.376389],
              [-70.722778, 18.364998],
              [-70.730011, 18.35805],
              [-70.738617, 18.3525],
              [-70.747787, 18.347775],
              [-70.753067, 18.346107],
              [-70.866959, 18.312222],
              [-70.93584, 18.253887],
              [-70.98584, 18.292774],
              [-70.99084, 18.295277],
              [-71.02612, 18.305275],
              [-71.038895, 18.30778],
              [-71.05334, 18.309166],
              [-71.06584, 18.30805],
              [-71.071121, 18.306389],
              [-71.07973, 18.301109],
              [-71.082779, 18.297222],
              [-71.09973, 18.263332],
              [-71.10306, 18.245831],
              [-71.09973, 18.23583],
              [-71.0789, 18.189163],
              [-71.07445, 18.179722],
              [-71.066391, 18.16722],
              [-71.056671, 18.156109],
              [-71.05473, 18.151108],
              [-71.055557, 18.144444],
              [-71.09001, 18.077774],
              [-71.18445, 17.934719],
              [-71.193619, 17.922497],
              [-71.20723, 17.907776],
              [-71.2225, 17.894444],
              [-71.2489, 17.879719],
              [-71.266953, 17.846664],
              [-71.39667, 17.618332],
              [-71.40834, 17.609165],
              [-71.416946, 17.603611],
              [-71.4225, 17.601944],
              [-71.426392, 17.603611],
              [-71.429733, 17.607498],
              [-71.625565, 17.836388],
              [-71.65889, 17.953053],
              [-71.66307, 17.963608],
              [-71.67223, 17.97528],
              [-71.678619, 17.982777],
              [-71.69084, 17.992222],
              [-71.73251, 18.022499],
              [-71.75195, 18.032497],
              [-71.767868, 18.038502],
              [-71.74945, 18.08861],
              [-71.7489, 18.095554],
              [-71.753891, 18.145554],
              [-71.765839, 18.18055],
              [-71.770279, 18.19611],
              [-71.76918, 18.202221],
              [-71.76723, 18.2075],
              [-71.72139, 18.284443],
              [-71.71551, 18.292532],
              [-71.69473, 18.32222],
              [-71.71667, 18.330276],
              [-71.743057, 18.340553],
              [-71.7789, 18.356667],
              [-71.810562, 18.375832],
              [-71.89917, 18.431389],
              [-71.9075, 18.437775],
              [-71.91, 18.441944],
              [-71.910278, 18.44833],
              [-71.90834, 18.453609],
              [-71.905563, 18.458332],
              [-71.885284, 18.473053],
              [-71.88501, 18.47722],
              [-71.89056, 18.485275],
              [-71.897232, 18.492775],
              [-71.94917, 18.547222],
              [-71.99695, 18.5925],
              [-72.00307, 18.60083],
              [-71.979736, 18.619442],
              [-71.97057, 18.624165],
              [-71.92807, 18.629166],
              [-71.922226, 18.62722],
              [-71.9189, 18.623608],
              [-71.913895, 18.614719],
              [-71.910568, 18.611111],
              [-71.905014, 18.608608],
              [-71.89835, 18.608608],
              [-71.85335, 18.61666],
              [-71.83168, 18.622498],
              [-71.82362, 18.628887],
              [-71.789734, 18.674442],
              [-71.775284, 18.69611],
              [-71.76611, 18.70083],
              [-71.756119, 18.704166],
              [-71.73668, 18.705276],
              [-71.73222, 18.707497],
              [-71.72612, 18.71611],
              [-71.72417, 18.721386],
              [-71.71584, 18.749722],
              [-71.70917, 18.780277],
              [-71.70862, 18.78722],
              [-71.70862, 18.793331],
              [-71.71529, 18.874722],
              [-71.71695, 18.879719],
              [-71.71945, 18.88389],
              [-71.77585, 18.954166],
              [-71.77917, 18.957775],
              [-71.75, 19.019722],
              [-71.65445, 19.119442],
              [-71.640839, 19.134163],
              [-71.638901, 19.139721],
              [-71.63501, 19.15805],
              [-71.63417, 19.164719],
              [-71.62973, 19.20027],
              [-71.628891, 19.207222],
              [-71.629181, 19.219721],
              [-71.66028, 19.22583],
              [-71.67223, 19.228886],
              [-71.68779, 19.235554],
              [-71.696121, 19.241665],
              [-71.715561, 19.25777],
              [-71.74474, 19.285831],
              [-71.72362, 19.359997],
              [-71.69862, 19.400276],
              [-71.69667, 19.405552],
              [-71.691681, 19.485832],
              [-71.691956, 19.498333],
              [-71.70445, 19.539444],
              [-71.707779, 19.549442],
              [-71.71779, 19.566666],
              [-71.72223, 19.576111],
              [-71.726395, 19.585552],
              [-71.735, 19.610275],
              [-71.737793, 19.62722],
              [-71.73529, 19.65472],
              [-71.733063, 19.67916],
              [-71.735, 19.68417],
              [-71.73807, 19.688053],
              [-71.74806, 19.699165],
              [-71.754181, 19.70583],
              [-71.724731, 19.69861],
              [-71.719727, 19.6975],
              [-71.71695, 19.702221],
              [-71.71722, 19.706944],
              [-71.73083, 19.734444],
              [-71.74474, 19.760277],
              [-71.76222, 19.769444],
              [-71.77473, 19.76833],
              [-71.777237, 19.772778],
              [-71.77585, 19.778889],
              [-71.77335, 19.783333],
              [-71.77, 19.78722],
              [-71.66779, 19.89222],
              [-71.66389, 19.895275],
              [-71.59529, 19.906387],
              [-71.58334, 19.908054],
              [-71.52945, 19.90833],
              [-71.49167, 19.905277],
              [-71.48584, 19.90472],
              [-71.48029, 19.903053],
              [-71.44751, 19.890553],
              [-71.43112, 19.88416],
              [-71.401947, 19.869442],
              [-71.366669, 19.852497],
              [-71.355835, 19.848331],
              [-71.26083, 19.823055],
              [-71.2489, 19.824718],
              [-71.23204, 19.82956],
              [-71.15028, 19.849442],
              [-71.09973, 19.869999],
              [-71.095001, 19.872498],
              [-71.09222, 19.876942],
              [-71.087784, 19.886944],
              [-71.08723, 19.893887],
              [-71.08417, 19.899166],
              [-71.06361, 19.91389],
              [-71.04529, 19.923332],
              [-71.02917, 19.928333],
              [-71.0114, 19.930832],
              [-70.99806, 19.93111],
              [-70.99084, 19.930275],
              [-70.84195, 19.90361],
              [-70.83223, 19.898609],
              [-70.82806, 19.895554],
              [-70.80112, 19.864719],
              [-70.783615, 19.846664]
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
