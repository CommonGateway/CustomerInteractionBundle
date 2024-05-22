# BetrokkeneBijKlantcontact

De betrokkenheid en de rol van een persoon of organisatie bij het klantcontact.

Klantcontact-betrokkene kent afhankelijk van mogelijkheid of wenselijkheid om in het kader van (opvolging van) de klantinteractie persoonsgegevens te verwerken twee gebruiksmogelijkheden. 1) is van de bij het klantcontact betrokken inwoner of ondernemer na identificatie en/of authenticatie voldoende duidelijk wie die is of vertegenwoordigt, dan wordt eerst opgezocht of deze inwoner of ondernemer reeds als partij bij de gemeente bekend is. Is dat niet zo, dan kan vervolgens een partij worden geregistreerd. Tussen de opgezochte of gecre??erde partij en klantcontact-betrokkene wordt vervolgens een relatie gelegd. Als de betrokkene aangeeft dat all????n voor opvolging van het klantcontact andere dan de bij partij geregistreerde 'default'-contactgegevens gebruikt moeten, worden deze alternatieve contactgegevens vastgelegd in klantcontact-betrokkene. Voor opvolging van het klantcontact gelden de in Klantcontact-betrokkene vastgelegde contactgegevens dus boven gelijkaardige gegevens die bij partij zijn geregistreerd. 2) is van de bij het klantcontact betrokken inwoner of ondernemer na eventuele identificatie en/of authenticatie onvoldoende duidelijk is wie die is of vertegenwoordigt, dan kan in klantcontact-betrokkene een set voor opvolging van het klantcontact benodigde of gewenste contactgegevens worden geregistreerd. In dit geval is er dus g????n sprake van een realtie tussen klantcontact-betrokkene en partij.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/pluginpage-update/docs/schema/klant.betrokkeneBijKlantcontact.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| klantcontact | object | N/A | Yes |
| partij | object | N/A | No |
| rol | string | De typering van de rol van de persoon of organisatie in het klantcontact. | Yes |
| intitiator | boolean | N/A | No |
| organisatienaam | string | N/A | No |
| contactnaam | object | N/A | No |
| bezoekadres | object | Een bezoekadres is een adres waar een persoon of een bedrijf bezoekers ontvangt. | No |
| correspondentieadres | object | Het adres waarnaar de persoon of de organisatie de voor hen bestemde correspondentie laat verzenden. | No |
| communicatiekanaal | object | Het kanaal waarlangs de partij bij voorkeur interactie heeft met de gemeente. | No |
| voorkeurstaal | object | De taal waarin de persoon of organisatie bij voorkeur interactie heeft met de gemeente. | No |
