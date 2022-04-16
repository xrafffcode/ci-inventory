<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Item;

class ItemController extends BaseController
{
     function __construct()
    {
        $this->item = new Item();
    }

    public function index()
    {        
	    $data['items'] = $this->item->findAll();

        return view('items/index', $data);
    }

    public function create()
    {
        $img = $this->request->getFile('image');
        $fileName = $img->getRandomName();

        $this->item->insert([
            'name' => $this->request->getPost('name'),
            'image' => $fileName,
            'stok' => $this->request->getPost('stok'),
        ]);

        $img->move('image_barang/', $fileName);
		return redirect('item')->with('success', 'Data Berhasil Ditambah');	
    }
    public function edit($id)
    {
        $items = new Item();
        $data['item'] = $items->where('id', $id)->first();

        $this->item->update($id, [
            'name' => $this->request->getPost('name'),
            'stok' => $this->request->getPost('stok'),
        ]);

        return redirect('item')->with('success', 'Data Berhasil Diubah');

        echo view('items/edit', $data);
    }
    public function delete($id)
    {
        $this->item->delete($id);

        return redirect('item')->with('success', 'Data Berhasil Dihapus');
    }
}
