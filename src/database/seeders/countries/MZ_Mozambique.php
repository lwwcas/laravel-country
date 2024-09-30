<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MZ_Mozambique extends CountrySeeder
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
        $this->name = 'Mozambique';
        $this->official_name = 'Republic of Mozambique';
        $this->iso_alpha_2 = 'MZ';
        $this->iso_alpha_3 = 'MOZ';
        $this->iso_numeric = '508';
        $this->international_phone = '258';

        $this->languages = ['pt'];
        $this->tld = ['.mz'];
        $this->wmo = 'MZ';
        $this->geoname_id = '1036973';

        $this->emoji = [
            'img' => '🇲🇿',
            'uCode' => 'U+1F1F2 U+1F1FF',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#000000',
                '#ffff00',
                '#ff0000',
                '#ffffff',
            ],
            'rgb' => [
                '0,128,0',
                '0,0,0',
                '255,255,0',
                '255,0,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '18 15 S',
                'desc' => '-17.555864334106445',
            ],
            'longitude' => [
                'classic' => '35 00 E',
                'desc' => '35.955692291259766',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '15.033333',
                'min' => '-26.857222',
            ],
            'longitude' => [
                'max' => '40.845278',
                'min' => '30.231389',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mz"},"geometry":{"type":"MultiPolygon","coordinates":[[[[32.95444,-26.058613],[32.949165,-26.06111],[32.906105,-26.05945],[32.901108,-26.05695],[32.898605,-26.052502],[32.895271,-26.040836],[32.907494,-26.004723],[32.910271,-26.00056],[32.925827,-25.99334],[32.97583,-25.974445],[32.980553,-25.972778],[32.98305,-25.977501],[32.982773,-25.983612],[32.977776,-25.99917],[32.968887,-26.023891],[32.963051,-26.03945],[32.957222,-26.05445],[32.95444,-26.058613]]],[[[35.488327,-21.685001],[35.452217,-21.787502],[35.445549,-21.78722],[35.435555,-21.783337],[35.42805,-21.776112],[35.423607,-21.76611],[35.422775,-21.75944],[35.424438,-21.7275],[35.435829,-21.65528],[35.469994,-21.53583],[35.47277,-21.53139],[35.479439,-21.523891],[35.48555,-21.524723],[35.488884,-21.52861],[35.496109,-21.543335],[35.497498,-21.54945],[35.497215,-21.58139],[35.49472,-21.658337],[35.488327,-21.685001]]],[[[39.901382,-16.413334],[39.886108,-16.417778],[39.84944,-16.415279],[39.838882,-16.411114],[39.834717,-16.40806],[39.83194,-16.40389],[39.810829,-16.363056],[39.810272,-16.35833],[39.812218,-16.32806],[39.813332,-16.32167],[39.818054,-16.3125],[39.833054,-16.291668],[39.836937,-16.28861],[39.861382,-16.278057],[39.86722,-16.276947],[39.894722,-16.273056],[39.901382,-16.27278],[39.906387,-16.27361],[39.91111,-16.27611],[39.914719,-16.27972],[39.914993,-16.28611],[39.904442,-16.41139],[39.901382,-16.413334]]],[[[40.500832,-11.031946],[40.506386,-11.039446],[40.516937,-11.036112],[40.52833,-11.02778],[40.527496,-11.01944],[40.529716,-11.00944],[40.539444,-11.00861],[40.55778,-11.01694],[40.568886,-11.02611],[40.570831,-11.036945],[40.561661,-11.06639],[40.498604,-11.176668],[40.4675,-11.21861],[40.41722,-11.281389],[40.38777,-11.31778],[40.47333,-11.397223],[40.478882,-11.40556],[40.48111,-11.41639],[40.453049,-11.51861],[40.44944,-11.52556],[40.428886,-11.574722],[40.424164,-11.649723],[40.446106,-11.73695],[40.471382,-11.81139],[40.505554,-11.957224],[40.514717,-12.31639],[40.512497,-12.43028],[40.5075,-12.43778],[40.472771,-12.49861],[40.471382,-12.50889],[40.479721,-12.513613],[40.489441,-12.517778],[40.508331,-12.52417],[40.558884,-12.55333],[40.605827,-12.704445],[40.616386,-12.713335],[40.645,-12.75],[40.646942,-12.76083],[40.646111,-12.77333],[40.641937,-12.78139],[40.516106,-12.88917],[40.511108,-12.880835],[40.47666,-12.884167],[40.449715,-12.90306],[40.41861,-12.93167],[40.413055,-12.93917],[40.409996,-12.96194],[40.412773,-12.97278],[40.41833,-12.980278],[40.461105,-13.01639],[40.48972,-13.0275],[40.49833,-13.02333],[40.508331,-13.011946],[40.513329,-13.00167],[40.51194,-12.99056],[40.506386,-12.981668],[40.518326,-12.955],[40.584442,-12.95945],[40.593048,-12.96444],[40.597221,-12.973333],[40.596939,-12.98556],[40.57194,-13.202778],[40.539444,-13.312223],[40.55971,-13.329445],[40.589996,-13.36389],[40.59111,-13.374723],[40.588333,-13.385],[40.54194,-13.476112],[40.52583,-13.515278],[40.54583,-13.5275],[40.551384,-13.53417],[40.578888,-13.56722],[40.582222,-13.58583],[40.571663,-13.588612],[40.541107,-13.635557],[40.537498,-13.645279],[40.547775,-13.687778],[40.6,-13.89],[40.602776,-13.899445],[40.60833,-13.907778],[40.625275,-13.92445],[40.634438,-13.940834],[40.637215,-13.95167],[40.649994,-14.016945],[40.64944,-14.02639],[40.642776,-14.07083],[40.62277,-14.125557],[40.614166,-14.13583],[40.605553,-14.14111],[40.584999,-14.148056],[40.554718,-14.156668],[40.535,-14.163334],[40.530548,-14.171667],[40.559441,-14.208057],[40.59861,-14.245834],[40.619164,-14.235834],[40.626389,-14.21722],[40.649162,-14.1975],[40.668884,-14.19028],[40.69416,-14.18417],[40.703606,-14.18222],[40.72028,-14.198057],[40.725273,-14.206112],[40.74472,-14.27472],[40.728607,-14.34306],[40.68972,-14.36389],[40.68055,-14.3675],[40.669167,-14.36722],[40.64361,-14.40139],[40.636108,-14.48472],[40.670555,-14.48778],[40.689995,-14.435835],[40.708328,-14.42778],[40.766388,-14.405556],[40.776939,-14.403612],[40.79055,-14.402779],[40.801109,-14.40417],[40.811661,-14.40778],[40.816666,-14.41528],[40.825554,-14.431667],[40.830551,-14.45361],[40.831665,-14.465279],[40.846107,-14.697779],[40.845276,-14.734167],[40.832222,-14.781113],[40.82,-14.81111],[40.734161,-14.885279],[40.722771,-14.892778],[40.74721,-14.928335],[40.754166,-14.93806],[40.770271,-14.97833],[40.708885,-15.07833],[40.698883,-15.085279],[40.607498,-15.11528],[40.57361,-15.12278],[40.543884,-15.119722],[40.534721,-15.12389],[40.528885,-15.13278],[40.514442,-15.180557],[40.514442,-15.187223],[40.53833,-15.194168],[40.578049,-15.20278],[40.583054,-15.19444],[40.587219,-15.18417],[40.600273,-15.168612],[40.606667,-15.161112],[40.614998,-15.155001],[40.62722,-15.155001],[40.636383,-15.16056],[40.665833,-15.18667],[40.67083,-15.19639],[40.68471,-15.249723],[40.68388,-15.26],[40.67166,-15.28917],[40.587776,-15.47972],[40.57833,-15.49889],[40.559166,-15.52195],[40.543327,-15.534168],[40.479996,-15.574722],[40.446106,-15.59639],[40.429718,-15.60778],[40.410271,-15.64583],[40.383606,-15.690834],[40.37861,-15.698891],[40.360275,-15.723333],[40.33861,-15.74445],[40.24472,-15.83389],[40.12555,-15.94],[40.13027,-15.967501],[40.136383,-15.985834],[40.135826,-15.9925],[40.13222,-16.002781],[40.100273,-16.078892],[40.094719,-16.08694],[40.028053,-16.177223],[39.983604,-16.231945],[39.974998,-16.2375],[39.964439,-16.24084],[39.93944,-16.24334],[39.926109,-16.24334],[39.91111,-16.2425],[39.899719,-16.238892],[39.888611,-16.23695],[39.879166,-16.24167],[39.80805,-16.28195],[39.78305,-16.29945],[39.782219,-16.311668],[39.803055,-16.372501],[39.817497,-16.412781],[39.698608,-16.536945],[39.674438,-16.55528],[39.50666,-16.65334],[39.438889,-16.68528],[39.310555,-16.752224],[39.283882,-16.76833],[39.192497,-16.83139],[39.127495,-16.870422],[39.128052,-16.88139],[39.127495,-16.933056],[39.122498,-16.942501],[39.102219,-16.97972],[39.094444,-16.98639],[39.08583,-16.991669],[38.896942,-17.03945],[38.830551,-17.055836],[38.818329,-17.05778],[38.686104,-17.07083],[38.604721,-17.099167],[38.391937,-17.17639],[38.330551,-17.19889],[38.249718,-17.22945],[38.214722,-17.250557],[38.207497,-17.258057],[38.202499,-17.26667],[38.195831,-17.27417],[38.186661,-17.279446],[38.102219,-17.315281],[38.090828,-17.31861],[38.041664,-17.329445],[38.00722,-17.33667],[37.994438,-17.33778],[37.960831,-17.345],[37.932495,-17.353336],[37.91166,-17.360558],[37.872215,-17.37639],[37.85305,-17.38583],[37.781387,-17.426113],[37.609161,-17.52584],[37.41694,-17.63278],[37.228607,-17.748337],[37.21916,-17.752224],[37.205826,-17.751392],[37.088608,-17.87195],[37.067497,-17.894726],[37.055275,-17.91139],[37.03472,-17.94778],[37.028885,-17.95639],[37.004166,-17.98944],[36.98389,-18.001392],[36.92055,-17.95639],[36.913605,-17.95028],[36.91083,-17.939167],[36.90916,-17.91472],[36.907219,-17.90389],[36.903053,-17.89389],[36.89666,-17.886112],[36.876106,-17.87722],[36.864166,-17.874168],[36.851387,-17.87389],[36.841385,-17.87722],[36.823883,-17.888615],[36.818054,-17.897224],[36.820274,-17.90472],[36.89194,-17.96889],[36.952217,-18.029446],[36.97333,-18.051392],[36.970276,-18.062778],[36.965,-18.07222],[36.943886,-18.10861],[36.893608,-18.172779],[36.780548,-18.294445],[36.766663,-18.30861],[36.612495,-18.45389],[36.50222,-18.555],[36.47972,-18.576946],[36.418884,-18.67417],[36.398605,-18.733334],[36.320549,-18.79444],[36.252777,-18.891392],[36.158051,-18.90389],[36.13694,-18.904446],[36.131943,-18.903057],[36.128326,-18.899445],[36.126938,-18.89333],[36.122498,-18.84722],[36.122772,-18.83472],[36.13104,-18.808754],[36.12971,-18.804726],[36.12611,-18.801113],[36.121109,-18.801113],[36.115273,-18.803059],[36.106384,-18.808334],[36.093887,-18.81778],[36.059166,-18.86611],[35.982773,-18.92694],[35.878883,-18.975],[35.81194,-19.021389],[35.748604,-19.06583],[35.671944,-19.12028],[35.66888,-19.12361],[35.656105,-19.1525],[35.636665,-19.187225],[35.576111,-19.271389],[35.45166,-19.414448],[35.447777,-19.418613],[35.437492,-19.42861],[35.363052,-19.49667],[35.29166,-19.56084],[35.112221,-19.716946],[34.899162,-19.85722],[34.88222,-19.863613],[34.853607,-19.859726],[34.848053,-19.8575],[34.843605,-19.854446],[34.839996,-19.851112],[34.834442,-19.842781],[34.830551,-19.82],[34.82666,-19.803337],[34.817497,-19.78389],[34.811104,-19.776112],[34.804718,-19.769726],[34.634438,-19.61945],[34.619164,-19.61778],[34.633049,-19.6525],[34.641388,-19.67195],[34.676941,-19.733334],[34.688332,-19.74306],[34.693329,-19.746113],[34.71583,-19.752781],[34.73027,-19.75917],[34.73888,-19.765556],[34.746109,-19.7725],[34.760277,-19.79278],[34.765831,-19.80194],[34.774994,-19.82],[34.776939,-19.82556],[34.7775,-19.838058],[34.765,-19.89889],[34.75972,-19.93611],[34.754997,-19.97028],[34.750549,-20.033611],[34.750549,-20.03972],[34.752495,-20.069447],[34.75944,-20.180557],[34.69778,-20.37945],[34.692497,-20.38278],[34.671661,-20.390556],[34.665833,-20.39194],[34.658607,-20.39167],[34.737495,-20.55611],[34.741104,-20.55945],[34.871109,-20.65667],[34.949715,-20.69361],[34.954163,-20.69583],[34.958328,-20.69917],[34.983604,-20.723335],[34.98888,-20.725281],[34.991661,-20.729446],[35.012497,-20.77889],[35.008888,-20.80695],[35.07444,-20.91306],[35.109444,-20.92694],[35.11388,-20.930557],[35.115829,-20.93528],[35.115829,-20.941669],[35.111107,-20.95111],[35.102966,-20.95733],[35.11833,-20.971668],[35.117493,-20.97722],[35.084717,-21.08417],[35.08194,-21.088337],[35.07861,-21.09222],[35.050278,-21.097778],[35.079163,-21.32417],[35.137497,-21.43167],[35.183884,-21.51667],[35.21166,-21.55389],[35.222221,-21.564724],[35.234161,-21.57417],[35.244164,-21.58583],[35.249443,-21.59528],[35.268051,-21.64278],[35.269997,-21.64833],[35.2725,-21.66056],[35.273048,-21.67361],[35.270828,-21.68472],[35.26361,-21.71167],[35.27583,-21.81444],[35.276665,-21.821392],[35.27861,-21.82667],[35.300827,-21.883614],[35.329994,-21.99334],[35.337494,-22.074448],[35.338333,-22.10083],[35.338051,-22.106945],[35.328049,-22.22528],[35.325829,-22.24278],[35.313332,-22.30334],[35.306389,-22.31778],[35.302773,-22.3275],[35.301941,-22.33334],[35.300278,-22.357502],[35.303329,-22.398056],[35.304443,-22.40417],[35.306664,-22.409725],[35.312492,-22.41806],[35.371666,-22.466114],[35.39722,-22.460003],[35.409439,-22.41417],[35.391663,-22.35056],[35.391106,-22.34361],[35.38916,-22.305],[35.389442,-22.2925],[35.39222,-22.275558],[35.39444,-22.264446],[35.403053,-22.22139],[35.41861,-22.171112],[35.44416,-22.122223],[35.447495,-22.118336],[35.47361,-22.09417],[35.477776,-22.091114],[35.483055,-22.092781],[35.491943,-22.09833],[35.497215,-22.1075],[35.545273,-22.232502],[35.54277,-22.390556],[35.54055,-22.41417],[35.533607,-22.45278],[35.526382,-22.472778],[35.521111,-22.48139],[35.514561,-22.5],[35.510551,-22.511391],[35.492493,-22.5675],[35.491386,-22.573059],[35.485832,-22.62611],[35.485832,-22.632225],[35.50444,-22.83417],[35.521385,-22.912502],[35.523331,-22.91806],[35.535271,-22.950279],[35.579994,-22.937778],[35.588608,-22.93139],[35.591942,-22.92778],[35.593048,-22.922226],[35.590828,-22.916668],[35.582222,-22.91111],[35.583328,-22.90695],[35.58916,-22.90528],[35.601387,-22.90695],[35.609993,-22.912502],[35.610275,-22.924168],[35.606941,-22.93417],[35.563332,-23.01528],[35.551109,-23.037502],[35.54583,-23.04639],[35.535553,-23.057503],[35.529716,-23.06556],[35.519165,-23.083057],[35.481941,-23.16889],[35.478333,-23.17889],[35.476944,-23.197224],[35.478882,-23.21778],[35.484993,-23.24139],[35.487495,-23.25389],[35.488052,-23.260559],[35.487778,-23.273056],[35.485832,-23.29056],[35.481941,-23.30695],[35.47916,-23.317501],[35.468605,-23.341114],[35.454163,-23.38084],[35.421104,-23.48944],[35.413605,-23.515556],[35.41166,-23.526947],[35.408333,-23.612225],[35.406944,-23.656113],[35.347771,-23.69528],[35.338333,-23.905834],[35.339722,-23.96945],[35.360275,-23.95333],[35.43972,-23.87861],[35.475273,-23.82889],[35.475273,-23.8225],[35.48333,-23.79417],[35.496666,-23.791668],[35.51722,-23.79222],[35.523331,-23.79306],[35.527496,-23.79611],[35.53083,-23.80028],[35.532776,-23.805557],[35.54222,-23.863613],[35.53999,-23.875],[35.534721,-23.89],[35.518883,-23.916115],[35.515274,-23.92611],[35.501663,-23.96667],[35.483604,-24.041946],[35.482773,-24.047779],[35.483055,-24.06084],[35.484444,-24.073891],[35.485832,-24.08],[35.493889,-24.09389],[35.495827,-24.099167],[35.497215,-24.10528],[35.49528,-24.110558],[35.456108,-24.16944],[35.404716,-24.24472],[35.39,-24.266113],[35.309441,-24.365837],[35.285271,-24.39194],[35.268051,-24.404167],[35.263885,-24.40806],[35.253609,-24.41917],[35.196388,-24.48361],[35.188332,-24.49695],[35.189438,-24.509167],[35.187492,-24.520557],[35.185555,-24.525558],[35.179443,-24.533611],[35.143883,-24.57],[35.11833,-24.58861],[35.096939,-24.604168],[35.078888,-24.61584],[35.05055,-24.6325],[35.01221,-24.65417],[34.971382,-24.67445],[34.812775,-24.74334],[34.693886,-24.786114],[34.653885,-24.800003],[34.613884,-24.81389],[34.482605,-24.856056],[34.443054,-24.868336],[34.374161,-24.89167],[34.333054,-24.911114],[34.32444,-24.91722],[34.303886,-24.92694],[34.245827,-24.946392],[34.108055,-24.98695],[33.99472,-25.02],[33.73111,-25.106113],[33.714165,-25.11195],[33.365829,-25.265],[33.241104,-25.32333],[33.234718,-25.33139],[33.226944,-25.338058],[33.217216,-25.343334],[33.131897,-25.38116],[33.109444,-25.394447],[33.048607,-25.430557],[32.90361,-25.523056],[32.886108,-25.535],[32.878052,-25.54167],[32.813889,-25.60778],[32.808327,-25.61639],[32.770271,-25.683613],[32.762497,-25.703613],[32.738609,-25.77556],[32.734444,-25.804726],[32.734718,-25.80833],[32.729996,-25.80695],[32.704437,-25.82584],[32.697777,-25.84],[32.69722,-25.852501],[32.697777,-25.85945],[32.69611,-25.871113],[32.692215,-25.88111],[32.689438,-25.88472],[32.675278,-25.899445],[32.65361,-25.92139],[32.64222,-25.93167],[32.606667,-25.96222],[32.602219,-25.96528],[32.588051,-25.973614],[32.582222,-25.975281],[32.57611,-25.97556],[32.603882,-26.03139],[32.723053,-26.17945],[32.80444,-26.273613],[32.808609,-26.276947],[32.837494,-26.29306],[32.848885,-26.28917],[32.8716,-26.27817],[32.874992,-26.26667],[32.869164,-26.238892],[32.864166,-26.214169],[32.863609,-26.207226],[32.864716,-26.20167],[32.893326,-26.126667],[32.899162,-26.11167],[32.905548,-26.10389],[32.940277,-26.085281],[32.944717,-26.08417],[32.952499,-26.08389],[32.95361,-26.09],[32.953049,-26.1025],[32.94305,-26.15278],[32.936943,-26.198891],[32.92911,-26.279503],[32.927773,-26.353615],[32.902496,-26.71528],[32.88222,-26.81611],[32.88166,-26.822224],[32.89043,-26.84714],[32.767776,-26.851669],[32.688889,-26.853615],[32.394997,-26.85973],[32.348328,-26.860279],[32.174995,-26.851669],[32.156944,-26.847778],[32.151382,-26.84611],[32.1334,-26.839626],[32.1325,-26.79667],[32.129166,-26.50584],[32.123055,-26.492226],[32.089165,-26.425003],[32.07222,-26.39333],[32.061104,-26.26139],[32.10305,-26.16222],[32.10083,-26.14861],[32.074715,-26.03722],[31.998608,-25.99084],[31.96851,-25.95784],[31.919441,-25.81417],[31.981667,-25.672501],[31.98305,-25.67028],[32.006104,-25.61584],[32.004997,-25.53694],[31.988331,-25.518059],[31.988052,-25.50417],[31.991108,-25.421112],[32.009995,-25.34611],[32.016663,-25.11056],[32.018608,-25.035],[32.011383,-24.925],[32.00249,-24.800835],[31.99555,-24.70444],[32.01611,-24.459446],[32.0075,-24.43222],[31.965275,-24.310001],[31.9625,-24.30389],[31.941799,-24.26766],[31.88583,-24.17112],[31.884163,-24.143616],[31.87722,-23.964169],[31.877399,-23.950645],[31.844719,-23.90722],[31.769722,-23.85639],[31.72,-23.74861],[31.68861,-23.68028],[31.686108,-23.63917],[31.683609,-23.61361],[31.651108,-23.573891],[31.62833,-23.547501],[31.614719,-23.534168],[31.550831,-23.47667],[31.537498,-23.41722],[31.54583,-23.306393],[31.554165,-23.235611],[31.55722,-23.220837],[31.561665,-23.18667],[31.516109,-23.050835],[31.303608,-22.426113],[31.302231,-22.42355],[31.297504,-22.414764],[31.306004,-22.40952],[31.354721,-22.379448],[31.39333,-22.354168],[31.407497,-22.34028],[31.68861,-22.05445],[31.926388,-21.81111],[32.399437,-21.322781],[32.408821,-21.31402],[32.416107,-21.30722],[32.46083,-21.3225],[32.46999,-21.3275],[32.488876,-21.34445],[32.47623,-21.32185],[32.412216,-21.217781],[32.362778,-21.140556],[32.35833,-21.130558],[32.376106,-21.106113],[32.480827,-20.992226],[32.521385,-20.914169],[32.510277,-20.85945],[32.500832,-20.819447],[32.48472,-20.67889],[32.483604,-20.66167],[32.50222,-20.598614],[32.550827,-20.555],[32.665833,-20.557224],[32.802498,-20.36278],[32.871666,-20.27861],[32.876106,-20.26945],[32.883331,-20.23639],[32.885551,-20.225281],[32.892494,-20.16639],[32.90416,-20.124168],[32.982773,-20.02222],[33.018883,-19.94334],[33.059441,-19.78028],[32.984718,-19.687225],[32.850555,-19.61778],[32.85305,-19.50611],[32.850555,-19.493893],[32.846939,-19.483059],[32.844444,-19.47834],[32.837219,-19.47139],[32.83222,-19.469448],[32.826385,-19.47],[32.816383,-19.47472],[32.809998,-19.47583],[32.796104,-19.47583],[32.790833,-19.47417],[32.786385,-19.47167],[32.783051,-19.467781],[32.781387,-19.454723],[32.783607,-19.371391],[32.784721,-19.36639],[32.78833,-19.36278],[32.7925,-19.35973],[32.798882,-19.358612],[32.803886,-19.35639],[32.80722,-19.352779],[32.84027,-19.302502],[32.854996,-19.27417],[32.88472,-19.112503],[32.88583,-19.10083],[32.884163,-19.09528],[32.84472,-19.03167],[32.839165,-19.023056],[32.829437,-19.01889],[32.822777,-19.01861],[32.791664,-19.02],[32.780273,-19.02333],[32.76722,-19.02556],[32.739716,-19.025837],[32.72111,-19.02361],[32.71611,-19.02195],[32.712219,-19.01861],[32.708611,-19.00778],[32.69971,-18.95139],[32.699165,-18.944447],[32.701111,-18.83694],[32.707222,-18.82917],[32.790276,-18.78889],[32.81721,-18.779167],[32.830826,-18.7775],[32.837494,-18.777779],[32.84333,-18.77889],[32.869164,-18.7875],[32.886108,-18.79111],[32.899994,-18.79111],[32.91,-18.78639],[32.91805,-18.780281],[32.924995,-18.773056],[32.928055,-18.76722],[32.949715,-18.690281],[32.90583,-18.613335],[32.889999,-18.574448],[32.888885,-18.56834],[32.888329,-18.53056],[32.91,-18.51611],[32.920555,-18.51195],[32.940552,-18.509445],[32.950554,-18.504723],[32.993889,-18.48278],[32.998604,-18.480278],[33.01722,-18.463337],[33.023888,-18.456112],[33.071388,-18.352779],[33.073051,-18.34889],[33.070549,-18.344448],[33.050278,-18.328892],[33.02,-18.30167],[32.977493,-18.259167],[32.974442,-18.25528],[32.969444,-18.246391],[32.96666,-18.235836],[32.971939,-18.226669],[32.995277,-18.199448],[33.000549,-18.190281],[33.00111,-18.18333],[33.00027,-18.17778],[32.98888,-18.124725],[32.987221,-18.119724],[32.977219,-18.10222],[32.96666,-18.083057],[32.962494,-18.073612],[32.95472,-18.041668],[32.946106,-17.975002],[32.95166,-17.88389],[32.953049,-17.877781],[32.968048,-17.823059],[32.970551,-17.81834],[32.977776,-17.81139],[32.98305,-17.809723],[32.996384,-17.80945],[33.015,-17.74528],[33.041107,-17.63861],[33.04361,-17.620003],[33.041664,-17.6025],[33.03999,-17.5975],[33.03,-17.58],[33.026939,-17.576115],[32.98666,-17.56361],[32.981667,-17.56111],[32.97361,-17.554726],[32.971107,-17.55028],[32.960274,-17.52084],[32.955276,-17.50584],[32.954163,-17.500278],[32.956383,-17.495003],[33.04203,-17.35648],[33.041107,-17.34445],[33.033882,-17.3375],[33.017494,-17.324722],[32.998329,-17.31417],[32.994164,-17.31084],[32.99194,-17.306393],[32.99083,-17.300835],[32.98781,-17.265],[32.988609,-17.252224],[32.987221,-17.227779],[32.98111,-17.188335],[32.978607,-17.177502],[32.96833,-17.1475],[32.93471,-17.085556],[32.917496,-17.054726],[32.864998,-16.918613],[32.888611,-16.9],[32.895828,-16.89306],[32.912773,-16.87445],[32.926666,-16.859169],[32.938606,-16.84222],[32.948326,-16.822781],[32.95916,-16.79695],[32.966942,-16.77528],[32.972221,-16.75833],[32.974998,-16.74611],[32.98114,-16.70905],[32.934998,-16.70222],[32.928604,-16.7025],[32.923332,-16.70389],[32.799438,-16.718334],[32.767464,-16.71804],[32.72805,-16.69361],[32.71,-16.61917],[32.708328,-16.60778],[32.701111,-16.600834],[32.579994,-16.54583],[32.407219,-16.478336],[32.377777,-16.47],[32.353607,-16.46361],[32.29305,-16.44833],[32.25471,-16.440281],[32.240273,-16.438892],[32.22083,-16.43917],[32.156105,-16.441391],[32.093887,-16.447224],[32.075829,-16.44917],[32.062775,-16.44917],[32.048332,-16.447781],[31.98305,-16.43528],[31.92555,-16.42334],[31.908054,-16.418335],[31.906387,-16.413334],[31.90472,-16.39584],[31.904442,-16.37694],[31.905277,-16.370003],[31.902775,-16.35945],[31.899441,-16.35556],[31.782219,-16.26083],[31.721943,-16.214725],[31.708332,-16.20639],[31.66222,-16.19861],[31.58388,-16.19278],[31.57027,-16.192223],[31.559166,-16.19528],[31.553333,-16.19472],[31.51083,-16.18639],[31.428608,-16.16361],[31.42388,-16.16111],[31.400833,-16.146389],[31.345,-16.09556],[31.342499,-16.09111],[31.34333,-16.078056],[31.34083,-16.067501],[31.31194,-16.032501],[31.276665,-16.018612],[31.157219,-15.994722],[31.143608,-15.994167],[31.137497,-15.995001],[31.07111,-16.01528],[30.820831,-16.00445],[30.422775,-16.009167],[30.421944,-16.00194],[30.417292,-15.64214],[30.415756,-15.63187],[30.39666,-15.59361],[30.388054,-15.47889],[30.36444,-15.344168],[30.360554,-15.334723],[30.355,-15.32667],[30.332775,-15.3125],[30.303333,-15.29139],[30.273052,-15.259724],[30.27,-15.25583],[30.25333,-15.21861],[30.251663,-15.21361],[30.227776,-15.139446],[30.21917,-15.09611],[30.213017,-14.98172],[30.343609,-14.967779],[30.504719,-14.884724],[30.527775,-14.87583],[30.602497,-14.84972],[30.80805,-14.778057],[30.91222,-14.75056],[31.04583,-14.71639],[31.094444,-14.71167],[31.11639,-14.70833],[31.296665,-14.667501],[31.312775,-14.663612],[31.463333,-14.62528],[31.48472,-14.619722],[31.49944,-14.614168],[31.508053,-14.60889],[31.528053,-14.59417],[31.535275,-14.587223],[31.548332,-14.579445],[31.693054,-14.50445],[31.708611,-14.499723],[31.730831,-14.495],[31.7825,-14.48695],[31.809719,-14.48056],[31.835552,-14.472778],[31.855553,-14.46556],[31.874996,-14.457779],[31.950832,-14.42361],[32.094719,-14.37722],[32.221939,-14.34306],[32.238609,-14.33972],[32.34333,-14.317223],[32.372772,-14.30833],[32.983887,-14.09667],[33.222229,-14.012566],[33.257774,-14.03611],[33.301109,-14.1375],[33.303604,-14.148056],[33.34333,-14.205],[33.349442,-14.212778],[33.434998,-14.32139],[33.531944,-14.431667],[33.633331,-14.53972],[33.696388,-14.53306],[33.777222,-14.51778],[33.892494,-14.48944],[34.12944,-14.44389],[34.358887,-14.385557],[34.368607,-14.386391],[34.379166,-14.389446],[34.388885,-14.397223],[34.41083,-14.429724],[34.426941,-14.46167],[34.44611,-14.49611],[34.460548,-14.51917],[34.468605,-14.52889],[34.478333,-14.53778],[34.490273,-14.546946],[34.501938,-14.554167],[34.522217,-14.57167],[34.532219,-14.592779],[34.541107,-14.615557],[34.561943,-14.76639],[34.588882,-14.96389],[34.568329,-15.05639],[34.566109,-15.06583],[34.56361,-15.11778],[34.573051,-15.20667],[34.577774,-15.21639],[34.586792,-15.22374],[34.59027,-15.23306],[34.59333,-15.25306],[34.589722,-15.282778],[34.566383,-15.32194],[34.556107,-15.33417],[34.543327,-15.33389],[34.533333,-15.337778],[34.523888,-15.34722],[34.436661,-15.464169],[34.431938,-15.475],[34.425278,-15.496668],[34.427773,-15.50694],[34.43388,-15.51722],[34.43805,-15.526945],[34.443329,-15.5475],[34.43833,-15.611668],[34.428329,-15.64417],[34.42472,-15.655001],[34.41861,-15.66639],[34.375832,-15.714169],[34.346939,-15.736668],[34.324165,-15.74361],[34.30055,-15.759445],[34.280273,-15.7775],[34.270828,-15.7875],[34.262772,-15.798334],[34.251106,-15.837778],[34.25444,-15.888889],[34.255554,-15.89917],[34.258888,-15.90861],[34.263611,-15.91639],[34.271942,-15.921946],[34.281105,-15.927502],[34.29166,-15.93195],[34.31055,-15.94195],[34.319717,-15.9475],[34.328049,-15.954445],[34.334999,-15.96139],[34.417496,-16.04639],[34.423882,-16.05389],[34.427773,-16.063614],[34.429718,-16.07445],[34.428604,-16.08667],[34.424995,-16.097504],[34.408607,-16.12583],[34.406387,-16.138058],[34.408607,-16.19334],[34.410553,-16.205],[34.43471,-16.261112],[34.440277,-16.26945],[34.44722,-16.277225],[34.454163,-16.284168],[34.462494,-16.29028],[34.473053,-16.29472],[34.492218,-16.294445],[34.50444,-16.292503],[34.518608,-16.293613],[34.531387,-16.295834],[34.543327,-16.29889],[34.553886,-16.30306],[34.562218,-16.308613],[34.57,-16.315834],[34.575554,-16.32389],[34.578888,-16.333614],[34.594162,-16.37945],[34.66,-16.453613],[34.719994,-16.50806],[34.767494,-16.54639],[34.837494,-16.61778],[34.844444,-16.625278],[34.99472,-16.790836],[35.00222,-16.797779],[35.018326,-16.81028],[35.027496,-16.81583],[35.03805,-16.82028],[35.049438,-16.823891],[35.07,-16.824722],[35.082222,-16.823059],[35.115555,-16.81611],[35.128326,-16.816948],[35.137497,-16.822781],[35.143883,-16.831112],[35.146385,-16.84111],[35.14527,-16.92834],[35.143608,-16.941669],[35.13916,-16.95195],[35.133331,-16.960003],[35.126106,-16.96722],[35.108887,-16.977779],[35.09166,-16.98778],[35.07278,-16.997501],[35.064163,-17.00361],[35.057777,-17.010281],[35.053329,-17.020279],[35.052498,-17.02722],[35.054993,-17.03806],[35.083885,-17.125],[35.09166,-17.12917],[35.12722,-17.130558],[35.271942,-17.135281],[35.290054,-17.134266],[35.301941,-17.115],[35.306389,-17.105],[35.306938,-17.09806],[35.30805,-17.06139],[35.296661,-17.015278],[35.282776,-16.96639],[35.289162,-16.86778],[35.302216,-16.80917],[35.27805,-16.70472],[35.255829,-16.677223],[35.227776,-16.648613],[35.22361,-16.645557],[35.213333,-16.641392],[35.190826,-16.633892],[35.176941,-16.627224],[35.16861,-16.621113],[35.156105,-16.599167],[35.1353,-16.553375],[35.14194,-16.54611],[35.19389,-16.506668],[35.237495,-16.48028],[35.245277,-16.47389],[35.251663,-16.45861],[35.254997,-16.40056],[35.274162,-16.30445],[35.28833,-16.23389],[35.293327,-16.22472],[35.296661,-16.220837],[35.402771,-16.129448],[35.41166,-16.12445],[35.429443,-16.12167],[35.435829,-16.12167],[35.448608,-16.12389],[35.480553,-16.13],[35.491661,-16.133614],[35.494995,-16.1375],[35.54028,-16.16445],[35.709442,-16.11056],[35.774162,-16.070557],[35.786942,-16.0625],[35.794167,-16.05528],[35.799164,-16.0475],[35.814438,-16.019447],[35.817497,-16.00778],[35.83166,-15.855],[35.862495,-15.47639],[35.86312,-15.45836],[35.864441,-15.453611],[35.867218,-15.419445],[35.853882,-15.3725],[35.840195,-15.324121],[35.804443,-15.195557],[35.800278,-15.17778],[35.86805,-15.019724],[35.91777,-14.902224],[35.924164,-14.885557],[35.881104,-14.885],[35.87861,-14.77403],[35.877502,-14.69978],[35.87722,-14.668612],[35.87722,-14.656113],[35.872459,-14.65115],[35.821388,-14.60278],[35.544716,-14.269445],[35.53,-14.25111],[35.504997,-14.19167],[35.490829,-14.155834],[35.205551,-13.84445],[35.171104,-13.796112],[35.095276,-13.68611],[34.899437,-13.5225],[34.86599,-13.50631],[34.830826,-13.496946],[34.658051,-13.49639],[34.586105,-13.38222],[34.577217,-13.365002],[34.566383,-13.34222],[34.564995,-13.33694],[34.563049,-13.31889],[34.563049,-13.29972],[34.563049,-13.28889],[34.556107,-13.04611],[34.54916,-13.01333],[34.541664,-12.960556],[34.539719,-12.935835],[34.53833,-12.91722],[34.534164,-12.84167],[34.532776,-12.78278],[34.529999,-12.75889],[34.523888,-12.714724],[34.50944,-12.65861],[34.506104,-12.64917],[34.501938,-12.63917],[34.495827,-12.62583],[34.479996,-12.601667],[34.473053,-12.589169],[34.465553,-12.56889],[34.449165,-12.519445],[34.444443,-12.503334],[34.424438,-12.410278],[34.40749,-12.31944],[34.373291,-12.24642],[34.371109,-12.23556],[34.367775,-12.21889],[34.368889,-12.19472],[34.371109,-12.177502],[34.375275,-12.155834],[34.381386,-12.13667],[34.387497,-12.12306],[34.41083,-12.08083],[34.464165,-11.991112],[34.469719,-11.98306],[34.475273,-11.97556],[34.514999,-11.923334],[34.55138,-11.87389],[34.554161,-11.869722],[34.60611,-11.78111],[34.610275,-11.7725],[34.614441,-11.763889],[34.619164,-11.74917],[34.62944,-11.714169],[34.63361,-11.69195],[34.634163,-11.66722],[34.63222,-11.62889],[34.631386,-11.62278],[34.62722,-11.606668],[34.625275,-11.60195],[34.623329,-11.58528],[34.623886,-11.580557],[34.626106,-11.57583],[34.703331,-11.57583],[34.890549,-11.573891],[34.95777,-11.5725],[34.96673,-11.572111],[35.011108,-11.57333],[35.238609,-11.57583],[35.43471,-11.592779],[35.439438,-11.59472],[35.570274,-11.6075],[35.576385,-11.606668],[35.643608,-11.58944],[35.652496,-11.584723],[35.672493,-11.55833],[35.73333,-11.48333],[35.81694,-11.420834],[35.82666,-11.416668],[35.83194,-11.415279],[35.83833,-11.41472],[35.933327,-11.430834],[35.943054,-11.43472],[36.163055,-11.577778],[36.173332,-11.593889],[36.17889,-11.64167],[36.176666,-11.645557],[36.173882,-11.6625],[36.173882,-11.66778],[36.175278,-11.6725],[36.185555,-11.70417],[36.18972,-11.70667],[36.26722,-11.70945],[36.293884,-11.7075],[36.3425,-11.69611],[36.375549,-11.683889],[36.51111,-11.713335],[36.51722,-11.720835],[36.520828,-11.723612],[36.550278,-11.74028],[36.55555,-11.74083],[36.56194,-11.74028],[36.677773,-11.71472],[36.724998,-11.68195],[36.746109,-11.66389],[36.766106,-11.643612],[36.785828,-11.6175],[36.806389,-11.58583],[36.816666,-11.57583],[36.824997,-11.570557],[36.82972,-11.56861],[36.834442,-11.56917],[36.997772,-11.59139],[37.10805,-11.66445],[37.116104,-11.66917],[37.125832,-11.67333],[37.18805,-11.68944],[37.193604,-11.690556],[37.267776,-11.70278],[37.396385,-11.722778],[37.402771,-11.723612],[37.462044,-11.727329],[37.474716,-11.71806],[37.47805,-11.71472],[37.597221,-11.63972],[37.693329,-11.60278],[37.791939,-11.56111],[37.815826,-11.538334],[37.818054,-11.534168],[37.823326,-11.51944],[37.824715,-11.51472],[37.824715,-11.50944],[37.818054,-11.496668],[37.811661,-11.490002],[37.80971,-11.48528],[37.80971,-11.48],[37.81916,-11.451113],[37.86166,-11.33889],[37.868607,-11.32667],[37.90028,-11.304445],[37.927498,-11.29111],[37.94138,-11.285],[37.962494,-11.27892],[38.026939,-11.262222],[38.038605,-11.259445],[38.096695,-11.25633],[38.173607,-11.285],[38.330551,-11.345001],[38.337219,-11.350834],[38.35305,-11.36167],[38.361382,-11.366945],[38.377777,-11.377224],[38.411942,-11.395279],[38.421661,-11.39917],[38.491707,-11.41531],[38.533882,-11.3725],[38.57111,-11.342779],[38.62722,-11.29972],[38.643051,-11.28917],[38.655273,-11.28111],[38.672493,-11.27083],[38.897774,-11.172224],[38.913605,-11.16806],[38.931389,-11.16556],[39.12888,-11.1425],[39.134438,-11.141945],[39.140549,-11.1425],[39.174164,-11.15472],[39.19111,-11.16417],[39.20361,-11.172224],[39.208328,-11.17417],[39.226944,-11.17472],[39.239166,-11.17361],[39.256943,-11.17083],[39.268051,-11.16806],[39.284996,-11.15806],[39.300278,-11.14667],[39.315277,-11.13528],[39.391388,-11.078056],[39.49944,-11],[39.50833,-10.99528],[39.518051,-10.991945],[39.527771,-10.98861],[39.66389,-10.94611],[39.683884,-10.94556],[39.689995,-10.94472],[39.695549,-10.94333],[39.766937,-10.92056],[39.788055,-10.90778],[39.802498,-10.89583],[39.811943,-10.885557],[39.831108,-10.87139],[39.846939,-10.86083],[39.868332,-10.848612],[39.89833,-10.83167],[39.942215,-10.815001],[39.962776,-10.808889],[40.019722,-10.77917],[40.158882,-10.6775],[40.333611,-10.571945],[40.342499,-10.56722],[40.35416,-10.55917],[40.381386,-10.540279],[40.424721,-10.503056],[40.430832,-10.49583],[40.436813,-10.47817],[40.447777,-10.471111],[40.511383,-10.47972],[40.521111,-10.48417],[40.56944,-10.59722],[40.584442,-10.65417],[40.588333,-10.68667],[40.503052,-10.79111],[40.551384,-10.79972],[40.596664,-10.82],[40.607773,-10.8275],[40.61749,-10.83583],[40.61694,-10.847502],[40.61249,-10.85722],[40.604164,-10.8675],[40.57527,-10.878889],[40.537498,-10.895279],[40.528885,-10.900557],[40.512772,-10.923334],[40.507774,-10.93139],[40.503609,-10.94111],[40.501938,-10.95222],[40.501389,-10.96389],[40.500832,-11.01806],[40.500832,-11.031946]],[[34.602776,-12.01195],[34.618332,-12.03722],[34.623886,-12.036667],[34.62722,-12.033335],[34.63,-12.02917],[34.631386,-12.02389],[34.631386,-12.01806],[34.63,-12.0125],[34.623886,-12.005835],[34.61972,-12.00306],[34.613609,-12.00306],[34.608887,-12.00445],[34.604721,-12.00722],[34.602776,-12.01195]],[[34.723885,-12.032778],[34.716385,-12.04417],[34.70472,-12.07833],[34.706108,-12.082779],[34.70888,-12.0875],[34.716385,-12.09306],[34.726105,-12.09639],[34.732216,-12.09556],[34.736938,-12.09361],[34.744438,-12.088335],[34.747215,-12.08417],[34.748055,-12.079723],[34.75471,-12.04417],[34.752777,-12.039446],[34.748604,-12.036667],[34.726662,-12.031946],[34.723885,-12.032778]]]]}}]}';
    }
}
