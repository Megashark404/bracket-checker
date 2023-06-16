# Bracket checker

Верификатор скобок из домашнего задания. Проверяет строку на корректность открытых/закрытых скобок.

## Требования

PHP 7.4.

##Установка

```
bash
$ composer require vladimirsannikov/bracketchecker
```

## Использование
```
php
<?php
$bracketChecker = new BracketChecker();
$bracketChecker->check('()()()()()');

```
