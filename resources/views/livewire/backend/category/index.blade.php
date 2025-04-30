<div class="">

    <div class="row">
        {{-- Form Section --}}
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header bg-white">
                    <h5 class="m-0">{{ $categoryId ? 'Edit Category' : 'Add Category' }}</h5>
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

                        <div class="mb-2">
                            <label>Parent Category</label>
                            <select wire:model="parent_id" class="form-control">
                                <option value="">-- None --</option>
                                @foreach($allCategories as $parent)
                                <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-2">
                            <label>Icon</label>
                            <input type="text" id="icon-picker" wire:model="icon" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Image</label>
                            <div class="image-preview">
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}">
                                @elseif ($existingImage)
                                <img src="{{ asset('storage/' . $existingImage) }}">
                                @endif
                            </div>
                            <input type="file" wire:model="image" class="form-control">

                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button class="btn btn-primary">{{ $categoryId ? 'Update' : 'Create' }}</button>
                        <button type="button" wire:click="resetForm" class="btn btn-secondary">Clear</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Table Section --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="m-0">Category List</h5>
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
                                <th>Parent</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $cat)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->slug }}</td>
                                <td>{{ $cat->parent?->name ?? '—' }}</td>
                                <td>
                                    @if($cat->image)
                                    <img src="{{ asset('storage/' . $cat->image) }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{ $cat->id }})" class="btn btn-sm btn-primary"><i class="ri-edit-line"></i></button>
                                    <button wire:click="delete({{ $cat->id }})" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>
                            @foreach($cat->children as $subcate)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td class="ps-4">--- {{ $subcate->name }}</td>
                                <td>{{ $subcate->slug }}</td>
                                <td>{{ $subcate->parent?->name ?? '—' }}</td>
                                <td>
                                    @if($subcate->image)
                                    <img src="{{ asset('storage/' . $subcate->image) }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{ $subcate->id }})" class="btn btn-sm btn-primary"><i class="ri-edit-line"></i></button>
                                    <button wire:click="delete({{ $subcate->id }})" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No Category Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $categories->links() }}
                </div>
            </div>
        </div>

    </div>
    <!-- Modal for Deleting Category -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this category? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="confirmDelete" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>


</div>