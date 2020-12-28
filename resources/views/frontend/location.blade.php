<div class="row duplicate" id="duplicateDiv">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding8">
        <select class="from-control from-location select2" name="from_location[]" onchange="loadCars()">
            <option value="">Drop of... click to select airport or city</option>
            @foreach($locations as $location)
            <option @if($locationId == $location->location_name) selected @endif value="{{ $location-> location_name }}"> 
                @if(Session::get('language') == 'russian') 
                    {{ $location->location_name_rus }}
                @else
                    {{ $location->location_name }}
                @endif
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 padding8">
        <select class="from-control to-location select2" name="to_location[]" onchange="loadCars()">
            <option value="">Drop of... click to select airport or city</option>
            @foreach($locations as $location)
            <option value="{{ $location-> location_name }}">
                @if(Session::get('language') == 'russian') 
                    {{ $location->location_name_rus }}
                @else
                    {{ $location->location_name }}
                @endif
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 padding8">
        <button class="btn btn-light rem" id="remove" type="button" onclick="removeIt(this)"><i class="fa fa-times"></i></button>
    </div>
</div>

<script type="text/javascript">
    $(".select2").select2();
</script>