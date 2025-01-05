<?php

Route::get('/', function () {  return view('site.index'); });
Route::get('/about-us', function () {  return view('site.about-us'); });
Route::get('/why-choose-us', function () {  return view('site.why-choose-us'); });
Route::get('/credentialing', function () {  return view('site.credentialing'); });
Route::get('/eligibility', function () {  return view('site.eligibility'); });
Route::get('/claim-submission', function () {  return view('site.claim-submission'); });
Route::get('/payment-posting', function () {  return view('site.payment-posting'); });
Route::get('/account-receivable', function () {  return view('site.account-receivable'); });
Route::get('/adjustment-and-adjudication', function () {  return view('site.adjustment-and-adjudication'); });
Route::get('/contact-us', function () {  return view('site.contact-us'); });