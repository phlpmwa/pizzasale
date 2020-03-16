  @extends('layouts.layout')
  @section('content')
       
       
        <div class="wrapper create-pizza">
<h1>Create a New Pizza</h1>
<form action="/pizzas" method="POST">
    @csrf
<label for="Name">Your Name:</label>
<input type="text" id="name" name="name">
<label for="Type">Choose Pizza Type:</label>
<select name="type" id="type">
    <option value="margarita">Margarita</option>
    <option value="hawaiian">Hawaiian</option>
    <option value="veg suprem">Veg Supreme</option>
</select>
<label for="base">Choose base Type:</label>
<select name="base" id="base">
    <option value="cheesy crust">cheesy crust</option>
    <option value="garlic crust">garlic crust</option>
    <option value="thin $ cripsy">VThin and cripsy</option>
</select>
<input type="submit" value="Order Pizza">
</form>
        </div>
    @endsection