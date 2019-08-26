<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Eloquent model for lacations.
 *
 * @author Magni Keita <magni.keita@andaletech.com>
 * @author Biri Sylla <biri.sylla@andaletech.com>
 * @license MIT
 */
class Location extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    #region accessors and mutators

    /**
     * Accessors to get location type name.
     *
     * @return string
     */
    public function getLocationTypeNameAttribute()
    {
        return $this->locationType->name;
    }

    /**
     * Accessors to check if location is of type region .
     *
     * @return bool
     */
    public function getIsRegionAttribute()
    {
        return $this->isLocationOfType('region');
    }

    /**
     * Accessors to check if location is of type commune .
     *
     * @return bool
     */
    public function getIsCommuneAttribute()
    {
        return $this->isLocationOfType('commune');
    }

    /**
     * Accessors to check if location is of type circle .
     *
     * @return bool
     */
    public function getIsCercleAttribute()
    {
        return $this->isLocationOfType('cercle');
    }

    /**
     * Accessors to check if location is of type quartier .
     *
     * @return bool
     */
    public function getIsQuartierAttribute()
    {
        return $this->isLocationOfType('quartier');
    }

    /**
     * Check if location is of type $typeName.
     *
     * @param string $typeName
     * @return bool
     */
    public function isLocationOfType(string $typeName)
    {
        return 0 == strcasecmp($typeName, $this->location_type_name);
    }
    #endregion accessors and mutators

    #region relationships

    /**
     * Location that are direct this location.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany('App\Models\Location', 'parent_id');
    }

    #endregion relationships

    #region query scope
    /**
     * Limit result to locations of type regions.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRegion(Builder $query)
    {
        return $query->whereHas('locationType', function ($subQ) {
            return $subQ->region();
        });
    }

    /**
     * Limit result to locations of type cercles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCercle(Builder $query)
    {
        return $query->whereHas('locationType', function ($subQ) {
            return $subQ->cercle();
        });
    }

    /**
     * Limit result to locations of type communes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCommune(Builder $query)
    {
        return $query->whereHas('locationType', function ($subQ) {
            return $subQ->commune();
        });
    }

    /**
     * Limit result to locations of type quartiers.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeQuartier(Builder $query)
    {
        return $query->whereHas('locationType', function ($subQ) {
            return $subQ->quartier();
        });
    }

    #endregion query scope
    
    public function getCommunes(Collection & $collection)
    {
        $areLocationsLoaded = $this->relationLoaded('locations');
        if ($this->is_commune) {
            $collection->push($this);
        }
        foreach ($this->locations as $aLocation) {
            $aLocation->getCommunes($collection);
        }
        if (empty($areLocationsLoaded)) {
            $this->unsetRelation('locations');
        }
    }

    #region override parent methods

    /**
     * Convert model to array.
     *
     * @return array
     */
    public function toArray()
    {
        $array = parent::toArray();
        $array['location_type_name'] = $this->locationType->name;
        array_forget($array, 'location_type');
        return $array;
    }
    #endregion override parent methods
    #region relationships
    /**
     * relationships with locationType.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function locationType()
    {
        return $this->belongsTo('App\Models\LocationType');
    }
    #endregion relationships
}
