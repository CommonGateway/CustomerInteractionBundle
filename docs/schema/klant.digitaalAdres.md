# Digitaal Adres

Adres waarop een persoon of een organisatie via een digitaal kanaal bereikt kan worden.

Digitaal adres duidt gegevens aan die beschrijven hoe een persoon of organisatie via een digitaal kanaal bereikt kan worden. Voorbeelden hiervan zijn een telefoonnummer, een e-mailadres of een gebruikersnaam op een sociaal medium. Adressen die gekoppeld kunnen worden aan een vaste plaats in de fysieke wereld, zoals een bezoekadres, postbus of antwoordnummer zijn geen digitaal adres.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/bericht-schema/docs/schema/klant.digitaalAdres.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| adres | string | Een generieke regel om adresgegevens in op te nemen. | Yes |
| omschrijving | string | N/A | Yes |
| soortDigitaalAdres | string | De typering van het digitale adres waarmee bepaald kan worden op welk kanaal dit digitale adres valide is. | Yes |
