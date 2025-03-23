<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# AgenDAV untuk YunoHost

[![Tingkat integrasi](https://apps.yunohost.org/badge/integration/agendav)](https://ci-apps.yunohost.org/ci/apps/agendav/)
![Status kerja](https://apps.yunohost.org/badge/state/agendav)
![Status pemeliharaan](https://apps.yunohost.org/badge/maintained/agendav)

[![Pasang AgenDAV dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang AgenDAV secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

AgenDAV is a CalDAV web client which features an AJAX interface to allow users to manage their own calendars and shared ones.


**Versi terkirim:** 2.6.0~ynh5

**Demo:** <https://demo.yunohost.org/agendav>

## Tangkapan Layar

![Tangkapan Layar pada AgenDAV](./doc/screenshots/screenshot.png)

## :red_circle: Antifitur

- **Upstream not maintained**: This software is not maintained anymore. Expect it to break down over time, be exposed to unfixed security breaches, etc.

## Dokumentasi dan sumber daya

- Dokumentasi admin resmi: <https://agendav.readthedocs.io>
- Depot kode aplikasi hulu: <https://github.com/agendav/agendav>
- Gudang YunoHost: <https://apps.yunohost.org/app/agendav>
- Laporkan bug: <https://github.com/YunoHost-Apps/agendav_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
atau
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
