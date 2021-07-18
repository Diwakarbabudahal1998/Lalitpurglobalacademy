@extends('layouts.app')

@section('title')
Add a Video | LGA
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('.faculty').on('change', function() {
            if (this.value == 2 || this.value == 3 || this.value == 4 || this.value == 5) $('.stream').hide();
            if (this.value == 0 || this.value == 1) $('.stream').show();
        });
    });




    var selectableValues = [{
            'title': 'Science',
            'values': [
                'Physical',
                'Biological'
            ]
        },
        {
            'title': 'Management',
            'values': [
                'Computer',
                'Business Maths',
                'Business Studies',
                'Economics',
                'Marketing ',
                'Travel and Mountaineering ',
                'Hotel Management '
            ]
        },
        {
            'title': 'Humanities',

        },
        {
            'title': 'Law',

        },
        {
            'title': 'Science (All)',
        },
        {
            'title': 'Management (All)',
        }
    ];

    var $faculty = $stream = false;

    jQuery(function($) {

        $faculty = $('#faculty');
        $stream = $('#stream');

        // Populate Select One
        $.each(selectableValues, function(k, v) {
            $faculty.append('<option value="' + k + '">' + v.title + '</option>');
        });

        $faculty.on('change', function() {
            populateSelectTwo(this.value);
        });

    });

    function populateSelectTwo(parentKey) {
        $('option', $stream).remove();

        $.each(selectableValues[parentKey].values, function(k, v) {
            $stream.append('<option value="' + v + '">' + v + '</option>');
        });
    }
</script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row justify-content-center">

        <div class="col-xl-10 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="col-12 mb-0">Add a Video</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('digital-library.store') }}" encType="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('video_link') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-video_link">Video Link</label>
                                    <input type="text" name="video_link" id="input-video_link" class="form-control form-control-alternative{{ $errors->has('video_link') ? ' is-invalid' : '' }}" placeholder="{{ __('Paste a video link here.') }}" value="" required autofocus>

                                    @if ($errors->has('video_link'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('video_link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('grade') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-grade">Grade</label>
                                    <select class="form-control" name="grade" id="grade" required>
                                        <option value="11" selected>XI</option>
                                        <option value="12">XII</option>

                                    </select>
                                    @if ($errors->has('grade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('faculty') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-faculty">Select a Faculty</label>
                                    <select class="form-control faculty" name="faculty" id="faculty" required>
                                        <option value="" selected hidden></option>
                                    </select>
                                    @if ($errors->has('faculty'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 stream">
                                <div class="form-group{{ $errors->has('stream') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="stream">Select a Stream</label>
                                    <select class="form-control" name="stream" id="stream">
                                        <option value="" selected hidden></option>


                                    </select>
                                    @if ($errors->has('stream'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stream') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>



                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4 mb-5">Add a Video</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    @endsection