<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staff</title>
</head>
<style>
    #a{
        align-self: center;
        margin: auto;
    }

    #ta{

            align-self:center;
            margin: auto;
    }

</style>
<body>


{{--        <select name="TenDanhSach">--}}
{{--                @foreach($department as $row)--}}
{{--                <option value="{{$row -> id_department}}">  {{$row -> department_name}}  </option>--}}
{{--                @endforeach--}}
{{--        </select>--}}
{{--        <button type="submit"></button>--}}


    <table border="1" id="ta">
        <thead>
            <tr>
                <th>ID</th>
                <th>Staff_name</th>
                <th>Department</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>

        @foreach($staff as $row)

            <tr>
                <td>{{$row->staff_id}}</td>
                <td>{{$row->staff_name}}</td>
                <td>{{$row->Name}}</td>
                <td><a href="/admin/edit/{{$row->staff_id}}">Edit</a> | Delete</td>
            </tr>
        @endforeach

        </tbody>


    </table>
    <form method ="get" action="addstaff">  <button type="submit" id="a"> Insert </button></form>
    <form> </form>

</body>
</html>
