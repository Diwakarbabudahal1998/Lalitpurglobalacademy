@extends('layouts.app')
@section('title')
Admissions | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
   
   <div class="row justify-content-center">
       <div class="col-xl-10 mb-5 mb-xl-0">
       @include('flash-message')

           <div class="card shadow">
               <div class="card-header border-0">
                   <div class="row align-items-center">
                       <div class="col">
                           <h3 class="mb-0">Admission Requests</h3>
                       </div>
                    
                   </div>
                   <div class="row pt-2">
                       <div class="col-md-6">
                           @if (session('status'))
                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{ session('status') }}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                           @endif
                       </div>
                   </div>
                   
               </div>
               <div class="table-responsive">
                   <!-- Projects table -->
                   <table class="table align-items-center table-flush">
                       <thead class="thead-light">
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">First Name</th>
                               <th scope="col">Applied</th>

                               <th scope="col">Operations</th>


                           </tr>
                       </thead>
                       <tbody>
                       @foreach($admission as $a)
                                <tr>
                                    <th scope="row">
                                      {{$a->id}}
                                    </th>
                                    <td>
                                       {{$a->first_name}}
                                    </td>
                             
                                    <td>
                                        {{$a->created_at->diffForHumans()}}
                                    </td>
                                    <td class="d-flex justify-content-spread-around">
                                      <a href="{{route('admission.show',$a->id)}}"><button class="btn-sm btn-outline-warning" style="margin-right:8px;"><i class="far fa-eye"></i></button></a>
                                    </td>
                                </tr>
                               @endforeach
                          </tbody>
                   </table>

               </div>
           </div>
       </div>
    
   </div>
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush