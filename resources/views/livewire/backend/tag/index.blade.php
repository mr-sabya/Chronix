<div class="">

    <div class="row">
        {{-- Form Section --}}
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header bg-white">
                    <h5 class="m-0">{{ $tagId ? 'Edit Tag' : 'Add Tag' }}</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <div class="mb-2">
                            <label>Name</label>
                            <input type="text" wire:model.lazy="name" class="form-control">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-2">
                            <label>Slug</label>
                            <input type="text" wire:model="slug" class="form-control">
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button class="btn btn-primary">{{ $tagId ? 'Update' : 'Create' }}</button>
                        <button type="button" wire:click="resetForm" class="btn btn-secondary">Clear</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="m-0">Tag List</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="w-25">
                            <input type="text" wire:model.live="searchTerm" class="form-control mb-3" placeholder="Search by Name">
                        </div>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <a href="#" wire:click.prevent="toggleSort('name')">Name
                                        @if ($sortBy === 'name')
                                        <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th>
                                    <a href="#" wire:click.prevent="toggleSort('slug')">Slug
                                        @if ($sortBy === 'slug')
                                        <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tags as $tag)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>
                                    <button wire:click="edit({{ $tag->id }})" class="btn btn-sm btn-primary"><i class="ri-edit-line"></i></button>
                                    <button wire:click="delete({{ $tag->id }})" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No Tags Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $tags->links() }}
                </div>
            </div>
        </div>

    </div>

    <!-- Modal for Deleting Tag -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Tag</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this tag? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="confirmDelete" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>