    <!-- booking modal -->
    <div class="modal fade book-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">CONTACT INFO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form onsubmit="storeData(event)" class="book-form" id="bookForm">
                    <div class="modal-body" id="reservationOutput">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Mail" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pickup_address" placeholder="Pick up address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="hour" id="hour" class="form-control" required>
                                                <option value="">Hours</option>
                                                <option value="00">00</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="minute" id="minute" class="form-control" required>
                                                <option value="">Minute</option>
                                                <option value="00">00</option>
                                                <option value="05">05</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                                <option value="35">35</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55">55</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="dropof_address" class="form-control" id="dropof_address" placeholder="Drop of address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea rows="4" name="comment" id="comment" class="form-control" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="chqbox">
                                            <input type="checkbox" name="terms_condition" id="tc" required>
                                            <label for="tc" id="terms_condition">
                                                <a href="#" data-toggle="modal" data-target="#terms_condition_modal">
                                                    I have read and accepted rules of use
                                                </a>
                                            </label>
                                        </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary custom-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary custom-btn" id="bookButton">BOOK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal for terms & condition -->
    <div class="modal fade" id="terms_condition_modal" tabindex="-1" role="dialog" aria-labelledby="terms_condition_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Site Terms</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body terms-body">
                    <p class="Liste1"><span>1. General information</span>
                        <br>
                        <br><span>1.1. </span><a href="http://crm.moazzam.me/" target="_blank" rel="nofollow noopener" data-lynx-mode="hover" data-lynx-uri="https://facebook.com/">www.hellotrip.ge</a><span> is a portal for visitors of Georgia, helps users / visitors of the site - </span><a href="https://facebook.com/" target="_blank" rel="nofollow noopener" data-lynx-mode="hover">www.hellotrip.ge</a><span> choose a car with drivers and is a link between the user and tour operators. Accordingly, before purchasing services on the portal, all users / visitors to the site - </span><a href="https://facebook.com/" target="_blank" rel="nofollow noopener" data-lynx-mode="hover">www.hellotrip.ge</a><span> (hereinafter referred to as the “portal”) should familiarize themselves with the following rules (hereinafter referred to as the Terms of Use).</span>
                        <br>
                        <br><span>1.2 Failure to understand the terms of use of the site / portal does not relieve the user / visitor from fulfilling obligations arising from the order / purchase of the service.</span>
                        <br>
                        <br><span>2. Terms of use</span>
                        <br>
                        <br><span>2.1 A website is an online service that allows a user to find a tour operator and / or select preferred tours and select pre-planned tours that correspond to his interests and are described in detail on the website / portal.</span>
                        <br>
                        <br><span>2.2 Ordering services on the site means that the agreement between the client and the tour operator is automatically processed for the purchase of the service.</span>
                        <br>
                        <br><span>2.3 The client can pay for selected services directly to the tour operator after providing the service or pay the cost of the purchased service directly to the site owner ...</span>
                        <br>
                        <br><span>2.4 The site takes maximum care and monitors the efficiency of services of tour operators in terms of quality of service, but the site is not a party to the negotiations and, accordingly, the site does not bear any responsibility to the user after placing the order for services / services (purchases), and also does not accept any obligations for any damage that may arise from the tour operator.</span>
                        <br>
                        <br><span>2.5 The site and the site provider are not parties to the contract and after the user purchases the service through the site, he is not liable to the client.</span>
                        <br>
                        <br><span>2.6 If the user pays the maintenance fee through the Website / portal and if the tour operator does not provide services, and the user refuses to buy identical services from another tour operator (proposed by the site), the maintenance fee must be fully refunded by the User (except for the transfer fee)</span>
                        <br>
                        <br><span>2.7 The site is not responsible for the inaccuracy of the information published on the site by the tour operator, incompleteness and other similar circumstances;</span>
                        <br>
                        <br><span>2.8. The settlement of disagreements between the client and the tour operator is not the responsibility of the site, but the site reserves the right to help the user to solve the problem / disagreement.</span>
                        <br>
                        <br><span>3. Personal information</span>
                        <br>
                        <br><span>3.1 Information provided by the user: name, surname, telephone number, tour of the user of his choice and services (for the beginning and end of the address) and e-mail address. The user enters an order in CONTACT INFORMATION. The processed information is automatically sent to the tour operator for use for quality service exclusively for this order only, and from that moment on the services ordered until the end of the duties and / or services, the tour operator is responsible for accuracy and responsibility.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS script -->
    {{ Html::script('/frontend/js/jquery.min.js') }}
    {{ Html::script('/frontend/js/popper.min.js') }}
    {{ Html::script('/frontend/js/bootstrap.min.js') }}
    {{ Html::script('/frontend/js/functions.js') }}
    {{ Html::script('/frontend/js/owl.carousel.min.js') }}
    {{ Html::script('/frontend/js/slick.js') }}
    {{ Html::script('/frontend/js/swiper.min.js') }}
    {{ Html::script('/frontend/js/main.js') }}
    {{ Html::script('/frontend/js/jquery.fancybox.min.js') }}
    {{ Html::script('/frontend/js/bootstrap-datepicker.min.js') }}
    {{ Html::script('/frontend/js/jquery-ui.min.js') }}
    {{ Html::script('/frontend/js/select2.min.js') }}
    
    {{ Html::script('/frontend/js/custom.min.js') }}
</body>
</html>