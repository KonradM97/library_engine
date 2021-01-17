<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><a href="?option=quickmenu">Menu</a> </div>
    <ul class="list-group">
        <li><a href="?option=search" class="list-group-item list-group-item-action bg-light">Wyszukiwarka</a></li>
        <li><a href="?option=borrowing" class="list-group-item list-group-item-action bg-light">Wypożycz</a></li>
        <li><a href="?option=returns" class="list-group-item list-group-item-action bg-light">Oddaj książkę</a></li>
        <li class="list-group-item list-group-item-action bg-light">Uczniowie</li>
        <ul>
            <li><a href="?option=addstudent" class="list-group-item list-group-item-action bg-light">Dodaj ucznia</a></li>
            <li><a href="?option=usunUcznia" class="list-group-item list-group-item-action bg-light">Usuń ucznia</a></li>
            <li><a href="?option=edytujUcznia?option=edytujUcznia" class="list-group-item list-group-item-action bg-light">Edytuj ucznia</a></li>
            <li><a href="?option=noweHaslo" class="list-group-item list-group-item-action bg-light">Nowe hasło dla ucznia</a></li>
        </ul>
        <li class="list-group-item list-group-item-action bg-light">Książki</li>
        <ul>
            <li><a href="?option=dodajksiazke" class="list-group-item list-group-item-action bg-light">Dodaj kasiążkę</a></li>
            <li><a href="?option=usunKsiazke" class="list-group-item list-group-item-action bg-light">Usuń książkę</a></li>
            <li><a href="?option=edytujKsiazke" class="list-group-item list-group-item-action bg-light">Edytuj książkę</a></li>
        </ul>
        <li class="list-group-item list-group-item-action bg-light">Aktualności</li>
        <ul>
            <li><a href="?option=dodajAktualnosc" class="list-group-item list-group-item-action bg-light">Dodaj komunikat</a></li>
            <li><a href="?option=edytujAktualnosci" class="list-group-item list-group-item-action bg-light">Edytuj komunikaty</a></li>
        </ul>
        <li><a href="?option=statystyki" class="list-group-item list-group-item-action bg-light">Statystyki</a>
        </li>
        <li><a href="#" class="list-group-item list-group-item-action bg-light">Dostosowanie strony głównej</a>
            <!-- Sprawdzić czy superadmin -->
            <!--?php
                    
                         ?-->
        </li>
        @if (Auth::user()->superadmin == 1)
        <li class="list-group-item list-group-item-action bg-light">Superadmin</li>
        <li> <a href="#" class="list-group-item list-group-item-action bg-light">Dodaj nauczyciela</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Następny rok</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Archiwizuj biblioteke</a>
        </li>
        @endif
    </ul>
</div>