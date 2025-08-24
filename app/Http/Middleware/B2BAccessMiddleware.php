<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class B2BAccessMiddleware
{
    /**
     * Handle an incoming request.
     * 
     * This middleware checks if the authenticated customer is approved for B2B access.
     * If not approved, it redirects to account page with a message.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if customer is authenticated
        if (!auth()->guard('customer')->check()) {
            session()->flash('warning', 'Sie müssen sich anmelden, um Preise zu sehen und bestellen zu können.');
            return redirect()->route('shop.customer.session.index');
        }

        $customer = auth()->guard('customer')->user();

        // Check if customer is approved for B2B access
        if (!$customer->isApproved()) {
            // If accessing cart or checkout routes, redirect with message
            if ($request->routeIs(['shop.checkout.*', 'shop.cart.*'])) {
                session()->flash('warning', 'Ihr B2B-Zugang ist noch nicht freigeschaltet. Die Prüfung dauert in der Regel nicht mehr als 24 Stunden.');
                return redirect()->route('shop.customers.account.profile.index');
            }
            
            // For AJAX/API requests, return JSON response
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'B2B-Zugang noch nicht freigeschaltet.',
                    'status' => 'pending'
                ], 403);
            }
        }

        return $next($request);
    }
}
