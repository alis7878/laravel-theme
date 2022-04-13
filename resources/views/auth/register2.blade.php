{{-- @extends('layouts.master') --}}
<div id="gender-group" class="{{ $errors->has('gender') ? ' has-error' : '' }}">
    {{-- <label for="Phone"><i class="zmdi zmdi-phone"></i></label> --}}
    {{-- <div class="col-md-6 radio-group"> --}}
    <div><input id="female"  type="radio" name="gender" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }} >Female</div>
    <div><input id="male" type="radio" name="gender" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} >Male</div>
    <div><input id="other" type="radio" name="gender" value="Others" {{ (old('sex') == 'other') ? 'checked' : '' }} >Other</div>
    @if ($errors->has('gender'))
        <span class="help-block">
        <strong>{{ $errors->first('gender') }}</strong>
                        </span>
     @endif
    {{-- </div> --}}
</div>
<div id="edu-group" class="form-group{{ $errors->has('edudetails') ? ' has-error' : '' }}">
    {{-- <label for="Phone"><i class="zmdi zmdi-phone"></i></label> --}}
    {{-- <label for="edudetails" class="col-md-4 control-label">Education and Occupation</label> --}}
    <span>  </span>
    <hr>
    <div class="col-md-10">
    Highest-Education
    <select name="education">
    <option value="Graduate">Graduate</option>
    <option value="Plustwo">Plustwo</option>
    <option value="HighSchool">HighSchool</option>
    <option value="UpperPrimary">UpperPrimary</option>
    <option value="Primary">Primary</option>
    </select>
    <br></br>
        Occupation
    <select name="occupation">
    <option value="Student">Student</option>
    <option value="Private">Private</option>
    <option value="Government">Government</option>
    <option value="Organisation">Organisation</option>
    <option value="Freelancer">Freelancer</option>
    </select>

    @if ($errors->has('edudetails'))
    <span class="help-block">
    <strong>{{ $errors->first('edudetails') }}</strong>
    </span>
    @endif
    </div>
    <hr>
</div>
<div class="form-group{{ $errors->has('sports') ? ' has-error' : '' }}">
<label for="sports" class="col-md-4 control-label">Sports</label>
<div class="col-md-6">
<input type="checkbox" name="check[]" value="Football" checked/> Football
<input type="checkbox" name="check[]" value="Cricket"/> Cricket
<input type="checkbox" name="check[]" value="Tennis"/> Tennis
@if ($errors->has('sports'))
<span class="help-block">
<strong>{{ $errors->first('sports') }}</strong>
</span>
@endif
</div>
</div>
