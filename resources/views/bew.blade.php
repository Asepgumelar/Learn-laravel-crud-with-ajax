@extends('layouts.app')
@section('content')

    <div class="container mt-4 mb-4" id="rate-list">
        <div id="ratings-list" name="ratings-list">
        @foreach($rating as $pr)
            <div class="card" id="rating{{$pr->id}}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="img">
                                <!-- @if($pr->user->image)
                                <img src="{{url('storage', $pr->user->image)}}" class="img img-rounded rounded-circle  mx-auto d-block img-fluid" style="width:50px;height:50px;"/>
                                @else
                                <img src="{{url('img/profile.png')}}" class="img img-rounded rounded  mx-auto d-block img-fluid" style="width:50px;height:50px;"/>
                                @endif -->
                            </div>            
                            <p class="nav-item text-center">{{$pr->created_at}}</p>
                        </div>
                        <div class="col-md-10">
                            <p><a href=""><strong>{{$pr->user->name}}</strong></a>
                            @if($pr->rating == 5)
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            @elseif($pr->rating == 4)
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            @elseif($pr->rating == 3)
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            @elseif($pr->rating == 2)
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            @elseif($pr->rating == 1)
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning far fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                            @endif
                            </p>
                            <p>{!!$pr->description !!}</p>
                            <p>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $rating->appends(Request::all())->links() }}
        </div>
    </div>
 @endsection
@section('footContent')
<button id="btn-rates" name="btn-rates" class="ml-5 btn btn-primary mb-2">Create New rating</button>
  
  <div class="modal fade" id="rateModal" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="rateModalLabel">rating Editor</h4>
              </div>
              <div class="modal-body">
                  <form id="clearForm" name="clearForm" class="form-horizontal" novalidate="">
                      <div class="form-group">
                          <label for="inputrating" class="col-sm-2 control-label">rating</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter URL" value="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Description</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="desc" name="description" placeholder="Enter rating Description" value="">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="btn-rating" value="rates">rating changes
                  </button>
                  <input type="hidden" id="rating_id" name="rating_id" value="0">
              </div>
          </div>
      </div>
  </div>
  

@endsection