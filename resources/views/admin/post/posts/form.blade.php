<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
            <label for="titre" class="control-label">{{ 'Titre Francais' }}</label>
            <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($post->titre) ? $post->titre : ''}}" >
            {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('titreEn') ? 'has-error' : ''}}">
            <label for="titre" class="control-label">{{ 'Titre Anglais' }}</label>
            <input class="form-control" name="titreEn" type="text" id="titreEn" value="{{ isset($post->titreEn) ? $post->titreEn : ''}}" >
            {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="control-label">{{ 'Description Francais' }}</label>
            <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($post->description) ? $post->description : ''}}</textarea>
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('descriptionEn') ? 'has-error' : ''}}">
            <label for="descriptionEn" class="control-label">{{ 'Description Anglais' }}</label>
            <textarea class="form-control" rows="5" name="descriptionEn" type="textarea" id="descriptionEn" >{{ isset($post->descriptionEn) ? $post->descriptionEn : ''}}</textarea>
            {!! $errors->first('descriptionEn', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
            <label for="content" class="control-label">{{ 'Content Francais' }}</label>
            <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>
            {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('contentEn') ? 'has-error' : ''}}">
            <label for="contentEn" class="control-label">{{ 'Content Anglais' }}</label>
            <textarea class="form-control" rows="5" name="contentEn" type="textarea" id="contentEn" >{{ isset($post->contentEn) ? $post->contentEn : ''}}</textarea>
            {!! $errors->first('contentEn', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    
    <div class="custom-file">
        <input name="photo" type="file" id="photo" value="{{ isset($post->photo) ? $post->photophoto : ''}}" class="custom-file-input">
        <label for="photo" class="custom-file-label">Selectionnez une image...</label>
    </div>
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


<div class="form-group {{ $errors->has('tag_id') ? 'has-error' : ''}}">
    <label for="tag_id" class="control-label">{{ 'tags' }}</label>
    <select  id="tag_id"  class="js-example-basic-single js-states form-control" name="tags[]" multiple  style="width: 100%; height:150px;" size="10">

        @forelse ( $tags as $tag)

            <option 

            @if(isset($tagsPost))

                @forelse ( $tagsPost as $tagpost)
                    @if(  $tag->id == $tagpost->tag_id)
                        selected                    

                    @endif
                  
                @empty
                
                @endforelse
            @endif



            value="{{ $tag->id }}">{{ $tag-> libelle}}</option>

        @empty
        @endforelse





    </select>
    {!! $errors->first('tag_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
