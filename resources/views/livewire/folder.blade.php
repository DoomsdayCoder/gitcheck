<div class ="d-flex gap-2 text-secondary m-0 align-items-center">
    Folder:
    @if (!empty($selectoptions))
        <select name="folder_id" id="folderSelect" class="form-select-sm border" wire:model="folder_id" wire:change="InsertOnChange">
            @foreach ($selectoptions as $folderId => $details)
                <option value="{{$folderId}}" {{$details['selected']}}>{{$details['folder_name']}}</option>
            @endforeach
        </select>
        @php
            var_dump($selectoptions[0]);
        @endphp
    @endif
</div>
