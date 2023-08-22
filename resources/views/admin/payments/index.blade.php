@extends('layouts.admin')
@section('content')
    <main>
    <div class="container-fluid px-4">
                        <h1 class="mt-4">Payments</h1>
                       
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Payments List
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
                                        @foreach($payments as $payment)
                                          <tr>
                                            <td>{{$payment->name}}</td>
                                            <td>{{$payment->logo}}</td>
                                           
                                          </tr> 

                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $payments->links() }}
                            </div>
                        </div>
                    </div>
    </main>

  
@endsection