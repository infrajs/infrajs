** Не рекомендуется к использованию. Устарел. **
# Основной состав расширений для запуска сайта с infrajs

Содержит самые основные расширения для запуска сайта.

1. [infrajs/router](https://github.com/infrajs/router/)
2. [infrajs/controller](https://github.com/infrajs/controller/)
3. [infrajs/collect](https://github.com/infrajs/collect/)

Содержит набор незаметных расширений, которые не требуют явного вызова

1. [infrajs/htmlcompress](https://github.com/infrajs/htmlcompress/)
2. [infrajs/timezone](https://github.com/infrajs/timezone/)
3. [infrajs/mdreader](https://github.com/infrajs/mdreader/)
4. [infrajs/admin](https://github.com/infrajs/admin/)
5. [infrajs/update](https://github.com/infrajs/update/)
6. [infrajs/tester](https://github.com/infrajs/tester/)
7. [infrajs/loader](https://github.com/infrajs/loader/)

Если вам осознано требуется какое-то расширение из перечисленных, лучше указать его явно в composer.json. Состав незметных расширений может измениться. Основные расширения не поменяются.

## Установка

```json
{
  "require": {
    "infrajs/infrajs":"~1"
  }
}
```

## Использование
- Настроить [переадресацию](https://github.com/infrajs/router/) в .htaccess.
- Создать в корне файл [index.json](https://github.com/infrajs/controller/) с описанием страниц сайта
