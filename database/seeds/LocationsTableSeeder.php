<?php

use Illuminate\Database\Seeder;
use App\Models\LocationType;
use App\Models\Location;

/**
 * Seeds all locations into the locations table.
 *
 * @author Magni Keita <magni.keita@andaletech.com>
 * @author Biri Sylla <biri.sylla@andaletech.com>
 * @license MIT
 */
class LocationsTableSeeder extends Seeder
{
    public $bamakoData;
    public $gaoData;
    public $kayesData;
    public $kidalData;
    public $koulikoroData;
    public $menakaData;
    public $moptiData;
    public $segouData;
    public $sikassoData;
    public $taoudenitData;
    public $tombouctouData;
    public $typeQuartier;
    public $typeCommune;
    public $typeCercle;
    public $typeRegion;
    public $typeDistrict;
    public function __construct()
    {
        $this->typeDistrict = LocationType::district()->first();
        $this->typeRegion = LocationType::region()->first();
        $this->typeCercle = LocationType::cercle()->first();
        $this->typeCommune = LocationType::commune()->first();
        $this->typeQuartier = LocationType::quartier()->first();
        $this->bamakoData = include database_path('seeds/locations/Bamako.php');
        $this->gaoData = include database_path('seeds/locations/Gao.php');
        $this->kayesData = include database_path('seeds/locations/Kayes.php');
        $this->kidalData = include database_path('seeds/locations/Kidal.php');
        $this->koulikoroData = include database_path('seeds/locations/Koulikoro.php');
        $this->segouData = include database_path('seeds/locations/Segou.php');
        $this->sikassoData = include database_path('seeds/locations/Sikasso.php');
        $this->menakaData = include database_path('seeds/locations/Menaka.php');
        $this->moptiData = include database_path('seeds/locations/Mopti.php');
        $this->taoudenitData = include database_path('seeds/locations/Taoudenit.php');
        $this->tombouctouData = include database_path('seeds/locations/Tombouctou.php');
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedBamako();
        $this->seedKayes();
        $this->seedKoulikoro();
        $this->seedSikasso();
        $this->seedSegou();
        $this->seedMopti();
        $this->seedTombouctou();
        $this->seedGao();
        $this->seedKidal();
        $this->seedTaoudenit();
        $this->seedMenaka();
    }

    /**
     * Seed Bamako's communes and towns.
     *
     * @return void
     */
    private function seedBamako()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $bamako = $this->seedDistrict(array_only($this->bamakoData, $attributes));
        foreach (array_get($this->bamakoData, 'communes', []) as $aCommuneData) {
            $aCommuneData['parent_id'] = $bamako->id;
            $aCommune = $this->seedCommune(array_only($aCommuneData, $attributes));
            foreach (array_get($aCommuneData, 'quartiers', []) as $aTownData) {
                $aTownData['parent_id'] = $aCommune->id;
                $this->seedQuartier($aTownData);
            }
        }
    }
    #region Regions
    
    /**
     * Seed Kayes and Kayes's circles and communes.
     *
     * @return void
     */
    private function seedKayes()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $kayes = $this->seedRegion(array_only($this->kayesData, $attributes));
        foreach (array_get($this->kayesData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $kayes->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Koulikoro and Koulikoro's circles and communes.
     *
     * @return void
     */
    private function seedKoulikoro()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $koulikoro = $this->seedRegion(array_only($this->koulikoroData, $attributes));
        foreach (array_get($this->koulikoroData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $koulikoro->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Sikasso and Sikasso's circles and communes.
     *
     * @return void
     */
    private function seedSikasso()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $sikasso = $this->seedRegion(array_only($this->sikassoData, $attributes));
        foreach (array_get($this->sikassoData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $sikasso->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Segou and Segou's circles and communes.
     *
     * @return void
     */
    private function seedSegou()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $segou = $this->seedRegion(array_only($this->segouData, $attributes));
        foreach (array_get($this->segouData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $segou->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Mopti and Mopti's circles and communes.
     *
     * @return void
     */
    private function seedMopti()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $mopti = $this->seedRegion(array_only($this->moptiData, $attributes));
        foreach (array_get($this->moptiData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $mopti->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Tombouctou and Tombouctou's circles and communes.
     *
     * @return void
     */
    private function seedTombouctou()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $tombouctou = $this->seedRegion(array_only($this->tombouctouData, $attributes));
        foreach (array_get($this->tombouctouData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $tombouctou->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Gao and Gao's circles and communes.
     *
     * @return void
     */
    private function seedGao()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $gao = $this->seedRegion(array_only($this->gaoData, $attributes));
        foreach (array_get($this->gaoData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $gao->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Kidal and Kidal's circles and communes.
     *
     * @return void
     */
    private function seedKidal()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $kidal = $this->seedRegion(array_only($this->kidalData, $attributes));
        foreach (array_get($this->kidalData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $kidal->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }

    /**
     * Seed Taoudenit and Taoudenit's circles and communes.
     *
     * @return void
     */
    private function seedTaoudenit()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $taoudenit = $this->seedRegion(array_only($this->taoudenitData, $attributes));
        foreach (array_get($this->taoudenitData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $taoudenit->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }
    
    /**
     * Seed Menaka and Menaka's circles and communes.
     *
     * @return void
     */
    private function seedMenaka()
    {
        $attributes = ['parent_id', 'name', 'population', 'area', 'extra', 'longitude', 'latitude'];
        $menaka = $this->seedRegion(array_only($this->menakaData, $attributes));
        foreach (array_get($this->menakaData, 'cercles', []) as $aCercleData) {
            $aCercleData['parent_id'] = $menaka->id;
            $aCercle = $this->seedCercle(array_only($aCercleData, $attributes));
            foreach (array_get($aCercleData, 'communes', []) as $aCommuneData) {
                $aCommuneData['parent_id'] = $aCercle->id;
                $this->seedCommune($aCommuneData);
            }
        }
    }

    #endregion Regions

    /**
     * Seed location of district type
     *
     * @param array $data
     * @return void
     */
    private function seedDistrict(array $data)
    {
        return $this->seedLocationOfTypeId($this->typeDistrict->id, $data);
    }

    /**
     * Seed location of region type
     *
     * @param array $data
     * @return void
     */
    private function seedRegion(array $data)
    {
        return $this->seedLocationOfTypeId($this->typeRegion->id, $data);
    }

    /**
     * Seed location of circle type
     *
     * @param array $data
     * @return void
     */
    private function seedCercle(array $data)
    {
        return $this->seedLocationOfTypeId($this->typeCercle->id, $data);
    }

    /**
     * Seed location of commune type
     *
     * @param array $data
     * @return void
     */
    private function seedCommune(array $data)
    {
        return $this->seedLocationOfTypeId($this->typeCommune->id, $data);
    }

    /**
     * Seed location of quartier type
     *
     * @param array $data
     * @return void
     */
    private function seedQuartier(array $data)
    {
        return $this->seedLocationOfTypeId($this->typeQuartier->id, $data);
    }

    /**
     * Seed locations using their type id
     *
     * @param integer $typeId
     * @param array $data
     * @return array
     */
    private function seedLocationOfTypeId($typeId, array $data)
    {
        $location = Location::where('name', array_get($data, 'name'))->where('location_type_id', $typeId);
        $data['location_type_id'] = $typeId;
        $location = $location->first();
        if (empty($location)) {
            $location = new Location();
            $location = DatabaseSeeder::setModelAttributes($location, $data, true);
        }
        return $location;
    }
}
