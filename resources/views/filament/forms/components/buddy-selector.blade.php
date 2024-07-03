@php
    $availtime = $action->availability->sched_availability_time;
    $availday = $action->availability->sched_availability_day;

    $itemsusers = \App\Models\Itemuser::with('user', 'availability')->whereHas('availability', function($query) use($availday, $availtime){
      $query->where('sched_availability_day', $availday)->where('sched_availability_time', $availtime);
    })->has('user')->get();
    $statePath = $getStatePath();
    $id = $getId();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="flex min-w-full">
        <table class="min-w-full bg-white">
        {{-- <thead>
            <tr class="bg-blue-gray-100 text-gray-700">
            <th class="py-3 px-4 text-left">Reading buddy</th>
            <th class="py-3 px-4 text-left">Day</th>
            <th class="py-3 px-4 text-left">Time</th>
            </tr>
        </thead> --}}
        <tbody class="text-blue-gray-900">
            @foreach ($itemsusers as $itemsuser)            
                <label for="{{ $id . '-' . $itemsuser->user->id }}">
                    <tr for="{{ $id . '-' . $itemsuser->user->id }}" class="w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100 border-blue-gray-200 has-[:checked]:border-blue-600 has-[:checked]:text-blue-600">
                        <td class="py-3 px-4">
                        <input type="radio"
                            wire:model="{{ $getStatePath() }}"                
                            id="{{ $id . '-' . $itemsuser->user->id }}"
                            name="{{ $id }}"
                            value="{{ $itemsuser->user->id }}"
                            class="peer mx-2" />
        
                        {{ $itemsuser->user->user_name_first }} {{ $itemsuser->user->user_name_last }}
                        </td>
                        <td class="py-3 px-4">{{ $itemsuser->availability->sched_availability_day }}</td>
                        <td class="py-3 px-4">{{ $itemsuser->availability->sched_availability_time }}</td>
                    </tr>
                </label>
            @endforeach        
        </tbody>
        </table>
    </div>
</x-dynamic-component>





