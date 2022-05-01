# AgenDAV pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/agendav.svg)](https://dash.yunohost.org/appci/app/agendav) ![](https://ci-apps.yunohost.org/ci/badges/agendav.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/agendav.maintain.svg)  
[![Installer AgenDAV avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer AgenDAV rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Client web pour CalDAV

**Version incluse :** 2.4.0~ynh1

**Démo :** https://demo.yunohost.org/agendav/

## Documentations et ressources

* Site officiel de l'app : http://agendav.org/
* Documentation officielle de l'admin : https://agendav.readthedocs.io/en/2.2.0/
* Dépôt de code officiel de l'app : https://github.com/agendav/agendav/
* Documentation YunoHost pour cette app : https://yunohost.org/app_agendav
* Signaler un bug : https://github.com/YunoHost-Apps/agendav_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
ou
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps