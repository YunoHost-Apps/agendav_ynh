<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# AgenDAV pour YunoHost

[![Niveau d’intégration](https://apps.yunohost.org/badge/integration/agendav)](https://ci-apps.yunohost.org/ci/apps/agendav/)
![Statut du fonctionnement](https://apps.yunohost.org/badge/state/agendav)
![Statut de maintenance](https://apps.yunohost.org/badge/maintained/agendav)

[![Installer AgenDAV avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer AgenDAV rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

AgenDAV est un client Web CalDAV doté d'une interface AJAX pour permettre aux utilisateurs de gérer leurs propres calendriers et ceux partagés.


**Version incluse :** 2.6.0~ynh5

**Démo :** <https://demo.yunohost.org/agendav>

## Captures d’écran

![Capture d’écran de AgenDAV](./doc/screenshots/screenshot.png)

## :red_circle: Anti-fonctionnalités

- **Application non maintenue **: Ce logiciel n'est plus maintenu. Attendez-vous à ce qu'il ne fonctionne plus avec le temps, et que l'on découvre des failles de sécurité qui ne seront pas corrigées, etc.

## Documentations et ressources

- Documentation officielle de l’admin : <https://agendav.readthedocs.io>
- Dépôt de code officiel de l’app : <https://github.com/agendav/agendav>
- YunoHost Store : <https://apps.yunohost.org/app/agendav>
- Signaler un bug : <https://github.com/YunoHost-Apps/agendav_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
ou
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
