<x-ui-layout>
    <x-form-validation class="dyForm" action='/comicentry' enctype='multipart/form-data'>
        <div class="card border border-0 rounded-0 trans">
            <x-view-header>

                @livewire('preview-image')

                <div class="card-body var-2 d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-3 checktype">
                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Title:
                            <x-input-basic name='name' class="w-100" req='required'></x-input-basic>
                        </div>

                        
                        <div class="bookmark-input d-flex gap-2 text-secondary m-0 align-items-center">
                            Ch_no:
                            <x-input-basic name='bookmark' class="w-100"
                                placeholder='Enter last chapter you read..'></x-input-basic>
                        </div>
                        <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                            Website:
                            <x-input-basic name='link' class="w-100"></x-input-basic>
                        </div>
                    </div>
                    <div class="text-secondary d-flex">
                        Tags:
                        {{-- Specialized for Entry and Update form --}}
                        <x-tags-container></x-tags-container>
                    </div>
                </div>

                <div class="selections">
                    <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                        R_Status:
                        <select name='reading_status' class="form-select-sm border" aria-label="Select Status">
                            <option value="Unread">Unread</option>
                            <option value="Reading"> Reading</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div class="d-flex gap-2 text-secondary m-0 align-items-center">
                        M_Status:
                        <select name='manga_status' class="form-select-sm border" aria-label="Select Status">
                            <option value="Ongoing" selected>Ongoing</option>
                            <option value="Hiatus">Hiatus</option>
                            <option value="Completed">Finished</option>
                            <option value="Dropped">Dropped</option>
                        </select>
                    </div>
                    @livewire('folder')
                </div>

            </x-view-header>

            <div class="col-12 pt-3 px-3">
                <h4 class="fs-6 text-muted fw-bold m-0 mb-2">Review:</h4>
                <div class="form-floating review">
                    <textarea id='review' name="review" class="form-control" placeholder=""></textarea>
                    <label for="review w-100">Write a review</label>
                </div>
            </div>

        </div>
        <div class="px-3 my-3">
            <button class="btn btn-primary" type='submit'>New Entry</button>
        </div>
    </x-form-validation>

    <x-tags-action-modal></x-tags-action-modal>

    <x-entry-update-tags></x-entry-update-tags>

</x-ui-layout>
