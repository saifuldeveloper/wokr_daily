<ul class="d-flex gap-30 justify-content-end align-items-center">
    @if(hasPermission('cities.edit'))
        <li>
            <a class="edit_modal" href="javascript:void(0)" data-fetch_url="{{ route('cities.edit', $city->id) }}"
               data-route="{{ route('cities.update', $city->id) }}"
               data-modal="edit_city"><i class="las la-edit"></i></a>
        </li>
    @endif
    @if(hasPermission('cities.destroy'))
        <li>
            <a href="javascript:void(0)"
               onclick="delete_row('{{ route('cities.destroy', $city->id) }}')"
               data-toggle="tooltip"
               data-original-title="{{ __('delete') }}"><i class="las la-trash-alt"></i></a>
        </li>
    @endif
</ul>
