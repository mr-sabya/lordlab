<?php

namespace App\Livewire\Backend\Portfolio;

use App\Models\Category as ModelsCategory;
use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $page = "Category", $addData = true, $updateData = false, $uploadImage = true, $deleteId, $shortby = "id", $short = "DESC", $search = "";
    // page field
    public $name, $slug, $image, $description, $categoryId, $category, $selectId;


    public function clearShort()
    {
        $this->shortby = "id";
        $this->short = "DESC";
    }

    /**
     * generate slug
     * @return void
     */
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {
        if ($this->category) {
            if ($this->category->image != '') {
                $this->image = $this->category->image;
            }
        }

        $this->selectId = '';
        $this->image = '';
    }

    public function openImageModal()
    {
        $this->dispatch('open-modal');
    }

    public function selectImage($id)
    {
        $image = Media::find($id);
        $this->selectId = $image->id;
        $this->image = $image->image;
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->slug = '';
        $this->image = '';
        $this->description = '';
    }


    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addData = true;
        $this->updateData = false;
    }




    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string|max:255',
        ]);

        try {

            if ($this->image) {
                $file_name = $this->image;
            } else {
                $file_name = null;
            }


            ModelsCategory::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $file_name,
                'type' => 1,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);

            $this->resetFields();
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $category = ModelsCategory::findOrFail($id);
            $this->category = $category;

            $this->name = $category->name;
            $this->slug = $category->slug;
            $this->image = $category->image;
            $this->description = $category->description;
            $this->categoryId = $category->id;

            $this->selectId = '';
            $this->updateData = true;

            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }



    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $category = ModelsCategory::find($this->categoryId);

        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'description' => 'nullable|string|max:255',
        ]);

        try {

            if ($this->image) {
                $file_name = $this->image;
            } else {
                $file_name = $category->image;
            }

            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $file_name,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);

            $this->resetFields();
            $this->updateData = false;
            $this->addData = true;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    public function getDeleteId($id)
    {
        $this->deleteId = $id;
    }


    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete()
    {
        try {
            $category = ModelsCategory::find($this->deleteId);
            $category->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.portfolio.category', [
            'categories' => ModelsCategory::search('name', $this->search)->where('type', 1)->orderBy($this->shortby, $this->short)->paginate(12),
            'images' => Media::where('type', 1)->orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
