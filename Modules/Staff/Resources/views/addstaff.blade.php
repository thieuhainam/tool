<form method="post" action="Staff">
    @method('POST')
    @csrf
    <p>
        <label for="namestaff">NameStaff</label><br>
        <input type="text" name="namestaff" value="">
    </p>
    <select name="TenDanhSach">
        @foreach($department as $row)
        <option value="{{$row -> id}}">  {{$row -> Name}}  </option>
        @endforeach
    </select>



    <p>
        <button type="submit">Submit</button>
    </p>
</form>


