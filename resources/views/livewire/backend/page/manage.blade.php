<div>
    <form wire:submit.prevent="saveAsDraft">

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="m-0">{{ $pageId ? 'Edit' : 'Create' }} Page</h5>
                    </div>

                    <div class="card-body">


                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" wire:model="title" class="form-control">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" wire:model="slug" class="form-control">
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <label>Content</label>

                            <livewire:quill-text-editor
                                wire:model="content"
                                theme="snow" />
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Meta Title</label>
                            <input type="text" wire:model="meta_title" class="form-control">
                            @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Meta Description</label>
                            <input type="text" wire:model="meta_description" class="form-control">
                            @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="card">

                    <div class="card-header bg-white">
                        <h5 class="m-0">Info</h5>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <div><label class="form-label">Status:</label> {{ $status ?? 'Draft' }}</div>
                            <div><label class="form-label">Created At:</label> {{ $pageId ? \Carbon\Carbon::parse($page->created_at)->format('d M Y h:i A') : 'N/A' }}</div>
                            <div><label class="form-label">Published At:</label> {{ $published_at ? \Carbon\Carbon::parse($published_at)->format('d M Y h:i A') : 'N/A' }}</div>
                            <div><label class="form-label">Created By:</label> {{ $pageId ? ($page->author->name ?? 'N/A') : auth()->user()->name }}</div>
                        </div>

                        <div class="d-flex gap-2 mt-3">
                            <button type="button" wire:click="saveAsDraft" class="btn btn-secondary">Save as Draft</button>
                            <button type="button" wire:click="saveAndPublish" class="btn btn-primary">Save & Publish</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Template</label>
                            <select wire:model="template" class="form-select">
                                <option value="">Select Template</option>
                                <option value="default">Default</option>
                                <option value="contact">Contact</option>
                                <option value="landing">Landing</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Thumbnail</label>
                            <div class="image-preview">
                                @if ($newThumbnail)
                                <img src="{{ $newThumbnail->temporaryUrl() }}">
                                @elseif ($thumbnail)
                                <img src="{{ asset('storage/' . $thumbnail) }}">
                                @endif
                            </div>
                            <input type="file" wire:model="newThumbnail" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </form>
</div>