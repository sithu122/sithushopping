@extends('layouts.admin')
@section('content')
    <main>
    <div class="container-fluid px-4">
                        <h1 class="mt-4">Categories</h1>
                       
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Categories List
                            </div>
                            <div class="card-body">
                                <table id="" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <!-- <th>Price</th> -->
                                            <!-- <th>Discount</th>
                                            <th>Instock</th>
                                            <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <!-- <th>Price</th> -->
                                            <!-- <th>Discount</th>
                                            <th>Instock</th>
                                            <th>Action</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($categories as $category)
                                          <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->photo}}</td>
                                           
                                          </tr> 

                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
    </main>

  
@endsection