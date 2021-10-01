# AgenDAV for YunoHost

[![Integration level](https://dash.yunohost.org/integration/agendav.svg)](https://dash.yunohost.org/appci/app/agendav) ![](https://ci-apps.yunohost.org/ci/badges/agendav.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/agendav.maintain.svg)  
[![Install AgenDAV with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

> *This package allow you to install AgenDAV quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

[AgenDAV](http://agendav.org/) is a CalDAV web client which features an AJAX interface to allow users to manage their own calendars and shared ones.

**Shipped version:** 2.2.1

## Screenshots

![](http://agendav.org/img/screenshots/2.0.0-beta1/001_month_view.png)

## Demo

* [YunoHost demo](https://demo.yunohost.org/agendav/)

## Configuration

## Documentation

 * Official documentation: http://docs.agendav.org/en/2.2.1/
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/agendav.svg)](https://ci-apps.yunohost.org/ci/apps/agendav/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/agendav.svg)](https://ci-apps-arm.yunohost.org/ci/apps/agendav/)

## Limitations

## Additional information

### TODO

 * Submit HTTP auth patch for upstream integration

## Links

 * Report a bug: https://github.com/YunoHost-Apps/agendav_ynh/issues
 * AgenDAV repository: https://github.com/agendav/agendav/
 * YunoHost website: https://yunohost.org/

---

## Developers info

Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
or
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```
