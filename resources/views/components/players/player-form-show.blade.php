


<h1>PLAYER'S INFO</h1>

<div>

    <div class="form-group" >
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control"
            value="{{ $player->name }}"
            disabled
            aria-describedby="nameHelp">




        <label style="padding-top: 15px" for="name">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            autocomplete="address"
            placeholder="Type your address"
            class="form-control"
            value="{{ $player->address }}"
            disabled
            aria-describedby="nameHelp">




        <div class="form-group">
            <label  style="padding-top: 15px" for="name">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" disabled>{{ $player->description }}</textarea>
        </div>

        <div class="row">
            <label class="label col-md-2 control-label">Country</label>
            <div class="col-md-10">
                <select class="form-control">
                    @foreach ($countries as $country)
                        <option value="">{{$country->name}} - {{$country->code}}
                        </option>
                    @endforeach

                </select>

            </div>
        </div>

        <label style="padding-top: 15px" for="name">Retired</label>

        <div class="form-check" >
            <input class="form-check-input" type="radio" name="retired" id="exampleRadios1" value="1" @if($player->retired == 1) checked @endif  disabled >
            <label class="form-check-label" for="exampleRadios1">
                Yes
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="retired" id="exampleRadios2" value="0" @if($player->retired == 0) checked @endif disabled>
            <label class="form-check-label" for="exampleRadios2">
                No
            </label>


        </div>

    </div>
</div>


