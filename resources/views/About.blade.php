{{-- <select name="" id="">

@foreach ($Datakey as $CountryName )
   <option value="">{{$CountryName}}</option>
@endforeach

</select>
 --}}


 @forelse ($Datakey as $CountryName)

<li>{{$CountryName}}</li>

 @empty

 <p>No Data Found</p>

 @endforelse
