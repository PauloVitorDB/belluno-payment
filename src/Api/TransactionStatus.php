<?php

namespace BellunoApi\Api;

abstract class TransactionStatus {

    const TRANSACTION_PROCESSING_STATUS = [
        "OPEN",
        "PROCESSING",
    ];  
    
    const TRANSACTION_ANALYSIS_STATUS = [
        "CLIENT_MANUAL_ANALYSIS",
        "MANUAL_ANALYSIS",
        "USER_ANALYSIS"
    ];  

    const TRANSACTION_CLOSURE_STATUS = [
        "CLOSURE_BY_DEADLINE",
        "CLOSURE_BY_REQUEST",
        "CLOSURE_REQUESTED"
    ];  

    const TRANSACTION_ERROR_STATUS = [
        "EXPIRED",
        "INACTIVATED",
        "EXPIRED_USER_ANALYSIS",
        "REFUSED",
        "CANCELLED"
    ];

    const TRANSACTION_PAID_STATUS = [
        "PAID"
    ];

    public static function isAllowedFinishTransactionStatus($transaction_status) {

        $allowed_transactions_to_finish = array_merge(self::TRANSACTION_PROCESSING_STATUS, self::TRANSACTION_ANALYSIS_STATUS, self::TRANSACTION_PAID_STATUS);
    
        return (in_array((str_replace(' ', '_', trim(strtoupper($transaction_status)))), $allowed_transactions_to_finish));
    }

}