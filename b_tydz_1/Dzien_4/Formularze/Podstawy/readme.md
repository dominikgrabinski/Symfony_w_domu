# PHP &ndash; Symfony
## Formularze

## Część A &ndash; podstawowe formularze

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `projekt_form`.
Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle.

### Zadanie A2 &ndash; Tweet
Wygeneruj model `Tweet`, który ma zawierać:
  * id,
  * nazwę,
  * tekst.

Wygeneruj dla niego Kontroler z następującymi akcjami:
  * `create`,
  * `new`,
  * `showAll`.

Póki co napisz akcję `showAll`, która wyświetli tytuły wszystkich Tweetów w bazie danych.

### Zadanie A3 &ndash; tworzenie Tweeta
Napisz dla Tweeta następujące akcje:
* `new`, która ma wyświetlać formularz,
* `create`, która ma na podstawie formularza tworzyć nową encję i zapisywać do bazy danych.

### Zadanie A4 &ndash; modyfikacja Tweeta
Dopisz akcję `/update/{id}`.

Jeżeli wejdziemy na nią metodą GET, to ma wczytać Tweet o podanym **id** i następnie wyświetlić do niego formularz do edycji.
Jeżeli wejdziemy na nią metodą POST, to powinna zapamiętać wysłane informacje do bazy danych.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
