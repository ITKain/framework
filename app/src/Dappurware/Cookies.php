<?php

namespace App\Dappurware;

use Dflydev\FigCookies\FigRequestCookies;
use Dflydev\FigCookies\FigResponseCookies;
use Dflydev\FigCookies\SetCookie;
use Dflydev\FigCookies\Cookie;
use Carbon\Carbon;

class Cookies extends Dappurware
{
    // Get Response Cookie
    public function getResponseCookie($response, $name){

        $response = FigResponseCookies::get($response, $name);
        return $response;

    }

    // Set New Response Cookie
	public function setResponseCookie($response, $name, $value = true, $expiration = 0){

        if ($expiration == 0) {
            $expiration = 30; //Expire After 30 Days
        }else if (is_numeric($expiration)) {
            $expiration = $expiration;
        }else{
            $expiration = 1; //Default to One Day
        }

        $response = FigResponseCookies::set($response, SetCookie::create($name)
            ->withExpires(Carbon::parse()->timestamp + 60*60*24*$expiration)
            ->withValue($value)
        );

        return $response;
    }

    // Modify Response Cookie
    public function modifyResponseCookie($response, $name, $value = true, $expiration = 0){

        if ($expiration == 0) {
            $expiration = 30; //Expire After 30 Days
        }else if (is_numeric($expiration)) {
            $expiration = $expiration;
        }else{
            $expiration = 1; //Default to One Day
        }

        $modify = function (SetCookie $setCookie) {
            $value = $setCookie->getValue();

            // ... inspect current $value and determine if $value should
            // change or if it can stay the same. in all cases, a cookie
            // should be returned from this callback...

            return $setCookie
                ->withValue($value)
                ->withExpires($expiration)
            ;
        }

        $response = FigResponseCookies::modify($response, $name, $modify);

        return $response;
    }

    // Delete Response Cookie
    public function removeResponseCookie($response, $name){
        $response = FigResponseCookies::remove($response, $name);
        return $response;
    }

    // Get Reuqest Cookie
    public function getRequestCookie($request, $name){

        $request = FigRequestCookies::get($request, $name);
        return $request;

    }

    // Set New Request Cookie
    public function setRequestCookie($request, $name, $value = true){

        if (empty($name)) {
            return false;
        }else{
            $request = FigRequestCookies::set($request, Cookie::create($name, $value));
        }

        return $request;

    }

    // Modify Request Cookie
    public function modifyRequestCookie($request, $name, $value = true) {
        $modify = function (Cookie $cookie) {
            $value = $cookie->getValue();

            return $cookie->withValue($value);
        }

        $request = FigRequestCookies::modify($request, $name, $modify);

        return $request;
    }

    // Delete Request Cookie
    public function removeRequestCookie($request, $name){
        
        $request = FigRequestCookies::remove($request, $name);
        return $request;

    }

    
}