<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Eloquent model for location types.
 *
 * @author Magni Keita <magni.keita@andaletech.com>
 * @author Biri Sylla <biri.sylla@andaletech.com>
 * @license MIT
 */
class LocationType extends Model
{
    /**
     * Limit result to district type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDistrict(Builder $query)
    {
        return $query->where('name', 'district');
    }

    /**
     * Limit result to region type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRegion(Builder $query)
    {
        return $query->where('name', 'region');
    }

    /**
     * Limit result to cercle type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCercle(Builder $query)
    {
        return $query->where('name', 'cercle');
    }

    /**
     * Limit result to commune type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCommune(Builder $query)
    {
        return $query->where('name', 'commune');
    }

    /**
     * Limit result to quartier(neighbourhood) type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeQuartier(Builder $query)
    {
        return $query->where('name', 'quartier');
    }
}
