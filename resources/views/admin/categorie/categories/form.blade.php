<div class="form-group {{ $errors->has('libelle') ? 'has-error' : ''}}">
    <label for="libelle" class="control-label">{{ 'Libelle' }}</label>
    <input class="form-control" name="libelle" type="text" id="libelle" value="{{ isset($category->libelle) ? $category->libelle : ''}}" >
    {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
