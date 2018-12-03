# TYPO3 Extension powermail_cond

Conditions for TYPO3 extension powermail.
While a user fills out a form, some fields should be disappear, while
others should be visible.

## Screenshots

<img src="https://box.everhelper.me/attachment/960963/84725fb7-0b3e-4c40-b52e-29d7620777bb/262407-avsUb6HB0e7pfLxX/screen.png" width="500" />

<img src="https://box.everhelper.me/attachment/960958/84725fb7-0b3e-4c40-b52e-29d7620777bb/262407-TS99F55fzyD1GlaN/screen.png" width="500" />

## Quick installation

Please look at the manual for an advanded documentation at https://docs.typo3.org/typo3cms/extensions/powermail_cond/

Quick guide:
- Just install this extension - e.g. `composer require in2code/powermail_cond` or download it or install it with the classic way (Extension Manager)
- Clear caches
- Add a powermail form to any page
- Add a new record from type "condition container" to a sysfolder and configure it
- Don't forget to include the static template from powermail_cond
- Don't forget to add jQuery to your frontend (if not yet installed)

## Changelog

| Version    | Date       | State      | Description                                                                  |
| ---------- | ---------- | ---------- | ---------------------------------------------------------------------------- |
| 7.0.0      | 2018-11-16 | Task       | Update dependencies for powermail 7                                          |
| 6.1.0      | 2018-10-21 | Task       | Remove deprecation warnings in TYPO3 9.5                                     |
| 6.0.0      | 2018-10-16 | Task       | Support powermail 6.1                                                        |
| 5.0.0      | 2018-05-24 | Task       | Support powermail 6.0                                                        |
| 4.1.1      | 2018-03-28 | Bugfix     | Prevent exceptions in log                                                    |
| 4.1.0      | 2018-01-29 | Task       | Remove dependencies for TYPO3 7.6                                            |
| 4.0.0      | 2018-01-15 | Task       | Update dependencies for powermail 5.0                                        |
| 3.5.2      | 2017-12-05 | Bugfix     | Turn of ConditionAwareValitor on fields without page relations               |
| 3.5.1      | 2017-12-13 | Bugfix     | Prevent exceptions in backend for MySQL strict mode                          |
| 3.5.0      | 2017-11-13 | Task       | Update dependencies for powermail 4.x                                        |
| 3.4.0      | 2017-08-14 | Feature    | Allow all fieldtypes for target, add JS compression                          |
| 3.3.4      | 2017-07-25 | Bugfix     | Reduce unneeded calls in frontend                                            |
| 3.3.3      | 2017-06-12 | Bugfix     | Small change for MySQL strict mode                                           |
| 3.3.2      | 2017-05-20 | Bugfix     | TCA update for TYPO3 8.7                                                     |
| 3.3.1      | 2017-04-25 | Bugfix     | Fix package name in composer.json                                            |
| 3.3.0      | 2017-04-23 | Task       | Move ext to github, make it fit for TYPO3 8.7 LTS                            |

## More to come soon

- FAQ
- Use vanilla JS instead of jQuery

## Conflicts

- It's not possible to use powermail multistep forms with powermail_cond
