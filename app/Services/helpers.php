<?php

use Illuminate\Contracts\Routing\UrlGenerator;


if (! function_exists('backendRedirect')) {
    /**
     * Get an instance of the redirector.
     *
     * @param  string|null  $to
     * @param  int     $status
     * @param  array   $headers
     * @param  bool    $secure
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    function backendRedirect($to = null, $status = 302, $headers = [], $secure = null)
    {
        if (is_null($to)) {
            return app('redirect');
        }
        $adminPrefix = config('misc.admin-prefix');
        $to = $adminPrefix . '/' . $to;
        return app('redirect')->to($to, $status, $headers, $secure);
    }
}

if (! function_exists('backendUrl')) {
    /**
     * Generate a url for the application.
     *
     * @param  string  $path
     * @param  mixed   $parameters
     * @param  bool    $secure
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function backendUrl($path = null, $parameters = [], $secure = null)
    {
        if (is_null($path)) {
            return app(UrlGenerator::class);
        }
        $adminPrefix = config('misc.admin-prefix');
        $path = $adminPrefix . '/' . $path;
        return app(UrlGenerator::class)->to($path, $parameters, $secure);
    }
}