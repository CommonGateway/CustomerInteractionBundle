# Over KlantenRegister

KlantenRegister is de spil in het web van klantinteractie binnen de overheid. Het systeem integreert naadloos klantinteractieregisters en de klantinteractie-convenience API. Het maakt gebruik van de CustomerInteractionBundle om alle interacties met inwoners gestructureerd en toegankelijk te houden, waardoor overheidsmedewerkers efficiënter kunnen werken.

## Architectuur
De architectuur van KlantenRegister is gebaseerd op erkende klantinteractiepatronen en dienstverleningsmodellen:

* **Klanten en Taken**: Deze zijn gebaseerd op klantinteractiepatronen zoals beschreven in het [Klantinteractie Informatiemodel](https://vng-realisatie.github.io/klantinteracties/informatiemodel/semantisch_model). Dit model biedt een gestandaardiseerde manier om interacties met klanten te structureren en beheren.

* **Berichten**: Berichten binnen het KlantenRegister zijn gebaseerd op het [dienstverleningsforum Dienstverleningsmodel](https://dienstverleningsplatform.gitbook.io/platform-generieke-dienstverlening-public/patronen/berichten). Dit model biedt richtlijnen voor het uitwisselen van berichten tussen verschillende dienstverleningssystemen, waardoor een consistente en efficiënte communicatie mogelijk wordt.

Binnen de documentatie van platform dienstverlening vind je ook meer terug over de toepassing van taken.

* **Api first**:  [API documentatie](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json&nocors#tag/partij). 

## Kernvoordelen

* **Centraal Overzicht:** Eén centrale locatie voor alle klantgegevens en interacties.
* **Efficiëntie in Beheer:** Vereenvoudigt het beheer van klantinteracties en -gegevens.
* **Interoperabiliteit:** Ondersteunt de integratie met andere systemen via gestandaardiseerde API's.
* **Toegankelijkheid:** Maakt gegevens toegankelijk voor geautoriseerde gebruikers, met respect voor privacy en beveiliging.
* **Flexibiliteit:** Kan worden uitgebreid en aangepast aan de behoeften van elke organisatie.
* **Compliance:** Voldoet aan de relevante wet- en regelgeving voor gegevensbeheer.

## Multitenancy

## Federatief

Door gebruik te maken van het [Open Register Framework](https://openregisters.app/) kunnen de klantregisters op een federatieve manier benaderd worden, wat interorganisatorische samenwerking en data-uitwisseling mogelijk maakt. Dit stelt inwoners in staat om via één centrale omgeving toegang te krijgen tot hun gegevens, taken en berichten van verschillende organisaties. Deze aanpak bevordert niet alleen de efficiëntie, maar ook de transparantie en gebruiksvriendelijkheid voor de gebruiker.

## Installatie

### Lokale Installatie

#### Vereisten

* PHP 7.4 of hoger
* Symfony 5 of hoger
* Toegang tot de CustomerInteractionBundle

#### Stap-voor-stap Installatie

1. Clone het CustomerInteractionBundle repository: `git clone https://github.com/CommonGateway/CustomerInteractionBundle.git`
2. Installeer de benodigde afhankelijkheden: `composer install`
3. Configureer uw omgevingsvariabelen (.env) voor de CustomerInteractionBundle.
4. Volg de specifieke configuratie-instructies voor uw systeem.

## Gebruik

Na installatie en configuratie kunt u de KlantenRegister inrichten voor uw organisatie. U kunt klantinteracties en -gegevens beheren via een gebruiksvriendelijke interface, waarbij u de controle behoudt over de datastructuur en de toegang tot gegevens.

### Backwards compatibility

Het KlantenRegister heeft ook backwards compatibility met de oudere (deprecated) [KlantenBundle](https://github.com/CommonGateway/KlantenBundle). De volgende endpoints zijn zo ingericht dat ze zich gedragen zoals de KlantenBundle dat deed, maar op de achtergrond worden er nieuwe CustomerInteractionBundle objecten gebruikt:

* /api/kic/v1/klanten => op de achtergrond: partij
* /api/kic/v1/contactmomenten => op de achtergrond: klantcontact
* /api/kic/v1/klantcontactmomenten => op de achtergrond: betrokkeneBijKlantcontact

## Bijdragen

Wilt u bijdragen aan de ontwikkeling van KlantenRegister? Uw input is welkom, of het nu gaat om foutmeldingen, verbetervoorstellen, of codebijdragen. Raadpleeg onze `CONTRIBUTING.md` voor meer informatie over hoe u kunt deelnemen.

## Licentie

KlantenRegister is uitgegeven onder een EUPL 1.2-licentie. Zie het `LICENSE.md`-bestand in onze GitHub repository voor meer details.

## Contact

Voor meer informatie over KlantenRegister en hoe het platform uw organisatie kan ondersteunen, kunt u contact opnemen via <info@conduction.nl>.
