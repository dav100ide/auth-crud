@extends('layouts.admin')

@section('content')
   <h1>lista progetti</h1>
   <table class="table">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">customer</th>
            <th scope="col">azioni</th>
         </tr>
      </thead>
      <tbody>
            @foreach ($projects as $project)
               <tr>
                  <td>{{$project->id}}</td>
                  <td>{{$project->name}}</td>
                  <td>{{$project->customer}}</td>
                  <td>
                     <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success">
                        <i class="fa-regular fa-eye"></i>
                     </a>
                  </td>
               </tr>
            @endforeach
      </tbody>
   </table>
@endsection