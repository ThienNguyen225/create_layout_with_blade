<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa công việc</title>
</head>
<body>
<form action="{{route('task.destroy', ['id'=>$task->id])}}" method="post">
    @csrf
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>work_content</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->work_content}}</td>
            <td>{{$task->date}}</td>
        </tr>
    </table>
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="{{'task.list'}}">Back</a>
</form>
</body>
</html>