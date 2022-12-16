<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;
use App\Models\DesignModel;
class ProductController extends BaseController
{
    public function product_list()
    {
        $product = new ProductModel();
        $data['products'] = $product -> findAll();
        return view('admin_dashboard/product_list', $data);
    }

    public function product_category()
    {
        $category = new ProductCategoryModel();
        $data['category'] = $category->findAll();
        return view('admin_dashboard/product_category', $data);
    }

    public function addcategory()
    {
        $category =new ProductCategoryModel();

        $data = [
            'category_name' => $this->request->getPost('category_name'),
        ];

        $category->save($data);
        return redirect()->to('product_category')->with('success', 'Category added.');
    }


    public function create()
    {
        return view('admin_dashboard/product_create');
    }

    public function save()
    {
        $product =new ProductModel();
        $file = $this->request->getFile('image');

        if($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];

        $product->save($data);
        return redirect()->to('product_list')->with('success', 'Product has been saved.');
    }

    public function edit($id)
    {
        $product = new ProductModel();
        $data['product'] = $product -> find($id);
        return view('admin_dashboard/product_edit', $data);
    }

    public function update($id)
    {
        $product = new ProductModel();
        $product_item = $product->find($id);
        $old_img_name = $product_item['image'];
     //  echo $product_item['image'];
        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            if(file_exists("uploads/". $old_img_name)){
                unlink("uploads/". $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        else{
            $imageName = $old_img_name;
        }

        $data = [
            'category' => $this->request->getPost('category'),
            'product_name' => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];

        $product->update($id, $data);
        return redirect()->to('product_list')->with('success', 'Product has been updated.');
    }

    public function delete($id)
    {
        $product = new ProductModel();

        $data = $product->find($id);
        $imagefile = $data['image'];

        if(file_exists("uploads/".$imagefile))
        {
            unlink("uploads/".$imagefile);
        }

        $product->delete($id);
        return redirect()->to('product_list')->with('success', 'Product and Image has been deleted.');
    }

    public function design_list()
    {
        $designs = new DesignModel();
        $data['designs'] = $designs->findAll();
        return view('admin_dashboard/design_list', $data);
    }

    public function design_create()
    {
        return view('admin_dashboard/design_create');
    }

    public function design_save()
    {
        $designs =new DesignModel();
        $file = $this->request->getFile('image');

        if($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('designs/', $imageName);
        }

        $data = [
            'design_name' => $this->request->getPost('design_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];

        $designs->save($data);
        return redirect()->to('design_list')->with('success', 'Design has been saved.');
    }

    public function design_edit($id)
    {
        $designs = new DesignModel();
        $data['designs'] = $designs -> find($id);
        return view('admin_dashboard/design_edit', $data);
    }

    public function design_update($id)
    {
        $designs = new DesignModel();
        $product_item = $designs->find($id);
        $old_img_name = $product_item['image'];
     //  echo $product_item['image'];
        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            if(file_exists("designs/". $old_img_name)){
                unlink("designs/". $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('designs/', $imageName);
        }
        else{
            $imageName = $old_img_name;
        }

        $data = [
            'design_name' => $this->request->getPost('design_name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];

        $designs->update($id, $data);
        return redirect()->to('design_list')->with('success', 'Design has been updated.');
    }
    
}
  