@extends('layouts.app')

@section('content')


          <h1 class="text-center my-5 h2">Country Details</h1>

                 <div class="row justify-content-center">

                 <div class="col-md-6">

                     <div class="card card-default">

                      <div class="card-header">

                          Which Country do you like the most ? Click the Great Button

                      </div>

                      <div class="card-body">

                          <ul class="list-group">

                              @foreach($todos as $todo)

                                  <li class="list-group-item">

                                      {{ $todo->name }}

                                      @if(!$todo->completed)

                                          <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm ml-1 float-right" style="color: white;">
                                                Great
                                          </a>

                                      @endif

                                      <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">
                                                View
                                      </a>

                                  </li>

                              @endforeach

                          </ul>


                      </div>

                  </div>


              </div>

                </div>

             </div>


@endsection
