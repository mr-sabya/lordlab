<div class="row">
    <div class="col-lg-4 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">

                <h4 class="mb-0">{{ $addData ? 'Add' : ($updateData ? 'Update' : '') }} {{ $page }}</h4>


            </div>
            <div class="card-body">
                <form action="">
                    @if($category)
                    <input type="hidden" wire:model="categoryId">
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ $page }} Title</label>
                        <input type="text" id="name" class="form-control" name="name" wire:model.live="name" placeholder="{{ $page }} Title">
                        @if($name == '')
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Slug</label>
                        <div class="input-group">
                            <span class="input-group-text" id="slug">https://example.com/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="slug" placeholder="{{ strtolower($page) }}-title" wire:model.live="slug" wire:click="generateSlug">
                        </div>
                        @if($slug == '')
                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" name="description" wire:model.live="description"></textarea>
                        @if($description == '')
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <label for="image" class="image-label">
                            <button type="button" class="btn btn-light rounded-0" wire:click="resetImage">
                                <i class="icon-refresh-ccw feather me-2"></i>Reset
                            </button>
                            <a href="javascript:void(0)" wire:click="openImageModal">
                                @if($image)
                                <img src="{{ getFileUrl($image) }}" />
                                
                                @else
                                <h4>Upload Image</h4>
                                @endif
                            </a>
                        </label>
                        @if($image == '')
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>



                    @if($addData)
                    <button wire:click.prevent="store()" class="btn btn-primary" type="submit">Create</button>
                    @elseif($updateData)
                    <div class="d-flex">
                        <button wire:click.prevent="update()" class="btn btn-primary" type="submit">Update</button>
                        <button wire:click.prevent="create()" class="btn btn-secondary ms-2" type="button">Cancel</button>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $page }} List</h4>

            </div>
            <div class="card-body">
                <x-backend.filter width="w-lg-50" />

                <div class="table-responsive table-card mt-0">
                    <table class="table mb-0 text-nowrap table-centered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">{{ $page }} Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <img src="{{ getFileUrl($category->image) }}" width="50" alt="">
                                </td>
                                <td>
                                    <h5 class="mb-0">{{ $category->name }}</h5>
                                </td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <button wire:click="edit({{$category->id}})" class="btn btn-primary btn-sm">
                                        <i class="icon-edit feather"></i>
                                    </button>
                                    <button wire:click="getDeleteId({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm">
                                        <i class="icon-trash-2 feather"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No {{ $page }} found!!</td>
                            </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $categories->links() }}
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="deleteModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">Are you sure want to delete?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-bs-dismiss="modal">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- media modal -->
        <div wire:ignore.self class="modal fade" id="mediaModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Select Media</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            @forelse($images as $image)
                            <div class="col-lg-3">
                                <a href="javascript:void(0)" wire:click="selectImage({{ $image->id }})" class="{{ $selectId == $image->id ? 'active' : '' }}" data-bs-dismiss="modal">
                                    <div class="media-card">
                                        <div class="media">
                                            <img src="{{ getFileUrl($image->image) }}" alt="">
                                        </div>
                                        <div class="title">
                                            <h5>{{ $image->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div class="col-lg-12">
                                <p>No Media Found!!</p>
                            </div>
                            @endforelse
                        </div>
                        {{ $images->links() }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script>
    document.addEventListener('livewire:init', function() {
        Livewire.on('open-modal', () => {
            $('#mediaModal').modal('show');
        });
    });
</script>