# CustomerInteractionBundle [![Codacy Badge](https://app.codacy.com/project/badge/Grade/980ea2efc85a427ea909518f29506ff6)](https://app.codacy.com/gh/CommonGateway/CustomerInteractionBundle/dashboard?utm_source=gh\&utm_medium=referral\&utm_content=\&utm_campaign=Badge_grade)

## Klant Interactie Component - ReadMe

### Overzicht

Dit document beschrijft de Klant Interactie Component en waarom deze aanpak beter en flexibeler is dan alles in een register te stoppen.

## Lagenstructuur

Onze Klant Interactie Component is opgebouwd uit verschillende lagen. Hieronder volgt een opsomming van elke laag en de redenen waarom deze bijdraagt aan de flexibiliteit en efficiëntie van ons systeem.

### Laag 1: Data Opslag

* **Object Store Oplossing (MongoDB)**:
  * We hebben gekozen voor een object store oplossing, zoals MongoDB, op deze laag. Dit biedt de volgende voordelen:
    * Schaalbaarheid: We kunnen gemakkelijk schalen naarmate de gegevensomvang toeneemt.
    * Data-onafhankelijkheid: We zijn niet gebonden aan een specifieke data-opslagtechnologie. In productie bij een gemeente kunnen we zelfs andere open source of commerciële object stores integreren.

### Laag 2: API's

* **Adapter naar Klant Interactie CRUD API's**:
  * Op deze laag verbinden we de object store met de Klant Interactie CRUD API's via een adapter. Dit levert de volgende voordelen op:
    * Flexibiliteit in databronnen: We kunnen verschillende data-opslagsystemen gebruiken zonder de API's te wijzigen.
    * Efficiënte gegevensuitwisseling: De adapter vergemakkelijkt de gegevensuitwisseling tussen de object store en de API's.

### Laag 3: Integratie

* **Integratie van Diverse Gegevensbronnen**:
  * Op deze integratielaag brengen we ons eigen register samen met andere bronnen voor klantgegevens, zoals BRP, andere klant interactie registers, of bronnen die niet voldoen aan de API-definitie. Dit heeft de volgende voordelen:
    * Gegevenscentralisatie: We kunnen gegevens van verschillende bronnen centraliseren voor gemakkelijke toegang.
    * Zoekfunctionaliteit: We bouwen een zoekfunctionaliteit in, waardoor meerdere bronnen doorzoekbaar zijn en gegevens kunnen worden opgehaald waar ze zich bevinden.

* **Bronoverstijgende Extensie zonder Koppeling van Registers**:
  * Via deze integratielaag kunnen we bronoverstijgende extensies uitvoeren zonder registers onderling te verbinden of op de hoogte te zijn van elkaars bestaan. Dit biedt:
    * Eenvoudige extensie: We kunnen gemakkelijk functionaliteit toevoegen zonder de complexiteit van registers te vergroten.
    * Flexibele validatie: Bronoverstijgende validatie wordt hier uitgevoerd, waardoor de validatie flexibeler wordt.

### Laag 4: Business Rules
* **Brononafhankelijke Serviceaanbieding**:
    * Op deze laag bieden we services aan die handelingsgerichte klanten-API's ondersteunen. De voordelen zijn:
        * Brononafhankelijkheid: Services kunnen werken met verschillende bronnen zonder aanpassingen.
        * Bronnen overschrijden: Services kunnen gegevens van verschillende bronnen overschrijden voor meerwaarde.

Met deze gelaagde aanpak bevorderen we leveranciers om verder te gaan in hun dienstverlening en onderscheidend vermogen te behouden, terwijl ze toch de mogelijkheid hebben om informatie te delen. Bovendien maken we de overstap naar registers niet dwingend voor leveranciers, wat de marktadoptie versnelt.

## Architectuur

* [klantinteracties](https://github.com/VNG-Realisatie/klantinteracties/blob/main/docs/api_familie_klantinteracties/klantinteracties/openapi.yaml)
* [klantinteracties\_CRUD](https://github.com/VNG-Realisatie/klantinteracties/blob/main/docs/api_familie_klantinteracties/klantinteracties_CRUD/openapi.yaml)
* [klantinteracties variant4-bijhouding](https://github.com/VNG-Realisatie/klantinteracties/blob/main/docs/api_familie_varianten/variant4-bijhouding/openapi.yaml)
