{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" 
    placeholder="Nombre publicación" value="{{ old('publication', $post -> publication)}}">
</div>
 
<div class="form-control">
    <select name="" id="state_publication">
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revisión</option>
    </select>
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10" 
    placeholder="Contenido de la publicación">
        {{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous() }}" >Eliminar</button>