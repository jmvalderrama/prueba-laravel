<h1>Rick and Morty API</h1>

<h2>Descripción del personaje: </h2>
<form method="POST" action="/save">
    <p>Nombre: </p>
    <input type="text" id="name" name="name" value="{{ $response['name'] }}" required>
    <p>Tipo: </p>
    <input type="text" id="type" name="type" value="{{ $response['type'] }}">
    <p>Estado: </p>
    <input type="text" id="status" name="status" value="{{ $response['status'] }}" required>
    <p>Especie: </p>
    <input type="text" id="species" name="species" value="{{ $response['species'] }}">
    <p>Género: </p>
    <input type="text" id="gender" name="gender" value="{{ $response['gender'] }}">
    <p>Observaciones:</p>
    <textarea id="observations" name="observations" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Enviar">
</form>
