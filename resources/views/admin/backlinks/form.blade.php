<div class="row">
    <div class="col-md-3">
        <div class="form-group row {{ $errors->has('link') ? 'has-error' : ''}}">
            <label for="link" class="col-sm-2 col-form-label">{{ 'Link' }}</label>
        	<div class="col-sm-10">
            	<input class="form-control" name="link" type="text" id="link" value="{{ isset($backlink->link) ? $backlink->link : old('link') }}" >

            {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-2">

        <div class="form-group row {{ $errors->has('type') ? 'has-error' : ''}}">
            <label for="type" class="col-sm-4 col-form-label">{{ 'Follow' }}</label>
        	<div class="col-sm-8">
            	<select name="type" class="form-control m-b" id="type" >
                    @foreach (json_decode('{"non":"Non","oui":"Oui"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($backlink->type) && $backlink->type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group row {{ $errors->has('etat') ? 'has-error' : ''}}">
            <label for="etat" class="col-sm-4 col-form-label">{{ 'Confirmation' }}</label>
        	<div class="col-sm-8">
            	<select name="etat" class="form-control m-b" id="etat" >
                    @foreach (json_decode('{"non":"Non","oui":"Oui"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($backlink->etat) && $backlink->etat == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
            {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>
    <div class="col-md-2">
        <div class="form-group row {{ $errors->has('genre') ? 'has-error' : ''}}">
            <label for="genre" class="col-sm-2 col-form-label">{{ 'Genre' }}</label>
        	<div class="col-sm-10">
            	<input class="form-control" name="genre" type="text" id="genre" value="{{ isset($backlink->genre) ? $backlink->genre : old('genre') }}" >

            {!! $errors->first('genre', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>


        <div class="form-group row">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
            </div>
        </div>
 
    </div>

