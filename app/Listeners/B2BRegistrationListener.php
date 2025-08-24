<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\B2BRegistrationNotification;
use Webkul\Customer\Models\Customer;

class B2BRegistrationListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        // Check if this is a customer registration event
        if (isset($event->customer) && $event->customer instanceof Customer) {
            $customer = $event->customer;
            
            // Only send B2B registration notification if customer uploaded business document
            if ($customer->business_document && $customer->approval_status === 'pending') {
                try {
                    // Send email to admin
                    $adminEmail = env('ADMIN_MAIL_ADDRESS', 'admin@kosmetikerin.org');
                    Mail::to($adminEmail)->send(new B2BRegistrationNotification($customer));
                    
                    \Log::info('B2B registration notification sent for customer: ' . $customer->email);
                } catch (\Exception $e) {
                    \Log::error('Failed to send B2B registration notification: ' . $e->getMessage());
                }
            }
        }
    }
}
