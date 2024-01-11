@foreach($projects as $project)
<tr>
    <td>{{$project->nom}}</td>
    <td>
       {{$project->description}}
    </td>
    <td>11-7-2014</td>
    <td>11-7-2014</td>
    <td class="text-center">
        <a href="././tache/index.html" class="btn btn-sm btn-default mx-2">les Tâches</a>
        <a href="./show.php" class='btn btn-default btn-sm'>
            <i class="far fa-eye"></i>
        </a>
        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
    </td>
</tr>
@endforeach