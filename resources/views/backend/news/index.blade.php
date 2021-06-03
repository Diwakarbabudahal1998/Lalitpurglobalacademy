@extends('layouts.app')
@section('title')
News | Omega Secondary School
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
                           <h3 class="mb-0">Posted News</h3>
                       </div>
                       <div class="col text-right">
                           <a href="{{route('news.create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add a News</a>
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
                               <th scope="col">Title</th>
                               <th scope="col">Category</th>
                               <th scope="col">Image</th>
                               <th scope="col">Posted On</th>
                               <th scope="col">Operations</th>


                           </tr>
                       </thead>
                       <tbody>
                       @foreach($news as $n)
                                <tr>
                                    <th scope="row">
                                      {{$n->id}}
                                    </th>
                                    <td>
                                       {{$n->news_title}}
                                    </td>
                                    <td>
                                        {{$n->news_category}}
                                    </td>
                                    <td>
                                      <img src="{{asset('/storage/'.$n->news_image)}}" style="height:100px;width:100px;"/> 
                                    </td>
                                    <td>
                                        {{$n->created_at->diffForHumans()}}
                                    </td>
                                    <td class="d-flex justify-content-spread-around pt-5">
                                      <a href="{{route('news.show',$n->id)}}"><button class="btn-sm btn-outline-warning" style="margin-right:8px;"><i class="far fa-eye"></i></button></a>
                                      <a href="{{route('news.edit',$n->id)}}"><button class="btn-sm btn-outline-info" style="margin-right:8px;"><i class="far fa-edit"></i></button></a>
                                    <form method="POST" action="{{route('news.destroy',$n->id)}}">@csrf{{method_field('DELETE')}}<button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm('Do you want to delete this news?')"><i class="far fa-trash-alt"></i></button></form>
                                    </td>
                                </tr>
                               @endforeach
                          </tbody>
                   </table>
                   {{$news->links()}}

               </div>
           </div>
       </div>
    
   </div>
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush