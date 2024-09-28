<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BW_Botswana extends Seeder
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

    // Set the country's common name
    $this->name = 'Botswana';

    // Set the country's official name
    $this->official_name = 'Republic of Botswana';

    // Set the ISO 3166-1 alpha-2 code
    $this->iso_alpha_2 = 'BW';

    // Set the ISO 3166-1 alpha-3 code
    $this->iso_alpha_3 = 'BWA';

    // Set the ISO 3166-1 numeric code (usually three digits)
    $this->iso_numeric = '072';

    // Set the international dialing code
    $this->international_phone = '267';

    // Define the languages spoken in the country
    $this->languages = ['en', 'tn']; // English and Tswana are official languages

    // Define the top-level domain(s)
    $this->tld = ['.bw'];

    // Define alternative top-level domains
    $this->alternative_tlds = []; // No significant alternative TLDs

    // Define average internet speeds
    $this->internet_speed = [
        // Average fixed broadband speed
        'average_speed_fixed' => '20 Mbps',
        // Average mobile connection speed
        'average_speed_mobile' => '15 Mbps',
    ];

    // Define internet penetration rate
    $this->internet_penetration = '48%'; // Percentage of the population with internet access

    // Set the national cybersecurity agency
    $this->cybersecurity_agency = 'Botswana Computer Incident Response Team (BTCIRT)';

    // List popular web technologies in Botswana
    $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

    // Set the WMO (World Meteorological Organization) country code
    $this->wmo = 'BC';

    // Set the GeoName ID for geographical data reference
    $this->geoname_id = '933860';

    // Define the currency information
    $this->currency = [
        // Currency name
        'name' => 'Botswana pula',
        // Currency code
        'code' => 'BWP',
        // Currency symbol
        'symbol' => 'P',
        // Main unit
        'main_unit' => 'pula',
        // Subunit
        'sub_unit' => 'thebe',
        // Subunit to main unit conversion
        'sub_unit_to_unit' => 100,
        // Banknotes in circulation
        'banknotes' => ['10', '20', '50', '100', '200'],
        // Main coins
        'coins_main' => ['1', '2', '5'],
        // Subunit coins
        'coins_sub' => ['5', '10', '25', '50'],
    ];

    // Set the population
    $this->population = 2351625; // As of recent estimates

    // Set the area in square kilometers
    $this->area = 581730; // km²

    // Set the capital city
    $this->capital = 'Gaborone';

    // Define the time zone(s) using IANA time zone identifiers
    $this->timezones = [
        // Time zone identifier
        'timezone_id' => 'Africa/Gaborone',
        // Standard time offset
        'standard_time' => 'UTC+2', // Central Africa Time (CAT)
    ];

    // Set the independence day
    $this->independence_day = '1966-09-30'; // Date of independence from the United Kingdom

    // List international organizations the country is part of
    $this->international_organizations = [
        'United Nations',
        'African Union',
        'Southern African Development Community (SADC)',
        'Commonwealth of Nations',
        'World Trade Organization (WTO)',
    ];

    // Set the GDP in billions of USD
    $this->gdp = 18.6; // GDP in billions of USD

    // List the predominant religions
    $this->religions = ['Christianity', 'Traditional African religions'];

    // Describe the form of government
    $this->government = 'Unitary parliamentary republic';

    // Set the national sport
    $this->national_sport = 'Football (Soccer)'; // Football is popular, along with athletics

    // Define bordering countries
    $this->borders = [
        ['name' => 'Namibia', 'iso_alpha_2' => 'NA'],
        ['name' => 'South Africa', 'iso_alpha_2' => 'ZA'],
        ['name' => 'Zimbabwe', 'iso_alpha_2' => 'ZW'],
        ['name' => 'Zambia', 'iso_alpha_2' => 'ZM'],
    ];

    // Define the country's flag emoji representation
    $this->emoji = [
        // Native emoji image
        'img' => '🇧🇼',
        // Unicode code points
        'uCode' => 'U+1F1E7 U+1F1FC',
        // HTML entities
        'html' => '&#x1F1E7;&#x1F1FC;',
        // CSS entities
        'css' => '\\1F1E7\\1F1FC',
        // Decimal Unicode entities
        'decimal' => '&#127463;&#127484;',
        // Direct UTF-8 string
        'utf8' => '🇧🇼',
        // UTF-16 surrogate pairs
        'utf16' => '\uD83C\uDDE7\uD83C\uDDFC',
        // Shortcode in Emojione, Slack
        'shortcode' => ':flag-bw:',
        // Hexadecimal entity
        'hex' => '&#x1F1E7;&#x1F1FC;',
    ];

    // Define the colors of the country's flag with accurate color values
    $this->flag_colors = [
        [
            // Color name
            'name' => 'Blue',
            // Web color name
            'web_name' => 'light blue',
            // Hexadecimal color code
            'hex' => '#75AADB',
            // RGB color values
            'rgb' => '117,170,219',
            // CMYK color values
            'cmyk' => '47,22,0,14',
            // HSL color values
            'hsl' => '207,60%,66%',
            // HSV color values
            'hsv' => '207,47%,86%',
            // Pantone color code
            'pantone' => '2905 C',
            // Contrast color for readability
            'contrast' => '#000000',
        ],
        [
            // Color name
            'name' => 'Black',
            // Web color name
            'web_name' => 'black',
            // Hexadecimal color code
            'hex' => '#000000',
            // RGB color values
            'rgb' => '0,0,0',
            // CMYK color values
            'cmyk' => '0,0,0,100',
            // HSL color values
            'hsl' => '0,0%,0%',
            // HSV color values
            'hsv' => '0,0%,0%',
            // Pantone color code
            'pantone' => 'Black',
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
        'latitude' => '-24.6583',
        // Longitude in decimal degrees
        'longitude' => '25.9089',
        // Degrees with decimal
        'dd' => '24.6583° S, 25.9089° E',
        // Degrees, minutes, seconds
        'dms' => '24°39\'29.88" S, 25°54\'32.04" E',
        // Degrees and decimal minutes
        'dm' => '24°39.498\' S, 25°54.534\' E',
        // Various GPS formats
        'gps' => [],
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
      "properties": { "cca2": "bw" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [26.95919, -23.752075],
            [26.963314, -23.759769],
            [26.91972, -23.927502],
            [26.880554, -24.08778],
            [26.85611, -24.246948],
            [26.851944, -24.256668],
            [26.845276, -24.264446],
            [26.837219, -24.270836],
            [26.823608, -24.279446],
            [26.787777, -24.29528],
            [26.759163, -24.304169],
            [26.740276, -24.307781],
            [26.726665, -24.309448],
            [26.721386, -24.311668],
            [26.716942, -24.314445],
            [26.554996, -24.436947],
            [26.519444, -24.473335],
            [26.512775, -24.481113],
            [26.504719, -24.493614],
            [26.49361, -24.511112],
            [26.484997, -24.530556],
            [26.48, -24.546391],
            [26.47583, -24.563057],
            [26.464722, -24.580559],
            [26.458054, -24.588337],
            [26.440277, -24.606392],
            [26.411041, -24.628273],
            [26.401142, -24.631889],
            [26.391874, -24.628191],
            [26.388054, -24.626667],
            [26.359997, -24.618893],
            [26.265274, -24.637501],
            [26.167828, -24.663967],
            [26.018887, -24.710835],
            [25.918331, -24.738335],
            [25.871387, -24.744446],
            [25.870831, -24.800556],
            [25.875275, -24.810001],
            [25.876942, -24.815556],
            [25.878052, -24.828613],
            [25.873608, -24.899723],
            [25.870831, -24.910835],
            [25.827774, -25.041946],
            [25.769444, -25.208336],
            [25.684719, -25.435558],
            [25.671387, -25.47028],
            [25.622219, -25.550835],
            [25.595276, -25.606392],
            [25.592287, -25.611027],
            [25.586884, -25.619404],
            [25.585449, -25.621929],
            [25.581703, -25.625027],
            [25.50972, -25.67778],
            [25.421387, -25.729446],
            [25.406944, -25.737225],
            [25.370277, -25.752781],
            [25.351387, -25.75639],
            [25.174999, -25.761948],
            [25.152222, -25.762222],
            [25.135277, -25.756947],
            [25.121387, -25.748611],
            [25.095833, -25.737225],
            [25.077499, -25.733059],
            [25.036942, -25.728615],
            [25.029163, -25.728615],
            [25.016941, -25.731392],
            [25.007774, -25.736946],
            [24.953609, -25.771114],
            [24.906387, -25.804726],
            [24.898052, -25.810837],
            [24.891941, -25.812225],
            [24.801666, -25.832226],
            [24.691944, -25.828613],
            [24.6772, -25.827824],
            [24.658054, -25.824722],
            [24.639721, -25.820557],
            [24.628887, -25.816391],
            [24.614998, -25.808334],
            [24.533054, -25.771946],
            [24.501343, -25.761391],
            [24.472221, -25.74667],
            [24.44611, -25.735558],
            [24.439442, -25.736389],
            [24.434719, -25.73917],
            [24.430275, -25.747501],
            [24.421665, -25.753613],
            [24.416386, -25.755836],
            [24.399441, -25.761391],
            [24.39333, -25.762779],
            [24.38583, -25.762779],
            [24.354443, -25.756668],
            [24.348888, -25.754448],
            [24.281387, -25.72028],
            [24.246109, -25.680279],
            [24.239998, -25.671947],
            [24.230831, -25.6525],
            [24.227776, -25.648613],
            [24.223888, -25.645],
            [24.193333, -25.624447],
            [24.18861, -25.62167],
            [24.181664, -25.622223],
            [24.115276, -25.634167],
            [24.049442, -25.650837],
            [24.043331, -25.652225],
            [24.013332, -25.656948],
            [24.000275, -25.65889],
            [23.905277, -25.628613],
            [23.898609, -25.621113],
            [23.893887, -25.611389],
            [23.88472, -25.598892],
            [23.871666, -25.583614],
            [23.742775, -25.468334],
            [23.729721, -25.459167],
            [23.720554, -25.45528],
            [23.706944, -25.453613],
            [23.670277, -25.435837],
            [23.650276, -25.423336],
            [23.596107, -25.389446],
            [23.53083, -25.337223],
            [23.458332, -25.278336],
            [23.453053, -25.27639],
            [23.447777, -25.275002],
            [23.275276, -25.265835],
            [23.194443, -25.264168],
            [23.014832, -25.299725],
            [22.9725, -25.337223],
            [22.91, -25.396946],
            [22.829998, -25.530834],
            [22.813053, -25.563892],
            [22.811386, -25.569447],
            [22.811386, -25.576389],
            [22.829998, -25.614445],
            [22.818886, -25.668056],
            [22.817219, -25.673615],
            [22.811108, -25.681946],
            [22.804165, -25.689445],
            [22.784721, -25.706669],
            [22.775555, -25.711945],
            [22.763885, -25.722225],
            [22.758331, -25.731113],
            [22.754444, -25.74139],
            [22.743332, -25.798058],
            [22.744999, -25.848335],
            [22.724442, -25.968334],
            [22.721386, -25.979446],
            [22.712776, -25.999168],
            [22.709721, -26.003334],
            [22.70583, -26.006668],
            [22.701111, -26.009445],
            [22.689442, -26.012779],
            [22.667221, -26.013336],
            [22.661942, -26.015278],
            [22.658054, -26.01889],
            [22.626389, -26.093056],
            [22.624809, -26.111565],
            [22.479164, -26.202778],
            [22.366386, -26.286392],
            [22.249443, -26.341114],
            [22.198608, -26.392223],
            [22.195553, -26.396114],
            [22.175552, -26.431114],
            [22.159443, -26.478615],
            [22.157776, -26.491112],
            [22.158607, -26.497223],
            [22.157497, -26.503334],
            [22.135555, -26.537781],
            [22.132221, -26.541946],
            [22.063889, -26.618893],
            [22.05611, -26.625557],
            [22.043053, -26.634445],
            [22.015831, -26.644447],
            [21.970833, -26.659168],
            [21.953609, -26.664448],
            [21.891666, -26.668892],
            [21.873333, -26.664722],
            [21.868053, -26.662502],
            [21.861942, -26.661114],
            [21.847221, -26.660004],
            [21.808331, -26.666389],
            [21.774998, -26.67778],
            [21.770275, -26.680279],
            [21.766388, -26.683891],
            [21.759998, -26.691948],
            [21.761387, -26.704445],
            [21.772499, -26.728615],
            [21.775555, -26.739723],
            [21.778889, -26.764168],
            [21.77861, -26.770836],
            [21.773888, -26.787502],
            [21.771385, -26.792225],
            [21.752499, -26.816669],
            [21.748333, -26.820278],
            [21.693054, -26.853058],
            [21.673332, -26.863056],
            [21.667221, -26.864445],
            [21.659443, -26.86417],
            [21.613052, -26.860836],
            [21.523609, -26.853336],
            [21.50972, -26.851669],
            [21.481388, -26.842224],
            [21.463055, -26.830833],
            [21.457497, -26.828613],
            [21.439163, -26.824169],
            [21.43222, -26.823334],
            [21.410553, -26.821667],
            [21.381107, -26.821114],
            [21.374165, -26.821667],
            [21.341663, -26.828056],
            [21.336109, -26.830002],
            [21.276943, -26.845558],
            [21.177776, -26.862225],
            [21.144165, -26.866669],
            [21.128887, -26.86639],
            [21.101109, -26.863056],
            [21.021664, -26.849724],
            [21.00333, -26.84528],
            [20.993332, -26.840279],
            [20.98333, -26.835003],
            [20.97583, -26.828056],
            [20.969997, -26.81889],
            [20.962219, -26.811947],
            [20.956944, -26.809723],
            [20.924164, -26.798615],
            [20.897221, -26.794724],
            [20.889999, -26.79528],
            [20.883888, -26.796669],
            [20.855831, -26.805],
            [20.827774, -26.814724],
            [20.819164, -26.820557],
            [20.808052, -26.83139],
            [20.803886, -26.841667],
            [20.799999, -26.84528],
            [20.795277, -26.847778],
            [20.763885, -26.861115],
            [20.703888, -26.875557],
            [20.642498, -26.828056],
            [20.639721, -26.823891],
            [20.618889, -26.767502],
            [20.601944, -26.536392],
            [20.603333, -26.516392],
            [20.609722, -26.454445],
            [20.611385, -26.449173],
            [20.619324, -26.43771],
            [20.625053, -26.435505],
            [20.637218, -26.433056],
            [20.647499, -26.428612],
            [20.656944, -26.423058],
            [20.690277, -26.390003],
            [20.693333, -26.386112],
            [20.744442, -26.320835],
            [20.757221, -26.304447],
            [20.796387, -26.249447],
            [20.859722, -26.146667],
            [20.860832, -26.140278],
            [20.860832, -26.133614],
            [20.811386, -25.883335],
            [20.809166, -25.878334],
            [20.783886, -25.824722],
            [20.739441, -25.763058],
            [20.683887, -25.689167],
            [20.68111, -25.685001],
            [20.679722, -25.679447],
            [20.679165, -25.636669],
            [20.689442, -25.597504],
            [20.68972, -25.590836],
            [20.687775, -25.578892],
            [20.649998, -25.479446],
            [20.631943, -25.436947],
            [20.611664, -25.39917],
            [20.607777, -25.395557],
            [20.536388, -25.298058],
            [20.449718, -25.153614],
            [20.389999, -25.036945],
            [20.261944, -24.931667],
            [20.244999, -24.919445],
            [20.229164, -24.912781],
            [20.166111, -24.886391],
            [20.137218, -24.886948],
            [20.12722, -24.881947],
            [20.059166, -24.826389],
            [20.044441, -24.812225],
            [20.000942, -24.765408],
            [20.00222, -24.724167],
            [20.001942, -24.572224],
            [20.00111, -24.406391],
            [20.000553, -24.282223],
            [20, -23.950836],
            [20.000538, -23.86441],
            [20.000275, -23.757225],
            [20, -23.647503],
            [19.999443, -23.45417],
            [19.998901, -23.308697],
            [19.998886, -23.12278],
            [19.998608, -22.970837],
            [19.998278, -22.959921],
            [19.997776, -22.943336],
            [19.997498, -22.722504],
            [19.997595, -22.5],
            [19.997219, -22.266945],
            [19.996109, -22.087502],
            [19.996666, -22.005001],
            [20.000473, -22.001564],
            [20.308331, -22.001392],
            [20.649719, -22],
            [20.917774, -21.998337],
            [20.991943, -21.996948],
            [20.992775, -21.969448],
            [20.992775, -21.941948],
            [20.992775, -21.597225],
            [20.992496, -21.322224],
            [20.992496, -21.01889],
            [20.993031, -20.992451],
            [20.992809, -20.824272],
            [20.993332, -20.179169],
            [20.993076, -19.998222],
            [20.99353, -19.171947],
            [20.994164, -18.695278],
            [20.994164, -18.475559],
            [20.99361, -18.338612],
            [20.993286, -18.318417],
            [21.235554, -18.311947],
            [21.462498, -18.304447],
            [21.816944, -18.238335],
            [22.262218, -18.153893],
            [22.5, -18.111267],
            [22.637218, -18.08667],
            [23.077774, -18.004448],
            [23.287113, -17.996336],
            [23.297108, -17.995949],
            [23.315277, -18.013336],
            [23.317497, -18.017502],
            [23.325832, -18.045002],
            [23.329998, -18.076389],
            [23.363052, -18.127224],
            [23.398052, -18.176113],
            [23.43111, -18.19389],
            [23.451385, -18.202225],
            [23.455555, -18.205002],
            [23.503052, -18.248337],
            [23.519722, -18.266945],
            [23.554165, -18.326115],
            [23.560555, -18.354168],
            [23.559719, -18.358891],
            [23.551109, -18.364445],
            [23.548885, -18.369167],
            [23.563889, -18.437225],
            [23.570831, -18.467224],
            [23.578053, -18.474167],
            [23.582497, -18.476948],
            [23.598331, -18.482502],
            [23.610935, -18.485252],
            [23.615578, -18.485069],
            [23.650555, -18.469723],
            [23.719166, -18.425282],
            [23.791664, -18.354168],
            [23.826942, -18.319168],
            [23.832775, -18.310837],
            [23.84222, -18.292503],
            [23.845833, -18.287502],
            [23.866108, -18.265835],
            [23.874722, -18.260281],
            [23.88694, -18.264763],
            [23.91222, -18.236946],
            [23.96722, -18.185001],
            [24.006664, -18.167778],
            [24.268887, -18.013336],
            [24.353054, -17.953613],
            [24.362499, -17.948612],
            [24.368332, -17.947224],
            [24.388332, -17.945835],
            [24.414444, -17.952778],
            [24.419441, -17.954723],
            [24.438053, -17.971111],
            [24.438889, -17.977222],
            [24.441109, -17.981945],
            [24.451942, -17.999168],
            [24.47361, -18.03278],
            [24.491665, -18.056667],
            [24.496109, -18.059448],
            [24.501942, -18.060558],
            [24.524166, -18.060001],
            [24.553608, -18.057781],
            [24.560276, -18.056946],
            [24.57111, -18.053612],
            [24.580276, -18.048615],
            [24.679165, -17.944168],
            [24.82333, -17.840557],
            [24.828331, -17.838612],
            [24.839722, -17.835835],
            [24.936108, -17.813892],
            [24.972775, -17.821114],
            [25, -17.82605],
            [25.059998, -17.832226],
            [25.072777, -17.832226],
            [25.09222, -17.830002],
            [25.098053, -17.828613],
            [25.103054, -17.826389],
            [25.122219, -17.810558],
            [25.125832, -17.807224],
            [25.133053, -17.800282],
            [25.136665, -17.796669],
            [25.139442, -17.792503],
            [25.147221, -17.786392],
            [25.171665, -17.781948],
            [25.178055, -17.781391],
            [25.183887, -17.782501],
            [25.249443, -17.795002],
            [25.255314, -17.796417],
            [25.264431, -17.80225],
            [25.244164, -17.847225],
            [25.239441, -17.863056],
            [25.236664, -17.894447],
            [25.239166, -17.913059],
            [25.241386, -17.924446],
            [25.274441, -18.003056],
            [25.276665, -18.007778],
            [25.309166, -18.065834],
            [25.314999, -18.073891],
            [25.322777, -18.080002],
            [25.364166, -18.109169],
            [25.36861, -18.111946],
            [25.388885, -18.119724],
            [25.39333, -18.122501],
            [25.401943, -18.134724],
            [25.449997, -18.220001],
            [25.479443, -18.274445],
            [25.500832, -18.328335],
            [25.506386, -18.351112],
            [25.512218, -18.37278],
            [25.516666, -18.382504],
            [25.521942, -18.391392],
            [25.53083, -18.403614],
            [25.599442, -18.478336],
            [25.603886, -18.480835],
            [25.661663, -18.535835],
            [25.718887, -18.591393],
            [25.796665, -18.711945],
            [25.865833, -18.841393],
            [25.874722, -18.846668],
            [25.936943, -18.889725],
            [25.944164, -18.896667],
            [25.956108, -18.913612],
            [25.973331, -18.945557],
            [25.98, -18.960003],
            [25.986942, -18.988056],
            [25.986675, -18.998287],
            [25.964165, -19.061668],
            [25.961941, -19.093334],
            [25.961941, -19.100281],
            [25.963333, -19.105556],
            [25.970276, -19.120003],
            [26, -19.160835],
            [26.022221, -19.187778],
            [26.054722, -19.265003],
            [26.09861, -19.375557],
            [26.149441, -19.501392],
            [26.154163, -19.511669],
            [26.163055, -19.523891],
            [26.166111, -19.527779],
            [26.174164, -19.53389],
            [26.191944, -19.544724],
            [26.201385, -19.550003],
            [26.238331, -19.570004],
            [26.248608, -19.574169],
            [26.260277, -19.576668],
            [26.266941, -19.577225],
            [26.356667, -19.616947],
            [26.404442, -19.675835],
            [26.536663, -19.763615],
            [26.568672, -19.785217],
            [26.588608, -19.799168],
            [26.591663, -19.803337],
            [26.594166, -19.821945],
            [26.597221, -19.832779],
            [26.601944, -19.842224],
            [26.607777, -19.850559],
            [26.614719, -19.85778],
            [26.619164, -19.860558],
            [26.629444, -19.864445],
            [26.641109, -19.866947],
            [26.695835, -19.87788],
            [26.720554, -19.922501],
            [26.72361, -19.92667],
            [26.732498, -19.931946],
            [26.737499, -19.933891],
            [26.969719, -20.009724],
            [26.975555, -20.011112],
            [26.981667, -20.012222],
            [26.988888, -20.012222],
            [27.079166, -20.026669],
            [27.207222, -20.083057],
            [27.219997, -20.091667],
            [27.22361, -20.09528],
            [27.232777, -20.107224],
            [27.237499, -20.116947],
            [27.282497, -20.221111],
            [27.290554, -20.241669],
            [27.298885, -20.308056],
            [27.298885, -20.315002],
            [27.29583, -20.385281],
            [27.290833, -20.454723],
            [27.287453, -20.494965],
            [27.293888, -20.48917],
            [27.323055, -20.474724],
            [27.338886, -20.468891],
            [27.344719, -20.467224],
            [27.35722, -20.465],
            [27.363888, -20.465557],
            [27.432499, -20.472225],
            [27.516388, -20.476391],
            [27.602776, -20.47139],
            [27.609444, -20.470558],
            [27.615276, -20.471668],
            [27.682499, -20.485836],
            [27.68861, -20.487225],
            [27.693607, -20.48917],
            [27.702774, -20.494446],
            [27.706387, -20.49778],
            [27.713165, -20.506432],
            [27.718609, -20.513889],
            [27.724163, -20.522781],
            [27.726387, -20.548889],
            [27.730831, -20.748337],
            [27.726944, -20.791946],
            [27.712776, -20.839725],
            [27.707222, -20.848057],
            [27.696388, -20.858612],
            [27.693607, -20.862782],
            [27.693054, -20.869167],
            [27.68972, -20.934723],
            [27.685276, -21.063614],
            [27.685555, -21.070557],
            [27.688053, -21.075279],
            [27.722775, -21.125835],
            [27.731941, -21.138058],
            [27.739441, -21.145557],
            [27.747219, -21.152225],
            [27.751663, -21.154724],
            [27.779999, -21.16917],
            [27.835552, -21.216114],
            [27.839165, -21.219448],
            [27.84861, -21.23167],
            [27.899719, -21.308613],
            [27.941944, -21.383335],
            [27.968052, -21.435558],
            [27.972775, -21.445278],
            [28.007774, -21.545559],
            [28.012775, -21.56139],
            [28.015831, -21.566113],
            [28.042774, -21.575001],
            [28.054722, -21.577503],
            [28.161942, -21.593613],
            [28.202774, -21.596668],
            [28.238331, -21.595558],
            [28.262775, -21.59],
            [28.281944, -21.58667],
            [28.288609, -21.587223],
            [28.350555, -21.602501],
            [28.380833, -21.615559],
            [28.408054, -21.630558],
            [28.456944, -21.653057],
            [28.468052, -21.656113],
            [28.498055, -21.662224],
            [28.504719, -21.662781],
            [28.50972, -21.660278],
            [28.513332, -21.656948],
            [28.526386, -21.648056],
            [28.555553, -21.633614],
            [28.568054, -21.631111],
            [28.574165, -21.632225],
            [28.643608, -21.648613],
            [28.648888, -21.650558],
            [28.858887, -21.749168],
            [28.868053, -21.754448],
            [28.919167, -21.768612],
            [28.93111, -21.770836],
            [28.951942, -21.771667],
            [28.958611, -21.770557],
            [28.980831, -21.769726],
            [28.993332, -21.771389],
            [29.060555, -21.798058],
            [29.072777, -21.807224],
            [29.076111, -21.81139],
            [29.080627, -21.82098],
            [29.081181, -21.82539],
            [29.078331, -21.830002],
            [29.074989, -21.833216],
            [29.065552, -21.845558],
            [29.048611, -21.870834],
            [29.041111, -21.884445],
            [29.037777, -21.894726],
            [29.033886, -21.911392],
            [29.031944, -21.93639],
            [29.032776, -21.956947],
            [29.03722, -21.974167],
            [29.046108, -21.993893],
            [29.055832, -22.012779],
            [29.061386, -22.021667],
            [29.073887, -22.037781],
            [29.077774, -22.041115],
            [29.093887, -22.053612],
            [29.113609, -22.0625],
            [29.139999, -22.071945],
            [29.156666, -22.076946],
            [29.174721, -22.08028],
            [29.188053, -22.08139],
            [29.21722, -22.079445],
            [29.223888, -22.078613],
            [29.241386, -22.073891],
            [29.256107, -22.066391],
            [29.267776, -22.077778],
            [29.361942, -22.176945],
            [29.373623, -22.19241],
            [29.274166, -22.194168],
            [29.071663, -22.220558],
            [29.044998, -22.224167],
            [29.024796, -22.227108],
            [28.960552, -22.313335],
            [28.959442, -22.31889],
            [28.959721, -22.327778],
            [28.964722, -22.34417],
            [28.968052, -22.368336],
            [28.965832, -22.386391],
            [28.963608, -22.391113],
            [28.950554, -22.413059],
            [28.937222, -22.434723],
            [28.931389, -22.443336],
            [28.924999, -22.451115],
            [28.91069, -22.458794],
            [28.828888, -22.490837],
            [28.645554, -22.559723],
            [28.634441, -22.563335],
            [28.627777, -22.564445],
            [28.456108, -22.573891],
            [28.361942, -22.574448],
            [28.351109, -22.578335],
            [28.298332, -22.609447],
            [28.196663, -22.675282],
            [28.179634, -22.686436],
            [28.167774, -22.703613],
            [28.160553, -22.717781],
            [28.158886, -22.729446],
            [28.159721, -22.735558],
            [28.164165, -22.752781],
            [28.161388, -22.763889],
            [28.159443, -22.76889],
            [28.156387, -22.773056],
            [28.149166, -22.780003],
            [28.109722, -22.806114],
            [28.049442, -22.863056],
            [27.972221, -22.952778],
            [27.943886, -23.031391],
            [27.783886, -23.17028],
            [27.708332, -23.202503],
            [27.703888, -23.199722],
            [27.697777, -23.198612],
            [27.606667, -23.218056],
            [27.601387, -23.22028],
            [27.572777, -23.26667],
            [27.564163, -23.301945],
            [27.564163, -23.308891],
            [27.565277, -23.315002],
            [27.568333, -23.324722],
            [27.567219, -23.33028],
            [27.55722, -23.348335],
            [27.534721, -23.375835],
            [27.526386, -23.382225],
            [27.520554, -23.383614],
            [27.505554, -23.384167],
            [27.498608, -23.383614],
            [27.452774, -23.385281],
            [27.407219, -23.387222],
            [27.344997, -23.397503],
            [27.334442, -23.401947],
            [27.148052, -23.524723],
            [27.09861, -23.589169],
            [27.069721, -23.636112],
            [27.035553, -23.65889],
            [27.032497, -23.654724],
            [27.018608, -23.64278],
            [27.013332, -23.640556],
            [27.006386, -23.641392],
            [27.001942, -23.644447],
            [26.999165, -23.648613],
            [26.978333, -23.691669],
            [26.95919, -23.752075]
          ]
        ]
      }
    }
  ]
}
';
    }
}
