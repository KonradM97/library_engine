
<div class="row">
    <h2 class="col-md">Wyszukiwarka</h2><!-- AJAX?-->
</div>
    <form action="searchforbooks" type="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Wyszukaj książkę</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Wpisz dane książki">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Wyszukaj!">
  </div>
</form>
<form action="searchforstudent" type="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Wyszukaj ucznia</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Wpisz imię i/lub nazwisko ucznia">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Wyszukaj!">
  </div>
</form>
<form action="searchforclass" type="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Dane klasy</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Wpisz klasę np. VIIa">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Wyszukaj!">
  </div>
</form>