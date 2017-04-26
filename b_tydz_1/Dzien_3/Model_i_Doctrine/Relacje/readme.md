# PHP &ndash; Symfony
## Doctrine i modele

## Część D &ndash; Relacje

### Zadanie D1 &ndash; autor
Stwórz model i kontroler dla **autora**. Model powinien mieć następujące informację:
  * Id,
  * Imię i nazwisko,
  * Opis.

Kontroler powinien umożliwiać:
* tworzenie nowego autora w systemie,
* wyświetlenia autora,
* wyświetlenia wszystkich autorów.

### Zadanie D2 &ndash; relacja między autorem a książką
Połącz autora i książkę relacją jeden do wielu (dwukierunkowa). Pamiętaj o ponownym wygenerowaniu bazy danych, setterów, getterów do obu klas za pomocą odpowiednich komend konsolowych.

### Zadanie D3 &ndash; dodawanie autora do książki.
Zmodyfikuj tworzenie książki, tak żeby użytkownik mógł wybrać jej autora. W tym celu w kontrolerze wczytaj wszystkich autorów i podaj ich do widoku. W widoku w pętli dodaj ich wszystkich do selecta.

### Zadanie D4 &ndash; modyfikacja widoków.
Zmodyfikuj wyświetlania zarówno książki, jak i autora.
Książka powinna pokazywać dane swojego autora (imię i nazwisko) i podawać link do jego strony.
Autor powinien wypisywać, ile ma książek. Następnie w liście pokazywać ich nazwy i linki do stron książek.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
