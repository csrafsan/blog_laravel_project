<select>
@forelse($DataKey as $CountryName)
<option value="">{{$CountryName}}</option> 
@empty
<option value=""><p>No country</p></option>
@endforelse

</select>

