<?php

namespace App\Http\Controllers;

use App\Services\ApiServiceInterface;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    private ApiServiceInterface $apiService;

    public function __construct(ApiServiceInterface $apiService)
    {
        $this->apiService = $apiService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * @throws GuzzleException
     */
    public function show($slug)
    {
        $data = $this->getData($slug, 'search.php?s=');
        return view('browse', compact('data'));
    }

    /**
     * @param $id
     * @param string $endpoint
     * @return array
     */
    protected function getData($id, string $endpoint): array
    {
        $data = $this->apiService->setEndpoint($endpoint . $id)
            ->getData();
        return $data['drinks'] ?? [];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $data = $this->getData($id, 'lookup.php?i=',);
        return view('list', compact('data'));
    }
}
