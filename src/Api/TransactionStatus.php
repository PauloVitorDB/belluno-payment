<?php

namespace BellunoApi\Api;

abstract class TransactionStatus {

    const TRANSACTION_PROCESSING_STATUS = [
        "AUTHORIZED",
        "IN_ANALYSIS"
    ];  

    const TRANSACTION_WAITING_STATUS = [
        "WAITING"
    ];  

    const TRANSACTION_ERROR_STATUS = [
        "DECLINED",
        "CANCELED"
    ];

    const TRANSACTION_PAID_STATUS = [
        "PAID"
    ];

    // PAID
    
    // OPEN
    // MANUAL_ANALYSIS
    // EXPIRED
    // CLIENT_MANUAL_ANALYSIS
    
    // INACTIVATED
    // EXPIRED_USER_ANALYSIS
    // REFUSED
    // CANCELLED

    public static function getAllowedTransactionCreditCardStatus() {
        return array_merge(self::TRANSACTION_WAITING_STATUS, self::TRANSACTION_PROCESSING_STATUS, self::TRANSACTION_PAID_STATUS);
    }

}