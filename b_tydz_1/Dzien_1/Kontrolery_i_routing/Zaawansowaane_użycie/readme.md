# PHP &ndash; Symfony
## kontrolery i routing

## Część C &ndash; Kontroler

### Zadanie C1 &ndash; obsługa formularza
Do drugiej akcji z zadania B4 dopisz kod, który będzie poprawnie odczytywał dane z formularza i wyświetli je na stronie.
Można edytować plik widoku zawierający formularz wg uznania.

### Zadanie C2 &ndash; sesja
Stwórz dwie akcje:
  1. Pierwsza ma być przypisana do adresu `/setSession/{value}`. Ma zapisywać do sesji przekazaną wartość (pod kluczem „usertext”),
  2. Druga ma być przypisana do adresu `/getSession` i wczytywać zawartość sesji będącą pod kluczem „usertext” i wyświetlać ją na stronie (jeżeli w sesji nie ma żadnej wartości &ndash; to powinna się wyświetlać odpowiednia informacja).

### Zadanie C3 &ndash; ciasteczko
Stwórz trzy akcje:
  1. Pierwsza ma być przypisana do adresu `/setCookie/{value}`. Ma zapisywać do ciasteczka przekazaną wartość (pod kluczem „myCookie”).
  2. Druga ma być przypisana do adresu `/getCookie` i wczytywać zawartość ciasteczka „myCookie” i wyświetlać ją na stronie (jeżeli nie ma nic w tym ciasteczku &ndash; to powinna się wyświetlić odpowiednia informacja).
  3. Trzecia ma być przypisana do adresu `/deleteCookie` i powinna kasować ciasteczko o nazwie **myCookie**.

### Zadanie C4 &ndash; przekierowanie
Napisz akcje przypisaną do adresu `/redirectMe` i powinna przekierowywać do akcji z punktu 3. poprzedniego zadania. Pamiętaj o podaniu danych do sluga.

### Zadanie C5 &ndash; generowanie linków
Napisz akcje przypisaną do adresu `/showAllLinks`. Akcja powinna wyświetlać linki do wszystkich akcji, które dziś zrobiliśmy.
Wygeneruj linki na dwa sposoby:
* używając ścieżek względnych,
* używając całkowitych.

Pamiętaj o przekazywaniu slugów, jeżeli jest taka potrzeba.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
