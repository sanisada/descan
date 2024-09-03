<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\metadata_model;

class Metadata extends BaseController
{
    protected $metadataModel;

    public function __construct()
    {
        $this->metadataModel = new metadata_model();
    }

    public function index()
    {
        // Get search term from query string
        $search = $this->request->getVar('search');
        $search = trim($search); // Clean up the input
        
        // Determine the current page and rows per page
        $currentPage = $this->request->getVar('page_group') ?? 1;
        $rowsPerPage = 20; // Set the number of rows per page
    
        // Start building the query
        $query = $this->metadataModel->select('*');
    
        // Conditionally add the like() clauses if a search term is provided
        if (!empty($search)) {
            $query = $query->like('dataKey', $search)
                           ->orLike('label', $search)
                           ->orLike('definisi', $search);
        }
    
        // Execute the query with pagination
        $metadata = $query->paginate($rowsPerPage, 'group', $currentPage);
        $pager = $this->metadataModel->pager;

        // Prepare data to pass to the view
        $data = [
            'metadata' => $metadata,  // Pass the paginated metadata
            'pager' => $pager,        // Pass the pager object to the view
            'search' => $search,
            'currentPage' => $currentPage,
            'rowsPerPage' => $rowsPerPage,
        ];

        // Load the views with the data
        return view('templates/header', $data)
            . view('templates/menu', $data)
            . view('metadata/list', $data)  // Pass $data to include your metadata and pagination data
            . view('templates/footer', $data);
    }
}

