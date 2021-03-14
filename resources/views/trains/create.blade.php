@extends('layouts.layout')

@section('content')
<div class="wrapper create-train">
  <h1>Create a New Train</h1>
  <form action="/trains" methods="POST">
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
    <input type="submit" value="Order Train">
  </form>
</div>

@endsection
