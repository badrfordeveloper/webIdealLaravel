<div class="row">
    <div class="col-md-6">
        <div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="col-md-3 col-form-label">{{ 'Name' }}</label>
        	<div class="col-md-9">
            	<input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : old('name') }}" >

            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="col-md-3 col-form-label">{{ 'Email' }}</label>
        	<div class="col-md-9">
            	<input class="form-control" name="email" type="text" id="email" value="{{ isset($user->email) ? $user->email : old('email') }}" >

            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        @if(isset($user))
            <div class="form-group row {{ $errors->has('mycheckbox') ? 'has-error' : ''}}">
                <label for="mycheckbox" class="col-md-3 col-form-label">{{ 'Modifier Mot de Passe' }}</label>
                <div class="col-md-9">
                   <label> <input type="checkbox"  id="mycheckbox" class="i-checks" name="mycheckbox" >   </label>
                </div>
            </div>                                
        @endif
        <div style="{{ (@$user) ? 'display: none;' : '' }}" id="SectionPassword" class="form-group row {{ $errors->has('password') ? 'has-error' : ''}}">
            <label for="password" class="col-md-3 col-form-label">{{ 'Mot de passe' }}</label>
        	<div class="col-md-9">
            	<input class="form-control" name="password" type="password" id="password" value="{{  old('password') }}" >

            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group row {{ $errors->has('role_id') ? 'has-error' : ''}}">
            <label for="role_id" class="col-md-3 col-form-label">{{ 'Role' }}</label>
            <div class="col-md-9">
                <select class="select2 form-control custom-select" required id="role_id" name="role_id" style="width: 100%; height:36px;">
                    <option value="" selected>Selectionnez</option>
                    @if(count($roles))
                        @foreach($roles as $item)
                            @if(isset($user->role_id) && $item->id == $user->role_id)
                                <option selected value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @endif
                        @endforeach
                    @endif
                </select>
                 <label for="role_id" generated="true" class="error" style="display: none;"></label>

            {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

