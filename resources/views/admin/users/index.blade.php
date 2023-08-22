@extends('layouts.admin')
@section('content')
    <main>
    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                       
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users List
                            </div>
                            <div class="card-body">
                                <table id="" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            
                                            
                                            <!-- <th>Instock</th>
                                            <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                           
                                            
                                            <!-- <th>Instock</th>
                                            <th>Action</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($users as $User)
                                          <tr>
                                            <td>{{$User->name}}</td>
                                            <td>{{$User->email}}</td>
                                            
                                            
                                           
                                          </tr> 

                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
    </main>

  
@endsection