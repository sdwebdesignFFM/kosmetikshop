<?php

namespace App\Helpers;

class B2BHelper
{
    /**
     * Check if current customer can see prices.
     */
    public static function canSeePrices(): bool
    {
        if (!auth()->guard('customer')->check()) {
            return false;
        }

        return auth()->guard('customer')->user()->isApproved();
    }

    /**
     * Check if current customer can add to cart.
     */
    public static function canAddToCart(): bool
    {
        return self::canSeePrices();
    }

    /**
     * Check if current customer can proceed to checkout.
     */
    public static function canCheckout(): bool
    {
        return self::canSeePrices();
    }

    /**
     * Get customer B2B status message.
     */
    public static function getStatusMessage(): ?string
    {
        if (!auth()->guard('customer')->check()) {
            return 'Bitte melden Sie sich an, um Preise zu sehen und bestellen zu können.';
        }

        $customer = auth()->guard('customer')->user();

        if ($customer->isPending()) {
            return 'Ihr B2B-Zugang wird noch geprüft. Die Freigabe dauert in der Regel nicht mehr als 24 Stunden.';
        }

        if ($customer->isRejected()) {
            return 'Ihr B2B-Antrag wurde abgelehnt. Bei Fragen wenden Sie sich an unseren Kundenservice.';
        }

        return null;
    }

    /**
     * Get customer approval status.
     */
    public static function getApprovalStatus(): string
    {
        if (!auth()->guard('customer')->check()) {
            return 'guest';
        }

        return auth()->guard('customer')->user()->approval_status;
    }
}
