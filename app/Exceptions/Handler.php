<?php

namespace App\Exceptions;

use Helldar\ApiResponse\Exceptions\Laravel\Seven\ApiHandler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

//    public function report(\Throwable $e)
//    {
//         parent::report($e);
//
//         if (app()->bound('notifex') && this.$this->shouldReport($e)) {
//             app('notifex')->send($e);
//         }
//    }
}
