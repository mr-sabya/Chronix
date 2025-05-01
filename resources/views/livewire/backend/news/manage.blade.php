<div>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">

                    <div class="card-header bg-white">
                        <h5 class="m-0">Add News</h5>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label>Title</label>
                            <input wire:model="title" type="text" class="form-control">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Slug</label>
                            <div class="input-slug">
                                <div class="form-url">
                                    <p class="m-0">http://localhost:8000/news/</p>
                                </div>
                                <input wire:model="slug" type="text" class="form-control">
                            </div>
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Post</label>
                            <livewire:quill-text-editor
                                wire:model="body"
                                theme="snow" />
                            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Excerpt</label>
                            <textarea wire:model="excerpt" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3" wire:ignore>
                            <label for="tag_ids">Tags</label>
                            <select id="tag_ids" multiple class="form-control" style="width: 100%">
                                @foreach($tags as $tag)
                                <option value="{{ $tag->id }}" @if(in_array($tag->id, $tag_ids)) selected @endif>
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>
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
                            <div><label class="form-label">Created At:</label> {{ $newsId ? \Carbon\Carbon::parse($news->created_at)->format('d M Y h:i A') : 'N/A' }}</div>
                            <div><label class="form-label">Published At:</label> {{ $published_at ? \Carbon\Carbon::parse($published_at)->format('d M Y h:i A') : 'N/A' }}</div>
                            <div><label class="form-label">Created By:</label> {{ $newsId ? ($news->user->name ?? '-') : auth()->user()->name }}</div>
                        </div>

                        <div class="d-flex gap-2 mt-3">
                            <button type="button" wire:click="save('draft')" class="btn btn-secondary">
                                Save as Draft
                            </button>

                            <button type="button" wire:click="save('publish')" class="btn btn-primary">
                                Save and Publish
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Category</label>
                            <select wire:model="category_id" class="form-control">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @foreach($cat->children as $subcat)
                                <option value="{{ $subcat->id }}">--{{ $subcat->name }}</option>
                                @endforeach
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label>Image</label><br>
                            <div class="image-preview">
                                @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}">
                                @elseif ($image)
                                <img src="{{ asset('storage/' . $image) }}">
                                @endif
                            </div>
                            <input wire:model="newImage" type="file" class="form-control">
                            @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input wire:model="is_trending" type="checkbox" class="form-check-input" id="trendingCheck">
                            <label class="form-check-label" for="trendingCheck">Trending</label>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function initSelect2() {
        let select = $('#tag_ids');

        // Destroy previous Select2 instance if exists
        if (select.hasClass("select2-hidden-accessible")) {
            select.select2('destroy');
        }

        // Reinitialize
        select.select2({
            placeholder: 'Select tags',
            allowClear: true
        }).on('change', function(e) {
            let data = $(this).val();
            @this.set('tag_ids', data);
        });
    }

    // Init after Livewire load and update
    document.addEventListener('livewire:init', initSelect2);
    document.addEventListener('livewire:navigated', initSelect2);

</script>
@endpush