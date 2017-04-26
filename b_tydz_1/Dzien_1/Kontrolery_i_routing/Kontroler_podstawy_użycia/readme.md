# PHP &ndash; Symfony
## kontrolery i routing

## Część A &ndash; Podstawowy Kontroler

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie **projekt_controler**.

Następnie:
  1. Stwórz w nim nowy bundle o nazwie CodersLabBundle,
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z zadań dotyczących Podstaw Symfony).

### Zadanie A2 &ndash; nowy kontroler
Wygeneruj nowy kontroler o nazwie `first` za pomocą odpowiedniej komendy konsolowej. Podczas generacji nie dodawaj mu żadnych akcji.
Następnie stwórz akcję, która będzie przypisana do adresu `/helloWorld`. Akcja ta ma wypisywać na stronie przywitanie. Pamiętaj o:
  1. Stworzeniu odpowiedniej adnotacji do routingu.
  2. Zwróceniu obiektu typu `Response` z akcji (nie zapomnij o dołączeniu zalinkowaniu klasy `Response` poprzez use),
  3. Odpowiednim nazwaniu metody (musi się kończyć słowem **Action**).

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
