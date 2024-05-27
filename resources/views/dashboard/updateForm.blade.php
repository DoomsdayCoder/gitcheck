<x-ui-layout>
    <x-form-validation class="dyForm" action='/comicUpdate/{{ $library->id }}' enctype='multipart/form-data'
        method="put">
        <div class="card border border-0 rounded-0 trans">
            <x-view-header>
                @livewire('preview-image', ['image' => $library->cover_image])

                <div class="card-body var-2 d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-3 checktype">
                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Title:
                            <x-input-basic name='name' class="w-100" value="{{ $library->name }}"></x-input-basic>
                        </div>


                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Reading_Status:
                            <select name='reading_status' class="form-select-sm border" aria-label="Select Status">
                                <option value="Unread" {{ $library->reading_status == 'Unread' ? 'selected' : '' }}>
                                    Unread</option>
                                <option value="Reading" data-typeid='1'> Reading</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Manga_Status:
                            <select name='manga_status' class="form-select-sm border" aria-label="Select Status">
                                <option value="Ongoing" selected>Ongoing</option>
                                <option value="Hiatus" data-typeid='1'>Hiatus</option>
                                <option value="Completed">Finished</option>
                                <option value="Dropped" data-typeid='1'>Dropped</option>
                            </select>
                        </div>


                        <div class="bookmark-input d-flex gap-2 text-secondary m-0 align-items-center d-none">
                            Ch_no:
                        </div>
                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Website:
                            <x-input-basic name='link' class="w-100" value="{{ $library->link }}"></x-input-basic>
                        </div>
                    </div>
                    <div class="d-flex gap-2 text-secondary">
                        Tags:
                        {{-- Specialized for Entry and Update form --}}
                        <x-tags-container></x-tags-container>
                    </div>
                </div>

            </x-view-header>

            <div class="col-12 pt-3 px-3">
                <h4 class="fs-6 text-muted fw-bold m-0 mb-2">Review:</h4>
                <div class="form-floating review">
                    <textarea id='review' name="review" class="form-control" placeholder="">{{ $library->review }}</textarea>
                    <label for="review w-100">Write a review</label>
                </div>
            </div>

        </div>
        <div class="px-3 my-3">
            <button class="btn btn-primary" type='submit'>Update</button>
        </div>

    </x-form-validation>

    <x-tags-action-modal></x-tags-action-modal>

    <x-entry-update-tags :library='$library'></x-entry-update-tags>


</x-ui-layout>
