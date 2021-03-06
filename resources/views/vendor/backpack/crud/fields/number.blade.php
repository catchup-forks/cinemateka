<!-- number input -->
  <div class="form-group col-md-{{ $field['colspan'] or 12 }}">
    <label>{{ $field['label'] }}</label>
    <input
    	type="number"
    	class="form-control"
        step="{{ $field['step'] or 1 }}"

    	@foreach ($field as $attribute => $value)
            @if (is_string($attribute))
        		@if($attribute == 'value')
                        {{ $attribute }}="{{ old($field['name']) ? old($field['name']) : $value }}"
                @else
                    {{ $attribute }}="{{ $value }}"
                @endif
            @endif
    	@endforeach
    	>
  </div>
