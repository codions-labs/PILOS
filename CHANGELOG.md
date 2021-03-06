# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2021-03-02
### Added
- Authentication with LDAP and Email-Address ([#1], [#3])
- Loading screen for loading events of the application ([#6], [#11])
- Localization with a locale switcher and saving selected locale for authenticated users ([#8], [#13])
- Flash messages on a successful login and on errors catched by the global vue error handler ([#7], [#16],[#44],[#43],[#101],[#102])
- Footer with Impress and Privacy policy ([#9], [#17])
- Authenticator type to users model ([#19], [#21])
- Roles and permissions concept, management of roles and included permissions ([#12], [#22], [#45], [#103], [#105])
- Page to create, view, change settings and delete rooms, start/join meetings ([#4], [#18],[#32],[#33],[#37],[#46])
- Search field and pagination to the room overview page  ([#39], [#49])
- File upload for room owner and file download for participants ([#4], [#18])
- Agreement check before file download ([#50],[#54])
- Global settings, .env as default; added logo path and room limit ([#34],[#36])
- Setting menu for administrators ([#35], [#38], [#97],[#100])
- Room type management pages to admin settings ([#62], [#73])
- A middleware to check whether the request is in sync with model of the database and not stale ([#40], [#41])
- Management of users and profile page with possibility to disable audio echo test ([#10], [#66], [#67], [#87])
- Management of application settings ([#55], [#60])
- Management of servers ([#30], [#88])
- Artisan command to check server and meeting status, build live and historical data ([#64], [#65])
- Artisan command to create a new admin user ([#81])
- Application banner that can be modified through the application settings ([#89], [#94])
- Management of server pools, used by load balancer and added to room type ([#96], [#99])
- Password self reset, password reset by an administrator and password generation with password reset for registered users ([#106], [#107])
- Logging for failed/successful logins and ldap roles ([#112], [#113])

[#1]: https://github.com/THM-Health/PILOS/issues/1
[#3]: https://github.com/THM-Health/PILOS/pull/3
[#4]: https://github.com/THM-Health/PILOS/issues/4
[#6]: https://github.com/THM-Health/PILOS/issues/6
[#7]: https://github.com/THM-Health/PILOS/issues/7
[#8]: https://github.com/THM-Health/PILOS/issues/8
[#9]: https://github.com/THM-Health/PILOS/issues/9
[#10]: https://github.com/THM-Health/PILOS/issues/10
[#11]: https://github.com/THM-Health/PILOS/pull/11
[#12]: https://github.com/THM-Health/PILOS/issues/12
[#13]: https://github.com/THM-Health/PILOS/pull/13
[#16]: https://github.com/THM-Health/PILOS/pull/16
[#17]: https://github.com/THM-Health/PILOS/pull/17
[#18]: https://github.com/THM-Health/PILOS/pull/18
[#19]: https://github.com/THM-Health/PILOS/issues/19
[#21]: https://github.com/THM-Health/PILOS/pull/21
[#22]: https://github.com/THM-Health/PILOS/pull/22
[#30]: https://github.com/THM-Health/PILOS/issues/30
[#32]: https://github.com/THM-Health/PILOS/issues/32
[#33]: https://github.com/THM-Health/PILOS/pull/33
[#34]: https://github.com/THM-Health/PILOS/issues/34
[#35]: https://github.com/THM-Health/PILOS/pull/35
[#36]: https://github.com/THM-Health/PILOS/pull/36
[#37]: https://github.com/THM-Health/PILOS/issues/37
[#38]: https://github.com/THM-Health/PILOS/issues/38
[#39]: https://github.com/THM-Health/PILOS/issues/39
[#40]: https://github.com/THM-Health/PILOS/issues/40
[#41]: https://github.com/THM-Health/PILOS/pull/41
[#43]: https://github.com/THM-Health/PILOS/issues/43
[#44]: https://github.com/THM-Health/PILOS/pull/44
[#45]: https://github.com/THM-Health/PILOS/pull/45
[#46]: https://github.com/THM-Health/PILOS/pull/46
[#49]: https://github.com/THM-Health/PILOS/pull/49
[#50]: https://github.com/THM-Health/PILOS/issues/50
[#54]: https://github.com/THM-Health/PILOS/pull/54
[#55]: https://github.com/THM-Health/PILOS/issues/55
[#60]: https://github.com/THM-Health/PILOS/pull/60
[#62]: https://github.com/THM-Health/PILOS/issues/62
[#64]: https://github.com/THM-Health/PILOS/issues/64
[#65]: https://github.com/THM-Health/PILOS/pull/65
[#66]: https://github.com/THM-Health/PILOS/pull/66
[#67]: https://github.com/THM-Health/PILOS/issues/67
[#73]: https://github.com/THM-Health/PILOS/pull/73
[#81]: https://github.com/THM-Health/PILOS/pull/81
[#87]: https://github.com/THM-Health/PILOS/pull/87
[#88]: https://github.com/THM-Health/PILOS/pull/88
[#89]: https://github.com/THM-Health/PILOS/issues/89
[#94]: https://github.com/THM-Health/PILOS/pull/94
[#96]: https://github.com/THM-Health/PILOS/issues/96
[#97]: https://github.com/THM-Health/PILOS/issues/97
[#99]: https://github.com/THM-Health/PILOS/pull/99
[#100]: https://github.com/THM-Health/PILOS/pull/100
[#101]: https://github.com/THM-Health/PILOS/issues/101
[#102]: https://github.com/THM-Health/PILOS/pull/102
[#103]: https://github.com/THM-Health/PILOS/issues/103
[#105]: https://github.com/THM-Health/PILOS/pull/105
[#106]: https://github.com/THM-Health/PILOS/issues/106
[#107]: https://github.com/THM-Health/PILOS/pull/107
[#112]: https://github.com/THM-Health/PILOS/issues/112
[#113]: https://github.com/THM-Health/PILOS/pull/113

[unreleased]: https://github.com/THM-Health/PILOS/compare/3c8359cdb0395546fe97aeabf1a40f93002b182c...HEAD
[1.0.0]: https://github.com/THM-Health/PILOS/releases/tag/v1.0.0
