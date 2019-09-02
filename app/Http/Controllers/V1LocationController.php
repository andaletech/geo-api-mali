<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Controller for handling all locations relatifs requests.
 *
 * @author Magni Keita <magni.keita@andaletech.com>
 * @author Biri Sylla <biri.sylla@andaletech.com>
 * @license MIT
 */
class V1LocationController extends BaseController
{
    /**
     * Get all locations and allow research.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Location::query()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'locations' => $query->get()]);
    }

    public function getLocationLocations(Request $request, $id)
    {
        $location = Location::find($id);
        if (empty($location)) {
            return response()->json(['status' => 'failed', ], 404);
        }
        return response()->json(['status' => 'succes', 'locations' => $location->locations]);
    }

    /**
     * Get a location.
     *
     * @param integer $id
     * @return json
     */
    public function showLocation($id)
    {
        $location = Location::query()->find($id);
        if ($location) {
            return response()->json(['status' => 'succes', 'locations' => $location]);
        }
        return response()->json(['Status' => 'error', 'Message' => 'Ressource not found', 'code' => '404'], Response::HTTP_NOT_FOUND);
    }

    /**
     * Get cercles of a region.
     *
     * @param Request $request
     * @param integer $id
     * @return json
     */
    public function getCerclesOfRegion(Request $request, $id)
    {
        $query = Location::query()->cercle()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'cercles' => $query->where('parent_id', $id)->get()]);
    }

    /**
     * Get communes of a location.
     *
     * @param Request $request
     * @param integer $id
     * @return json
     */
    public function getCommunesOfLocation(Request $request, $id)
    {
        $location = Location::find($id);
        if (empty($location)) {
            return response()->json(['status' => 'failed', ], 404);
        }
        $communes = new Collection();
        $location->getCommunes($communes);
        return response()->json(['status' => 'succes', 'communes' => $communes]);
    }

    /**
     * Get all regions and allow research
     *
     * @param Request $request
     * @return json
     */
    public function getRegions(Request $request)
    {
        $query = Location::query()->region()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'regions' => $query-> get()]);
    }

    /**
     * Get a region
     *
     * @param integer $id
     * @return json
     */
    public function showRegion($id)
    {
        $region = Location::query()->find($id);
        if ($region) {
            return response()->json(['status' => 'succes', 'regions' => $region]);
        }
        return response()->json(['Status' => 'error', 'Message' => 'Ressource not found', 'code' => '404'], Response::HTTP_NOT_FOUND);
    }

    /**
     * Get all circles and allow research.
     *
     * @return json
     */
    public function getCercles(Request $request)
    {
        $query = Location::query()->cercle()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'regions' => $query-> get()]);
    }

    /**
     * Get a cercle
     *
     * @param integer $id
     * @return json
     */
    public function showCercle($id)
    {
        $cercle = Location::cercle()->find($id);
        if ($cercle) {
            return response()->json(['status' => 'succes', 'regions' => $cercle]);
        }
        return response()->json(['Status' => 'error', 'Message' => 'Ressource not found', 'code' => '404'], Response::HTTP_NOT_FOUND);
    }

    /**
     * Get all communes.
     *
     * @return json
     */
    public function getCommunes(Request $request)
    {
        $query = Location::query()->commune()->searchByName($request->query('name'));
        return response()->json(['status' => 'success', 'locations' => $query-> get()]);
    }

    /**
     * Get a commune
     *
     * @param integer $id
     * @return json
     */
    public function showCommune($id)
    {
        $commune = Location::commune()->find($id);
        if ($commune) {
            return response()->json(['status' => 'succes', 'regions' => $commune]);
        }
        return response()->json(['Status' => 'error', 'Message' => 'Ressource not found', 'code' => '404'], Response::HTTP_NOT_FOUND);
    }

    /**
     * Get communes of a cercle.
     *
     * @param Request $request
     * @param integer $id
     * @return json
     */
    public function getCommunesOfCercle(Request $request, $id)
    {
        $query = Location::query()->commune()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'communes' => $query->where('parent_id', $id)->get()]);
    }

    /**
     * Get all quartiers.
     *
     * @return json
     */
    public function getQuartiers(Request $request)
    {
        $query = Location::query()->quartier()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'locations' => $query-> get()]);
    }

    /**
     * Get a quartier
     *
     * @param integer $id
     * @return json
     */
    public function showQuartier($id)
    {
        $quartier = Location::quartier()->find($id);
        if ($quartier) {
            return response()->json(['status' => 'succes', 'quartiers' => $quartier]);
        }
        return response()->json(['Status' => 'error', 'Message' => 'Ressource not found', 'code' => '404'], Response::HTTP_NOT_FOUND);
    }

    /**
     * Get quarter of a commune.
     *
     * @param Request $request
     * @param integer $id
     * @return json
     */
    public function getQuartiersOfCommune(Request $request, $id)
    {
        $query = Location::query()->quartier()->searchByName($request->query('name'));
        return response()->json(['status' => 'succes', 'quartier' => $query->where('parent_id', $id)->get()]);
    }
}
