<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvisoryItem;
use Illuminate\Support\Facades\File;
use Stevebauman\Location\Facades\Location;

class AdvisoryController extends Controller
{
    
    public function index()
    { 
        $items = AdvisoryItem::all();
        return view('admin.advisory.index', compact('items'));
    }

    public function create()
    {
        $advisoryItem = AdvisoryItem::all();
        return view('admin.advisory.create',compact('advisoryItem'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'content' => 'nullable|string',
        ]);

        // Create advisory directory if it doesn't exist
        $advisoryPath = public_path('assets/images/advisory/');
        if (!File::exists($advisoryPath)) {
            File::makeDirectory($advisoryPath, 0755, true);
        }

        // Handle image upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move($advisoryPath, $imageName);
        $imagePath = 'assets/images/advisory/'.$imageName;

        AdvisoryItem::create([
            'title' => $validated['title'],
            'image_path' => $imagePath,
            'description' => $validated['description'],
            'content' => $validated['content'] ?? 'null',
        ]);

        return redirect()->route('admin.advisory.index')->with('success', 'Item created successfully');
    }

    public function edit($id)
    {
        $advisoryItem = AdvisoryItem::find(decrypt($id));
        return view('admin.advisory.edit', compact('advisoryItem'));
    }

    public function update(Request $request, $id)
    {
        // Find the advisory item by ID
        $advisoryItem = AdvisoryItem::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'content' => 'required|string',
            'remove_image' => 'nullable|boolean'
        ]);

        // Handle image removal if checkbox is checked
        if ($request->has('remove_image') && $request->remove_image) {
            if ($advisoryItem->image_path && File::exists(public_path($advisoryItem->image_path))) {
                File::delete(public_path($advisoryItem->image_path));
            }
            $validated['image_path'] = null;
        }

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($advisoryItem->image_path && File::exists(public_path($advisoryItem->image_path))) {
                File::delete(public_path($advisoryItem->image_path));
            }

            // Upload new image
            $advisoryPath = public_path('assets/images/advisory/');
            if (!File::exists($advisoryPath)) {
                File::makeDirectory($advisoryPath, 0755, true);
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move($advisoryPath, $imageName);
            $validated['image_path'] = 'assets/images/advisory/'.$imageName;
        }

        $advisoryItem->update($validated);

        return redirect()->route('admin.advisory.index')
                    ->with('success', 'Advisory item updated successfully');
    }

    public function destroy( $id)
    {
         // Find the advisory item by ID
        $advisoryItem = AdvisoryItem::findOrFail(decrypt($id));

        // Delete associated image
        if ($advisoryItem->image_path && File::exists(public_path($advisoryItem->image_path))) {
            File::delete(public_path($advisoryItem->image_path));
        }
        
        $advisoryItem->delete();
        return redirect()->route('admin.advisory.index')->with('success', 'Item deleted successfully');
    }

}