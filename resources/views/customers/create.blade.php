<h3>Add Customer</h3>
<form action="{{ route('customer.store') }}" method="POST">
{{ csrf_field() }}
<label>Nama:</label><br>
<input type="text" name="name" value="{{old('name')}}">
<br>
@if ($errors->has('name'))
<span>{{$errors->first('name')}}</span>
@endif
<br>
<label>nomor telp:</label><br>
<input type="text" name="phone">
<br>
@if ($errors->has('phone'))
<span>{{$errors->first('phone')}}</span>
@endif
<br>
<label>alamat:</label><br>
<textarea name="text" name="address">{{ old('address') }}</textarea>
<br>
@if ($errors->has('address'))
<span>{{$errors->first('address')}}</span>
@endif
<br>
<button type="submit">save</button>
</form>

