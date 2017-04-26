# PHP - Symfony
## Formularze

## Część B - Zaawansowane formularze

### Zadanie B1 - User
Wygeneruj model `User`, który ma zawierać:
  * id,
  * nick,
  * tweet_id,
Połącz model User z modelem Tweet relacją jeden do jednego jednokierunkową.

Wygeneruj dla niego Kontroler z następującymi akcjami:
  * `create`,
  * `new`,
  * `showAll`.

### Zadanie B2 - Formularz z wyborem encji
Formularz dodawania nowego użytkownika (akcja new) powinien umożliwiać wybór Tweeta za pośrednictwem pola wyboru.
Użyj do tego celu spejcalnego pola wyboru encji w formularzu.

### Zadanie B3 - Pola formularza
Zmodyfikuj widok formularza w taki sposób aby każde jego pole znajdowało się w oddzielnym tagu html `<div></div>`.
Potrzebne Ci będą metody twiga jak form_widget(), form_label() itp.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
