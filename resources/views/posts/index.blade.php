
<form method="POST" action="/auth/">
<div class="mt-4">
    <x-label for="officeName" :value="__('Assigned Office')" />
        <input select id = "assignedOffice" name="assignedOffice" class="block mt-1 w-full">
            <option value="old(officeName)" selected disabled>Select Office
                @foreach ($officeName as $row)
                <option value="{{ $row->id }}">{{ $row->officeName }}</option>
            </option>
            @endforeach
        </select>
</div>
</form>