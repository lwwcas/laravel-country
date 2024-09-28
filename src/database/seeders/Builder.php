<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Enum\GpsFormatEnum;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

class Builder
{

    /**
     * Create a country
     *
     * @param Seeder $country
     * @return void
     * @throws Exception
     */
    public static function country(Seeder $country): void
    {
        if (property_exists($country, 'flag_colors') == false) {
        //    $this->oldBuilder($country);
           return;
        }

        self::builder2($country);
        return;
    }

    protected static function builder2(Seeder $country)
    {
        $region = CountryRegion::whereSlug($country->region, $country->lang)
            ->firstOrFail();

        $countryCreated = $region->countries()->create([
            'capital' => $country->capital,
            'official_name' => $country->official_name,
            'iso_alpha_2' => $country->iso_alpha_2,
            'iso_alpha_3' => $country->iso_alpha_3,
            'iso_numeric' => $country->iso_numeric,
            'international_phone' => $country->international_phone,
            'geoname_id' => $country->geoname_id,
            'wmo' => $country->wmo,
            'independence_day' => $country->independence_day,
            'population' => $country->population,
            'area' => $country->area,
            'gdp' => $country->gdp,
            'languages' => $country->languages,
            'tld' => $country->tld,
            'alternative_tld' => $country->alternative_tlds,
            'borders' => array_map('strtolower', array_column($country->borders, 'iso_alpha_2')) ?? [],
            'timezones' => [
                'main' => $country->timezones[0] ?? [],
                'others' => array_slice($country->timezones, 1) ?? [],
            ],
            'currency' => [
                'name' => $country->currency['name'] ?? null,
                'code' => $country->currency['code'] ?? null,
                'symbol' => $country->currency['symbol'] ?? null,
                'banknotes' => $country->currency['banknotes'] ?? [],
                'coins' => [
                    'main' => $country->currency['coins_main'] ?? [],
                    'sub' => $country->currency['coins_sub'] ?? [],
                ],
                'unit' => [
                    'main' => $country->currency['main_unit'] ?? null,
                    'sub' => $country->currency['main_unit'] ?? null,
                    'to_unit' => $country->currency['sub_unit_to_unit'] ?? null,
                ],
            ],
            'flag_emoji' => $country->emoji ?? [],
            'flag_colors' => array_column($country->flag_colors, 'name'),
            'flag_colors_web' => array_column($country->flag_colors, 'web_name'),
            'flag_colors_contrast' => array_column($country->flag_colors, 'contrast'),
            'flag_colors_hex' => array_column($country->flag_colors, 'hex'),
            'flag_colors_rgb' => array_column($country->flag_colors, 'rgb'),
            'flag_colors_cmyk' => array_column($country->flag_colors, 'cmyk'),
            'flag_colors_hsl' => array_column($country->flag_colors, 'hsl'),
            'flag_colors_hsv' => array_column($country->flag_colors, 'hsv'),
            'flag_colors_pantone' => array_column($country->flag_colors, 'pantone'),

            'visible' => true,

            'en' => [
                'name' => $country->name,
                'slug' => Str::slug($country->name, '-'),
            ],
        ]);

        $countryCreated->extras()->create([
            'national_sport' => $country->national_sport,
            'cybersecurity_agency' => $country->cybersecurity_agency,
            'popular_technologies' => $country->popular_technologies ?? [],
            'internet' => [
                'speed' => [
                    'average_fixed' => $country->internet_speed['average'] ?? null,
                    'average_mobile' => $country->internet_speed['average'] ?? null,
                ],
                'penetration' => $country->internet_penetration,

            ],
            'religions' => $country->religions ?? [],
            'international_organizations' => $country->international_organizations ?? [],
        ]);

        $countryCreated->coordinates()->create([
            'latitude' => $country->coordinates['latitude'] ?? null,
            'longitude' => $country->coordinates['longitude'] ?? null,
            'degrees_with_decimal' => $country->coordinates['dd'] ?? null,
            'degrees_minutes_seconds' => $country->coordinates['dms'] ?? null,
            'degrees_and_decimal_minutes' => $country->coordinates['dm'] ?? null,
            'gps' => [],
        ]);
    }

    protected function oldBuilder(Seeder $country)
    {
        $region = CountryRegion::whereSlug($country->region, $country->lang)
            ->firstOrFail();

        $_country = $region->countries()->create([
            'official_name' => $country->official_name,
            'iso_alpha_2' => $country->iso_alpha_2,
            'iso_alpha_3' => $country->iso_alpha_3,
            'iso_numeric' => $country->iso_numeric,
            'international_phone' => $country->international_phone,
            'languages' => $country->languages,
            'tld' => json_encode($country->tld),
            'wmo' => $country->wmo,
            'geoname_id' => $country->geoname_id,
            'emoji' => $country->emoji,
            'color_hex' => $country->color['hex'],
            'color_rgb' => $country->color['rgb'],
            'coordinates' => $country->coordinates,
            'coordinates_limit' => $country->coordinates_limit,
            'visible' => true,
            'en' => [
                'name' => $country->name,
                'slug' => Str::slug($country->name, '-'),
            ],
        ]);

        $geographical = $country->geographical;
        if (isset($geographical['type'])) {
            $_country->geographical()->create([
                'type' => $geographical['type'],
                'features_type' => $geographical['features'][0]['type'],
                'properties' => json_encode($geographical['features'][0]['properties']),
                'geometry' => json_encode($geographical['features'][0]['geometry']),
            ]);
        }
    }

    /**
     * Create regions translations.
     *
     * @param array $regions
     * @param String $lang
     * @return void
     * @throws Exception
     */
    public static function regionsTranslations(array $regions, String $lang): void
    {
        DB::beginTransaction();

        foreach ($regions as $slug => $region) {
            $response = CountryRegion::whereTranslation('locale', 'en')
                ->whereTranslation('slug', $slug)
                ->first();

            if ($response == null) {
                DB::rollBack();
                throw new Exception('Region ' . $region . ' not found');
            }

            CountryRegionTranslation::create([
                'lc_region_id' => $response->id,
                'locale' => $lang,
                'slug' => Str::slug($region, '-'),
                'name' => Str::title(trim($region)),
            ]);
        }

        DB::commit();
        return;
    }

    /**
     * Create countries translations.
     *
     * @param array $countries
     * @param String $lang
     * @return void
     */
    public static function countriesTranslations(array $countries, String $lang): void
    {
        DB::beginTransaction();

        foreach ($countries as $iso => $country) {
            $response = Country::where('iso_alpha_2', $iso)
                ->orWhere('iso_alpha_3', $iso)
                ->first();

            if ($response == null) {
                continue;
            }

            CountryTranslation::create([
                'lc_country_id' => $response->id,
                'locale' => $lang,
                'slug' => Str::slug($country, '-'),
                'name' => Str::title(trim($country)),
            ]);
        }

        DB::commit();
        return;
    }
}
