# Bezoekadres

Een bezoekadres is een adres waar een persoon of een bedrijf bezoekers ontvangt.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/main/docs/schema/klant.bezoekadres..svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| aanduidingBijHuisnummer | string | De aanduiding die gebruikt wordt voor bijvoorbeeld een ligplaats of een standplaats die geen eigen nummeraanduiding heeft. | Yes |
| adresregelBuitenland1 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| adresregelBuitenland2 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| adresregelBuitenland3 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| huisletter | string | N/A | No |
| huisnummer | integer | N/A | No |
| huisnummertoevoeging | string | N/A | No |
| land | object | Het SUBJECT dat heeft aangegeven te (gaan) verblijven dan wel verblijft in het LAND | Yes |
| postcode | string | N/A | No |
| soortBezoekadres | string | Typering waarmee aangegeven of het bezoekadres een binnenlands - of een buitenlands adres is.

`binnenlands_adres` - binnenlands adres
`buitenlands_adres` - buitenlands adres | Yes |
| straat | string | N/A | No |
| woonplaats | string | N/A | No |
