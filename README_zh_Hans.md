<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 AgenDAV

[![集成程度](https://apps.yunohost.org/badge/integration/agendav)](https://ci-apps.yunohost.org/ci/apps/agendav/)
![工作状态](https://apps.yunohost.org/badge/state/agendav)
![维护状态](https://apps.yunohost.org/badge/maintained/agendav)

[![使用 YunoHost 安装 AgenDAV](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=agendav)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 AgenDAV。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

AgenDAV is a CalDAV web client which features an AJAX interface to allow users to manage their own calendars and shared ones.


**分发版本：** 2.6.0~ynh5

**演示：** <https://demo.yunohost.org/agendav>

## 截图

![AgenDAV 的截图](./doc/screenshots/screenshot.png)

## :red_circle: 负面特征

- **Upstream not maintained**: This software is not maintained anymore. Expect it to break down over time, be exposed to unfixed security breaches, etc.

## 文档与资源

- 官方管理文档： <https://agendav.readthedocs.io>
- 上游应用代码库： <https://github.com/agendav/agendav>
- YunoHost 商店： <https://apps.yunohost.org/app/agendav>
- 报告 bug： <https://github.com/YunoHost-Apps/agendav_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/agendav_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
或
sudo yunohost app upgrade agendav -u https://github.com/YunoHost-Apps/agendav_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
