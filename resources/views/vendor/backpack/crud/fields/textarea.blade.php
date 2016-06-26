<!-- textarea -->
  <div class="form-group col-md-{{ $field['colspan'] or 12 }} {{ $field['cssclass'] or '' }}">
    <label>{{ $field['label'] }}</label>
    <textarea
    	class="form-control"

    	@foreach ($field as $attribute => $value)
    		@if (is_string($attribute) && is_string($value))
	    		{{ $attribute }}="{{ $value }}"
    		@endif
    	@endforeach

    	>{{ old($field['name']) ? old($field['name']) : ( isset($field['value']) ? $field['value'] : '') }}</textarea>
  </div>