
<div class="col-md-4 col-md-offset-4" style="margin-left: 550px; margin-top: 75px; margin-bottom: 100px">


    <h1> Add Player</h1>
    <br>

<form method="POST" action="{{ url('players') }}">
    @csrf
    <div class="form-group" >
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control
@error('name') is-invalid @enderror"
            value="{{ old('name') }}"
            required
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('name')
        <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
        @enderror



        <label style="padding-top: 15px" for="name">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            autocomplete="address"
            placeholder="Type your address"
            class="form-control
@error('address') is-invalid @enderror"
            value="{{ old('address') }}"
            required
            aria-describedby="nameHelp">
        <!--<small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small> -->
        @error('address')
        <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
        @enderror


        <div class="form-group">
            <label  style="padding-top: 15px" for="name">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
        </div>



        <label style="padding-top: 15px" for="name">Retired</label>

        <div class="form-check" >
            <input class="form-check-input" type="radio" name="retired" id="exampleRadios1" value="1" required>
            <label class="form-check-label" for="exampleRadios1">
                Yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="retired" id="exampleRadios2" value="0" >
            <label class="form-check-label" for="exampleRadios2">
                No
            </label>
    </div>
        <br>

        <div class="row">
            <label class="label col-md-2 control-label">Country</label>
            <div class="col-md-10">
                <select class="form-control"
                name="country_id">
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}
                        </option>
                    @endforeach

                </select>

            </div>
        </div>
        <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </div>
</form>
</div>







