<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách công việc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2 style="margin-left: 35%">Hiển thị danh sách công việc</h2>
<a href="{{route('task.create')}}" class="btn btn-primary">ADD</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">WorkContent</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($tasks as $key => $task)
    <tbody>
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$task->name}}</td>
        <td>{{$task->work_content}}</td>
        <td>{{$task->date}}</td>
        <td>
            <a href="{{route('task.show', ['id'=> $task->id])}}">
                <button class="btn btn-primary">Show</button>
            </a>
            <a href="{{route('task.edit', ['id'=> $task->id])}}">
                <button class="btn btn-danger">Edit</button>
            </a>
            <a href="{{route('task.delete', ['id' => $task->id])}}">
                <button class="btn badge-info">Delete</button>
            </a>
        </td>
    </tr>
    </tbody>
{{--        @empty($tasks)--}}
{{--            <p>Danh sách đang trống không</p>--}}
{{--        @endempty--}}
        @endforeach
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>