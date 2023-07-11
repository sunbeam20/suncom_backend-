<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Dialogflow\V2\QueryResult;
use App\Models\Product;
use App\Models\Category;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Get the Dialogflow request data
        $data = $request->json()->all();
        $queryResult = $data['queryResult'];
        
        // Process the query result
        $intent = $queryResult['intent']['displayName'];
        $parameters = $queryResult['parameters'];
        
        // Perform the necessary logic based on the intent and parameters
        $response = $this->handleIntent($intent, $parameters);
        
        // Return the response to Dialogflow
        return response()->json($response);
    }
    
    private function handleIntent($intent, $parameters)
    {
        // Implement your logic to handle different intents and parameters
        // Here's an example that returns a response based on product name, category, and price
        
        if ($intent === 'FindProduct') {
            $productName = isset($parameters['ProductNameEntities']) ? $parameters['ProductNameEntities'] : null;
            $categoryName = isset($parameters['CategoryEntities']) ? $parameters['CategoryEntities'] : null;
            $price = isset($parameters['price']['amount']) ? $parameters['price']['amount'] : null;
            
            // Prepare the query to search for products
            $query = Product::query();
            // Filter based on product name
            if ($productName) {
                $query->where('name', 'like', '%' . $productName . '%');
                    //->orWhere('description', 'like', '%' . $productName . '%');
            }
            
            // Filter based on category
            if ($categoryName) {
                $category = Category::where('name', 'like', '%' . $categoryName . '%')->first();
                if ($category) {
                    $query->where('category_id', $category->id);
                }
            }
            
            // Filter based on price
            if ($price) {
                $query->where('price', '<=', $price);
            }
            
            // Perform the search and retrieve the products
            $products = $query->get();
            
            if ($products->isEmpty()) {
                // If no products match the search criteria, provide an appropriate response
                $response = [
                    'fulfillmentText' => 'Sorry, I could not find any products matching your criteria.',
                ];
            } else {
                // Construct the response with product information
                $responseText = 'Here are some products that match your search:';
                
                foreach ($products as $product) {
                    $responseText .= "\n\nName: " . $product->name;
                    $responseText .= "\nCategory: " . $product->category->name;
                    $responseText .= "\nPrice: $" . $product->price;
                    
                }
                
                $response = [
                    'fulfillmentText' => $responseText,
                ];
            }
        } else {
            // If the intent is not recognized, provide a generic response
            $response = [
                'fulfillmentText' => "Sorry, I'm not sure what you're asking. Can you please rephrase your query?",
            ];
        }

        return $response;
    }
}
