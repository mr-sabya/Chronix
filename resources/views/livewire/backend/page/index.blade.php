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
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th wire:click="sortBy('title')" style="cursor:pointer">
                            Title
                            @if ($sortField === 'title')
                            @if ($sortDirection === 'asc') ↑ @else ↓ @endif
                            @endif
                        </th>
                        <th wire:click="sortBy('slug')" style="cursor:pointer">
                            Slug
                            @if ($sortField === 'slug')
                            @if ($sortDirection === 'asc') ↑ @else ↓ @endif
                            @endif
                        </th>
                        <th wire:click="sortBy('created_at')" style="cursor:pointer">
                            Created
                            @if ($sortField === 'created_at')
                            @if ($sortDirection === 'asc') ↑ @else ↓ @endif
                            @endif
                        </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pages as $page)
                    <tr>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('pages.manage', ['id' => $page->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                            <button wire:click="delete({{ $page->id }})" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this page?')">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="4">No pages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $pages->links() }}
        </div>
    </div>
</div>