<div class="row">
    <div class="col-md-5">

        <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="col-sm-2 col-form-label">{{ 'Email' }}</label>
        	<div class="col-sm-10">
            	<input class="form-control" name="email" type="text" id="email" value="{{ isset($mailing->email) ? $mailing->email : old('email') }}" >

            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-5">

        <div class="form-group row {{ $errors->has('nom') ? 'has-error' : ''}}">
            <label for="nom" class="col-sm-2 col-form-label">{{ 'Nom' }}</label>
        	<div class="col-sm-10">
            	<input class="form-control" name="nom" type="text" id="nom" value="{{ isset($mailing->nom) ? $mailing->nom : old('nom') }}" >

            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    

        @if(isset($mailing))
        <div class="col-md-5">
        <div class="form-group row {{ $errors->has('etat') ? 'has-error' : ''}}">
            <label for="etat" class="col-sm-2 col-form-label">{{ 'Etat' }}</label>
        	<div class="col-sm-10">
                <select name="etat" id="etat"  class="form-control">
                  <!--   <option>Selectionez une Catégorie</option>
                    <option <?=(isset($mailing->etat) && $mailing->etat=="Validé") ? 'selected' : '' ?> value="Validé">Validé</option>
                    <option <?=(isset($mailing->etat) && $mailing->etat=="Non Validé") ? 'selected' : '' ?> value="Non Validé">Non Validé</option> -->

                     @foreach (json_decode('{"non":"Non","oui":"Oui"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($mailing->etat) && $mailing->etat == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach

                </select>

            {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>
        @endif
    
    <div class="col-md-2">



        <div class="form-group row">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
            </div>
        </div>
    </div>

