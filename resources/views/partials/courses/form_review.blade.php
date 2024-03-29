
@cannot('inscribe', $course)
  @can('review', $course)
    <div class="col-12 pt-0 mt-4 text-center">
      <h2 class="text-muted">{{ __("Escribe una valoración") }}</h2>
      <hr>
    </div>

    <div class="container-fluid">
      <form class="form-inline" action="{{ route('courses.add_review') }}" method="POST" id="rating_form">
        @csrf
        <div class="form-group">
         <div class="col-12">
            <ul class="list-inline" id="list_rating" style="font-size:40px;">
              <li class="list-inline-item star" data-number="1"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item star" data-number="2"><i class="fa fa-star"></i></li>
              <li class="list-inline-item star" data-number="3"><i class="fa fa-star"></i></li>
              <li class="list-inline-item star" data-number="4"><i class="fa fa-star"></i></li>
              <li class="list-inline-item star" data-number="5"><i class="fa fa-star"></i></li>
            </ul>
         </div>
        </div>

         <br>

         <input type="hidden" name="rating_input" value="1">
         <input type="hidden" name="course_id" value="{{ $course->id }}">

         <div class="form-group">
          <div class="col-12">
            <textarea class="form-control" 
                      name="message" id="message" cols="120" rows="8" 
                      placeholder="{{ __("Escribe una reseña") }}">
            </textarea>
          </div>
        </div>

        <button class="btn btn-warning text white" type="sumbit">
            <i class="fa fa-space-shuttle"></i>{{ __("Valorar curso") }}
        </button>
      </form>
    </div>
  @endcan
@endcannot

@push('scripts')
  <script>
    jQuery(document).ready(function() {
      const ratingSelector = jQuery('#list_rating');
      ratingSelector.find('li').on('click', function() {
        const number = $(this).data('number');
        $('#rating_form').find('input[name=rating_input]').val(number);
        ratingSelector.find('li i').removeClass('yellow').each(function(index) {
          if ((index + 1) <= number) {
            $(this).addClass('yellow');
          }
        });
      });
    });
  </script>
@endpush