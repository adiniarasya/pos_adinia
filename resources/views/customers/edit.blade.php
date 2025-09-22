<h3>Edit Customers </h3>
<form action ="{{ route ('customer.update', $dataeditcustomer->customer_id) }}" method="POST">
    {{csrf_field()}}
    @method ('PUT')
    <label > Nama : </label><br>
    <input type="text" name="name" value="{{$dataeditcustomer->name}}"required>
    <br>
    <label>Phone :</label><br>
    <textarea name="phone">{{$dataeditcustomer->phone}}</textarea>
    <br>
    <label>Address :</label><br>
    <textarea name="address">{{$dataeditcustomer->address}}</textarea>
    <br>
    <button type="submit">Update</button>
</form>