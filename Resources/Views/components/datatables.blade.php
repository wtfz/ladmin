<x-ladmin-card>
  <x-slot name="flat">
    <div class="table-responsive">
      <div class="top-button">
        {!! $topButton ?? null !!}
      </div>
      <table class="table ladmin-datatables" data-options='{!! json_encode($options) !!}'>
        <thead>
          <tr>
            @foreach ($fields as $field)
              <th class="{{ $field['class'] ?? null }}">{{ $field['name'] }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </x-slot>
</x-ladmin-card>
