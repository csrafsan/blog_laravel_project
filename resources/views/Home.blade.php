<select>
@forelse($DataKey as $CountryName)
<option value="">{{$CountryName}}</option> 
@empty
<option value=""><p>No country</p></option>
@endforelse
</select>

@if($LogInStatusKey==true)
<p>You have successfully logged In</p>
@elseif($LogInStatusKey==false)
<p>You are not logged In</p>
@else
<p>LogIn status not found</p>
@endif


