<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\{ElementProduct, ElementCategory, ServicePackage, Product, Service, SaasCompany};

class ApiController extends Controller
{
    public function category_wise_elements($slug = "")
    {
        $element_category = ElementCategory::where('slug', $slug)->first();

        $elements = ElementProduct::where('element_category_id', $element_category->id)->orderBy('id', 'desc')->take(16)->get();

        foreach($elements as $key => $element)
        {
            $res[$key]['id'] = $element->id;
            $res[$key]['product_id'] = $element->product_id;
            $res[$key]['element_category_id'] = $element->element_category_id;
            $res[$key]['title'] = $element->title;
            $res[$key]['price_type'] = $element->price_type;
            $res[$key]['price'] = $element->price;
            $res[$key]['like'] = $element->like;
            $res[$key]['thumbnail'] = element_server_url($element->product_id, $element->product_to_elementCategory->slug).$element->thumbnail;
            
        }

        $elements = $res;

        if (empty($elements)) {
            return response()->json(['status' => 'failed', 'message' => 'No data found'], 404);
        }

        return new JsonResponse(['status' => 'success', 'data' => $elements], 200);
    }

    public function product_wise_packages($slug = "")
    {
        $product = Product::where('slug', $slug)->first();
        $service_packages = ServicePackage::where('product_id', $product->id)->get();

        foreach($service_packages as $key => $service)
        {
            $res[$key]['id'] = $service->id;
            $res[$key]['name'] = $service->name;
            $active_package['product_id'] = $service->product_id;
            $active_package['product_slug'] = $service->servicePackage_to_product->slug;
            $res[$key]['price'] = $service->price;
            $res[$key]['discounted_price'] = $service->discounted_price != null ? $service->discounted_price : 0;

            $service_features = json_decode($service->services); 
            $res[$key]['service_features'] = $service_features;


            $res[$key]['int_val'] = 'one time';
            $res[$key]['interval_period_text'] = 'You will get the following';
            
        }

        $service_packages = $res;

        if (empty($service_packages)) {
            return response()->json(['status' => 'failed', 'message' => 'No data found'], 404);
        }

        $services = Service::where('product_id', $service->product_id)->get();

        // $oddServices = $services->filter(function ($value, $key) {
        //     $key = $key +1;
        //     return $key % 2 !== 0;
        // });

        // $evenServices = $services->filter(function ($value, $key) {
        //     $key = $key +1;
        //     return $key % 2 === 0;
        // });

        return new JsonResponse(['status' => 'success', 'data' => $service_packages, 'services' => $services], 200);
    }

    public function saas_company_check($slug = "")
    {
        $company_details = SaasComapny::where('company_slug', $slug)->first();

        if (empty($company_details)) {
            return response()->json(['status' => 'failed', 'message' => 'No data found'], 404);
        }

        return new JsonResponse(['status' => 'success', 'data' => $company_details], 200);
    }

    public function list() 
    {
        $element_htmls = ElementProduct::where('element_category_id', 9)->get();

        if (count($element_htmls) > 0) {
            // Build the JSON response structure
            $response = [
                'creativeelement' => [
                    'title' => 'Creative Elements',
                    'description' => 'No description No description No description No description No description No description No description No description No description',
                    'products' => [],
                ],
            ];

            // Populate the 'products' array
            foreach ($element_htmls as $elementHtml) {
                $response['creativeelement']['products'][$elementHtml->product_id] = [
                    'framework' => 'laravel',
                    'demo_url' => $elementHtml->previewUrl,
                    'title' => $elementHtml->title,
                    'description' => $elementHtml->summary,
                    'thumbnail' => element_server_url($elementHtml->product_id, $elementHtml->product_to_elementCategory->slug).$elementHtml->thumbnail,
                    'documentation' => 'https://creativeitem.com/docs/elements/what-is-creative-elements-videos',
                    'youtube' => 'https://www.youtube.com/playlist?list=PLR1GrQCi5Zqvhh7wgtt-ShMAM1RROYJgE',
                    'buy_now' => url('elements/product/'.$elementHtml->id),
                ];
            }

            // Return the JSON response
            return response()->json($response, 200);
        } else {
            return response()->json([
                'message' => 'No html product found!',
            ], 400);
        }
    }

}