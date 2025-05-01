<div class="card">

    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="m-0">All News</h5>
        <a href="#" class="btn btn-primary btn-sm"><i class="ri-add-line"></i> Add News</a>
    </div>

    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <label for="perPage" class="me-2">Show</label>
                <select wire:model.live="perPage" id="perPage" class="form-select d-inline-block w-auto">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
                <span class="ms-2">entries</span>
            </div>

            <div class="mb-3 w-25">
                <input type="text" wire:model.live="search" class="form-control" placeholder="Search News...">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">
                            <a href="#" wire:click.prevent="toggleSort('id')">ID
                                @if ($sortBy === 'id')
                                <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a>
                        </th>
                        <th class="text-center" style="width: 100px;">Image</th>
                        <th>
                            <a href="#" wire:click.prevent="toggleSort('title')">Name
                                @if ($sortBy === 'title')
                                <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a>
                        </th>
                        <th>Category</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Trending</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($newsList as $news)
                    <tr>
                        <td class="text-center">{{ $newsList->firstItem() + $loop->index }}</td>
                        <td class="text-center"><img src="{{ url('storage/' . $news->image) }}" alt="" style="width: 80px;"></td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->category?->name ?? '-' }}</td>
                        <td>{{ $news->user?->name ?? '-' }}</td>
                        <td>
                            <span class="badge bg-{{ $news->status === 'published' ? 'success' : 'secondary' }}">
                                {{ ucfirst($news->status) }}
                            </span>
                        </td>
                        <td>
                            @if($news->is_trending)
                            <span class="badge bg-warning text-dark">Yes</span>
                            @else
                            <span class="badge bg-light text-muted">No</span>
                            @endif
                        </td>
                        <td>{{ $news->published_at?->format('Y-m-d') ?? '-' }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="ri-edit-line"></i></a>
                            <button wire:click="delete({{ $news->id }})" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ri-delete-bin-line"></i></button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">No news found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $newsList->links() }}
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