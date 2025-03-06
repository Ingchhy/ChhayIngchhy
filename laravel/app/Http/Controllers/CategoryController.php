<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get /api/categories
    public function getCategories()
    {
        return ["message" => "Getting list of categories"];
    }

    // Post /api/categories
    public function createCategory(Request $request)
    {
        // You can add logic to create a category here
        return ["message" => "Creating 1 new category"];
    }

    // Get /api/categories/{categoryId}
    public function getCategory($categoryId)
    {
        // You can add logic to fetch a category by ID here
        return ["message" => "Getting 1 category based on the given categoryId"];
    }

    // Patch /api/categories/{categoryId}
    public function updateCategory(Request $request, $categoryId)
    {
        // You can add logic to update a category by ID here
        return ["message" => "Updating 1 category based on the given categoryId"];
    }

    // Delete /api/categories/{categoryId}
    public function deleteCategory($categoryId)
    {
        // You can add logic to delete a category by ID here
        return ["message" => "Deleting 1 category based on the given categoryId"];
    }
}
