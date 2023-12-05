# Correspondentieadres

Het adres waarnaar de persoon of de organisatie de voor hen bestemde correspondentie laat verzenden.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/documentation/docs/schema/klant.correspondentieadres.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| aanduidingBijHuisnummer | string | De aanduiding die gebruikt wordt voor bijvoorbeeld een ligplaats of een standplaats die geen eigen nummeraanduiding heeft. | Yes |
| adresregelBuitenland1 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| adresregelBuitenland2 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| adresregelBuitenland3 | string | Een generieke regel om adresgegevens in op te nemen. | No |
| antwoordnummer | integer | N/A | No |
| huisletter | string | N/A | No |
| huisnummer | integer | N/A | No |
| huisnummertoevoeging | string | N/A | No |
| land | object | Het SUBJECT dat heeft aangegeven te (gaan) verblijven dan wel verblijft in het LAND | Yes |
| postbusnummer | integer | N/A | No |
| postcode | string | N/A | No |
| soortCorrespondentieadres | string | Typering waarmee aangegeven wordt of het correspondentieadres een binnenlands - of een buitenlands adres is danwel een postbusnummer of een antwoordnummer.

`postbusnummer` - postbusnummer
`antwoordnummer` - antwoordnummer
`binnenlands_adres` - binnenlands adres
`buitenlands_adres` - buitenlands adres | Yes |
| straat | string | N/A | No |
| woonplaats | string | N/A | No |
