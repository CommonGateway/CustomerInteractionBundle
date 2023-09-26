# Bezoekadres

Een bezoekadres is een adres waar een persoon of een bedrijf bezoekers ontvangt.

![Class Diagram](docs/schema/klant.bezoekadres.svg)

## Properties

| Property | Type | Description |
|----------|------|-------------|
| aanduidingBijHuisnummer | string | De aanduiding die gebruikt wordt voor bijvoorbeeld een ligplaats of een standplaats die geen eigen nummeraanduiding heeft. |
| adresregelBuitenland1 | string | Een generieke regel om adresgegevens in op te nemen. |
| adresregelBuitenland2 | string | Een generieke regel om adresgegevens in op te nemen. |
| adresregelBuitenland3 | string | Een generieke regel om adresgegevens in op te nemen. |
| huisletter | string | N/A |
| huisnummer | integer | N/A |
| huisnummertoevoeging | string | N/A |
| land | object | Het SUBJECT dat heeft aangegeven te (gaan) verblijven dan wel verblijft in het LAND |
| postcode | string | N/A |
| soortBezoekadres | string | Typering waarmee aangegeven of het bezoekadres een binnenlands - of een buitenlands adres is.

`binnenlands_adres` - binnenlands adres
`buitenlands_adres` - buitenlands adres |
| straat | string | N/A |
| woonplaats | string | N/A |
