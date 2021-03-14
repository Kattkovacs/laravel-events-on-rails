@extends('layouts.layout')

@section('content')
<div class="wrapper create-train">
  <h1>Create a New Train</h1>
  <form action="/trains" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Choose train type:</label>
    <select name="type" id="type">
      <option value="steam-powered">Steam-powered</option>
      <option value="diesel-powered">Diesel-powered</option>
      <option value="DMU">Diesel Motor Unit</option>
    </select>
    <label for="catering">Choose catering option:</label>
    <select name="catering" id="catering">
      <option value="on diner">On Diner</option>
      <option value="not on train">Not on Train</option>
      <option value="drinks only">Drinks only</option>
      <option value="no catering">No Catering</option>
    </select>
    <fieldset>
      <label>Cars:</label><br/>
      <input type="checkbox" name="cars[]" value="WR2347">WR2347<br/>
      <input type="checkbox" name="cars[]" value="WR4252">WR4252<br/>
      <input type="checkbox" name="cars[]" value="ABak">ABak<br/>
      <input type="checkbox" name="cars[]" value="ABaü630">ABaü630<br/>
    </fieldset>
    <input type="submit" value="Order Train">
  </form>
</div>

@endsection
