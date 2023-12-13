@extends('frontend.layouts.master')
@section('title', __('search'))
@section('content')
  <!--====== Start Search Result Section ======-->
  <section class="search-result-section p-t-50 p-t-sm-30 p-b-80 p-b-sm-20">
    <div class="container container-1278">
        <div class="row">
            <div class="col-12">
                <div class="search-sorter justify-content-between m-b-40 m-b-sm-30">
                    <ul class="grid-list">
                        <li class="sort-text">{{__('showing') }} {{ $courses->count() }} {{__('of') }} {{ $courses->count() }} {{__('results') }}</li>
                    </ul>
                    <div class="sort-right">
                        <form action="{{ route('course.search') }}" method="get" class="search-form">
                            <input class="search-field" type="text" name="search_course" placeholder="{{__('course_name') }}" required="">
                            <div class="nk-block-des text-danger">
                                <p class="error last_name_error">{{ $errors->first('search_course') }}</p>
                            </div>
                            <button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 get-result">
                @if($courses->count() > 0)
                <div class="row course-items-v3 list-view">
                    @foreach($courses as $course)
                    <div class="col-md-12 col-sm-6">
                        <div class="course-item">
                            <a href="#" target="_blank" class="course-item-thumb">
                                <img src="{{ getFileLink('80x80', $course->meta_image) }} " alt="{{ $course->title }}">
                            </a>
                            <div class="course-item-body p-0">
                                <div class="course-item-body-inner">
                                    <div class="course-item-header course-item-info justify-content-end">
                                        <ul class="course-category">
                                            <li>
                                                <a href="#">{{__($course->category->getTranslation('title')) }}</a>
                                            </li>
                                        </ul>
                                        <div class="rating-review">
                                            <span class="total-review"><i class="fas fa-star"></i> {{ number_format($course->reviews_avg_rating,2) }}</span>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="#" target="_blank">{{__($course->title) }}</a>
                                    </h4>
                                    <ul class="course-item-info">
                                        <li><i class="fal fa-file-alt"></i> {{ $course->lessons->count() }} {{__('lessons') }}</li>
                                        <li><i class="fal fa-user-friends"></i> {{ $course->enrolls->count() }} {{__('enroll') }}</li>
                                    </ul>
                                </div>
                                <div class="course-item-footer">
                                    <div class="course-price">{{ $course->price }}<small>{{ $course->price }}</small></div>
                                    <div class="course-lesson">
                                        <a href="#" class="template-btn">{{__('details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="search-result-content m-t-120 m-t-md-30 text-center m-b-30">
                    <p>{{__('no_course_found') }} !</p>
                </div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="course-sidebar border-radius-3">
                     <div class="widget widget-checklist">
                            <ul class="category-list-group category-list">
                                <li class="dropdown-title">{{__('all_categories') }} <span>({{ $categories->count() }})</span></li>
                                @foreach($categories->take(2) as $category)
                                <li>
                                    <a href="#">{{ $category->getTranslation('title') }} <span>({{ $category->activeCourses->count() }})</span></a>
                                    <ul class="sub-menu">
                                        @foreach($category->subCategories as $sub_category)
                                        <li>
                                            <label>
                                                <input type="checkbox" value="{{ $sub_category->id }}" name="category_filter[]">
                                                <span>{{ $sub_category->getTranslation('title') }}</span>
                                            </label>
                                            <span>({{ $sub_category->activeCourses->count() }})</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                            <div class="show-more">
                                <a href="javascript:void(0)" id="see_more">{{__('show_more') }}</a>
                            </div>
                        </div>
                    <div class="widget widget-checklist">
                        <ul class="widget-list-group">
                            <li class="dropdown-title">{{__('price') }}</li>
                            <li>
                                <label>
                                    <input type="checkbox" value="all" name="price_filter[]">
                                    <span>{{__('all') }}</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="0" name="price_filter[]">
                                    <span>{{__('paid') }}</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="1" name="price_filter[]">
                                    <span>{{__('free') }}</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-checklist">
                        <ul class="widget-list-group">
                            <li class="dropdown-title">{{__('level') }}</li>
                            <li>
                                <label>
                                    <input type="checkbox" value="all" name="level_filter[]">
                                    <span>{{__('all') }}</span>
                                </label>
                            </li>

                            @foreach($levels as $level)
                            <li>
                                <label>
                                    <input type="checkbox" value="{{ $level->id }}" name="level_filter[]">
                                    <span>{{__($level->title) }}</span>
                                </label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget rating-widget">
                        <div class="rating-group">
                            <h4 class="dropdown-title">{{__('ratings') }}</h4>
                            <label>
                                <input type="checkbox" value="1" name="ratings_filter[]">
                                <span>
                                    <img src="{{ static_asset('frontend/img/rating/rating-1.jpg') }}" alt="rating one">
                                </span>
                            </label>
                            <label>
                                <input class="form-check-input" type="checkbox" value="2"  name="ratings_filter[]">
                                <span>
                                    <img src="{{ static_asset('frontend/img/rating/rating-2.jpg') }} " alt="rating two">
                                </span>
                            </label>
                            <label>
                                <input class="form-check-input" type="checkbox" value="3"  name="ratings_filter[]">
                                <span>
                                    <img src="{{ static_asset('frontend/img/rating/rating-3.jpg') }}" alt="rating three">
                                </span>
                            </label>
                            <label>
                                <input class="form-check-input" type="checkbox" value="4"  name="ratings_filter[]">
                                <span>
                                    <img src="{{ static_asset('frontend/img/rating/rating-4.jpg') }}" alt="rating four">
                                </span>
                            </label>
                            <label>
                                <input class="form-check-input" type="checkbox" value="5"  name="ratings_filter[]">
                                <span>
                                    <img src="{{ static_asset('frontend/img/rating/rating-5.jpg') }} " alt="rating five">
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="route" class="course_filter_route" value="{{ route('course.filter') }}">
    <input type="hidden" name="route" class="category_more" value="{{ route('category.more') }}">
</section>
<!--====== End Search Result Section ======-->
@endsection
@push('js')
<script>
   $(document).ready(function() {
    //=================== course filter ==================
    $('input[type="checkbox"]').on('change', function() {
      filterCourses();
    });
    var route = $('.course_filter_route').val();
    function filterCourses() {
      var category_filter=[];
      var price_filter = [];
      var level_filter = [];
      var ratings_filter = [];

      $('input[name="category_filter[]"]:checked').each(function() {
        category_filter.push($(this).val());
      });

      $('input[name="price_filter[]"]:checked').each(function() {
        price_filter.push($(this).val());
      });
      $('input[name="level_filter[]"]:checked').each(function() {
        level_filter.push($(this).val());
      });

      $('input[name="ratings_filter[]"]:checked').each(function() {
        ratings_filter.push($(this).val());
      });
      $.ajax({
        url: route,
        type: 'post',
        data: {
          category_filter: category_filter,
          price_filter: price_filter,
          level_filter: level_filter,
          ratings_filter: ratings_filter,
          _token : "{{ @csrf_token() }}",
        },
        success: function(response) {
          $('.get-result').html(response);
          console.log(response);
        }
      });
    }
  });

  //======================== see more category
$(document).ready(function(){
    var counter         = 2;
    var url   = $('.category_more').val()
    $(document).on('click', '#see_more', function(){
        $.ajax({
            url:url,
            type:"get",
            dataType:"html",
            data:{counter: counter, _token : "{{ @csrf_token() }}"},
            success:function(response)
            {
                $('.category-list').append(response);
                counter +=5
            },
            error:function(response)
            {
                console.log(response)
            }

        });

    });
});
</script>

@endpush

