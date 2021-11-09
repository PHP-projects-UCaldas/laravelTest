{{-- 'published', 'reject', 'in_review' --}}
<option value="Revisión">En revisión</option>
<option value="rechazado" {{ $val == 'reject' ? 'selected = "selected"' : '' }}>
    Rechazado
</option>
<option value="publicado" {{ $val == 'published' ? 'selected = "selected"' : '' }}>
    Publicado
</option>