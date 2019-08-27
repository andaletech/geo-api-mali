



## About geoapimali

Geoapimali is an API set up to facilitate access to developers to the resources of the territorial communities of Mali.
With geoapimali you can:
- Search localities by name, (or by geographic coordinates - coming soon);
- Search localities by type (District, Region, Cercle, Commune, Quartier);
- To know the belonging and dependencies of a locality;

## Examples

- Get All locations:
    - ```GET``` <a href="https://geo.apimali.com/v1/locations" target="_blank">https://geo.apimali.com/v1/locations</a>
- Get A Single location By ID:
    - ```GET``` <a href="https://geo.apimali.com/v1/locations/1" target="_blank">https://geo.apimali.com/v1/locations/1</a>
- Get All Regions:
    - ```GET``` <a href="https://geo.apimali.com/v1/regions" target="_blank">https://geo.apimali.com/v1/regions</a>
- Get All Cercles:
    - ```GET``` <a href="https://geo.apimali.com/v1/cercles" target="_blank">https://geo.apimali./v1/cercles</a>
- Get All Communes:
    - ```GET``` <a href="https://geo.apimali.com/v1/communes" target="_blank">https://geo.apimali.com/v1/communes</a>
- Get All Quartiers:
    - ```GET``` <a href="https://geo.apimali.com/v1/quartiers" target="_blank">https://geo.apimali.com/v1/quartiers</a>
- Search All Locations whose name contains bama:
    - **Request**: ```GET``` <a href="https://geo.apimali.com/v1/locations?name=bama" target="_blank">https://geo.apimali.com/v1/locations?name=bama</a>
- Get all locations that are administratively dependent of the given location
    - **Request**: ```GET``` <a href="https://geo.apimali.com/v1/locations/78/locations" target="_blank">https://geo.apimali.com/v1/locations/78/locations</a>


