<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($post->titre) ? $post->titre : ''}}" >
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($post->photo) ? $post->photophoto : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label for="categorie_id" class="control-label">{{ 'Categorie Id' }}</label>
    <select name="categorie_id" id="categorie_id"  class="form-control">

        <option>Selectionez une Catégorie</option>
        @forelse ( $categories as $cat)
            @if(isset($post->categorie_id) && $post->categorie_id == $cat->id)
                <option selected value="{{ $cat->id }}">{{ $cat-> libelle}}</option>
            @else
                <option  value="{{ $cat->id }}">{{ $cat-> libelle}}</option>
            @endif
        @empty
        @endforelse

    </select>
    {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
