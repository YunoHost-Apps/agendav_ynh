<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# AgenDAV YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/agendav.svg)](https://dash.yunohost.org/appci/app/agendav) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/agendav.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/agendav.maintain.svg)

[![Instalatu AgenDAV YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek AgenDAV YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

AgenDAV is a CalDAV web client which features an AJAX interface to allow users to manage their own calendars and shared ones.


**Paketatutako bertsioa:** 2.6.0~ynh4

**Demoa:** <https://demo.yunohost.org/agendav>

## Pantaila-argazkiak

![AgenDAV(r)en pantaila-argazkia](./doc/screenshots/screenshot.png)

## :red_circle: Ezaugarri zalantzagarriak

- **Jatorrizko garapena utzita**: Software honek ez du arduradunik. Denborak aurrera egin ahala funtzionatzeari utziko dio, konpondu gabeko segurtasun arazoak izango ditu, etab.

## Dokumentazioa eta baliabideak

- Administratzaileen dokumentazio ofiziala: <https://agendav.readthedocs.io>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/agendav/agendav>
- YunoHost Denda: <https://apps.yunohost.org/app/agendav>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/agendav_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
edo
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
