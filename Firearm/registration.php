<?php
/**
 * Registration.php
 *
 *  Registers Module in Magento
 *
 * Dhruvi_Firearm => Dhruvi is Vendor and Firearm is Module
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Dhruvi_Firearm',
    __DIR__
);
