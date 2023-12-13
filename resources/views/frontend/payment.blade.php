@extends('frontend.layouts.master')
@section('title', __('about'))
@section('content')
<!--====== Start Payment Section ======-->
<section class="payment-section p-t-50 p-b-50 p-t-sm-30">
    <div class="container container-1278">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title m-b-15 m-b-md-15">
                            <h3>Payment Gateway</h3>
                        </div>
                    </div>
                </div>
                <div class="course-items-wrap m-b-20">
                    <div class="row course-items-v3 list-view">
                        <div class="col-md-12 col-sm-8">
                            <div class="course-item">
                                <a href="course-details.html" class="course-item-thumb">
                                    <img src="assets/img/course/course-list-thumbnail-10.jpg" alt="Course thumbnail">
                                </a>
                                <div class="course-item-body p-0">
                                    <div class="course-item-body-inner">
                                        <div class="course-item-header course-item-info justify-content-end">
                                            <ul class="course-category">
                                                <li>
                                                    <a href="#">Bangla</a>
                                                </li>
                                            </ul>
                                            <div class="rating-review">
                                                <span class="total-review"><i class="fas fa-star"></i> 4.5</span>
                                            </div>
                                        </div>
                                        <h4 class="title">
                                            <a href="#">Mathematics with Animated Lessons & Art Design with Video Courses</a>
                                        </h4>
                                        <ul class="course-item-info">
                                            <li><i class="fal fa-file-alt"></i> 45 Lessons</li>
                                            <li><i class="fal fa-user-friends"></i> 567 Enroll</li>
                                        </ul>
                                    </div>
                                    <div class="course-item-footer">
                                        <div class="course-price">$390.00</div>
                                        <ul>
                                            <li>
                                                <a href="course-details.html" class="template-btn">Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-methods m-b-md-30">                        
                    <div class="section-title m-b-15 m-b-md-15">
                        <h3>Select Payment</h3>
                    </div>
                    <div class="row payment-methods-list m-b-sm-0">
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="mercado-pago">
                                <label for="mercado-pago">
                                    <img src="assets/img/payment-methods/mercado-pago.svg" alt="Mercado Pago">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="gpay">
                                <label for="gpay">
                                    <img src="assets/img/payment-methods/gpay.svg" alt="GPay">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="skrill">
                                <label for="skrill">
                                    <img src="assets/img/payment-methods/skrill.svg" alt="Skrill">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="ammarpay">
                                <label for="ammarpay">
                                    <img src="assets/img/payment-methods/ammarpay.svg" alt="Ammarpay">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="iyzico">
                                <label for="iyzico">
                                    <img src="assets/img/payment-methods/iyzico.svg" alt="Iyzico">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="midtrans">
                                <label for="midtrans">
                                    <img src="assets/img/payment-methods/Midtrans.svg" alt="Midtrans">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="telr">
                                <label for="telr">
                                    <img src="assets/img/payment-methods/telr.svg" alt="Telr">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="payment-methods-item">
                                <input type="radio" name="radio" id="bkash">
                                <label for="bkash">
                                    <img src="assets/img/payment-methods/bkash.svg" alt="Bkash">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment-info-form">
                    <div class="section-title m-b-15 m-b-md-15">
                        <h3>Pay with Card</h3>
                    </div>
                    <form action="#" class="user-form">
                        <div class="user-form-input-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="name">Card Number</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="3254 3685 4521 7915">
                                </div>
                                <div class="col-sm-12">
                                    <label for="designation">Card Holder Name</label>
                                    <input type="text" class="form-control" name="designation" id="designation" placeholder="William Domain">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">VCC</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="38529">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Expire Date</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="09/23">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-10">
                                <button class="template-btn" type="submit">Pay Now <i class="fal fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Payment Section ======-->
@endsection
